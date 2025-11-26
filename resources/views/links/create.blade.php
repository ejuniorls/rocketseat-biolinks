<div>
    {{ auth()->id() }}

    <h1>Create a link</h1>

    @if($mensagem = session()->get('mensagem'))
        <div>{{ $mensagem }}</div>
    @endif

    <form action="{{ route('links.create') }}" method="post" autocomplete="on">

        @csrf

        <div>
            <input type="text" name="link" id="link" placeholder="Link" value="{{ old('link') }}"
                   autocomplete="link">
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}" autocomplete="name">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <button type="submit">Save</button>
    </form>
</div>
