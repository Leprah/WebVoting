<?php

use Illuminate\Support\Facades\Route;

// Auth
Auth::routes();

// Admin
Route::get('/', 'HomeController@index')->name('auth.login');

// Route::get('/webVote/index', 'WebVoteController@index')->name('webVote.index');

Route::get('/webVote/index', 'WebVoteController@index')->middleware('level:admin')->name('webVote.index');

Route::get('/webVote/dataKandidat', 'WebVoteController@dataKandidat')->name('webVote.dataKandidat');

Route::get('/webVote/dataPemilih', 'WebVoteController@dataPemilih')->name('webVote.dataPemilih');

Route::get('/webVote/pengaturan', 'WebVoteController@pengaturan')->name('webVote.pengaturan');

Route::get('/webVote/statistik', 'WebVoteController@statistik')->name('webVote.statistik');

Route::get('/webVote/master', 'WebVoteController@master')->name('webVote.master');

Route::get('/webVote/laporan', 'WebVoteController@laporan')->name('webVote.laporan');

// pemilih
Route::get('/pemilih/create', 'PemilihController@create')->name('pemilih.create');

Route::get('/pemilih/destroy/{id}', 'PemilihController@destroy')->name('pemilih.destroy');

// kandidat route
Route::get('/kandidat/create', 'KandidatController@create')->name('kandidat.create');

Route::post('/kandidat/store', 'KandidatController@store')->name('kandidat.store');

Route::post('/kandidat/update/{id}', 'KandidatController@update')->name('kandidat.update');

Route::get('/kandidat/edit/{id}', 'KandidatController@edit')->name('kandidat.edit');

Route::get('/kandidat/delete/{id}', 'KandidatController@destroy')->name('kandidat.destroy');

// Voter
Route::get('/voter/vote', 'WebVoteController@voter')->middleware('level:voter')->name('voter.vote');

Route::get('/voter/visi/{id}', 'WebVoteController@visi');
