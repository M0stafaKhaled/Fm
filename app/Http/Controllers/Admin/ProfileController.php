<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileRequest;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('admin.profile.edit');

    }// end of getChangeData

    public function update(ProfileRequest $request)
    {
        auth()->user()->update($request->all());

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('admin.home');

    }// end of postChangeData

}//end of controller
