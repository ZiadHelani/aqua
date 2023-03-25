<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
// Home Page
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/header_image', [HomeController::class, 'headerImage'])->name('header_image');
Route::get('/edit_header_image/{id}', [HomeController::class, 'editHeaderImage'])->name('edit_header_image');
Route::post('/save_header_image/{id}', [HomeController::class, 'saveHeaderImage'])->name('save_header_image');
Route::get('/about_us_images', [HomeController::class, 'aboutUsImages'])->name('about_us_images');
Route::get('/edit_about_us_images/{id}', [HomeController::class, 'editAboutUsImages'])->name('edit_about_us_images');
Route::post('/save_about_us_images/{id}', [HomeController::class, 'saveAboutUsImages'])->name('save_about_us_images');
Route::get('/delete_about_us_images/{id}', [HomeController::class, 'deleteAboutUsImages'])->name('delete_about_us_images');
Route::get('/nearby_store', [HomeController::class, 'nearbyStore'])->name('nearby_store');
Route::post('/save_nearby_store/{id}', [HomeController::class, 'saveNearbyStore'])->name('save_nearby_store');
Route::get('/about_us', [HomeController::class, 'aboutUs'])->name('about_us');
Route::post('/save_about_us/{id}', [HomeController::class, 'saveAboutUs'])->name('save_about_us');
Route::get('/our_products', [HomeController::class, 'ourProducts'])->name('our_products');
Route::post('/save_our_products/{id}', [HomeController::class, 'saveOurProducts'])->name('save_our_products');
Route::get('/product_images', [HomeController::class, 'productImages'])->name('product_images');
Route::post('/save_product_images', [HomeController::class, 'saveProductImages'])->name('save_product_images');
Route::get('/delete_product_images/{id}', [HomeController::class, 'deleteProductImages'])->name('delete_product_images');
Route::get('/edit_product_images/{id}', [HomeController::class, 'editProductImages'])->name('edit_product_images');
Route::post('/update_product_image/{id}', [HomeController::class, 'updateProductImages'])->name('update_product_images');
Route::get('/our_mission', [HomeController::class, 'ourMission'])->name('our_mission');
Route::post('/save_out_mission/{id}', [HomeController::class, 'saveOurMission'])->name('save_our_mission');
Route::get('/our_vision', [HomeController::class, 'ourVision'])->name('our_vision');
Route::post('/save_our_vision/{id}', [HomeController::class, 'saveOurVision'])->name('save_our_vision');
Route::get('/app_details', [HomeController::class, 'appDetails'])->name('app_details');
Route::post('/save_app_details/{id}', [HomeController::class, 'saveAppDetails'])->name('save_app_details');
Route::get('/our_client', [HomeController::class, 'ourClient'])->name('our_client');
Route::post('/save_our_client', [HomeController::class, 'saveOurClient'])->name('save_our_client');
Route::get('/edit_our_client/{id}', [HomeController::class, 'editOurClient'])->name('edit_our_client');
Route::post('/update_our_client/{id}', [HomeController::class, 'updateOurClient'])->name('update_our_client');
Route::get('/delete_our_client/{id}', [HomeController::class, 'deleteOurClient'])->name('delete_our_client');
Route::post('/update_about_our_clients/{id}', [HomeController::class, 'updateOurClients'])->name('update_about_our_clients');
// End Home Page

//About Us Page
Route::get('/header_about_us', [AboutUsController::class, 'headerAboutUs'])->name('header_about_us');
Route::post('/save_header_about_us/{id}', [AboutUsController::class, 'saveHeaderAboutUs'])->name('save_header_about_us');
Route::get('/header_image_about_us', [AboutUsController::class, 'headerImageAboutUs'])->name('header_image_about_us');
Route::post('/save_header_image_about_us/{id}', [AboutUsController::class, 'saveHeaderImageAboutUs'])->name('save_header_image_about_us');
//End About Us Page

// Applications Page
Route::get('/header_image_applications', [ApplicationsController::class, 'headerImageApplications'])->name('header_image_applications');
Route::post('/save_header_image_applications/{id}', [ApplicationsController::class, 'saveHeaderImageApplications'])->name('save_header_image_applications');
Route::get('/header_details_applications', [ApplicationsController::class, 'headerDetailsApplications'])->name('header_details_applications');
Route::post('/save_header_details_applications/{id}', [ApplicationsController::class, 'saveHeaderDetailsApplications'])->name('save_header_details_applications');
Route::get('/applications', [ApplicationsController::class, 'Applications'])->name('applications');
Route::post('/save_applications', [ApplicationsController::class, 'saveApplications'])->name('save_applications');
Route::get('/applications_lang/{id}', [ApplicationsController::class, 'applicationsLang'])->name('applications_lang');
Route::get('/edit_applications_lang/{id}', [ApplicationsController::class, 'editApplicationsLang'])->name('edit_applications_lang');
Route::post('/update_applications_lang/{id}', [ApplicationsController::class, 'updateApplicationsLang'])->name('update_applications_lang');
// end Applications Page

// Products Page
Route::get('/categories_header_image', [ProductsController::class, 'categoriesHeaderImage'])->name('categories_header_image');
Route::post('/save_categories_header_image/{id}', [ProductsController::class, 'saveCategoriesHeaderImage'])->name('save_categories_header_image');
Route::get('/categories', [ProductsController::class, 'categories'])->name('categories');
Route::post('/save_categories', [ProductsController::class, 'saveCategories'])->name('save_categories');
Route::get('/edit_categories_lang/{id}', [ProductsController::class, 'editCategoriesLang'])->name('edit_categories_lang');
Route::get('/edit_categories/{id}', [ProductsController::class, 'editCategories'])->name('edit_categories');
Route::post('/update_categories/{id}', [ProductsController::class, 'updateCategories'])->name('update_categories');
Route::get('/delete_categories/{id}', [ProductsController::class, 'deleteCategories'])->name('delete_categories');
Route::get('/products', [ProductsController::class, 'products'])->name('products');
Route::post('/save_product', [ProductsController::class, 'saveProducts'])->name('save_products');
Route::get('/edit_products_lang/{id}', [ProductsController::class, 'editProductsLang'])->name('edit_products_lang');
Route::get('/edit_products/{id}', [ProductsController::class, 'editProducts'])->name('edit_products');
Route::post('/update_products/{id}', [ProductsController::class, 'updateProducts'])->name('update_products');
Route::get('/delete_products/{id}', [ProductsController::class, 'deleteProducts'])->name('delete_products');
// End Products Page

// Contact Page
Route::get('/header_image_contact', [ContactController::class, 'headerImageContact'])->name('header_image_contact');
Route::post('/save_header_image_contact/{id}', [ContactController::class, 'saveHeaderImageContact'])->name('save_header_image_contact');
Route::get('/contact_info', [ContactController::class, 'contactInfo'])->name('contact_info');
Route::post('/save_contact_info/{id}', [ContactController::class, 'saveContactInfo'])->name('save_contact_info');
// end Contact Page

// Shop Page
Route::get('/shippings', [ShopController::class, 'shippings'])->name('shippings');
Route::post('/save_shippings', [ShopController::class, 'saveShippings'])->name('save_shippings');
Route::get('/edit_shippings/{id}', [ShopController::class, 'editShippings'])->name('edit_shippings');
Route::post('/update_shippings/{id}', [ShopController::class, 'updateShippings'])->name('update_shippings');
Route::get('/delete_shippings/{id}', [ShopController::class, 'deleteShippings'])->name('delete_shippings');
Route::get('/orders', [ShopController::class, 'orders'])->name('orders');
Route::get('/show_order/{id}', [ShopController::class, 'showOrder'])->name('show_order');
//end Shop Page



Route::middleware(['lang'])->group(function () {
    Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
    Route::get('/application', [WebsiteController::class, 'application'])->name('website.app');
    Route::get('/about-us', [WebsiteController::class, 'about_us'])->name('about-us');
    Route::get('/shop', [WebsiteController::class, 'shop'])->name('shop');
    Route::get('/contact-us', [WebsiteController::class, 'contact_us'])->name('contact-us');
    Route::get('/product/{product_id}', [WebsiteController::class, 'product'])->name('product');
    Route::post('/add_to_cart', [WebsiteController::class, 'addToCart'])->name('add_to_cart');
    Route::get('/cart', [WebsiteController::class, 'cart'])->name('cart');
    Route::get('/empty_cart', [WebsiteController::class, 'emptyCart'])->name('empty_cart');
    Route::post('/update_cart', [WebsiteController::class, 'updateCart'])->name('update_cart');
    Route::get('/checkout', [WebsiteController::class, 'checkout'])->name('checkout');
    Route::post('save_order', [WebsiteController::class, 'saveOrder'])->name('save_order');
    Route::get('/lang/{lang}', [WebsiteController::class, 'lang'])->name('website.lang');
});
