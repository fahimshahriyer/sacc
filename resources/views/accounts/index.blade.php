@extends('layouts.main')
@section('title', 'Accounts')

@section('content')
    <div class="card elevated">
        <h2>All Accounts</h2>
        <ul class="uk-sortable uk-grid uk-grid-small uk-grid-width-1-4">
            <li class="uk-grid-margin">
                <div class="uk-panel uk-panel-box uk-panel-box-secondary">
                    <h3>Income Account</h3>
                    <p>
                        <strong>Type:</strong> Revenue <br>
                        <strong>Account Head:</strong> 101 <br>
                    </p>
                    <span class="uk-text-muted">Balance</span>
                    <h5 class="uk-text-bold">35,000</h5>
                </div>
            </li>
        </ul>

    </div>
@endsection