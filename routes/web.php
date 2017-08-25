<?php
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// for home view
Route::get('/','FrontController@homeview');
Route::get('/blog/{id}','FrontController@Blogview');


// services route
Route::get('/service/add','ServiceController@Serviceview');

Route::get('service/add/{id?}','ServiceController@ServiceGet');

Route::post('/service/add','ServiceController@CreateService');

Route::post('service/add','ServiceController@ServiceCreate');  
    
Route::put('service/add/{id?}','ServiceController@ServicePut');

Route::delete('service/add/{id?}','ServiceController@ServiceDelete');



// Login Route
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware'=>'AuthenticateMidleware'],function(){

Route::get('/dashboard','AdminController@index' );

//logo
Route::get('/logo/add','LogoController@addLogo');
Route::post('/logo/save','LogoController@CreateLogo');
Route::get('/logo/logolist','LogoController@LogoList');
Route::get('/logo/edit/{id}','LogoController@LogoEdit');
Route::post('/logo/update','LogoController@Update');
Route::get('/logo/delete/{delid}','LogoController@Delete');


// Team Routes
Route::get('/team/add','TeamController@AddTeam');
Route::post('/team/save','TeamController@TeamCreate');
Route::get('/team/teamlist','TeamController@TeamList');
Route::get('/team/edit/{teamid}','TeamController@TeamEdit');
Route::post('/team/update','TeamController@Update');
Route::get('/team/delete/{delid}','TeamController@Delete');


// testimonials Route
Route::get('/testimonials/add','TestimonialController@AddTes');

Route::post('/testimonials/save','TestimonialController@TesCreate');

Route::get('/testimonials/testimonialslist','TestimonialController@TesList');

Route::get('/testimonials/edit/{tid}','TestimonialController@TesEdit');

Route::post('/testimonials/update','TestimonialController@Update');

Route::get('/testimonials/delete/{delid}','TestimonialController@Delete');

// Portfolio
Route::get('/Portfolio/add','PortfolioController@add');
Route::post('/Portfolio/create','PortfolioController@create');
Route::get('/Portfolio/all','PortfolioController@show');
Route::get('/Portfolio/edit/{id}', 'PortfolioController@edit');
Route::post('/Portfolio/update','PortfolioController@update');
Route::get('/Portfolio/delete/{id}','PortfolioController@delete');


// Contact
Route::get('/Contact/contactlist','ContactController@ContactList');

Route::get('contact-us',array('as'=>'getcontact','uses'=>'ContactController@getContact'));
Route::post('contact-us',array('as'=>'postcontact','uses'=>'ContactController@postContact'));



// User Route

// Route::get('/user/add','UserController@addUser');

// Pages Route
Route::get('/pages/add','AdminController@Addpage' );
Route::post('/pages/save','AdminController@CreatePage' );
Route::get('/pages/pagelist','AdminController@PagesList' );
Route::get('/pages/edit/{id}','AdminController@PagesEdit' );

Route::post('/pages/update','AdminController@PagesUpdate');
Route::get('/pages/delete/{id}','AdminController@PagesDelete');

//Category ajax Route
Route::get('category/categoryList','CategoryController@categoryList');

Route::get('category/categoryList/{id?}','CategoryController@categoryGet');

Route::post('category/categoryList','CategoryController@categoryCreate');  
    
Route::put('category/categoryList/{id?}','CategoryController@categoryPut');

Route::delete('category/categoryList/{id?}','CategoryController@categoryDelete');


//Post ajax Route
 
Route::get('post/postlist','PostController@PostList');

Route::get('post/postlist/{id?}','PostController@PostGet');

Route::post('post/postlist','PostController@PostCreate');  
    
Route::put('post/postlist/{id?}','PostController@PostPut');

Route::delete('post/postlist/{id?}','PostController@PostDelete');

// Custom Theme Route
Route::get('/layout/fixsidebar','CustomthemeController@fixSidebar');
Route::get('/layout/projects','CustomthemeController@projects');
Route::get('/layout/projectsdetails','CustomthemeController@projectsDetails');
Route::get('/layout/contacts','CustomthemeController@Contacts');
Route::get('/layout/profile','CustomthemeController@Profile');
Route::get('/layout/invoice','CustomthemeController@Invoice');
Route::get('/layout/inbox','CustomthemeController@Inbox');
Route::get('/layout/table','CustomthemeController@Table');

Route::get('/layout/sittings','CustomthemeController@Sittings');

});