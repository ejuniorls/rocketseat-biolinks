<x-layout.app>
    <x-container>
        <x-card title="Register">
            <x-form :route="route('register')"
                    post id="register-form" >
                <x-input name="name" id="name" value="{{ old('name')}}" placeholder="Nome Completo"  />
                <x-input name="email" id="email" value="{{ old('email')}}" placeholder="E-mail"  />
                <x-input name="email_confirmation" id="email_confirmation"  placeholder="E-mail de Confirmação" />
                <x-input type="password" name="password" id="password" placeholder="Senha" />
            </x-form>
            <x-slot:actions>
                <x-a :href="route('login')">Already have an account?</x-a>
                <x-button type="submit" form="register-form">Register</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
