<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
// Day 1
// Ep 6 view and route file jobs



Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function (){
    // $jobs = Job::with('employer')->get();
    // $jobs = Job::with('employer')->simplePaginate(3); //ep14
    $jobs = Job::with('employer')->paginate(3);   //ep 14
    // $jobs = Job::with('employer')->cursorPaginate(3);   //ep14
    // $jobs = Job::all();
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id){
   
    // $job = Arr::first(Job::all(), fn($job) => $job['id'] = $id);
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});


Route::get('/contact', function () {
    return view('contact');
});
