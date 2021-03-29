<?php

namespace App\Http\Controllers;

use App\Gift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GiftController extends Controller
{
    public function assignGift(Request  $request){
        $gift = Gift::find(request()->giftId);
        if(!$gift->assigned){
            $gift->assigned = true;
            $gift->attendant = request()->name;
            $gift->save();
        }
        return Redirect::back();
    }
}
