<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PreferencesController;
use App\Http\Controllers\CredentialsController;
use App\Http\Controllers\ExperiencesController;






Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);


//All about personal routes
Route::get('/profiles', [PersonalController::class, 'index'])->name('profiles');
Route::post('/addcontact', [PersonalController::class, 'contactStore'])->name('addcontact');
Route::post('/addaddress', [PersonalController::class, 'addressStore'])->name('addaddress');
Route::post('/addemergency', [PersonalController::class, 'emergencyStore'])->name('addemergency');
Route::post('/addreferral', [PersonalController::class, 'referralStore'])->name('addreferral');



//All about preference routes
Route::get('/preferences', [PreferencesController::class, 'index'])->name('preferences');
Route::post('/addworkPreferences', [PreferencesController::class, 'workPreferenceStore'])->name('addworkPreferences');
Route::post('/addworkLocation', [PreferencesController::class, 'workLocationStore'])->name('addworkLocation');
Route::post('/addnotification', [PreferencesController::class, 'notificationStore'])->name('addnotification');


//All about credentials routes
Route::get('/credentials', [CredentialsController::class, 'index'])->name('credentials');
Route::post('/addlicenses', [CredentialsController::class, 'licensesStore'])->name('addlicenses');
Route::post('/addclient', [CredentialsController::class, 'clientStore'])->name('addclient');
Route::post('/addemployment', [CredentialsController::class, 'employmentStore'])->name('addemployment');
Route::post('/addcertifications', [CredentialsController::class, 'certificationsStore'])->name('addcertifications');
Route::post('/addmedical', [CredentialsController::class, 'medicalStore'])->name('addmedical');
Route::post('/addtraining', [CredentialsController::class, 'trainingStore'])->name('addtraining');
Route::post('/addadditional', [CredentialsController::class, 'additionalStore'])->name('addadditional');
Route::post('/addbackground', [CredentialsController::class, 'backgroundStore'])->name('addbackground');
Route::post('/addhr', [CredentialsController::class, 'hrStore'])->name('addhr');


//All about experiences routes
Route::get('/experiences', [ExperiencesController::class, 'index'])->name('experiences');
Route::post('/addeducation', [ExperiencesController::class, 'educationStore'])->name('addeducation');
Route::post('/addwork', [ExperiencesController::class, 'workStore'])->name('addwork');
Route::post('/addresume', [ExperiencesController::class, 'resumeStore'])->name('addresume');







//login route (First page to show)
Route::get('/', function () {
    return view('auth.login');
});

// profiles route
// Route::get('/profiles', function () {
//     return view('profiles');
// });

//credentials route
Route::get('/credentials', function () {
    return view('credentials');
});

//documents route
Route::get('/documents', function () {
    return view('documents');
});


//experiences route
Route::get('/experiences', function () {
    return view('experiences');
});


//skills route
Route::get('/skills', function () {
    return view('skills');
});


//tests route
Route::get('/tests', function () {
    return view('tests');
});


//settings route
Route::get('/settings', function () {
    return view('settings');
});


//preferences route
Route::get('/preferences', function () {
    return view('preferences');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('auth');
