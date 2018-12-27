<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class userTrafficWarning extends Mailable
{
    use Queueable, SerializesModels;

    protected $usedPercent;
    protected $websiteUrl;
    protected $websiteShopUrl;

    public function __construct($usedPercent)
    {
        $this->usedPercent = $usedPercent;
        $this->websiteUrl = $websiteUrl;
        $this->websiteShopUrl = $websiteUrl . '/user/goodsList';
    }

    public function build()
    {
        return $this->view('emails.userTrafficWarning')->subject('流量警告')->with([
            'usedPercent' => $this->usedPercent
        ]);
    }
}
