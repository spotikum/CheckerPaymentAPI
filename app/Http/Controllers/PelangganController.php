<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return response()->json(['message' => 'Success', 'data' => $pelanggans]);
    }

    public function create(Request $request)
    {
        $pelanggan = Pelanggan::create($request->all());
        return response()->json(['message' => 'Success', 'data' => $pelanggan]);
    }

    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->update($request->all());
        return response()->json(['message' => 'Success', 'data' => $pelanggan]);
    }

    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return response()->json(['message' => 'Success', 'data' => $pelanggan]);
    }
}
