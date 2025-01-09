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

    public function delete($contacts)
    {
        $singleContact = ContactModel::where(["id" => $contacts])->first();
        if($singleContact === null)
        {
            die("this product don't exist!");
        }
        $singleContact->delete();

        return redirect()->back();
    }

}
