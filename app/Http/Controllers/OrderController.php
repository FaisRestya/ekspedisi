<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dftPesanan = Order::all();
        return view('admin.dftSewaBus', compact('dftPesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formPesananBus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'startDate' => 'required',
            'endDate' => 'required',
            'category' => 'required',
            'tipe' => 'required',
            'tujuan' => 'required',
            'jmlOrang' => 'required',
            'konsumen' => 'required',
            'phoneNumber' => 'required',
            'alamat' => 'required',
            'fotoKtp' => 'required',
        ]);

        $file = $request->file('fotoKtp');
        // dd($file);

        $nama_file = time() . '_' . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_pesanan';
        $file->move($tujuan_upload, $nama_file);

        Order::create([
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            'category' => $request->category,
            'tipe' => $request->tipe,
            'tujuan' => $request->tujuan,
            'jmlOrang' => $request->jmlOrang,
            'konsumen' => $request->konsumen,
            'phoneNumber' => $request->phoneNumber,
            'alamat' => $request->alamat,
            'fotoKtp' => $nama_file,
        ]);

        return redirect('/');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
        //
    }
}
