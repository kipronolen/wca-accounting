@extends('layouts.app')

@section('title', 'Accounting for Startups - WCA Accounting')
@section('description', 'Specialized accounting support for new businesses including setup advice and investor reporting.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Accounting for Startups</h1>
                <p class="hero-subheadline">Specialized accounting support for new businesses including setup advice and investor reporting.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-rocket" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-content">
    <div class="container">
        <div class="service-section">
            <h2 class="section-heading">Startup Accounting Services</h2>
            <p>Launching a startup is an exciting journey filled with opportunities and challenges. Our specialized accounting services for startups are designed to help you navigate the financial aspects of your business, from formation to growth and beyond.</p>
            
            <div class="service-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="feature-title">Business Structure Advice</h3>
                    <p>Guidance on choosing the right legal structure (sole trader, partnership, limited company) for your startup.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h3 class="feature-title">Company Formation</h3>
                    <p>Complete company registration service with Companies House and HMRC.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="feature-title">Financial Projections</h3>
                    <p>Preparation of realistic financial forecasts and cash flow projections for business planning and funding applications.</p>
                </div>
            </div>
            
            <div class="service-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-search-dollar"></i>
                    </div>
                    <h3 class="feature-title">Funding Support</h3>
                    <p>Assistance with preparing financial documentation for loan applications, grants, and investor pitches.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3 class="feature-title">R&D Tax Credits</h3>
                    <p>Identification and claiming of Research and Development tax credits for innovative startups.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3 class="feature-title">KPI Reporting</h3>
                    <p>Development of key performance indicators and regular reporting to track business progress.</p>
                </div>
            </div>
        </div>
        
        <div class="service-section">
            <h2 class="section-heading">Startup Accounting Packages</h2>
            <p>We offer tailored accounting packages designed specifically for startups at different stages of growth:</p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin-bottom: 40px;">
                <div style="background-color: white; padding: 32px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); text-align: center;">
                    <h3 style="margin-bottom: 16px; color: var(--primary);">Launch Package</h3>
                    <div style="font-size: 24px; font-weight: bold; color: var(--primary); margin-bottom: 16px;">£99/month</div>
                    <ul style="text-align: left; margin-bottom: 24px;">
                        <li>Company formation service</li>
                        <li>Business bank account setup guidance</li>
                        <li>Basic bookkeeping setup</li>
                        <li>Quarterly VAT returns (if registered)</li>
                        <li>Annual accounts preparation</li>
                        <li>Corporation tax computation</li>
                        <li>Director's self-assessment tax return</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-primary">Get Started</a>
                </div>
                
                <div style="background-color: white; padding: 32px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); text-align: center; border: 2px solid var(--primary);">
                    <div style="background-color: var(--primary); color: white; padding: 8px; border-radius: 4px; margin-bottom: 16px; display: inline-block;">Most Popular</div>
                    <h3 style="margin-bottom: 16px; color: var(--primary);">Growth Package</h3>
                    <div style="font-size: 24px; font-weight: bold; color: var(--primary); margin-bottom: 16px;">£199/month</div>
                    <ul style="text-align: left; margin-bottom: 24px;">
                        <li>Everything in Launch Package</li>
                        <li>Monthly bookkeeping</li>
                        <li>Management accounts</li>
                        <li>Cash flow forecasting</li>
                        <li>Payroll for up to 5 employees</li>
                        <li>Quarterly business review meetings</li>
                        <li>R&D tax credit assessment</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-primary">Get Started</a>
                </div>
                
                <div style="background-color: white; padding: 32px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); text-align: center;">
                    <h3 style="margin-bottom: 16px; color: var(--primary);">Scale Package</h3>
                    <div style="font-size: 24px; font-weight: bold; color: var(--primary); margin-bottom: 16px;">£349/month</div>
                    <ul style="text-align: left; margin-bottom: 24px;">
                        <li>Everything in Growth Package</li>
                        <li>Full monthly management accounts</li>
                        <li>Advanced financial modeling</li>
                        <li>Payroll for up to 15 employees</li>
                        <li>Weekly bookkeeping</li>
                        <li>Monthly strategic finance meetings</li>
                        <li>Investor reporting preparation</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-primary">Get Started</a>
                </div>
            </div>
            
            <p>All packages can be customized to meet your specific needs. Contact us to discuss which package is right for your startup.</p>
        </div>
        
        <div class="service-section">
            <h2 class="section-heading">Why Startups Choose WCA Accounting</h2>
            <p>Startups face unique financial challenges that require specialized expertise. Here's how we help:</p>
            
            <div style="background-color: #f8f9fa; padding: 32px; border-radius: 8px; margin-bottom: 24px;">
                <h3 style="margin-bottom: 20px; color: var(--primary);">Expertise in Startup Finance</h3>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                    <div>
                        <h4 style="margin-bottom: 8px; color: var(--primary);">Funding Preparation</h4>
                        <p>We help prepare the financial documentation investors and lenders need to see.</p>
                    </div>
                    
                    <div>
                        <h4 style="margin-bottom: 8px; color: var(--primary);">Cash Flow Management</h4>
                        <p>We help you manage cash flow effectively during the critical early stages.</p>
                    </div>
                    
                    <div>
                        <h4 style="margin-bottom: 8px; color: var(--primary);">Tax Efficiency</h4>
                        <p>We identify tax savings opportunities specific to startups and growing businesses.</p>
                    </div>
                    
                    <div>
                        <h4 style="margin-bottom: 8px; color: var(--primary);">Scalable Solutions</h4>
                        <p>Our services grow with your business, from startup to established company.</p>
                    </div>
                </div>
            </div>
            
            <p>With WCA Accounting as your financial partner, you can focus on building your business while we handle the numbers.</p>
        </div>
    </div>
</section>
@endsection