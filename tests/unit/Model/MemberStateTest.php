<?php

declare(strict_types=1);

namespace DragonBe\ClarityCompassTest\Model;

use DragonBe\ClarityCompass\Model\MemberState;
use DragonBe\ClarityCompass\Model\MemberStateInterface;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(MemberState::class)]
class MemberStateTest extends TestCase
{
    #[Test]
    public function testMemberStateImplementsMemberStateInterface(): void
    {
        $memberState = new MemberState();
        $this->assertInstanceOf(MemberStateInterface::class);
    }
}
