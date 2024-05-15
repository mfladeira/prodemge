<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AddressController extends Controller
{
    public function create($id)
    {
        return Inertia::render('Address/Create');
    }


    public function store(Request $request)
    {
        $post = new Address($request->all());
        $post->save();
        return redirect()->action(
            [PersonController::class, 'index']
        );
    }
}
