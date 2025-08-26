@extends('layouts.app')

@section('title', 'Currency Converter - WCA Accounting')
@section('description', 'Free currency conversion tool for international business transactions. Real-time exchange rates for major world currencies.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Currency Converter</h1>
                <p class="hero-subheadline">Free currency conversion tool for international business transactions.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-exchange-alt" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="currency-converter py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h5 mb-0">Currency Conversion Tool</h2>
                    </div>
                    <div class="card-body">
                        <form id="currencyConversionForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="amount">Amount</label>
                                        <input type="number" class="form-control" id="amount" name="amount" value="1" min="0" step="0.01" required>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="from_currency">From Currency</label>
                                        <select class="form-control" id="from_currency" name="from_currency" required>
                                            <option value="USD" selected>USD - US Dollar</option>
                                            <option value="EUR">EUR - Euro</option>
                                            <option value="GBP">GBP - British Pound</option>
                                            <option value="JPY">JPY - Japanese Yen</option>
                                            <option value="CAD">CAD - Canadian Dollar</option>
                                            <option value="AUD">AUD - Australian Dollar</option>
                                            <option value="CHF">CHF - Swiss Franc</option>
                                            <option value="CNY">CNY - Chinese Yuan</option>
                                            <option value="INR">INR - Indian Rupee</option>
                                            <option value="MXN">MXN - Mexican Peso</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="to_currency">To Currency</label>
                                        <select class="form-control" id="to_currency" name="to_currency" required>
                                            <option value="EUR">EUR - Euro</option>
                                            <option value="USD" selected>USD - US Dollar</option>
                                            <option value="GBP">GBP - British Pound</option>
                                            <option value="JPY">JPY - Japanese Yen</option>
                                            <option value="CAD">CAD - Canadian Dollar</option>
                                            <option value="AUD">AUD - Australian Dollar</option>
                                            <option value="CHF">CHF - Swiss Franc</option>
                                            <option value="CNY">CNY - Chinese Yuan</option>
                                            <option value="INR">INR - Indian Rupee</option>
                                            <option value="MXN">MXN - Mexican Peso</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="converted_amount">Converted Amount</label>
                                        <input type="text" class="form-control" id="converted_amount" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block">Convert Currency</button>
                                </div>
                            </div>
                        </form>
                        <div id="conversionResult" class="mt-4" style="display: none;">
                            <div class="alert alert-info">
                                <h5 class="alert-heading">Conversion Details</h5>
                                <p id="conversionDetails"></p>
                                <p id="exchangeRateInfo" class="mb-0 small"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="educational-content py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center mb-5">Understanding Currency Conversion</h2>
                
                <div class="content-block mb-5">
                    <h3 class="h4">What is Currency Exchange?</h3>
                    <p>Currency exchange is the process of converting one currency into another currency. The exchange rate represents how much of the second currency you can get for one unit of the first currency. For example, if the EUR/USD exchange rate is 1.20, it means you can get 1.20 US dollars for 1 euro.</p>
                    <p>Exchange rates fluctuate constantly due to various economic factors including:</p>
                    <ul>
                        <li>Interest rates set by central banks</li>
                        <li>Economic growth indicators (GDP, employment data)</li>
                        <li>Political stability and economic performance</li>
                        <li>Market speculation and investor sentiment</li>
                        <li>Global events and geopolitical tensions</li>
                    </ul>
                </div>
                
                <div class="content-block mb-5">
                    <h3 class="h4">Why Currency Conversion Matters for Businesses</h3>
                    <p>For businesses engaged in international trade, currency conversion is a critical aspect of financial operations. Accurate currency conversion helps with:</p>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Pricing Strategy</h5>
                                    <p class="card-text">Setting appropriate prices for international customers while maintaining profitability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Financial Reporting</h5>
                                    <p class="card-text">Consolidating financial results from different currency zones for accurate reporting.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Cost Management</h5>
                                    <p class="card-text">Managing expenses incurred in foreign currencies and hedging against exchange rate risks.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">International Payments</h5>
                                    <p class="card-text">Processing payments to international suppliers and receiving payments from overseas customers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="content-block mb-5">
                    <h3 class="h4">How Exchange Rates Work</h3>
                    <p>Exchange rates are determined in the foreign exchange market, which is open 24 hours a day during weekdays. There are two main types of exchange rates:</p>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Spot Rate</strong></td>
                                <td>The current market price for immediate currency exchange</td>
                                <td>EUR/USD = 1.18</td>
                            </tr>
                            <tr>
                                <td><strong>Forward Rate</strong></td>
                                <td>An agreed-upon rate for future currency exchange</td>
                                <td>EUR/USD 3-month forward = 1.19</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <p>Most free currency APIs provide spot rates, which are suitable for estimating current conversion values. However, for actual business transactions, financial institutions may offer different rates that include their margin.</p>
                </div>
                
                <div class="content-block mb-5">
                    <h3 class="h4">Best Practices for Currency Conversion in Business</h3>
                    <p>When dealing with currency conversion in business operations, consider these best practices:</p>
                    
                    <div class="accordion" id="currencyBestPractices">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#practiceOne" aria-expanded="true" aria-controls="practiceOne">
                                        1. Use Reliable Exchange Rate Sources
                                    </button>
                                </h5>
                            </div>
                            <div id="practiceOne" class="collapse show" aria-labelledby="headingOne" data-parent="#currencyBestPractices">
                                <div class="card-body">
                                    <p>Ensure you're using accurate and reliable exchange rate data from reputable sources. Financial institutions, central banks, and established financial data providers typically offer the most reliable rates. Our tool uses ExchangeRate-API, which aggregates data from multiple central banks and commercial sources for accuracy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#practiceTwo" aria-expanded="false" aria-controls="practiceTwo">
                                        2. Understand the Total Conversion Costs
                                    </button>
                                </h5>
                            </div>
                            <div id="practiceTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#currencyBestPractices">
                                <div class="card-body">
                                    <p>The exchange rate alone doesn't tell the whole story. Financial institutions often add fees or margins to the exchange rate. When planning international transactions, factor in these additional costs to understand the true expense of currency conversion.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#practiceThree" aria-expanded="false" aria-controls="practiceThree">
                                        3. Consider Currency Hedging Strategies
                                    </button>
                                </h5>
                            </div>
                            <div id="practiceThree" class="collapse" aria-labelledby="headingThree" data-parent="#currencyBestPractices">
                                <div class="card-body">
                                    <p>For businesses with significant international exposure, currency hedging can protect against adverse exchange rate movements. Tools like forward contracts, options, and natural hedging can help stabilize costs and revenues.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#practiceFour" aria-expanded="false" aria-controls="practiceFour">
                                        4. Record Exchange Rates Used in Transactions
                                    </button>
                                </h5>
                            </div>
                            <div id="practiceFour" class="collapse" aria-labelledby="headingFour" data-parent="#currencyBestPractices">
                                <div class="card-body">
                                    <p>For accounting and audit purposes, always record the exchange rate used for each transaction, along with the date and time of conversion. This practice ensures transparency and makes reconciliation easier.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="content-block">
                    <h3 class="h4">Common Currency Codes</h3>
                    <p>Here are the ISO codes for some major world currencies:</p>
                    
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Currency</th>
                                    <th>Code</th>
                                    <th>Symbol</th>
                                    <th>Country/Region</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>US Dollar</td>
                                    <td>USD</td>
                                    <td>$</td>
                                    <td>United States</td>
                                </tr>
                                <tr>
                                    <td>Euro</td>
                                    <td>EUR</td>
                                    <td>€</td>
                                    <td>European Union</td>
                                </tr>
                                <tr>
                                    <td>British Pound</td>
                                    <td>GBP</td>
                                    <td>£</td>
                                    <td>United Kingdom</td>
                                </tr>
                                <tr>
                                    <td>Japanese Yen</td>
                                    <td>JPY</td>
                                    <td>¥</td>
                                    <td>Japan</td>
                                </tr>
                                <tr>
                                    <td>Canadian Dollar</td>
                                    <td>CAD</td>
                                    <td>C$</td>
                                    <td>Canada</td>
                                </tr>
                                <tr>
                                    <td>Australian Dollar</td>
                                    <td>AUD</td>
                                    <td>A$</td>
                                    <td>Australia</td>
                                </tr>
                                <tr>
                                    <td>Swiss Franc</td>
                                    <td>CHF</td>
                                    <td>CHF</td>
                                    <td>Switzerland</td>
                                </tr>
                                <tr>
                                    <td>Chinese Yuan</td>
                                    <td>CNY</td>
                                    <td>¥</td>
                                    <td>China</td>
                                </tr>
                                <tr>
                                    <td>Indian Rupee</td>
                                    <td>INR</td>
                                    <td>₹</td>
                                    <td>India</td>
                                </tr>
                                <tr>
                                    <td>Mexican Peso</td>
                                    <td>MXN</td>
                                    <td>$</td>
                                    <td>Mexico</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#currencyConversionForm').on('submit', function(e) {
        e.preventDefault();
        
        const amount = $('#amount').val();
        const from_currency = $('#from_currency').val();
        const to_currency = $('#to_currency').val();
        
        // Show loading state
        $('#converted_amount').val('Converting...');
        
        // Make AJAX request to conversion endpoint
        $.ajax({
            url: '{{ route('currency.convert') }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                amount: amount,
                from_currency: from_currency,
                to_currency: to_currency
            },
            success: function(response) {
                if (response.success) {
                    $('#converted_amount').val(response.converted_amount);
                    
                    // Show conversion details
                    $('#conversionDetails').html(
                        `${amount} ${from_currency} = <strong>${response.converted_amount} ${to_currency}</strong>`
                    );
                    
                    $('#exchangeRateInfo').html(
                        `Exchange Rate: 1 ${from_currency} = ${response.rate} ${to_currency}`
                    );
                    
                    $('#conversionResult').show();
                } else {
                    alert('Error: ' + response.message);
                    $('#converted_amount').val('');
                }
            },
            error: function(xhr) {
                alert('An error occurred during conversion. Please try again.');
                $('#converted_amount').val('');
            }
        });
    });
});
</script>
@endpush