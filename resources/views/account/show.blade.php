@extends('layouts.main')
@section('title', 'Create an Account')

@section('content')
	<div class="card elevated">
		<h2>Accounts</h2>
		<form class="uk-form uk-form-stacked">
		    <div class="uk-form-row">
		        <label class="uk-form-label" for="form-input-1">Account Name</label>
		        <div class="uk-form-controls">
		            <input type="text" id="form-input-1" class="uk-width-1-2 uk-form-large" placeholder="Text">
		        </div>
		    </div>
		</form>
	</div>
@endsection