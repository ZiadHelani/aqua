<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use App\Models\HeaderImageContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function headerImageContact()
    {
        $title = 'Header Image Contact';
        $image = HeaderImageContact::first();
        return view('admin.header_image_contact', ['title' => $title, 'image' => $image]);
    }

    public function saveHeaderImageContact(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        $ext = $request->file('image')->getClientOriginalExtension();
        $name = time() . '.' . $ext;
        $path = 'images/header-image-contact';
        $request->file('image')->move($path, $name);
        $image = HeaderImageContact::where(['id' => $id])->update([
            'image' => $name,
        ]);
        if ($image) {
            return back()->with(['success' => 'Added']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }

    public function contactInfo()
    {
        $title = 'Contact Info';
        $contact = ContactInfo::first();
        return view('admin.contact_info', ['title' => $title, 'contact' => $contact]);
    }

    public function saveContactInfo(Request $request, $id)
    {
        $contact = ContactInfo::where(['id' => $id])->update([
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'facebook_link' => $request->facebook_link,
            'instagram_link' => $request->instagram_link,
            'touch' => $request->touch,
        ]);
        if ($contact) {
            return back()->with(['success' => 'Updated']);
        } else {
            return back()->with(['error' => 'Error']);
        }
    }
}
