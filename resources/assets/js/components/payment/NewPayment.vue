<template>
    <div>
        <div class="uk-flex uk-flex-space-between">
            <div><h2>Receive Payment</h2></div>
            <div class="uk-text-right">
                <small>Amount Received</small>
                <h1 class="uk-margin-remove">BDT: {{ amount_received }}</h1>
            </div>
        </div>
        <form class="uk-form uk-form-stacked uk-margin-top" role="form" method="POST" @submit.prevent = "getDueInvoices">
            <!-- Student id Form Input -->
            <div class="uk-form-row">
                <label for="student_id" class="uk-form-label">Student id: </label>
                <div class="uk-form-controls">
                    <input type="text" name="student_id" id="student_id" class="uk-form-large uk-width-3-10" placeholder="Student id"
                           value="" v-model="student_id">
                </div>
            </div>
        </form>
        <form class="uk-form uk-form-stacked uk-margin-top" role="form" method="POST" @submit.prevent>
            <!-- Payment method Form Input -->
            <div class="uk-form-row">
                <div class="uk-grid uk-grid-width-1-3">
                    <div>
                        <div class="uk-form-controls">
                            <label for="payment_method" class="uk-form-label">Payment Method: </label>
                            <select name="payment_method" id="payment_method" class="uk-form-large uk-width-1-1">
                                <option value="">Cash</option>
                                <option value="">Check</option>
                                <option value="">Credit Card</option>
                                <option value="">bKash</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="deposit_to" class="uk-form-label">Deposit To: </label>
                        <div class="uk-form-controls">
                            <input name="deposit_to" id="deposit_to" type="text" class="uk-form-large uk-width-1-1">
                        </div>
                    </div>
                    <div>
                        <label for="amount_received" class="uk-form-label">Amount Received: </label>
                        <div class="uk-form-controls">
                            <input name="amount_received" id="amount_received" type="text" class="uk-form-large uk-width-1-1" v-model="amount_received">
                        </div>
                    </div>
                </div>

            </div>
            <h3 class="uk-text-center">Outstanding Transactions:</h3>
            <table class="uk-table">
                <thead>
                <tr>
                    <th><input type="checkbox"></th>
                    <th width="360px">Description</th>
                    <th>Status</th>
                    <th>Due Date</th>
                    <th>Original Amount</th>
                    <th>Amount Due</th>
                    <th>Payment</th>
                </tr>
                </thead>
                <tbody>
                    <tr v-for="invoice in invoices.data">
                        <td><input type="checkbox"></td>
                        <td>{{ invoice.invoice_no}}</td>
                        <td>{{ invoice.status }}</td>
                        <td>{{ invoice.due_date}}</td>
                        <td>{{ invoice.grand_total}}</td>
                        <td>{{ invoice.amount_due}}</td>
                        <td>
                            <input type="number">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <footer class="card-footer uk-margin-large-top">
            <button type="submit" class="uk-button uk-button-primary uk-button-large">Save</button>
            <a href="" class="uk-button uk-button-large">Cancel</a>
        </footer>
    </div>

</template>

<script>
    export default {
        data() {
            return {
                student_id: "",
                amount_received : 0,
                invoices : [],
            };
        },

        methods: {
            getDueInvoices() {
                axios.get('/api/student/' + this.student_id + '/invoice/').then(response => this.invoices = response.data);
            }
        },
        mounted() {

        }
    };
</script>