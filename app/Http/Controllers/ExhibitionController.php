<?php

namespace App\Http\Controllers;

use App\Models\Exhibition;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ExhibitionController extends Controller
{
    public function index(): View
    {
        $exhibitions = Exhibition::query()
            ->where('is_published', true)
            ->orderBy('start_date')
            ->get();

        return view(
            'exhibitions.index',
            ['exhibitions' => $exhibitions]
        );
    }

    public function show(string $slug): View
    {
        $exhibition = Exhibition::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        return view(
            'exhibitions.show',
            ['exhibition' => $exhibition]
        );
    }

    public function admin(): View
    {
        $exhibitions = Exhibition::query()
            ->orderBy('start_date')
            ->get();

        return view(
            'admin.exhibitions',
            ['exhibitions' => $exhibitions]
        );
    }

    public function edit(Exhibition $exhibition): View
    {
        return view(
            'admin.edit-exhibition',
            ['exhibition' => $exhibition]
        );
    }

    public function update(Request $request, Exhibition $exhibition)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'nullable|string',
            'netx_asset_id' => 'nullable|string|max:255',
            'is_published' => 'nullable|boolean',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        $validated['is_published'] = $request->has('is_published');

        $exhibition->update($validated);

        return redirect('/admin/exhibitions');
    }

    public function create(): View
    {
        return view('admin.create-exhibition');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:exhibitions,slug',
            'description' => 'nullable|string',
            'netx_asset_id' => 'nullable|string|max:255',
            'is_published' => 'nullable|boolean',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        $validated['is_published'] = $request->has('is_published');

        Exhibition::create($validated);

        return redirect('/admin/exhibitions');
    }
}
