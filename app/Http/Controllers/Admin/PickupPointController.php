<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PickupPoint;
use App\Http\Requests\StorePickupPointRequest;
use App\Http\Requests\UpdatePickupPointsRequest;

class PickupPointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePickupPointRequest $request)
    {
        PickupPoint::create($request->all());
        return redirect()->back()->with('success', 'точка самовывоза успешно добавлена.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PickupPoint $pickupPoint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PickupPoint $pickupPoint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePickupPointsRequest $request, PickupPoint $pickupPoint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PickupPoint $pickupPoint)
    {
        $pickupPoint->delete();
        return redirect()->back()->with('success', 'точка самовывоза успешно удалена.');
    }
}
