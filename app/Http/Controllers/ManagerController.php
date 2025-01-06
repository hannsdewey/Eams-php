<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Manager;
use Illuminate\View\View;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $managers = Manager::all();
        return view('manager.index')->with('managers', $managers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('manager.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Manager::create($input);
        return redirect('manager')->with('flash_message', 'Manager Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $managers = Manager::find($id);
        return view('manager.show')->with('managers', $managers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $managers = Manager::find($id);
        return view('manager.edit')->with('managers', $managers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $managers = Manager::find($id);
        $input = $request->all();
        $managers->update($input);
        return redirect('manager')->with('flash_message', 'Manager Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Manager::destroy($id);
        return redirect('manager')->with('flash_message', 'Manager deleted!');
    }
}