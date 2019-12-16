<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function index(Request $request)
    {
        // $ip = '192.168.1.4';
        // $cmd = "arp -a " . $request->ip();
        // $status = 0; 
        // $return = []; 
        // exec($cmd, $return, $status); 
        // // dd($status, $return);
        // if(isset($return[3])) {
        //     $mac = strtoupper(str_replace("-",":",substr($return[3],24,17)));
        //     $type = strtoupper(substr($return[3],46,29));
        // }else{
        //     $mac = '';
        //     $type = '';
        // }
        // $return1 = [];
        // $cmd1 = "WMIC BIOS GET SERIALNUMBER";
        // exec($cmd1, $return1);
        // dd($mac, $type);
        return view('home');
    }
}
