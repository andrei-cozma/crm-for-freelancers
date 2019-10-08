<?php

namespace App\Http\Controllers;

use App\Mail\CreateTicketFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TicketController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::to('test@test.com')->send(new CreateTicketFormMail($data));

        return redirect('/')->with('success', 'Tichetul a fost trimis, va contactam in cel mai scurt timp posibil.');
    }
}
