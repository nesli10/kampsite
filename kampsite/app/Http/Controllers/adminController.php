<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\adminModel;
use App\Models\kampModel;
use App\Models\ilModel;
use App\Models\bolgeModel;
use App\Models\puanModel;

class adminController extends Controller
{
    public function login(Request $req)
    {
        $id = $req->id;
        $sifre = $req->password;
        $admin = adminModel::where('adminid', $id)->value('sifre');
       

        if ($admin != null) {
            if ($sifre == $admin) {
                return redirect('admin/' . $id);
            }
        }

        return redirect('/adminlogin');
    }
    

    function getCamp(Request $request)
    {    $id = $request->id;
        $admin = adminModel::where('adminid', $request->id)->get();
        $camp = kampModel::all();
        
        return view('admin', compact('admin', 'id','camp'));
       
    }
   

    public function addcamp(Request $request){
        $id = $request->kampid;
        $kampadi = $request->kampadi;
        $aciklama = $request->aciklama;
        $ucret = $request->ucret;
        $link = $request->link;
        $bolge= bolgeModel::where("bolgeadi", $request->bolge)->first();
        $bolgeid=$bolge->bolgeid;
        $il= ilModel::where("iladi", $request->il)->first();
        $ilid=$il->ilid;
        $kamp = new kampModel();
        $kamp->kampadi = $kampadi;
        $kamp->aciklama = $aciklama;
        $kamp->ilid = $ilid;
        $kamp->bolgeid = $bolgeid;
        $kamp->ucret = $ucret;
        $kamp->link = $link;

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $filename = $id . ".jpg";
            $path = $filename;
            $image->move("assets/images/", $filename);
            $kamp->foto = $path;
        }
      
        $kamp->save();

        return redirect()->back();
    }
     

    public function getupdate($kampid)
    {
        $guncellen = kampModel::find($kampid);
        return view("kampguncelle", ["guncelle" => $guncellen]);
    }
    public function setUpdate(Request $request)
    {
       
        $id = $request->kampid;
        $insert = kampModel::find($request->kampid);
        $insert->kampadi = $request->kampadi;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $filename = $id . ".jpg";
            $path = $filename;
            $image->move("assets/images/", $filename);
            $insert->foto = $path;
        }
        $insert->aciklama = $request->aciklama;
        $insert->ucret = $request->ucret;
        $insert->link = $request->link;
        $il = ilModel::where("iladi",$request->il)->first();
        $insert->ilid=$il->ilid; 
        $bolge = bolgeModel::where("bolgeadi", $request->bolge)->first();
        $insert->bolgeid=$bolge->bolgeid;
        $insert->update();  
        return redirect()->back()->with('success', 'kamp Güncellendi'); 
    }

    public function kampSil(Request $req){
        
        $kamp = kampModel::where('kampid', $req->kampid);
        if($kamp->exists()) {
            $kamp->delete();
        }
        return redirect()->back()->with('success', 'kamp silindi');
     }
}
