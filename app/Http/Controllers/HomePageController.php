<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReserveRequest;
use App\Mail\ReservationNotifyMail;
use App\Models\Reservation;
use App\Models\Service;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
            "name"         => $request->name,
            "branch"       => $request->branch,
            "service"      => $request->service,
            "email"        => $request->email,
            "contact_no"   => $request->contact_no,
            "remarks"      => $request->remarks,
            "code"         => 'none',
        ]);

        $this->createCode($service);

        Mail::to([$request->email])
            ->bcc(['renier.trenuela@gmail.com'])
            ->send(new ReservationNotifyMail($request->all(), $this->createCode($service)));

        alert()->success('Success Reservation!', 'Please see your email for confirmation.');

        return redirect()->back();
    }

    public function createCode($service)
    {
        $code = Factory::create()->bothify("??{$service->id}??");
        Reservation::updateOrCreate(['id' => $service->id],
            ['code' => $code,]);

        return $code;
    }
}
