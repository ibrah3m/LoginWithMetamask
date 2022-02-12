<?php

namespace ibrah3m\loginwithmetamsk;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Elliptic\EC;
use kornrunner\Keccak;
use Ibrah3m\LoginWithMetamsk\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;

class MetamaskControrller extends Controller
{
    //

public function JsScript(){

    return response()->view('loginwithmetamsk::FrontJsHook')
    ->header('Content-Type', 'application/javascript');

    
}
public function nonce(Request $request){

    $user=User::firstOrCreate([
        'public_address' =>$request->public_address
    ]); 
    return response()->json([
        'nonce' => $user->nonce,
     
    ]);

}    


private function EllipticCurveVerifySignature($message, $signature, $address) {

    $msglen = strlen($message);
    $hash   = Keccak::hash("\x19Ethereum Signed Message:\n{$msglen}{$message}", 256);
    $sign   = ["r" => substr($signature, 2, 64),
        "s" => substr($signature, 66, 64)];
    $recid  = ord(hex2bin(substr($signature, 130, 2))) - 27;
    if ($recid != ($recid & 1))
        return false;

    $ec = new EC('secp256k1');
    $pubkey = $ec->recoverPubKey($hash, $sign, $recid);
    $pubKeyToAddress="0x" . substr(Keccak::hash(substr(hex2bin($pubkey->encode("hex")), 1), 256), 24);
    return  strtolower($address) == strtolower($pubKeyToAddress) ;


}


public function SignatureVerification(Request $request){
    if($this->EllipticCurveVerifySignature($request->message, $request->signature, $request->public_address) ){
        $user =User::where(
            'public_address',$request->public_address
        )->first();
        $user->Renonce();
        Auth::login($user);
 

        return response()->json([
            'success' => true, 
        ]);

    }
}

}
