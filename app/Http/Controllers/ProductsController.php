<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\CategoriesHeaderImage;
use App\Models\Langs;
use App\Models\Products;
use App\Models\ProductsDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class ProductsController extends Controller
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

    public function categoriesHeaderImage()
    {
        $title = 'Categories Header Image';
        $image = CategoriesHeaderImage::first();
        return view('admin.categories_header_image', ['title' => $title, 'image' => $image]);
    }

    public function saveCategoriesHeaderImage(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $name = time() . '.' . $ext;
        $path = 'images/categories-header-image/';
        $request->file('image')->move($path, $name);
        $image = CategoriesHeaderImage::where(['id' => $id])->update([
            'image' => $name,
        ]);
        if ($image) {
            return back()->with(['success' => 'Updated']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function categories()
    {
        $title = 'Categories';
        $langs = Langs::get();
        $categories = Categories::with('langs')->get();
        // return $categories;
        return view('admin.categories', ['title' => $title, 'langs' => $langs, 'categories' => $categories]);
    }

    public function saveCategories(Request $request)
    {
        /*$validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $name = time() . '.' . $ext;
        $path = 'images/categories/';
        $request->file('image')->move($path, $name);*/
        $categories = new Categories();
        $categories->category_name = $request->category_name;
        $categories->category_name_ar = $request->category_name_ar;
        $categories->save();
        if ($categories) {
            return back()->with(['success' => 'Added']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function editCategoriesLang($id)
    {
        $title = 'Categories';
        $langs = Langs::get();
        $categories = Categories::where(['lang_id' => $id])->with('products')->get();
        return view('admin.edit_categories_lang', ['title' => $title, 'langs' => $langs, 'categories' => $categories]);
    }


    public function editCategories($id)
    {
        $title = 'Categories';
        $langs = Langs::get();
        $categories = Categories::where(['id' => $id])->with('langs')->first();
        return view('admin.edit_categories', ['title' => $title, 'categories' => $categories, 'langs' => $langs]);
    }

    public function updateCategories(Request $request, $id)
    {
        /*$validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $name = time() . '.' . $ext;
        $path = 'images/categories/';
        $request->file('image')->move($path, $name);*/
        $categories = Categories::where(['id' => $id])->update([
            'category_name' => $request->category_name,
            'category_name_ar' => $request->category_name_ar,
        ]);
        if ($categories) {
            return redirect()->route('categories')->with(['success' => 'Updated']);
        } else {
            return redirect()->route('categories')->with(['error' => 'Error']);
        }
    }

    public function deleteCategories($id)
    {
        $categories = Categories::where(['id' => $id])->delete();
        if ($categories) {
            return back()->with(['success' => 'Deleted']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function products()
    {
        $title = 'Products';
        $langs = Langs::get();
        $categories = Categories::get();
        $products = Products::with('categories')->get();
        return view('admin.products', ['title' => $title, 'langs' => $langs, 'categories' => $categories, 'products' => $products]);
    }

    public function saveProducts(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $name = time() . '.' . $ext;
        $path = 'images/products/';
        $request->file('image')->move($path, $name);
        $products = Products::insert([
            'name_product_en' => $request->name_product_en,
            'name_product_ar' => $request->name_product_ar,
            'desc_product_en' => $request->desc_product_en,
            'desc_product_ar' => $request->desc_product_ar,
            'price' => $request->price,
            'image' => $name,
            'category_id' => $request->category,
        ]);
        if ($products) {
            return back()->with(['success' => 'Added']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function editProductsLang($id)
    {
        $title = 'Products';
        $products = Products::where(['lang_id' => $id])->with('categories')->get();
        $langs = Langs::get();
        return view('admin.edit_products_lang', ['title' => $title, 'products' => $products, 'langs' => $langs]);
    }

    public function editProducts($id)
    {
        $title = 'Products';
        $langs = Langs::get();
        $categories = Categories::get();
        $products = Products::where(['id' => $id])->with('categories')->first();
        return view('admin.edit_products', ['title' => $title, 'langs' => $langs, 'products' => $products, 'categories' => $categories]);
    }

    public function updateProducts(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $name = time() . '.' . $ext;
        $path = 'images/products/';
        $request->file('image')->move($path, $name);
        $products = Products::where(['id' => $id])->update([
            'name_product_en' => $request->name_product_en,
            'name_product_ar' => $request->name_product_ar,
            'desc_product_en' => $request->desc_product_en,
            'desc_product_ar' => $request->desc_product_ar,
            'price' => $request->price,
            'image' => $name,
            'category_id' => $request->category,
        ]);
        if ($products) {
            return redirect()->route('products')->with(['success' => 'Updated']);
        } else {
            return redirect()->route('products')->with(['error' => 'Error']);
        }
    }

    public function deleteProducts($id)
    {
        $products = Products::where(['id' => $id])->delete();
        if ($products) {
            return redirect()->route('products')->with(['success' => 'Deleted']);
        } else {
            return redirect()->route('products')->with(['error' => 'Error']);
        }
    }
}
