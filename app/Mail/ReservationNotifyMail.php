<?php

namespace App\Mail;

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
        return $this->subject('3m Luxury Horizon - Confirmation')->html("
            <p>Hi {$this->attr['name']},</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;Your request of resevation to us has been granted.</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;Please use this code <strong>{$this->code}</strong> for you personal verification.</p>
            <p><br>Thanks you very much,<br>Luxury Horizon - 3M</p>
        ");
    }
}
