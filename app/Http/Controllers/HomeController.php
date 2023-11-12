<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \RouterOS\Client;
use \RouterOS\Query;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function connect()
    {
        // Initiate client with config object
        $client = new Client([
            'host' => '192.168.3.1',
            'user' => 'admin',
            'pass' => '123456789'
        ]);

        return $client;
    }
    public function index()
    {
        return view('dashboard');
    }

    public function connectUser()
    {
        $client = $this->connect();
        $data = $client->query('/ip/dhcp-server/lease/print')->read();
        $connection = $client->query('/queue/simple/print')->read();
        //dd($firewall);
        return view('pages.connectedUserTable',compact('data','connection'));
    }

    public function blockUser(Request $request)
    {
        $ip =  $request->ip;
        $client = $this->connect();
        $firewall = $client->query(
            [
                '/ip/firewall/filter/add'
                ,'=chain=forward'
                ,'=src-address='.$ip.''
                ,'=action=drop'
            ])->read();
        return redirect()->back()->with('success','Berhasil block user '.$ip.' ');
    }

    public function unBlockUser(Request $request)
    {
        $numbers =  $request->numbers;
        $client = $this->connect();
        $firewall = $client->query(
            [
                '/ip/firewall/filter/remove'
                ,'=numbers='.$numbers.''
            ])->read();
        return redirect()->back()->with('success','Berhasil block user');
    }

    public function blockedUser()
    {
        $client = $this->connect();
        $data = $client->query('/ip/firewall/filter/print')->read();
        return view('pages.blockedUserTable',compact('data'));
    }
}
