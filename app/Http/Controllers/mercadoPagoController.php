<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use MP;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;



class mercadoPagoController extends Controller
{
    public function createPreferencePayment()
    {
    \MercadoPago\SDK::setAccessToken('TEST-4741705164024221-102222-c082f40bb2a3c5f53ff35e01f9b82326-15015244');

    // Crea un objeto de preferencia
    $preference = new \MercadoPago\Preference();

    // Crea un ítem en la preferencia
    $item = new \MercadoPago\Item();
    $item->title = 'Mi producto';
    $item->quantity = 1;
    $item->unit_price = 75.56;
    $preference->items = array($item);
    $preference->notification_url = '';
    $preference->back_urls = array(
    "success" => URL('/succes'),
    );
    $preference->auto_return = "approved";

    $preference->save();

    return redirect($preference->init_point);
  }
  public function succes(Request $req){
    $id=auth()->user()->id;
    $user=User::find($id);
    $user->transaction_id=$req['collection_id'];
    $user->collection_status=$req['collection_status'];
    $user->merchant_order_id=$req['merchant_order_id'];
    $user->preference_id=$req['preference_id'];
    $user->save();
    $info=$req->request;

    return view('/succes');


  }

}
