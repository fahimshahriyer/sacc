@extends('layouts.main')
@section('title', 'Create a Payplan')

@section('content')
	<div class="card elevated">
		<h2>Create a payplan</h2>
		<div class="uk-margin-large-top">
			<form class="uk-form">
			    <div class="uk-form-row">
			        <label class="uk-form-label" for="form-input-1">Payplan Name</label>
			        <div class="uk-form-controls uk-placeholder">
			            <input type="text" id="payplan-name" placeholder="Ex: Monthly Session 16-17" class="uk-width-1-1">
			        </div>
			    </div>
			    <div class="uk-form-row">
			    	<label for="" class="uk-form-label">Choose Type:</label>
			    	<div class="uk-form-controls">

					</div>
			    </div>
			</form>
		</div>
	</div>
@endsection