<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\ContactStoreRequest;
use App\Http\Requests\ContactUpdateRequest;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $contacts = Contacts::latest()->paginate(5);

        return view('contacts.index', compact('contacts'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactStoreRequest $request): RedirectResponse
    {
        Contacts::create($request->validated());
        
        return redirect()->route('contacts.index')
                        ->with('success', 'Contact created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacts $contact): View
    {
        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacts $contact): View
    {
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactUpdateRequest $request, Contacts $contact): RedirectResponse
    {
        $contact->update($request->validated());

        return redirect()->route('contacts.index')
                        ->with('success', 'Contact updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacts $contact): RedirectResponse
    {
        $contact->delete();

        return redirect()->route('contacts.index')
                        ->with('success', 'Contact deleted successfully.');
    }
}
