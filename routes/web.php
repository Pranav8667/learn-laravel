<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
// Day 1
// Ep 6 view and route file jobs



Route::get('/', function () {
    return view('home');
});


//All jobs showing route

Route::get('/jobs', function (){
    // $jobs = Job::with('employer')->get();
    // $jobs = Job::with('employer')->simplePaginate(3); //ep14
    $jobs = Job::with('employer')->paginate(3);   //ep 14
    // $jobs = Job::with('employer')->cursorPaginate(3);   //ep14
    // $jobs = Job::all();
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

//Route to show a new page to create a jobs

Route::get('/jobs/create', function (){
    return view('jobs.create');
    // dd('hello there');
});

//Single showing job route
Route::get('/jobs/{id}', function ($id){
   
    // $job = Arr::first(Job::all(), fn($job) => $job['id'] = $id);
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {

});

Route::get('/contact', function () {
    return view('contact');
});
