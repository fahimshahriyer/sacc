@extends('layouts.app')

@section('content')
<div class="uk-container uk-container-center">
    <div class="uk-width-5-10 uk-container-center">
        <div class="card uk-margin-large-top">
            <form class="uk-form uk-form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                <fieldset data-uk-margin>

                    <legend>Register</legend>

                    <div class="uk-form-row">
                            <label for="name" class="uk-form-label">Name</label>

                            <div class="uk-form-controls">
                                <input id="name" type="text" class="uk-width-1-1 uk-form-large {{ $errors->has('name') ? ' uk-form-danger' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="uk-form-row">
                            <label for="email" class="uk-form-label">E-Mail Address</label>

                            <div class="uk-form-controls">
                                <input id="email" type="email" class="uk-width-1-1 uk-form-large {{ $errors->has('email') ? ' uk-form-danger' : '' }}" name="email" value="{{ old('email') }}" required>

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
                                <input id="password" type="password" class="uk-width-1-1 uk-form-large{{ $errors->has('password') ? ' uk-form-danger' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="uk-form-row">
                            <label for="password-confirm" class="uk-form-label">Confirm Password</label>

                            <div class="uk-form-controls">
                                <input id="password-confirm" type="password" class="uk-width-1-1 uk-form-large" name="password_confirmation" required>
                            </div>
                        </div>

                        <hr>
                        
                        <div class="uk-form-row">
                            <div class="uk-form-controls">
                                <button type="submit" class="uk-button uk-button-primary uk-button-large">
                                    Register
                                </button>
                            </div>
                        </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
