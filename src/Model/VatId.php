<?php

declare(strict_types=1);

namespace Dragonbe\ClarityCompass\Model;

final class VatId implements VatIdInterface
{
    private string $countryPrefix;

    private string $vatIdentifier;


    public function __construct(string $countryPrefix = '', string $vatIdentifier = '')
    {
        $this->countryPrefix = $countryPrefix;
        $this->vatIdentifier = $vatIdentifier;
    }

    /**
     * @inheritDoc
     */
    public function getCountryPrefix(): string
    {
        return $this->countryPrefix;
    }

    /**
     * @inheritDoc
     */
    public function getVatIdentifier(): string
    {
        return $this->vatIdentifier;
    }
}
