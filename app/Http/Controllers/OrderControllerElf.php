<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderElf;

class OrderControllerElf extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dftPesananElf = OrderElf::all();
        return view('admin.dftSewaElf', compact('dftPesananElf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formPesananElf');
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
            'startDate' => 'required',
            'endDate' => 'required',
            'category' => 'required',
            'tipe' => 'required',
            'harga' => 'required',
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
        $tujuan_upload = 'data_pesanan_elf';
        $file->move($tujuan_upload, $nama_file);

        OrderElf::create([
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            'category' => $request->category,
            'tipe' => $request->tipe,
            'harga' => $request->harga,
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
        $pesananElf = OrderElf::find($id);
        return view('admin.edtSewaElf', compact('pesananElf'));
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
        $rules = [
            'startDate' => 'required',
            'endDate' => 'required',
            'category' => 'required',
            'tipe' => 'required',
            'harga' => 'required',
            'tujuan' => 'required',
            'jmlOrang' => 'required',
            'konsumen' => 'required',
            'phoneNumber' => 'required',
            'alamat' => 'required',
            'fotoKtp' => 'mimes:jpg,jpeg,png'
        ];

        $validate = $request->validate($rules);

        if ($request->file('fotoKtp')) {
            $file = $request->file('fotoKtp');

            $nama_file = time() . '_' . $file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'data_pesanan';
            $file->move($tujuan_upload, $nama_file);

            $validate['fotoKtp'] = $nama_file;
        }

        if (OrderElf::where('id', $id)->update($validate)) {
            return redirect('/dft-pesanan-elf');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pesananElf = OrderElf::find($id);
        if ($pesananElf) {
            OrderElf::where('id', $id)->delete();
        }
        return back();
    }
}
