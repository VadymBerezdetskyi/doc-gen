<?php

namespace Oft\Generator;

use Oft\Generator\Dto\PaymentMethodDto;
use Oft\Generator\Dto\PayoutServiceDto;
use Oft\Generator\Dto\ProviderDto;

class DataProvider
{
    const PATH_TO_DATA = __DIR__.'/../data';
    const PROVIDERS_FILENAME = '/payment_providers.json';
    const PAYMENT_METHODS_FILENAME = '/payment_methods.json';
    const PAYOUT_SERVICES_FILENAME = '/payout_services.json';
    const CONFIG_FILE_PATH = __DIR__.'/../mkdocs.yml';

    /* @var array */
    private $providers;

    /* @var array */
    private $paymentMethods;

    /* @var array */
    private $payoutServices;

    /* @var string */
    private $config;

    public function __construct()
    {
        try {
            $this->setProviders($this->getJsonContent(self::PATH_TO_DATA.self::PROVIDERS_FILENAME));
            $this->setPaymentMethods($this->getJsonContent(self::PATH_TO_DATA.self::PAYMENT_METHODS_FILENAME));
            $this->setPayoutServices($this->getJsonContent(self::PATH_TO_DATA.self::PAYOUT_SERVICES_FILENAME));
            $this->setConfig();
        } catch (\Throwable $ex) {
            echo $ex->getMessage();
        }
    }

    private function getJsonContent($path): array
    {
        try {
            return json_decode(file_get_contents($path), true);
        } catch (\Throwable $ex) {
            throw $ex;
        }
    }

    private function setProviders(array $data): void
    {
        $tmp = [];

        foreach ($data as $item) {
            array_push($tmp, ProviderDto::fromArray($item));
        }

        $this->providers = $tmp;
    }

    private function setPaymentMethods(array $data): void
    {
        $tmp = [];

        foreach ($data as $item) {
            array_push($tmp, PaymentMethodDto::fromArray($item));
        }

        $this->paymentMethods = $tmp;
    }

    private function setPayoutServices(array $data): void
    {
        $tmp = [];

        foreach ($data as $item) {
            array_push($tmp, PayoutServiceDto::fromArray($item));
        }

        $this->payoutServices = $tmp;
    }

    private function setConfig(): void
    {
        try {
            $yaml = file_get_contents(self::CONFIG_FILE_PATH);
            $this->config = substr($yaml, 0, strpos($yaml, 'nav'));
        } catch (\Throwable $exception) {
            throw $exception;
        }
    }

    public function getProviders(): array
    {
        return $this->providers;
    }

    public function getPaymentMethods(): array
    {
        return $this->paymentMethods;
    }

    public function getPayoutServices(): array
    {
        return $this->payoutServices;
    }

    public function getConfig(): string
    {
        return $this->config ?? '';
    }
}