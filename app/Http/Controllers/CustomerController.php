<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class CustomerController extends Controller
{

public function check(Request $request){
    // $data_check_with_mysql=Customer::where('id',1)->first();
    // $data_check_with_redis=Redis::where('id',1)->first();
    $data_check_with_caching=Cache::where('id',1)->first();

    if($data_check){
        Customer::update ([
            'name'=>$request->name
        ]);


    }
    else{
        Customer::create([
            'name'=>$request->name,
            'end_date'=>$request->end_date,
            'email'=>$request->email,
        ]);
    }
}
}
