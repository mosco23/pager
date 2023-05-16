<form action="{{ route('voyager.login') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group form-group-default" id="emailGroup">
        <label>{{ __('voyager::generic.email') }}</label>
        <div class="controls">
            <input type="text" name="email" id="email" value="{{ old('email') }}"
                placeholder="{{ __('voyager::generic.email') }}" class="form-control" required>
        </div>
    </div>
    <div class="form-group form-group-default" id="passwordGroup">
        <label>{{ __('voyager::generic.password') }}</label>
        <div class="controls">
            <input type="password" name="password" placeholder="{{ __('voyager::generic.password') }}"
                class="form-control" required>
        </div>
    </div>
    <div class="form-group" id="rememberMeGroup">
        <div class="controls">
            <input type="checkbox" name="remember" id="remember" value="1">
            <label for="remember" class="remember-me-text">{{ __('voyager::generic.remember_me') }}</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block login-button">
        <span class="signin">{{ __('voyager::generic.login') }}</span>
    </button>
</form>
