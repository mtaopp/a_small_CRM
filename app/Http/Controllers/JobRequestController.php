<?php

namespace App\Http\Controllers;

use App\Models\crm\Contact;
use Illuminate\Http\Request;
use App\Models\crm\JobRequest;
use Facade\FlareClient\Http\Response;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

use function PHPUnit\Framework\matches;

class JobRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $contacts = Contact::all();
        $jobs = JobRequest::all();
        return view('crm.jobs', [
            'contacts' => $contacts,
            'jobs' => $jobs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {

        if(!is_null($id)) {
            return view('crm.choose-job', ['id' => $id]);
        } else {
            $contacts = Contact::all();
            return view('crm.choose-contact', ['contacts' => $contacts]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'typ'     => 'required',
            'cid'     => 'required | integer'
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $clean = 0;
        $move = 0;

        match($request->typ) {
          "0" => $clean = 1,
          "1" => $move = 1,
          "2" => $move = 1 | $clean = 1 ,
        };

        $job_id = $this->get_job_id($request->cid);
        $job = JobRequest::create([
            'contact_id' => $request->cid,
            'is_created' => $request->typ,
            'has_cleaning' => $clean,
            'has_moving' => $move,
            'job_id' => $job_id,

        ]);

        $this->formSelect($job->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\crm\JobRequest  $jobRequest
     * @return \Illuminate\Http\Response
     */
    public function show(JobRequest $jobRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\crm\JobRequest  $jobRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(JobRequest $jobRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\crm\JobRequest  $jobRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobRequest $jobRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\crm\JobRequest  $jobRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobRequest $jobRequest)
    {
        //
    }


    public function formSelect($job){
        //dd( $cid);
        $job = JobRequest::findOrFail($job);

        if($job->has_cleaning && $job->cleaning_id == null) {
            echo $job->cleaning_id;
                echo "<br>Clean Form <br>";
        }
        if($job->has_moving && $job->moving_id == null) {
            echo "Move Form <br>";
        }

        dd($job);
        return 'werwer';
    }

    public function get_job_id($cid, $jid = null)
    {
        $contact = Contact::findOrFail((int)$cid);

        if(!is_null($jid)) {
            $job_id = $jid+1;
        } else {
            $job_id = (int)$cid;
            $job_id = count(JobRequest::where('contact_id', $job_id)->get())+1;
        }

        $checkJobs = JobRequest::where('job_id', $contact->cid.$job_id)->get();

        if(isset($checkJobs['0'])) {
            return $this->get_job_id($cid, $job_id);
        } else {
            return $contact->cid.$job_id;
        }


    }
}
