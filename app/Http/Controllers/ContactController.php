<?php
namespace App\Http\Controllers;
class ContactController extends Controller {

    public function index(\Illuminate\Http\Request $request) {        
        return \App\Http\Models\Contact::paginate(10);
    }

}
