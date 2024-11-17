<?php

declare(strict_types=1);

namespace DragonBe\ClarityCompassTest\Model;

use Dragonbe\ClarityCompass\Model\VatId;
use Dragonbe\ClarityCompass\Model\VatIdInterface;
use PHPUnit\Framework\Attributes\CoversClass;
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
}
