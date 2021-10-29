<x-header pageTitle="User Control"/>
<main class="w-100 text-lightblue">


    <div class="container m-auto py-5 h-full flex ">
        <div class="w-full place-self-center -mt-3">
            <div class="w-8/12 m-auto px-5 mb-3 flex justify-between">
                <a href="/home"><x-icons.back-icon width="2rem"/></a>
                <a href="/user-edit"><x-icons.edit-icon width="2rem"/></a>
            </div>
            <x-card>
                <x-card-left>
                    <x-logo class="m-auto" width="100"/>
                </x-card-left>
                <x-card-right>
                    <div class="w-full">

                        <p>
                            Name: {{ $user->name }}
                        </p>
                        <p>
                            E-Mail: {{ $user->email }}
                        </p>
                        <p>
                            Joined: {{ $user->created_at }}
                        </p>
                        <p>
                            Role: {{ $user->roles[0]->name }}
                        </p>
                        <br>

                        <br>
                        <div class="text-center">
                            <a href="/change-password"><x-button class="bg-comp text-black" type="submit" text="Change Password"/></a>
                        </div>

                    </div>
                </x-card-right>
            </x-card>
        </div>
    </div>
</main>
<x-footer/>
