<x-guest-layout>
    <div class="content">

        <div class="text">
            Login
        </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <div class="link_social">
        <a href="#" class="link_butn facebook"><span class="icon-facebook-f"></span>Login with Facebook</a>
    </div>
    <div class="link_social">
        <a href="{{route('auth.google')}}" class="link_butn google"><span class="icon-google"></span>Login with Google</a>
    </div>
    <div class="link_social">
        <a href="#" class="link_butn"><span class="icon-github"></span>Login with Github</a>
    </div>
    <h3 class="or">------------------------OR----------------------</h3>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form_group">
            <div class="field">
                <input required="email" type="text" class="input" name="email">
                <span class="span"><svg class="" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 512 512" y="0" x="0" height="20" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg"><g><path class="" data-original="#000000" fill="#595959" d="M256 0c-74.439 0-135 60.561-135 135s60.561 135 135 135 135-60.561 135-135S330.439 0 256 0zM423.966 358.195C387.006 320.667 338.009 300 286 300h-60c-52.008 0-101.006 20.667-137.966 58.195C51.255 395.539 31 444.833 31 497c0 8.284 6.716 15 15 15h420c8.284 0 15-6.716 15-15 0-52.167-20.255-101.461-57.034-138.805z"></path></g></svg></span>
                <label class="label">Email</label>
            </div>
            @error('email')
                <div class="error">{{$message}}</div>
            @enderror
        </div>
        <div class="form_group">
            <div class="field">
                <input required="password" type="password" class="input" name="password">
                <span class="span"><svg class="" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 512 512" y="0" x="0" height="20" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg"><g><path class="" data-original="#000000" fill="#595959" d="M336 192h-16v-64C320 57.406 262.594 0 192 0S64 57.406 64 128v64H48c-26.453 0-48 21.523-48 48v224c0 26.477 21.547 48 48 48h288c26.453 0 48-21.523 48-48V240c0-26.477-21.547-48-48-48zm-229.332-64c0-47.063 38.27-85.332 85.332-85.332s85.332 38.27 85.332 85.332v64H106.668zm0 0"></path></g></svg></span>
                <label class="label">Password</label>
            </div>
            @error('password')
                <div class="error">{{$message}}</div>
            @enderror
        </div>
        <div class="remember_me">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="forgot_pass">
            @if (Route::has('password.request'))
             <a href="{{ route('password.request') }}">Forgot Password?</a>
            @endif
        </div>
        <button class="button">{{ __('Log in') }}</button>
        <div class="sign-up">
            Not a member?
            <a href="{{route('register')}}">signup now</a>
        </div>
    </form>
</div>
</x-guest-layout>
