@extends('layouts.app')

@section('title', 'Who We Serve - WCA Accounting')
@section('description', 'Tailored accounting solutions for different business structures and industries.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Who We Serve</h1>
                <p class="hero-subheadline">Tailored accounting solutions for different business structures and industries.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-handshake" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-content">
    <div class="container">
        <div class="service-section">
            <h2 class="section-heading">Our Clients</h2>
            <p>At WCA Accounting, we proudly serve a diverse range of clients across various industries and business structures. Our tailored approach ensures that each client receives the specific accounting support they need to thrive.</p>
            
            <div class="service-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="feature-title">Startups</h3>
                    <p>Specialized accounting support for new businesses including setup advice and investor reporting.</p>
                    <a href="{{ route('clients.startups') }}" class="btn btn-primary">Learn More</a>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="feature-title">Freelancers</h3>
                    <p>Accounting solutions designed for independent professionals and gig economy workers.</p>
                    <a href="{{ route('clients.freelancers') }}" class="btn btn-primary">Learn More</a>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h3 class="feature-title">Contractors</h3>
                    <p>Specialist services for contractors, particularly those in the construction industry (CIS).</p>
                    <a href="{{ route('clients.contractors') }}" class="btn btn-primary">Learn More</a>
                </div>
            </div>
            
            <div class="service-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="feature-title">Partnerships</h3>
                    <p>Accounting and tax services for business partnerships and LLPs.</p>
                    <a href="{{ route('clients.partnerships') }}" class="btn btn-primary">Learn More</a>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="feature-title">Sole Traders</h3>
                    <p>Complete accounting solutions for self-employed individuals and sole proprietors.</p>
                    <a href="{{ route('clients.sole-traders') }}" class="btn btn-primary">Learn More</a>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="feature-title">Limited Companies</h3>
                    <p>Comprehensive accounting services for limited companies of all sizes.</p>
                    <a href="{{ route('clients.limited-companies') }}" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        
        <div class="service-section">
            <h2 class="section-heading">Industry Specializations</h2>
            <p>While we serve businesses across all sectors, we have developed particular expertise in several key industries:</p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin-bottom: 40px;">
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <h3 style="margin-bottom: 16px; color: var(--primary);">Construction</h3>
                    <p>Specialist knowledge of CIS, contract accounting, and industry-specific tax considerations.</p>
                </div>
                
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <h3 style="margin-bottom: 16px; color: var(--primary);">Professional Services</h3>
                    <p>Accounting for consultants, agencies, and other professional service providers.</p>
                </div>
                
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <h3 style="margin-bottom: 16px; color: var(--primary);">Retail & E-commerce</h3>
                    <p>Solutions for inventory management, sales reporting, and online business accounting.</p>
                </div>
                
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <h3 style="margin-bottom: 16px; color: var(--primary);">Creative Industries</h3>
                    <p>Specialist accounting for designers, artists, and creative professionals.</p>
                </div>
                
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <h3 style="margin-bottom: 16px; color: var(--primary);">Technology</h3>
                    <p>Expertise in R&D tax credits, software accounting, and tech startup financing.</p>
                </div>
                
                <div style="background-color: white; padding: 24px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <h3 style="margin-bottom: 16px; color: var(--primary);">Property</h3>
                    <p>Accounting services for landlords, property developers, and real estate businesses.</p>
                </div>
            </div>
            
            <p>No matter your industry or business structure, we have the expertise to provide the accounting support you need to succeed.</p>
        </div>
    </div>
</section>
@endsection