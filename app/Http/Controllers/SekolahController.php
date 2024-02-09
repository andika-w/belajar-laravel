<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;

    class SekolahController extends Controller
    {
    public function index()
    {
        return view('home', [
            "title" => "home"
        ]);
    }

    public function list()
    {
        return view('list-sekolah', [
            "title" => "list-sekolah",
            "list" => Sekolah::all()
        ]);
    }

    public function info_sekolah(Sekolah $sekolah)
    {
        return view('sekolah' , [
            "title" => "info sekolah",
            "data" => $sekolah
        ]);
    }
    }
