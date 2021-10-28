<?php

use App\Models\Poseession;
use App\Models\Role;
use App\Pepole;
use Faker\Provider\ar_JO\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/pe' , 'PepoleController@index');
Route::get('/pl', function () {
    $pes = Pepole::all();
    return view('p.index' , compact('pes'));
})->name('pl');
Route::get('/pe/{person}' , function($person){
    return Pepole::find($person);
});
Route::get('/pe/edit/{person}', function (Pepole $pe)  {

return view('p.edit' , compact('pe'));
});

Route::get('pl/create' , function(){
    $roles = Role::whereNotIn('name', ['super_admin', 'admin'])->get();
    $ps = Poseession::all();
    return view('p.create' , compact('roles' , 'ps'));
})->name('plcreate');


Route::post('/pepole/store', function (Request $request) {
 
       
       Pepole::create([
        "name"=> $request->name,
        "gender"=> (int)$request->gender,
        "NationalID"=>$request->NationalID,
        "address"=> $request->address,
        "SocialStatus"=>(int)$request->SocialStatus,
        "healthy"=> (int)$request->healthy,
        "dateOfBirth"=> $request->dateOfBirth,
        "PhoneNumber"=> $request->PhoneNumber,
        "job"=>(int)$request->job,  
        "home"=>(int)$request->home,

       ] );
        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('admin.admins.index');
})->name('pepole.store');





Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath',
    ])
    ->group(function () {

        Route::get('/', 'WelcomeController@index')->name('welcome');

        Route::get('/home', 'HomeController@index')->name('home');

        Auth::routes();
        

    });
