<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\User;
class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::orderBy('created_at', 'desc')->get();
        return view('/index',compact('guru'));
    }
    public function create(Request $request)
    {
        Guru::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'nomor_telp' => $request->nomor_telp
        ]);
        return redirect('/index');
    }
    public function hapus($id)
    {
        $guru = Guru::find($id);
        $guru->delete();
        return redirect ('/index');
    }

    public function update(Request $request){

        $id = $request->id;
        $update = Guru::where('id',$id)->update([
            'nip' => $request->Enip,
            'nama' => $request->Enama,
            'jk' => $request->Ejk,
            'tgl_lahir' => $request->Etgl_lahir,
            'alamat' => $request->Ealamat,
            'agama' => $request->Eagama,
            'email' => $request->Eemail,
            'nomor_telp' => $request->Enomor_telp
        ]);

        return redirect('index');
        
    }
}
