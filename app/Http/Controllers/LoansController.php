<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loans; // 
use Illuminate\Support\Facades\Redirect;


class LoansController extends Controller
{
    public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required|min:3|alpha',
        'amount' => 'required|numeric',
        'email' => 'required|email|unique:loans',
        'reason' => 'required|string|max:255',
    ]);

    try {
        // Process the loan application
        Loans::create($validatedData);

        // Set the success message
        return redirect('/dashboard/loans')->with('success', 'Loan application submitted successfully!');
    } catch (Exception $exception) {
        return $exception;
    }
}
}
