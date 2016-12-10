@extends('layouts.app')

@section('content')
<div class="uk-container uk-container-center">
    <div class="uk-width-5-10 uk-container-center">
        <div class="card uk-margin-large-top">
            <form class="uk-form uk-form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <fieldset data-uk-margin>

                    <legend>Login</legend>
                    <div class="uk-form-row">
                        <label for="email" class="uk-form-label">E-Mail Address</label>
                        <div class="uk-form-controls">
                            <input id="email" type="email" class="uk-width-1-1 uk-form-large" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="uk-form-row">
                        <label for="password" class="uk-form-label">Password</label>
                        <div class="uk-form-controls">
                            <input id="password" type="password" class="uk-width-1-1 uk-form-large" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <hr>

                    <div class="uk-form-row">
                        <div class="uk-form-controls">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="uk-form-row">
                        <div class="uk-form-controls">
                            <button type="submit" class="uk-button uk-button-primary uk-button-large">
                                Login
                            </button>

                            <a class="uk-button uk-button-link" href="{{ url('/password/reset') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
