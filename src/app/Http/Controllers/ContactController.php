<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only([
            'last_name',
            'first_name',
            'gender',
            'email',
            'tel-no_1',
            'tel-no_2',
            'tel-no_3',
            'address',
            'building',
            'category_id',
            'detail'
        ]);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        if ($request->input('back') == 'back') {
            return redirect('/')->withInput();
        }

        $contact = $request->only([
            'last_name',
            'first_name',
            'gender',
            'email',
            'tell',
            'address',
            'building',
            'category_id',
            'detail'
        ]);

        Contact::create($contact);
        return view('thanks');
    }
}
