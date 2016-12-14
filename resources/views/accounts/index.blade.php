@extends('layouts.main')
@section('title', 'Accounts')

@section('content')
    <div class="card elevated">
        <h2>Chart of All Accounts</h2>
        
        <table class="uk-table uk-table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Head No</th>
                    <th>Balance</th>
                    <th>Bank Balance</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection