@extends('layouts.main')
@section('title', 'Create a Payplan')

@section('content')
	<div class="card elevated">
		<h2>All Payplans</h2>

		<div class="uk-margin-large-top">
            <div class="uk-grid" data-uk-grid-margin>
                @foreach($payplans as $payplan)
                    <div class="uk-width-1-3">
                        <div class="uk-panel uk-panel-box uk-panel-box-secondary">
                            <h3>{{ $payplan->name }}</h3>
                            <p>{{ $payplan->description }}</p>

                            <a href="{{ route('payplan.show', $payplan->id) }}" class="uk-button uk-button-primary">Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
		</div>
	</div>
@endsection