<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validasi
        $validasiData = $request->validate([
            'nama'    => ['required', 'string', 'max:255'],
            'usia'        => ['required', 'string', 'max:255'],
            'kota'    => ['required', 'numeric'],
        ]);

        //Lanjut proses simpan
        User::create($validasiData);

        return redirect()->route('users.index')->with('success', 'Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $decryptedId = Crypt::decrypt($id);
        $data = User::find($decryptedId);

        // Mengenkripsi kembali ID sebelum mengembalikan respons
        $encryptedId = Crypt::encrypt($data->id);

        return response()->json(array_merge($data->toArray(), ['encryptedId' => $encryptedId]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $decryptedId = Crypt::decrypt($id);
        $user = User::findOrFail($decryptedId);

        // Mengenkripsi kembali ID sebelum mengembalikan respons
        $encryptedId = Crypt::encrypt($user->id);

        return view('users.edit', [
            'user' => $user,
            'encryptedId' => $encryptedId
        ]);
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
        // $data = $request->all();

        //validasi
        $validasiData = $request->validate([
            'nama'    => ['required', 'string', 'max:255'],
            'usia'        => ['required', 'string', 'max:255'],
            'kota'    => ['required', 'numeric'],
        ]);

        $decryptedId = Crypt::decrypt($id);
        $users = User::findOrFail($decryptedId);


        $users->update($validasiData);


        return redirect()->route('users.index')->with('success', 'Berhasil Memperbarui Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $decryptedId = Crypt::decrypt($id);
        $users = User::findOrFail($decryptedId);


        $users->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Berhasil Menghapus Data'
        ]);

        // return redirect()->route('be.kelurahan.index')->with('success', 'Berhasil Menghapus Data');
    }
}
