<?php

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

Route::get('/', function () {
    return view('welcome');
});

// // duong dan den form them department
// Route::get('department/create','DeparementController@create');

// // duong dan khi submit form them department
// Route::post('department/create','DeparementController@store');

// // danh sach department
// Route::get('department','DeparementController@index');

// hoc laravel 2/3
// Route::get('khoahoc',function() {
// 	return "khoahoc";
// });

// Route::get('mon-an/{name?}',function ($name = null){
// 	return $name;
// });

// Route::get('thongtin/{tuoi}/{ten}', function($tuoi, $ten){
// 	return "hi $ten $tuoi";
// }) ->where(['tuoi' => '[0-9]{2}', 'ten'=> '[a-zA-Z]+']);

// Route::get('test','WelcomeController@testAction');

// // tao dinh danh
// Route::get('ho-huu-thang',['as'=>'hht',function () {
// return "Hoof Huwux Thangw";
// }]);

// // schema builder
// Route::get('schema/create/depa',function () {
// 	Schema::create('department',function ($table){
// 		$table->increments('id');
// 		$table->string('name',100);
// 		$table->text('description')->nullable();
// 	});
// });

// Route::get('schema/create/empl',function () {
// 	Schema::create('employee',function ($table){
// 		$table->increments('id');
// 		$table->string('name',100);
// 		$table->text('description')->nullable();
// 		$table->integer('departmentId')->unsigned();
// 		$table->foreign('departmentId')->references('id')->on('department');
// 		$table->date('birthDate');
// 	});
// });

// // Query Builder
// Route::get('query/select-all',function (){
// 	$data = DB::table('department') -> get();
// 	echo "<pre>";
// 	print_r($data);
// 	echo "</pre>";
// });

// Route::get('query/select-collum',function (){
// 	$data = DB::table('department') -> select('name') -> get();
// 	echo "<pre>";
// 	print_r($data);
// 	echo "</pre>";
// });

// Route::get('query/select-collum-where',function (){
// 	$data = DB::table('department') -> select('name') -> where('name','PM') -> get();
// 	echo "<pre>";
// 	print_r($data);
// 	echo "</pre>";
// });

// Route::get('query/order',function (){
// 	$data = DB::table('employee') -> orderBy('id','DESC') -> get();
// 	echo "<pre>";
// 	print_r($data);
// 	echo "</pre>";
// });

// // skip bắt đầu từ phần tử thứ 2 và take là lấy 2 phần tử
// Route::get('query/limit',function (){
// 	$data = DB::table('employee') -> skip(2) -> take(2) -> get();
// 	echo "<pre>";
// 	print_r($data);
// 	echo "</pre>";
// });

// // join 2 bang
// Route::get('query/join',function (){
// 	$data = DB::table('employee_new') -> join('department_new','employee_new.departmentId','department_new.id') -> select('department_new.*','employee_new.name','employee_new.birthDate') -> get();
// 	echo "<pre>";
// 	print_r($data);
// 	echo "</pre>";
// });

// // lay du lieu tu model
// Route::get('model/select-employee', function (){
// 	$data = App\Employee::all()->toArray();
// 	echo "<pre>";
// 	print_r($data);
// 	echo "</pre>";
// });

// Route::get('model/select-employee1', function (){
// 	$data = App\Employee::findOrFail(1)->toArray();
// 	echo "<pre>";
// 	print_r($data);
// 	echo "</pre>";
// });

// Route::get('model/select-employee2', function (){
// 	$data = App\Employee::where('id','>',2)->get()->toArray();
// 	echo "<pre>";
// 	print_r($data);
// 	echo "</pre>";
// });

// Route::get('relation/one-many-1',function (){
// 	$data = App\Department::find(1)->employees()->get()->toArray();
// 	echo "<pre>";
// 	print_r($data);
// 	echo "</pre>";
// });

// Route::get('relation/one-many-2',function (){
// 	$data = App\Employee::find(2)->department()->get()->toArray();
// 	echo "<pre>";
// 	print_r($data);
// 	echo "</pre>";
// });

// //form layout
// Route::get('form/layout', function (){
// 	return view('form.layout');
// });

// Route::post('form/data',['as'=>'sendEmail',function (){
// 	return "OK";
// }]);

// ////
// Route::get('form/add-department', function (){
// 	return view('form.addDepartment');
// });

// Route::post('form/add-department-p',['as'=>'postAdd','uses'=> 'DeparementController@create']);
// Route::any('{all?}','WelcomeController@testAction')->where('all','(.*)');

// test view
Route::get('test-layout', function () {
	return view('admin.department.add');
});

Route::group(['prefix'=>'admin'],function () {
	Route::group(['prefix'=>'depa'],function (){
		Route::get('list',['as'=>'admin.depa.getList','uses'=>'DeparementController@getList']);
		Route::get('add',['as'=>'admin.depa.getAdd','uses'=>'DeparementController@getAdd']);
		Route::post('add',['as'=>'admin.depa.postAdd','uses'=>'DeparementController@postAdd']);
		Route::get('edit/{id}',['as'=>'admin.depa.getEdit','uses'=>'DeparementController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.depa.postEdit','uses'=>'DeparementController@postEdit']);
		Route::get('delete/{id}',['as'=>'admin.depa.getDelete','uses'=>'DeparementController@getDelete']);
	});
});

Route::group(['prefix'=>'admin'],function () {
	Route::group(['prefix'=>'empl'],function (){
		Route::get('list',['as'=>'admin.empl.getList','uses'=>'EmployeeController@getList']);
		Route::get('add',['as'=>'admin.empl.getAdd','uses'=>'EmployeeController@getAdd']);
		Route::post('add',['as'=>'admin.empl.postAdd','uses'=>'EmployeeController@postAdd']);
		Route::get('edit/{id}',['as'=>'admin.empl.getEdit','uses'=>'EmployeeController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.empl.postEdit','uses'=>'EmployeeController@postEdit']);
		Route::get('delete/{id}',['as'=>'admin.empl.getDelete','uses'=>'EmployeeController@getDelete']);
	});
});