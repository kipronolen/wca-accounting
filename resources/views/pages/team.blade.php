@extends('layouts.app')

@section('title', 'Our Team - WCA Accounting')
@section('description', 'Meet the dedicated professionals behind WCA Accounting who are committed to your financial success.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Meet Our Team</h1>
                <p class="hero-subheadline">Get to know the dedicated professionals behind WCA Accounting who are committed to your financial success.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-users" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Our Leadership</h2>
            <p>WCA is led by two chartered accountants with real-world experience, corporate insight, and small-business hearts.</p>
        </div>
        
        <div class="team-grid">
            <div class="team-member">
                <div class="member-image">
                    <i class="fas fa-user"></i>
                </div>
                <h3>Wasay Butt</h3>
                <div class="role">Chartered Accountant</div>
                <p>Senior finance roles at Vodafone, Mitie. Brings 10+ years of leadership, compliance, and insight to help businesses thrive.</p>
                <div style="margin-top: 20px;">
                    <a href="#" style="color: var(--primary); margin: 0 10px;"><i class="fab fa-linkedin"></i></a>
                    <a href="#" style="color: var(--primary); margin: 0 10px;"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            
            <div class="team-member">
                <div class="member-image">
                    <i class="fas fa-user"></i>
                </div>
                <h3>Chimango Gondwe</h3>
                <div class="role">Chartered Accountant</div>
                <p>Background in Tax Law with experience at Engie and IPG Health. Specializes in compliance and client confidence.</p>
                <div style="margin-top: 20px;">
                    <a href="#" style="color: var(--primary); margin: 0 10px;"><i class="fab fa-linkedin"></i></a>
                    <a href="#" style="color: var(--primary); margin: 0 10px;"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Our Associates</h2>
            <p>Our network of specialized professionals ensures you get the best advice for your specific needs.</p>
        </div>
        
        <div class="team-grid">
            <div class="team-member">
                <div class="member-image">
                    <i class="fas fa-user"></i>
                </div>
                <h3>Sarah Johnson</h3>
                <div class="role">Tax Specialist</div>
                <p>10+ years experience in tax planning and compliance for small businesses and individuals.</p>
            </div>
            
            <div class="team-member">
                <div class="member-image">
                    <i class="fas fa-user"></i>
                </div>
                <h3>Michael Chen</h3>
                <div class="role">Bookkeeping Expert</div>
                <p>Certified QuickBooks and Xero ProAdvisor with expertise in small business accounting.</p>
            </div>
            
            <div class="team-member">
                <div class="member-image">
                    <i class="fas fa-user"></i>
                </div>
                <h3>Emma Wilson</h3>
                <div class="role">Payroll Specialist</div>
                <p>Manages payroll for over 100 clients with 100% RTI compliance record.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Join Our Team</h2>
            <p>We're always looking for talented professionals who share our passion for helping businesses succeed.</p>
        </div>
        
        <div style="text-align: center; max-width: 600px; margin: 0 auto;">
            <p>If you're a qualified accountant who believes in transparent, client-focused service, we'd love to hear from you.</p>
            <a href="{{ route('contact') }}" class="btn" style="margin-top: 20px;">View Career Opportunities</a>
        </div>
    </div>
</section>
@endsection