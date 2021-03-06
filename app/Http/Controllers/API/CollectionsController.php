<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\collections;
use Illuminate\Http\Request;

class CollectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $result=collections::find($id);
        // $result=["id"=> 0,
        // "title"=> "親子步道",
        // "subTitle"=> "老少咸宜，生活好去處",
        // "bgColor"=> "yellow",
        // "iconImage"=> "https://example.com/uploads/images/collection/0/icon.png",
        // "trails"=> [
        //     [
        //         "id"=> 0,
        //         "title"=> "冷水坑步道",
        //         "location"=> "台北市士林區",
        //         "distance"=> 600,
        //         "coverImage"=> "https://example.com/uploads/images/trail/0/cover.jpg"
        //     ],
        //     [
        //         "id"=> 1,
        //         "title"=> "東吳大學登山步道",
        //         "location"=> "台北市士林區",
        //         "distance"=> 3824,
        //         "coverImage"=> "https://example.com/uploads/images/trail/1/cover.jpg"
        //     ],
        //     [
        //         "id"=> 2,
        //         "title"=> "二子坪步道",
        //         "location"=> "新北市三芝區",
        //         "distance"=> 3600,
        //         "coverImage"=>"https://example.com/uploads/images/trail/2/cover.jpg"
        //     ]
        // ]];
        return $result;
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
