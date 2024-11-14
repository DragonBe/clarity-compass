<?php
declare(strict_types=1);

namespace DragonBe\ClarityCompassTest\Model;

use DragonBe\ClarityCompass\Model\VatId;
use DragonBe\ClarityCompass\Model\VatIdInterface;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framwork\TestCase;

class VatIdTest extends TestCase
{
	#[Test]
	public function testVatIdObjectImplementsVatIdInterface(): void
    {
        $vatId = new VatId();
        $this->assertInstanceOf(VatIdInterface::class, $vatId);
    }	
}