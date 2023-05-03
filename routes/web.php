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
    // dd($request->all());
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email'
    ]);
    // create a new Student with firstOrCreate method and pass the validated data
    $student = \App\Models\Student::firstOrCreate($validatedData); 
    // dd($student->wasRecentlyCreated);
    // $student = \App\Models\Student::create($validatedData);
    $student->courses()->attach($request->courses);
    // session flash succes message
    if ($student->wasRecentlyCreated) {
        session()->flash('succes', 'Student created successfully');
    } else {
        session()->flash('danger', 'Student already exists. No new record created.');
    }
    return redirect()->back();
});

// We could make this more dynamic by passing the student id as a parameter
// Or we could also use a post request to delete the courses
// In the post request, we would pass on the Student id and the course id's to delete
// And catch them with the request object

Route::get('/deletecourses', function(){
    $student = \App\Models\Student::find(14);
    //dd($student);
    $student->courses()->detach([1,2,3]);
    return redirect()->back();
});

Route::get('/getstudentnames', function(){
    $students = \App\Models\Student::all();
    foreach($students as $student){
        echo $student->pronounce. '<br>';
    }
});