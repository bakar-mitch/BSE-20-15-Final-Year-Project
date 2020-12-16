<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use NunoMaduro\Collision\Provider;
use App\Models\Cart;
use App\Models\Product;
use DB;
use Bmatovu\MtnMomo\Products\Collection;

class MTNMoMoController extends Controller
{
    public function paymentmomo()
    {

        $cart = Cart::where('user_id',auth()->user()->id)->where('order_id',null)->get()->toArray();
        
        $data = [];
        
        // return $cart;
        $data['items'] = array_map(function ($item) use($cart) {
            $name=Product::where('id',$item['product_id'])->pluck('title');
            return [
                'name' =>$name ,
                'price' => $item['price'],
                'desc'  => 'Thank you for using MTN Momo',
                'qty' => $item['quantity']
            ];
        }, $cart);

        $data['invoice_id'] ='ORD-'.strtoupper(uniqid());
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('paymentmomo.success');
        $data['cancel_url'] = route('paymentmomo.cancel');

        $total = 0;
        foreach($data['items'] as $item) {
            $total += $item['price']*$item['qty'];
        }

        $data['total'] = $total;
        if(session('coupon')){
            $data['shipping_discount'] = session('coupon')['value'];
        }
        Cart::where('user_id', auth()->user()->id)->where('order_id', null)->update(['order_id' => session()->get('id')]);

        // return session()->get('id');
        $collection = new Collection();

        $momoTransactionId = $collection->requestToPay('202012164', session()->get('phone'), $data['total']);

        $collection->getTransactionStatus($momoTransactionId);

        if($collection){

        Session::flash('success', 'Your payment has been successfully processed.');
          
        return back();
        }
        else{
            
        }

    }
   
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    // public function cancel()
    // {
    //     request()->session()->flash('error','Something went wrong please try again!!!');
    //     return redirect()->back();
    // }
  
    // /**
    //  * Responds with a welcome message with instructions
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function success(Request $request)
    // {
    //     $provider = new ExpressCheckout;
    //     $response = $provider->getExpressCheckoutDetails($request->token);
    //     // return $response;
  
    //     if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
    //         request()->session()->flash('success','You successfully pay from Paypal! Thank You');
    //         session()->forget('cart');
    //         session()->forget('coupon');
    //         return redirect()->route('home');
    //     }
  
    //     request()->session()->flash('error','Something went wrong please try again!!!');
    //     return redirect()->back();
    // }
}
