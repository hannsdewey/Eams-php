<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Manager;
use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $teams = Team::all();
        return view('team.index')->with('teams', $teams);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        // Fetch all managers and employees (no filtering)
        $managers = Manager::all();
        $employees = Employee::all();

        // Pass both managers and employees to the view
        return view('team.create', [
            'managers' => $managers,
            'employees' => $employees
        ]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'teamname' => 'required|string|max:255',
            'teammanager' => 'required|exists:manager,id',
            'teamemployees' => 'nullable|array',
            'teamemployees.*' => 'exists:employee,id', // Ensure each selected employee exists
        ]);

        // Create the team
        Team::create([
            'teamname' => $validated['teamname'],
            'teammanager' => $validated['teammanager'],
            'teamemployees' => $validated['teamemployees'] ?? [], // Store employees as JSON
        ]);

        return redirect('teams')->with('flash_message', 'Team Added!');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $teams = Team::find($id);
        return view('team.show')->with('teams', $teams);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $teams = Team::find($id);
        return view('team.edit')->with('teams', $teams);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $teams = Team::find($id);
        $input = $request->all();
        $teams->update($input);
        return redirect('team')->with('flash_message', 'Team Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Team::destroy($id);
        return redirect('teams')->with('flash_message', 'Team deleted!');
    }
}