<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            // some random data
            // must be in this format in the future unless u wanna change the comic-row.blade.php
            'data' => [
                "comicRows"=>[
                    [
                        "genre"=>"action",
                        "items"=>[
                            ["id"=>14,"price"=>"52.32","title"=>"SPIDRMAN","image"=>"/assets/images/spiderman.jpg"],
                            ["id"=>15,"price"=>"32.11","title"=>"batman","image"=>"/assets/images/spiderman.jpg"],
                            ["id"=>16,"price"=>"11.80","title"=>"spider","image"=>"/assets/images/spiderman.jpg"],
                            ["id"=>17,"price"=>"8.30","title"=>"hoi","image"=>"/assets/images/spiderman.jpg"],
                            ["id"=>18,"price"=>"15,15","title"=>"hoe gaat het","image"=>"/assets/images/spiderman.jpg"]
                        ]
                    ],
                    [
                        "genre"=>"random",
                        "items"=>[
                            ["id"=>19,"price"=>"73,21","title"=>"blabla1","image"=>"/assets/images/spiderman.jpg"],
                            ["id"=>20,"price"=>"12,53","title"=>"een twee drie","image"=>"/assets/images/spiderman.jpg"],
                            ["id"=>21,"price"=>"55,00","title"=>"SPIDRMAN","image"=>"/assets/images/spiderman.jpg"],
                            ["id"=>22,"price"=>"69,69","title"=>"blabla the sequel","image"=>"/assets/images/spiderman.jpg"],
                            ["id"=>23,"price"=>"72,00","title"=>"uwu onichan","image"=>"/assets/images/spiderman.jpg"]
                        ]
                    ]
                ]
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
