<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'WCA Accounting - Small Business Accounting Experts')</title>
    <meta name="description" content="@yield('description', 'Professional accounting services for small businesses, freelancers, and startups. Tax returns, bookkeeping, payroll, and more. Get your instant quote today!')">
    <meta name="keywords" content="@yield('keywords', 'accounting services, small business accounting, tax returns, bookkeeping, payroll, VAT returns, self-assessment, CIS returns, company formation, business advisory')">
    <meta name="author" content="WCA Accounting">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="@yield('og-title', 'WCA Accounting - Professional Accounting Services')">
    <meta property="og:description" content="@yield('og-description', 'Small business accounting made simple, compliant, and stress-free.')">
    <meta property="og:type" content="website">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* All CSS from the original file goes here */

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
        
        /* ... rest of the CSS ... */
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
        @yield('content')
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
                <p>&copy; {{ date('Y') }} WCA Accounting Services. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            document.querySelector('.nav-menu').classList.toggle('active');
        }
        
        // FAQ toggle
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentElement;
                item.classList.toggle('active');
                
                // Toggle the plus/minus icon
                const icon = question.querySelector('span:last-child');
                icon.textContent = item.classList.contains('active') ? '−' : '+';
            });
        });
        
        // Tax calculator functionality
        function calculateTax() {
            const grossIncome = parseFloat(document.getElementById('gross-income').value) || 0;
            const taxCode = document.getElementById('tax-code').value || '1257L';
            const frequency = document.getElementById('frequency').value || 'monthly';
            
            // Basic tax calculation (simplified)
            const annualAllowance = 12570; // Standard personal allowance for 2022/23
            let taxableIncome = Math.max(0, grossIncome - annualAllowance);
            
            // Basic rate tax (20% on income up to £50,270)
            let tax = 0;
            if (taxableIncome > 0) {
                const basicRateIncome = Math.min(taxableIncome, 50270 - annualAllowance);
                tax += basicRateIncome * 0.2;
                taxableIncome -= basicRateIncome;
            }
            
            // Higher rate tax (40% on income between £50,271 and £150,000)
            if (taxableIncome > 0) {
                const higherRateIncome = Math.min(taxableIncome, 150000 - 50270);
                tax += higherRateIncome * 0.4;
                taxableIncome -= higherRateIncome;
            }
            
            // Additional rate tax (45% on income over £150,000)
            if (taxableIncome > 0) {
                tax += taxableIncome * 0.45;
            }
            
            // National Insurance (simplified)
            let ni = 0;
            const weeklyIncome = grossIncome / 52;
            if (weeklyIncome > 242) {
                ni += (Math.min(967, weeklyIncome) - 242) * 0.132;
            }
            if (weeklyIncome > 967) {
                ni += (weeklyIncome - 967) * 0.032;
            }
            ni = ni * 52;
            
            // Adjust for frequency
            let displayFrequency = 'year';
            if (frequency === 'monthly') {
                tax = tax / 12;
                ni = ni / 12;
                displayFrequency = 'month';
            } else if (frequency === 'weekly') {
                tax = tax / 52;
                ni = ni / 52;
                displayFrequency = 'week';
            }
            
            // Display results
            document.getElementById('tax-result').textContent = `£${tax.toFixed(2)} per ${displayFrequency}`;
            document.getElementById('ni-result').textContent = `£${ni.toFixed(2)} per ${displayFrequency}`;
            document.getElementById('net-income').textContent = `£${(grossIncome - tax - ni).toFixed(2)} per ${displayFrequency}`;
            
            document.getElementById('calculator-result').style.display = 'block';
        }
        
        // Currency converter functionality
        function convertCurrency() {
            const fromCurrency = document.getElementById('from-currency').value;
            const toCurrency = document.getElementById('to-currency').value;
            const amount = parseFloat(document.getElementById('amount').value) || 0;
            
            // Mock conversion rates (in a real application, you would fetch these from an API)
            const rates = {
                'GBP': { 'USD': 1.22, 'EUR': 1.14, 'GBP': 1 },
                'USD': { 'GBP': 0.82, 'EUR': 0.93, 'USD': 1 },
                'EUR': { 'GBP': 0.88, 'USD': 1.07, 'EUR': 1 }
            };
            
            const rate = rates[fromCurrency][toCurrency];
            const convertedAmount = amount * rate;
            
            // Display results
            document.getElementById('converted-amount').textContent = `${convertedAmount.toFixed(2)} ${toCurrency}`;
            document.getElementById('conversion-rate').textContent = `1 ${fromCurrency} = ${rate.toFixed(4)} ${toCurrency}`;
            document.getElementById('conversion-time').textContent = new Date().toLocaleString();
            
            document.getElementById('conversion-result').style.display = 'block';
        }
    </script>
</body>
</html>