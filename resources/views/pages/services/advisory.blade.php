@extends('layouts.app')

@section('title', 'Business Advisory - WCA Accounting')
@section('description', 'Strategic financial advice to help you make informed decisions and grow your business.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Business Advisory Services</h1>
                <p class="hero-subheadline">Strategic financial advice to help you make informed decisions and grow your business.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-chart-line" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-content">
    <div class="container">
        <div class="service-section">
            <h2 class="section-heading">Strategic Business Advisory Services</h2>
            <p>Beyond compliance and reporting, we provide strategic financial advice to help you navigate challenges, identify opportunities, and drive sustainable business growth.</p>
            
            <div class="service-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="feature-title">Business Planning</h3>
                    <p>Development of comprehensive business plans, financial projections, and growth strategies.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3 class="feature-title">Financial Analysis</h3>
                    <p>In-depth analysis of financial performance, key metrics, and benchmarking against industry standards.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3 class="feature-title">Cash Flow Management</h3>
                    <p>Strategies to optimize cash flow, improve working capital, and manage financial risks.</p>
                </div>
            </div>
            
            <div class="service-features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="feature-title">Funding & Finance</h3>
                    <p>Advice on funding options, loan applications, and investor readiness preparation.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="feature-title">Tax Efficiency Planning</h3>
                    <p>Strategic tax planning to minimize liabilities and maximize retention of profits.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </div>
                    <h3 class="feature-title">Exit & Succession Planning</h3>
                    <p>Planning for business sales, succession, or other ownership transition events.</p>
                </div>
            </div>
        </div>
        
        <div class="service-section">
            <h2 class="section-heading">Our Advisory Approach</h2>
            <p>Our business advisory services are tailored to your specific needs and goals. We take a holistic approach to understanding your business and providing actionable insights:</p>
            
            <div style="background-color: #f8f9fa; padding: 32px; border-radius: 8px; margin-bottom: 24px;">
                <h3 style="margin-bottom: 20px; color: var(--primary); text-align: center;">Four-Step Advisory Process</h3>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                    <div style="text-align: center;">
                        <div style="background-color: var(--primary); color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; font-size: 24px;">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4 style="margin-bottom: 8px; color: var(--primary);">Discovery</h4>
                        <p style="font-size: 14px;">We begin by thoroughly understanding your business, goals, and challenges.</p>
                    </div>
                    
                    <div style="text-align: center;">
                        <div style="background-color: var(--primary); color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; font-size: 24px;">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <h4 style="margin-bottom: 8px; color: var(--primary);">Analysis</h4>
                        <p style="font-size: 14px;">We analyze your financial data, operations, and market position.</p>
                    </div>
                    
                    <div style="text-align: center;">
                        <div style="background-color: var(--primary); color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; font-size: 24px;">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4 style="margin-bottom: 8px; color: var(--primary);">Strategy</h4>
                        <p style="font-size: 14px;">We develop tailored strategies and actionable recommendations.</p>
                    </div>
                    
                    <div style="text-align: center;">
                        <div style="background-color: var(--primary); color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px; font-size: 24px;">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h4 style="margin-bottom: 8px; color: var(--primary);">Implementation</h4>
                        <p style="font-size: 14px;">We support you in implementing changes and tracking progress.</p>
                    </div>
                </div>
            </div>
            
            <p>Whether you're looking to improve profitability, plan for growth, or prepare for exit, our business advisory services provide the strategic guidance you need to make informed decisions and achieve your business objectives.</p>
        </div>
    </div>
</section>
@endsection