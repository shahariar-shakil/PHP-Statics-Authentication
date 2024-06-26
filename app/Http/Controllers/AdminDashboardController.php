<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ContactForm;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:admin');
    }

    public function index()
    {
        $users = User::all();
        $contacts = ContactForm::all();
        return view('admin.dashboard', compact('users', 'contacts'));
    }
}
