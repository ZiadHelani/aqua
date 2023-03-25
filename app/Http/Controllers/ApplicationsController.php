<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\HeaderDetailsApplications;
use App\Models\HeaderImageApplications;
use App\Models\Langs;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
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
    public function headerImageApplications()
    {
        $title = 'Header Image Applications';
        $image = HeaderImageApplications::first();
        return view('admin.header_image_applications', ['title' => $title, 'image' => $image]);
    }

    public function saveHeaderImageApplications(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $name = time() . '.' . $ext;
        $path = 'images/header-image-applications/';
        $request->file('image')->move($path, $name);
        $image = HeaderImageApplications::where(['id' => $id])->update([
            'image' => $name,
        ]);
        if ($image) {
            return back()->with(['success' => 'Uploaded']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function headerDetailsApplications()
    {
        $title = 'Header Applications';
        $details = HeaderDetailsApplications::first();
        return view('admin.header_details_applications', ['title' => $title, 'details' => $details]);
    }

    public function saveHeaderDetailsApplications(Request $request, $id)
    {
        $details = HeaderDetailsApplications::where(['id' => $id])->update([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'sub_title_en' => $request->sub_title_en,
            'sub_title_ar' => $request->sub_title_ar,
            'desc_en' => $request->desc_en,
            'desc_ar' => $request->desc_ar,
        ]);
        if ($details) {
            return back()->with(['success' => 'Uploaded']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function Applications()
    {
        $title = 'Applications';
        $langs = Langs::get();
        return view('admin.applications', ['title' => $title, 'langs' => $langs]);
    }

    public function saveApplications(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $name = time() . '.' . $ext;
        $path = 'images/applications/';
        $request->file('image')->move($path, $name);
        $applications = new Applications();
        $applications->title = $request->title;
        $applications->sub_title = $request->sub_title;
        $applications->desc = $request->desc;
        $applications->image = $name;
        $applications->lang_id = $request->lang;
        $applications->save();
        if ($applications) {
            return back()->with(['success' => 'Added']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function applicationsLang($id)
    {
        $title = 'Applications';
        $applications = Applications::where(['lang_id' => $id])->get();
        return view('admin.applications_lang', ['applications' => $applications, 'title' => $title]);
    }

    public function editApplicationsLang($id)
    {
        $title = 'Applications';
        $langs = Langs::get();
        $applications = Applications::where(['id' => $id])->first();
        return view('admin.edit_applications_lang', ['title' => $title, 'applications' => $applications, 'langs' => $langs]);
    }

    public function updateApplicationsLang(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $name = time() . '.' . $ext;
        $path = 'images/applications/';
        $request->file('image')->move($path, $name);
        $applications = Applications::where(['id' => $id])->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'desc' => $request->desc,
            'image' => $name,
            'lang_id' => $request->lang,
        ]);
        if ($applications) {
            return redirect()->route('applications')->with(['success' => 'Updated']);
        } else {
            return redirect()->route('applications')->with(['error' => 'Error']);
        }
    }
}
