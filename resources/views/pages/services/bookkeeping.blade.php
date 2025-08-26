@extends('layouts.app')

@section('title', 'Bookkeeping Services - WCA Accounting')
@section('description', 'Organized financial record keeping with software integration to keep your business finances in order.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Bookkeeping Services</h1>
                <p class="hero-subheadline">Organized financial record keeping with software integration to keep your business finances in order.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-book" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Comprehensive Bookkeeping Services</h2>
            <p>We handle your day-to-day financial recording so you can focus on growing your business</p>
        </div>
        
        <div style="display: flex; gap: 40px; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 300px;">
                <h3>Our Bookkeeping Services</h3>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Daily transaction recording</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Bank reconciliation</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Accounts receivable management</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Accounts payable management</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Expense tracking and categorization</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Financial reporting</li>
                </ul>
            </div>
            
            <div style="flex: 1; min-width: 300px;">
                <h3>Benefits</h3>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Save time on financial administration</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Always-ready financial records</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Improved cash flow management</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Better business decision making</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Stress-free year-end accounts preparation</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Our Bookkeeping Process</h2>
        </div>
        
        <div class="process-steps">
            <div class="step">
                <div class="step-icon"><i class="fas fa-cloud-upload-alt"></i></div>
                <h3>Data Collection</h3>
                <p>You share your financial documents through our secure portal</p>
            </div>
            
            <div class="step">
                <div class="step-icon"><i class="fas fa-sync-alt"></i></div>
                <h3>Bank Reconciliation</h3>
                <p>We reconcile your bank statements with your accounting records</p>
            </div>
            
            <div class="step">
                <div class="step-icon"><i class="fas fa-tasks"></i></div>
                <h3>Categorization</h3>
                <p>We categorize all transactions according to accounting standards</p>
            </div>
            
            <div class="step">
                <div class="step-icon"><i class="fas fa-chart-bar"></i></div>
                <h3>Reporting</h3>
                <p>We provide regular financial reports showing your business performance</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Software Integration</h2>
            <p>We work with all major accounting platforms</p>
        </div>
        
        <div class="partners-slider">
            <div class="partner-logo">
                <!-- Xero logo -->
                <div style="background-color: #fff; padding: 10px; border-radius: 5px; width: 120px; height: 50px; display: flex; align-items: center; justify-content: center;">
                    <span style="font-weight: bold; color: #13b5ea;">XERO</span>
                </div>
            </div>
            
            <div class="partner-logo">
                <!-- QuickBooks logo -->
                <div style="background-color: #2CA01C; padding: 10px; border-radius: 5px; width: 120px; height: 50px; display: flex; align-items: center; justify-content: center;">
                    <span style="font-weight: bold; color: white;">QuickBooks</span>
                </div>
            </div>
            
            <div class="partner-logo">
                <!-- Sage logo -->
                <div style="background-color: #00DC46; padding: 10px; border-radius: 5px; width: 120px; height: 50px; display: flex; align-items: center; justify-content: center;">
                    <span style="font-weight: bold; color: white;">SAGE</span>
                </div>
            </div>
            
            <div class="partner-logo">
                <!-- FreeAgent logo -->
                <div style="background-color: #2F5B7C; padding: 10px; border-radius: 5px; width: 120px; height: 50px; display: flex; align-items: center; justify-content: center;">
                    <span style="font-weight: bold; color: white; font-size: 14px;">FreeAgent</span>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 30px;">
            <p>We can help you set up and migrate to the right accounting software for your business needs</p>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Pricing</h2>
            <p>Flexible bookkeeping packages based on your transaction volume</p>
        </div>
        
        <div style="display: flex; gap: 30px; flex-wrap: wrap; justify-content: center;">
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); flex: 1; min-width: 250px; max-width: 350px;">
                <h3 style="text-align: center; color: var(--primary);">Starter Package</h3>
                <div style="text-align: center; font-size: 2rem; font-weight: bold; color: var(--accent); margin: 20px 0;">£99/month</div>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Up to 50 transactions monthly</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Bank reconciliation</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Basic financial reports</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-times" style="color: #ccc; margin-right: 10px;"></i> Accounts payable/receivable</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-times" style="color: #ccc; margin-right: 10px;"></i> Software setup assistance</li>
                </ul>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="{{ route('contact') }}" class="btn">Get Started</a>
                </div>
            </div>
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); flex: 1; min-width: 250px; max-width: 350px; border: 2px solid var(--accent);">
                <div style="text-align: center; background: var(--accent); color: white; margin: -30px -30px 20px; padding: 10px; border-radius: 8px 8px 0 0;">MOST POPULAR</div>
                <h3 style="text-align: center; color: var(--primary);">Growth Package</h3>
                <div style="text-align: center; font-size: 2rem; font-weight: bold; color: var(--accent); margin: 20px 0;">£199/month</div>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Up to 150 transactions monthly</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Everything in Starter</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Accounts payable/receivable</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Software setup assistance</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Monthly performance reports</li>
                </ul>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="{{ route('contact') }}" class="btn">Get Started</a>
                </div>
            </div>
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); flex: 1; min-width: 250px; max-width: 350px;">
                <h3 style="text-align: center; color: var(--primary);">Enterprise Package</h3>
                <div style="text-align: center; font-size: 2rem; font-weight: bold; color: var(--accent); margin: 20px 0;">£349/month</div>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Unlimited transactions</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Everything in Growth</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Customized financial reporting</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Cash flow forecasting</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Dedicated account manager</li>
                </ul>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="{{ route('contact') }}" class="btn">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Ready to Get Your Books in Order?</h2>
            <p>Contact us today to discuss your bookkeeping needs</p>
        </div>
        
        <div style="text-align: center;">
            <a href="{{ route('contact') }}" class="btn">Get in Touch</a>
        </div>
    </div>
</section>
@endsection