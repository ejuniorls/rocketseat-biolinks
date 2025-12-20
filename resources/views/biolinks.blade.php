<x-layout.app>
    <x-container>
        <div class="text-center space-y-2 text-base-200">
            <x-img src='/storage/{{ $user->photo }}' alt='Profile Picture'/>
            <div class="font-bold text-2xl tracking-winder">{{ $user->name }}</div>
            <div class="text-sm itelic opacity-80 mb-7">{{ $user->description }}</div>

            <ul class="space-y-2">
                @foreach ($user->links as $link )
                    <li class="flex justify-center items-center gap-2">

                        <x-button href="{{ $link->link }}" block outline info target="_blank">
                            {{ $link->name }}
                        </x-button>

                    </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>


{{--

<div class="text-white">

<h1>Dashboard</h1>
<h2>{{ auth()->user()->name }} :: {{ auth()->id() }}</h2>

<a href="{{ route('profile') }}">Atualizar Profile</a>

@if($message = session()->get('message'))
{{ $message }}
@endif

<a href="{{ route('links.create') }}">Cadastrar link Novo</a>

<ul>
@foreach ($links as $link )
<li style="display:flex;">
@unless($loop->last)
<form
    action="{{ route("links.down", $link) }}"
    method="post"
>
@csrf
@method('PATCH')

<button>DOWN</button>
</form>
@endunless

@unless($loop->first)
<form
    action="{{ route("links.up", $link) }}"
    method="post"
>
@csrf
@method('PATCH')

<button>UP</button>
</form>
@endunless


<a href="{{ route('links.edit', $link->id ) }}">
    {{ $link->id}} > {{ $link->name }}
</a>
<form
        action="{{ route("links.destroy", $link) }}"
        method="post"
        onsubmit="return confirm('Tem certeza que deseja Deletar? ')">
    @csrf
    @method('delete');

<button>DELETAR</button>

</form>
</li>
@endforeach
</ul>

</div>
--}}
