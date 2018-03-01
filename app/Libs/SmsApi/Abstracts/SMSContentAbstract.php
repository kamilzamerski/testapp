<?php

namespace App\Libs\SmsApi;


abstract class SMSContentAbstract implements SMSContentInterface
{
    protected $to;
    protected $from;
    protected $content;

    /**
     * @param $to
     */
    public function setTo($to): void
    {
        $this->to = $to;
    }

    /**
     * @param $from
     */
    public function setFrom($from): void
    {
        $this->from = $from;
    }

    /**
     * @param $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }
}