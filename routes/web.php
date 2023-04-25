<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $courses = \App\Models\Course::all();
    return view('welcome',compact('courses'));
});


Route::get('/test', function () {
    dd(\App\Models\Student::whereHas('courses')->get());
});

Route::post('/postuser',function(Request $request){

    //dd($request->all());
    $validatedData = $request->validate([
        'name' => 'required'
    ]);
    // create a new Student and post value from course to the pivot table
    $student = \App\Models\Student::create($validatedData);
    $student->courses()->attach($request->courses);
    return redirect()->back();
});
