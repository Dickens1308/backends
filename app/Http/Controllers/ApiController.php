<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ApiController extends Controller
{
    public function mails(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|required|max:255',
            'email' => 'email|required|max:255',
            'phone' => 'string|required|max:255',
            'message' => 'string|required|max:2000'
        ]);

        try {
            Mail::to("anthony.c.dickens@gmail.com")->send(new ContactMail($request->name, $request->email, $request->phone, $request->message));

            return response(['message' => 'mail was sent']);
        } catch (\Throwable $th) {
            return response(["message" => "mail was not sent"], 500);
        }
    }

    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|max:255',
        ]);

        try {
            return response(['message' => 'user subscribed successful']);
        } catch (\Throwable $th) {
            return response(["message" => "user failed to subscribe"], 500);
        }
    }
}
