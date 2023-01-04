<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FlightBookMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $flight_no  = '';
    public $tr_seat    = '';
    public $title      = '';
    public function __construct($flight_no, $tr_seat, $title)
    {
        $this->flight_no = $flight_no;
        $this->tr_seat   = $tr_seat;
        $this->title     = $title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Flight Booking Confirmation')->view('emails.flightbookmail');
    }
}
