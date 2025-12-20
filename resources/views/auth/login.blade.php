<x-layout.app>
    <x-container>
        <x-card title="Login">
            <x-form :route="route('login')" post id="login-form">
                <x-input name="email" id="email" value="{{ old('email') }}" placeholder="E-mail" />
                <x-input type="password" name="password" id="password"  placeholder="Senha" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('register')">I need to create a new account!</x-a>
                <x-button type="submit" form="login-form">Login</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
