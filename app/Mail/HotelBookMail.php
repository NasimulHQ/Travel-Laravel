<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HotelBookMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $client_no  = '';
    public $cl_bed    = '';
    public $title      = '';
    public function __construct($client_no, $cl_bed, $title)
    {
        $this->client_no = $client_no;
        $this->cl_bed   = $cl_bed;
        $this->title     = $title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Hotel Booking Confirmation')->view('emails.hotelbookmail');
    }
}
