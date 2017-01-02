@extends('layouts.main')
@section('title', 'Payplans')

@section('content')
	<div class="card elevated">
		<h2>All Payplans</h2>
        <table class="uk-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th style="width: 200px;">Payplan Name</th>
                    <th>Description</th>
                    <th>Billing Cycle</th>
                    <th>Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payplans as $index => $payplan)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $payplan->name }}</td>
                        <td>{{ $payplan->description }}</td>
                        <td>{{ $payplan->billing_cycle }}</td>
                        <td>NULL</td>
                        <td>
                            <div class="uk-button-group">
                                <a href="{{ route('payplan.show', $payplan->id) }}" class="uk-button">Details</a>
                                <div data-uk-dropdown="{mode:'click'}">
                                    <button class="uk-button"><i class="uk-icon-caret-down"></i></button>
                                    <div class="uk-dropdown uk-dropdown-small uk-dropdown-bottom">
                                        <ul class="uk-nav uk-nav-dropdown">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Delete</a></li>
                                            <li class="uk-nav-header">Others</li>
                                            <li><a href="#">History</a></li>
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