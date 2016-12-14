@extends('layouts.main')
@section('title', 'Create a Payplan')

@section('content')
    <div class="card elevated">
        <h2>Create a payplan</h2>
        @include('common.error')
        <form class="uk-form uk-form-stacked" method="POST" action="{{ url('payplan') }}">
            {{ csrf_field() }}
            <div class="uk-form-row">
                <label class="uk-form-label">Payplan Name</label>
                <div class="uk-form-controls uk-placeholder">
                    <input type="text" name="name" id="payplan-name" placeholder="Ex: Monthly Session 16-17" class="uk-width-1-1 uk-form-large" required>
                </div>
            </div>
            <div class="uk-form-row">
                <label for="" class="uk-form-label">Display Name (optional)</label>
                <div class="uk-form-controls">
                    <input type="text" name="display_name" id="display_name" class="uk-width-3-5 uk-form-large">
                </div>
            </div>
            <div class="uk-form-row">
                <label for="" class="uk-form-label">Choose Recurrence Interval:</label>
                <select name="billing_cycle" id="billing_cycle" class="uk-form-large uk-width-3-5" required>
                    <option>Please Select</option>
                    <option value="0">One Time</option>
                    <option value="1">1 Month</option>
                    <option value="2">2 Month</option>
                    <option value="3">3 Month</option>
                    <option value="6">6 Month</option>
                    <option value="12">1 Year</option>
                    <option value="24">2 Year</option>
                </select>
            </div>
            <div class="uk-form-row">
                <label for="" class="uk-form-label">Description (optional)</label>
                <div class="uk-form-controls">
                    <input type="text" name="description" id="description" class="uk-width-3-5 uk-form-large">
                </div>
            </div>
            <div class="uk-form-row">
                <label for="" class="uk-form-label">Payplan Terms (optional)</label>
                <div class="uk-form-controls">
                    <input type="text" name="payplan_terms" id="payplan_terms" class="uk-width-3-5 uk-form-large">
                </div>
            </div>
            <footer class="card-footer uk-margin-large-top">
                <div>
                    <button type="submit" class="uk-button uk-button-primary uk-button-large">Submit</button>
                    <button class="uk-button uk-button-large">Cancel</button>
                </div>
            </footer>
        </form>
    </div>
@endsection