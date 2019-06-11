<?php

namespace Oft\Generator;

use Oft\Generator\Dto\PaymentMethodDto;
use Oft\Generator\Dto\PayoutServiceDto;
use Oft\Generator\Dto\ProviderDto;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

class DataProvider
{
    const PATH_TO_DATA = __DIR__.'/../data';
    const PROVIDERS_FILENAME = 'payment_providers.json';
    const PAYMENT_METHODS_FILENAME = 'payment_methods.json';
    const PAYOUT_SERVICES_FILENAME = 'payout_services.json';
    const CONFIG_FILE_PATH = __DIR__.'/../mkdocs.yml';

    /* @var array */
    public $providers;

    /* @var array */
    public $paymentMethods;

    /* @var array */
    public $payoutServices;

    /* @var array */
    public $config;

    public function __construct()
    {
        try {
            $this->setProviders($this->getJsonContent(self::PATH_TO_DATA.self::PROVIDERS_FILENAME));
            $this->setPaymentMethods($this->getJsonContent(self::PATH_TO_DATA.self::PAYMENT_METHODS_FILENAME));
            $this->setPayoutServices($this->getJsonContent(self::PATH_TO_DATA.self::PAYOUT_SERVICES_FILENAME));
            $this->setConfig();
        } catch (\Exception $ex) {
            /* TODO: handle exceptions here */
        }
    }

    private function getJsonContent($path): array
    {
        try {
            return json_decode(file_get_contents($path), true);
        } catch (\Exception $ex) {
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
            $this->config = Yaml::parseFile(self::CONFIG_FILE_PATH);
        } catch (ParseException $exception) {
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
}