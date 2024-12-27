<?php

namespace App\Http\Controllers;


use App\Models\Comnd;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use Gloudemans\Shoppingcart\Facades\Cart;
 
class PayPalController extends Controller
{
    
    public function payment()
    {
        $data = [];
 
        $data['items'] = [
            [
                'name' => 'Product 1',
                'price' => 100,
                'desc' => 'Description for Product 1',
                'qty' => 1
            ]
        ];
 
        $data['invoice_id'] = 1;
 
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
 
        $data['return_url'] = route('payment.success');
 
        $data['cancel_url'] = route('payment.cancel');
 
        $data['total'] = 100;
 
        $provider = new ExpressCheckout;
        $response = $provider->setExpressCheckout($data);
        $response = $provider->setExpressCheckout($data, true);
 
        return redirect($response['paypal_link']);
    }
 
    public function cancel()
    {
        dd('Your payment is canceled. You can create cancel page here.');
    }
 
    public function success(Request $request)
    {
        $provider = new ExpressCheckout;

        $response = $provider->getExpressCheckoutDetails($request->token);
 
        if (in_array(strtoupper($response['ACK']) , ['SUCCESS', 'SUCCESSWITHWARNING']))
        {
            // dd('Your payment was successfully. You can create success page here.');
            // dd(session('oid') );
            Comnd::where('oid', session('oid'))->update(array('state' => 'Payée'));
            $cartItems = Cart::destroy();
            session()->forget('oid');
            return redirect()->back()->with('cartItems' , $cartItems)->with('thanks', 'Votre commande sera livrée bientôt, merci.');

        }
         
        dd('Something is wrong.');
    }
}
