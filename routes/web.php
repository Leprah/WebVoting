<?php

use Illuminate\Support\Facades\Route;

// Auth
Auth::routes();

Route::get('/', 'HomeController@index')->name('auth.login');

// Admin
Route::get('/webVote/index', 'WebVoteController@index')->middleware('level:admin')->name('webVote.index');

Route::get('/webVote/dataKandidat', 'WebVoteController@dataKandidat')->name('webVote.dataKandidat');

Route::get('/webVote/dataPemilih', 'WebVoteController@dataPemilih')->name('webVote.dataPemilih');

Route::get('/webVote/pengaturan', 'WebVoteController@pengaturan')->name('webVote.pengaturan');

Route::get('/webVote/statistik', 'WebVoteController@statistik')->name('webVote.statistik');

Route::get('/webVote/master', 'WebVoteController@master')->name('webVote.master');

Route::get('/webVote/laporan', 'WebVoteController@laporan')->name('webVote.laporan');

// kandidat route
Route::get('/kandidat/create', 'KandidatController@create')->name('kandidat.create');

Route::post('/kandidat/store', 'KandidatController@store')->name('kandidat.store');

Route::post('/kandidat/update/{id}', 'KandidatController@update')->name('kandidat.update');

Route::get('/kandidat/edit/{id}', 'KandidatController@edit')->name('kandidat.edit');

Route::get('/kandidat/delete/{id}', 'KandidatController@destroy')->name('kandidat.destroy');

// Voter
Route::get('/voter/vote', 'WebVoteController@voter')->middleware('level:voter')->name('voter.vote');

<<<<<<< HEAD



=======
Route::get('/voter/voting/{id}', 'PemilihController@voting')->middleware('level:voter')->name('voter.voting');
>>>>>>> 757352c5fb6fa70e0d9f09ca97fe302ec6b88888
