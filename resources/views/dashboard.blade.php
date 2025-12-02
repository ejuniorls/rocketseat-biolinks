<div>
    <h1>Dashboard</h1>

    <h2>User {{ auth()->user()->name }} :: {{ auth()->id() }}</h2>

    @if($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif

    <a href="{{ route('links.create') }}">Create a Link</a>

    <ul>
        @foreach($links as $link)
            <li>
                <a href="{{ route('links.edit', $link) }}">
                    {{ $link->id }} . {{ $link->name }}
                </a>

                <form action="{{ route('links.destroy', $link) }}" method="post" onsubmit="return confirm('are you sure?')">
                    @csrf
                    @method('DELETE')

                    <button>Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
