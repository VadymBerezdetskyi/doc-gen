<?php


namespace Oft\Generator;


trait ImagesTrait
{
    private function getProviderLogo(string $code): string
    {
        return "https://static.openfintech.io/payment_providers/$code/logo.svg?w=600&c=v0.59.26#w100";
    }

    private function getProviderIcon(string $code): string
    {
        return "https://static.openfintech.io/payment_providers/$code/icon.svg?w=600&c=v0.59.26#w100";
    }

    private function getFlagIcon(string $code): string
    {
        return "https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/flags/4x3/$code.svg#w24";
    }

    private function getPayoutMethodIcon(string $code): string
    {
        return "https://static.openfintech.io/payout_methods/$code/icon.png?w=278&c=v0.59.26#w40";
    }

}