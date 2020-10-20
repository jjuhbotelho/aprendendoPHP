<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use Illuminate\Support\Facades\Notification;

class PaymentController extends Controller
{
    public function create()
    {
        return view('payments.create');
    }

    public function store()
    {
        //Referência para quando preciso notificar apenas um user
        request()->user()->notify(new PaymentReceived(900));

        //Referência para notificar uma collection de users
        //Notification::send(request()->user(), new PaymentReceived());
    }
}
