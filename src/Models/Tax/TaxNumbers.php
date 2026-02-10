<?php

namespace AlexisPPLIN\SendcloudV3\Models\Tax;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;

/**
 * Identification numbers and codes related to sender, receiver and importer of record provider.
 *
 * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-customs-details-one-of-0-tax-numbers-one-of-0
 */
class TaxNumbers implements ModelInterface
{
    /**
     * @param array<TaxNumber> $sender
     * @param array<TaxNumber> $receiver
     * @param array<TaxNumber> $importer_of_record
     */
    public function __construct(
        public readonly array $sender,
        public readonly array $receiver,
        public readonly array $importer_of_record,
    ) {

    }

    public static function fromData(array $data) : self
    {
        $sender = [];
        $receiver = [];
        $importer_of_record = [];

        foreach ($data['sender'] as $s) {
            $sender[] = TaxNumber::fromData($s);
        }

        foreach ($data['receiver'] as $r) {
            $receiver[] = TaxNumber::fromData($r);
        }

        foreach ($data['importer_of_record'] as $i) {
            $importer_of_record[] = TaxNumber::fromData($i);
        }

        return new self(
            sender: $sender,
            receiver: $receiver,
            importer_of_record: $importer_of_record
        );
    }
}