<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ortu;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Mockery\Generator\Parameter;

class PosyanduController extends Controller
{
    public function hapusBalita($id)
    {
        // return 'ok';
        $ortu = Ortu::find($id);

        $ortu->delete();

        return redirect('/halamanAdmin');
    }

    public function hapusUser($id)
    {
        // return 'ok';
        $ortu = User::find($id);

        $ortu->delete();

        return redirect('/userAdmin');
    }


    public function updateBalita(Request $request)
    {
        $validateData = $request->validate([
            'nama_anak' => '',
            'jenis_kelamin' => '',
            'nama_orangtua' => '',
            'umur_anak' => '',
            'berat0' => '',
            'berat1' => '',
            'berat2' => '',
            'berat3' => '',
            'berat4' => '',
            'berat5' => '',
            'berat6' => '',
            'berat7' => '',
            'berat8' => '',
            'berat9' => '',
            'berat10' => '',
            'berat11' => '',
            'berat12' => '',
            'berat13' => '',
            'berat14' => '',
            'berat15' => '',
            'berat16' => '',
            'berat17' => '',
            'berat18' => '',
            'berat19' => '',
            'berat20' => '',
            'berat21' => '',
            'berat22' => '',
            'berat23' => '',
            'berat24' => '',
            'tinggi0' => '',
            'tinggi1' => '',
            'tinggi2' => '',
            'tinggi3' => '',
            'tinggi4' => '',
            'tinggi5' => '',
            'tinggi6' => '',
            'tinggi7' => '',
            'tinggi8' => '',
            'tinggi9' => '',
            'tinggi10' => '',
            'tinggi11' => '',
            'tinggi12' => '',
            'tinggi13' => '',
            'tinggi14' => '',
            'tinggi15' => '',
            'tinggi16' => '',
            'tinggi17' => '',
            'tinggi18' => '',
            'tinggi19' => '',
            'tinggi20' => '',
            'tinggi21' => '',
            'tinggi22' => '',
            'tinggi23' => '',
            'tinggi24' => ''
        ]);

        $ortu           = Ortu::find($request->id);
        if ($request->umur_anak == 0 && $request->berat_badan_anak != null) {
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat0  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
            $ortu->berat20  = $ortu->berat20;
        }
        if ($request->umur_anak == 0 && $request->tinggi_badan != null) {
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi0  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 1 && $request->berat_badan_anak != null) {
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat1  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 1 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi1  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 2 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat2  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 2 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi2  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 3 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat3  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 3 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi3  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 4 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat4  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 4 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi4  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 5 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat5  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 5 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi5  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 6 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat6  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 6 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi6  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 7 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat7  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 7 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi7  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 8 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat8  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 8 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi8  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 9 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat9  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 9 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi9  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 10 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat10  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 10 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi10  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 11 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat11  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 11 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi11  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 12 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat12  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 12 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi20  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 13 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat13  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 13 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi13  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 14 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat14  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 14 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi14  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 15 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat15  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 15 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi15  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 16 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat16  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 16 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi16  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 17 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat17  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 17 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi17  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 18 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat18  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 18 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi18  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 19 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat19  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 19 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi19  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 20 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat20  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 20 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi20  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 21 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat21  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 21 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi21  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 22 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat23  = $ortu->berat23;
            $ortu->berat22  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 22 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi23  = $ortu->tinggi23;
            $ortu->tinggi22  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 23 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat23  = $request->berat_badan_anak;
            $ortu->berat24  = $ortu->berat24;
        }
        if ($request->umur_anak == 23 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi23  = $request->tinggi_badan;
            $ortu->tinggi24  = $ortu->tinggi24;
        }
        if ($request->umur_anak == 24 && $request->berat_badan_anak != null) {
            $ortu->berat0  = $ortu->berat0;
            $ortu->berat24  = $request->berat_badan_anak;
            $ortu->berat1  = $ortu->berat1;
            $ortu->berat2  = $ortu->berat2;
            $ortu->berat3  = $ortu->berat3;
            $ortu->berat4  = $ortu->berat4;
            $ortu->berat5  = $ortu->berat5;
            $ortu->berat6  = $ortu->berat6;
            $ortu->berat7  = $ortu->berat7;
            $ortu->berat8  = $ortu->berat8;
            $ortu->berat9  = $ortu->berat9;
            $ortu->berat10  = $ortu->berat10;
            $ortu->berat11  = $ortu->berat11;
            $ortu->berat12  = $ortu->berat12;
            $ortu->berat13  = $ortu->berat13;
            $ortu->berat14  = $ortu->berat14;
            $ortu->berat15  = $ortu->berat15;
            $ortu->berat16  = $ortu->berat16;
            $ortu->berat17  = $ortu->berat17;
            $ortu->berat18  = $ortu->berat18;
            $ortu->berat19  = $ortu->berat19;
            $ortu->berat20  = $ortu->berat20;
            $ortu->berat21  = $ortu->berat21;
            $ortu->berat22  = $ortu->berat22;
            $ortu->berat23  = $ortu->berat23;
        }
        if ($request->umur_anak == 24 && $request->tinggi_badan != null) {
            $ortu->tinggi0  = $ortu->tinggi0;
            $ortu->tinggi24  = $request->tinggi_badan;
            $ortu->tinggi1  = $ortu->tinggi1;
            $ortu->tinggi2  = $ortu->tinggi2;
            $ortu->tinggi3  = $ortu->tinggi3;
            $ortu->tinggi4  = $ortu->tinggi4;
            $ortu->tinggi5  = $ortu->tinggi5;
            $ortu->tinggi6  = $ortu->tinggi6;
            $ortu->tinggi7  = $ortu->tinggi7;
            $ortu->tinggi8  = $ortu->tinggi8;
            $ortu->tinggi9  = $ortu->tinggi9;
            $ortu->tinggi10  = $ortu->tinggi10;
            $ortu->tinggi11  = $ortu->tinggi11;
            $ortu->tinggi12  = $ortu->tinggi12;
            $ortu->tinggi13  = $ortu->tinggi13;
            $ortu->tinggi14  = $ortu->tinggi14;
            $ortu->tinggi15  = $ortu->tinggi15;
            $ortu->tinggi16  = $ortu->tinggi16;
            $ortu->tinggi17  = $ortu->tinggi17;
            $ortu->tinggi18  = $ortu->tinggi18;
            $ortu->tinggi19  = $ortu->tinggi19;
            $ortu->tinggi20  = $ortu->tinggi20;
            $ortu->tinggi21  = $ortu->tinggi21;
            $ortu->tinggi22  = $ortu->tinggi22;
            $ortu->tinggi23  = $ortu->tinggi23;
        }

        $ortu->nama_anak    = $validateData['nama_anak'];
        $ortu->jenis_kelamin  = $validateData['jenis_kelamin'];
        $ortu->nama_orangtua  = $validateData['nama_orangtua'];
        $ortu->umur_anak  = $validateData['umur_anak'];

        $ortu->save();
        return redirect('/halamanAdmin');
    }

    public function updateUser(Request $request)
    {

        $validateData = $request->validate([
            'username' => '',
            'password' => '',
            'access' => '',
            'nama_balita' => '',
            'nama_ortu' => ''
        ]);

        $user           = User::find($request->id);
        $user->username    = $validateData['username'];
        $user->password  = $validateData['password'];
        $user->access  = $validateData['access'];
        $user->nama_balita  = $validateData['nama_balita'];
        $user->nama_ortu  = $validateData['nama_ortu'];

        $user->save();
        return redirect('/userAdmin');
    }


    public function tambahDataBalita(Request $request)
    {

        $validateData = $request->validate([
            'nama_anak' => '',
            'jenis_kelamin' => '',
            'nama_orangtua' => '',
            'umur_anak' => '',
            'berat0' => '',
            'berat1' => '',
            'berat2' => '',
            'berat3' => '',
            'berat4' => '',
            'berat5' => '',
            'berat6' => '',
            'berat7' => '',
            'berat8' => '',
            'berat9' => '',
            'berat10' => '',
            'berat11' => '',
            'berat12' => '',
            'berat13' => '',
            'berat14' => '',
            'berat15' => '',
            'berat16' => '',
            'berat17' => '',
            'berat18' => '',
            'berat19' => '',
            'berat20' => '',
            'berat21' => '',
            'berat22' => '',
            'berat23' => '',
            'berat24' => '',
            'tinggi0' => '',
            'tinggi1' => '',
            'tinggi2' => '',
            'tinggi3' => '',
            'tinggi4' => '',
            'tinggi5' => '',
            'tinggi6' => '',
            'tinggi7' => '',
            'tinggi8' => '',
            'tinggi9' => '',
            'tinggi10' => '',
            'tinggi11' => '',
            'tinggi12' => '',
            'tinggi13' => '',
            'tinggi14' => '',
            'tinggi15' => '',
            'tinggi16' => '',
            'tinggi17' => '',
            'tinggi18' => '',
            'tinggi19' => '',
            'tinggi20' => '',
            'tinggi21' => '',
            'tinggi22' => '',
            'tinggi23' => '',
            'tinggi24' => ''
        ]);
        // echo $request->umur_anak;
        // return $request->berat_badan_anak;
        if ($request->umur_anak == 0 && $request->berat_badan_anak != null) {
            $validateData['berat0'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 0 && $request->tinggi_badan != null) {
            $validateData['tinggi0'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 1 && $request->berat_badan_anak != null) {
            $validateData['berat1'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 1 && $request->tinggi_badan != null) {
            $validateData['tinggi1'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 2 && $request->berat_badan_anak != null) {
            $validateData['berat2'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 2 && $request->tinggi_badan != null) {
            $validateData['tinggi2'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 3 && $request->berat_badan_anak != null) {
            $validateData['berat3'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 3 && $request->tinggi_badan != null) {
            $validateData['tinggi3'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 4 && $request->berat_badan_anak != null) {
            $validateData['berat4'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 4 && $request->tinggi_badan != null) {
            $validateData['tinggi4'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 5 && $request->berat_badan_anak != null) {
            $validateData['berat5'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 5 && $request->tinggi_badan != null) {
            $validateData['tinggi5'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 6 && $request->berat_badan_anak != null) {
            $validateData['berat6'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 6 && $request->tinggi_badan != null) {
            $validateData['tinggi6'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 7 && $request->berat_badan_anak != null) {
            $validateData['berat7'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 7 && $request->tinggi_badan != null) {
            $validateData['tinggi7'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 8 && $request->berat_badan_anak != null) {
            $validateData['berat8'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 8 && $request->tinggi_badan != null) {
            $validateData['tinggi8'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 9 && $request->berat_badan_anak != null) {
            $validateData['berat9'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 9 && $request->tinggi_badan != null) {
            $validateData['tinggi9'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 10 && $request->berat_badan_anak != null) {
            $validateData['berat10'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 10 && $request->tinggi_badan != null) {
            $validateData['tinggi10'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 11 && $request->berat_badan_anak != null) {
            $validateData['berat11'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 11 && $request->tinggi_badan != null) {
            $validateData['tinggi11'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 12 && $request->berat_badan_anak != null) {
            $validateData['berat12'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 12 && $request->tinggi_badan != null) {
            $validateData['tinggi12'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 13 && $request->berat_badan_anak != null) {
            $validateData['berat13'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 13 && $request->tinggi_badan != null) {
            $validateData['tinggi13'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 14 && $request->berat_badan_anak != null) {
            $validateData['berat14'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 14 && $request->tinggi_badan != null) {
            $validateData['tinggi14'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 15 && $request->berat_badan_anak != null) {
            $validateData['berat15'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 15 && $request->tinggi_badan != null) {
            $validateData['tinggi15'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 16 && $request->berat_badan_anak != null) {
            $validateData['berat16'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 16 && $request->tinggi_badan != null) {
            $validateData['tinggi16'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 17 && $request->berat_badan_anak != null) {
            $validateData['berat17'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 17 && $request->tinggi_badan != null) {
            $validateData['tinggi17'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 18 && $request->berat_badan_anak != null) {
            $validateData['berat18'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 18 && $request->tinggi_badan != null) {
            $validateData['tinggi18'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 19 && $request->berat_badan_anak != null) {
            $validateData['berat19'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 19 && $request->tinggi_badan != null) {
            $validateData['tinggi19'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 20 && $request->berat_badan_anak != null) {
            $validateData['berat20'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 20 && $request->tinggi_badan != null) {
            $validateData['tinggi20'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 21 && $request->berat_badan_anak != null) {
            $validateData['berat21'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 21 && $request->tinggi_badan != null) {
            $validateData['tinggi21'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 22 && $request->berat_badan_anak != null) {
            $validateData['berat22'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 22 && $request->tinggi_badan != null) {
            $validateData['tinggi22'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 23 && $request->berat_badan_anak != null) {
            $validateData['berat23'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 23 && $request->tinggi_badan != null) {
            $validateData['tinggi23'] = $request->tinggi_badan;
        }
        if ($request->umur_anak == 24 && $request->berat_badan_anak != null) {
            $validateData['berat24'] = $request->berat_badan_anak;
        }
        if ($request->umur_anak == 24 && $request->tinggi_badan != null) {
            $validateData['tinggi24'] = $request->tinggi_badan;
        }

        Ortu::create($validateData);
        // return ('ok');

        // $guru->save();
        return redirect('/halamanAdmin');
    }
    public function tambahDataUser(Request $request)
    {
        // return 'ok';

        $validateData = $request->validate([
            'username' => '',
            'password' => '',
            'access' => '',
            'nama_balita' => '',
            'nama_ortu' => ''

        ]);
        User::create($validateData);
        // return 'ok';
        // return ('ok');

        // $guru->save();
        return redirect('/userAdmin');
    }
    public function tambahRaportSiswa(Request $request)
    {
        if ($request->kelas == "0" && $request->semester == "0") {
            return redirect('/raportAdmin2');
        } elseif ($request->kelas == "0" && $request->semester != "0") {
            return redirect('/raportAdmin2');
        } elseif ($request->kelas != "0" && $request->semester == "0") {
            return redirect('/raportAdmin2');
        }
        $validateData = $request->validate([
            'nama_siswa' => 'required',
            'nis' => 'required',
            'nisn' => 'required',
            'semester' => 'required',
            'tahun_pelajaran' => 'required',
            'kelas' => 'required',
            'nama_sekolah' => 'required',
            'alamat_sekolah' => 'required',
            'nama_sikap1' => 'required',
            'deskripsi_sikap1' => 'required',
            'nama_sikap2' => 'required',
            'deskripsi_sikap2' => 'required',
            'nama_mapel1' => '',
            'nilai_pengetahuan_mapel1' => '',
            'predikat_pengetahuan_mapel1' => '',
            'deskripsi_pengetahuan_mapel1' => '',
            'nilai_keterampilan_mapel1' => '',
            'predikat_keterampilan_mapel1' => '',
            'deskripsi_keterampilan_mapel1' => '',
            'nama_mapel2' => '',
            'nilai_pengetahuan_mapel2' => '',
            'predikat_pengetahuan_mapel2' => '',
            'deskripsi_pengetahuan_mapel2' => '',
            'nilai_keterampilan_mapel2' => '',
            'predikat_keterampilan_mapel2' => '',
            'deskripsi_keterampilan_mapel2' => '',
            'nama_mapel3' => '',
            'nilai_pengetahuan_mapel3' => '',
            'predikat_pengetahuan_mapel3' => '',
            'deskripsi_pengetahuan_mapel3' => '',
            'nilai_keterampilan_mapel3' => '',
            'predikat_keterampilan_mapel3' => '',
            'deskripsi_keterampilan_mapel3' => '',
            'nama_mapel4' => '',
            'nilai_pengetahuan_mapel4' => '',
            'predikat_pengetahuan_mapel4' => '',
            'deskripsi_pengetahuan_mapel4' => '',
            'nilai_keterampilan_mapel4' => '',
            'predikat_keterampilan_mapel4' => '',
            'deskripsi_keterampilan_mapel4' => '',
            'nama_mapel5' => '',
            'nilai_pengetahuan_mapel5' => '',
            'predikat_pengetahuan_mapel5' => '',
            'deskripsi_pengetahuan_mapel5' => '',
            'nilai_keterampilan_mapel5' => '',
            'predikat_keterampilan_mapel5' => '',
            'deskripsi_keterampilan_mapel5' => '',
            'nama_mapel6' => '',
            'nilai_pengetahuan_mapel6' => '',
            'predikat_pengetahuan_mapel6' => '',
            'deskripsi_pengetahuan_mapel6' => '',
            'nilai_keterampilan_mapel6' => '',
            'predikat_keterampilan_mapel6' => '',
            'deskripsi_keterampilan_mapel6' => '',
            'nama_mapel7' => '',
            'nilai_pengetahuan_mapel7' => '',
            'predikat_pengetahuan_mapel7' => '',
            'deskripsi_pengetahuan_mapel7' => '',
            'nilai_keterampilan_mapel7' => '',
            'predikat_keterampilan_mapel7' => '',
            'deskripsi_keterampilan_mapel7' => '',
            'nama_mapel8' => '',
            'nilai_pengetahuan_mapel8' => '',
            'predikat_pengetahuan_mapel8' => '',
            'deskripsi_pengetahuan_mapel8' => '',
            'nilai_keterampilan_mapel8' => '',
            'predikat_keterampilan_mapel8' => '',
            'deskripsi_keterampilan_mapel8' => '',
            'nama_mapel9' => '',
            'nilai_pengetahuan_mapel9' => '',
            'predikat_pengetahuan_mapel9' => '',
            'deskripsi_pengetahuan_mapel9' => '',
            'nilai_keterampilan_mapel9' => '',
            'predikat_keterampilan_mapel9' => '',
            'deskripsi_keterampilan_mapel9' => '',
        ]);
        $validateData2 = $request->validate([
            'nama_ekstrakurikuler1' => '',
            'keterangan_nama_ekstrakurikuler1' => '',
            'nama_ekstrakurikuler2' => '',
            'keterangan_nama_ekstrakurikuler2' => '',
            'saran_saran' => '',
            'tinggi_badan_semester1' => '',
            'tinggi_badan_semester2' => '',
            'berat_badan_semester1' => '',
            'berat_badan_semester2' => '',
            'nama_aspek_fisik1' => '',
            'keterangan_aspek_fisik1' => '',
            'nama_aspek_fisik2' => '',
            'keterangan_aspek_fisik2' => '',
            'nama_aspek_fisik3' => '',
            'keterangan_aspek_fisik3' => '',
            'nama_aspek_fisik4' => '',
            'keterangan_aspek_fisik4' => '',
            'jenis_prestasi1' => '',
            'keterangan_prestasi1' => '',
            'jenis_prestasi2' => '',
            'keterangan_prestasi2' => '',
            'jumlah_sakit' => '',
            'jumlah_izin' => '',
            'jumlah_tanpa_keterangan' => '',
            'tanggal_penulisan_raport' => '',
            'nama_wali_kelas' => '',
            'nip_wali_kelas' => '',
            'keputusan_naik_kelas' => '',
        ]);
        Raport1::create($validateData);
        Raport2::create($validateData2);
        // return 'okmbbbb';

        // $guru->save();
        $raport = Raport1::where('kelas', $request->kelasku)->get();
        return view('admin/indexWaliKelas', [
            'kelas' => '3',
            'semester' => '3',
            'kelassemester' => '3',
            "nama" => "anselmus",
            "judul" => "user",
            'siswa' => Siswa::count(),
            'raport' => $raport,
            'raport2' => Raport2::all(),
            'mapel' => Mapel::all(),
            'daftarsiswa' => Siswa::all(),
            'kelaswali' => $request->kelasku,
        ]);
    }
}
