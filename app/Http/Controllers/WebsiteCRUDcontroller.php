<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class WebsiteCRUDcontroller extends Controller
{
    // Create Index
    public function index() {
        $data['webdata'] = Company::orderBy('id', 'asc')->paginate(5);
        return view('data.index' , $data);
    }

    //Create resource
    public function create() {
        return view('data.create');
    }

     // Store resource
     public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required'
        ]);

        $data_company = new Company;
        $data_company->name = $request->name;
        $data_company->email = $request->email;
        $data_company->address = $request->address;
        $data_company->save();
        return redirect()->route('data.index')->with('success','Data post successfully.');
        
     }
public function edit(company $web) {
    return view('data.edit', compact('web'));
}



}
