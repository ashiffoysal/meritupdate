<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class StudentRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

  
    protected $user;
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = $this->user;
        $alltutor=User::where('user_type',2)->where('is_tutor_approve',1)->orderBy('id','DESC')->select(['name','id','photo'])->limit(3)->get();
        return $this->view('mail.studentregistration', compact('user','alltutor'));
    }
}
