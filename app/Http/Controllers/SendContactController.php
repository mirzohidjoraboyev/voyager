<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sendcontact;

class SendContactController extends Controller
{
    public function sendcontact(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $requestData = $request->all();
        Sendcontact::create($requestData);
        return redirect()->route('index')->with('success' , 'Sizning xabaringiz yuborildi');
    }
}
