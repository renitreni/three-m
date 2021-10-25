<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReservationNotifyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $attr;
    public $code;

    /**
     * Create a new message instance.
     *
     * @param $attr
     * @param $code
     */
    public function __construct($attr, $code)
    {
        $this->attr = $attr;
        $this->code = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $appoint_date = Carbon::parse($this->attr['appoint_date'])->format('F j, y H:iA');

        return $this->subject('3m Luxury Horizon - Confirmation')->html("
            <p>Hi {$this->attr['name']},</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;Your request of resevation to us has been granted.</p><br>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;National ID: {$this->attr['national_id']}</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Contact No.: {$this->attr['contact_no']}</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Service: {$this->attr['service']}</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Car Model: {$this->attr['car_model']}</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Booked Date: {$appoint_date}</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Branch: {$this->attr['branch']}</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Remarks: {$this->attr['remarks']}</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;Please use this code <strong>{$this->code}</strong> for you personal verification.</p>
            <p><br>Thanks you very much,<br>Luxury Horizon - 3M</p>
        ");
    }
}
