<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReserveRequest;
use App\Models\Reservation;
use App\Models\Service;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomePageController extends Controller
{
    public function landing()
    {
        return view('landing');
    }

    public function booking()
    {
        return view('booking');
    }

    public function reserve(ReserveRequest $request)
    {
        $service = Reservation::create([
            "appoint_date" => Carbon::parse($request->appoint_date),
            "car_model"    => $request->car_model,
            "branch"       => $request->branch,
            "service"      => $request->service,
            "email"        => $request->email,
            "contact_no"   => $request->contact_no,
            "remarks"      => $request->remarks,
            "code"         => 'none',
        ]);

        $this->createCode($service);

        alert()->success('Success Reservation!', 'Please see your email for confirmation.');

        return redirect()->back();
    }

    public function createCode($service)
    {
        Reservation::updateOrCreate(['id' => $service->id], [
            'code' => Factory::create()->bothify("??{$service->id}??"),
        ]);
    }
}
