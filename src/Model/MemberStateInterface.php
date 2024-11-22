<?php

declare(strict_types=1);

namespace Dragonbe\ClarityCompass\Model;

interface MemberStateInterface
{
    /**
     * Retrieve the two-letter country code of a member
     * state.
     *
     * @return string
     */
    public function getCountryCode(): string;
    
    /**
     * Retrieve the English name of a member state.
     *
     * @return string
     */
    public function getMemberStateName(): string;
}
