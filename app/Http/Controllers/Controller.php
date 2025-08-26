<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function convert(Request $request)
    {
        // Your conversion logic here
        // Validate the request
        $validated = $request->validate([
            'amount' => 'required|numeric|min:0',
            'from_currency' => 'required|string|size:3',
            'to_currency' => 'required|string|size:3'
        ]);

        // Fetch exchange rate (you might use an API or a service here)
        // For example, using a hardcoded rate for demonstration:
        $exchangeRates = [
            'USD' => ['EUR' => 0.93, 'GBP' => 0.79, /* ... other rates */],
            'EUR' => ['USD' => 1.07, 'GBP' => 0.85, /* ... */],
            // ... other base currencies
        ];

        $amount = $validated['amount'];
        $from = $validated['from_currency'];
        $to = $validated['to_currency'];

        if ($from === $to) {
            $rate = 1;
            $convertedAmount = $amount;
        } else {
            // Check if rate exists in our array
            if (isset($exchangeRates[$from][$to])) {
                $rate = $exchangeRates[$from][$to];
                $convertedAmount = $amount * $rate;
            } else {
                // Handle error if rate not found
                return response()->json([
                    'success' => false,
                    'message' => 'Exchange rate not available for selected currencies.'
                ], 422);
            }
        }

        return response()->json([
            'success' => true,
            'converted_amount' => number_format($convertedAmount, 2),
            'rate' => $rate
        ]);
    }
}