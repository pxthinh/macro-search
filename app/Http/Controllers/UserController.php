<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        $collection = collect([
//                ['price' => 100, 'quantity' => 2], ['price' => 200, 'quantity' => 1], ['price' => 150, 'quantity' => 4]
//            ]
//        );
//        $sumPrice = $collection->sumBy('price');
//        $averageQuantity = $collection->averageBy('quantity');

//        $response = Http::github()->get('/');

//        $collection = collect(['first', 'second', '12/12/2024']);
//        dd($collection->toUpper());

        $query = User::with('company');

//        if (isset($request->keyword)) {
//            $query->where(function($q) use ($request) {
//                $q->where('name', 'like', '%' . $request->keyword . '%')
//                    ->orWhere('email', 'like', '%' . $request->keyword . '%')
//                    ->orWhereHas('company', function ($q) use ($request) {
//                        $q->where('name', 'like', '%' . $request->keyword . '%')
//                            ->orWhere('bio', 'like', '%' . $request->keyword . '%');
//                    });
//            });
//        }

        if (isset($request->keyword)) {
            $query->whereLike(['name', 'email', 'company.name', 'company.bio'], $request->keyword);
        }
        $users = $query->paginate(30);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        //
    }
}
