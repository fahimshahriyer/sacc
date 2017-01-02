@extends('layouts.main')
@section('title','Dashboard')
@section('content')
    <div class="uk-grid">
        <div class="uk-width-1-1">
            <div class="card elevated">
                <div class="uk-width-medium-1-3">
                    <div class="uk-flex uk-flex-column uk-flex-middle uk-flex-space-between">
                        <div class="uk-margin-large-bottom">
                            <span class="uk-text-muted">INCOME TODAY</span>
                            <h2>35,899 BDT</h2>
                        </div>
                        <div class="uk-margin-large-bottom">
                            <span class="uk-text-muted">EXPENSE TODAY</span>
                            <h2>23,899 BDT</h2>
                        </div>
                        <div>
                            <span class="uk-text-muted">PROFIT TODAY</span>
                            <h2>12,000 BDT</h2>
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-2-3"></div>
            </div>
        </div>
    </div>
    <div class="uk-grid">
        <div class="uk-width-medium-1-3">
            <div class="card">
                <h4>Invoices</h4>
            </div>
        </div>
        <div class="uk-width-medium-1-3">
            <div class="card">
                <h4>Expenses</h4>
            </div>
        </div>
        <div class="uk-width-medium-1-3">
            <div class="card">
                <h4>Profit and Loss</h4>
            </div>
        </div>
    </div>
@endsection