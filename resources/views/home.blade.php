@extends('layouts.main')
@section('title','Home')
@section('content')
    <div class="uk-grid">
        <div class="uk-width-1-1">
            <div class="card elevated">
                <div class="uk-grid uk-grid-width-1-4" data-uk-grid-margin="">
                    <ul class="home-navigation">
                        <li class="home-navigation-header">Transaction</li>
                        <li><a href="{{ route('payment.create') }}" class="nav-link">Take Payment</a></li>
                        <li><a href="#" class="nav-link">New Expense</a></li>
                        <li><a href="{{ route('payplan.index') }}" class="nav-link">New Deposit</a></li>
                        <li><a href="" class="nav-link">Transaction History</a></li>
                    </ul>

                    <ul class="home-navigation">
                        <li class="home-navigation-header">Payplan</li>
                        <li><a href="{{ route('fee.create') }}" class="nav-link">New Fee</a></li>
                        <li><a href="{{ route('fee.index') }}" class="nav-link">Fee List</a></li>
                        <li><a href="{{ route('payplan.create') }}" class="nav-link">New Payplan</a></li>
                        <li><a href="{{ route('payplan.index') }}" class="nav-link">All Payplan</a></li>
                        <li><a href="#" class="nav-link">Manage Subscriptions</a></li>
                        <li><a href="#" class="nav-link">Adjust Student Subscription</a></li>
                    </ul>

                    <ul class="home-navigation">
                        <li class="home-navigation-header">Income</li>
                        <li><a href="{{ route('invoice.create') }}" class="nav-link">New Invoice</a></li>
                        <li><a href="{{ route('invoice.index') }}" class="nav-link">All Invoices</a></li>
                        <li><a href="" class="nav-link">Manage Invoices</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection