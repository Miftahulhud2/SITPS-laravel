<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Pencoblos;
use App\Models\User;
use App\Models\Suaras;
use App\Models\Tps;



class PencoblosController extends Controller
{
    public function index() {

        // $tps = auth()->user()->tps->id;
        // $hadir = $tps->pencoblos->hadir;

        $tps = Tps::find(auth()->user()->tps->id);

        $pencoblos = Pencoblos::find(auth()->user()->tps->id);
        $pe = Pencoblos::latest()->paginate(10);
        $tps = $tps->pencoblos;

        if(request('search')){
            $tps = $pe->where('nama', 'like', '%' . request('search') . '%');


            // $cari->where('nama', 'like', '%' . request('search') . '%')
            // ->orWhere('jns_kelamin', 'like', '%' . request('search') . '%');
        }
        // $data = DB::table('pencoblos')->get();
        return view('tps.event', [
            'title'         =>  'EVENT',
            'pencoblos'     =>  $pencoblos->paginate(4)->withquerystring(),
            'tps'           =>  $tps,
            // 'hadir'         =>  $hadir

        ]);
    }

    public function hadir(Request $request, Pencoblos $pencoblos)
    {
        $tps = Tps::find(auth()->user()->tps->id);
        $pencoblos = Pencoblos::find(auth()->user()->tps->id);
        $tps = $tps->pencoblos;

        $data = pencoblos::find($request);

        $hadir = $data->first()->hadir;

        if ($hadir == 0){
            $data->first()->hadir = 1;
            $data->first()->save();
        }
        else{
            $data->first()->hadir = 0;
            $data->first()->save();
        }
        return redirect('/event')->with('success', 'DATA TELAH DIUBAH');



    }


    public function pencarian(Request $request){
        $pencoblos = Pencoblos::find(auth()->user()->tps->id);
        if(request('search')){
            $pencoblos->where('nama', 'like', '%' . request('search') . '%');
        }
        return view('tps.event1', [
            'title'         =>  'EVENT',
            'pencoblos'     =>  $pencoblos->filter()->paginate(4)->withquerystring()
        ]);
    }

    public function pencoblos() {
        $nama = DB::table('pencoblos')->get();
        foreach ($nama as $n) {
            echo $n->nama;

        }
    }
    public function coba()
    {
        $coba = Pencoblos::latest();
        if (request('search')) {
            $coba = Pencoblos::where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('jns_kelamin', 'like', '%' . request('search') . '%');
        }
        return view('coba',[
            'coba' => $coba->get()
        ]);
    }
    public function coba1(Request $request)
    {
        $cari = $request->store;
        $data = Pencoblos::where('nama', 'like', '%' . $cari . '%')
        ->orWhere('jns_kelamin', 'like', '%' . $cari . '%')
        ->get();
        return view('coba', compact('data'));
    }

    public function cobaupload(Request $request){
        ddd($request);
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        /* Store $imageName name in DATABASE from HERE */

        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);
    }

    public function tentang(){
        $pencoblo = Tps::find(auth()->user()->tps->id);
        $pencoblos = $pencoblo->pencoblos->count();
        $hadir = DB::table('pencoblos')->sum('hadir');
        $tps = db::table('tps')->get();
        $user = DB::table('users')->get();
        return view('tps.tentang', [
            'title' => "TENTANG",
            'user' => $user,
            'tps' => $tps,
            'hadir' => $hadir,
            'pencoblos' => $pencoblos
        ]);
    }
    public function registrasi(){
        $user = DB::table('users')->get();
        $tps = DB::table('tps')->get();
        return view('tps.registrasi' ,[
            'title' => "REGISTRASI",
            'tps' => $tps,
        ]);

    }
    public function reg(Request $request) {
        // return request()->all();
        $validated = $request->validate([
            'tps_id'        => 'required',
            'nama'          =>  'required',
            'nik'           =>  'required|min:5',
            'tmp_lahir'     =>  'required',
            'tgl_lahir'     =>  'required',
            'umur'          =>  'required|digits:2',
            'sts_kawin'     =>  'required',
            'jns_kelamin'   =>  'required',
            'alamat'        =>  'required'
        ]);

        if ($validated){
            pencoblos::create(
                // [
                $validated,
                // 'created_at'    =>  now(),
                // 'updated_at'    =>  now()
                // ]
            );

            return back()->with('success', 'Data berhasil ditambahkan');

        }else
        {
            return back()->with('error', 'Data gagal ditambahkan');
        }

    }


    public function report(){
        $tps = Tps::find(auth()->user()->tps->id);
        return view('tps.report', [
            'title' => 'REPORT',
            'tps' => $tps
        ]);
    }

    public function report_data(Request $request){

        // ddd($request);

        $suara = $request->validate([
            'id '=> 'required',
            'suara_1' => 'required|integer',
            'suara_2' => 'required|integer',
            'suara_tdk_sah' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048',
        ]);

        // if ($request->hasfile('image')){
        //     $validated['image']= $request->image->store('public/images');
        //     return back()->with('success', 'Data berhasil ditambahkan');
        // }else
        // {
        //     return back()->with('error', 'Data gagal ditambahkan');
        // }
        if ($request->hasfile('image')){
            $suara['image']= $request->image->store('public/images');
            return back()->with('success', 'Data berhasil ditambahkan');
        }


        $suara = new Suara;
        $suara->id = $request->id;
        $suara->suara_1 = $request->suara_1;
        $suara->suara_2 = $request->suara_2;
        $suara->suara_tdk_sah = $request->suara_tdk_sah;
        $suara->image = $request->image;
        $suara->save();


    }

}

