<?php

namespace App\Http\Controllers;

use App\Models\AboutOurClients;
use App\Models\AboutUs;
use App\Models\AboutUsImages;
use App\Models\AppDetails;
use App\Models\Categories;
use App\Models\HomeHeader;
use App\Models\NearbyStore;
use App\Models\OurClient;
use App\Models\OurMission;
use App\Models\OurProducts;
use App\Models\OurVision;
use App\Models\ProductImages;
use App\Models\Products;
use App\Models\Orders;
use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index()
    {
        $title = 'home';
        $product_count = Products::count();
        $categories_count = Categories::count();
        $orders_count = Orders::count();
        $orders = Orders::get();
        $all_orders_price = 0;
        for($i=0;$i<$orders_count;$i++){
            $all_orders_price+=$orders[$i]->total_price;
        }
        return view('admin.index', ['title' => $title, 'product_count' => $product_count, 'categories_count' => $categories_count, 'orders_count' => $orders_count, 'all_orders_price' => $all_orders_price]);
    }

    public function headerImage()
    {
        $title = 'Header Image';
        $images = HomeHeader::get();
        return view('admin.header_image', ['title' => $title, 'images' => $images]);
    }

    public function editHeaderImage($id)
    {
        $title = 'Edit Header Image';
        $image = HomeHeader::where(['id' => $id])->first();
        return view('admin.edit_header_image', ['title' => $title, 'image' => $image]);
    }

    public function saveHeaderImage(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $name = time() . '.' . $ext;
        $path = 'images/home-header/';
        $request->file('image')->move($path, $name);
        $image = HomeHeader::where(['id' => $id])->update([
            'image' => $name,
        ]);
        if ($image) {
            return back()->with(['success' => 'Edited']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function nearbyStore()
    {
        $title = 'Nearby Store';
        $nearby_store = NearbyStore::first();
        return view('admin.nearby_store', ['title' => $title, 'nearby_store' => $nearby_store]);
    }

    public function saveNearbyStore(Request $request, $id)
    {
        $nearby_store = NearbyStore::where(['id' => $id])->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'link_amazon' => $request->link_amazon,
            'link_noon' => $request->link_noon,
        ]);
        if ($nearby_store) {
            return back()->with(['success' => 'Updated']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function aboutUs()
    {
        $about = AboutUs::first();
        // return $about;
        $title = 'About Us';
        return view('admin.about_us', ['title' => $title, 'about' => $about]);
    }

    public function saveAboutUs(Request $request, $id)
    {
        $about = AboutUs::where(['id' => $id])->update([
            'text_en' => $request->texten,
            'text_ar' => $request->textar,
        ]);
        if ($about) {
            return back()->with(['success' => 'Updated']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function aboutUsImages()
    {
        $title = 'About Us Images';
        $images = AboutUsImages::get();
        return view('admin.about_us_images', ['title' => $title, 'images' => $images]);
    }

    public function editAboutUsImages($id)
    {
        $title = 'Edit About Us Images';
        $image = AboutUsImages::where(['id' => $id])->first();
        return view('admin.edit_about_us_images', ['title' => $title, 'image' => $image]);
    }

    public function saveAboutUsImages(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $name = time() . '.' . $ext;
        $path = 'images/about-us-images';
        $request->file('image')->move($path, $name);
        $image = AboutUsImages::where(['id' => $id])->update([
            'image' => $name,
        ]);
        if ($image) {
            return back()->with(['success' => 'Updated']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function deleteAboutUsImages($id)
    {
        $image = AboutUsImages::where(['id' => $id])->delete();
        if ($image) {
            return back()->with(['success' => 'Deleted']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function ourProducts()
    {
        $title = 'Our Products';
        $products = OurProducts::first();
        return view('admin.our_products', ['title' => $title, 'products' => $products]);
    }

    public function saveOurProducts(Request $request, $id)
    {
        $products = OurProducts::where(['id' => $id])->update([
            'text_en' => $request->text_en,
            'text_ar' => $request->text_ar,
        ]);
        if ($products) {
            return back()->with(['success' => 'Updated']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function productImages()
    {
        $title = 'Product Images';
        $images = ProductImages::get();
        return view('admin.product_images', ['title' => $title, 'images' => $images]);
    }

    public function saveProductImages(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $name = time() . '.' . $ext;
        $path = 'images/product-images';
        $request->file('image')->move($path, $name);
        $images = new ProductImages();
        $images->image = $name;
        $images->save();
        if ($images) {
            return back()->with(['success' => 'Added']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function deleteProductImages($id)
    {
        $image = ProductImages::where(['id' => $id])->delete();
        if ($image) {
            return back()->with(['success' => 'Deleted']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function editProductImages($id)
    {
        $title = 'Product Images';
        $image = ProductImages::where(['id' => $id])->first();
        return view('admin.edit_product_images', ['title' => $title, 'image' => $image]);
    }

    public function updateProductImages(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/product-images';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $image = ProductImages::where(['id' => $id])->update([
            'image' => $name,
        ]);
        if ($image) {
            return redirect()->route('product_images')->with(['success' => 'Updated']);
        } else {
            return redirect()->route('product_images')->with(['error' => 'Error']);
        }
    }

    public function ourMission()
    {
        $title = "Our Mission";
        $mission = OurMission::first();
        return view('admin.our_mission', ['title' => $title, 'mission' => $mission]);
    }

    public function saveOurMission(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/our-mission';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $mission = OurMission::where(['id' => $id])->update([
            'text_en' => $request->texten,
            'text_ar' => $request->textar,
            'image' => $name,
        ]);
        if ($mission) {
            return back()->with(['success' => 'Updated']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function ourVision()
    {
        $title = 'Our Vision';
        $vision = OurVision::first();
        return view('admin.our_vision', ['title' => $title, 'vision' => $vision]);
    }

    public function saveOurVision(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/our-vision';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $vision = OurVision::where(['id' => $id])->update([
            'text_en' => $request->texten,
            'text_ar' => $request->textar,
            'image' => $name,
        ]);
        if ($vision) {
            return back()->with(['success' => 'Updated']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function appDetails()
    {
        $title = 'App Details';
        $detail = AppDetails::first();
        return view('admin.app_details', ['title' => $title, 'detail' => $detail]);
    }
    public function saveAppDetails(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/app-details';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $detail = AppDetails::where(['id' => $id])->update([
            'text_en' => $request->texten,
            'text_ar' => $request->textar,
            'image' => $name,
            'link_google' => $request->google,
            'link_apple' => $request->apple,
        ]);
        if ($detail) {
            return back()->with(['success' => 'Updated']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function ourClient()
    {
        $title = 'Our Client';
        $clients = OurClient::get();
        $about = AboutOurClients::first();
        return view('admin.our_client', ['title' => $title, 'clients' => $clients, 'about' => $about]);
    }

    public function saveOurClient(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/our-client';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $client = new OurClient();
        $client->client_name = $request->client_name;
        $client->client_job = $request->client_job;
        $client->image = $name;
        $client->client_opinion = $request->client_opinion;
        $client->save();
        if ($client) {
            return back()->with(['success' => 'Added']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function editOurClient($id)
    {
        $title = 'Edit Our Client';
        $client = OurClient::where(['id' => $id])->first();
        return view('admin.edit_our_client', ['title' => $title, 'client' => $client]);
    }

    public function updateOurClient(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/our-client';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $client = OurClient::where(['id' => $id])->update([
            'client_name' => $request->client_name,
            'client_job' => $request->client_job,
            'image' => $name,
            'client_opinion' => $request->client_opinion
        ]);
        if ($client) {
            return redirect()->route('our_client')->with(['success' => 'Updated']);
        } else {
            return redirect()->route('our_client')->with(['error' => 'Error']);
        }
    }

    public function deleteOurClient($id)
    {
        $client = OurClient::where(['id' => $id])->delete();
        if ($client) {
            return back()->with(['success' => 'Deleted']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function updateOurClients(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $path = 'images/about-our-clients';
        $name = time() . '.' . $ext;
        $request->file('image')->move($path, $name);
        $about = AboutOurClients::where(['id' => $id])->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'image' => $name,
        ]);
        if ($about) {
            return back()->with(['success' => 'Updated']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }
}
