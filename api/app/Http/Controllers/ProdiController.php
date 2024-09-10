<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\prodi;

class ProdiController extends Controller
{
    public function index(){
    $prodi = Prodi::with('fakultas')->get();
    $data['message'] = true;
    $data['result'] = $prodi;
    return response()->json($data, Response::HTTP_OK);
}
}
