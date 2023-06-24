<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $bookService = 'http://bookservice.test:8080/api/';
    public function index(Request $request)
    {
        // dd($request);
        $client = new Client();
        try {
            $response = $client->get($this->bookService.'category/admin');
            $paginator = json_decode($response->getBody(), true);
            return view('home.category.list', compact('paginator'));
        } catch (\Exception $e) {
            dd($e);
            // return view('home.category.list')->withErrors(['errors' => 'Cannot connect to server']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.category.create');
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
        $client = new Client();
        try {
            $response = $client->delete($this->bookService.'category/'.$id);
            $categories = json_decode($response->getBody(), true);
            return redirect()->route('home.category.list')->with('success', 'Delete category successfully');
        } catch (\Exception $e) {
            dd($e);
            // return view('home.category.list')->withErrors(['errors' => 'Cannot connect to server']);
        }
    }
}