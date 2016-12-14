@extends('layouts.main')
@section('title', 'Payplan')

@section('content')
    <div class="card elevated">
        <h2>{{ $payplan->name }}</h2>
        <p>{{ $payplan->description }}</p>

    </div>
@endsection