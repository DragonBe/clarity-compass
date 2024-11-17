<?php

declare(strict_types=1);

namespace DragonBe\ClarityCompassTest\Model;

use Dragonbe\ClarityCompass\Model\VatId;
use Dragonbe\ClarityCompass\Model\VatIdInterface;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(VatId::class)]
class VatIdTest extends TestCase
{
    #[Test]
    public function testVatIdObjectImplementsVatIdInterface(): void
    {
        $vatId = new VatId();
        $this->assertInstanceOf(VatIdInterface::class, $vatId);
    }

    #[Test]
    public function testVatIdObjectIsEmptyWithoutParameters(): void
    {
        $vatId = new VatId();
        $this->assertSame('', $vatId->getCountryPrefix());
        $this->assertSame('', $vatId->getVatIdentifier());
    }

    #[Test]
    #[DataProvider('vatIdProvider')]
    public function testVatIdObjectIsPopulatedWithGivenParameters(string $countryPrefix, string $vatIdentifier): void
    {
        $vatId = new VatId($countryPrefix, $vatIdentifier);
        $this->assertSame($countryPrefix, $vatId->getCountryPrefix());
        $this->assertSame($vatIdentifier, $vatId->getVatIdentifier());
    }

    public static function vatIdProvider(): array
    {
        return [
            'BE12345678' => ['BE', '12345678'],
            'NL12345678' => ['NL', '12345678'],
            'DE12345678' => ['DE', '12345678'],
            'FR12345678' => ['FR', '12345678'],
        ];
    }
}
