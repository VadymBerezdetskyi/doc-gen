<?php

namespace Oft\Generator;

use Oft\Generator\Builders\PaymentMethodOverviewBuilder;
use Oft\Generator\Builders\PayoutServiceOverviewBuilder;
use Oft\Generator\Builders\PayoutServicesListBuilder;
use Oft\Generator\Builders\ProviderOverviewBuilder;
use Oft\Generator\Builders\ProvidersListBuilder;

class DocBuilder
{
    const PATH_TO_RESOURCES = __DIR__.'/../resources';
    const PATH_TO_DATA = __DIR__.'/../data';
    const PATH_TO_DOCS = __DIR__.'/../docs';
    const PATH_TO_DOCS_CONFIG = __DIR__.'/../mkdocs.yml';

    /* @var ProvidersListBuilder */
    private $providersListBuilder;

    /* @var ProviderOverviewBuilder */
    private $providerOverviewBuilder;

    /* @var PaymentMethodOverviewBuilder */
    private $paymentMethodOverviewBuilder;

    /* @var PayoutServicesListBuilder */
    private $payoutServicesListBuilder;

    /* @var PayoutServiceOverviewBuilder */
    private $payoutServiceOverviewBuilder;

    public function __construct()
    {
        /* TODO: */
    }

    public function build(): void
    {
        /* TODO: */

    }

}