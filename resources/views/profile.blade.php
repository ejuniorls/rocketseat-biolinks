<x-layout.app>
    <x-layout.app>
        <x-layout.app>
            <x-container>
                <x-card title="Profile">
                    <x-form :route="route('profile')"
                            put
                            id="profile-form"
                            enctype="multipart/form-data">
                        <div class="flex gap-2 items-center">
                            <x-img src='/storage/{{ $user->photo }}' alt='Profile Picture'/>
                            <x-file-input name="photo"/>
                        </div>

                        <x-input name="name" id="name" placeholder=""
                                 value="{{ old('name',$user->name)}}"/>

                        <x-textarea name="description" id="description"
                                    value="{{ old('description',$user->description)}}"/>

                        <x-input name="handler" prefix="biolinks.com.br/" id="handler" placeholder="Handler"
                                 value="{{ old('handler',$user->handler)}}"/>
                    </x-form>

                    <x-slot:actions>
                        <x-a :href="route('dashboard')">Back to Dashboard</x-a>
                        <x-button type="submit" form="profile-form">Edite</x-button>
                    </x-slot:actions>
                </x-card>
            </x-container>
        </x-layout.app>
    </x-layout.app>
</x-layout.app>
