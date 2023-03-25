<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HomeHeader;
use App\Models\OurVision;
use App\Models\OurMission;
use App\Models\AboutUs;
use App\Models\AppDetails;
use App\Models\OurProducts;
use App\Models\Products;
use App\Models\ProductImages;
use App\Models\NearbyStore;
use App\Models\HeaderAboutUs;
use App\Models\OurClient;
use App\Models\AboutOurClients;


use App\Models\AboutUsImages;
use App\Models\HeaderImageAboutUs;


use App\Models\CategoriesHeaderImage;


use App\Models\ContactInfo;


use App\Models\Orders;
use App\Models\OrderData;


use App\Models\HeaderImageApplications;
use App\Models\Applications;


use App\Models\Shippings;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
class Cart
{

    public $product_id;
    public $name_product_en;
    public $name_product_ar;
    public $product_price;
    public $category_id;
    public $product_category;
    public $quantity;
    public $subtotal;
    public function __construct($product_id, $name_product_en, $name_product_ar, $product_price,$category_id, $product_category, $quantity)
    {
        $this->product_id = $product_id;
        $this->name_product_en = $name_product_en;
        $this->name_product_ar = $name_product_ar;
        $this->product_price = $product_price;
        $this->category_id = $category_id;
        $this->product_category = $product_category;
        $this->quantity = $quantity;
        $this->subtotal = $product_price * $quantity;
    }
    public function getData()
    {
        $arr = array(
            'product_id' => $this->product_id,
            'name_product_en' => $this->name_product_en,
            'name_product_ar' => $this->name_product_ar,
            'product_price' => $this->product_price,
            'category_id' => $this->category_id,
            'product_category' => $this->product_category,
            'quantity' => $this->quantity,
            'subtotal' => $this->subtotal,
        );
        return $arr;
    }
}
class WebsiteController extends Controller
{
    public function index(){
        $home_headers = HomeHeader::get();
        $our_vision = OurVision::first();
        $our_mission = OurMission::first();
        $about_us = AboutUs::first();
        $about_us_images = AboutUsImages::get();
        $our_products = OurProducts::first();
        $product_images = ProductImages::get();
        $near_by_store = NearbyStore::first();
        $our_clients = OurClient::get();
        $about_our_clients = AboutOurClients::first();
        $products = Products::get();
        $app_details = AppDetails::first();
        if(App::currentLocale() == null) {
            $lang = 'en';
        } else {
            $lang = App::currentLocale();
        }
        $type = 'home';
        return view('index', compact('home_headers', 'our_vision', 'our_mission','our_products', 'our_clients', 'about_our_clients', 'product_images','near_by_store', 'about_us', 'products','about_us_images', 'app_details', 'lang', 'type'));
    }    

    public function about_us(){
        $about_us = AboutUs::first();
        $header_image = HeaderAboutUs::first();
        $about = HeaderImageAboutUs::first();
        $our_vision = OurVision::first();
        $our_mission = OurMission::first();
        if(App::currentLocale() == null) {
            $lang = 'en';
        } else {
            $lang = App::currentLocale();
        }
        $type = 'about-us';
        return view('about-us', compact('about_us', 'header_image', 'about', 'our_vision', 'our_mission', 'lang', 'type'));
    }

    public function shop(){
        $header_image = CategoriesHeaderImage::first();
        $type = 'shop';
        if(App::currentLocale() == null) {
            $lang = 'en';
        } else {
            $lang = App::currentLocale();
        }
            $products = Products::with('categories')->paginate(8);
            return view('shop', compact('type', 'header_image', 'products', 'lang'));
    }

    public function contact_us(){
        $home_header = HomeHeader::first();
        $info = ContactInfo::first();
        if(App::currentLocale() == null) {
            $lang = 'en';
        } else {
            $lang = App::currentLocale();
        }
        $type = 'contact-us';
        return view('contact-us', compact('home_header', 'info', 'lang', 'type'));
    }
    
    public function application(){
        $about = HomeHeader::first();
        $header_image = HeaderImageApplications::first();
        if(App::currentLocale() == null) {
            $lang = 'en';
        } else {
            $lang = App::currentLocale();
        }
        $type = 'application';
        if($lang == 'en') {
            $applications = Applications::where(['lang_id' => 1])->get();
            return view('application', compact('header_image', 'about', 'applications', 'lang', 'type'));
        } elseif($lang == 'ar') {
            $applications = Applications::where(['lang_id' => 2])->get();
            return view('application', compact('header_image', 'about', 'applications', 'lang', 'type'));
        }
    }

    public function product($id){
        $header_image = CategoriesHeaderImage::first();
        
        $home_header = HomeHeader::first();
        $type = 'shop';
        if(App::currentLocale() == null) {
            $lang = 'en';
        } else {
            $lang = App::currentLocale();
        }
            $product = Products::with('categories')->where(['id' => $id])->first();
            return view('product', compact('home_header','header_image','product', 'lang', 'type'));
    }
    
    public function addToCart(Request $request) {
        $validated = $request->validate([
            'quantity' => 'required|min:1',
        ]);
        if ($validated) {
            $object = new Cart($request->product_id, $request->product_name_en, $request->product_name_ar, $request->product_price, $request->category_id, $request->product_category, $request->quantity);
            $data = $object->getData();
            $check = array();
            array_push($check, $data);
            if (Session::has('data')) {
                $allData = Session::get('data');
                for ($i = 0; $i < count($allData); $i++) {
                    if ($allData[$i]['product_id'] == $check[0]['product_id']) {
                        return redirect()->route('shop')->with('error', 'The Product Already Exists');
                    }
                }
                $newData = Session::get('data');
                $count = count($newData);
                Session::push('data', $data);
                Session::push('_flash', $count);
                return redirect()->route('shop')->with('success', 'The Product is Added in Your Cart');
            } else {
                Session::start('data');
                Session::push('data', $data);
                $newData = Session::all();
                $count = count($newData['data']);
                Session::push('_flash', $count);
                return redirect()->route('shop')->with('success', 'The Product is Added in Your Cart');
            }
        }
    }
    
    public function cart() {
        if(App::currentLocale() == null) {
            $lang = 'en';
        } else {
            $lang = App::currentLocale();
        }
        $type = 'shop';
        if(Session::has('data')){
        $products = Products::get();
        $allData = Session::get('data');
        // return $allData;
            return view('cart', compact('allData', 'type', 'lang', 'products'));
        } else {
            return redirect()->route('shop')->with('error', 'the cart is empty');
        }
    }
    
    public function emptyCart() {
        if(Session::has('data')) {
            Session::flush();
            return redirect()->route('shop')->with('success', 'OK Emptyed Your Cart');
        } else {
            return redirect()->route('shop')->with('error', 'The Cart is Emptyed');
        }
    }
    
    public function updateCart(Request $request)
    {
        if (Session::has('data')) {
            $data = session('data');
            for ($i = 0; $i < count($data); $i++) {
                $data[$i]['quantity'] = $request->quantity[$i];
                $data[$i]['subtotal'] = ($request->quantity[$i] * $data[$i]['product_price']);
            }
            session(['data' => $data]);
            return back()->with('success', 'Edited Products');
        }
    }
    
    public function checkout() {
        if(App::currentLocale() == null) {
            $lang = 'en';
        } else {
            $lang = App::currentLocale();
        }
        $type = 'shop';
        $shippings = Shippings::get();
        $products = Products::get();
        if(Session::has('data')){
            $allData = Session::get('data');
            return view('checkout', compact('allData', 'type', 'shippings', 'lang', 'products'));
        } else {
            return redirect()->route('shop');
        }
    }
    
    public function saveOrder(Request $request) {
        $orders = Orders::insertGetId([
                'first_name' => $request->firstName,
                'last_name' => $request->lastName,
                'company_name' => $request->companyName,
                'shipping_id' => $request->country,
                'country' => $request->country,
                'street_name' => $request->address1,
                'apartment' => $request->address2,
                'city_name' => $request->city,
                'zip' => $request->zip,
                'phone_number' => $request->phone,
                'email' => $request->email,
                'order_notes' => $request->orderNotes,
                'total_price' => $request->total,
            ]);
            $data = Session::get('data');
            for($i=0;$i<count($data);$i++){
            $orderData = OrderData::insert([
                    'order_id' => $orders,
                    'product_id' => $request->product_id[$i],
                    'quantity' => $request->quantity[$i],
                    'total' => $request->total,
                ]);

            }
            if($orderData) {
                Session::flush();
                return redirect()->route('shop')->with(['success' => 'Successfuly Ordered']);
            } else {
                return redirect()->route('shop')->with(['error' => 'Error']);
            }
    }
    
    

    public function lang($lang){
        if (! in_array($lang, ['en', 'ar'])) {
            session()->put('locale', 'en');
        }
        session()->put('locale', $lang);
        return back();
    }
}
