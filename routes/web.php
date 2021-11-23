<?php

use Illuminate\Support\Facades\Route;

// Auth
Auth::routes();

// Admin
Route::get('/', 'HomeController@index')->name('home');

Route::get('/webVote/index', 'WebVoteController@index')->name('webVote.index');

Route::get('/webVote/dataKandidat', 'WebVoteController@dataKandidat')->name('webVote.dataKandidat');

Route::get('/webVote/dataPemilih', 'WebVoteController@dataPemilih')->name('webVote.dataPemilih');

Route::get('/webVote/laporan', 'WebVoteController@laporan')->name('webVote.laporan');

Route::get('/webVote/statistik', 'WebVoteController@statistik')->name('webVote.statistik');

Route::get('/webVote/master', 'WebVoteController@master')->name('webVote.master');

Route::get('/pemilih/create', 'PemilihController@create')->name('pemilih.create');

Route::get('/pemilih/destroy/{id}', 'PemilihController@destroy')->name('pemilih.destroy');

Route::get('/kandidat/create', 'KandidatController@create')->name('kandidat.create');

// Voter

Route::get('/voter/vote', 'WebVoteController@voter')->name('voter.vote');