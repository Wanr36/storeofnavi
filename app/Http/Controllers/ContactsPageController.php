<?php
namespace Storeofnavi\Http\Controllers;

use Illuminate\Http\Request;

use Storeofnavi\Http\Requests;

class ContactsPageController extends Controller
{
    function Index(){
        return view('contacts');
    }
}