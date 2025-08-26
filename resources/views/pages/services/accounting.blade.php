@extends('layouts.app')

@section('title', 'Accounts Preparation - WCA Accounting')
@section('description', 'Professional preparation of year-end accounts ensuring compliance with HMRC requirements and accounting standards.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Accounts Preparation Services</h1>
                <p class="hero-subheadline">Professional preparation of year-end accounts ensuring compliance with HMRC requirements and accounting standards.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-file-invoice-dollar" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Comprehensive Accounts Preparation</h2>
            <p>We handle all aspects of your financial accounts so you can focus on your business</p>
        </div>
        
        <div style="display: flex; gap: 40px; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 300px;">
                <h3>What's Included</h3>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Preparation of year-end financial statements</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Corporation tax computations</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Director's report preparation</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Submission to Companies House and HMRC</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Fixed asset register maintenance</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Depreciation calculations</li>
                </ul>
            </div>
            
            <div style="flex: 1; min-width: 300px;">
                <h3>Who It's For</h3>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 15px;"><i class="fas fa-building" style="color: var(--primary); margin-right: 10px;"></i> Limited companies</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-user-tie" style="color: var(--primary); margin-right: 10px;"></i> Sole traders</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-handshake" style="color: var(--primary); margin-right: 10px;"></i> Partnerships</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-store" style="color: var(--primary); margin-right: 10px;"></i> Small businesses</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-rocket" style="color: var(--primary); margin-right: 10px;"></i> Startups</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Our Process</h2>
        </div>
        
        <div class="process-steps">
            <div class="step">
                <div class="step-icon"><i class="fas fa-list-alt"></i></div>
                <h3>Document Collection</h3>
                <p>We gather all necessary financial documents through our secure portal</p>
            </div>
            
            <div class="step">
                <div class="step-icon"><i class="fas fa-calculator"></i></div>
                <h3>Accounts Preparation</h3>
                <p>Our experts prepare your financial statements and tax computations</p>
            </div>
            
            <div class="step">
                <div class="step-icon"><i class="fas fa-check-circle"></i></div>
                <h3>Review & Approval</h3>
                <p>We review everything with you before submission</p>
            </div>
            
            <div class="step">
                <div class="step-icon"><i class="fas fa-paper-plane"></i></div>
                <h3>Filing</h3>
                <p>We submit all documents to Companies House and HMRC</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Pricing</h2>
            <p>Transparent pricing with no hidden fees</p>
        </div>
        
        <div style="display: flex; gap: 30px; flex-wrap: wrap; justify-content: center;">
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); flex: 1; min-width: 250px; max-width: 350px;">
                <h3 style="text-align: center; color: var(--primary);">Basic Package</h3>
                <div style="text-align: center; font-size: 2rem; font-weight: bold; color: var(--accent); margin: 20px 0;">£499</div>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Preparation of annual accounts</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Corporation tax computation</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Submission to Companies House</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-times" style="color: #ccc; margin-right: 10px;"></i> Director's report</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-times" style="color: #ccc; margin-right: 10px;"></i> Tax planning consultation</li>
                </ul>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="{{ route('contact') }}" class="btn">Get Started</a>
                </div>
            </div>
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); flex: 1; min-width: 250px; max-width: 350px; border: 2px solid var(--accent);">
                <div style="text-align: center; background: var(--accent); color: white; margin: -30px -30px 20px; padding: 10px; border-radius: 8px 8px 0 0;">MOST POPULAR</div>
                <h3 style="text-align: center; color: var(--primary);">Standard Package</h3>
                <div style="text-align: center; font-size: 2rem; font-weight: bold; color: var(--accent); margin: 20px 0;">£799</div>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Everything in Basic</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Director's report</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Tax planning consultation</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Fixed asset register</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-times" style="color: #ccc; margin-right: 10px;"></i> Monthly bookkeeping</li>
                </ul>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="{{ route('contact') }}" class="btn">Get Started</a>
                </div>
            </div>
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); flex: 1; min-width: 250px; max-width: 350px;">
                <h3 style="text-align: center; color: var(--primary);">Premium Package</h3>
                <div style="text-align: center; font-size: 2rem; font-weight: bold; color: var(--accent); margin: 20px 0;">£1,299</div>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Everything in Standard</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Monthly bookkeeping</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Quarterly reviews</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Business advisory session</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Priority support</li>
                </ul>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="{{ route('contact') }}" class="btn">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Frequently Asked Questions</h2>
        </div>
        
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <span>When are my accounts due?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>For limited companies, accounts are typically due 9 months after your company's financial year ends. The deadline for filing with Companies House is usually 9 months after your accounting reference date, while corporation tax is due 9 months and 1 day after your accounting period ends.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>What documents do I need to provide?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>Typically, we need bank statements, sales invoices, purchase invoices, payroll records, expense receipts, and details of any assets purchased or sold during the period. We provide a comprehensive checklist to make the process easy.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Can you handle accounts for my specific industry?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we have experience working with businesses across various industries including retail, hospitality, construction, professional services, and technology. Each industry has unique accounting requirements, and our team has the expertise to handle them all.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>What happens if I miss the filing deadline?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>Late filing can result in penalties from both Companies House and HMRC. Penalties start at £150 for accounts that are up to one month late and can increase to £1,500 for accounts that are more than 6 months late. We help ensure you never miss a deadline.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Ready to Get Started?</h2>
            <p>Contact us today to discuss your accounts preparation needs</p>
        </div>
        
        <div style="text-align: center;">
            <a href="{{ route('contact') }}" class="btn">Get in Touch</a>
        </div>
    </div>
</section>
@endsection