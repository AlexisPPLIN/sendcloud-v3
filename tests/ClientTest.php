<?php

declare(strict_types=1);

namespace Test\AlexisPPLIN\SendcloudV3;

use AlexisPPLIN\SendcloudV3\Client;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Client::class)]
class ClientTest extends TestCase
{
    public function testEmpty(): void
    {
        $this->assertTrue(true);
    }
}
