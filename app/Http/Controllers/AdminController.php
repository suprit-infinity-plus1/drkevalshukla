<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
// use App\Exceptions\Handler;
class AdminController extends Controller
{
    public function edit()
    {

        try {

            $admin = User::where('id', auth('admin')->user()->id)->firstOrFail();
            dd($admin);
            return view('adminauth.edit', compact('admin'));

        } catch (\Exception $ex) {

            if ($ex instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {

                // connectify('error', 'Error', 'Whoops, Account Not Found !');

                return redirect(route('admin.dashboard'));
            }

            // connectify('error', 'Error', 'Whoops, Something Went Wrong from our end');

            return redirect(route('admin.dashboard'));
        }
    }


    public function profileEdit()
    {
        return view('profile2.index');
    }

}
