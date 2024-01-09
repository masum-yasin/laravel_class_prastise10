<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;



class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact =new Contacts();
        $validata = $request->validate(
            [
                'name'=>'required|min:4',
                'email'=>'required|email',
                'phone'=>'required|min:5',
                'subject'=>'required|min:6',
                'comments'=>'required|min:6'
            ]);
            if($validata){
                $data = [
                    'Name'=>$request->first_name,
                    'Email'=>$request->email,
                    'Phone'=>$request->phone,
                    'Subject'=>$request->subject,
                    'Message'=>$request->comments,
                ];
                $contact->insert($data);
                return redirect('frontend.contact')->with('msg','Contact Successfully insert');
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
