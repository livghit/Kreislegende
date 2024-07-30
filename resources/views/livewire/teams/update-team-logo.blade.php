<div>
    <x-section-border />

    <x-form-section submit="updateTeamLogo">
        <x-slot name="title">
            {{ __('Team Logo') }}
        </x-slot>

        <x-slot name="description">
            {{ __('The team\'s Logo. Please provide an URL to the Image') }}
        </x-slot>

        <x-slot name="form">
            <!-- Team Name -->
            <div class="col-span-6 sm:col-span-4">
                <x-label for="name" value="{{ __('Logo ') . $team->name }}" />

                <x-input id="name" type="text" class="mt-1 block w-full" wire:model="logo_url"
                    placeholder="Image URL" :disabled="!Gate::check('update', $team)" />

                <x-input-error for="name" class="mt-2" />

                @error('logo_url')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            @if (session()->has('status'))
                <x-popup message="{{ session('status') }}" />
            @endif

        </x-slot>

        @if (Gate::check('update', $team))
            <x-slot name="actions">
                <x-action-message class="me-3" on="saved">
                    {{ __('Saved.') }}
                </x-action-message>

                <x-button>
                    {{ __('Save') }}
                </x-button>
            </x-slot>
        @endif
    </x-form-section>

</div>
