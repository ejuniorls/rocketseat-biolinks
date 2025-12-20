<x-layout.app>



    <x-container>

        <div class="absolute top-10 left-10 flex flex-col gap-4">
            <x-button info :href="route('profile')">Update profile</x-button>
            <x-button outline :href="route('links.create')">Create a new link</x-button>
            <x-button error :href="route('logout')">Sair</x-button>

        </div>

        <div class="text-center space-y-2 text-base-200">
            <x-img src='/storage/{{ $user->photo }}' alt='Profile Picture'/>
            <div class="font-bold text-2xl tracking-winder">{{ $user->name }}</div>
            <div class="text-sm itelic opacity-80 mb-7">{{ $user->description }}</div>

            <ul class="space-y-2">
                @foreach ($links as $link )
                    <li class="flex justify-center items-center gap-2">

                        @unless($loop->last)
                            <x-form :route="route('links.down', $link)" patch >
                                <x-button ghost >
                                    <x-icons.down class="w-6 h-6" />
                                </x-button>
                            </x-form>
                        @else
                            <x-button disabled ghost> <x-icons.down class="w-6 h-6" /></x-button>
                        @endunless

                        @unless($loop->first)
                            <x-form :route="route('links.up', $link)" patch>
                                <x-button ghost>
                                    <x-icons.up class="w-6 h-6" />
                                </x-button>
                            </x-form>
                        @else
                            <x-button disabled ghost> <x-icons.up class="w-5 h-6" /></x-button>
                        @endunless


                        <x-button href="{{ route('links.edit', $link->id ) }}" block outline info >
                            {{ $link->name }}
                        </x-button>
                        <x-form :route="route('links.destroy', $link)" delete onsubmit="return confirm('Tem certeza que deseja Deletar? ')">
                            <x-button ghost>
                                <x-icons.trash class="w-6 h-6"/>
                            </x-button>

                        </x-form>


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
