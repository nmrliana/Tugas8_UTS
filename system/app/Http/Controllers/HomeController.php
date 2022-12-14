<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class HomeController extends Controller{

    function showindex(){
        return view('frontview.index');
    }

    function showblog(){
        $data['list_produk'] = Produk::all();
        return view('frontview.blog', $data);
    }

    function showblogdetail(){
        $data['list_produk'] = Produk::all();
        return view('frontview.blogdetail', $data);
    }

    





    function showdashboard(){
        return view('backview.dashboard');
    }

    function showkategori(){
        return view('backview.kategori');
    }

    function showsupplier(){
        return view('backview.supplier');
    }

    function showcolegan(){
        return view('backview.colegan');
    }

    function showproduk(){
        return view('backview.produk');
    }

    function showpromo(){
        return view('backview.promo');
    }

    function showuser(){
        return view('backview.user');
    }

    function showlogin2(){
        return view('backview.login2');
    }

    function showlogin(){
        return view('frontview.login');
    }
}
