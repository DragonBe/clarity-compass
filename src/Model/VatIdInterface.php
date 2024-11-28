<?php

declare(strict_types=1);

namespace DragonBe\ClarityCompass\Model;

interface VatIdInterface
{
    /**
     * Retrieve the country prefix from the VAT ID
     *
     * @return string
     */
    public function getCountryPrefix(): string;

    /**
     * Retrieve the identifier part from the VAT ID
     *
     * @return string
     */
    public function getVatIdentifier(): string;
}
