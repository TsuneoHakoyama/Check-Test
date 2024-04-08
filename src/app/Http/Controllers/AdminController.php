<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use App\Models\Category;

class AdminController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $contacts = Contact::with('category')->paginate(7);
        return view('admin', compact('contacts', 'categories'));
    }
}
