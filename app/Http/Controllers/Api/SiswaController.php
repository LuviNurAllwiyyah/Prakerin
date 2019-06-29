<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Siswa;
use Illuminate\Http\Request;
use  Validator;
use App\Kategori1;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        if (count($siswa) <= 0) {
            $response =  [
                'success' => false,
                'data'  => 'Empty',
                'message' => 'Siswa Tidak Ditemukan .'
            ];
            return response()->json($response, 404);
        }
        $response =  [
            'success' => true,
            'data' => $siswa,
            'message' => 'Data siswa berhasil diambil'
        ];

        return response()->json($response, 200);
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
        // 1. Tampung semua inputan ke $input;
        $input = $request->all();

        // 2.Buat validasi ditampung ke $validator
        $validator = Validator::make($input, [
            'nama' => 'required|min15'
        ]);

        // 3.Chek validasi
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'Validation Error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 404);
        }

        // 4.Buat fungsi untuk menghandle semua inputan ->
        // dimasukan ke table
        $siswa = Siswa::create($input);

        // 5. menampilkan response
        $response = [
            'success' => true,
            'data' => $siswa,
            'message' => 'Data siswa Berhasil ditambahkan.'
        ];

        // 6. Tampilkan hasil
        return response()->json($response, 200);
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
        $siswa = Siswa::find($id);
        $input = $request->all();

        if ($siswa) {
            $response = [
                'success' => false,
                'data' => 'Empty.',
                'message' => 'Siswa Tidak Ditemukan.'
            ];
            return response()->json($response, 404);
        }

        $validator = Validator::make($input, [
            'nama' => 'required|mib15'
        ]);

        if ($validator->falls()) {
            $response = [
                'success' => false,
                'data' => 'Validation Error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 500);
        }

        $siswa->nama = $input['nama'];
        $siswa->save();

        $response = [
            'success' => false,
            'data' => 'Empty.',
            'message' => 'Siswa berhasil di update.'
        ];

        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);

        if ($siswa) {
            $response = [
                'success' => false,
                'data' => 'gagal update.',
                'message' => 'Siswa Tidak Ditemukan.'
            ];
            return response()->json($response, 404);
        }
        $siswa->delete();
        $response = [
            'success' => true,
            'data' => 'siswa.',
            'message' => 'Siswa berhasil di hapus.'
        ];
        return response()->json($response, 200);
    }
}
