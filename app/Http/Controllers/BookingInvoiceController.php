<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BookingInvoiceController extends Controller
{
    public function printInvoice(Booking $booking)
    {
        $pdf = Pdf::loadView('invoices.booking', compact('booking'));
        return $pdf->stream('invoice-' . $booking->id . '.pdf');
    }
}
