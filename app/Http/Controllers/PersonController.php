<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Person;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PersonController extends Controller
{
    public function index()
    {
        return Inertia::render('Person/Index', [
            'people' => Person::all()
        ]);
    }

    public function store(Request $request)
    {
        $post = new Person($request->all());
        $post->save();
        return redirect()->action(
            [PersonController::class, 'index']
        );
    }

    public function create()
    {
        return Inertia::render('Person/Create');
    }

    public function show($id) {
        $person = Person::where('id', $id)->first();
        return Inertia::render('Person/Create', $person);
    }
}
