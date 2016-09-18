<?php
/**
 * Created by PhpStorm.
 * User: Kaan
 * Date: 9/18/2016
 * Time: 3:00 PM
 */

namespace App\Http\Controllers;

class ContactMessageController extends Controller
{
    public function getContactIndex()
    {
        return view('frontend.other.contact');
    }
}