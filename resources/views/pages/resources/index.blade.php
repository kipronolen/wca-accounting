@extends('layouts.app')

@section('title', 'Resources - WCA Accounting')
@section('description', 'Helpful resources, calculators, and tools for small businesses and freelancers.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Resources</h1>
                <p class="hero-subheadline">Helpful resources, calculators, and tools for small businesses and freelancers.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-tools" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-content">
    <div class="container">
        <div class="service-section">
            <h2 class="section-heading">Helpful Resources</h2>
            <p>We've compiled a collection of resources, tools, and guides to help you manage your business finances more effectively. Whether you're just starting out or looking to grow your business, these resources provide valuable information and practical tools.</p>
            
            <div class="service-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3 class="feature-title">Tax Calculator</h3>
                    <p>Estimate your tax liability and plan your finances with our free tax calculator tool.</p>
                    <a href="{{ route('calculator.tax') }}" class="btn btn-primary">Use Calculator</a>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-exchange-alt"></i>
                    </div>
                    <h3 class="feature-title">Currency Converter</h3>
                    <p>Convert between currencies for international business transactions with our free tool.</p>
                    <a href="{{ route('calculator.currency') }}" class="btn btn-primary">Use Converter</a>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-download"></i>
                    </div>
                    <h3 class="feature-title">Downloadable Templates</h3>
                    <p>Access our collection of free templates for invoices, expense tracking, and more.</p>
                    <a href="#templates" class="btn btn-primary">View Templates</a>
                </div>
            </div>
        </div>
        
        <div class="service-section">
            <h2 class="section-heading">Business Guides</h2>
            <p>Our comprehensive guides cover a range of topics to help you navigate the financial aspects of running a business:</p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin-bottom: 40px;">
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <h3 style="margin-bottom: 12px; color: var(--primary);">Starting a Business</h3>
                    <p style="margin-bottom: 16px;">A step-by-step guide to setting up your business, choosing the right structure, and understanding your financial obligations.</p>
                    <a href="#" style="color: var(--primary); text-decoration: none; font-weight: 500;">Read Guide →</a>
                </div>
                
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <h3 style="margin-bottom: 12px; color: var(--primary);">VAT Guide</h3>
                    <p style="margin-bottom: 16px;">Everything you need to know about VAT registration, thresholds, schemes, and compliance.</p>
                    <a href="#" style="color: var(--primary); text-decoration: none; font-weight: 500;">Read Guide →</a>
                </div>
                
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <h3 style="margin-bottom: 12px; color: var(--primary);">Self-Assessment</h3>
                    <p style="margin-bottom: 16px;">A complete guide to completing your self-assessment tax return, including deadlines and penalties.</p>
                    <a href="#" style="color: var(--primary); text-decoration: none; font-weight: 500;">Read Guide →</a>
                </div>
                
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <h3 style="margin-bottom: 12px; color: var(--primary);">Payroll Guide</h3>
                    <p style="margin-bottom: 16px;">Understanding your responsibilities as an employer, from RTI submissions to workplace pensions.</p>
                    <a href="#" style="color: var(--primary); text-decoration: none; font-weight: 500;">Read Guide →</a>
                </div>
                
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <h3 style="margin-bottom: 12px; color: var(--primary);">Expense Management</h3>
                    <p style="margin-bottom: 16px;">How to track, categorize, and claim business expenses to maximize tax efficiency.</p>
                    <a href="#" style="color: var(--primary); text-decoration: none; font-weight: 500;">Read Guide →</a>
                </div>
                
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <h3 style="margin-bottom: 12px; color: var(--primary);">CIS Scheme</h3>
                    <p style="margin-bottom: 16px;">A comprehensive guide to the Construction Industry Scheme for contractors and subcontractors.</p>
                    <a href="#" style="color: var(--primary); text-decoration: none; font-weight: 500;">Read Guide →</a>
                </div>
            </div>
        </div>
        
        <div class="service-section" id="templates">
            <h2 class="section-heading">Free Templates</h2>
            <p>Download our professionally designed templates to help manage your business finances:</p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px; margin-bottom: 40px;">
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); text-align: center;">
                    <div style="background-color: var(--primary); color: white; width: 60px; height: 60px; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; font-size: 24px;">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <h3 style="margin-bottom: 12px; color: var(--primary);">Invoice Template</h3>
                    <p style="margin-bottom: 16px;">Professional invoice template with automatic calculations.</p>
                    <a href="#" class="btn btn-primary">Download</a>
                </div>
                
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); text-align: center;">
                    <div style="background-color: var(--primary); color: white; width: 60px; height: 60px; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; font-size: 24px;">
                        <i class="fas fa-receipt"></i>
                    </div>
                    <h3 style="margin-bottom: 12px; color: var(--primary);">Expense Tracker</h3>
                    <p style="margin-bottom: 16px;">Template to track and categorize business expenses.</p>
                    <a href="#" class="btn btn-primary">Download</a>
                </div>
                
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); text-align: center;">
                    <div style="background-color: var(--primary); color: white; width: 60px; height: 60px; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; font-size: 24px;">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 style="margin-bottom: 12px; color: var(--primary);">Cash Flow Forecast</h3>
                    <p style="margin-bottom: 16px;">Template to project and monitor business cash flow.</p>
                    <a href="#" class="btn btn-primary">Download</a>
                </div>
                
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); text-align: center;">
                    <div style="background-color: var(--primary); color: white; width: 60px; height: 60px; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; font-size: 24px;">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3 style="margin-bottom: 12px; color: var(--primary);">Budget Planner</h3>
                    <p style="margin-bottom: 16px;">Template to create and manage your business budget.</p>
                    <a href="#" class="btn btn-primary">Download</a>
                </div>
            </div>
        </div>
        
        <div class="service-section">
            <h2 class="section-heading">Important Tax Dates</h2>
            <p>Stay on top of key deadlines with our tax calendar:</p>
            
            <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); margin-bottom: 40px;">
                <h3 style="margin-bottom: 20px; color: var(--primary);">Upcoming Deadlines</h3>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 16px;">
                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                        <div style="background-color: var(--primary); color: white; width: 50px; height: 50px; border-radius: 8px; display: flex; flex-direction: column; align-items: center; justify-content: center; flex-shrink: 0;">
                            <div style="font-size: 12px; font-weight: bold;">JAN</div>
                            <div style="font-size: 18px; font-weight: bold;">31</div>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 4px; color: var(--primary);">Self-Assessment Deadline</h4>
                            <p style="font-size: 14px;">Deadline for online self-assessment tax returns and payment of tax owed.</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                        <div style="background-color: var(--primary); color: white; width: 50px; height: 50px; border-radius: 8px; display: flex; flex-direction: column; align-items: center; justify-content: center; flex-shrink: 0;">
                            <div style="font-size: 12px; font-weight: bold;">APR</div>
                            <div style="font-size: 18px; font-weight: bold;">5</div>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 4px; color: var(--primary);">Tax Year End</h4>
                            <p style="font-size: 14px;">End of the tax year. Deadline for ISA contributions and other tax-efficient investments.</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                        <div style="background-color: var(--primary); color: white; width: 50px; height: 50px; border-radius: 8px; display: flex; flex-direction: column; align-items: center; justify-content: center; flex-shrink: 0;">
                            <div style="font-size: 12px; font-weight: bold;">JUL</div>
                            <div style="font-size: 18px; font-weight: bold;">31</div>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 4px; color: var(--primary);">Second Payment on Account</h4>
                            <p style="font-size: 14px;">Deadline for second payment on account for self-assessment taxpayers.</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: flex-start; gap: 16px;">
                        <div style="background-color: var(--primary); color: white; width: 50px; height: 50px; border-radius: 8px; display: flex; flex-direction: column; align-items: center; justify-content: center; flex-shrink: 0;">
                            <div style="font-size: 12px; font-weight: bold;">OCT</div>
                            <div style="font-size: 18px; font-weight: bold;">5</div>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 4px; color: var(--primary);">Self-Assessment Registration</h4>
                            <p style="font-size: 14px;">Deadline to register for self-assessment if you need to file a tax return.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <p>Missing deadlines can result in penalties. Contact us if you need help meeting your tax obligations on time.</p>
        </div>
    </div>
</section>
@endsection