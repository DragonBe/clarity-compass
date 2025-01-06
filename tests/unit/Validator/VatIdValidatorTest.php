<?php

declare(strict_types=1);

namespace DragonBe\ClarityCompassTest\Validator;

use DragonBe\ClarityCompass\Model\MemberState;
use DragonBe\ClarityCompass\Model\MemberStateList;
use DragonBe\ClarityCompass\Model\VatId;
use DragonBe\ClarityCompass\Model\VatIdInterface;
use DragonBe\ClarityCompass\Validator\VatIdValidator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(VatIdValidator::class)]
#[CoversClass(MemberState::class)]
#[CoversClass(MemberStateList::class)]
#[CoversClass(VatId::class)]
final class VatIdValidatorTest extends TestCase
{
    #[DataProvider('InvalidVatIdProvider')]
    public function testVatIdValidatorRejectsInvalidValues(VatIdInterface $vatId): void
    {
        $validator = new VatIdValidator();
        $this->assertFalse($validator->isValid($vatId));
    }

    #[DataProvider('ValidVatIdProvider')]
    public function testVatIdValidatorAcceptsValidValues(VatIdInterface $vatId): void
    {
        $validator = new VatIdValidator();
        $this->assertTrue($validator->isValid($vatId));
    }

    /**
     * @return array<string, array<int, VatId>>
     */
    public static function invalidVatIdProvider(): array
    {
        return [
            'Wrong member state' => [new VatId('AB', '1234567890')]
        ];
    }

    /**
     * @return array<string, array<int, VatId>>
     */
    public static function validVatIdProvider(): array
    {
        return [
            'B-Rail' => [new VatId('BE', '0203430576')],
            'NS Groep' => [new VatId('NL', '803979988B01')],
            'Deutsche Bahn' => [new VatId('DE', '811569869')],
            'Societe Nationale des Chemins de fer Francais' => [new VatId('FR', '35552049447')],
        ];
    }
}
