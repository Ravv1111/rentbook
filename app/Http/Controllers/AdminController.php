<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexUsers(){
        $data = User::get();

        return view ('dashboard.users' , compact('data'));
    }

    public function destroy($id){
        User::where('id', $id)->delete();
        return redirect('/users')->with('danger');
    }

    public function edit($id)
    {
        //parameter $id mengambil data path dinamis {id}
        // ambil satu baris data yang memiliki value column id sama dengan data path dinamis id
        // yang dikirim ke route
        $data = User::where('id', $id)->first();
        // kemudian arahkan/tampilan file view yang bernama edit.
        // blade.php dan kirimkan data dari $ ke file edit tersebut dengan bantuan compact
        return view('dashboard.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        // cari baris data yang mempunyai value colum id sama dengan id yang dikirim ke route
        User::where('id', $id)->update([
            'nama' => $request->nama,
            'email'=> $request->email,
            'no_hp'=>$request->no_hp,
            'address'=>$request->address,
        ]);
        //kalau  berhasil, arahkan ke halaman data dengan pemberitahuan berhasil   
        return redirect('/users')->with('successUpdate', 'Berhasil mengubah data!');
    }

    public function book(Request $request, $id)
    {
        return view('dashboard.book', compact('books'));
    }
}
