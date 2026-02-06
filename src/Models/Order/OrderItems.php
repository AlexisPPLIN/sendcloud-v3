<?php

namespace AlexisPPLIN\SendcloudV3\Models\Order;

use AlexisPPLIN\SendcloudV3\Models\DangerousGoods;
use AlexisPPLIN\SendcloudV3\Models\Delivery\DeliveryDates;
use AlexisPPLIN\SendcloudV3\Models\Measurement\Measurement;
use AlexisPPLIN\SendcloudV3\Models\Price;
use DateTimeImmutable;

/**
 * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-order-details-order-items
 */
class OrderItems
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
}