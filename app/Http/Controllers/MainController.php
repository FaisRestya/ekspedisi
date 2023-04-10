<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Message;


class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function packages()
    {
        return view('packages');
    }

    public function contact()
    {
        return view('contact');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
            'message' => 'required',
        ]);

        Message::create([
			'name' => $request->name,
			'email' => $request->email,
			'phoneNumber' => $request->phoneNumber,
			'message' => $request->message,
		]);

        return view('/contact');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Message::where('id', $id)->delete();
        return redirect('/dashboard');
    }
}
