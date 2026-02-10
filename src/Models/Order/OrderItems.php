<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3\Models\Order;

use AlexisPPLIN\SendcloudV3\Models\DangerousGoods;
use AlexisPPLIN\SendcloudV3\Models\Delivery\DeliveryDates;
use AlexisPPLIN\SendcloudV3\Models\Measurement\Measurement;
use AlexisPPLIN\SendcloudV3\Models\ModelInterface;
use AlexisPPLIN\SendcloudV3\Models\Price;
use AlexisPPLIN\SendcloudV3\Utils\JsonUtils;

/**
 * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-order-details-order-items
 */
class OrderItems implements ModelInterface
{
    /**
     * @param $name The name of ordered product
     * @param $quantity The quantity field on an order item represents the number of units of a product a customer has ordered.
     * @param $total_price The total price for this item line, after any item-level discounts, in the shop’s currency.
     *                           - It should reflect unit_price × quantity, minus discounts (if applicable).
     *                           - [Sendcloud platform mapping] Not displayed in the Sendcloud platform. Instead, the Sendcloud platform calculates its own total as unit_price × quantity.
     * @param $item_id Order Item external ID in shop system
     * @param $product_id Shop system product ID
     * @param $variant_id Shop system variant ID of the product
     * @param $image_url A url to an image representing the given product (or variation of the product if applicable). When providing image_url the product_id is required for image to be correctly displayed.
     * @param $description The product description
     * @param $sku Stock keeping unit - used by retailers to assign to products, in order to keep track of stock levels internally.
     * @param $hs_code The Harmonized System (HS) code is a standardized numerical system used to classify traded products in international commerce
     * @param $country_of_origin Country code of origin of the item in ISO 3166-1 alpha-2
     * @param array<string, string> $properties Any custom user-defined properties of order item or product
     * @param $unit_price The price of a single item in the shop’s currency before discounts have been applied.
     *                    - [Sendcloud platform mapping] This value is shown directly in the Unit value field in the Sendcloud platform
     * @param $measurement This object provides essential information for accurate packing, shipping, and inventory management
     * @param $ean European standardised number for an article, EAN-13
     * @param $delivery_dates Defined delivery dates
     * @param $mid_code MID code is short for Manufacturer's Identification code and must be shown on the commercial invoice. It's used as an alternative to the full name and address of a manufacturer, shipper or exporter and is always required for U.S. formal customs entries.
     * @param $material_content A description of materials of the order content.
     * @param $intended_use Intended use of the order contents. The intended use may be personal or commercial.
     * @param $dangerous_goods Hazardous materials information for items.
     */
    public function __construct(
        public readonly string $name,
        public readonly int $quantity,
        public readonly Price $total_price,
        public readonly ?string $item_id = null,
        public readonly ?string $product_id = null,
        public readonly ?string $variant_id = null,
        public readonly ?string $image_url = null,
        public readonly ?string $description = null,
        public readonly ?string $sku = null,
        public readonly ?string $hs_code = null,
        public readonly ?string $country_of_origin = null,
        public readonly ?array $properties = null,
        public readonly ?Price $unit_price = null,
        public readonly ?Measurement $measurement = null,
        public readonly ?string $ean = null,
        public readonly ?DeliveryDates $delivery_dates = null,
        public readonly ?string $mid_code = null,
        public readonly ?string $material_content = null,
        public readonly ?string $intended_use = null,
        public readonly ?DangerousGoods $dangerous_goods = null,

    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            name:               (string) $data['name'],
            quantity:           (int) $data['quantity'],
            total_price:        isset($data['total_price'])         ? Price::fromData($data['total_price'])              : null,
            item_id:            isset($data['item_id'])             ? (string) $data['item_id']                                : null,
            product_id:         isset($data['product_id'])          ? (string) $data['product_id']                             : null,
            variant_id:         isset($data['variant_id'])          ? (string) $data['variant_id']                             : null,
            image_url:          isset($data['image_url'])           ? (string) $data['image_url']                              : null,
            description:        isset($data['description'])         ? (string) $data['description']                            : null,
            sku:                isset($data['sku'])                 ? (string) $data['sku']                                    : null,
            hs_code:            isset($data['hs_code'])             ? (string) $data['hs_code']                                : null,
            country_of_origin:  isset($data['country_of_origin'])   ? (string) $data['country_of_origin']                      : null,
            properties:         isset($data['properties'])          ? $data['properties']                                      : null,
            unit_price:         isset($data['unit_price'])          ? Price::fromData($data['unit_price'])               : null,
            measurement:        isset($data['measurement'])         ? Measurement::fromData($data['measurement'])        : null,
            ean:                isset($data['ean'])                 ? (string) $data['ean']                                    : null,
            delivery_dates:     isset($data['delivery_dates'])      ? DeliveryDates::fromData($data['delivery_dates'])   : null,
            mid_code:           isset($data['mid_code'])            ? (string) $data['mid_code']                               : null,
            material_content:   isset($data['material_content'])    ? (string) $data['material_content']                       : null,
            intended_use:       isset($data['intended_use'])        ? (string) $data['intended_use']                           : null,
            dangerous_goods:    isset($data['dangerous_goods'])     ? DangerousGoods::fromData($data['dangerous_goods']) : null
        );
    }

    public function jsonSerialize() : array
    {
        $json = [
            'name' => $this->name,
            'quantity' => $this->quantity
        ];

        JsonUtils::addIfNotNull($json, 'total_price', $this->total_price);
        JsonUtils::addIfNotNull($json, 'item_id', $this->item_id);
        JsonUtils::addIfNotNull($json, 'product_id', $this->product_id);
        JsonUtils::addIfNotNull($json, 'variant_id', $this->variant_id);
        JsonUtils::addIfNotNull($json, 'image_url', $this->image_url);
        JsonUtils::addIfNotNull($json, 'description', $this->description);
        JsonUtils::addIfNotNull($json, 'sku', $this->sku);
        JsonUtils::addIfNotNull($json, 'hs_code', $this->hs_code);
        JsonUtils::addIfNotNull($json, 'country_of_origin', $this->country_of_origin);
        JsonUtils::addIfNotNull($json, 'properties', $this->properties);
        JsonUtils::addIfNotNull($json, 'unit_price', $this->unit_price);
        JsonUtils::addIfNotNull($json, 'measurement', $this->measurement);
        JsonUtils::addIfNotNull($json, 'ean', $this->ean);
        JsonUtils::addIfNotNull($json, 'delivery_dates', $this->delivery_dates);
        JsonUtils::addIfNotNull($json, 'mid_code', $this->mid_code);
        JsonUtils::addIfNotNull($json, 'material_content', $this->material_content);
        JsonUtils::addIfNotNull($json, 'intended_use', $this->intended_use);
        JsonUtils::addIfNotNull($json, 'dangerous_goods', $this->dangerous_goods);

        return $json;
    }
}
