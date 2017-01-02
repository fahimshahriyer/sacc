@extends('layouts.main')
@section('title', 'Fees')

@section('content')
    <div class="card elevated">
        <h2>Create New Fee for your institution.</h2>
        @include('common.error')
        <form class="uk-form uk-form-stacked" role="form" method="POST" action="{{ url('fee') }}">
            {{ csrf_field() }}
            <fieldset>
                <div class="uk-form-row">
                    <label for="name" class="uk-form-label">Fee Name</label>
                    <div class="uk-form-controls">
                        <input type="text" name="name" class="uk-form-large uk-width-1-2" placeholder="Fee Name" value="{{ old('name') }}" required>
                    </div>
                </div>
                <div class="uk-form-row">
                    <label for="name" class="uk-form-label">Fee Description (Optional)</label>
                    <div class="uk-form-controls">
                        <input type="text" name="description" class="uk-form-large uk-width-2-3" placeholder="Write a small description about the fee." value="{{ old('description') }}" required>
                    </div>
                </div>
            </fieldset>
            <footer class="card-footer uk-margin-large-top">
                <button type="submit" class="uk-button uk-button-primary uk-button-large">Save</button>
                <a href="{{ url()->previous() }}" class="uk-button uk-button-large">Cancel</a>
            </footer>
        </form>
    </div>
@endsection