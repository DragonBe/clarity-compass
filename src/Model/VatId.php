<?php
declare(strict_types=1);

namespace Dragonbe\ClarityCompass\Model;

final class VatId implements VatIdInterface
{
	/**
     * Retrieve the country prefix from the VAT ID
     *
     * @return string
     */ 
	public function getCountryPrefix(): string;
    
    /**
     * Retrieve the VAT identifier
     *
     * @return string
     */
    public function getVatId(): string;
}