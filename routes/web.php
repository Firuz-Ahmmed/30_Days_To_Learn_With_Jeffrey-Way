
<?php
use App\Http\Controllers\testController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Jobs;

Route::get('/form', function () {
    return view('form');
});
Route::post('/form',[testController::class,'index'])->name('form');

Route::get('/jobs', function () {
    return view('jobs',[
        'jobs'=>Jobs::all()
    ]);
});
Route::get('/jobs/{id}', function ($id) {
    //dd($id);
    $job = Arr::first(Jobs::all(), fn($job) => $job['id'] == $id);
    //dd($job);
    if(!$job){
        abort(404);
    }
    return view('job', ['jobs' => $job]);

});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

