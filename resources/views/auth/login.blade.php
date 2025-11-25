<div>
    {{ auth()->id() }}

    <h1>Login</h1>

    @if($mensagem = session()->get('mensagem'))
        <div>{{ $mensagem }}</div>
    @endif

    <form action="{{ route('login') }}" method="post">

        @csrf

        <div>
            <input type="text" name="email" id="email" placeholder="E-mail" value="{{ old('email') }}">
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <input type="password" name="password" id="password" placeholder="Senha">
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <button>Logar</button>
    </form>
</div>
