# phpDocumentor

This is an automatically generated documentation for **phpDocumentor**.

## Namespaces

### \AlexisPPLIN\SendcloudV3

#### Classes

| Class                                                   | Description                           |
|---------------------------------------------------------|---------------------------------------|
| [`Client`](./classes/AlexisPPLIN/SendcloudV3/Client.md) | Generic HTTP client for all endpoints |

### \AlexisPPLIN\SendcloudV3\Endpoints

#### Classes

| Class                                                                                   | Description                                                                                   |
|-----------------------------------------------------------------------------------------|-----------------------------------------------------------------------------------------------|
| [`AddressValidation`](./classes/AlexisPPLIN/SendcloudV3/Endpoints/AddressValidation.md) | This address validation endpoint allows you to validate shipping addresses before using them. |
| [`Orders`](./classes/AlexisPPLIN/SendcloudV3/Endpoints/Orders.md)                       | The Orders API allows you to manage orders within Sendcloud.                                  |

### \AlexisPPLIN\SendcloudV3\Exceptions

#### Classes

| Class                                                                                                    | Description                                    |
|----------------------------------------------------------------------------------------------------------|------------------------------------------------|
| [`DateParsingException`](./classes/AlexisPPLIN/SendcloudV3/Exceptions/DateParsingException.md)           | Thrown when date parsing fails                 |
| [`ModelFromDataException`](./classes/AlexisPPLIN/SendcloudV3/Exceptions/ModelFromDataException.md)       | Thrown when the ::fromData() Model method fail |
| [`SendcloudRequestException`](./classes/AlexisPPLIN/SendcloudV3/Exceptions/SendcloudRequestException.md) | Thrown when Sendcloud API return an error      |

### \AlexisPPLIN\SendcloudV3\Factory

#### Classes

| Class                                                                         | Description |
|-------------------------------------------------------------------------------|-------------|
| [`ClientFactory`](./classes/AlexisPPLIN/SendcloudV3/Factory/ClientFactory.md) |             |

### \AlexisPPLIN\SendcloudV3\Models

#### Classes

| Class                                                                          | Description                                  |
|--------------------------------------------------------------------------------|----------------------------------------------|
| [`Address`](./classes/AlexisPPLIN/SendcloudV3/Models/Address.md)               | Sendcloud Address object                     |
| [`DangerousGoods`](./classes/AlexisPPLIN/SendcloudV3/Models/DangerousGoods.md) | Hazardous materials information for items.   |
| [`PaymentDetails`](./classes/AlexisPPLIN/SendcloudV3/Models/PaymentDetails.md) | Node for everything about payments and money |
| [`Price`](./classes/AlexisPPLIN/SendcloudV3/Models/Price.md)                   |                                              |
| [`Status`](./classes/AlexisPPLIN/SendcloudV3/Models/Status.md)                 |                                              |

#### Interfaces

| Interface                                                                      | Description |
|--------------------------------------------------------------------------------|-------------|
| [`ModelInterface`](./classes/AlexisPPLIN/SendcloudV3/Models/ModelInterface.md) |             |

### \AlexisPPLIN\SendcloudV3\Models\AddressValidation

#### Classes

| Class                                                                                                                | Description                                         |
|----------------------------------------------------------------------------------------------------------------------|-----------------------------------------------------|
| [`Address`](./classes/AlexisPPLIN/SendcloudV3/Models/AddressValidation/Address.md)                                   | Address Washer Request object model                 |
| [`Analysis`](./classes/AlexisPPLIN/SendcloudV3/Models/AddressValidation/Analysis.md)                                 | Analysis details of the address validation process. |
| [`AnalystsValidationResult`](./classes/AlexisPPLIN/SendcloudV3/Models/AddressValidation/AnalystsValidationResult.md) | The result of the validation process.               |
| [`ValidationResponse`](./classes/AlexisPPLIN/SendcloudV3/Models/AddressValidation/ValidationResponse.md)             | Address validation successful                       |
| [`ValidationResult`](./classes/AlexisPPLIN/SendcloudV3/Models/AddressValidation/ValidationResult.md)                 | Address validation successful                       |

### \AlexisPPLIN\SendcloudV3\Models\Customer

#### Classes

| Class                                                                                     | Description                            |
|-------------------------------------------------------------------------------------------|----------------------------------------|
| [`CustomerDetails`](./classes/AlexisPPLIN/SendcloudV3/Models/Customer/CustomerDetails.md) | Node for an information about customer |

### \AlexisPPLIN\SendcloudV3\Models\Delivery

#### Classes

| Class                                                                                 | Description            |
|---------------------------------------------------------------------------------------|------------------------|
| [`DeliveryDates`](./classes/AlexisPPLIN/SendcloudV3/Models/Delivery/DeliveryDates.md) | Defined delivery dates |

### \AlexisPPLIN\SendcloudV3\Models\Measurement

#### Classes

| Class                                                                                                  | Description                                                                                         |
|--------------------------------------------------------------------------------------------------------|-----------------------------------------------------------------------------------------------------|
| [`Measurement`](./classes/AlexisPPLIN/SendcloudV3/Models/Measurement/Measurement.md)                   | This object provides essential information for accurate packing, shipping, and inventory management |
| [`MeasurementDimension`](./classes/AlexisPPLIN/SendcloudV3/Models/Measurement/MeasurementDimension.md) | Dimension in the specified unit                                                                     |
| [`MeasurementVolume`](./classes/AlexisPPLIN/SendcloudV3/Models/Measurement/MeasurementVolume.md)       | Volume in the specified unit                                                                        |
| [`MeasurementWeight`](./classes/AlexisPPLIN/SendcloudV3/Models/Measurement/MeasurementWeight.md)       | Weight in the specified unit                                                                        |

### \AlexisPPLIN\SendcloudV3\Models\Order

#### Classes

| Class                                                                                                    | Description                                                                                                    |
|----------------------------------------------------------------------------------------------------------|----------------------------------------------------------------------------------------------------------------|
| [`CustomsDetails`](./classes/AlexisPPLIN/SendcloudV3/Models/Order/CustomsDetails.md)                     | Customs information required for international shipments.                                                      |
| [`Order`](./classes/AlexisPPLIN/SendcloudV3/Models/Order/Order.md)                                       |                                                                                                                |
| [`OrderDetails`](./classes/AlexisPPLIN/SendcloudV3/Models/Order/OrderDetails.md)                         | Node for general order information                                                                             |
| [`OrderDetailsIntegration`](./classes/AlexisPPLIN/SendcloudV3/Models/Order/OrderDetailsIntegration.md)   |                                                                                                                |
| [`OrderItems`](./classes/AlexisPPLIN/SendcloudV3/Models/Order/OrderItems.md)                             |                                                                                                                |
| [`ShippingDetails`](./classes/AlexisPPLIN/SendcloudV3/Models/Order/ShippingDetails.md)                   | Shipping information                                                                                           |
| [`ShippingOptionProperties`](./classes/AlexisPPLIN/SendcloudV3/Models/Order/ShippingOptionProperties.md) | Contains the required properties to be sent when API client informs the shipping method and carrier to be used |
| [`ShipWith`](./classes/AlexisPPLIN/SendcloudV3/Models/Order/ShipWith.md)                                 | The ship with object can be used to define how you would like to send your shipment.                           |

### \AlexisPPLIN\SendcloudV3\Models\ServicePoint

#### Classes

| Class                                                                                   | Description |
|-----------------------------------------------------------------------------------------|-------------|
| [`ServicePoint`](./classes/AlexisPPLIN/SendcloudV3/Models/ServicePoint/ServicePoint.md) |             |

### \AlexisPPLIN\SendcloudV3\Models\Tax

#### Classes

| Class                                                                      | Description                                                                                   |
|----------------------------------------------------------------------------|-----------------------------------------------------------------------------------------------|
| [`TaxNumber`](./classes/AlexisPPLIN/SendcloudV3/Models/Tax/TaxNumber.md)   |                                                                                               |
| [`TaxNumbers`](./classes/AlexisPPLIN/SendcloudV3/Models/Tax/TaxNumbers.md) | Identification numbers and codes related to sender, receiver and importer of record provider. |

### \AlexisPPLIN\SendcloudV3\Utils

#### Classes

| Class                                                               | Description                       |
|---------------------------------------------------------------------|-----------------------------------|
| [`DateUtils`](./classes/AlexisPPLIN/SendcloudV3/Utils/DateUtils.md) | Utility methods for date handling |
| [`JsonUtils`](./classes/AlexisPPLIN/SendcloudV3/Utils/JsonUtils.md) | Utility methods for json handling |
