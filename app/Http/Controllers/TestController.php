<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\Testmail;
class TestController extends Controller
{
    //







    public function foo(){




    }

    public function bar(){



        Mail::to('test@mail.com')->send(new Testmail());

        return view('test.bar');
    }
}
