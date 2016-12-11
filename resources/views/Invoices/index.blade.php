@extends('layouts.main')
@section('title', 'Invoices')

@section('content')
    <div class="card elevated">
        <h1>All Invoices</h1>
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
                    <td>Created</td>
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
                            @if($invoice->is_paid === 'Due')
                                <div class="uk-badge uk-badge-danger">Due</div>
                            @else
                                <div class="uk-badge uk-badge-success">Paid</div>
                            @endif
                        </td>
                        <td>{{$invoice->created_at->diffForHumans()}}</td>
                        <td><a href="/invoice/{{ $invoice->id }}" class="uk-button"> Details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $invoices->render() !!}
    </div>
@endsection