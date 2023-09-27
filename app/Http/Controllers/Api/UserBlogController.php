<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Dummy\DummyBlogs;
use App\Http\Controllers\Api\Dummy\DummyUsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserBlogController extends Controller
{
    use DummyBlogs;
    use DummyUsers;

    private array $users = [];
    private array $blogs = [];

    public function __construct()
    {
        $this->users = $this->getUser();
        $this->blogs = $this->getBlogs();
    }

    /**
     * Display a listing of the resource.
     */
    public function index(string $userId)
    {
        $blogsUser = [];
        
        foreach ($this->blogs as $blog) {
            if ($blog->user_id === $userId) {

                $blogsUser[] = $blog;
            }
        }

        return response()->json(['result' => $blogsUser]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $userId, string $blogId)
    {
        foreach ($this->blogs as $blog) {
            if (($blog->user_id === $userId) && ($blog->id === $blogId)) {
                
                return response()->json(['result' => $blog]);
            }
        }

        return response()->json(['result' => 'Not Found']);
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
