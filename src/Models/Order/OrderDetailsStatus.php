<?php

namespace AlexisPPLIN\SendcloudV3\Models\Order;

use DateTimeImmutable;

class OrderDetailsStatus
{
    public function __construct(
        public readonly string $code,
        public readonly ?string $message = null,
    ) {

    }
}