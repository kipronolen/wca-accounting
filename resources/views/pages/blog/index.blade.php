@extends('layouts.app')

@section('title', 'Blog - WCA Accounting')
@section('description', 'Insights, tips, and news about accounting, tax, and business finance.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Accounting Blog</h1>
                <p class="hero-subheadline">Insights, tips, and news about accounting, tax, and business finance.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-blog" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-content">
    <div class="container">
        <div class="service-section">
            <h2 class="section-heading">Latest Articles</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 32px; margin-bottom: 40px;">
                <article style="background-color: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <div style="height: 200px; background-color: #e5e7eb; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-file-alt" style="font-size: 48px; color: #9ca3af;"></i>
                    </div>
                    <div style="padding: 24px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                            <span style="background-color: var(--primary); color: white; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 500;">Tax</span>
                            <span style="color: #6b7280; font-size: 14px;">January 15, 2023</span>
                        </div>
                        <h3 style="margin-bottom: 12px; font-size: 20px; color: var(--primary);">Changes to Self-Assessment Deadlines for 2023</h3>
                        <p style="margin-bottom: 16px; color: #6b7280;">Important updates to self-assessment deadlines and what they mean for taxpayers.</p>
                        <a href="#" style="color: var(--primary); text-decoration: none; font-weight: 500;">Read More →</a>
                    </div>
                </article>
                
                <article style="background-color: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <div style="height: 200px; background-color: #e5e7eb; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-file-alt" style="font-size: 48px; color: #9ca3af;"></i>
                    </div>
                    <div style="padding: 24px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                            <span style="background-color: var(--accent); color: white; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 500;">Business</span>
                            <span style="color: #6b7280; font-size: 14px;">December 8, 2022</span>
                        </div>
                        <h3 style="margin-bottom: 12px; font-size: 20px; color: var(--primary);">5 Financial Metrics Every Small Business Should Track</h3>
                        <p style="margin-bottom: 16px; color: #6b7280;">Key performance indicators that can help you understand and improve your business finances.</p>
                        <a href="#" style="color: var(--primary); text-decoration: none; font-weight: 500;">Read More →</a>
                    </div>
                </article>
                
                <article style="background-color: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
                    <div style="height: 200px; background-color: #e5e7eb; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-file-alt" style="font-size: 48px; color: #9ca3af;"></i>
                    </div>
                    <div style="padding: 24px;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                            <span style="background-color: var(--primary); color: white; padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 500;">VAT</span>
                            <span style="color: #6b7280; font-size: 14px;">November 22, 2022</span>
                        </div>
                        <h3 style="margin-bottom: 12px; font-size: 20px; color: var(--primary);">Understanding Making Tax Digital for VAT</h3>
                        <p style="margin-bottom: 16px; color: #6b7280;">What businesses need to know about MTD for VAT and how to prepare for the changes.</p>
                        <a href="#" style="color: var(--primary); text-decoration: none; font-weight: 500;">Read More →</a>
                    </div>
                </article>
            </div>
        </div>
        
        <div class="service-section">
            <h2 class="section-heading">Categories</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px; margin-bottom: 40px;">
                <a href="#" style="display: flex; align-items: center; gap: 12px; padding: 16px; background-color: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); text-decoration: none; transition: transform 0.2s;">
                    <div style="background-color: var(--primary); color: white; width: 40px; height: 40px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-money-bill"></i>
                    </div>
                    <span style="font-weight: 500; color: var(--text-on-light);">Tax</span>
                </a>
                
                <a href="#" style="display: flex; align-items: center; gap: 12px; padding: 16px; background-color: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); text-decoration: none; transition: transform 0.2s;">
                    <div style="background-color: var(--accent); color: white; width: 40px; height: 40px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <span style="font-weight: 500; color: var(--text-on-light);">Business</span>
                </a>
                
                <a href="#" style="display: flex; align-items: center; gap: 12px; padding: 16px; background-color: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); text-decoration: none; transition: transform 0.2s;">
                    <div style="background-color: var(--primary); color: white; width: 40px; height: 40px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-receipt"></i>
                    </div>
                    <span style="font-weight: 500; color: var(--text-on-light);">VAT</span>
                </a>
                
                <a href="#" style="display: flex; align-items: center; gap: 12px; padding: 16px; background-color: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); text-decoration: none; transition: transform 0.2s;">
                    <div style="background-color: var(--accent); color: white; width: 40px; height: 40px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-users"></i>
                    </div>
                    <span style="font-weight: 500; color: var(--text-on-light);">Payroll</span>
                </a>
                
                <a href="#" style="display: flex; align-items: center; gap: 12px; padding: 16px; background-color: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); text-decoration: none; transition: transform 0.2s;">
                    <div style="background-color: var(--primary); color: white; width: 40px; height: 40px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <span style="font-weight: 500; color: var(--text-on-light);">CIS</span>
                </a>
                
                <a href="#" style="display: flex; align-items: center; gap: 12px; padding: 16px; background-color: white; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05); text-decoration: none; transition: transform 0.2s;">
                    <div style="background-color: var(--accent); color: white; width: 40px; height: 40px; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <span style="font-weight: 500; color: var(--text-on-light);">Business Advice</span>
                </a>
            </div>
        </div>
        
        <div class="service-section">
            <h2 class="section-heading">Subscribe to Our Newsletter</h2>
            <p>Stay updated with the latest accounting news, tips, and insights delivered to your inbox.</p>
            
            <div style="background-color: white; padding: 32px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05); max-width: 600px; margin: 0 auto;">
                <form>
                    <div style="margin-bottom: 16px;">
                        <label for="email" style="display: block; margin-bottom: 8px; font-weight: 500;">Email Address</label>
                        <input type="email" id="email" style="width: 100%; padding: 12px; border: 1px solid #e5e7eb; border-radius: 4px;" placeholder="your@email.com">
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label style="display: flex; align-items: flex-start; gap: 8px;">
                            <input type="checkbox" style="margin-top: 4px;">
                            <span style="font-size: 14px;">I agree to receive marketing communications from WCA Accounting</span>
                        </label>
                    </div>
                    <button type="submit" style="background-color: var(--primary); color: white; padding: 12px 24px; border: none; border-radius: 4px; font-weight: 500; cursor: pointer;">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection