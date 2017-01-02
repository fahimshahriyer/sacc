@extends('layouts.main')
@section('title', 'Account')

@section('content')
	<div class="card elevated">
        <div class="uk-flex uk-flex-space-between">
            <div><h2>Create an account</h2></div>
            <div><a href="{{ route('account.create') }}" class="uk-button uk-button-primary">Add New</a></div>
        </div>

        @include('common.error')
        <form class="uk-form uk-form-horizontal uk-margin-large-top" role="form" method="POST" action="{{ url('account/') }}">
            {{ csrf_field() }}

            <!-- Account Name Form Input -->
                <div class="uk-form-row">
                    <label for="account_name" class="uk-form-label">Account name: </label>
                    <div class="uk-form-controls">
                        <input type="text" name="account_name" class="uk-form-large uk-width-1-2" placeholder="Account name"
                               value="{{ old('account_name') }}" required>
                    </div>
                </div>

            <!-- Account type Form Input -->
            <div class="uk-form-row">
                <label for="account_type" class="uk-form-label">Account Type: </label>
                <div class="uk-form-controls">
                    <select name="account_type" id="account_type" class="uk-form-large uk-width-1-2">
                        <option>Please Select</option>
                        @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Account head Form Input -->
            <div class="uk-form-row">
                <label for="account_head" class="uk-form-label">Account head: </label>
                <div class="uk-form-controls">
                    <input type="text" name="account_head" class="uk-form-large uk-width-1-2" placeholder="Account Head"
                           value="{{ old('account_head') }}">
                </div>
            </div>

            <!-- Account description Form Input -->
            <div class="uk-form-row">
                <label for="account_description" class="uk-form-label">Account Description: </label>
                <div class="uk-form-controls">
                    <input type="text" name="account_description" class="uk-form-large uk-width-1-2" placeholder="Account Description"
                           value="{{ old('account_description') }}" required>
                </div>
            </div>
            <!-- Opening Balance Form Input -->
            <div class="uk-form-row">
                <label for="opening_balance" class="uk-form-label">Opening Balance: </label>
                <div class="uk-form-controls">
                    <input type="number" name="opening_balance" class="uk-form-large uk-width-1-2" placeholder="Opening Balance"
                           value="0">
                </div>
            </div>
            <footer class="card-footer uk-margin-large-top">
                <button type="submit" class="uk-button uk-button-primary uk-button-large">Save</button>
                <a href="{{ url()->previous() }}" class="uk-button uk-button-large">Cancel</a>
            </footer>
        </form>
	</div>
@endsection