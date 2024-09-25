<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\FavoritesStoreRequest;
use App\Http\Requests\FavoritesUpdateRequest;

class FavoritesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $favorites = favorites::latest()->paginate(5);

        return view('favorites.index', compact('favorites'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return View('favorites.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FavoritesStoreRequest $request): RedirectResponse
    {
        Favorites::create($request->validated());
        
        return redirect()->route('favorites.index')
                        ->with('success', 'Favorite created succesfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Favorites $favorites): View
    {
        return view('favorites.show', compact('favorites'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorites $favorites)
    {
        return view('favorites.edit', compact('favorites'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FavoritesUpdateRequest $request, Favorites $favorites): RedirectResponse
    {
        $favorites->update($request->validated());

        return redirect()->route('favorites.index')
                        ->with('success', 'Favorite updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favorites $favorites): RedirectResponse
    {
        $favorites->delete();

        return redirect()->route('favorites.index')
                        ->with('success', 'Favorite deleted successfully.');
    }
}
