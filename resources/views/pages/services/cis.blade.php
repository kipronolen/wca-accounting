@extends('layouts.app')

@section('title', 'CIS Returns - WCA Accounting')
@section('description', 'Specialist Construction Industry Scheme services for contractors and subcontractors.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">CIS Return Services</h1>
                <p class="hero-subheadline">Specialist Construction Industry Scheme services for contractors and subcontractors.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-hard-hat" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-content">
    <div class="container">
        <div class="service-section">
            <h2 class="section-heading">Construction Industry Scheme Expertise</h2>
            <p>Navigating the Construction Industry Scheme (CIS) can be complex. Our specialized services ensure compliance while maximizing your cash flow and minimizing administrative burdens.</p>
            
            <div class="service-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3 class="feature-title">Contractor Registration</h3>
                    <p>Assistance with HMRC registration for contractors operating under the CIS scheme.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <h3 class="feature-title">Subcontractor Verification</h3>
                    <p>Verification of subcontractors' CIS status before making payments under the scheme.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-percentage"></i>
                    </div>
                    <h3 class="feature-title">Deduction Calculations</h3>
                    <p>Accurate calculation of the correct deduction rates (20%, 30%, or 0%) for each subcontractor.</p>
                </div>
            </div>
            
            <div class="service-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3 class="feature-title">Monthly Returns</h3>
                    <p>Preparation and submission of monthly CIS returns to HMRC by the deadline.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-receipt"></i>
                    </div>
                    <h3 class="feature-title">Payment Deduction Statements</h3>
                    <p>Issuing payment and deduction statements to all subcontractors each month.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="feature-title">Subcontractor Support</h3>
                    <p>Helping subcontractors claim deductions back through their self-assessment returns.</p>
                </div>
            </div>
        </div>
        
        <div class="service-section">
            <h2 class="section-heading">CIS Compliance Made Simple</h2>
            <p>The Construction Industry Scheme has specific requirements that must be followed precisely to avoid penalties:</p>
            
            <div style="background-color: #f8f9fa; padding: 24px; border-radius: 8px; margin-bottom: 24px;">
                <h3 style="margin-bottom: 16px; color: var(--primary);">For Contractors:</h3>
                <ul style="margin-left: 20px; margin-bottom: 16px;">
                    <li>Register with HMRC as a contractor before taking on your first subcontractor</li>
                    <li>Verify each subcontractor with HMRC before making their first payment</li>
                    <li>Deduct the correct amount from subcontractors' payments</li>
                    <li>Submit monthly returns and pay deductions to HMRC by the 19th of each month</li>
                    <li>Provide subcontractors with deduction statements within 14 days of the end of each tax month</li>
                </ul>
                
                <h3 style="margin-bottom: 16px; color: var(--primary);">For Subcontractors:</h3>
                <ul style="margin-left: 20px;">
                    <li>Register with HMRC as a subcontractor (if gross payment status is desired)</li>
                    <li>Keep accurate records of all payments received and deductions made</li>
                    <li>Claim deductions back through your self-assessment tax return</li>
                    <li>Maintain compliance to qualify for gross payment status</li>
                </ul>
            </div>
            
            <p>Our team stays up-to-date with all CIS regulations and deadlines, ensuring your business remains compliant while maximizing efficiency.</p>
        </div>
    </div>
</section>
@endsection