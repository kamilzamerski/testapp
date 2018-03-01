<?php

namespace App\Libs\SmsApi;

interface SMSContentInterface
{
    public function setTo($to): void;

    public function setFrom($from): void;

    public function setContent($content): void;

    public function getTo();

    public function getFrom();

    public function getContent();
}