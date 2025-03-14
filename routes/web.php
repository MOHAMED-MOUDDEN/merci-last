<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\blog_detailController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\chefControler;
use App\Http\Controllers\clientAbout;
use App\Http\Controllers\clientBlog;
use App\Http\Controllers\clientComment;
use App\Http\Controllers\ClientContactController;
use App\Http\Controllers\ClientGaleryController;
use App\Http\Controllers\clientIndex;
use App\Http\Controllers\clientMenu;
use App\Http\Controllers\clientProfile;
use App\Http\Controllers\clientReservation;
use App\Http\Controllers\commandeController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\ContactConroller;
use App\Http\Controllers\galeryConroller;
use App\Http\Controllers\pannierController;
use App\Http\Controllers\RepasConroller;
use App\Http\Controllers\reservationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComndController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\AppartementController;
use App\Http\Controllers\CreateAppartementController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RoomReservationController;
use App\Http\Controllers\Admin\RoomController;

use Illuminate\Support\Facades\Artisan;

Route::resource('admin/rooms', RoomController::class);

Route::post('/rooms/{id}/book', [RoomController::class, 'book'])->name('rooms.book');

Route::prefix('user')->name('user.')->group(function () {
    Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
    Route::get('/rooms/{id}', [RoomController::class, 'show'])->name('rooms.show');
    Route::get('/rooms/{id}/book', [RoomController::class, 'book'])->name('rooms.book');
});



Route::get('/clientBlog/search', [App\Http\Controllers\clientBlog::class, 'search'])->name('search');
Route::get('/blog_detailController/store', [App\Http\Controllers\blog_detailController::class, 'store'])->name('createComment');
Route::get('/clientReservation/store', [App\Http\Controllers\clientReservation::class, 'store'])->name('createReservation');
Route::get('/clientIndex/store', [App\Http\Controllers\clientIndex::class, 'store'])->name('createreservation');
Route::get('/clientContact/store', [App\Http\Controllers\ClientContactController::class, 'store'])->name('createContact');
Route::get('/user/reservations/{id}', [App\Http\Controllers\UserController::class, 'reservations'])->name('reservations');
Route::get('/user/profile/{id}', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::get('/user/contacts/{id}', [App\Http\Controllers\UserController::class, 'contacts'])->name('contacts');
Route::get('/pannier/add/{id}', [App\Http\Controllers\pannierController::class, 'add'])->name('add_pannier');
Route::get('/Coupon', [App\Http\Controllers\CouponController::class, 'index'])->name('coupon.index')->middleware('admin');
Route::delete('/Coupon/destroy/{id}', [App\Http\Controllers\CouponController::class, 'destroy'])->name('coupon.destroy');
Route::get('/Coupon/create', [App\Http\Controllers\CouponController::class, 'store'])->name('coupon.create')->middleware('admin');
Route::get('/Coupon/add', [App\Http\Controllers\CouponController::class, 'addCoupon'])->name('coupon.add')->middleware('admin');
Route::get('/repas/specific', [App\Http\Controllers\RepasConroller::class, 'index_type'])->name('repa.type');

Route::patch('/commande/Payée/{id}', [App\Http\Controllers\ComndController::class, 'payee'])->name('comnd.payee');

Route::resource('pannier', pannierController::class);
Route::resource('repas',RepasConroller::class);
Route::resource('contact', ContactConroller::class);
Route::resource('photos',galeryConroller::class);
Route::resource('chef',chefControler::class);
Route::resource('reservation',reservationController::class);
Route::resource('admin',AdminController::class);
Route::resource('user',UserController::class);
Route::resource('blog',blogController::class);
Route::resource('category',categoryController::class);
Route::resource('comment',commentController::class);
Route::resource('clientContact',ClientContactController::class);
// Route::resource('clientIndex',clientIndex::class)->middleware('auth');
Route::resource('clientIndex',clientIndex::class);
Route::resource('clientReservation',clientReservation::class);
Route::resource('clientAbout',clientAbout::class);
Route::resource('clientMenu',clientMenu::class);
Route::resource('clientGalery',ClientGaleryController::class);
Route::resource('clientBlog',clientBlog::class);
Route::resource('clientBlog_detail',blog_detailController::class);
Route::resource('clientprofile',clientProfile::class);
Route::resource('clientComment',clientComment::class);
Route::resource('cart',cartController::class);
Route::resource('commande',commandeController::class);
Route::resource('comnd',ComndController::class);
Route::resource('reviews',ReviewController::class);
Route::resource('checkout',CheckoutController::class);





// Route::get('/', [clientIndex::class, 'index']);
Route::get('/', [clientIndex::class, 'index']);

Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// tests :

// Route::get('/test', function() {return view('client.validation');});
// Route::get('/test', [ComndController::class, 'index']);
Route::get('/test', [pannierController::class, 'index']);
Route::get('/test2', function(){
    return view('client.test2');
});
Route::get('/commande', [ComndController::class, 'showcomnds'])->name('showcomnds');


// Route::get('/Menu/starters', [clientMenu::class, 'index'])->name('starters');
// Route::get('/Menu/main', [clientMenu::class, 'index_main'])->name('main');
// Route::get('/Menu/drinks', [clientMenu::class, 'index_drinks'])->name('drinks');
// Route::get('/Menu/desserts', [clientMenu::class, 'index_desserts'])->name('desserts');


Route::post('/cmi/callback', [CheckoutController::class, 'callback'])->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class); //notez que vous pouvez utiliser le chemin que vous voulez, mais vous devez utiliser la méthode de rappel (callback) implémentée dans la trait CmiGateway
Route::post('/cmi/okUrl', [CheckoutController::class, 'okUrl'])->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);// dans la trait CmiGateway, cette méthode est vide pour que vous puissiez implémenter votre propre processus après un paiement réussi
Route::post('/cmi/failUrl', [CheckoutController::class, 'failUrl'])->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);// la fail url redirigera l'utilisateur vers shopUrl avec une erreur pour que l'utilisateur puisse essayer de payer à nouveau
Route::get('/url-of-checkout', [CheckoutController::class, 'yourMethod']);// Par exemple, c'est la route où l'utilisateur cliquera sur "Payer maintenant. "( Nous recommandons de l'utiliser comme shopUrl, afin de pouvoir rediriger l'utilisateur en cas d'échec du paiement)


// Route::get('payment', [PayPalController::class, 'payment'])->name('payment');
Route::get('payment', [CheckoutController::class, 'store'])->name('payment');
Route::get('cancel', [PayPalController::class, 'cancel'])->name('payment.cancel');
Route::get('payment/success', [PayPalController::class, 'success'])->name('payment.success');



Route::get('/politique-de-confidentialite', function(){
    return view('client.politique');
})->name('politique');
Route::get('/condition-utilisation', function(){
    return view('client.condition-utilisation');
})->name('Cutilisation');



Route::get('/Menu/Standard-Drinks', [clientMenu::class, 'index'])->name('standard-drinks');
Route::get('/Menu/Sucre', [clientMenu::class, 'index_sucre'])->name('sucre');
Route::get('/Menu/Sale', [clientMenu::class, 'index_sale'])->name('sale');
Route::get('/Menu/Dessert', [clientMenu::class, 'index_dessert'])->name('Dessert');
Route::get('/Menu/Sandwich', [clientMenu::class, 'index_sandwich'])->name('sandwich');
Route::get('/Menu/Gdrinks', [clientMenu::class, 'index_Gdrinks'])->name('Gdrinks');
Route::get('/Menu/A-La-Carte', [clientMenu::class, 'index_Alacarte'])->name('Alacarte');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

// المسارات العامة لشقق
Route::get('/appartements', [AppartementController::class, 'index'])->name('appartement.index');
Route::get('/appartements/create', [AppartementController::class, 'create'])->name('appartement.create')->middleware('admin');
Route::post('/appartements/store', [AppartementController::class, 'store'])->name('appartement.store')->middleware('admin');
Route::get('/appartements/{id}/edit', [AppartementController::class, 'edit'])->name('appartement.edit')->middleware('admin');
Route::put('/appartements/{id}', [AppartementController::class, 'update'])->name('appartement.update')->middleware('admin');
Route::delete('/appartements/{id}', [AppartementController::class, 'destroy'])->name('appartement.destroy')->middleware('admin');

// المسارات الخاصة بعرض الشقق في لوحة الإدارة
Route::get('/admin/appartements', [AppartementController::class, 'adminRooms'])->name('admin.rooms.index')->middleware('admin');
Route::get('/appartement/admin', [AppartementController::class, 'appartementAdmin'])->name('appartement.admin')->middleware('admin');

// المسارات الإضافية للتحقق والعمليات الخاصة
Route::get('/appartement/validation', [AppartementController::class, 'validation'])->name('appartement.validation');

Route::post('/appartements/store', [AppartementController::class, 'store'])->name('appartements.store')->middleware('admin');

// المسارات المخصصة للتأكيد والعمليات الخاصة بالشقق
Route::get('/appartement/validation/{id}', [AppartementController::class, 'validation'])->name('appartement.validation');
Route::get('/appartement/validate/{id}', [AppartementController::class, 'validateAppartement'])->name('appartement.validate');
Route::post('/appartement/valid/{id}', [AppartementController::class, 'Validation2'])->name('appartement.appartementValid');
Route::get('/ApparetementIndex', [AppartementController::class, 'index'])->name('Apparetementindex');

Route::get('/menu/voirmenu', [MenuController::class, 'voirmenu'])->name('client.menu.voirmenu');
Route::prefix('admin/menu')->middleware('admin')->group(function () {

    // تصحيح التسمية

    // مسارات إضافية لإدارة إنشاء وتخزين PetitsDejeuners
    Route::get('create-petits-dejeuner', [MenuController::class, 'createPetitsDejeuner'])->name('admin.menu.create-petits-dejeuner');
    Route::post('store-petits-dejeuner', [MenuController::class, 'storePetitsDejeuner'])->name('admin.menu.store-petits-dejeuner');

    Route::get('petits-dejeuners', [MenuController::class, 'indexPetitsDejeuners'])->name('admin.menu.petits-dejeuners.index');
    Route::post('store-petit-dejeuners', [MenuController::class, 'storepetit-dejeuners'])->name('admin.menu.store-petit-dejeuners');
    Route::get('/petit-dejeuners', [MenuController::class, 'indexPetitsDejeuners'])->name('admin.menu.petit-dejeners.index');

    // إعادة تعريف المسار destroy يدوياdestroyPetitsDejeuner
    Route::delete('petits-dejeuners/{id}', [MenuController::class, 'destroyPetitsDejeuner'])->name('admin.menu.petits-dejeuners.destroy');

    // مسارات لإنشاء وتخزين Brunch
    Route::get('create-brunch', [MenuController::class, 'createBrunch'])->name('admin.menu.create-brunch');
    Route::post('store-brunch', [MenuController::class, 'storeBrunch'])->name('admin.menu.store-brunch');
    Route::delete('brunches/{id}', [MenuController::class, 'destroyBrunch'])->name('admin.menu.brunches.destroy');
    Route::get('/brunches', [MenuController::class, 'indexBrunches'])->name('admin.menu.brunches.index');

    // مسارات لإنشاء وتخزين Supplement
    Route::get('create-supplement', [MenuController::class, 'createSupplement'])->name('admin.menu.create-supplement');
    Route::post('store-supplement', [MenuController::class, 'storeSupplement'])->name('admin.menu.store-supplement');
    Route::delete('supplements/{id}', [MenuController::class, 'destroySupplement'])->name('admin.menu.supplements.destroy');
    Route::get('/supplements', [MenuController::class, 'indexSupplements'])->name('admin.menu.supplements.index');

    // إضافة مسار لعرض قائمة

});
Route::prefix('rooms')->name('rooms.')->group(function () {
    Route::get('/', [App\Http\Controllers\User\RoomController::class, 'index'])->name('index');
    Route::get('/{id}', [App\Http\Controllers\User\RoomController::class, 'show'])->name('show');
});


Route::middleware(['admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('rooms', RoomController::class);
});

Route::post('/room-reservations', [RoomReservationController::class, 'store'])->name('room-reservations.store');
Route::get('/rooms/{id}/reserve', [RoomReservationController::class, 'create'])->name('rooms.reserve');



Route::get('/upload/{any}', function () {
    return abort(404);
})->where('any', '.*');

Route::get('/link', function () {
    Artisan::call('storage:link');
    return 'The storage link has been created successfully!';
});
