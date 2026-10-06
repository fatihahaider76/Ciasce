<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminProgramController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminRegistrationController;



Route::get('/', function () {
    $programs = \Illuminate\Support\Facades\Schema::hasTable('programs')
        ? \App\Models\Program::latest()->get()
        : collect();
    return view('welcome', compact('programs'));
})->name('home.HMO');
Route::get('/About-Page', function () {
    return view('frontend/about');
})->name('about.abt');

Route::get('/Faculty', function () {
    return view('frontend/faculty');
})->name('faculty.fac');

/* ---------- Our Programs (public) ---------- */
Route::get('/our-programs', [ProgramController::class, 'index'])->name('programs.index');

/* ---------- Registration (public) ---------- */
Route::get('/register', [RegistrationController::class, 'form'])->name('register.form');
Route::post('/register', [RegistrationController::class, 'store'])->name('register.store');
Route::get('/registration-submitted', [RegistrationController::class, 'success'])->name('register.success');

/* ---------- Admin panel ---------- */
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', fn () => redirect()->route('admin.programs.index'));
    Route::get('/programs', [AdminProgramController::class, 'index'])->name('programs.index');
    Route::get('/programs/create', [AdminProgramController::class, 'create'])->name('programs.create');
    Route::post('/programs', [AdminProgramController::class, 'store'])->name('programs.store');
    Route::get('/programs/{program}/edit', [AdminProgramController::class, 'edit'])->name('programs.edit');
    Route::put('/programs/{program}', [AdminProgramController::class, 'update'])->name('programs.update');
    Route::delete('/programs/{program}', [AdminProgramController::class, 'destroy'])->name('programs.destroy');

    Route::get('/registrations', [AdminRegistrationController::class, 'index'])->name('registrations.index');
    Route::get('/registrations/{registration}', [AdminRegistrationController::class, 'show'])->name('registrations.show');
    Route::delete('/registrations/{registration}', [AdminRegistrationController::class, 'destroy'])->name('registrations.destroy');

    Route::get('/settings', [AdminAuthController::class, 'settings'])->name('settings');
    Route::post('/settings', [AdminAuthController::class, 'updateSettings'])->name('settings.update');
});

Route::get('/Master-page', function () {
    return view('frontend/master');
})->name('master.mas');


Route::get('/Master-pages', function () {
    return view('frontend/masterr');
});















































Route::resource('/student',StudentController::class);

Route::get('students',[StudentController::class,'index']);



// Route::get('/gallerys', function () {
//     return view('gallery.index');
// })->name('gallery_page');







// Route::get('/fogi', [ImageController::class, 'index'])->name('gallery.index');
// Route::get('/upload', [ImageController::class, 'create'])->name('gallery.create');
// Route::post('/upload', [ImageController::class, 'store'])->name('gallery.store');




Route::get('/login_before_image_upload', [ImageController::class, 'loginForm'])->name('login.form');
Route::post('/loginss', [ImageController::class, 'login'])->name('loginss');
Route::get('/galleryy', [ImageController::class, 'indexx'])->name('gallery.index');
Route::post('/gallery', [ImageController::class, 'storee'])->name('gallery.store');
// Route::post('/gallery/upload', [ImageController::class, 'storee'])->name('gallery.store')->middleware('auth');





Route::get('/Unlocking', function () {
    return view('frontend.Unlocking');
})->name('Unlocking.lock');

Route::get('/purchasing', function () {
    return view('frontend.purchasing');
})->name('purchasing.lock');

Route::get('/power', function () {
    return view('frontend.power');
})->name('power.lock');