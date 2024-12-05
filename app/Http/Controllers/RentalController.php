<?php

namespace App\Http\Controllers;

use App\Models\Rental;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::all();

        return view('rental', compact('rentals'));
    }
}
