<div>
    <h1>Dashboard</h1>

    @if($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif

    <ul>
        @foreach($links as $link)
            <li>
                <a href="{{ route('links.edit', $link) }}">{{ $link->name }}</a>
                <form action="{{ route('links.destroy', $link) }}" method="post" onsubmit="return confirm('are you sure?')">
                    @csrf
                    @method('DELETE')

                    <button>Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('links.create') }}">Create a Link</a>

</div>
