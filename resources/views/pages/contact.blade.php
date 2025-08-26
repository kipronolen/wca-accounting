@extends('layouts.app')

@section('title', 'Contact Us - WCA Accounting')
@section('description', 'Get in touch with WCA Accounting to discuss how we can help with your accounting needs.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Get In Touch</h1>
                <p class="hero-subheadline">We'd love to hear from you. Contact us today to discuss how we can help with your accounting needs.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-envelope" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Contact Information</h2>
        </div>
        
        <div style="display: flex; gap: 40px; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 300px;">
                <div style="display: flex; align-items: flex-start; margin-bottom: 30px;">
                    <div style="font-size: 24px; color: var(--primary); margin-right: 15px;">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h3>Address</h3>
                        <p>Wickham Road, London, United Kingdom</p>
                    </div>
                </div>
                
                <div style="display: flex; align-items: flex-start; margin-bottom: 30px;">
                    <div style="font-size: 24px; color: var(--primary); margin-right: 15px;">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                        <h3>Phone</h3>
                        <p><a href="tel:+442080586029" style="color: var(--text-on-light); text-decoration: none;">+44 20 8058 6029</a></p>
                    </div>
                </div>
                
                <div style="display: flex; align-items: flex-start; margin-bottom: 30px;">
                    <div style="font-size: 24px; color: var(--primary); margin-right: 15px;">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h3>Email</h3>
                        <p><a href="mailto:info@wcaccountingservices.co.uk" style="color: var(--text-on-light); text-decoration: none;">info@wcaccountingservices.co.uk</a></p>
                    </div>
                </div>
                
                <div style="display: flex; align-items: flex-start;">
                    <div style="font-size: 24px; color: var(--primary); margin-right: 15px;">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div>
                        <h3>Working Hours</h3>
                        <p>Mon–Fri, 9:00 AM – 6:00 PM</p>
                    </div>
                </div>
            </div>
            
            <div style="flex: 1; min-width: 300px;">
                <h3>Areas We Serve</h3>
                <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-top: 15px;">
                    <span style="background-color: var(--primary); color: white; padding: 8px 15px; border-radius: 20px; font-size: 14px;">London</span>
                    <span style="background-color: var(--primary); color: white; padding: 8px 15px; border-radius: 20px; font-size: 14px;">Manchester</span>
                    <span style="background-color: var(--primary); color: white; padding: 8px 15px; border-radius: 20px; font-size: 14px;">Birmingham</span>
                    <span style="background-color: var(--primary); color: white; padding: 8px 15px; border-radius: 20px; font-size: 14px;">Leeds</span>
                    <span style="background-color: var(--primary); color: white; padding: 8px 15px; border-radius: 20px; font-size: 14px;">Glasgow</span>
                    <span style="background-color: var(--primary); color: white; padding: 8px 15px; border-radius: 20px; font-size: 14px;">Liverpool</span>
                    <span style="background-color: var(--primary); color: white; padding: 8px 15px; border-radius: 20px; font-size: 14px;">Bristol</span>
                    <span style="background-color: var(--primary); color: white; padding: 8px 15px; border-radius: 20px; font-size: 14px;">Newcastle</span>
                    <span style="background-color: var(--primary); color: white; padding: 8px 15px; border-radius: 20px; font-size: 14px;">Nationwide</span>
                </div>
                
                <div style="margin-top: 30px;">
                    <h3>Follow Us</h3>
                    <div style="display: flex; gap: 15px; margin-top: 15px;">
                        <a href="#" style="color: var(--primary); font-size: 24px;"><i class="fab fa-linkedin"></i></a>
                        <a href="#" style="color: var(--primary); font-size: 24px;"><i class="fab fa-twitter"></i></a>
                        <a href="#" style="color: var(--primary); font-size: 24px;"><i class="fab fa-facebook"></i></a>
                        <a href="#" style="color: var(--primary); font-size: 24px;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Send Us a Message</h2>
            <p>Fill out the form below and we'll get back to you as soon as possible</p>
        </div>
        
        <form style="max-width: 600px; margin: 0 auto;">
            <div class="form-group">
                <label for="contact-name">Full Name</label>
                <input type="text" id="contact-name" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="contact-email">Email Address</label>
                <input type="email" id="contact-email" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="contact-phone">Telephone</label>
                <input type="tel" id="contact-phone" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="business-type-contact">Business Type</label>
                <select id="business-type-contact" class="form-control">
                    <option value="">Select Business Type</option>
                    <option value="sole-trader">Sole Trader</option>
                    <option value="limited-company">Limited Company</option>
                    <option value="partnership">Partnership</option>
                    <option value="freelancer">Freelancer/Contractor</option>
                    <option value="startup">Startup</option>
                    <option value="other">Other</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="services-interest">Services Interested In</label>
                <select id="services-interest" class="form-control">
                    <option value="">Select Service</option>
                    <option value="accounting">Accounts Preparation</option>
                    <option value="tax">Tax Returns</option>
                    <option value="vat">VAT Returns</option>
                    <option value="bookkeeping">Bookkeeping</option>
                    <option value="payroll">Payroll</option>
                    <option value="self-assessment">Self-Assessment</option>
                    <option value="cis">CIS Returns</option>
                    <option value="company-formation">Company Formation</option>
                    <option value="advisory">Business Advisory</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" class="form-control" rows="5" required></textarea>
            </div>
            
            <button type="submit" class="btn" style="width: 100%;">Send Message</button>
        </form>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Find Us</h2>
        </div>
        
        <div style="background-color: #f3f4f6; height: 400px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
            <div style="text-align: center;">
                <i class="fas fa-map-marked-alt" style="font-size: 60px; color: var(--primary); margin-bottom: 20px;"></i>
                <h3>Map Location</h3>
                <p>Wickham Road, London, United Kingdom</p>
            </div>
        </div>
    </div>
</section>
@endsection