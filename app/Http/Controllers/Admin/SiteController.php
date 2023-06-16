<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sites = Site::orderBy('created_at', 'desc')->get();
        return view('admin.site.index', [
            'sites' => $sites
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.site.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Site::create($request->all());
        return redirect()->back()->with('success', 'Город успешно добавлен.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Site $site)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Site $site)
    {
        $phones = $site->phones()->get();
        $pickupPoints = $site->pickupPoints()->get();
        return view('admin.site.edit', [
            'site' => $site,
            'phones' => $phones,
            'pickupPoints' => $pickupPoints
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Site $site)
    {
        $site->update(
            $request->all()
        );
        return redirect()->back()->with('success', 'Город успешно обновлен.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Site $site)
    {
        $site->delete();
        return redirect()->back()->with('success', 'Город успешно удален.');
    }
}
