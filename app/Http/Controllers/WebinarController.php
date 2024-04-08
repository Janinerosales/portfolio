<?php

namespace App\Http\Controllers;
use App\Models\Webinar;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $webinars = Webinar::get();
        return view('webinar.index', compact('webinars'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if(auth()->user()->role =="spectator"){
            return abort(403, 'Denied Access');
        }
        return view('webinar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Webinar::create($request->all());
        return redirect()->route('webinars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Webinar $webinar)
    {
        //
        if(auth()->user()->role =="spectator"){
            return abort(403, 'Denied Access');
        }
        return view('webinar.edit', compact('webinar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Webinar $webinar): RedirectResponse
    {
        //
        $webinar->update($request->all());

        return redirect()->route('webinars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Webinar $webinar): RedirectResponse
    {
        //
        $webinar->delete();

        return redirect()->route('webinars.index');
    }
}
