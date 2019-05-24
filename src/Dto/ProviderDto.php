<?php

namespace Oft\Generator\Dto;

class ProviderDto extends BaseDto
{
    /** @var string */
    public $code;

    /** @var string */
    public $vandor;

    /** @var array|null */
    public $categories;

    /** @var array|null */
    public $countries;

    /** @var array|null */
    public $paymentMethod;

    /** @var array|null */
    public $metadata;

    /** @var array */
    public $name;

    public function getName(): Translatable
    {
        return Translatable::fromArray($this->name);
    }
}