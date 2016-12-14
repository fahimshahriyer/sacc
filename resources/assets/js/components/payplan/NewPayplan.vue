<template>
    <form class="uk-form uk-form-stacked" @submit.prevent>
        <div class="uk-form-row">
            <label class="uk-form-label">Payplan Name</label>
            <div class="uk-form-controls uk-placeholder">
                <input type="text" id="payplan-name" placeholder="Ex: Monthly Session 16-17" class="uk-width-1-1 uk-form-large">
            </div>
        </div>
        <div class="uk-form-row">
            <label for="" class="uk-form-label">Choose Recurrence Interval:</label>
            <select name="billing_cycle" id="billing_cycle" class="uk-form-large uk-width-3-5">
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
        <div class="uk-form-row uk-width-1-2">
            <label class="uk-form-label">Add Fees:</label>
            <table class="uk-table uk-table-striped">
                <thead>
                <tr>
                    <td>Fee Name</td>
                    <td>Amount</td>
                    <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                <tr v-for = "fee in fees">
                    <td>{{fee.fee_name}}</td>
                    <td>{{fee.amount}}</td>
                    <td>
                        <button class="uk-button"><i class="icon-mode-edit"></i></button>
                        <button class="uk-button uk-button-danger"><i class="icon-delete"></i></button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>
                        <button class="uk-button uk-button-primary">Add Another</button>
                    </td>
                </tr>
                <tr class="uk-text-large">
                    <td class="uk-text-right">Total</td>
                    <td>1500</td>
                </tr>
                </tbody>
            </table>
        </div>
        <footer class="card-footer uk-margin-large-top">
            <div>
                <button type="submit" class="uk-button uk-button-primary uk-button-large">Submit</button>
                <button class="uk-button uk-button-large">Cancel</button>
            </div>
        </footer>
    </form>
</template>

<script>
    export default {
        data() {
            return {
                form : [],
                fees : [
                    { fee_name: 'Digital Fee' , amount: '1200'},
                    { fee_name: 'Tuition Fee', amount: '1500'},
                    { fee_name: 'Admission Fee', amount: '2000'}
                ]
            };
        },
        methods: {

        },
        mounted() {
            console.log('New Payplan Component Ready')
        }
    };
</script>
