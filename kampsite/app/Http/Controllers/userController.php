<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminModel;
use App\Models\kampModel;
use App\Models\ilModel;
use App\Models\bolgeModel;
use App\Models\userModel;
use App\Models\puanModel;
use Illuminate\Support\Facades\Cache;

class userController extends Controller
{
    public function userSave(Request $req)
    {
        
        $user =  $user =  mt_rand(100000000, 999999999);
        $varMi = userModel::where('kullaniciid', $user)->value('kullaniciid');
        if ($varMi != null) {
            $user =  mt_rand(100000000, 999999999);
        }
        $ad = $req->ad;
        $soyad = $req->soyad;
        $eposta = $req->eposta;
        $sifre = $req->sifre;
        $newUser = new userModel();
        $newUser->kullaniciid = $user;
        $newUser->ad = $ad;
        $newUser->soyad = $soyad;
        $newUser->eposta = $eposta;
        $newUser->sifre = $sifre;
            $newUser->save();
            return redirect('/giris' );
    }

    public function login(Request $req)
    {
        $eposta = $req->eposta;
        $sifre = $req->sifre;
        $user = userModel::where('eposta', $eposta)->value('sifre');
        $id = userModel::where('eposta', $eposta)->value('kullaniciid');

        if ($user != null) {
            if ($sifre == $user) {
                $userModel = userModel::find($id);
                 Cache::put("loginedUser", $userModel);

                return redirect('kullanicibilgi/' . $id);
            }
        }

        return redirect('/giris');
    }

    public function logout()
     {
        Cache::put("loginedUser", "");
        return redirect("/");
     }
    function getUser(Request $request)
    {
        $id = $request->id;
        $users = userModel::where('kullaniciid', $id)->get();
        return view('kullanicibilgi', compact('users', 'id'));
    }
}
