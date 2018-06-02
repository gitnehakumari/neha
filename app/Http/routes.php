<?php
use App\Pgs;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\post;
use App\User;
//use Illuminate\Support\Facades\DB;

//Route::get('/insert', function () {
    // return view('welcome');
    // return view('welcome');
  //  DB::insert('insert into posts(title,content)values(?,?)',['laravel is awsome with edwin', 'laravel is the best thing that happend to PHP,PERIOD']);
//});
   // Route::get('/insert', function (){
        // return view('welcome');
        // return view('welcome');
    //    DB::insert('insert into posts(name,email)values(?,?)', ['sweety','sweety15@gmail.com']);

//Route::resource('/posts','PostsController@index');

//Route::get('/posts/{$id}', 'PostsController@show_post');
//Route::get('user/{id}', 'UserController@show');
//Route::get('/findwhere',function() {
  //  $posts = Post::where('id', '2')->orderBy('id', 'des')->take(1)_ > get();
//    return $posts;
  //  });
//Route::get('/findmore',function(){

//$posts=Post::findOrFail(1);
//return $posts;
//$posts=Post::where('users_count','<',50)firstOrFail();

//})
//;


//Route::get('/contact', PostsController@contact);
    // return view('welcome');
  //  return "hi m here in service";



/*
|--------------------------------------------------------------------------
ELOQUENT Relationships
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
//Route::get('/user/{id}/post',function($id){


  //  return User::find($id)->post;


//}
//);














//Route::get('/read',function(){
  //  $posts=Post::all();
    //foreach($posts as $post){
      //  return $post->title;


    //    $posts = Post::where('id', '2')order by('id', 'des')->take(1)_ > get();
    //return $posts;

    //});

//Route::get('/findmore',function(){
  //  $posts=Post::findOrFail(1);
    //return $posts;
    //$posts=Post::where('users_count','<',50)firstOrFail();

//})


//});
//Route::get('/delete',function(){
  //  $deleted = DB::delete('delete from users where id=?',[2]);
    //return $deleted;

//Route::get('/update',function(){
  //  $updated=DB::update('update posts set title="updated title" where id=?',[1]);
    //return $updated;

//Route::get('/read',function(){
  // $results=DB::select('select *from posts where id=?',[1]);
  // $results
    //   foreach($results as $posts){
      // return $posts->content;
       //}
//
Route::get('delete_book/{id}', function ($id) {
   DB::delete("delete from book where id = $id");
      
return "success";
 // return view('welcome');
});

Route::get('/product_item', function () {

  
  $product_name =["tooth brush","second","third","fourth"];
  $price = ["$10","$23","$34","$50"];
  $i =0;
  
  while($i <= 3)
  {
  $neha[]= array(
    'product_name' => $product_name[$i],
    'price' => $price[$i]
     
 );
 $i++;

} 
 return $neha;
 //return view('welcome',$product_name);
});



Route::get('/createtable', function () {
  Schema::create('dk', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('last');
    $table->timestamps();
});
 
  return view('welcome');
});

Route::get('select/{table_name}', function ($table_name) {
 // $products = DB::select("select * from {$table_name} WHERE product_id= 1");
  $college_details = DB::select("select * from {$table_name}");
      foreach ($college_details as $college_detail) { 
        $usn = $college_detail->usn;    
        $id =    $college_detail->id;

       $neha[]= array(
        'id' => $id,
        'usn'=> $usn      
         );
    }
 return $neha;
 //return view('welcome');
});




Route::get('delete/{id}', function ($id) {
  DB::delete("delete from book where id= $id");
     
return "success";
// return view('welcome');
});




Route::get('insert/{insert}/{author}', function ($inset,$author) {
 // console.log("$author");
  DB::table('book')->insert(
    
    ['book_name'=> "$inset",'auther'=>"$author"]
    
       

); 
return "success";
});




Route::get('update/{update}/{id}', function ($update,$id) {
  DB::table('book')
  ->where('id', "$id")
  ->update(['book_name' => $update]);   
return "success";
// return view('welcome');
});

Route::get('/about/{id}',function($id)
{
  return "about is".$id;
});


Route::get('/createdtable', function () {
  Schema::create('paintings', function ($table) {
    $table->increments('id');
    $table->string('artist1');
    $table->string('title1',500);
    $table->date('created1');
    $table->date('exhibition_datej');
    $table->timestamps();
});
return view('welcome');
});

Route::get('/amit/{id}/{name}',function($id,$name) { 
  return view('welcome',["id" => $id],["name" => $name] );
});

Route::get('/testing',function(){
 /*
  $json1 = array(
   'username' => "amit",
   'bond' => "james bond"
  );
  return view('welcome',["colleges" => $json1]);
  
    $painting = new Pgs;
$painting->name = 'Do No Wrong';
$painting->last = 'D. DoRight';
$painting->save();
return "hi";
*/
$painting = Pgs::find(2);

return $painting->name;

});