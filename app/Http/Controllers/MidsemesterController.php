<?php

namespace App\Http\Controllers;

use App\Midsemester;
use Illuminate\Http\Request;

class MidsemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $midsemesters = Midsemester::all();
        //dd($data);
        return view('mid.index', compact('midsemesters'));
        //
    }

    public function add()
    {
        return view('mid.add');
    }

    public function save(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'kolom_nim' => 'required',
            'kolom_nama' => 'required',
            'kolom_umur' => 'required',
            'kolom_alamat' => 'required'
        ]);

        Midsemester::create($request->all());
        return redirect()->route('mid.index');

        //kembali ke halaman sebelumnya
     // return redirect()->back();
    }

    public function delete($id)
    {
        $midsemester = midsemester::find($id);
        $midsemester->delete();
        return redirect()->route('mid.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Midsemester  $midsemester
     * @return \Illuminate\Http\Response
     */
    public function show(Midsemester $midsemester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Midsemester  $midsemester
     * @return \Illuminate\Http\Response
     */
    public function edit(Midsemester $midsemester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Midsemester  $midsemester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Midsemester $midsemester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Midsemester  $midsemester
     * @return \Illuminate\Http\Response
     */
    public function destroy(Midsemester $midsemester)
    {
        //
    }
}
