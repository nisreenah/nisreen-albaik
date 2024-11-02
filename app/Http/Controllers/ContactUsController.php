<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactUsController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact_us = Contact::orderBy('created_at','desc')->get();
        return view('admin.contact-us.index', compact('contact_us'));
    }


    /**
     * Display the specified resource.
     *
     */
    public function show($contactId)
    {
        $contact = Contact::findOrFail($contactId);
        $contact->update(['is_seen' => '1']);

        return view('admin.contact-us.show', compact('contact'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
//        $contact = Contact::findOrFail($contactId);

        $contact->delete();
        return redirect()->route('contact-us.index')->with($this->notification('Message deleted successfully'));
    }

}
