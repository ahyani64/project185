<?php

namespace App\Http\Controllers\API;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    //fungsi login
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::with('jenis')->get();
        return response()->json([
            'pesan' => 'Data Berhasil Ditemukan',
            'data' => $data
        ], 200);
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
        $validasi = Validator::make($request->all(), [
            "name"          => "required",
            "description"   => "required",
            "price"         => "required|integer",
            "category_id"   => "required|integer"
        ]);

        if ($validasi->passes()) {
            $data = Product::create($request->all());

        return response()->json([
            'pesan' => 'Data Berhasil Ditambahkan',
            'data' => $data
        ], 200);
        }

        return response()->json([
            'pesan' => 'Data Gagal Disimpan',
            'data' => $validasi->errors()->all()
        ], 400);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //cara 1
        //return $id;

        //cara 2
        $data = Product::where('id', $id)->first();
        if (empty($data)) {
            return response()->json([
                'pesan' => 'Data Tidak Ditemukan',
                'data' => ''
            ], 404);
        }
        return response()->json([
            'pesan' => 'Data Berhasil Ditemukan',
            'data' => $data
        ], 200);
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
        // $id->update($request->all());
        // return response()->json([
        //     'message' => 'Data berhasil diupdate',
        //     'data' => $id
        // ], 200);

        $data = Product::where('id', $id)->first();
        if (!empty($data)){
            $validate = Validator::make($request->all(), [
                "name"          => "required",
                "description"   => "required",
                "price"         => "required|integer",
                "category_id"   => "required|integer"
            ]);

            if ($validate->passes()){
                $data->update($request->all());
                return response()->json([
                    'message' => 'Data berhasil disimpan',
                    'data' => $data
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Data gagal disimpan',
                    'data' => $validate->errors()->all()
                ]);
            }
        }
        return response()->json(['message' => 'Data tidak ditemukan'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //cara hapus pertama
    // public function destroy(Product $id)
    // {
    //     $id->delete();
    //     return response()->json([
    //         'pesan' => 'Data Berhasil dihapus'
    //     ]);
    // }

    //cara hapus kedua
    public function destroy($id)
    {
        $data = Product::where('id', $id)->first();
        if (empty($data)) {
            return response()->json([
                'pesan' => 'Data Tidak Ditemukan',
                'data' => ''
            ], 404);
        }

        $data->delete();
        return response()->json([
            'pesan' => 'Data Berhasil Ditemukan',
            'data' => $data
        ], 200);
    }
}
