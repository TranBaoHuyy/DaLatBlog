<?php


use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CuisineController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TravelTripController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;


//tra ve trang home
Route::get('/', function () {
    return redirect()->route('home');
});


//cac view page con
Route::get('home',[BlogController::class,'homeBlog'])->name('home');
Route::get('travelTrip',[BlogController::class,'travelTrip'])->name('travelTrip');
Route::get('travelTour',[BlogController::class,'travelTour'])->name('travelTour');
Route::get('cuisine',[BlogController::class,'cuisine'])->name('cuisine');
Route::get('gallery',[BlogController::class,'gallery'])->name('gallery');
Route::get('thacDatanla',[BlogController::class,'thacDatanla'])->name('thacDatanla');
Route::get('quangTruongLamVien',[BlogController::class,'quangTruongLamVien'])->name('quangTruongLamVien');
Route::get('hoTuyenLam',[BlogController::class,'hoTuyenLam'])->name('hoTuyenLam');
Route::get('dinhLangBiang',[BlogController::class,'dinhLangBiang'])->name('dinhLangBiang');
Route::get('phongCachSong',[BlogController::class,'phongCachSong'])->name('phongCachSong');

//admin dang nhap
Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//show blog,category,....ra view



Route::get('home',[BlogController::class,'showBlog'])->name('home');
Route::get('travelTrip',[TravelTripController::class,'showTravelTrip'])->name('travelTrip');
Route::get('cuisine',[CuisineController::class,'showCuisine'])->name('cuisine');
// Route::get('gallery',[GalleryController::class,'showGallery'])->name('gallery');


//dang nhap de them xoa sua
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   Route::resource('products', ProductController::class);
    //blog
    Route::get('/blogs/index', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{id}/destroy', [BlogController::class, 'destroy'])->name('blogs.destroy');
    //travel trip
    Route::get('/travelTrips/index', [TravelTripController::class, 'index'])->name('travelTrips.index');
    Route::get('/travelTrips/create', [TravelTripController::class, 'create'])->name('travelTrips.create');
    Route::post('/travelTrips', [TravelTripController::class, 'store'])->name('travelTrips.store');
    Route::get('/travelTrips/{id}/edit', [TravelTripController::class, 'edit'])->name('travelTrips.edit');
    Route::put('/travelTrips/{id}', [TravelTripController::class, 'update'])->name('travelTrips.update');
    Route::delete('/travelTrips/{id}/destroy', [TravelTripController::class, 'destroy'])->name('travelTrips.destroy');
    //cuisines
    Route::get('/cuisines/index', [CuisineController::class, 'index'])->name('cuisines.index');
    Route::get('/cuisines/create', [CuisineController::class, 'create'])->name('cuisines.create');
    Route::post('/cuisines', [CuisineController::class, 'store'])->name('cuisines.store');
    Route::get('/cuisines/{id}/edit', [CuisineController::class, 'edit'])->name('cuisines.edit');
    Route::put('/cuisines/{id}', [CuisineController::class, 'update'])->name('cuisines.update');
    Route::delete('/cuisines/{id}/destroy', [CuisineController::class, 'destroy'])->name('cuisines.destroy');
    //categories
    Route::resource('categories', CategoryController::class);
});

require __DIR__.'/auth.php';
