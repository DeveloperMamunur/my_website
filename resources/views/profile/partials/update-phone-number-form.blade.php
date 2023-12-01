<section>
    <header  class="section_header">
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Phone Number Update') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your phone number") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('phone.update', Auth::user()->id) }}" class="form">
        @csrf
        @method('put')

        <div class="form_group">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" name="phone" type="text" class="form_control" :value="old('phone', $user->phone)" required autofocus autocomplete="phone" />
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>

        <div class="form_group">
            <button type="submit" class="butn butn_secondary">Save</button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
