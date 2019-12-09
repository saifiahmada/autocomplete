<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Propinsi;

use DB;


class CariController extends Controller
{
    public function index()
    {
        return view('cari');
    }

    public function autocomplete()
	{
		$term = request('term');
	    $result = Propinsi::where('nama', 'LIKE', '%' . $term . '%')->get(['id', 'nama as value']);
	    return response()->json($result);
	}


}
