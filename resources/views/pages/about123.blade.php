@extends('layouts.app')

@section('title', 'About Us - WCA Accounting')
@section('description', 'Learn about WCA Accounting, our mission, values, and the team behind our professional accounting services.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">More Than Accountants — Your Finance Partners</h1>
                <p class="hero-subheadline">WCA Accounting was founded by real people who care about real business challenges. Meet the team that's changing how accounting is done.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-handshake" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Our Story</h2>
        </div>
        
        <div style="display: flex; gap: 40px; align-items: center; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 300px;">
                <p>We started WCA Accounting to bridge the gap between cold number-crunching and real-world business clarity. As experienced accountants from corporate finance, we knew it was time to help small businesses thrive with clear advice and modern tools.</p>
                <p>Wasay and Chimango, two chartered accountants and friends, have helped companies like Vodafone, IPG Health, and Mitie. Now they focus on helping people like you stay tax-compliant, financially smart, and stress-free.</p>
            </div>
            <div style="flex: 1; min-width: 300px; text-align: center;">
                <div style="background-color: #f3f4f6; border-radius: 10px; padding: 30px;">
                    <i class="fas fa-chart-line" style="font-size: 60px; color: var(--primary); margin-bottom: 20px;"></i>
                    <h3>Our Mission</h3>
                    <p>To remove the stress from accounting and empower business owners to make smarter decisions with clear, compliant, and confidence-building financial advice.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Our Core Values</h2>
        </div>
        
        <div class="features-grid">
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-comment-alt"></i></div>
                <div class="feature-content">
                    <h3>Clarity over Confusion</h3>
                    <p>No jargon, just straight answers you can understand and act upon.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-handshake"></i></div>
                <div class="feature-content">
                    <h3>Trust First</h3>
                    <p>We treat your business like our own, with integrity and respect.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-laptop-code"></i></div>
                <div class="feature-content">
                    <h3>Tech-Forward</h3>
                    <p>Cloud-based tools and fast systems for efficient service delivery.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-clipboard-list"></i></div>
                <div class="feature-content">
                    <h3>Custom Advice</h3>
                    <p>Every client, every need, every plan is tailored to your situation.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-sync-alt"></i></div>
                <div class="feature-content">
                    <h3>Consistent Communication</h3>
                    <p>Updates, support, and proactive insight when you need it.</p>
                </div>
            </div>
            
            <div class="feature-item">
                <div class="feature-icon"><i class="fas fa-chart-pie"></i></div>
                <div class="feature-content">
                    <h3>Results-Driven</h3>
                    <p>We don't just file returns — we help you grow your business.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Our Future</h2>
        </div>
        
        <div style="text-align: center; max-width: 800px; margin: 0 auto;">
            <p>We're building the UK's most client-friendly accounting experience, powered by expertise, automation, and empathy. Our goal is to make professional accounting accessible to every small business owner, freelancer, and startup across the United Kingdom.</p>
            <p>Through continuous innovation and a relentless focus on client success, we aim to become the accounting partner of choice for the next generation of UK businesses.</p>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Get In Touch</h2>
            <p>Ready to experience the WCA difference? Contact us today for a free consultation.</p>
        </div>
        
        <div style="text-align: center;">
            <a href="{{ route('contact') }}" class="btn">Contact Us Today</a>
        </div>
    </div>
</section>
@endsection