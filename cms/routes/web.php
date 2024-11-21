<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OriginalViewController;
use App\Http\Controllers\OriginalAuthController;
use App\Http\Controllers\FurnitureGoodController;
use App\Http\Controllers\EatDrinkController;
use App\Http\Controllers\EatDrinkUpdateController;
use App\Http\Controllers\FoodBeverageController;
use App\Http\Controllers\FoodBeverageDetailController;
use App\Http\Controllers\FoodBeverageUpdateController;
use App\Http\Controllers\FashionableController;
use App\Http\Controllers\FashionableDetailController;
use App\Http\Controllers\FashionableUpdateController;
use App\Http\Controllers\LifestyleController;
use App\Http\Controllers\LifestyleDetailController;
use App\Http\Controllers\LifestyleUpdateController;
use App\Http\Controllers\BeautyController;
use App\Http\Controllers\BeautyDetailController;
use App\Http\Controllers\BeautyUpdateController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\HobbyDetailController;
use App\Http\Controllers\HobbyUpdateController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\MedicalDetailController;
use App\Http\Controllers\MedicalUpdateController;
use App\Http\Controllers\AllController;
use App\Http\Controllers\ShopDetailController;
use App\Http\Controllers\ShopUpdateController;
use App\Http\Controllers\ShopCategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//ホーム画面のURL{/}にアクセスするとtop画面を表示する
Route::get('/', function () {
    return view('shoplisttop');

});

Route::get('/home', [HomeController::class, 'index']);


//ログイン画面遷移
Route::get('/login2', function () {
    return view('login2');
});

//ホーム画面からログイン画面に遷移するときログイン情報を保存
Route::post('/login2', [OriginalAuthController::class, 'login2'])->name('login2');
Auth::routes();

//ログイン画面からホーム画面に遷移する
Route::get('/shoplisttop', [AllController::class, 'shoplisttopview']);


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//店舗一覧の「すべて」ボタンから店舗すべての一覧画面に遷移する
 Route::get('/',[AllController::class, 'shoplisttopview']);
 
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ 




//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//店舗一覧の「すべて」ボタンから店舗すべての一覧画面に遷移する
 Route::get('/alls',[AllController::class, 'allview']);
 
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■ 


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

//ホーム画面から「食べる・飲む」の店舗一覧に遷移する
Route::get('/furnituregoods', [AllController::class, 'eatdrinkview']);



//「食べる・飲む」店舗一覧の[新規登録]ボタンから「食べる・飲む」登録画面に遷移する
Route::get('/furnituregoodsCreate',[AllController::class, 'furnituregoodsCreate']);  

//「食べる・飲む」の店舗登録
Route::post('/shoplistStore',[AllController::class, 'shoplistStore']);

//店舗一覧画面から「食べる・飲む」の店舗詳細画面に遷移
Route::get('/eatdrink/{id}', [ShopDetailController::class, 'eatdrinkview']);

//店舗一覧画面から「食べる・飲む」の店舗更新画面に遷移
Route::get('/eatdrinkupdate/{id}', [ShopUpdateController::class, 'eatdrinkview']);

//店舗一覧画面から「食べる・飲む」の店舗更新画面処理
Route::post('/eatdrinkupdate/add/{id}', [ShopUpdateController::class, 'shoplistupdate']);

//店舗一覧食べる・飲む」～「医療・健康」画面から店舗削除
Route::post('/shoplistdelete/{id}',  [ShopUpdateController::class, 'shoplistdelete']);

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//店舗一覧の「食料品・飲料」ボタンから食料品・飲料一覧画面に遷移する
Route::get('/foodbeverages', [AllController::class, 'foodbeverageview']);

//「食料品・飲料」店舗一覧の[新規登録]ボタンから「食料品・飲料」登録画面に遷移する

Route::get('/foodbeveragesCreate',[ALLController::class, 'foodbeveragesCreate']);  

//「食料品・飲料」の店舗登録
Route::post('/foodbeveragesStore',[ALLController::class, 'foodbeveragesStore']);

//「食料品・飲料」の店舗一覧画面から「食料品・飲料」の店舗詳細画面に遷移
Route::get('/foodbeveragesdetail/{id}', [ShopDetailController::class, 'foodbeverageview']);

//店舗一覧画面から「食料品・飲料」の店舗更新画面に遷移
Route::get('/foodbeverageupdate/{id}', [ShopUpdateController::class, 'foodbeverageview']);

//店舗一覧画面から「食料品・飲料」の店舗更新画面処理
Route::post('/foodbeverageupdate/add/{id}', [ShopUpdateController::class, 'shoplistupdate']);



//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■



//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//ホーム画面から「おしゃれ」の店舗一覧に遷移する
Route::get('/fashionables', [AllController::class, 'fashionableview']);


//「おしゃれ」店舗一覧の[新規登録]ボタンから「おしゃれ」登録画面に遷移する
Route::get('/fashionablesCreate',[AllController::class, 'fashionablesCreate']);  

//「おしゃれ」の店舗登録
Route::post('/fashionablesStore',[AllController::class, 'fashionablesStore']);

//「おしゃれ」の店舗一覧画面から「おしゃれ」の店舗詳細画面に遷移
Route::get('/fashionabledetail/{id}', [ShopDetailController::class, 'fashionableview']);

//店舗一覧画面から「おしゃれ」の店舗更新画面に遷移
Route::get('/fashionableupdate/{id}', [ShopUpdateController::class, 'fashionableview']);

//店舗一覧画面から「おしゃれ」の店舗更新画面処理
Route::post('/fashionableupdate/add/{id}', [ShopUpdateController::class, 'shoplistupdate']);

//店舗一覧画面から「おしゃれ」の店舗削除
Route::post('/fashionabledelete/{id}',  [ShopUpdateController::class, 'shoplistdelete']);
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■



//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//ホーム画面から「暮らし」の店舗一覧に遷移する
Route::get('/lifestyles', [ALLController::class, 'lifestyleview']);

//「暮らし」店舗一覧の[新規登録]ボタンから「暮らし」登録画面に遷移する
Route::get('/lifestylesCreate',[ALLController::class, 'lifestylesCreate']);  

//「暮らし」の店舗登録
Route::post('/lifestylesStore',[AllController::class, 'lifestylesStore']);

//「暮らし」の店舗一覧画面から「暮らし」の店舗詳細画面に遷移
Route::get('/lifestyledetail/{id}', [ShopDetailController::class, 'lifestyleview']);

//店舗一覧画面から「暮らし」の店舗更新画面に遷移
Route::get('/lifestyleupdate/{id}', [ShopUpdateController::class, 'lifestyleview']);

//店舗一覧画面から「暮らし」の店舗更新画面処理
Route::post('/lifestyleupdate/add/{id}', [ShopUpdateController::class, 'shoplistupdate']);

//店舗一覧画面から「暮らし」の店舗削除
Route::post('/lifestyledelete/{id}',  [ShopUpdateController::class, 'shoplistdelete']);
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■




//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//ホーム画面から「美容・理容・エステ」の店舗一覧に遷移する
Route::get('/beauties', [AllController::class, 'beautyview']);

//「美容・理容・エステ」店舗一覧の[新規登録]ボタンから「美容・理容・エステ」登録画面に遷移する
Route::get('/beautiesCreate',[AllController::class, 'beautiesCreate']);  

//「美容・理容・エステ」の店舗登録
Route::post('/beautiesStore',[AllController::class, 'beautiesStore']);

//「美容・理容・エステ」の店舗一覧画面から「美容・理容・エステ」の店舗詳細画面に遷移
Route::get('/beautydetail/{id}', [ShopDetailController::class, 'beautyview']);

//店舗一覧画面から「美容・理容・エステ」の店舗更新画面に遷移
Route::get('/beautyupdate/{id}', [ShopUpdateController::class, 'beautyview']);

//店舗一覧画面から「美容・理容・エステ」の店舗更新画面処理
Route::post('/beautyupdate/add/{id}', [ShopUpdateController::class, 'shoplistupdate']);

//店舗一覧画面から「美容・理容・エステ」の店舗削除
Route::post('/beautydelete/{id}',  [ShopUpdateController::class, 'shoplistdelete']);
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■




//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//ホーム画面から「趣味・レジャー」の店舗一覧に遷移する
Route::get('/hobbys', [ALLController::class, 'hobbyview']);

//「趣味・レジャー」店舗一覧の[新規登録]ボタンから「趣味・レジャー」登録画面に遷移する
Route::get('/hobbysCreate',[ALLController::class, 'hobbysCreate']);  

//「趣味・レジャー」の店舗登録
Route::post('/hobbysStore',[AllController::class, 'hobbysStore']);

//「趣味・レジャー」の店舗一覧画面から「趣味・レジャー」の店舗詳細画面に遷移
Route::get('/hobbydetail/{id}', [ShopDetailController::class, 'hobbyview']);

//店舗一覧画面から「趣味・レジャー」の店舗更新画面に遷移
Route::get('/hobbyupdate/{id}', [ShopUpdateController::class, 'hobbyview']);

//店舗一覧画面から「趣味・レジャー」の店舗更新画面処理
Route::post('/hobbyupdate/add/{id}', [ShopUpdateController::class, 'shoplistupdate']);

//店舗一覧画面から「趣味・レジャー」の店舗削除
Route::post('/hobbydelete/{id}',  [ShopUpdateController::class, 'shoplistdelete']);
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■




//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//ホーム画面から「医療・健康」の店舗一覧に遷移する
Route::get('/medicals', [ALLController::class, 'medicalview']);

//「医療・健康」店舗一覧の[新規登録]ボタンから「医療・健康」登録画面に遷移する
Route::get('/medicalsCreate',[ALLController::class, 'medicalsCreate']);  

//「医療・健康」の店舗登録
Route::post('/medicalsStore',[ALLController::class, 'medicalsStore']);

//「医療・健康」の店舗一覧画面から「医療・健康」の店舗詳細画面に遷移
Route::get('/medicaldetail/{id}', [ShopDetailController::class, 'medicalview']);

//店舗一覧画面から「医療・健康」の店舗更新画面に遷移
Route::get('/medicalupdate/{id}', [ShopUpdateController::class, 'medicalview']);

//店舗一覧画面から「医療・健康」の店舗更新画面処理
Route::post('/medicalupdate/add/{id}', [ShopUpdateController::class, 'shoplistupdate']);

//店舗一覧画面から「医療・健康」の店舗削除
Route::post('/medicaldelete/{id}',  [ShopUpdateController::class, 'shoplistdelete']);
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//商店街トップサイト画面から立花商店街サイトに遷移する
Route::get('/tachibanacollege', [HomeController::class, 'tachibanacollege']);