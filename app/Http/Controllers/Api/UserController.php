<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Dummy\DummyUsers;

class UserController extends Controller
{

    use DummyUsers;

    private array $users = [];

    public function __construct()
    {
        $this->users = $this->getUser();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['result' => $this->users]);
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
    public function show(string $id)
    {
        foreach ($this->users as $user) {
            if ($user->id === $id) {
                
                return response()->json(['result' => $user]);
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
