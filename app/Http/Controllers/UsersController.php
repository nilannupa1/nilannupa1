<?php

namespace App\Http\Controllers;
use App\Models\produk;
 use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Event\Test\ComparatorRegisteredSubscriber;

class UsersController extends Controller
{
    public function cekout(){
        return view('/cekout');
    }
    public function checkout(){
        return view('/checkout');
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function keranjang(Request $request){
        $user = auth()->user();
        $data['produk']= produk::find($request->id);
        return view('keranjang' ,compact('user'),$data);
    }
    public function show(Request $request)
    {
        $user = auth()->user();
        $data['produk'] = produk::find($request->id);
        return view('show', compact('user'),$data);
    }
    public function auth(Request $request){
        $validate = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($validate)){
            return redirect('/user');
        }
        return redirect()->back()->with('pesanlogin','maaf,login anda gagal');
    }
    public function user(Request $request){
        $data['user'] = User::all();
        $data['produk'] = produk::all();
        $data['total_user'] = $data['user']->count();

        return view('user',$data);
    }
    function add(){

    } 
    }
   