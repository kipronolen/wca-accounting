@extends('layouts.app')

@section('title', 'Company Formation - WCA Accounting')
@section('description', 'Complete company registration service including all necessary documentation and post-formation support.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Company Formation Services</h1>
                <p class="hero-subheadline">Complete company registration service including all necessary documentation and post-formation support.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-building" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-content">
    <div class="container">
        <div class="service-section">
            <h2 class="section-heading">Complete Company Formation Service</h2>
            <p>Starting a limited company is an exciting step for any business. Our comprehensive company formation service makes the process simple, efficient, and compliant with all Companies House requirements.</p>
            
            <div class="service-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-signature"></i>
                    </div>
                    <h3 class="feature-title">Company Name Registration</h3>
                    <p>Checking availability and registering your chosen company name with Companies House.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3 class="feature-title">Director & Shareholder Setup</h3>
                    <p>Proper registration of directors, shareholders, and people with significant control (PSC).</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="feature-title">Memorandum & Articles</h3>
                    <p>Preparation of the memorandum and articles of association for your new company.</p>
                </div>
            </div>
            
            <div class="service-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-address-card"></i>
                    </div>
                    <h3 class="feature-title">Registered Office</h3>
                    <p>Provision of a registered office address service if required (optional extra).</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="feature-title">Business Correspondence</h3>
                    <p>Handling of official business correspondence and forwarding service (optional extra).</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3 class="feature-title">Post-Incorporation Support</h3>
                    <p>Guidance on next steps after company formation, including tax registrations and compliance.</p>
                </div>
            </div>
        </div>
        
        <div class="service-section">
            <h2 class="section-heading">Our Company Formation Process</h2>
            <p>We've streamlined the company formation process to make it as simple as possible for you:</p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin-bottom: 40px;">
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <div style="background-color: var(--primary); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 16px; font-weight: bold;">1</div>
                    <h3 style="margin-bottom: 12px; color: var(--primary);">Initial Consultation</h3>
                    <p>We discuss your business needs and advise on the best company structure for your situation.</p>
                </div>
                
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <div style="background-color: var(--primary); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 16px; font-weight: bold;">2</div>
                    <h3 style="margin-bottom: 12px; color: var(--primary);">Document Preparation</h3>
                    <p>We prepare all necessary documentation, including memorandum and articles of association.</p>
                </div>
                
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <div style="background-color: var(--primary); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 16px; font-weight: bold;">3</div>
                    <h3 style="margin-bottom: 12px; color: var(--primary);">Companies House Submission</h3>
                    <p>We submit your application to Companies House, typically with same-day approval.</p>
                </div>
                
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <div style="background-color: var(--primary); color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 16px; font-weight: bold;">4</div>
                    <h3 style="margin-bottom: 12px; color: var(--primary);">Post-Incorporation Guidance</h3>
                    <p>We provide guidance on next steps, including tax registrations and ongoing compliance requirements.</p>
                </div>
            </div>
            
            <p>With our company formation service, you can focus on developing your business while we handle all the administrative details of setting up your limited company.</p>
        </div>
    </div>
</section>
@endsection