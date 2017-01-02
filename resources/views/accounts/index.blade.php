@extends('layouts.main')
@section('title', 'Accounts')

@section('content')
    <div class="card elevated">
        <div class="uk-flex uk-flex-space-between">
            <div><h2>Chart of All Accounts</h2></div>
            <div>
                <a href="#" class="uk-button">Run Report</a>
                <a href="{{ route('account.create') }}" class="uk-button uk-button-primary">New</a>
            </div>
        </div>
        
        <table class="uk-table uk-table-striped">
            <thead>
                <tr>
                    <th>Account Head</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Balance</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($accounts as $account)
                    <tr>
                        <td>{{ $account->account_head }}</td>
                        <td>{{ $account->name }}</td>
                        <td>{{ $account->type->name }}</td>
                        <td>{{ $account->description }}</td>
                        <td>{{ $account->current_balance }}</td>
                        <td>
                            <div class="uk-button-group">
                                <a href="{{ route('account.show', $account->id) }}" class="uk-button">Details</a>
                                <div data-uk-dropdown="{mode:'click'}">
                                    <a href="" class="uk-button"><i class="uk-icon-caret-down"></i></a>
                                    <div class="uk-dropdown uk-dropdown-small">
                                        <ul class="uk-nav uk-nav-dropdown">
                                            <li><a href="">Run Report</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="">Delete</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection