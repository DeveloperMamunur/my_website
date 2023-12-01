<section>
    <header  class="section_header">
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Admin Address Update') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update Admin Address") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('admin.address.update', Auth::guard('admin')->user()->id) }}" class="form">
        @csrf
        @method('put')

        <div class="form_group">
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="form_control" :value="old('address', $user->address)" required autofocus autocomplete="address" />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>
        <div class="form_group">
            <x-input-label for="city" :value="__('City')" />
            <x-text-input id="city" name="city" type="text" class="form_control" :value="old('city', $user->city)" required autofocus autocomplete="city" />
            <x-input-error class="mt-2" :messages="$errors->get('city')" />
        </div>
        <div class="form_group">
            <x-input-label for="country" :value="__('Country')" />
            <x-text-input id="country" name="country" type="text" class="form_control" :value="old('country', $user->country)" required autofocus autocomplete="country" />
            <x-input-error class="mt-2" :messages="$errors->get('country')" />
        </div>

        <div class="form_group">
            <button type="submit" class="butn butn_secondary">Save</button>

            @if (session('status') === 'admin-profile-updated')
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
