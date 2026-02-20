<x-dashboard-app-blank title="Login">
    <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white">
        <div class="my-auto authentication-pages">
            <img src="{{ config('dashboard-ui.logo.default') }}"
                class=" m-0 mb-4"
                alt="logo">

            {!! $slot !!}
        </div>
    </div>

    {{-- form itself --}}
    <div class="p-5 wd-md-50p">
        <form method="POST"
            action="{{ $attributes->get('action', '#') }}">
            <div class="main-signin-header">
                <h2>{{ $attributes->get('title', '') }}</h2>
                <h4>{{ $attributes->get('subtitle', '') }}</h4>
                @csrf
                <div class="form-group">
                    <label>{{ __('dashboard::auth.email') }}</label>
                    <input name="{{ $attributes->get('email-input-name', 'email') }}"
                        class="form-control @error($attributes->get('email-input-name', 'email')) is-invalid @enderror"
                        placeholder="Enter your email"
                        type="email"
                        value="{{ old('email') }}"
                        autocomplete="email"
                        autofocus
                        required>

                    @error('email')
                        <span class="invalid-feedback"
                            role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>{{ __('dashboard::auth.password') }}</label>
                    <input name="{{ $attributes->get('password-input-name', 'password') }}"
                        class="form-control @error($attributes->get('password-input-name', 'password')) is-invalid @enderror"
                        placeholder="Enter your password"
                        type="password"
                        autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback"
                            role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="ckbox"
                        for="checkbox-signin">
                        <input type="checkbox"
                            id="checkbox-signin"
                            name="{{ $attributes->get('remember-checkbox-name', 'remember') }}"
                            {{ old('remember') ? 'checked' : '' }}>
                        <span>{{ trans('dashboard::auth.remember_me') }}</span>
                    </label>
                </div>

                <button class="btn btn-main-primary btn-block"
                    type="submit"> {{ __('dashboard::auth.login') }}</button>
            </div>
            <div class="main-signin-footer mt-3 mg-t-5">
                {{-- <p><a href="">Forgot password?</a></p> --}}

                {{-- <p>Don't have an account? <a href="{{ url('page-signup') }}">Create an Account</a></p> --}}
            </div>
        </form>
    </div>
</x-dashboard-app-blank>
