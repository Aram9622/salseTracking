<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientsRequest;
use App\Clients;
class ClientsController extends Controller
{
    public function index(){
      return view('Admin.invite-client');
    }
    public function create(ClientsRequest $request){
      $data = $request->all();

      Clients::create($data);
      return redirect()->back()->with('status', 'helo wrodl');
    }
}
