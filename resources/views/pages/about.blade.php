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

<!-- Stats Section -->
<section class="section section-white">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number">10+</div>
                <div class="stat-label">Years Experience</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">200+</div>
                <div class="stat-label">Clients Served</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">98%</div>
                <div class="stat-label">Client Retention</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">4.9/5</div>
                <div class="stat-label">Customer Rating</div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Our Story</h2>
            <p>From corporate finance to small business expertise</p>
        </div>
        
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3>2012: Foundation</h3>
                    <p>Wasay and Chimango founded WCA Accounting with a vision to bridge the gap between corporate accounting expertise and small business needs.</p>
                </div>
                <div class="timeline-dot"></div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3>2014: First Office</h3>
                    <p>We opened our first dedicated office space in London, allowing us to better serve our growing client base.</p>
                </div>
                <div class="timeline-dot"></div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3>2017: Team Expansion</h3>
                    <p>We expanded our team to include specialized tax advisors and bookkeeping experts to offer more comprehensive services.</p>
                </div>
                <div class="timeline-dot"></div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3>2020: Digital Transformation</h3>
                    <p>We fully embraced cloud accounting solutions, allowing us to serve clients remotely across the UK with greater efficiency.</p>
                </div>
                <div class="timeline-dot"></div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-content">
                    <h3>2023: Today</h3>
                    <p>Now serving over 200 clients with a team of 10 accounting professionals, we continue to grow while maintaining our personal approach.</p>
                </div>
                <div class="timeline-dot"></div>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Our Mission & Vision</h2>
            <p>What drives us every day</p>
        </div>
        
        <div style="display: flex; gap: 40px; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 300px;">
                <div style="background-color: var(--surface-light); padding: 30px; border-radius: 10px; height: 100%;">
                    <div style="font-size: 40px; color: var(--primary); margin-bottom: 20px;">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; color: var(--primary);">Our Mission</h3>
                    <p>To remove the stress from accounting and empower business owners to make smarter decisions with clear, compliant, and confidence-building financial advice.</p>
                </div>
            </div>
            
            <div style="flex: 1; min-width: 300px;">
                <div style="background-color: var(--surface-light); padding: 30px; border-radius: 10px; height: 100%;">
                    <div style="font-size: 40px; color: var(--primary); margin-bottom: 20px;">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 style="margin-bottom: 15px; color: var(--primary);">Our Vision</h3>
                    <p>To become the UK's most client-friendly accounting experience, powered by expertise, automation, and empathy for small business owners.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Our Core Values</h2>
            <p>The principles that guide everything we do</p>
        </div>
        
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <h3>Clarity over Confusion</h3>
                <p>No jargon, just straight answers you can understand and act upon.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3>Trust First</h3>
                <p>We treat your business like our own, with integrity and respect.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-laptop-code"></i>
                </div>
                <h3>Tech-Forward</h3>
                <p>Cloud-based tools and fast systems for efficient service delivery.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <h3>Custom Advice</h3>
                <p>Every client, every need, every plan is tailored to your situation.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-sync-alt"></i>
                </div>
                <h3>Consistent Communication</h3>
                <p>Updates, support, and proactive insight when you need it.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Results-Driven</h3>
                <p>We don't just file returns — we help you grow your business.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Meet Our Team</h2>
            <p>The talented professionals behind WCA Accounting</p>
        </div>
        
        <div class="team-grid">
            <div class="team-member">
                <div class="member-image">
                    <i class="fas fa-user"></i>
                </div>
                <h3>Wasay Butt</h3>
                <div class="role">Chartered Accountant & Founder</div>
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
                <div class="role">Chartered Accountant & Founder</div>
                <p>Background in Tax Law with experience at Engie and IPG Health. Specializes in compliance and client confidence.</p>
                <div style="margin-top: 20px;">
                    <a href="#" style="color: var(--primary); margin: 0 10px;"><i class="fab fa-linkedin"></i></a>
                    <a href="#" style="color: var(--primary); margin: 0 10px;"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Future Section -->
<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Our Future</h2>
            <p>Where we're headed</p>
        </div>
        
        <div style="text-align: center; max-width: 800px; margin: 0 auto;">
            <p>We're building the UK's most client-friendly accounting experience, powered by expertise, automation, and empathy. Our goal is to make professional accounting accessible to every small business owner, freelancer, and startup across the United Kingdom.</p>
            <p>Through continuous innovation and a relentless focus on client success, we aim to become the accounting partner of choice for the next generation of UK businesses.</p>
            
            <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; margin-top: 40px;">
                <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); flex: 1; min-width: 200px;">
                    <div style="font-size: 30px; color: var(--accent); margin-bottom: 15px;">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>AI Integration</h3>
                    <p>Implementing AI tools to provide faster, more accurate financial insights.</p>
                </div>
                
                <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); flex: 1; min-width: 200px;">
                    <div style="font-size: 30px; color: var(--accent); margin-bottom: 15px;">
                        <i class="fas fa-expand"></i>
                    </div>
                    <h3>UK Expansion</h3>
                    <p>Opening new offices to serve clients across the United Kingdom.</p>
                </div>
                
                <div style="background: white; padding: 20px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); flex: 1; min-width: 200px;">
                    <div style="font-size: 30px; color: var(--accent); margin-bottom: 15px;">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Education Platform</h3>
                    <p>Developing resources to help business owners understand their finances.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-heading">Ready to Work With Us?</h2>
            <p style="margin-bottom: 30px; font-size: 1.2rem;">Join our growing family of satisfied clients and experience the WCA difference.</p>
            <a href="#contact" class="btn">Get Started Today</a>
        </div>
    </div>
</section>

<script>
    // Simple animation for timeline items
    document.addEventListener('DOMContentLoaded', function() {
        const timelineItems = document.querySelectorAll('.timeline-content');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });
        
        timelineItems.forEach(item => {
            item.style.opacity = 0;
            item.style.transform = 'translateY(20px)';
            item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            observer.observe(item);
        });
    });
</script>
@endsection