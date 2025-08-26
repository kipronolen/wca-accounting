@extends('layouts.app')

@section('title', 'Testimonials - WCA Accounting')
@section('description', 'See what our clients say about our accounting services and professional support.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Client Testimonials</h1>
                <p class="hero-subheadline">Hear from businesses and individuals who have experienced the WCA Accounting difference.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-star" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>What Our Clients Say</h2>
            <p>We're proud of the relationships we've built with our clients and the results we've helped them achieve.</p>
        </div>
        
        <div class="testimonials-slider">
            <div class="testimonial">
                <div class="testimonial-text">
                    <p>WCA gave us clarity from day one. They genuinely care about our business success and make accounting simple and stress-free.</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-image">
                        JS
                    </div>
                    <div class="author-details">
                        <h4>James Smith</h4>
                        <p>Director, Smith Consulting Ltd</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial">
                <div class="testimonial-text">
                    <p>Switching to WCA Accounting was the best business decision we made last year. Their expertise saved us thousands in tax liabilities.</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-image">
                        AR
                    </div>
                    <div class="author-details">
                        <h4>Amanda Roberts</h4>
                        <p>Founder, Creative Solutions</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial">
                <div class="testimonial-text">
                    <p>As a freelancer, I was struggling with my taxes. WCA made everything simple and now I have complete peace of mind.</p>
                </div>
                <div class="testimonial-author">
                    <div class="author-image">
                        DC
                    </div>
                    <div class="author-details">
                        <h4>David Chen</h4>
                        <p>Freelance Developer</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <div style="display: flex; justify-content: center; gap: 20px; margin-bottom: 20px; flex-wrap: wrap;">
                <!-- Trustpilot -->
                <div style="display: flex; align-items: center; background: #00b67a; color: white; padding: 8px 15px; border-radius: 5px;">
                    <span style="margin-right: 8px;">★★★★★</span>
                    <span>Trustpilot</span>
                </div>
                
                <!-- Google -->
                <div style="display: flex; align-items: center; background: #4285F4; color: white; padding: 8px 15px; border-radius: 5px;">
                    <span style="margin-right: 8px;">★★★★★</span>
                    <span>Google</span>
                </div>
                
                <!-- Reviews.io -->
                <div style="display: flex; align-items: center; background: #3A47AB; color: white; padding: 8px 15px; border-radius: 5px;">
                    <span style="margin-right: 8px;">★★★★★</span>
                    <span>Reviews.io</span>
                </div>
            </div>
            <p>4.9 / 5.0 Average Rating from 100+ Reviews</p>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Video Testimonials</h2>
            <p>See and hear directly from our satisfied clients</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <div style="background-color: #f3f4f6; border-radius: 10px; padding: 30px; text-align: center;">
                <i class="fas fa-video" style="font-size: 60px; color: var(--primary); margin-bottom: 20px;"></i>
                <h3>Sarah's Story</h3>
                <p>How WCA helped streamline accounting for her growing startup</p>
                <a href="#" class="btn" style="margin-top: 15px;">Watch Video</a>
            </div>
            
            <div style="background-color: #f3f4f6; border-radius: 10px; padding: 30px; text-align: center;">
                <i class="fas fa-video" style="font-size: 60px; color: var(--primary); margin-bottom: 20px;"></i>
                <h3>Michael's Experience</h3>
                <p>A contractor's journey with WCA's CIS expertise</p>
                <a href="#" class="btn" style="margin-top: 15px;">Watch Video</a>
            </div>
            
            <div style="background-color: #f3f4f6; border-radius: 10px; padding: 30px; text-align: center;">
                <i class="fas fa-video" style="font-size: 60px; color: var(--primary); margin-bottom: 20px;"></i>
                <h3>Emma's Success</h3>
                <p>How our advisory services helped scale a small business</p>
                <a href="#" class="btn" style="margin-top: 15px;">Watch Video</a>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Ready to Join Our Happy Clients?</h2>
            <p>Experience the WCA difference for yourself</p>
        </div>
        
        <div style="text-align: center;">
            <a href="{{ route('contact') }}" class="btn">Get Started Today</a>
        </div>
    </div>
</section>
@endsection