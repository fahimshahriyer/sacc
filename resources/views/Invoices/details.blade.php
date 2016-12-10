@extends('layouts.main')
@section('title', 'Create an Invoice')

@section('content')
    <div class="card elevated">
        <div id="invoice" class="uk-margin-top">
            <h2 class="uk-text-center uk-margin-large-bottom">Invoice</h2>
            <div class="uk-block uk-block-muted">
                <div class="uk-container">
                    <div class="uk-flex uk-flex-space-between">
                        <div>
                            <p class="uk-h4">South Asian College, Chittagong</p>
                            <p><a href="www.sacc.edu.bd/" target="_blank" class="uk-link-muted">www.sacc.edu.bd/</a></p>
                            <p>
                                130, Chatteswari Road <br>
                                Chalkbazar, Chittagong <br>
                                Bangladesh
                            </p>
                            <p>Phone: 2856677 , Mobile: 01777-775789</p>
                        </div>
                        <div>
                            <p class="h4 uk-text-bold">Invoice no: #{{ $invoice->invoice_no }}</p>
                            <p class="h5">Date: {{$invoice->invoice_date->toFormattedDateString()}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <table class="uk-table uk-table-striped">
                <thead>
                <tr>
                    <th style="width: 30px;">#</th>
                    <th>Description</th>
                    <th style="width: 60px;">Quantity</th>
                    <th style="width: 90px;">Amount</th>
                    <th style="width: 140px;">Total</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($items as $index=>$item)
                        <tr>
                            <td>{{++$index}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->amount}}</td>
                            <td>{{$item->total}}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="4" class="uk-text-right"><strong>Subtotal</strong></td>
                        <td>{{$invoice->sub_total}}</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="uk-text-right"><strong>Adjustment</strong></td>
                        <td>{{$invoice->total_adjustment}}</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="uk-text-right"><strong>Grand Total</strong></td>
                        <td><strong>{{$invoice->grand_total}}</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection