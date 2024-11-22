<?php

declare(strict_types=1);

namespace DragonBe\ClarityCompass\Model;

final class MemberState implements MemberStateInterface
{
    private string $countryCode;
    private string $memberStateName;
    
    public function __construct(
        string $countryCode = '',
        string $memberStateName = ''
    )
    {
        $this->countryCode = $countryCode;
        $this->memberStateName = $memberStateName;
    }
    
    /**
     * @inheritDoc
     */
    public function getCountryCode(): string
    {
        return $this->countryCode();
    }
    
    /**
     * @inheritDoc
     */
    public function getMemberStateName(): string
    {
        return $this->memberStateName();
    }
}
