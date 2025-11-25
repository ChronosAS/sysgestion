<?php

namespace App\Concerns\Telegram;

use Telegram\Bot\Laravel\Facades\Telegram;

trait ElderPensionChannel
{
    protected $telegram;

    public function showBot()
    {
        $this->telegram = Telegram::bot('SysgestionBot')->getMe();

        return $this->telegram;
    }
}
