@extends('layouts.app')

@section('title', 'Tax Return Services - WCA Accounting')
@section('description', 'Complete tax return services for individuals and businesses to maximize deductions and ensure timely filing.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Tax Return Services</h1>
                <p class="hero-subheadline">Complete tax return services for individuals and businesses to maximize deductions and ensure timely filing.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-receipt" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Comprehensive Tax Return Services</h2>
            <p>We handle all types of tax returns to ensure compliance and maximize your deductions</p>
        </div>
        
        <div style="display: flex; gap: 40px; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 300px;">
                <h3>Services Included</h3>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Self Assessment tax returns</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Corporation tax returns</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Partnership tax returns</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Trust and estate tax returns</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Capital gains tax calculations</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Tax planning and advice</li>
                </ul>
            </div>
            
            <div style="flex: 1; min-width: 300px;">
                <h3>Benefits</h3>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Maximize your deductions</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Avoid penalties for late filing</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Professional review of your return</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Peace of mind knowing it's done right</li>
                    <li style="margin-bottom: 15px;"><i class="fas fa-check-circle" style="color: var(--primary); margin-right: 10px;"></i> Representation in case of HMRC inquiries</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Our Tax Return Process</h2>
        </div>
        
        <div class="process-steps">
            <div class="step">
                <div class="step-icon"><i class="fas fa-file-contract"></i></div>
                <h3>Information Gathering</h3>
                <p>We collect all necessary documents through our secure portal</p>
            </div>
            
            <div class="step">
                <div class="step-icon"><i class="fas fa-calculator"></i></div>
                <h3>Tax Calculation</h3>
                <p>Our experts calculate your tax liability and identify deductions</p>
            </div>
            
            <div class="step">
                <div class="step-icon"><i class="fas fa-clipboard-check"></i></div>
                <h3>Review & Approval</h3>
                <p>We review the return with you before submission</p>
            </div>
            
            <div class="step">
                <div class="step-icon"><i class="fas fa-paper-plane"></i></div>
                <h3>Filing</h3>
                <p>We electronically file your return with HMRC</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Tax Return Deadlines</h2>
            <p>Important dates to remember for your tax returns</p>
        </div>
        
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background-color: var(--primary); color: white;">
                        <th style="padding: 15px; text-align: left;">Return Type</th>
                        <th style="padding: 15px; text-align: left;">Filing Deadline</th>
                        <th style="padding: 15px; text-align: left;">Payment Deadline</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid var(--border-muted);">
                        <td style="padding: 15px;">Self Assessment (Paper)</td>
                        <td style="padding: 15px;">31 October</td>
                        <td style="padding: 15px;">31 January</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-muted);">
                        <td style="padding: 15px;">Self Assessment (Online)</td>
                        <td style="padding: 15px;">31 January</td>
                        <td style="padding: 15px;">31 January</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-muted);">
                        <td style="padding: 15px;">Corporation Tax</td>
                        <td style="padding: 15px;">12 months after period end</td>
                        <td style="padding: 15px;">9 months and 1 day after period end</td>
                    </tr>
                    <tr style="border-bottom: 1px solid var(--border-muted);">
                        <td style="padding: 15px;">Partnership</td>
                        <td style="padding: 15px;">31 January</td>
                        <td style="padding: 15px;">31 January</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div style="background-color: #fef3cd; border-left: 4px solid #ffc107; padding: 15px; margin-top: 30px;">
            <p><strong>Note:</strong> Missing deadlines can result in penalties and interest charges. Let us handle your tax returns to ensure timely filing and payment.</p>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Pricing</h2>
            <p>Transparent pricing for our tax return services</p>
        </div>
        
        <div style="display: flex; gap: 30px; flex-wrap: wrap; justify-content: center;">
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); flex: 1; min-width: 250px; max-width: 350px;">
                <h3 style="text-align: center; color: var(--primary);">Self Assessment</h3>
                <div style="text-align: center; font-size: 2rem; font-weight: bold; color: var(--accent); margin: 20px 0;">£149</div>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> For sole traders and individuals</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Includes tax calculation</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Online submission to HMRC</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Tax payment reminder</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Support for HMRC inquiries</li>
                </ul>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="{{ route('contact') }}" class="btn">Get Started</a>
                </div>
            </div>
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); flex: 1; min-width: 250px; max-width: 350px; border: 2px solid var(--accent);">
                <div style="text-align: center; background: var(--accent); color: white; margin: -30px -30px 20px; padding: 10px; border-radius: 8px 8px 0 0;">MOST POPULAR</div>
                <h3 style="text-align: center; color: var(--primary);">Corporation Tax</h3>
                <div style="text-align: center; font-size: 2rem; font-weight: bold; color: var(--accent); margin: 20px 0;">£399</div>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> For limited companies</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> CT600 preparation and filing</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Tax computation</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Review of tax savings opportunities</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Payment deadline reminders</li>
                </ul>
                <div style="text-align: center; margin-top: 20px;">
                    <a href="{{ route('contact') }}" class="btn">Get Started</a>
                </div>
            </div>
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); flex: 1; min-width: 250px; max-width: 350px;">
                <h3 style="text-align: center; color: var(--primary);">Partnership Tax</h3>
                <div style="text-align: center; font-size: 2rem; font-weight: bold; color: var(--accent); margin: 20px 0;">£299</div>
                <ul style="list-style-type: none;">
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> For partnership businesses</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Partnership return preparation</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Individual partner calculations</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Profit allocation analysis</li>
                    <li style="margin-bottom: 10px;"><i class="fas fa-check" style="color: var(--accent); margin-right: 10px;"></i> Submission to HMRC</li>
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
            <h2>Have Questions About Your Tax Return?</h2>
            <p>Contact us today for expert advice and assistance</p>
        </div>
        
        <div style="text-align: center;">
            <a href="{{ route('contact') }}" class="btn">Get in Touch</a>
        </div>
    </div>
</section>
@endsection