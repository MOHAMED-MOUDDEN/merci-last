<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::all();
        return view('coupon.index',compact('coupons'));
    }


    public function store(Request $request) 
    {

        $request->validate([
            'code' => 'required',
            'discount' => 'required|numeric|min:0|max:100'
        ]);

        if (is_null(coupon::where('code',$request->code)->first()))
        {
            Coupon::create([
            'code' => $request->code,
            'discount' => $request->discount
            ]);
        }
        else
        {
            return redirect()->back()->with('error', 'le code promo existe déjà');
        }
        

        return redirect()->back()->with('succes', 'added succeffly');
    }



    public function addCoupon(Request $request)
    {
        $coupon = coupon::where('code',$request->code)->first();
        if (!is_null($coupon))
        {
            return redirect()->back()->with('discount', $coupon->discount);
        }
        return redirect()->back()->with('error', 'le code est invalide');
        
    }

    public function destroy($id)
    {
        $coupon = Coupon::find($id);
        $coupon->delete();
        return redirect()->back();
    }
}
