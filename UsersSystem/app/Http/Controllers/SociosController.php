<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Socio;

class SociosController extends Controller
{

    public function index(){
    	$socios = Socio::get();
    	return view('index', compact('socios'));
    }

    public function create(){
    	return view('create');
    }

    public function save(Request $request){
    	$newSocio = new Socio;
    	$newSocio->nombre = $request->nombre;
    	$newSocio->edad = $request->edad;
    	$newSocio->email = $request->email;
    	$newSocio->save();
    }

    public function delete(Request $request) {
    	
    	$socio = Socio::FindorFail($request->id);
    	$socio->delete();
    	
    }
}
