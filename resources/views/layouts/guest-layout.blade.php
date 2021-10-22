<main class="w-100 text-prime">
<x-card>
    <x-card-left>
        <x-logo class="m-auto" width="100"/>
    </x-card-left>
    <x-card-right>
        <x-form action="/edit">
            <x-input id="name" type="text" label="Name:"/><br>
            <x-input id="email" type="text" label="E-Mail"/><br>
            <x-input id="password" type="password" label="Password"/><br>
            <x-input id="passwordRepeat" type="password" label="Password" placeholder="asdasdasd"/><br>
            <br>
            <div class="text-center">
                <x-button type="submit" text="Login"/>
            </div>
        </x-form>
    </x-card-right>
</x-card>
</main>

