<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class userExpireWarning extends Mailable
{
    use Queueable, SerializesModels;

    protected $websiteName;
    protected $lastCanUseDays;
    protected $websiteUrl;
    protected $websiteShopUrl;

    public function __construct($websiteName, $lastCanUseDays, $websiteUrl)
    {
        $this->websiteName = $websiteName;
        $this->lastCanUseDays = $lastCanUseDays;
        $this->websiteUrl = $websiteUrl;
        $this->websiteShopUrl = $websiteUrl . '/user/goodsList';
    }

    public function build()
    {
        return $this->view('emails.userExpireWarning')->subject('账号过期提醒')->with([
            'websiteName'    => $this->websiteName,
            'lastCanUseDays' => $this->lastCanUseDays,
            'websiteUrl'     => $this->websiteUrl,
            'websiteShopUrl' => $this->websiteShopUrl
        ]);
    }
}
