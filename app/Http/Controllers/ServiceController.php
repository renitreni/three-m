<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Yajra\DataTables\DataTables;

class ServiceController extends Controller
{
    public function index()
    {
        Inertia::setRootView('layouts/app');

        return Inertia::render('Services', [
            'data' => [
                'services_table_link'   => route('services.table'),
                'services_store_link'   => route('services.store'),
                'services_destroy_link' => route('services.delete'),
            ],
        ]);
    }

    public function table()
    {
        return DataTables::of(Service::all())->setTransformer(function ($data) {
            $data = collect($data)->toArray();
            $data['is_promo'] = (bool) $data['is_promo'];

            return $data;
        })->make(true);
    }

    public function store(Request $request)
    {
        Service::updateOrCreate(['id' => $request->id], $request->all());
    }

    public function destroy(Request $request)
    {
        Service::destroy($request->id);
    }
}
