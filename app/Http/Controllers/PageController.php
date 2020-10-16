<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index(){
        $title = 'Ini Index';
        $judul = 'Index';
        $pages = 'index';
        return view('pages/index')->with('title', $title)->with('judul', $judul)->with('pages', $pages);
    }
    public function jadwal()
    {
        $title = 'Jadwaaaaaaaaaaaaaal kuliah mu :)';
        $judul = 'Jadwal Kuliah';
        $pages = 'jadwal';
        return view('pages/jadwal_kuliah')->with('title', $title)->with('judul', $judul)->with('pages', $pages);
    }
    public function kontak()
    {
        $title = 'Kamu ga punya temen :((';
        $judul = 'Kontak Teman';
        $pages = 'kontak';
        return view('pages/kontak_teman')->with('title', $title)->with('judul', $judul)->with('pages', $pages);
    }
}