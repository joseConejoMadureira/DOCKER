<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        $log = DB::select('SELECT  * FROM  log_tests');



        return response()->json($log, 200);
    }
}
