<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mavodkho;

class MavodkhoController extends Controller
{
    public function index()
    {
        if(isset($_GET['btnselect']))
        {
            $select = $_GET['btnselect'];
            $sqlselect = Mavodkho::find($select);
            return view('select',compact('sqlselect'));
            //$sqlselect = DB::table('mavodkhos')->find($select);
        }
        else
        {
            $sql = Mavodkho::all();
            return view('mahsulot',compact('sql'));
        }
    
        //$sql = DB::table('mavodkho')->get();
        //$sql = DB::table('mavodkho')->find(3);
        //$sql = DB::table('mavodkho')->where('narkh', '>', '1000')->get();
        //$sql = DB::table('mavodkhos')->OrderBy('narkh')->get();
        //var_dump($sql);
        //dd($sql);
    }

    public function story( Request $request)
    {
        //dd($request);
        Mavodkho::create($request->all());
        return redirect()->route('urlselect');
    }

    public function update(Request $request)
    {
        //dd($request);
        $update = Mavodkho::find($request->id);
        $update->update([
            'mavod'=>$request->mavod,
            'shumora'=>$request->shumora,
            'narkh'=>$request->narkh
        ]);
        return redirect()->route('urlselect');
    }

    public function delete(Request $request)
    {
        //dd($request);
        $delete = Mavodkho::find($request->delete);
        $delete->delete();
        return redirect()->route('urlselect');
    }
}
