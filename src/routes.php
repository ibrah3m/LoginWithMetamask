<?php


Route::get('/CustomLoginPage',function(){
    return view('loginwithmetamsk::CustomLoginPage');
}) ;
Route::get('/JsPlugin',[ibrah3m\loginwithmetamsk\MetamaskControrller::class,'JsScript'])->name('metamask.plugin') ;
Route::post('/Nonce',[ibrah3m\loginwithmetamsk\MetamaskControrller::class,'Nonce'])->name('metamask.nonce');
Route::post('/SignatureVerification',[ibrah3m\loginwithmetamsk\MetamaskControrller::class,'SignatureVerification'])->name('metamask.signature');
