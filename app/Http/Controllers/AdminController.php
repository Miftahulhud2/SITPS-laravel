<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Pencoblos;
use App\Models\User;
use App\Models\Suaras;
use App\Models\Tps;
use App\Models\data_calon;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index', [
            'title' => 'ADMIN'
        ]);
    }
    public function dashboard(){
        $tps = DB::table('tps')->count();
        $suara1 = DB::table('suaras')->sum('suara_1');
        $suara2 = DB::table('suaras')->sum('suara_2');
        $suara3 = DB::table('suaras')->sum('suara_tdk_sah');
        $jml_suara = $suara1 + $suara2 + $suara3;
        $pencoblos = DB::table('pencoblos')->count();
        return view('admin.dashboard', [
            'title' => 'DASHBOARD',
            'tpss' => $tps,
            'suara' => $jml_suara,
            'suara_tdk_sah' => $suara3,

            'pencoblos' => $pencoblos
        ]);
    }
    public function tps(){
        $tps = DB::table('tps')->paginate(12)->withquerystring();
        return view('admin.tps', [
            'title' => 'TPS',
            'tpss'  => $tps
        ]);
    }

    // public function tps($namatps){
    //     $tps = DB::table('tps')->where('nama', $namatps)->get();
    //     return view('admin.tps', [
    //         'title' => 'TPS',
    //         'tps    => $tps
    //     ]);
    // }

    public function datareport($slug){

    $tps = DB::table("tps")->where("slug",$slug)->get();
    $pencoblos = DB::table("pencoblos")->where("tps_id",$tps[0]->id)->get();
    $suara = DB::table("suaras")->where("tps_id",$tps[0]->id)->get();
    $suara1 = DB::table("suaras")->where("tps_id",$tps[0]->id)->sum("suara_1");
    $suara2 = DB::table("suaras")->where("tps_id",$tps[0]->id)->sum("suara_2");
    $suara3 = DB::table("suaras")->where("tps_id",$tps[0]->id)->sum("suara_tdk_sah");
    $jml_suara = $suara1 + $suara2 + $suara3;
    return view('admin.datareport', [
        'title' => 'DATA REPORT',
        'tps' => $tps,
        'pencoblos' => $pencoblos,
        'suara' => $suara,
        'suara1' => $suara1,
        'suara2' => $suara2,
        'suara3' => $suara3,
        'jumlah_suara' => $jml_suara,
        ]) ;
    }

    public function kembali(){
        return redirect('/tps');
    }

    public function datacalon(){
        return view('admin.datacalon', [
            'title' => 'DATA CALON'
        ]);

    }

    public function pendaftarandatacalon(Request $request){
        // ddd($request);
        $validated = $request->validate([
            'foto1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nm_calon1' => 'required',
            'nm_calon2' => 'required',
            'nm_w_calon1' => 'required',
            'nm_w_calon2' => 'required',
        ]);
        if ($request->hasFile('foto1', 'foto2')) {
            $file1 = $request->file('foto1');
            $file2 = $request->file('foto2');
            $filename1 = $file1->getClientOriginalName();
            $filename2 = $file2->getClientOriginalName();
            $request->file('foto1')->move(public_path('images'), $filename1);
            $request->file('foto2')->move(public_path('images'), $filename2);
        }
        data_calon::create([
            $validated
        ]);
    }

    public function datalogin(){
        $users = DB::table('tps')->paginate(7)->withquerystring();
        return view('admin.datalogin', [
            'title' => 'DATA LOGIN',
            'users' => $users
        ]);
    }


}
