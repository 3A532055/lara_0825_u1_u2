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
    //return view('welcome');
    //\App\Post::create([
     //   'title'=>'test title',

      //  'content'=>'test content',
    //]);


    //$post =new\App\Post();
    //$post -> title='test title';
    //$post -> content='test content';
    //$post -> save();

    //$posts = \App\Post::all();  //all方法
    //dd($posts);

    //$post=\App\Post::find(1);   //find方法
    //dd($post);

    //$posts =\App\Post::where('id','<',10)->orderBy('id','DESC')->get();
    //dd($posts);   //條件式

    //$post=\App\Post::find(1);     //update方法
    //$post->update([
    //    'title'=>'updated title',
    //    'content'=>'updated content',
    //]);

    //$post=\App\Post::find(2);      //save方法
    //$post->title='saved title';
    //$post->content='saved content';
    //$post->save();

    //$post =\App\Post::find(3);        //delete方法
    //$post ->delete();

    \App\Post::destroy(4);     //destroy方法


});
