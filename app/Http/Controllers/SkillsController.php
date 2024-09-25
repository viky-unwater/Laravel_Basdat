<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillsStoreRequest as RequestsSkillsStoreRequest;
use App\Http\Requests\SkillsUpdateRequest as RequestsSkillsUpdateRequest;
use App\Models\Skills;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\SkillsStoreRequest;
use App\Http\Requests\SkillsUpdateRequest;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $skills = skills::latest()->paginate(5);

        return view('skills.index', compact('skills'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return View('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillsStoreRequest $request): RedirectResponse
    {
        Skills::create($request->validated());
        
        return redirect()->route('skills.index')
                        ->with('success', 'Skill created succesfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skills $skills): View
    {
        return view('skills.show', compact('skills'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skills $skills)
    {
        return view('skills.edit', compact('skills'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillsUpdateRequest $request, Skills $skills): RedirectResponse
    {
        $skills->update($request->validated());

        return redirect()->route('skills.index')
                        ->with('success', 'Skill updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skills $skills): RedirectResponse
    {
        $skills->delete();

        return redirect()->route('skills.index')
                        ->with('success', 'Skill deleted successfully.');
    }
}
