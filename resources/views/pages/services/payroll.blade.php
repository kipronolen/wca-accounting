@extends('layouts.app')

@section('title', 'Payroll Services - WCA Accounting')
@section('description', 'Complete payroll processing including RTI submissions, payslips, pension administration, and year-end reporting.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Payroll Services</h1>
                <p class="hero-subheadline">Complete payroll processing including RTI submissions, payslips, pension administration, and year-end reporting.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-users" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-content">
    <div class="container">
        <div class="service-section">
            <h2 class="section-heading">Comprehensive Payroll Solutions</h2>
            <p>Our payroll services are designed to take the burden of payroll processing off your shoulders, ensuring accuracy, compliance, and timely payments. We handle all aspects of payroll management so you can focus on growing your business.</p>
            
            <div class="service-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-file-invoice"></i>
                    </div>
                    <h3 class="feature-title">RTI Submissions</h3>
                    <p>We handle all Real Time Information submissions to HMRC, ensuring full compliance with current regulations.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-money-check"></i>
                    </div>
                    <h3 class="feature-title">Payslip Generation</h3>
                    <p>Professional, detailed payslips for all employees with clear breakdowns of earnings and deductions.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-piggy-bank"></i>
                    </div>
                    <h3 class="feature-title">Pension Administration</h3>
                    <p>Full auto-enrolment compliance and pension scheme management, including contributions and reporting.</p>
                </div>
            </div>
            
            <div class="service-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="feature-title">Year-End Reporting</h3>
                    <p>Preparation and submission of P60s, P11Ds, and other year-end documentation required by HMRC.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="feature-title">Employee Support</h3>
                    <p>Dedicated support for employee queries regarding pay, tax, and other payroll-related matters.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="feature-title">Reporting & Analysis</h3>
                    <p>Custom reports and analysis to help you understand your payroll costs and make informed decisions.</p>
                </div>
            </div>
        </div>
        
        <div class="service-section">
            <h2 class="section-heading">Our Payroll Process</h2>
            <p>We've developed an efficient, streamlined payroll process that ensures accuracy and timeliness:</p>
            <ol style="margin-left: 20px; margin-bottom: 24px;">
                <li><strong>Data Collection:</strong> Secure collection of timesheets, hours worked, and other relevant data</li>
                <li><strong>Processing:</strong> Calculation of gross pay, deductions, and net pay for each employee</li>
                <li><strong>Verification:</strong> Thorough checking and verification of all calculations</li>
                <li><strong>Submission:</strong> RTI submission to HMRC and payment processing</li>
                <li><strong>Distribution:</strong> Delivery of payslips and management reports</li>
            </ol>
            <p>With our payroll service, you can be confident that your employees will be paid accurately and on time, with full compliance maintained at all times.</p>
        </div>
    </div>
</section>
@endsection