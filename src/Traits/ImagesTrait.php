<?php


namespace Oft\Generator\Traits;


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

    private function getPayoutMethodLogo(string $code): string
    {
        return "https://static.openfintech.io/payout_methods/$code/logo.png?w=400&c=v0.59.26#w24";
    }

    private function getPaymentMethodLogo(string $code): string
    {
        return "https://static.openfintech.io/payment_methods/$code/logo.svg?w=400&c=v0.59.26#w200";
    }

    private function getPaymentMethodIcon(string $code): string
    {
        return "https://static.openfintech.io/payment_methods/$code/icon.svg?w=400&c=v0.59.26#w100";
    }
}