@extends('layouts.main')
@section('title', 'Create an Invoice')

@section('content')
    <div class="card elevated">
        <div class="uk-margin-top">
            <div class="uk-flex uk-flex-right">
                <div class="uk-button-group">
                    <button class="uk-button"><i class="icon-mode-edit"></i> Edit</button>
                    <button class="uk-button"><i class="icon-print"></i> Print</button>
                </div>
            </div>
        </div>
        <div id="invoice" class="uk-margin-top">
            <div class="uk-block uk-block-muted">
                <div class="uk-container">
                    <h2 class="uk-text-center uk-margin-large-bottom">Student Payment Invoice</h2>
                    <div class="uk-flex uk-flex-space-between">
                        <div>
                            <p><strong>From:</strong></p>
                            <p class="uk-h4">South Asian College, Chittagong</p>
                            <p><a href="http://www.sacc.edu.bd/" target="_blank" class="uk-link-muted">www.sacc.edu.bd/</a></p>
                            <p>
                                130, Chatteswari Road <br>
                                Chalkbazar, Chittagong <br>
                                Bangladesh
                            </p>
                            <p>Phone: 2856677 , Mobile: 01777-775789</p>
                        </div>
                        <div>
                            <p><strong>To:</strong></p>
                            <h4>Name: <strong>{{$student->name}}</strong></h4>
                            <p>
                                ID NO: {{$student->unique_roll_no}} <br>
                            </p>
                        </div>
                        <div>
                            <p class="h4 uk-text-bold">Invoice no: #{{ $invoice->invoice_no }}</p>
                            <p class="h5">Date: {{$invoice->invoice_date->toFormattedDateString()}}</p>
                            @if($invoice->is_paid === 'Due')
                                <div class="uk-text-danger uk-h1">Due</div>
                            @else
                                <div class="uk-text-success uk-h1">Paid</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <table class="uk-table uk-table-striped">
                <thead>
                <tr>
                    <th style="width: 30px;">#</th>
                    <th>Description</th>
                    <th style="width: 90px;">Quantity</th>
                    <th style="width: 90px;">Amount</th>
                    <th style="width: 120px;">Total</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($invoiceItems as $index=>$item)
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