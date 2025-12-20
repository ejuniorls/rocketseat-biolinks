<x-layout.app>

    <x-layout.app>
        <x-container>
            <x-card title="Creating a link">
                <x-form :route="route('links.create')" post id="create-form-link">
                    <x-input name="link" id="link" value="{{ old('link') }}" placeholder="Link" />
                    <x-input  name="name" id="name"  placeholder="Nome para o Link" value="{{ old('name')}}" />
                </x-form>
                <x-slot:actions>
                    <x-a :href="route('dashboard')">Back to Dashboard</x-a>
                    <x-button type="submit" form="create-form-link">Save</x-button>
                </x-slot:actions>
            </x-card>
        </x-container>
    </x-layout.app>

</x-layout.app>
