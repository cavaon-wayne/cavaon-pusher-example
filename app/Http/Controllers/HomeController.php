<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use CavaonPusher;

class HomeController extends Controller
{

    public function client()
    {
        $wsHostURL=CavaonPusher::getHostURL();
        $token=CavaonPusher::getToken();
    
        return view('ws_client',compact("wsHostURL","token"));
    }

    public function fire()
    {
        event(new \App\Events\ServerCreated("Fired from Controller at ".date("Y-m-d H:i:s")));
        return view('welcome');
    }

    public function fire2()
    {
        $data=["id"=>1,"name"=>"Sydney day tour","price"=>100.5];
        event(new \CavaonEvent('my-testing-channel','my-testing-event',$data));
        return view('welcome');
    }

}
