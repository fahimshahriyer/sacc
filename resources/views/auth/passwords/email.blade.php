@extends('layouts.app')

@section('content')
<div class="uk-container uk-container-center">
    <div class="uk-width-5-10 uk-container-center">
        <div class="card uk-margin-large-top">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form class="uk-form uk-form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                {{ csrf_field() }}

                <fieldset>
                    <div class="uk-form-row{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="uk-form-label uk-width-4-10">E-Mail Address</label>

                        <div class="uk-form-controls uk-width-6-10">
                            <input id="email" type="email" class="uk-width-1-1 uk-form-large" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="uk-form-row">
                        <div class="uk-form-controls">
                            <button type="submit" class="uk-button uk-button-primary">
                                Send Password Reset Link
                            </button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection
