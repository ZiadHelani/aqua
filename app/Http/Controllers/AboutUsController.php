<?php

namespace App\Http\Controllers;

use App\Models\HeaderAboutUs;
use App\Models\HeaderImageAboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
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
    public function headerImageAboutUs()
    {
        $title = "Header Image About Us";
        $header = HeaderImageAboutUs::first();
        return view('admin.header_image_about_us', ['title' => $title, 'header' => $header]);
    }

    public function saveHeaderImageAboutUs(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $name = time() . '.' . $ext;
        $path = 'images/header-image-about-us/';
        $request->file('image')->move($path, $name);
        $header = HeaderImageAboutUs::where(['id' => $id])->update([
            'text_en' => $request->texten,
            'text_ar' => $request->textar,
            'image' => $name,
        ]);
        if ($header) {
            return back()->with(['success' => 'Uploaded']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function headerAboutUs()
    {
        $title = 'Header About Us';
        $image = HeaderAboutUs::first();
        return view('admin.header_about_us', ['title' => $title, 'image' => $image]);
    }

    public function saveHeaderAboutUs(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $name = time() . '.' . $ext;
        $path = 'images/header-about-us/';
        $request->file('image')->move($path, $name);
        $image = HeaderAboutUs::where(['id' => $id])->update([
            'image' => $name,
        ]);
        if ($image) {
            return back()->with(['success' => 'Uploaded']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }
}
