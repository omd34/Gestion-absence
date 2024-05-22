<?php

namespace App\Http\Controllers\Api\Auth;


use App\Http\Controllers\Controller;


use Illuminate\Auth\Access\AuthorizationException;

use Illuminate\Auth\Events\Verified;


use Illuminate\Foundation\Auth\VerifiesEmails;

use Illuminate\Http\Request;



class VerificationController extends Controller
{


      use VerifiesEmails;



 public function verify(Request $request){



    auth()->loginUsingId($request->route('id'));



        if (!hash_equals((string) $request->route('id'), (string) auth()->user()->getKey())) {

        throw new AuthorizationException;


        }



        if (!hash_equals((string) $request->route('hash'), shal(auth()->user()->getEmailForVerification()))) {

        throw new AuthorizationException;


        }



        if (auth()->user()->hasVerifiedEmail()) {


        return response()->json(["message" => "Email déjà vérifié."], 400);

        }



        if (auth()->user()->markEmailAsVerified()) {


                $user = auth()->user();

                $user->is_email_validated = true;

                $user->save();

                event(new Verified(auth()->user()));


        }



       return redirect("{{route('login')}}");

    }

  public function resend(Request $request){

            auth()->loginUsingId($request->route('id'));


            if (auth()->user()->hasVerifiedEmail()) {



                return response()->json(["msg" => "Email déjà vérifié."], 400);


            }



            auth()->user()->sendEmailVerificationNotification();

                return response()->json(["messag" => "Email verification link was sent on your mail." ]);

     }
}     
