<?php

Route::group(['middleware' => ['web']], function () {

Route::get('/CustomLoginPage',function(){
    return view('loginwithmetamsk::CustomLoginPage');
}) ;
Route::get('/JsPlugin',[Ibrah3m\LoginWithMetamsk\MetamaskControrller::class,'JsScript'])->name('metamask.plugin') ;
Route::post('/Nonce',[Ibrah3m\LoginWithMetamsk\MetamaskControrller::class,'Nonce'])->name('metamask.nonce');
Route::post('/SignatureVerification',[Ibrah3m\LoginWithMetamsk\MetamaskControrller::class,'SignatureVerification'])->name('metamask.signature');
});