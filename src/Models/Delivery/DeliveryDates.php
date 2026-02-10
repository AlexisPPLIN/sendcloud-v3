<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3\Models\Delivery;

use AlexisPPLIN\SendcloudV3\Exceptions\ModelFromDataException;
use AlexisPPLIN\SendcloudV3\Models\AbstractModel;
use AlexisPPLIN\SendcloudV3\Models\ModelInterface;
use AlexisPPLIN\SendcloudV3\Utils\DateUtils;
use DateTimeImmutable;
use DateTimeInterface;
use JsonSerializable;

/**
 * Defined delivery dates
 *
 * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-order-details-order-items-items-delivery-dates
 */
class DeliveryDates implements ModelInterface
{
    /**
     * @param ?DateTimeImmutable $handover_at The date when the item will be handed over to the carrier by the merchant
     * @param ?DateTimeImmutable $deliver_at The date when the order should reach the end customer
     */
    public function __construct(
        public readonly ?DateTimeImmutable $handover_at = null,
        public readonly ?DateTimeImmutable $deliver_at = null,
    ) {

    }

    public static function fromData(array $data) : self
    {
        $handover_at = null;
        $deliver_at = null;

        if (isset($data['handover_at'])) {
            $handover_at = DateUtils::iso8601ToDateTime($data['handover_at']);
        }

        if (isset($data['deliver_at'])) {
            $deliver_at = DateUtils::iso8601ToDateTime($data['deliver_at']);
        }

        return new self(
            $handover_at,
            $deliver_at
        );
    }

    public function jsonSerialize() : array
    {
        $json = [];

        if (isset($this->handover_at)) {
            $json['handover_at'] = DateUtils::dateTimeToIso8601($this->handover_at);
        }

        if (isset($this->deliver_at)) {
            $json['deliver_at'] = DateUtils::dateTimeToIso8601($this->deliver_at);
        }

        return $json;
    }
}
