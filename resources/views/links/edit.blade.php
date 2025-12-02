<div>
    <h1>Edit a link :: {{$link->name }}</h1>

    @if($mensagem = session()->get('mensagem'))
        <div>{{ $mensagem }}</div>
    @endif

    <form action="{{ route('links.edit', $link) }}" method="post" autocomplete="on">

        @csrf
        @method('put')

        <div>
            <input type="text" name="link" id="link" placeholder="Link" value="{{ old('link', $link->link) }}" autocomplete="link">
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name', $link->name) }}" autocomplete="name">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <button type="submit">Save</button>
    </form>
</div>
