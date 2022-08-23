<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suara1 = DB::table('suaras')->sum('suara_1');
        $suara2 = DB::table('suaras')->sum('suara_2');
        $suara3 = DB::table('suaras')->sum('suara_tdk_sah');

            return view('beranda',[
                'suara1' => $suara1,
                'suara2' => $suara2,
                'suara3' => $suara3
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function log()
    {
        return view('beranda');
    }

    public function login(Request $request)
    {
        // $request['email'] = $request->email;
        // $request['password'] = bcrypt($request['password']);
        // $data = [
        //     'email' => $request->email,
        //     'password' => $request->password
        // ];

        // return redirect('/tentang');
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('tentang');
        }
        else{
            return redirect()->back()->with('loginerror', 'Login Gagal!!'); //redirect kembali ke halaman login
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/beranda');

    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
