<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function allContacts()
    {
       $allContacts =  ContactModel::all();

       return view("allContact", compact("allContacts"));
    }
}
