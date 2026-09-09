# phpDocumentor

This is an automatically generated documentation for **phpDocumentor**.

## Namespaces

### \AlexisPPLIN\SendcloudV3

#### Classes

| Class                                                | Description                           |
|------------------------------------------------------|---------------------------------------|
| [`Client`](./classes/AlexisPPLIN/SendcloudV3/Client) | Generic HTTP client for all endpoints |

### \AlexisPPLIN\SendcloudV3\Endpoints

#### Classes

| Class                                                          | Description                                                  |
|----------------------------------------------------------------|--------------------------------------------------------------|
| [`Orders`](./classes/AlexisPPLIN/SendcloudV3/Endpoints/Orders) | The Orders API allows you to manage orders within Sendcloud. |

### \AlexisPPLIN\SendcloudV3\Exceptions

#### Classes

| Class                                                                                                 | Description                                    |
|-------------------------------------------------------------------------------------------------------|------------------------------------------------|
| [`DateParsingException`](./classes/AlexisPPLIN/SendcloudV3/Exceptions/DateParsingException)           | Thrown when date parsing fails                 |
| [`ModelFromDataException`](./classes/AlexisPPLIN/SendcloudV3/Exceptions/ModelFromDataException)       | Thrown when the ::fromData() Model method fail |
| [`SendcloudRequestException`](./classes/AlexisPPLIN/SendcloudV3/Exceptions/SendcloudRequestException) | Thrown when Sendcloud API return an error      |

### \AlexisPPLIN\SendcloudV3\Factory

#### Classes

| Class                                                                      | Description |
|----------------------------------------------------------------------------|-------------|
| [`ClientFactory`](./classes/AlexisPPLIN/SendcloudV3/Factory/ClientFactory) |             |

### \AlexisPPLIN\SendcloudV3\Models

#### Classes

| Class                                                                       | Description                                  |
|-----------------------------------------------------------------------------|----------------------------------------------|
| [`Address`](./classes/AlexisPPLIN/SendcloudV3/Models/Address)               | Sendcloud Address object                     |
| [`DangerousGoods`](./classes/AlexisPPLIN/SendcloudV3/Models/DangerousGoods) | Hazardous materials information for items.   |
| [`PaymentDetails`](./classes/AlexisPPLIN/SendcloudV3/Models/PaymentDetails) | Node for everything about payments and money |
| [`Price`](./classes/AlexisPPLIN/SendcloudV3/Models/Price)                   |                                              |
| [`Status`](./classes/AlexisPPLIN/SendcloudV3/Models/Status)                 |                                              |

#### Interfaces

| Interface                                                                   | Description |
|-----------------------------------------------------------------------------|-------------|
| [`ModelInterface`](./classes/AlexisPPLIN/SendcloudV3/Models/ModelInterface) |             |

### \AlexisPPLIN\SendcloudV3\Models\Customer

#### Classes

| Class                                                                                  | Description                            |
|----------------------------------------------------------------------------------------|----------------------------------------|
| [`CustomerDetails`](./classes/AlexisPPLIN/SendcloudV3/Models/Customer/CustomerDetails) | Node for an information about customer |

### \AlexisPPLIN\SendcloudV3\Models\Delivery

#### Classes

| Class                                                                              | Description            |
|------------------------------------------------------------------------------------|------------------------|
| [`DeliveryDates`](./classes/AlexisPPLIN/SendcloudV3/Models/Delivery/DeliveryDates) | Defined delivery dates |

### \AlexisPPLIN\SendcloudV3\Models\Measurement

#### Classes

| Class                                                                                               | Description                                                                                         |
|-----------------------------------------------------------------------------------------------------|-----------------------------------------------------------------------------------------------------|
| [`Measurement`](./classes/AlexisPPLIN/SendcloudV3/Models/Measurement/Measurement)                   | This object provides essential information for accurate packing, shipping, and inventory management |
| [`MeasurementDimension`](./classes/AlexisPPLIN/SendcloudV3/Models/Measurement/MeasurementDimension) | Dimension in the specified unit                                                                     |
| [`MeasurementVolume`](./classes/AlexisPPLIN/SendcloudV3/Models/Measurement/MeasurementVolume)       | Volume in the specified unit                                                                        |
| [`MeasurementWeight`](./classes/AlexisPPLIN/SendcloudV3/Models/Measurement/MeasurementWeight)       | Weight in the specified unit                                                                        |

### \AlexisPPLIN\SendcloudV3\Models\Order

#### Classes

| Class                                                                                                 | Description                                                                                                    |
|-------------------------------------------------------------------------------------------------------|----------------------------------------------------------------------------------------------------------------|
| [`CustomsDetails`](./classes/AlexisPPLIN/SendcloudV3/Models/Order/CustomsDetails)                     | Customs information required for international shipments.                                                      |
| [`Order`](./classes/AlexisPPLIN/SendcloudV3/Models/Order/Order)                                       |                                                                                                                |
| [`OrderDetails`](./classes/AlexisPPLIN/SendcloudV3/Models/Order/OrderDetails)                         | Node for general order information                                                                             |
| [`OrderDetailsIntegration`](./classes/AlexisPPLIN/SendcloudV3/Models/Order/OrderDetailsIntegration)   |                                                                                                                |
| [`OrderItems`](./classes/AlexisPPLIN/SendcloudV3/Models/Order/OrderItems)                             |                                                                                                                |
| [`ShippingDetails`](./classes/AlexisPPLIN/SendcloudV3/Models/Order/ShippingDetails)                   | Shipping information                                                                                           |
| [`ShippingOptionProperties`](./classes/AlexisPPLIN/SendcloudV3/Models/Order/ShippingOptionProperties) | Contains the required properties to be sent when API client informs the shipping method and carrier to be used |
| [`ShipWith`](./classes/AlexisPPLIN/SendcloudV3/Models/Order/ShipWith)                                 | The ship with object can be used to define how you would like to send your shipment.                           |

### \AlexisPPLIN\SendcloudV3\Models\ServicePoint

#### Classes

| Class                                                                                | Description |
|--------------------------------------------------------------------------------------|-------------|
| [`ServicePoint`](./classes/AlexisPPLIN/SendcloudV3/Models/ServicePoint/ServicePoint) |             |

### \AlexisPPLIN\SendcloudV3\Models\Tax

#### Classes

| Class                                                                   | Description                                                                                   |
|-------------------------------------------------------------------------|-----------------------------------------------------------------------------------------------|
| [`TaxNumber`](./classes/AlexisPPLIN/SendcloudV3/Models/Tax/TaxNumber)   |                                                                                               |
| [`TaxNumbers`](./classes/AlexisPPLIN/SendcloudV3/Models/Tax/TaxNumbers) | Identification numbers and codes related to sender, receiver and importer of record provider. |

### \AlexisPPLIN\SendcloudV3\Utils

#### Classes

| Class                                                            | Description                       |
|------------------------------------------------------------------|-----------------------------------|
| [`DateUtils`](./classes/AlexisPPLIN/SendcloudV3/Utils/DateUtils) | Utility methods for date handling |
| [`JsonUtils`](./classes/AlexisPPLIN/SendcloudV3/Utils/JsonUtils) | Utility methods for json handling |
