<?php

declare(strict_types=1);

namespace DragonBe\ClarityCompass\Validator;

use DragonBe\ClarityCompass\Model\MemberStateList;
use DragonBe\ClarityCompass\Model\VatIdInterface;

final class VatIdValidator implements ValidatorInterface
{
    /**
     * @inheritDoc
     */
    public function isValid(VatIdInterface $vatId): bool
    {
        $memberStates = MemberStateList::getMemberStates();
        if (!isset($memberStates[$vatId->getCountryPrefix()])) {
            return false;
        }
        return true;
    }
}
