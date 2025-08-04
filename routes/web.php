<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
// Day 1
// Ep 6 view and route file jobs



Route::get('/', function () {
    return view('home');
});


//All jobs showing route or index

Route::get('/jobs', function (){
    // $jobs = Job::with('employer')->get();
    // $jobs = Job::with('employer')->simplePaginate(3); //ep14
    $jobs = Job::with('employer')->latest()->paginate(3);   //ep 14
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


//Store
Route::post('/jobs', function () {
    //Validation

    request()->validate([
        'title' => ['required', 'min:3'], 
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
    // dd(request()->all());
    // dd(request('title'));
    // dd('hello from the post request');
});

// Edit a job
Route::get('/jobs/{id}/edit', function ($id){
    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});

//update

Route::patch('/jobs/{id}', function ($id){
    //validate

      request()->validate([
        'title' => ['required', 'min:3'], 
        'salary' => ['required']
    ]);
    //authorize (on hold..)
    $job = Job::findOrFail($id);

   $job->update([
    'title' => request('title'),
    'salary' => request('salary')
   ]);
   
    return redirect('/jobs/'. $job->id);
});

//Destroy

Route::delete('/jobs/{id}', function ($id){
    //Authorize (On Hold..)


    //Delete the job
    Job::findOrFail($id)->delete();

    //redirect to page 
    return redirect('/jobs');
});


Route::get('/contact', function () {
    return view('contact');
});
