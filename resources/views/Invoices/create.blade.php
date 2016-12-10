@extends('layouts.main')
@section('title', 'Create an Invoice')

@section('content')
    <div class="card elevated">
        <div id="invoice" class="uk-margin-top">
            <h1>Invoice</h1>
            <table class="uk-table uk-table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection