<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter - WCA Accounting</title>
    <meta name="description" content="Free currency conversion tool for international business transactions with real-time exchange rates for major world currencies.">
    <meta name="keywords" content="currency converter, exchange rates, international business, forex, currency conversion tool">
    <meta name="author" content="WCA Accounting">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Currency Converter - WCA Accounting">
    <meta property="og:description" content="Free currency conversion tool for international business transactions with real-time exchange rates.">
    <meta property="og:type" content="website">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS for styling components -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary: #3A47AB;
            --primary-hover: #5254E9;
            --accent: #9FCB2B;
            --accent-soft: #ADC760;
            --text-on-light: #111827;
            --surface-white: #FFFFFF;
            --surface-light: #F8FAFC;
            --border-muted: #E5E7EB;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }
        
        .top-strip {
            background-color: var(--primary);
            color: white;
            padding: 8px 0;
            font-size: 14px;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .main-header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
            gap: 25px;
        }
        
        .nav-menu a {
            text-decoration: none;
            color: var(--text-on-light);
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }
        
        .nav-menu a:hover {
            color: var(--primary);
        }
        
        .nav-menu li {
            position: relative;
        }
        
        .dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-radius: 5px;
            min-width: 200px;
            display: none;
            flex-direction: column;
            padding: 10px 0;
            z-index: 100;
        }
        
        .nav-menu li:hover .dropdown {
            display: flex;
        }
        
        .dropdown li {
            width: 100%;
        }
        
        .dropdown a {
            padding: 10px 20px;
            display: block;
            width: 100%;
        }
        
        .dropdown a:hover {
            background-color: var(--surface-light);
        }
        
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }
        
        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-hover) 100%);
            color: white;
            padding: 80px 0;
        }
        
        .hero-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 40px;
        }
        
        .hero-text {
            flex: 1;
        }
        
        .hero-headline {
            font-size: 48px;
            margin-bottom: 20px;
            font-weight: 700;
        }
        
        .hero-subheadline {
            font-size: 20px;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .currency-converter {
            padding: 80px 0;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .card-header {
            padding: 20px;
            font-weight: 600;
        }
        
        .card-body {
            padding: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-control {
            padding: 12px 15px;
            border: 1px solid var(--border-muted);
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
        }
        
        .btn-primary {
            background-color: var(--primary);
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-hover);
        }
        
        .educational-content {
            padding: 80px 0;
            background-color: var(--surface-light);
        }
        
        .content-block {
            margin-bottom: 50px;
        }
        
        .footer {
            background-color: #2d3748;
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .footer-heading {
            font-size: 18px;
            margin-bottom: 20px;
            color: white;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #cbd5e0;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #4a5568;
            color: #cbd5e0;
        }
        
        /* Responsive styles */
        @media (max-width: 992px) {
            .hero-content {
                flex-direction: column;
                text-align: center;
            }
            
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: white;
                flex-direction: column;
                padding: 20px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }
            
            .nav-menu.active {
                display: flex;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .dropdown {
                position: static;
                box-shadow: none;
                margin-top: 10px;
            }
        }
        
        .accordion-button:not(.collapsed) {
            background-color: var(--primary);
            color: white;
        }
        
        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0,0,0,.125);
        }
        
        .table th {
            background-color: var(--primary);
            color: white;
        }
        
        .dropdown.show {
            display: flex !important;
        }
    </style>
</head>
<body>
    <!-- Top Strip -->
    <div class="top-strip">
        <div class="container">
            <div style="text-align: center;">
                <i class="fas fa-phone-alt"></i> Call us today: <a href="tel:+442080586029" style="color: white; text-decoration: none; font-weight: 500;">+44 20 8058 6029</a>
            </div>
        </div>
    </div>
    
    <!-- Main Header -->
    <header class="main-header">
        <div class="container">
            <div class="header-content">
                <a href="{{ route('home') }}" class="logo">
                    <i class="fas fa-calculator"></i> WCA Accounting
                </a>
                
                <button class="mobile-menu-btn" onclick="toggleMobileMenu()">☰</button>
                
                <ul class="nav-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li>
                        <a href="{{ route('services') }}">Services</a>
                        <span style="cursor:pointer;" onclick="this.parentElement.querySelector('.dropdown').classList.toggle('show');">
                            <i class="fas fa-caret-down"></i>
                        </span>
                        <ul class="dropdown">
                            <li><a href="{{ route('services.accounting') }}">Accounts</a></li>
                            <li><a href="{{ route('services.tax') }}">Tax returns</a></li>
                            <li><a href="{{ route('services.vat') }}">VAT returns</a></li>
                            <li><a href="{{ route('services.bookkeeping') }}">Bookkeeping</a></li>
                            <li><a href="{{ route('services.payroll') }}">Payroll</a></li>
                            <li><a href="{{ route('services.self-assessment') }}">Self-Assessment</a></li>
                            <li><a href="{{ route('services.cis') }}">CIS Returns</a></li>
                            <li><a href="{{ route('services.company-formation') }}">Company formations</a></li>
                            <li><a href="{{ route('services.advisory') }}">Business advisory</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('who-we-serve') }}">Who We Serve</a>
                        <span style="cursor:pointer;" onclick="this.parentElement.querySelector('.dropdown').classList.toggle('show');">
                            <i class="fas fa-caret-down"></i>
                        </span>
                        <ul class="dropdown">
                            <li><a href="{{ route('clients.startups') }}">Startups</a></li>
                            <li><a href="{{ route('clients.freelancers') }}">Freelancers</a></li>
                            <li><a href="{{ route('clients.contractors') }}">Contractors</a></li>
                            <li><a href="{{ route('clients.partnerships') }}">Partnerships</a></li>
                            <li><a href="{{ route('clients.sole-traders') }}">Sole Traders</a></li>
                            <li><a href="{{ route('clients.limited-companies') }}">Limited Companies</a></li>
                            <li><a href="{{ route('clients.self-employed') }}">Self Employed</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('resources') }}">Resources</a>
                        <span style="cursor:pointer;" onclick="this.parentElement.querySelector('.dropdown').classList.toggle('show');">
                            <i class="fas fa-caret-down"></i>
                        </span> 
                        <ul class="dropdown">
                            <li><a href="{{ route('calculator.tax') }}">Free Tax Calculator</a></li>
                            <li><a href="{{ route('calculator.currency') }}">Free Currency Conversion</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
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

        <section class="currency-converter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white">
                                <h2 class="h5 mb-0">Currency Conversion Tool</h2>
                            </div>
                            <div class="card-body">
                                <form id="currencyConversionForm">
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

        <section class="educational-content">
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
                                            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#practiceOne" aria-expanded="true" aria-controls="practiceOne">
                                                1. Use Reliable Exchange Rate Sources
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="practiceOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#currencyBestPractices">
                                        <div class="card-body">
                                            <p>Ensure you're using accurate and reliable exchange rate data from reputable sources. Financial institutions, central banks, and established financial data providers typically offer the most reliable rates. Our tool uses ExchangeRate-API, which aggregates data from multiple central banks and commercial sources for accuracy.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#practiceTwo" aria-expanded="false" aria-controls="practiceTwo">
                                                2. Understand the Total Conversion Costs
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="practiceTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#currencyBestPractices">
                                        <div class="card-body">
                                            <p>The exchange rate alone doesn't tell the whole story. Financial institutions often add fees or margins to the exchange rate. When planning international transactions, factor in these additional costs to understand the true expense of currency conversion.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#practiceThree" aria-expanded="false" aria-controls="practiceThree">
                                                3. Consider Currency Hedging Strategies
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="practiceThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#currencyBestPractices">
                                        <div class="card-body">
                                            <p>For businesses with significant international exposure, currency hedging can protect against adverse exchange rate movements. Tools like forward contracts, options, and natural hedging can help stabilize costs and revenues.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#practiceFour" aria-expanded="false" aria-controls="practiceFour">
                                                4. Record Exchange Rates Used in Transactions
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="practiceFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#currencyBestPractices">
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
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <a href="{{ route('home') }}" class="footer-logo">WCA Accounting</a>
                    <p>Professional accounting services for small businesses, freelancers, and startups across the UK.</p>
                </div>
                
                <div>
                    <h3 class="footer-heading">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="{{ route('who-we-serve') }}">Who We Serve</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('resources') }}">Resources</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="footer-heading">Services</h3>
                    <ul class="footer-links">
                        <li><a href="{{ route('services.accounting') }}">Accounts Preparation</a></li>
                        <li><a href="{{ route('services.tax') }}">Tax Returns</a></li>
                        <li><a href="{{ route('services.vat') }}">VAT Returns</a></li>
                        <li><a href="{{ route('services.bookkeeping') }}">Bookkeeping</a></li>
                        <li><a href="{{ route('services.payroll') }}">Payroll</a></li>
                        <li><a href="{{ route('services.self-assessment') }}">Self-Assessment</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="footer-heading">Contact Info</h3>
                    <ul class="footer-links">
                        <li>Wickham Road, London, United Kingdom</li>
                        <li><a href="tel:+442080586029">+44 20 8058 6029</a></li>
                        <li><a href="mailto:info@wcaccountingservices.co.uk">info@wcaccountingservices.co.uk</a></li>
                    </ul>
                    <p>Working Hours: Mon–Fri, 9:00 AM – 6:00 PM</p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 WCA Accounting Services. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    
    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            document.querySelector('.nav-menu').classList.toggle('active');
        }
        
        // Currency converter functionality
        document.getElementById('currencyConversionForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const amount = document.getElementById('amount').value;
            const from_currency = document.getElementById('from_currency').value;
            const to_currency = document.getElementById('to_currency').value;
            
            // Show loading state
            document.getElementById('converted_amount').value = 'Converting...';
            
            // Make API request to free currency conversion API
            fetch(`https://api.exchangerate.host/convert?from=${from_currency}&to=${to_currency}&amount=${amount}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const convertedAmount = data.result.toFixed(2);
                        document.getElementById('converted_amount').value = convertedAmount;
                        
                        // Show conversion details
                        document.getElementById('conversionDetails').innerHTML = 
                            `${amount} ${from_currency} = <strong>${convertedAmount} ${to_currency}</strong>`;
                        
                        document.getElementById('exchangeRateInfo').innerHTML = 
                            `Exchange Rate: 1 ${from_currency} = ${data.info.rate.toFixed(6)} ${to_currency}`;
                        
                        document.getElementById('conversionResult').style.display = 'block';
                    } else {
                        alert('Error: Unable to convert currency. Please try again.');
                        document.getElementById('converted_amount').value = '';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('An error occurred during conversion. Please try again.');
                    document.getElementById('converted_amount').value = '';
                });
        });
    </script>
</body>
</html>