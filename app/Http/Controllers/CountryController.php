<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    public function create()
    {
        return view('countries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'area_km2' => 'required|numeric|min:0|max:99999999.99',
            'population' => 'required|integer|min:0',
        ]);

        Country::create($request->all());

        return redirect()->route('countries.index')->with('success', 'Valsts veiksmīgi pievienota!');
    }

    public function show(Country $country)
    {
        $country->load('cities');
        return view('countries.show', compact('country'));
    }

    public function edit(Country $country)
    {
        return view('countries.edit', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'area_km2' => 'required|numeric|min:0|max:99999999.99',
            'population' => 'required|integer|min:0',
        ]);

        $country->update($request->all());

        return redirect()->route('countries.index')->with('success', 'Valsts atjaunināta!');
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('countries.index')->with('success', 'Valsts dzēsta.');
    }

public function apiIndex()
{
    return response()->json(
        \App\Models\Country::with('cities')->get()
    );
}
}
