@extends('layouts.main')
@section('title', 'Fees')

@section('content')
    <div class="card elevated">
        <div class="uk-flex uk-flex-space-between">
            <h2>Fee details</h2>
            <div data-uk-margin="">
                <button class="uk-button"><i class="icon-mode-edit"></i> Edit</button>
                <button class="uk-button uk-button-danger"><i class="icon-delete"></i> Delete</button>
            </div>
        </div>
        <div class="uk-width-medium-1-2 uk-container-center uk-margin-large-top">
            <h3>Fee Name: <strong>{{ $fee->name }}</strong></h3>
            <p>Description: {{ $fee->description }}</p>
        </div>

        <table class="uk-table uk-table-striped uk-margin-large-top">
            <caption>Occurrences in various payplan and details:</caption>
            <thead>
            <tr>
                <th>#</th>
                <th>Payplan Name</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection