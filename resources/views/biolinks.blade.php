<div>


    <img src="{{ asset('/storage/' . $user->photo) }}" alt="Profile photo">

    <h2>User {{ $user->name }} :: {{ $user->id }}</h2>

    <p>{{ $user->description }}</p>

    <ul>
        @foreach($user->links as $link)
            <li>
                <a href="{{ $link->link }}" target="_blank">{{ $link->name }}</a>
            </li>
        @endforeach
    </ul>
</div>
