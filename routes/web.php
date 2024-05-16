<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs',[
    'jobs' => [
        [
            'id' => 1,
            'title' => 'Software Engineer',
            'salary' => 100000

        ],
        [
            'id' => 2,
            'title' => 'Web Developer',
            'salary' => 80000
        ],
        [
            'id' => 3,
            'title' => 'Data Analyst',
            'salary' => 90000
        ]
    ]

    ]);
});
Route::get('/jobs/{id}', function ($id) {
    //dd($id);
    $jobs = [
        [
            'id' => 1,
            'title' => 'Software Engineer',
            'salary' => 100000

        ],
        [
            'id' => 2,
            'title' => 'Web Developer',
            'salary' => 80000
        ],
        [
            'id' => 3,
            'title' => 'Data Analyst',
            'salary' => 90000
        ]

    ];
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    //dd($job);
    return view('job', ['jobs' => $job]);

});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

