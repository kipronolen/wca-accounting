@extends('layouts.app')

@section('title', 'Tax Calculator - WCA Accounting')
@section('description', 'Free tax calculator to estimate your tax liability and plan your finances.')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-headline">Tax Calculator</h1>
                <p class="hero-subheadline">Free tax calculator to estimate your tax liability and plan your finances.</p>
            </div>
            <div class="hero-image">
                <div style="background-color: rgba(255,255,255,0.1); padding: 30px; border-radius: 10px; width: 400px; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-calculator" style="font-size: 80px; color: white;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="calculator-section">
    <div class="container">
        <div class="calculator-wrapper">
            <div class="calculator-card">
                <h2>UK Tax Calculator</h2>
                <p>Estimate your income tax and National Insurance contributions based on your employment status and income.</p>
                
                <div class="calculator-form">
                    <div class="form-group">
                        <label for="income">Annual Income (£)</label>
                        <input type="number" id="income" placeholder="Enter your gross annual income" min="0" step="100">
                    </div>
                    
                    <div class="form-group">
                        <label for="employmentType">Employment Status</label>
                        <select id="employmentType">
                            <option value="employed">Employed (PAYE)</option>
                            <option value="selfEmployed">Self-Employed</option>
                            <option value="pension">Pension Income</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="allowances">Additional Allowances (£)</label>
                        <input type="number" id="allowances" placeholder="e.g., pension contributions" min="0" step="100">
                    </div>
                    
                    <button id="calculateBtn" class="btn btn-primary">Calculate Tax</button>
                </div>
                
                <div id="results" class="calculator-results" style="display: none;">
                    <h3>Your Tax Calculation</h3>
                    <div class="result-item">
                        <span>Total Taxable Income:</span>
                        <span id="taxableIncome">£0.00</span>
                    </div>
                    <div class="result-item">
                        <span>Income Tax:</span>
                        <span id="incomeTax">£0.00</span>
                    </div>
                    <div class="result-item">
                        <span>National Insurance:</span>
                        <span id="nationalInsurance">£0.00</span>
                    </div>
                    <div class="result-item highlight">
                        <span>Take Home Pay:</span>
                        <span id="takeHomePay">£0.00</span>
                    </div>
                    <div class="result-item">
                        <span>Effective Tax Rate:</span>
                        <span id="taxRate">0%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="educational-content">
    <div class="container">
        <h2>Understanding the UK Tax System</h2>
        <p>Calculating your taxes correctly is essential for financial planning and compliance with HMRC regulations. The UK tax system involves several components including income tax, National Insurance contributions, and various allowances :cite[5].</p>
        
        <h3>UK Tax Bands and Rates (2025/26)</h3>
        <p>The UK has different tax bands that apply to various portions of your income. Here are the current rates:</p>
        
        <div class="table-responsive">
            <table class="tax-table">
                <thead>
                    <tr>
                        <th>Band</th>
                        <th>Taxable Income</th>
                        <th>Tax Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Personal Allowance</td>
                        <td>Up to £12,570</td>
                        <td>0%</td>
                    </tr>
                    <tr>
                        <td>Basic Rate</td>
                        <td>£12,571 to £50,270</td>
                        <td>20%</td>
                    </tr>
                    <tr>
                        <td>Higher Rate</td>
                        <td>£50,271 to £125,140</td>
                        <td>40%</td>
                    </tr>
                    <tr>
                        <td>Additional Rate</td>
                        <td>Over £125,140</td>
                        <td>45%</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="source-note">Source: HM Revenue & Customs :cite[7]</p>
        
        <h3>How Income Tax is Calculated</h3>
        <p>UK income tax is calculated through a series of steps:</p>
        <ol>
            <li><strong>Determine total taxable income:</strong> Add up all sources of income including employment, self-employment, pensions, and rental income :cite[5].</li>
            <li><strong>Subtract allowances:</strong> Deduct your personal allowance and other eligible allowances from your total income.</li>
            <li><strong>Apply tax bands:</strong> Different portions of your remaining income are taxed at different rates :cite[7].</li>
            <li><strong>Consider deductions:</strong> Subtract any tax already paid or deductions for which you're eligible.</li>
        </ol>
        
        <h3>National Insurance Contributions</h3>
        <p>In addition to income tax, most UK workers pay National Insurance contributions (NICs), which fund state benefits including the State Pension. The rates vary depending on your employment status and income level :cite[7].</p>
        
        <h3>Self-Employment Considerations</h3>
        <p>If you're self-employed, you can deduct legitimate business expenses from your income before calculating your tax liability. You'll need to complete a Self Assessment tax return each year and make payments on account towards your next year's tax bill :cite[7].</p>
        
        <h3>Using HMRC's APIs for Tax Calculations</h3>
        <p>For developers and accounting software providers, HMRC offers the Individual Calculations API which allows software to generate and retrieve information about a customer's Self Assessment tax calculation :cite[1]. This API can:</p>
        <ul>
            <li>Trigger a self-assessment tax calculation</li>
            <li>List all self-assessment tax calculations for a tax year</li>
            <li>Retrieve calculation results through multiple endpoints :cite[3]</li>
        </ul>
        <p>However, this API is primarily designed for software developers creating applications that interface with HMRC systems, rather than for direct public use.</p>
        
        <h3>Why Estimates May Vary</h3>
        <p>It's important to remember that our calculator provides an estimate only. Your actual tax liability may differ due to:</p>
        <ul>
            <li>Additional income sources not included in the calculation</li>
            <li>Specific tax reliefs and deductions you may be eligible for</li>
            <li>Changes in your personal circumstances during the tax year</li>
            <li>Updates to tax legislation</li>
        </ul>
        
        <h3>When to Seek Professional Advice</h3>
        <p>While this calculator provides a useful estimate, complex financial situations often require professional guidance. Consider consulting a qualified accountant if you:</p>
        <ul>
            <li>Have multiple income sources</li>
            <li>Are self-employed or run a business</li>
            <li>Have significant investments or property income</li>
            <li>Need to plan for tax efficiency</li>
            <li>Are facing an HMRC enquiry or compliance check</li>
        </ul>
        
        <div class="cta-box">
            <h3>Need Help With Your Taxes?</h3>
            <p>Our team of qualified accountants at WCA Accounting can provide comprehensive tax planning and preparation services tailored to your specific circumstances.</p>
            <a href="/contact" class="btn btn-secondary">Contact Us Today</a>
        </div>
        
        <div class="disclaimer">
            <h4>Important Disclaimer</h4>
            <p>This calculator provides an estimate only based on the information you provide and standard UK tax rules for the 2025/26 tax year. It does not constitute tax advice and should not be relied upon for making financial decisions. We recommend consulting with a qualified accountant for advice tailored to your specific circumstances. WCA Accounting cannot be held responsible for any inaccuracies or omissions in these calculations.</p>
        </div>
    </div>
</section>

<style>
    .calculator-section {
        padding: 60px 0;
        background-color: #f8f9fa;
    }
    
    .calculator-wrapper {
        display: flex;
        justify-content: center;
    }
    
    .calculator-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        padding: 30px;
        width: 100%;
        max-width: 600px;
    }
    
    .calculator-form {
        margin: 20px 0;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
    }
    
    .form-group input,
    .form-group select {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 16px;
    }
    
    .btn {
        padding: 12px 24px;
        background-color: #0056b3;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        font-weight: 600;
        transition: background-color 0.3s;
    }
    
    .btn:hover {
        background-color: #004494;
    }
    
    .btn-secondary {
        background-color: #6c757d;
    }
    
    .btn-secondary:hover {
        background-color: #5a6268;
    }
    
    .calculator-results {
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid #eee;
    }
    
    .result-item {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #f0f0f0;
    }
    
    .result-item.highlight {
        font-weight: 700;
        font-size: 1.2em;
        color: #0056b3;
        border-bottom: none;
        margin-top: 10px;
    }
    
    .educational-content {
        padding: 60px 0;
    }
    
    .educational-content h2 {
        margin-bottom: 20px;
        color: #0056b3;
    }
    
    .educational-content h3 {
        margin: 30px 0 15px;
        color: #0056b3;
    }
    
    .tax-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    
    .tax-table th,
    .tax-table td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }
    
    .tax-table th {
        background-color: #f8f9fa;
        font-weight: 600;
    }
    
    .source-note {
        font-style: italic;
        color: #6c757d;
        margin-top: -10px;
        margin-bottom: 30px;
    }
    
    .cta-box {
        background-color: #e9f5ff;
        padding: 25px;
        border-radius: 8px;
        margin: 40px 0;
    }
    
    .disclaimer {
        background-color: #f8f8f8;
        padding: 20px;
        border-left: 4px solid #dc3545;
        margin-top: 40px;
        font-size: 0.9em;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const calculateBtn = document.getElementById('calculateBtn');
        calculateBtn.addEventListener('click', calculateTax);
        
        function calculateTax() {
            // Get input values
            const income = parseFloat(document.getElementById('income').value) || 0;
            const employmentType = document.getElementById('employmentType').value;
            const allowances = parseFloat(document.getElementById('allowances').value) || 0;
            
            // Calculate taxable income (subtract personal allowance)
            const personalAllowance = 12570;
            let taxableIncome = Math.max(0, income - personalAllowance - allowances);
            
            // Calculate income tax based on UK tax bands (2025/26)
            let incomeTax = 0;
            
            if (taxableIncome > 0) {
                const basicRateBand = 50270 - personalAllowance;
                const higherRateBand = 125140 - personalAllowance;
                
                if (taxableIncome <= basicRateBand) {
                    incomeTax = taxableIncome * 0.2;
                } else if (taxableIncome <= higherRateBand) {
                    incomeTax = (basicRateBand * 0.2) + ((taxableIncome - basicRateBand) * 0.4);
                } else {
                    incomeTax = (basicRateBand * 0.2) + 
                                ((higherRateBand - basicRateBand) * 0.4) + 
                                ((taxableIncome - higherRateBand) * 0.45);
                }
            }
            
            // Calculate National Insurance based on employment type
            let nationalInsurance = 0;
            const niThreshold = 12570;
            const niUpperLimit = 50270;
            
            if (income > niThreshold) {
                if (employmentType === 'employed') {
                    // Class 1 NIC rates for employed individuals
                    const niLowerEarnings = Math.min(income, niUpperLimit) - niThreshold;
                    const niHigherEarnings = Math.max(0, income - niUpperLimit);
                    
                    nationalInsurance = (niLowerEarnings * 0.12) + (niHigherEarnings * 0.02);
                } else if (employmentType === 'selfEmployed') {
                    // Class 2 and Class 4 NIC for self-employed
                    const class2Weekly = 3.45; // per week
                    const class2Annual = class2Weekly * 52;
                    
                    const class4LowerEarnings = Math.min(income, niUpperLimit) - niThreshold;
                    const class4HigherEarnings = Math.max(0, income - niUpperLimit);
                    
                    const class4 = (class4LowerEarnings * 0.09) + (class4HigherEarnings * 0.02);
                    
                    nationalInsurance = class2Annual + class4;
                }
                // Pension income typically has no NICs
            }
            
            // Calculate take home pay
            const takeHomePay = income - incomeTax - nationalInsurance;
            
            // Calculate effective tax rate
            const effectiveTaxRate = ((incomeTax + nationalInsurance) / income) * 100;
            
            // Display results
            document.getElementById('taxableIncome').textContent = `£${taxableIncome.toFixed(2)}`;
            document.getElementById('incomeTax').textContent = `£${incomeTax.toFixed(2)}`;
            document.getElementById('nationalInsurance').textContent = `£${nationalInsurance.toFixed(2)}`;
            document.getElementById('takeHomePay').textContent = `£${takeHomePay.toFixed(2)}`;
            document.getElementById('taxRate').textContent = `${effectiveTaxRate.toFixed(2)}%`;
            
            document.getElementById('results').style.display = 'block';
        }
    });
</script>
@endsection