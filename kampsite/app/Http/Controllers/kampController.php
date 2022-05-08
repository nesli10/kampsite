<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kampModel;
use App\Models\puanModel;


class kampController extends Controller
{
    public function egeListele()
    {

        $kamp= kampModel::where("bolgeid", "=", 1)->get();
        $puan = puanModel::all();
        return view('ege', compact('kamp','puan'));
    }
    public function akdenizListele()
    {

        $kamp= kampModel::where("bolgeid", "=", 2)->get();
        $puan = puanModel::all();
        return view('akdeniz', compact('kamp','puan'));
    }
    public function marmaraListele()
    {

        $kamp= kampModel::where("bolgeid", "=", 3)->get();
        $puan = puanModel::all();
        return view('marmara', compact('kamp','puan'));
    }
    public function icanadoluListele()
    {

        $kamp= kampModel::where("bolgeid", "=", 4)->get();
        $puan = puanModel::all();
        return view('icanadolu', compact('kamp','puan'));
    }
    public function doguanadoluListele()
    {

        $kamp= kampModel::where("bolgeid", "=", 5)->get();
        $puan = puanModel::all();
        return view('doguanadolu', compact('kamp','puan'));
    }
    public function karadenizListele()
    {

        $kamp= kampModel::where("bolgeid", "=", 6)->get();
        $puan = puanModel::all();
        return view('karadeniz', compact('kamp','puan'));
    }

    public function addpuan(Request $request){
        $kampid=$request->kampid ;
        $puan = $request->puan;
        $puanModel = new puanModel();
        $puanModel->puan = $puan;
        $puanModel->kampid = $kampid;
        $puanModel->save();

        return redirect()->back();
    }


}
