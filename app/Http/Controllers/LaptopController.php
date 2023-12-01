<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;

class LaptopController extends Controller
{
    public function index()
    {
        $laptops = Laptop::all();
        return view('laptops.index', compact('laptops'));
    }

    public function create()
    {
        return view('laptops.create');
    }

    public function store(Request $request)
    {
        Laptop::create($request->all());
        return redirect()->route('laptops.index');
    }

    public function edit(Laptop $laptop)
    {
        return view('laptops.edit', compact('laptop'));
    }

    public function update(Request $request, Laptop $laptop)
    {
        $laptop->update($request->all());
        return redirect()->route('laptops.index');
    }

    public function destroy(Laptop $laptop)
    {
        $laptop->delete();
        return redirect()->route('laptops.index');
    }
}

