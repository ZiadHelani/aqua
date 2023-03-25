<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Shippings;
use App\Models\Orders;
use App\Models\OrderData;

class ShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function orders()
    {
        $title = 'Orders';
        $orders = Orders::get();
        return view('admin.orders', ['title' => $title, 'orders' => $orders]);
    }

    public function shippings() {
        $title = 'Shippings';
        $shippings = Shippings::get();
        return view('admin.shippings', ['title' => $title, 'shippings' => $shippings]);
    }
    
    public function saveShippings(Request $request) {
        $shippings = new Shippings();
        $shippings->country_name = $request->country_name;
        $shippings->shipping_cost = $request->shipping_cost;
        $shippings->save();
        if($shippings) {
            return back()->with(['success' => 'Added']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }
    
    public function editShippings($id) {
        $title = 'Edit Shippings';
        $shippings = Shippings::where(['id' => $id])->first();
        return view('admin.edit_shippings', ['title' => $title, 'shippings' => $shippings]);
    }
    
    public function updateShippings(Request $request, $id) {
        $shippings = Shippings::where(['id' => $id])->update([
                'country_name' => $request->country_name,
                'shipping_cost' => $request->shipping_cost,
            ]);
            if($shippings) {
                return redirect()->route('shippings')->with(['success' => 'Edited']);
            } else {
                return rediret()->route('shippings')->with(['error' => 'Error']);
            }
    }
    
    public function deleteShippings($id) {
        $shippings = Shippings::where(['id' => $id])->delete();
        if($shippings) {
            return back()->with(['success' => 'Deleted']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }
    
    public function showOrder($id) {
        $title = 'Show Order';
        $order = Orders::where(['id' => $id])->with('shipping')->first();
        $orderData = OrderData::where(['order_id' => $id])->with('products')->get();
        // return $orderData;
        return view('admin.show_order', ['title' => $title, 'order' => $order, 'orderData' => $orderData]);
    }
    
    
    
    
    
    
}
