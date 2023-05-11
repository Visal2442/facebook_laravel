<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return response()->json(["success"=>true, "data"=>$posts],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = [
            "title"=> "required|min:1",
            "description"=>"required|min:5",
            "user_id"=>"required"
        ];
        $validator=Validator::make($request->all(), $validation);
        if($validator->fails()){
            return response()->json(["success"=>false, "message"=> $validator->errors()], 200);
        }
        Post::create($validator->validated());    // validated() = return an array after validation.
        return response()->json(["success"=>true, "message"=> "Create Successfull"], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = User::find($id)->posts;
        return $posts;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
