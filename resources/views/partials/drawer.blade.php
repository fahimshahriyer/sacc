<div class="drawer drawer-default">
    <div class="drawer-brand">
    	<h2><i class="icon-wb-cloudy"></i> Automation</h2>
    </div>

    <nav class="drawer-navigation">
        <a href="{{ route('home') }}" class="nav-link"><i class="icon-home"></i> Home</a>
    	<a href="{{ route('dashboard') }}" class="nav-link"><i class="icon-multiline-chart"></i> Dashboard</a>
        <span class="nav-header">Accounting</span>
        <a href="{{ route('income.index') }}" class="nav-link"><i class="icon-monetization-on"></i> Incomes</a>
        <a href="{{ route('expense.index') }}" class="nav-link"><i class="icon-explicit"></i> Expenses</a>
        <a href="#" class="nav-link"><i class="icon-account-balance"></i> Banking</a>
        <a href="#" class="nav-link"><i class="icon-storage"></i> Assets</a>
        <a href="#" class="nav-link"><i class="icon-account-box"></i> Employees</a>
        <a href="{{ route('account.index') }}" class="nav-link"><i class="icon-list"></i> Chart of Accounts</a>
        <a href="#" class="nav-link"><i class="icon-report"></i> Reports</a>
        <span class="nav-header">Settings</span>
        <a href="#" class="nav-link"><i class="icon-settings-applications"></i>Accounting Settings</a>
    </nav>
</div>
{{--<a href="{{ route('invoice.index') }}" class="nav-link"><i class="icon-receipt"></i> All Invoices</a>--}}
{{--<span class="nav-header">Accounts</span>--}}
{{--<a href="/account" class="nav-link"><i class="icon-account-balance-wallet"></i>Account Balances</a>--}}
{{--<a href="/account/create" class="nav-link"><i class="icon-add"></i>Add Account</a>--}}
{{--<a href="#" class="nav-link"><i class="icon-settings"></i>Manage Accounts</a>--}}
{{--<span class="nav-header">Transactions</span>--}}
{{--<a href="#" class="nav-link"><i class="icon-add"></i>New</a>--}}
{{--<a href="#" class="nav-link"><i class="uk-icon-history"></i>History</a>--}}
{{--<span class="nav-header">Payplans</span>--}}
{{--<a href="/payplan/create" class="nav-link"><i class="icon-add"></i>New</a>--}}
{{--<a href="/payplan/" class="nav-link"><i class="icon-settings"></i> Manage Payplans</a>--}}