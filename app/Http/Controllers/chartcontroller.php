<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chartcontroller extends Controller
{
    public function store(Request $resquest)
    {
        $name = $resquest->input('user');
        $m1 = $resquest->input('m1');
        $m2 = $resquest->input('m2');
        $m3 = $resquest->input('m3');
        $m4 = $resquest->input('m4');
        $m5 = $resquest->input('m5');
        $m6 = $resquest->input('m6');
        $avg = ($m1+$m2+$m3+$m4+$m5+$m6)/6;
        if($m1>=25 && $m2>=25 && $m3>=25 && $m4>=25 && $m5>=25 && $m6>=25 ) 
        {
         $result = "Pass";
        }
        else
        {
         $result = "Fail";
        }
        $arr= array('name'=>$name ,'m1'=> $m1,'m2'=> $m2,'m3'=> $m3,'m4'=> $m4,'m5'=> $m5,'m6'=> $m6,'avg' =>$avg , 'result' =>$result );
        $data = json_encode($arr);
        return view('chart',["data"=>$data]);
    }
}
