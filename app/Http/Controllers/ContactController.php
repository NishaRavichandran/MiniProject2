<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('contact');
    }

    function store(Request $request)
    {
        $name = $request->name;

        return redirect()->route('thanks', ['name' => $name]);

    }

    function thanks($name)
    {
        return view('thankyou')->with(compact('name'));
    }
}
