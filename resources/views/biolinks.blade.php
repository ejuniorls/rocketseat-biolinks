<div>

    <h2>User {{ $user->name }} :: {{ $user->id }}</h2>

    <ul>
        @foreach($user->links as $link)
            <li>
                <a href="{{ $link->link }}" target="_blank">{{ $link->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
