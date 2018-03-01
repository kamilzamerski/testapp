<?php

namespace App\Providers;

use App\Libs\SmsApi\SmsApi;
use GuzzleHttp\Client;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class SMSServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind('App\Libs\SmsApi', function ($app) {
            return new SmsApi(config('sms'), new Client());
        });
    }
}
