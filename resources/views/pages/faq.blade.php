@extends('layouts.app')

@section('title', 'Frequently Asked Questions - WCA Accounting')
@section('description', 'Find answers to common questions about our accounting services, processes, and pricing.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Frequently Asked Questions</h1>
                <p class="hero-subheadline">Find answers to common questions about our services, processes, and how we can help your business.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-question-circle" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>General Questions</h2>
            <p>Common questions about working with WCA Accounting</p>
        </div>
        
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <span>What makes WCA different from other accounting firms?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>We combine corporate-level expertise with small business understanding. Our founders have worked with major companies like Vodafone and Mitie, but we're passionate about helping small businesses thrive. We offer clear communication, fixed pricing, and modern technology to make accounting simple and stress-free.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Do you only work with UK-based clients?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we specialize in UK accounting regulations and tax laws. All our services are tailored to comply with HMRC requirements and UK accounting standards. We serve clients across England, Scotland, Wales, and Northern Ireland.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>What's your onboarding process?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>Our onboarding process is simple: 1) Initial consultation to understand your needs, 2) Engagement letter and secure document sharing, 3) Setup in our systems and software integration, 4) Regular ongoing support. The entire process typically takes 3-5 business days.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Are your services MTD compliant?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>Absolutely. All our VAT and tax services are fully compliant with Making Tax Digital requirements. We use HMRC-recognized software and ensure all submissions meet MTD standards. We also help clients transition to MTD if they haven't already.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Can I switch to WCA mid-year?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we regularly onboard clients throughout the financial year. We handle the transition process with your previous accountant, ensuring a smooth handover without disrupting your compliance requirements or financial reporting.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Service-Specific Questions</h2>
            <p>Questions about our specific accounting services</p>
        </div>
        
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <span>What accounting software do you work with?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>We're certified partners with Xero and QuickBooks, and we're experienced with all major accounting platforms including Sage, FreeAgent, and KashFlow. We can help you choose the right software for your business and provide training to get you up and running.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Do you handle VAT registration?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we can handle your VAT registration from start to finish. We'll advise on the most suitable VAT scheme for your business, complete all necessary paperwork, and manage your VAT returns going forward.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>What payroll services do you offer?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>We offer complete payroll processing including RTI submissions to HMRC, payslip generation, pension auto-enrolment compliance, year-end reporting (P60s, P11Ds), and payroll advice. We can handle payroll for businesses of all sizes.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Can you help with company formation?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we offer a complete company formation service. We'll handle your registration with Companies House, advise on company structure, set up your business bank account, and provide all the necessary documentation to get your business started correctly.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <div class="section-title">
            <h2>Pricing & Billing Questions</h2>
            <p>Questions about our pricing structure and billing</p>
        </div>
        
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <span>What's included in your fixed fee packages?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>Our fixed fee packages include all the services outlined in your package, with no hidden extras. This includes preparation and submission of all necessary documents, ongoing support via email and phone, and access to our client portal. The only additional costs would be for services not included in your package or any third-party fees (such as Companies House filing fees).</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Do you offer monthly payment plans?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we offer flexible monthly payment plans to help spread the cost of your accounting services. This makes it easier to budget and manage your cash flow while still receiving the full range of services you need.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>What happens if I need additional services?</span>
                    <span>+</span>
                </div>
                <div class="faq-answer">
                    <p>If you need services beyond what's included in your package, we'll always provide a quote upfront before any work begins. Many of our clients start with a basic package and upgrade as their business grows and their accounting needs become more complex.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-white">
    <div class="container">
        <div class="section-title">
            <h2>Still Have Questions?</h2>
            <p>Can't find what you're looking for? Contact us directly</p>
        </div>
        
        <div style="text-align: center;">
            <a href="{{ route('contact') }}" class="btn">Contact Our Team</a>
        </div>
    </div>
</section>
@endsection