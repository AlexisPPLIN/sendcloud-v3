<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3\Models;

use AlexisPPLIN\SendcloudV3\Utils\JsonUtils;

/**
 * Node for everything about payments and money
 *
 * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-payment-details
 */
class PaymentDetails implements ModelInterface
{
    /**
     * @param $total_price Total value in the shop currency
     * @param $status Payment status of an order
     * @param $is_cash_on_delivery Indicates if customers will pay the full order amount upon delivery of the order
     * @param $subtotal_price Subtotal value in the shop currency
     * @param $estimated_shipping_price Sum of all shipping costs
     * @param $estimated_tax_price Sum of all estimated taxes for the order
     * @param $invoice_date The date when invoice was issued.
     * @param $discount_granted Discount granted on the total order excluding any possible discounts on shipping.
     * @param $insurance_costs Amount the order is insured for
     * @param $freight_costs Shipping cost of the order after discounts have been applied.
     * @param $other_costs Any other costs (for eg, wrapping costs) associated with the order
     */
    public function __construct(
        public readonly Price $total_price,
        public readonly Status $status,
        public readonly ?bool $is_cash_on_delivery = null,
        public readonly ?Price $subtotal_price = null,
        public readonly ?Price $estimated_shipping_price = null,
        public readonly ?Price $estimated_tax_price = null,
        public readonly ?string $invoice_date = null,
        public readonly ?Price $discount_granted = null,
        public readonly ?Price $insurance_costs = null,
        public readonly ?Price $freight_costs = null,
        public readonly ?Price $other_costs = null
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            total_price:                Price::fromData($data['total_price']),
            status:                     Status::fromData($data['status']),
            is_cash_on_delivery:        isset($data['is_cash_on_delivery'])         ? (bool) $data['is_cash_on_delivery']                         : null,
            subtotal_price:             isset($data['subtotal_price'])              ? Price::fromData($data['subtotal_price'])              : null,
            estimated_shipping_price:   isset($data['estimated_shipping_price'])    ? Price::fromData($data['estimated_shipping_price'])    : null,
            estimated_tax_price:        isset($data['estimated_tax_price'])         ? Price::fromData($data['estimated_tax_price'])         : null,
            invoice_date:               isset($data['invoice_date'])                ? (string) $data['invoice_date']                              : null,
            discount_granted:           isset($data['discount_granted'])            ? Price::fromData($data['discount_granted'])            : null,
            insurance_costs:            isset($data['insurance_costs'])             ? Price::fromData($data['insurance_costs'])             : null,
            freight_costs:              isset($data['freight_costs'])               ? Price::fromData($data['freight_costs'])               : null,
            other_costs:                isset($data['other_costs'])                 ? Price::fromData($data['other_costs'])                 : null
        );
    }

    public function jsonSerialize() : array
    {
        $json = [
            'total_price' => $this->total_price,
            'status' => $this->status
        ];

        JsonUtils::addIfNotNull($json, 'is_cash_on_delivery', $this->is_cash_on_delivery);
        JsonUtils::addIfNotNull($json, 'subtotal_price', $this->subtotal_price);
        JsonUtils::addIfNotNull($json, 'estimated_shipping_price', $this->estimated_shipping_price);
        JsonUtils::addIfNotNull($json, 'estimated_tax_price', $this->estimated_tax_price);
        JsonUtils::addIfNotNull($json, 'invoice_date', $this->invoice_date);
        JsonUtils::addIfNotNull($json, 'discount_granted', $this->discount_granted);
        JsonUtils::addIfNotNull($json, 'insurance_costs', $this->insurance_costs);
        JsonUtils::addIfNotNull($json, 'freight_costs', $this->freight_costs);
        JsonUtils::addIfNotNull($json, 'other_costs', $this->other_costs);

        return $json;
    }
}
