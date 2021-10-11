<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Contracts;
use App\Contracts\ProductContract;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StoreProductFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class UserController extends BaseController
{
    public function edit($id)
    {

        $user = Auth::user();


        return view('site.user.edit', compact('user'));
    }


    public function update(Request $request)
    {
        $params = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.request('id').',id'],
            'address' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
        ]);

        $user = DB::table('users')->where('id', request('id'))->update($params);

        return $this->responseRedirect('site.pages.homepage', 'Product updated successfully', 'success', false, false);
    }
}


