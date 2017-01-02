@extends('layouts.main')
@section('title', 'Income')

@section('content')
    <div class="card elevated">
        <div class="uk-grid uk-margin-large-bottom">
            <div class="uk-width-1-2">
                <div class="uk-panel uk-panel-box uk-panel-box-secondary">
                    <div class="uk-flex uk-flex-space-between">
                        <div>
                            <span class="uk-h2">BDT 0</span>
                            <br>
                            <span class="uk-text-muted">OVERDUE</span>
                        </div>
                        <div class="uk-text-right">
                            <span class="uk-h2">BDT 0</span>
                            <br>
                            <span class="uk-text-muted">NOT DUE YET</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-2">
                <div class="uk-panel uk-panel-box uk-panel-box-secondary">
                    <div class="uk-flex uk-flex-space-between">
                        <div>
                            <span class="uk-h2">BDT 0</span>
                            <br>
                            <span class="uk-text-muted">NOT DEPOSITED</span>
                        </div>
                        <div class="uk-text-right">
                            <span class="uk-h2">BDT 0</span>
                            <br>
                            <span class="uk-text-muted">DEPOSITED</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-flex uk-flex-space-between">
            <div><h2>Invoices</h2></div>
            <div>
                <span class="uk-margin-right">Sort By: </span>
                <div class="uk-button-group">
                    <a class="uk-button" href="#">Due</a>
                    <a class="uk-button" href="#">Partially Paid</a>
                    <a class="uk-button" href="#">Paid</a>
                </div>
            </div>
        </div>
        <table class="uk-table uk-table-striped">
            <thead>
            <tr>
                <td>Invoice No</td>
                <td>Student Id</td>
                <td>Invoice Date</td>
                <td>Due Date</td>
                <td>Grand Total</td>
                <td>Approval Date</td>
                <td>Status</td>
                <td>Generated</td>
                <td>Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($invoices as $invoice)
                <tr>
                    <td>{{$invoice->invoice_no}}</td>
                    <td>{{$invoice->student_id}}</td>
                    <td>{{$invoice->invoice_date->toFormattedDateString() }}</td>
                    <td>{{$invoice->due_date->toFormattedDateString()}}</td>
                    <td>{{$invoice->grand_total}}</td>
                    <td>{{$invoice->approval_date->diffForhumans()}}</td>
                    <td>
                        @if($invoice->status === 'Partial' && $invoice->status === 'Paid')
                            <div class="uk-badge uk-badge-success">{{ $invoice->status }}</div>
                        @else
                            <div class="uk-badge uk-badge-danger">{{ $invoice->status }}</div>
                        @endif
                    </td>
                    <td>{{$invoice->created_at->diffForHumans()}}</td>
                    <td>
                        <div class="uk-button-group">
                            <button class="uk-button">Receive Payment</button>
                            <div data-uk-dropdown="{mode:'click'}">
                                <a href="" class="uk-button"><i class="uk-icon-caret-down"></i></a>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav uk-nav-dropdown">
                                        <li><a href="{{ route('invoice.show', $invoice->id) }}">Details</a></li>
                                        <li><a href="">...</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $invoices->render() !!}
    </div>
@endsection