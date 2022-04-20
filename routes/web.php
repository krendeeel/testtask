<?php

use Illuminate\Http\Request;


Route::get('/', function () {
    return redirect('/news?page=1');
});

Route::get('/news', function (Request $request) {
    $news = App\News::orderBy('idate', 'DESC')->paginate(4);
    $currentPage = $request->input('page');
    return view('news', compact('news', 'currentPage'));
});

Route::get('/view', function (Request $request) {
    $id = $request->input('id');
    $oneNews = App\News::find($id);
    return view('view', compact('oneNews'));
});
