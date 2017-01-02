@extends('layouts.main')
@section('title', 'Expense')

@section('content')
    <div class="card elevated">
        <div class="uk-flex uk-flex-space-between">
            <div><h2>Expense Transactions</h2></div>
            <div><a href="#" class="uk-button uk-button-primary">New</a></div>
        </div>
        <table class="uk-table uk-table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Transaction ID</th>
                    <th>Payee</th>
                    <th>Category</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection