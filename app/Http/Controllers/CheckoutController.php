<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Comnd;
use Illuminate\Http\Request;
use Combindma\Cmi\Cmi;
use Gloudemans\Shoppingcart\Facades\Cart;
use Srmklive\PayPal\Services\ExpressCheckout;


class CheckoutController extends Controller
{
    use \Combindma\Cmi\Traits\CmiGateway;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartItems=Cart::content();
        return view('client.validation',compact('cartItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cartItems=Cart::content();
        session()->  put('ItemsCount', count($cartItems));
        return view('client.validation',compact('cartItems'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'phone' => 'required',
            'adresse' => 'required',
            'commande' => 'required',
            'Pmethod' => 'required',
            'oid' => 'required',
            'prix' => 'required',
            'Mlivraison' => 'required'
        ]);
        if (is_null(Comnd::where('oid',$request->oid)->first()))
        {
            Comnd::create([
            'nom' => $request->nom,
            'prenom' =>$request->prenom,
            'phone' => $request->phone,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'commande' => $request->commande,
            'Pmethod' => $request->Pmethod,
            'oid' => $request->oid,
            'prix' => $request->prix,
            'Mlivraison' => $request->Mlivraison,
            'notes' => $request->notes
            ]);
        }
        else 
        {
            
                Comnd::where('oid',$request->oid)->delete();

                Comnd::create([
                    'nom' => $request->nom,
                    'prenom' =>$request->prenom,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'adresse' => $request->adresse,
                    'commande' => $request->commande,
                    'Pmethod' => $request->Pmethod,
                    'oid' => $request->oid,
                    'prix' => $request->prix,
                    'Mlivraison' => $request->Mlivraison,
                    'notes' => $request->notes
                    ]);
            };

        
        if ($request->Pmethod == 'CMI')
        {
            $cmiClient = new Cmi();
            $cmiClient->setOid($request->oid);
            $cmiClient->setAmount($request->prix);
            $cmiClient->setBillToName($request->nom.' '.$request->prenom);
            $cmiClient->setEmail($request->email);
            $cmiClient->setTel($request->phone);
            $cmiClient->setCurrency('504');
            $cmiClient->setDescription('ceci est un exemple à utiliser');
            $cmiClient->disableCallbackRespense(); //Désactivez les réponses de rappel, si vous ne voulez pas traiter la callbackResponse.
            $otherData = [
                'billToStreet1' => $request->adresse,
                // 'billToCity' => 'Casanegra',
                // 'billToCountry' => 'Morocco',
                //etc...
            ];

            return $this->requestPayment($cmiClient, $otherData);
        }
        elseif ($request->Pmethod == 'PayPal')
        {
            $data = [];
            
            $data['items'] = [
                [
                    'name' => 'Product',
                    'price' => $request->prix,
                    'desc' => 'Description for Product',
                    'qty' => 1
                ]
            ];
    
            $data['invoice_id'] = 1;
    
            $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
    
            $data['return_url'] = route('payment.success');
    
            $data['cancel_url'] = route('payment.cancel');
    
            $data['total'] = $request->prix;
    
            $provider = new ExpressCheckout;
            $response = $provider->setExpressCheckout($data);
            $response = $provider->setExpressCheckout($data, true);
    
            return redirect($response['paypal_link']);
        }
            $cartItems = Cart::destroy();
            session()->forget('oid');
            return redirect()->back()->with('cartItems' , $cartItems)->with('thanks', 'Votre commande sera livrée bientôt, merci.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
