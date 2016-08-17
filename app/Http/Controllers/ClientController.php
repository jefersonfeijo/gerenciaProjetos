<?php

namespace gerenciaProjeto\Http\Controllers;

use Illuminate\Http\Request;

use gerenciaProjeto\Http\Requests;

class ClientController extends Controller
{
    public function index()
    {
    	return \gerenciaProjeto\Client::all();
    }

    public function store(Request $request)
    {

    	return \gerenciaProjeto\Client::create($request->all());
    }


}
