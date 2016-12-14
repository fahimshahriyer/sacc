@extends('layouts.main')
@section('title', 'Fees')

@section('content')
    <div class="card elevated">
        <div class="uk-flex uk-flex-space-between">
            <div><h2>List of all academic fees</h2></div>
            <div><a href="{{ route('fee.create') }}" class="uk-button uk-button-primary">Add New</a></div>
        </div>
        <table class="uk-table uk-table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fees as $index => $fee)
                <tr>
                    <td>{{ ++$index }}</td>
                    <td>{{ $fee->name }}</td>
                    <td>{{ $fee->description }}</td>
                    <td>
                        <a href="{{ route('fee.show', $fee->id) }}" class="uk-button">Details</a>
                    </td>
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection