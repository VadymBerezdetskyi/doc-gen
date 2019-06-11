<?php

namespace Oft\Generator;

use Oft\Generator\Dto\PaymentMethodDto;
use Oft\Generator\Dto\PayoutServiceDto;
use Oft\Generator\Dto\ProviderDto;
use Oft\Generator\Service\PaymentMethodOverviewBuilder;
use Oft\Generator\Service\PayoutServiceOverviewBuilder;
use Oft\Generator\Service\PayoutServicesListBuilder;
use Oft\Generator\Service\ProviderOverviewBuilder;
use Oft\Generator\Service\ProvidersListBuilder;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Filesystem\Filesystem;

class DocBuilder
{
    const PATH_TO_DOCS = __DIR__.'/../docs';

    /* @var DataProvider */
    private $dataProvider;

    /* @var Filesystem */
    private $fs;

    public function __construct()
    {
        $this->fs = new Filesystem();
        $this->dataProvider = new DataProvider();
    }

    private function writeFile(string $path, string $content): void
    {
        try {
            $this->fs->touch($path);
            $this->fs->chmod($path, 0777);
            $this->fs->dumpFile($path, $content);
        } catch (IOExceptionInterface $exception) {
            /* FIXME: handle error */
        }
    }

    public function build(): void
    {
        /* @var ProviderDto $provider */
        foreach ($this->dataProvider->getProviders() as $provider) {
            $providerOverviewBuilder = new ProviderOverviewBuilder($this->dataProvider, $provider);
            $providerOverviewBuilder->build();
            $this->writeFile(self::PATH_TO_DOCS.'/providers'.$provider->code.'/index.md', $providerOverviewBuilder->getContent());
        }

        $providersListBuilder = new ProvidersListBuilder($this->dataProvider);
        $providersListBuilder->build();
        $this->writeFile(self::PATH_TO_DOCS.'/providers/index.md', $providersListBuilder->getContent());

        /* @var PayoutServiceDto $payoutService */
        foreach ($this->dataProvider->getPayoutServices() as $payoutService) {
            $payoutServiceOverviewBuilder = new PayoutServiceOverviewBuilder($this->dataProvider, $payoutService);
            $payoutServiceOverviewBuilder->build();
            $this->writeFile(self::PATH_TO_DOCS.'/payout-services'.$payoutService->code.'/index.md', $payoutServiceOverviewBuilder->getContent());
        }

        $payoutServicesListBuilder = new PayoutServicesListBuilder($this->dataProvider);
        $payoutServicesListBuilder->build();
        $this->writeFile(self::PATH_TO_DOCS.'/payout-services/index.md', $payoutServicesListBuilder->getContent());

        /* @var PaymentMethodDto $method */
        foreach ($this->dataProvider->getPaymentMethods() as $method) {
            $paymentMethodOverviewBuilder = new PaymentMethodOverviewBuilder($this->dataProvider, $method);
            $paymentMethodOverviewBuilder->build();
            $this->writeFile(self::PATH_TO_DOCS.'/payment-methods'.$method->code.'/index.md', $payoutServicesListBuilder->getContent());
        }

        /*
         * TODO: write MKDOCS.YML
         * */
    }
}