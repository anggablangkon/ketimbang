<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LayoutsController extends Controller
{
    public function layoutsedit(){

        $layouts     = app('LayoutsModel')->ListLayouts();
    	return view('admin.layouts.layoutsedit', compact('layouts'));
    }

    public function editlayouts($id){
        $layouts     = app('LayoutsModel')->ListLayoutsFirst($id);
        
    	return view('admin.layouts.editlayouts', compact('layouts'));
    }

    public function saveeditlayouts(Request $request){

    	$kokit['isi'] 		= $request->isi;
    	$kokit['id']  		= $request->id;
    	$kokit['mby'] 		= Auth::user()->id;
    	$kokit['mdate'] 	= date('Y-m-d H:i:s');

        $layouts     = app('LayoutsModel')->EditLayoutsFirst($kokit);

        return redirect('/editlayouts/'.$kokit['id'])->with('success','Data berhasil diperbarui');

    }
}
