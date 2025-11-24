<div>
    <h1>Register</h1>

    @if($mensagem = session()->get('mensagem'))
        <div>{{ $mensagem }}</div>
    @endif

    <form action="{{ route('register') }}" method="post" autocomplete="on">

        @csrf

        <div>
            <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}" autocomplete="name">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input type="text" name="email" id="email" placeholder="E-mail" value="{{ old('email') }}" autocomplete="email">
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input type="text" name="email_confirmation" id="email_confirmation" placeholder="E-mail Confirmation" autocomplete="email">
        </div>

        <div>
            <input type="password" name="password" id="password" placeholder="Senha"
                   autocomplete="new-password">
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Registrar</button>
    </form>
</div>
