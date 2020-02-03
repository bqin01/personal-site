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
    $jsonsubpages = file_get_contents('../data/subpages.json');
    $subpages = json_decode($jsonsubpages,true);
    return view('index', ['curpage' => 'Homepage', 'subpages' => $subpages]);
});
Route::get('/about', function () {
    $jsonsubpages = file_get_contents('../data/subpages.json');
    $subpages = json_decode($jsonsubpages,true);
    return view('about', ['curpage' => 'About', 'subpages' => $subpages]);
});
Route::get('/experience', function () {
    $jsonsubpages = file_get_contents('../data/subpages.json');
    $subpages = json_decode($jsonsubpages,true);
    $jsonexperiences = file_get_contents('../data/experience.json');
    $experiences = json_decode($jsonexperiences,true);
    return view('experience', ['curpage' => 'Experience', 'subpages' => $subpages, 'experiences' => $experiences]);
});
Route::get('/projects', function () {
    $jsonsubpages = file_get_contents('../data/subpages.json');
    $subpages = json_decode($jsonsubpages,true);
    $jsonprojects = file_get_contents('../data/projects.json');
    $projects = json_decode($jsonprojects,true);
    return view('projects', ['curpage' => 'Projects', 'subpages' => $subpages, 'projects' => $projects]);
});
Route::get('/contact', function () {
    $jsonsubpages = file_get_contents('../data/subpages.json');
    $subpages = json_decode($jsonsubpages,true);
    return view('contact', ['curpage' => 'Contact', 'subpages' => $subpages]);
});
Route::get('/resume.pdf', function(){
    return response()->file('./files/resume.pdf'); 
});
Route::get('/{other}', function () {
    $jsonsubpages = file_get_contents('../data/subpages.json');
    $subpages = json_decode($jsonsubpages,true);
    return view('page404', ['curpage' => '404', 'subpages' => $subpages]);
});
