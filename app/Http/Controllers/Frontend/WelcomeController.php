<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ResNotification;
use App\Http\Controllers\Admin\ReservationController;


class WelcomeController extends Controller
{
    public function index()
    {
        $especiales = Category::where('name', 'especiales')->first();

        return view('welcome', compact('especiales'));
    }

    public function thankyou()
    {
        $reservation = Reservation::latest()->first();
        if ($reservation) {
            $reservation->notify(new ResNotification($reservation));
        } else {
            //la variable $reservation está vacia
        }

        return view('thankyou');
    }
    public function cancel()
    {
        return view('cancel');
    }
}
