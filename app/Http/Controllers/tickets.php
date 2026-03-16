<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;


class tickets extends Controller
{
    public function form()
    {
        $ticks = ticket::all(); //somthing;
        return view('ticketForm', compact('ticks'));
    }


    public function store(Request $request)
    {
        try {
            $newTicket = $request->validate([
                'titulo' => 'required',
                'descripcion' => 'required',
                'prioridad' => 'sometimes',
                'tecnico' => 'sometimes',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect('/register/error')
                ->with('errors', $e->validator->errors()->all());
        }
        ticket::create($newTicket);
        return redirect()->route('ticket.form')
            ->with('ok', $newTicket);
    }
}
