<?php

namespace gerenciaProjeto\Http\Controllers;

use gerenciaProjeto\Repositories\ClientRepository;
use Illuminate\Http\Request;

class ClientController extends Controller
{


    private $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(ClientRepository $repository)
    {
        return $this->repository->all();
    }

    public function store(Request $request)
    {

    	return $this->repository->create($request->all);

    }


}
