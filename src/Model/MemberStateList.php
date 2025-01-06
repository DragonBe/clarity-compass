<?php

declare(strict_types=1);

namespace DragonBe\ClarityCompass\Model;

final class MemberStateList
{
    /**
     * Returns a list of all EU member states who provide
     * VAT ID verification
     *
     * @return array<string, MemberStateInterface>
     */
    public static function getMemberStates(): array
    {
        return [
            'AT' => new MemberState('AT', 'Austria'),
            'BE' => new MemberState('BE', 'Belgium'),
            'BG' => new MemberState('BG', 'Bulgaria'),
            'CY' => new MemberState('CY', 'Cyprus'),
            'CZ' => new MemberState('CZ', 'Czech Republic'),
            'DE' => new MemberState('DE', 'Germany'),
            'DK' => new MemberState('DK', 'Denmark'),
            'EE' => new MemberState('EE', 'Estonia'),
            'EL' => new MemberState('EL', 'Greece'),
            'ES' => new MemberState('ES', 'Spain'),
            'FI' => new MemberState('FI', 'Finland'),
            'FR' => new MemberState('FR', 'France'),
            'HR' => new MemberState('HR', 'Croatia'),
            'HU' => new MemberState('HU', 'Hungary'),
            'IE' => new MemberState('IE', 'Ireland'),
            'IT' => new MemberState('IT', 'Italy'),
            'LT' => new MemberState('LT', 'Lithuania'),
            'LU' => new MemberState('LU', 'Luxembourg'),
            'LV' => new MemberState('LV', 'Latvia'),
            'MT' => new MemberState('MT', 'Malta'),
            'NL' => new MemberState('NL', 'Netherlands'),
            'PL' => new MemberState('PL', 'Poland'),
            'PT' => new MemberState('PT', 'Portugal'),
            'RO' => new MemberState('RO', 'Romania'),
            'SE' => new MemberState('SE', 'Sweden'),
            'SI' => new MemberState('SI', 'Slovenia'),
            'SK' => new MemberState('SK', 'Slovakia'),
            'XI' => new MemberState('XI', 'Northern Ireland'),
        ];
    }
}
