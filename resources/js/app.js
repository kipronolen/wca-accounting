import './bootstrap';


// resources/js/app.js
import './bootstrap';

// Mobile menu toggle
function initMobileMenu() {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navMenu = document.querySelector('.nav-menu');
    
    if (mobileMenuBtn && navMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    }
}

// FAQ toggle
function initFAQ() {
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', () => {
            const item = question.parentElement;
            item.classList.toggle('active');
            
            // Toggle the plus/minus icon
            const icon = question.querySelector('span:last-child');
            if (icon) {
                icon.textContent = item.classList.contains('active') ? '−' : '+';
            }
        });
    });
}

// Tax calculator functionality
function initTaxCalculator() {
    const calculateBtn = document.getElementById('calculate-tax-btn');
    
    if (calculateBtn) {
        calculateBtn.addEventListener('click', calculateTax);
    }
}

function calculateTax() {
    const grossIncome = parseFloat(document.getElementById('gross-income').value) || 0;
    const taxCode = document.getElementById('tax-code').value || '1257L';
    const frequency = document.getElementById('frequency').value || 'monthly';
    
    // Basic tax calculation (simplified)
    const annualAllowance = 12570; // Standard personal allowance for 2022/23
    let taxableIncome = Math.max(0, grossIncome - annualAllowance);
    
    // Basic rate tax (20% on income up to £50,270)
    let tax = 0;
    if (taxableIncome > 0) {
        const basicRateIncome = Math.min(taxableIncome, 50270 - annualAllowance);
        tax += basicRateIncome * 0.2;
        taxableIncome -= basicRateIncome;
    }
    
    // Higher rate tax (40% on income between £50,271 and £150,000)
    if (taxableIncome > 0) {
        const higherRateIncome = Math.min(taxableIncome, 150000 - 50270);
        tax += higherRateIncome * 0.4;
        taxableIncome -= higherRateIncome;
    }
    
    // Additional rate tax (45% on income over £150,000)
    if (taxableIncome > 0) {
        tax += taxableIncome * 0.45;
    }
    
    // National Insurance (simplified)
    let ni = 0;
    const weeklyIncome = grossIncome / 52;
    if (weeklyIncome > 242) {
        ni += (Math.min(967, weeklyIncome) - 242) * 0.132;
    }
    if (weeklyIncome > 967) {
        ni += (weeklyIncome - 967) * 0.032;
    }
    ni = ni * 52;
    
    // Adjust for frequency
    let displayFrequency = 'year';
    if (frequency === 'monthly') {
        tax = tax / 12;
        ni = ni / 12;
        displayFrequency = 'month';
    } else if (frequency === 'weekly') {
        tax = tax / 52;
        ni = ni / 52;
        displayFrequency = 'week';
    }
    
    // Display results
    document.getElementById('tax-result').textContent = `£${tax.toFixed(2)} per ${displayFrequency}`;
    document.getElementById('ni-result').textContent = `£${ni.toFixed(2)} per ${displayFrequency}`;
    document.getElementById('net-income').textContent = `£${(grossIncome - tax - ni).toFixed(2)} per ${displayFrequency}`;
    
    document.getElementById('calculator-result').style.display = 'block';
}

// Currency converter functionality
function initCurrencyConverter() {
    const convertBtn = document.getElementById('convert-currency-btn');
    
    if (convertBtn) {
        convertBtn.addEventListener('click', convertCurrency);
    }
}

function convertCurrency() {
    const fromCurrency = document.getElementById('from-currency').value;
    const toCurrency = document.getElementById('to-currency').value;
    const amount = parseFloat(document.getElementById('amount').value) || 0;
    
    // Mock conversion rates (in a real application, you would fetch these from an API)
    const rates = {
        'GBP': { 'USD': 1.22, 'EUR': 1.14, 'GBP': 1 },
        'USD': { 'GBP': 0.82, 'EUR': 0.93, 'USD': 1 },
        'EUR': { 'GBP': 0.88, 'USD': 1.07, 'EUR': 1 }
    };
    
    const rate = rates[fromCurrency][toCurrency];
    const convertedAmount = amount * rate;
    
    // Display results
    document.getElementById('converted-amount').textContent = `${convertedAmount.toFixed(2)} ${toCurrency}`;
    document.getElementById('conversion-rate').textContent = `1 ${fromCurrency} = ${rate.toFixed(4)} ${toCurrency}`;
    document.getElementById('conversion-time').textContent = new Date().toLocaleString();
    
    document.getElementById('conversion-result').style.display = 'block';
}

// Initialize everything when the DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initMobileMenu();
    initFAQ();
    initTaxCalculator();
    initCurrencyConverter();
});