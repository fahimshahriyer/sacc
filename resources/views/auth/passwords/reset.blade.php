@extends('layouts.app')

@section('content')
<div class="uk-container uk-container-center">
    <div class="uk-width-5-10 uk-container-center">
        <div class="card uk-margin-large-top">
            <form class="uk-form uk-form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                {{ csrf_field() }}

                <fieldset>
                    <input type="hidden" name="token" value="{{ $token }}">

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

                    <div class="form-group">
                        <div class="uk-form-controls">
                            <button type="submit" class="btn btn-primary">
                                Reset Password
                            </button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
