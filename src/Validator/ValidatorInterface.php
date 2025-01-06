<?php

declare(strict_types=1);

namespace DragonBe\ClarityCompass\Validator;

use DragonBe\ClarityCompass\Model\VatIdInterface;

interface ValidatorInterface
{
    /**
     * Validates a given VAT ID with the requirements
     * for the member state the value belongs to
     *
     * @param VatIdInterface $vatId
     * @return bool
     */
    public function isValid(VatIdInterface $vatId): bool;
}
