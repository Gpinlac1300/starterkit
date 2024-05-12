<?php

namespace App\Http\Controllers;
use App\Models\Lists;
use Illuminate\Http\Request;

class ListController extends Controller
{
public function read()
{
    $lists = Lists::orderBy('created_at', 'desc')->paginate(10);
    return view('read')->with('lists', $lists);
}
public function add()
{
    return view('create');
}
public function create(Request $request)
{
    $request->validate([
            'name' => ['string', 'max:255'], // Define validation rules for other fields as needed
            'middle' => ['string', 'max:255'],
            'lastname' => ['string', 'max:255'],
        ]);

        // Create a new Company instance and populate it with validated data
        $lists = new Lists([
            'name' => $request->input('name'),
            'middle' => $request->input('middle'),
            'lastname' => $request->input('lastname'),
            // Add more fields as needed
        ]);

        // Save the company data to the database
        $lists->save();
    return view('read')->with('lists', $lists);
}
public function edit($id)
{
    $lists = Lists::find($id);
    return view('edit')->with('lists', $lists);
}
public function update(Request $request, $id)
{
    $request->validate([
            
        'name' => ['string', 'max:255'],
        'middle' => ['string', 'max:255'],
        'lastname' => ['string', 'max:255'],
        // Define validation rules for other fields as needed
    ]);
    $lists = Lists::find($id);


    $lists->name = $request->input('name');
    $lists->middle = $request->input('middle');
    $lists->lastname = $request->input('lastname');
    // Update other fields as needed

    // Save the updated data
    $lists->save();

    return view('read')->with('lists', $lists);
}
public function delete($id)
{
    $lists = Lists::findOrFail($id);
    $lists->delete();

    return view('read');
}
}
