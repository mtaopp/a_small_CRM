<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\crm\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('crm.contacts', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crm.new-contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Contact $contact)
    {
        $request['tel'] = (string)preg_replace("/[^0-9]/", "", $request->tel);

        $validator = Validator::make($request->all(), [
            'firstname'     => 'required|string|max:255',
            'lastname'      => 'required|string|max:255',
            'adress'        => 'required|string|max:255',
            'house'         => 'required|string|max:255',
            'postcode'      => 'required|integer',
            'city'          => 'required|string|max:255',
            'tel'           => 'string',
            'email'         => 'required|email|unique:contacts,email,'.$contact,
        ]);


        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();


        //
        // Auth::user()->id;
        // dd($request);
        }
        $date = now();
        $cw = strftime('%V', $date->getTimestamp());

        $getcws = Contact::where('cw', $cw)->get() ;


        // dd (date("y").'-'.$cw.'-'.date("m").'-'.count($getcws)+1);



        $contact = Contact::create([
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'adress' => $request['adress'],
            'house' => $request['house'],
            'postcode' => $request['postcode'],
            'city' => $request['city'],
            'tel' => $request['tel'],
            'created_by' => Auth::user()->id,
            'email' => $request['email'],
            'cw' => $cw,
            'cid' => date("y").$cw.'-'.date("m").'-'.count($getcws)+1,
        ]);


        // return $user;

        return $this->show($contact->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\crm\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        $contact = Contact::findOrFail($id);

        return view('crm.contact', ['contact' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\crm\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\crm\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\crm\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
