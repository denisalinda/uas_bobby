<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DosenModel;

class DosenController extends Controller
{
    public function profil()
    {
        $profil=DosenModel::all();
        $tittle="profil";
        return view('dosen.profil', compact('tittle', 'profil'));
    }

    public function ampu()
    {
        $profil=DosenModel::all();
        $tittle="Data ampu";
        return view('dosen.ampu', compact('tittle', 'data_ampu'));
    }
}
