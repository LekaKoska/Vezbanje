<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    protected $table = "login";
    protected $fillable = [
        "ime", "sifra",
    ];
}
