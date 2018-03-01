<?php

namespace App\Libs\SmsApi\contents;

use App\Libs\SmsApi\SMSContentAbstract;
use App\User;

class SMSNotifyProductAvailable extends SMSContentAbstract
{

    public function __construct(User $user, $product)
    {
        $this->setFrom('Media Shop');
        $this->setTo($user->email);
        $this->setContent('Product ' . $product . ' is now available!');
    }
}