<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Golongan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        $golonganData = $this->getGolonganData(); 
        return view('index', compact('karyawan','golonganData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getGolonganData()
    {
        return Golongan::withCount('karyawan')->pluck('karyawan_count','nama_gol')->toArray();
    }

    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            Karyawan::create($request->all());
            session()->flash('success','Data Berhasil Diubah.');
            return redirect()->route('karyawan.index');
        }catch (\Exception $e) {
            session()->flash('error','Terjadi Kesalahan. Data Tida Dapat Diubah.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
    {
        return view('edit', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        try{
            $karyawan->update($request->all());
            session()->flash('success','Data Berhasil Diubah.');
            return redirect()->route('karyawan.index');
        }catch (\Exception $e) {
            session()->flash('error','Terjadi Kesalahan. Data Tida Dapat Diubah.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        try{
            $karyawan->delete();
            session()->flash('success','Data Berhasil Diubah.');
            return redirect()->route('karyawan.index');
        }catch (\Exception $e) {
            session()->flash('error','Terjadi Kesalahan. Data Tida Dapat Diubah.');
        }
    }
}
