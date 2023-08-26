<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Raport1;
use App\Models\Raport2;
use App\Models\User;
use App\Models\Ortu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // mengarah pada file login yang ada di folder view
        return view('login', [
            'judul' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // return 'ok';
        $user = User::where('username', $request->nomor_hp)->first();
        $total = User::where('username', $request->nomor_hp)->count();
        // return $total;
        if ($user == null) {
            $request->session()->flash('gagal', 'Nomor HP Salah  !');
            return redirect()->intended('/keluar');
        }
        if ($total == 0) {
            $request->session()->flash('gagal', 'Nomor HP Salah  !');
            return redirect()->intended('/keluar');
        }
        $username = $user->username;
        $password = $user->password;
        $access =  $user->access;
        $nama_anak =  $user->nama_balita;

        $ortu = Ortu::where('nama_anak', $nama_anak)->get();
        // return $ortu->nama_anak;


        // return;
        if ($request->password != $password) {
            return redirect()->intended('/keluar');
        } else if ($request->password == $password && $request->nomor_hp == $username && $access == "admin") {

            return view('dashboardAdmin', [
                'anak' => Ortu::All(),
                'totalBalita' => Ortu::count(),
                'totalUser' => User::count(),
            ]);
        } else if ($request->password == $password && $request->nomor_hp == $username && $access == "ortu") {
            // return ("berhasil");
            return view('home', [
                'anak' => $ortu
            ]);
        }
        return ("gagal");

        // $request->session()->flash('gagal', 'Username atau password salah !');
        // return redirect()->intended('/');
    }
}
