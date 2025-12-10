<div>

    <h1>Profile</h1>

    @if($message = session()->get('message'))
        <div>{{ $message }}</div>
    @endif

    <form action="{{ route('profile') }}" method="post">

        @csrf
        @method('PUT')

{{--        <div>--}}
{{--            <input type="text" name="photo" id="photo" placeholder="Photo" value="{{ old('photo') }}">--}}
{{--            @error('photo')--}}
{{--            <span>{{ $message }}</span>--}}
{{--            @enderror--}}
{{--        </div>--}}

{{--        <br>--}}

        <div>
            <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name', $user->name) }}">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <textarea name="description" id="description" placeholder="Description">
                {{ old('description', $user->description) }}
            </textarea>
            @error('description')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <div>
            <span>biolinks.com.br/</span>
            <input type="text" name="handler" id="handler" placeholder="@seulink" value="{{ old('handler', $user->handler) }}">
            @error('handler')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>

        <a href="{{ route('dashboard') }}">Cancel</a>

        <br>

        <button>Update</button>
    </form>
</div>
