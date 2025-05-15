<?php

namespace App\Http\Controllers;

use App\Models\ItemPesanan;
use App\Models\Kategori;
use App\Models\Pengguna;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function dashboard(){
     return view('admin.dashboard');

    }
    public function lihatUser(){
     $user=Pengguna::all();
     return view('admin.lihatuser', compact('user'));

    }
    public function tambahUser(){
        return view('admin.tambahuser');
    }
    public function simpanUser(Request $request){
        Pengguna::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role'=> $request->role,
        ]);
        return redirect()->route('admin.lihatuser');
    }
    public function editUser($id){
        $user =Pengguna::find($id);
        return view('admin.edituser');

    }
    public function updateUser(Request $request,$id){
        Pengguna::where('id',$id)->update($request->only(['name','email','password','role']));
         return redirect()->route('admin.lihatuser');
    }
    public function hapusUser($id){
         $user =Pengguna::find($id);
         $user->delete();
        return redirect()->route('admin.lihatuser');
    }
    public function lihatKategori(){
        $kategori = Kategori::get();
        return view('admin.lihatkategori', compact('kategori'));
    }
    public function lihatProduk(){
        $produk = Produk::with('pengguna')->get();
        return view('admin.lihatproduk', compact('produk'));
    }
    public function lihatPesanan(){
        $pesanan1 = Pesanan::with('Pelanggan', 'itemPesanan')->get();
        return view('admin.lihatpesanan', compact('pesanan1'));
    }
    public function lihatUlasan(){
        $ulasan = Ulasan::with('Pengguna', 'Produk')->get();
        return view('admin.lihatulasan', compact('ulasan'));
    }
    
}
