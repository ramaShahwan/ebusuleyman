<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        return view('frontend.contact');
    }


    public function storeform(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        ContactForm::create($request->all());
        $notification = [
            'message' => 'Your Message Sended Successfully.',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }





    public function SubscribeView()
    {
        $data = ContactForm::latest()->get();
        return view('admin.subscribe.subscribe_view', compact('data'));
    }



    public function SubscribeDelete($id)
    {
        $contactForm = ContactForm::findOrFail($id);
        $contactForm->delete();
        $notification = [
            'message' => 'Your Message Sended Successfully.',
            'alert-type' => 'error'
        ];

        return redirect()->back()->with($notification);
    }





}
