<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Imunisasi;
use Illuminate\Support\Facades\Storage;
use Mockery\Generator\Parameter;

class JadwalController extends Controller
{

    public function hapusJadwal($id)
    {
        // return 'ok';
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect('/jadwalAdmin');
    }


    public function updateJadwal(Request $request)
    {
        $validateData = $request->validate([
            'agenda_posyandu' => '',
            'tanggal' => '',
            'tempat' => '',
            'status' => ''
        ]);

        $jadwal           = Jadwal::find($request->id);
        $jadwal->agenda_posyandu    = $validateData['agenda_posyandu'];
        $jadwal->tanggal  = $validateData['tanggal'];
        $jadwal->tempat  = $validateData['tempat'];
        $jadwal->status  = $validateData['status'];

        $jadwal->save();
        return redirect('/jadwalAdmin');
    }

    public function tambahJadwal(Request $request)
    {
        // return 'ok';

        $validateData = $request->validate([
            'agenda_posyandu' => '',
            'tanggal' => '',
            'tempat' => '',
            'status' => ''

        ]);
        Jadwal::create($validateData);
        return redirect('/jadwalAdmin');
    }

    public function tambahImunisasi(Request $request)
    {
        // return 'ok';

        $validateData = $request->validate([
            'nama_ortu' => '',
            'nama_balita' => '',
            'agenda' => '',
            'tanggal_pelaksanaan' => ''

        ]);
        Imunisasi::create($validateData);
        return redirect('/');
    }
}
