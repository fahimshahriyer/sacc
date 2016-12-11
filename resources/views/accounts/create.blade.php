@extends('layouts.main')
@section('title', 'Create an Account')

@section('content')
	<div class="card elevated">
		<h2 class="uk-text-center">Create an Account</h2>
		<div class="uk-width-medium-6-10 uk-container-center">
			<form class="uk-form uk-form-stacked">
			    <div class="uk-form-row">
			        <label class="uk-form-label" for="form-input-1">Account Name</label>
			        <div class="uk-form-controls">
			            <input type="text" id="form-input-1" class="uk-width-1-1 uk-form-large" placeholder="Enter account name">
			        </div>
			    </div>
			    <div class="uk-form-row">
			        <label class="uk-form-label" for="form-input-1">Account Type</label>
			        <div class="uk-button-group" data-uk-button-radio>
	                    <button class="uk-button">Button</button>
	                    <button class="uk-button">Button</button>
	                    <button class="uk-button">Button</button>
	                </div>
			    </div>
			    <div class="uk-form-row">
			        <label class="uk-form-label" for="form-input-1">Account Head</label>
			        <div class="uk-form-controls">
			            <input type="text" id="form-input-1" class="uk-width-1-1 uk-form-large" placeholder="Head No">
			        </div>
			    </div>

			    <div class="uk-form-row">
			        <label class="uk-form-label" for="form-input-1">Account Head</label>
			        <div class="uk-form-controls">
			            <button type="submit" class="uk-button uk-button-primary uk-button-large">
                            Save
                        </button>
			        </div>
			    </div>
			</form>
		</div>
	</div>
@endsection