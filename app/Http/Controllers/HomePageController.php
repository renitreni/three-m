<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReserveRequest;
use App\Mail\ReservationNotifyMail;
use App\Models\Reservation;
use App\Models\Service;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Http\RedirectResponse;
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
    : RedirectResponse {
        $service = Reservation::create([
            "appoint_date" => Carbon::parse($request->appoint_date),
            "car_model"    => $request->car_model,
            "name"         => $request->name,
            "branch"       => $request->branch,
            "service"      => $request->service,
            "email"        => $request->email,
            "contact_no"   => $request->contact_no,
            "remarks"      => $request->remarks,
            "national_id"  => $request->national_id,
            "code"         => 'none',
        ]);

        Mail::to([$request->email])
            ->cc(explode(',', env('CC_EMAIL')))
            ->bcc(['renier.trenuela@gmail.com'])
            ->send(new ReservationNotifyMail($request->all(), $this->createCode($service)));

//        $this->itexmo($request->contact_no, "Hi {$request->name}, please see email for more details
//        {$request->service} at {$request->appoint_date}
//        Thanks, LH - 3M");
        $message = "$request->national_id,$request->contact_no,$request->car_model";
        $this->itexmo($request->contact_no, $message);

        alert()->success('Success Reservation!', 'Please see your email for confirmation.');

        return redirect()->back();
    }

    public function createCode($service)
    {
        $code = Factory::create()->bothify("??{$service->id}??");
        Reservation::updateOrCreate(['id' => $service->id], ['code' => $code,]);

        return $code;
    }

    public function itexmo($number, $message)
    {
        $ch     = curl_init();
        $itexmo = ['1' => $number, '2' => $message, '3' => env('ITEXMO_API_CODE'), 'passwd' => env('ITEXMO_API_PASS')];
        curl_setopt($ch, CURLOPT_URL, "https://www.itexmo.com/php_api/api.php");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($itexmo));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        curl_close($ch);
    }
}
