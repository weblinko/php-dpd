<?php

namespace Dpd;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'isAlive' => '\\Dpd\\StructType\\IsAlive',
            'isAliveResponse' => '\\Dpd\\StructType\\IsAliveResponse',
            'setAlive' => '\\Dpd\\StructType\\SetAlive',
            'setAliveResponse' => '\\Dpd\\StructType\\SetAliveResponse',
            'UserCredentials' => '\\Dpd\\StructType\\UserCredentials',
            'CreateShipment' => '\\Dpd\\StructType\\CreateShipment',
            'StdShipmentRequest' => '\\Dpd\\StructType\\StdShipmentRequest',
            'StdShipmentBaseRequest' => '\\Dpd\\StructType\\StdShipmentBaseRequest',
            'ShipmentRequestDefaultData' => '\\Dpd\\StructType\\ShipmentRequestDefaultData',
            'ShipmentRequestBase' => '\\Dpd\\StructType\\ShipmentRequestBase',
            'Address' => '\\Dpd\\StructType\\Address',
            'AddressMini' => '\\Dpd\\StructType\\AddressMini',
            'ShopAddress' => '\\Dpd\\StructType\\ShopAddress',
            'AddressInfo' => '\\Dpd\\StructType\\AddressInfo',
            'StdServices' => '\\Dpd\\StructType\\StdServices',
            'StdServicesBase' => '\\Dpd\\StructType\\StdServicesBase',
            'ServiceBaseList' => '\\Dpd\\StructType\\ServiceBaseList',
            'AppendOptionsBase' => '\\Dpd\\StructType\\AppendOptionsBase',
            'Bic3' => '\\Dpd\\StructType\\Bic3',
            'PickupData' => '\\Dpd\\StructType\\PickupData',
            'ServiceBase' => '\\Dpd\\StructType\\ServiceBase',
            'DefaultService' => '\\Dpd\\StructType\\DefaultService',
            'Sameday' => '\\Dpd\\StructType\\Sameday',
            'Consolidation' => '\\Dpd\\StructType\\Consolidation',
            'AutoConsolidation' => '\\Dpd\\StructType\\AutoConsolidation',
            'ReverseReturnBase' => '\\Dpd\\StructType\\ReverseReturnBase',
            'ReverseBcReturn' => '\\Dpd\\StructType\\ReverseBcReturn',
            'BcData' => '\\Dpd\\StructType\\BcData',
            'ReverseInverseReturnBc' => '\\Dpd\\StructType\\ReverseInverseReturnBc',
            'ReverseReturn' => '\\Dpd\\StructType\\ReverseReturn',
            'Parcel' => '\\Dpd\\StructType\\Parcel',
            'ReverseInverseReturn' => '\\Dpd\\StructType\\ReverseInverseReturn',
            'Reverse' => '\\Dpd\\StructType\\Reverse',
            'ParcelShop' => '\\Dpd\\StructType\\ParcelShop',
            'Contact' => '\\Dpd\\StructType\\Contact',
            'ExtraInsurance' => '\\Dpd\\StructType\\ExtraInsurance',
            'CreateShipmentResponse' => '\\Dpd\\StructType\\CreateShipmentResponse',
            'ArrayOfShipment' => '\\Dpd\\ArrayType\\ArrayOfShipment',
            'Shipment' => '\\Dpd\\StructType\\Shipment',
            'CreateShipmentBc' => '\\Dpd\\StructType\\CreateShipmentBc',
            'CreateShipmentBcResponse' => '\\Dpd\\StructType\\CreateShipmentBcResponse',
            'ArrayOfShipmentBc' => '\\Dpd\\ArrayType\\ArrayOfShipmentBc',
            'ShipmentBc' => '\\Dpd\\StructType\\ShipmentBc',
            'BcDataExt' => '\\Dpd\\StructType\\BcDataExt',
            'CreateShipmentWithLabels' => '\\Dpd\\StructType\\CreateShipmentWithLabels',
            'StdShipmentLabelRequest' => '\\Dpd\\StructType\\StdShipmentLabelRequest',
            'StdShipmentLabelBaseRequest' => '\\Dpd\\StructType\\StdShipmentLabelBaseRequest',
            'LabelType' => '\\Dpd\\StructType\\LabelType',
            'Bic3LabelData' => '\\Dpd\\StructType\\Bic3LabelData',
            'ReferenceInBarcode' => '\\Dpd\\StructType\\ReferenceInBarcode',
            'CreateShipmentWithLabelsResponse' => '\\Dpd\\StructType\\CreateShipmentWithLabelsResponse',
            'ShipmentsWithLabels' => '\\Dpd\\StructType\\ShipmentsWithLabels',
            'ArrayOfLabel' => '\\Dpd\\ArrayType\\ArrayOfLabel',
            'Label' => '\\Dpd\\StructType\\Label',
            'CreateShipmentWithLabelsBc' => '\\Dpd\\StructType\\CreateShipmentWithLabelsBc',
            'CreateShipmentWithLabelsBcResponse' => '\\Dpd\\StructType\\CreateShipmentWithLabelsBcResponse',
            'ShipmentsWithLabelsBc' => '\\Dpd\\StructType\\ShipmentsWithLabelsBc',
            'CreateMultiShipment' => '\\Dpd\\StructType\\CreateMultiShipment',
            'MultiShipmentRequest' => '\\Dpd\\StructType\\MultiShipmentRequest',
            'MultiServices' => '\\Dpd\\StructType\\MultiServices',
            'ArrayOfSlaveRequest' => '\\Dpd\\ArrayType\\ArrayOfSlaveRequest',
            'SlaveRequest' => '\\Dpd\\StructType\\SlaveRequest',
            'SlaveServices' => '\\Dpd\\StructType\\SlaveServices',
            'CreateMultiShipmentResponse' => '\\Dpd\\StructType\\CreateMultiShipmentResponse',
            'MultiShipment' => '\\Dpd\\StructType\\MultiShipment',
            'CreateMultiShipmentBc' => '\\Dpd\\StructType\\CreateMultiShipmentBc',
            'CreateMultiShipmentBcResponse' => '\\Dpd\\StructType\\CreateMultiShipmentBcResponse',
            'MultiShipmentBc' => '\\Dpd\\StructType\\MultiShipmentBc',
            'GetServiceNoticeAnswers' => '\\Dpd\\StructType\\GetServiceNoticeAnswers',
            'ServiceNoticeAnswersRequest' => '\\Dpd\\StructType\\ServiceNoticeAnswersRequest',
            'GetServiceNoticeAnswersResponse' => '\\Dpd\\StructType\\GetServiceNoticeAnswersResponse',
            'ServiceNoticeAnswersResponse' => '\\Dpd\\StructType\\ServiceNoticeAnswersResponse',
            'ArrayOfText' => '\\Dpd\\ArrayType\\ArrayOfText',
            'Text' => '\\Dpd\\StructType\\Text',
            'GetServiceNotices' => '\\Dpd\\StructType\\GetServiceNotices',
            'ServiceNoticeRequest' => '\\Dpd\\StructType\\ServiceNoticeRequest',
            'Customer' => '\\Dpd\\StructType\\Customer',
            'CustomerSmall' => '\\Dpd\\StructType\\CustomerSmall',
            'GetServiceNoticesResponse' => '\\Dpd\\StructType\\GetServiceNoticesResponse',
            'ServiceNoticeResponse' => '\\Dpd\\StructType\\ServiceNoticeResponse',
            'ArrayOfServiceNotice' => '\\Dpd\\ArrayType\\ArrayOfServiceNotice',
            'ServiceNotice' => '\\Dpd\\StructType\\ServiceNotice',
            'GetAllServiceNotices' => '\\Dpd\\StructType\\GetAllServiceNotices',
            'GetAllServiceNoticesRequest' => '\\Dpd\\StructType\\GetAllServiceNoticesRequest',
            'ArrayOfString' => '\\Dpd\\ArrayType\\ArrayOfString',
            'GetAllServiceNoticesResponse' => '\\Dpd\\StructType\\GetAllServiceNoticesResponse',
            'ArrayOfServiceNoticeEntry' => '\\Dpd\\ArrayType\\ArrayOfServiceNoticeEntry',
            'ServiceNoticeEntry' => '\\Dpd\\StructType\\ServiceNoticeEntry',
            'ArrayOfReason' => '\\Dpd\\ArrayType\\ArrayOfReason',
            'Reason' => '\\Dpd\\StructType\\Reason',
            'GetBic3' => '\\Dpd\\StructType\\GetBic3',
            'GetBic3Request' => '\\Dpd\\StructType\\GetBic3Request',
            'GetBic3Response' => '\\Dpd\\StructType\\GetBic3Response',
            'GetBic3Routing' => '\\Dpd\\StructType\\GetBic3Routing',
            'GetBic3RoutingRequest' => '\\Dpd\\StructType\\GetBic3RoutingRequest',
            'GeoRoutingRequest' => '\\Dpd\\StructType\\GeoRoutingRequest',
            'GeoRoutingBaseRequest' => '\\Dpd\\StructType\\GeoRoutingBaseRequest',
            'GetBic3RoutingResponse' => '\\Dpd\\StructType\\GetBic3RoutingResponse',
            'GeoRouting' => '\\Dpd\\StructType\\GeoRouting',
            'GetGeoRouting' => '\\Dpd\\StructType\\GetGeoRouting',
            'GetGeoRoutingResponse' => '\\Dpd\\StructType\\GetGeoRoutingResponse',
            'UpdateServiceNotice' => '\\Dpd\\StructType\\UpdateServiceNotice',
            'UpdateServiceNoticeRequest' => '\\Dpd\\StructType\\UpdateServiceNoticeRequest',
            'UpdateServiceNoticeRequestBase' => '\\Dpd\\StructType\\UpdateServiceNoticeRequestBase',
            'UpdateServiceNoticeResponse' => '\\Dpd\\StructType\\UpdateServiceNoticeResponse',
            'CancelServiceNotice' => '\\Dpd\\StructType\\CancelServiceNotice',
            'CancelServiceNoticeRequest' => '\\Dpd\\StructType\\CancelServiceNoticeRequest',
            'CancelServiceNoticeResponse' => '\\Dpd\\StructType\\CancelServiceNoticeResponse',
            'GetRetourShipmentData' => '\\Dpd\\StructType\\GetRetourShipmentData',
            'RetourShipmentRequest' => '\\Dpd\\StructType\\RetourShipmentRequest',
            'RetourShipmentBaseRequest' => '\\Dpd\\StructType\\RetourShipmentBaseRequest',
            'GetRetourShipmentDataResponse' => '\\Dpd\\StructType\\GetRetourShipmentDataResponse',
            'RetourShipmentData' => '\\Dpd\\StructType\\RetourShipmentData',
            'ShipmentData' => '\\Dpd\\StructType\\ShipmentData',
            'ShipmentDataBase' => '\\Dpd\\StructType\\ShipmentDataBase',
            'RetourServices' => '\\Dpd\\StructType\\RetourServices',
            'GetRetourShipmentDataBc' => '\\Dpd\\StructType\\GetRetourShipmentDataBc',
            'RetourShipmentBcRequest' => '\\Dpd\\StructType\\RetourShipmentBcRequest',
            'GetRetourShipmentDataBcResponse' => '\\Dpd\\StructType\\GetRetourShipmentDataBcResponse',
            'RetourShipmentDataBc' => '\\Dpd\\StructType\\RetourShipmentDataBc',
            'ShipmentDataBc' => '\\Dpd\\StructType\\ShipmentDataBc',
            'CreateReverseInverseShipment' => '\\Dpd\\StructType\\CreateReverseInverseShipment',
            'ReverseShipmentRequest' => '\\Dpd\\StructType\\ReverseShipmentRequest',
            'ReverseInverseServices' => '\\Dpd\\StructType\\ReverseInverseServices',
            'CreateReverseInverseShipmentResponse' => '\\Dpd\\StructType\\CreateReverseInverseShipmentResponse',
            'CreateReverseInverseShipmentBc' => '\\Dpd\\StructType\\CreateReverseInverseShipmentBc',
            'CreateReverseInverseShipmentBcResponse' => '\\Dpd\\StructType\\CreateReverseInverseShipmentBcResponse',
            'CreateReverseInverseShipmentWithLabels' => '\\Dpd\\StructType\\CreateReverseInverseShipmentWithLabels',
            'ReverseShipmentLabelRequest' => '\\Dpd\\StructType\\ReverseShipmentLabelRequest',
            'CreateReverseInverseShipmentWithLabelsResponse' => '\\Dpd\\StructType\\CreateReverseInverseShipmentWithLabelsResponse',
            'ShipmentWithLabels' => '\\Dpd\\StructType\\ShipmentWithLabels',
            'CreateReverseInverseShipmentWithLabelsBc' => '\\Dpd\\StructType\\CreateReverseInverseShipmentWithLabelsBc',
            'CreateReverseInverseShipmentWithLabelsBcResponse' => '\\Dpd\\StructType\\CreateReverseInverseShipmentWithLabelsBcResponse',
            'ShipmentWithLabelsBc' => '\\Dpd\\StructType\\ShipmentWithLabelsBc',
            'GetLabel' => '\\Dpd\\StructType\\GetLabel',
            'ReceiveLabelRequest' => '\\Dpd\\StructType\\ReceiveLabelRequest',
            'ReceiveLabelRequestBase' => '\\Dpd\\StructType\\ReceiveLabelRequestBase',
            'GetLabelResponse' => '\\Dpd\\StructType\\GetLabelResponse',
            'LabelResponse' => '\\Dpd\\StructType\\LabelResponse',
            'LabelBaseResponse' => '\\Dpd\\StructType\\LabelBaseResponse',
            'GetLabelBc' => '\\Dpd\\StructType\\GetLabelBc',
            'ReceiveLabelBcRequest' => '\\Dpd\\StructType\\ReceiveLabelBcRequest',
            'GetLabelBcResponse' => '\\Dpd\\StructType\\GetLabelBcResponse',
            'LabelBcResponse' => '\\Dpd\\StructType\\LabelBcResponse',
            'GetLabelData' => '\\Dpd\\StructType\\GetLabelData',
            'GetLabelDataRequest' => '\\Dpd\\StructType\\GetLabelDataRequest',
            'ShipmentRequestBcBase' => '\\Dpd\\StructType\\ShipmentRequestBcBase',
            'GetShipmentRequestBase' => '\\Dpd\\StructType\\GetShipmentRequestBase',
            'GetLabelDataResponse' => '\\Dpd\\StructType\\GetLabelDataResponse',
            'LabelData' => '\\Dpd\\StructType\\LabelData',
            'LabelDataPn' => '\\Dpd\\StructType\\LabelDataPn',
            'LabelDataBase' => '\\Dpd\\StructType\\LabelDataBase',
            'ArrayOfBarcodeData' => '\\Dpd\\ArrayType\\ArrayOfBarcodeData',
            'BarcodeData' => '\\Dpd\\StructType\\BarcodeData',
            'GetRetourLabel' => '\\Dpd\\StructType\\GetRetourLabel',
            'ReceiveRetourLabelRequest' => '\\Dpd\\StructType\\ReceiveRetourLabelRequest',
            'ReceiveRetourLabelRequestBase' => '\\Dpd\\StructType\\ReceiveRetourLabelRequestBase',
            'GetRetourLabelResponse' => '\\Dpd\\StructType\\GetRetourLabelResponse',
            'GetRetourLabelBc' => '\\Dpd\\StructType\\GetRetourLabelBc',
            'ReceiveRetourLabelBcRequest' => '\\Dpd\\StructType\\ReceiveRetourLabelBcRequest',
            'GetRetourLabelBcResponse' => '\\Dpd\\StructType\\GetRetourLabelBcResponse',
            'CreateCollectionRequest' => '\\Dpd\\StructType\\CreateCollectionRequest',
            'CollectionRequestRequest' => '\\Dpd\\StructType\\CollectionRequestRequest',
            'CollectionRequestServices' => '\\Dpd\\StructType\\CollectionRequestServices',
            'ContactCollectionRequest' => '\\Dpd\\StructType\\ContactCollectionRequest',
            'CreateCollectionRequestResponse' => '\\Dpd\\StructType\\CreateCollectionRequestResponse',
            'CreateCollectionRequestBc' => '\\Dpd\\StructType\\CreateCollectionRequestBc',
            'CreateCollectionRequestBcResponse' => '\\Dpd\\StructType\\CreateCollectionRequestBcResponse',
            'TerminateCollectionRequest' => '\\Dpd\\StructType\\TerminateCollectionRequest',
            'TerminateCollectionRequestBase' => '\\Dpd\\StructType\\TerminateCollectionRequestBase',
            'TerminateCollectionRequestResponse' => '\\Dpd\\StructType\\TerminateCollectionRequestResponse',
            'TerminateCollectionRequestBc' => '\\Dpd\\StructType\\TerminateCollectionRequestBc',
            'TerminateCollectionRequestBcResponse' => '\\Dpd\\StructType\\TerminateCollectionRequestBcResponse',
            'CreatePickupAtCustomer' => '\\Dpd\\StructType\\CreatePickupAtCustomer',
            'PickupAtCustomerRequest' => '\\Dpd\\StructType\\PickupAtCustomerRequest',
            'PickupAtCustomerRequestBase' => '\\Dpd\\StructType\\PickupAtCustomerRequestBase',
            'ArrayOfParcel' => '\\Dpd\\ArrayType\\ArrayOfParcel',
            'CreatePickupAtCustomerResponse' => '\\Dpd\\StructType\\CreatePickupAtCustomerResponse',
            'CreatePickupAtCustomerBc' => '\\Dpd\\StructType\\CreatePickupAtCustomerBc',
            'PickupAtCustomerBcRequest' => '\\Dpd\\StructType\\PickupAtCustomerBcRequest',
            'CreatePickupAtCustomerBcResponse' => '\\Dpd\\StructType\\CreatePickupAtCustomerBcResponse',
            'PickupAtCustomerResponse' => '\\Dpd\\StructType\\PickupAtCustomerResponse',
            'GetShipment' => '\\Dpd\\StructType\\GetShipment',
            'ShipmentRequest' => '\\Dpd\\StructType\\ShipmentRequest',
            'GetShipmentResponse' => '\\Dpd\\StructType\\GetShipmentResponse',
            'ShipmentDataExtended' => '\\Dpd\\StructType\\ShipmentDataExtended',
            'ShipmentDataExtendedBase' => '\\Dpd\\StructType\\ShipmentDataExtendedBase',
            'ParcelDimension' => '\\Dpd\\StructType\\ParcelDimension',
            'GetShipmentBc' => '\\Dpd\\StructType\\GetShipmentBc',
            'ShipmentRequestBc' => '\\Dpd\\StructType\\ShipmentRequestBc',
            'GetShipmentBcResponse' => '\\Dpd\\StructType\\GetShipmentBcResponse',
            'ShipmentDataExtendedBc' => '\\Dpd\\StructType\\ShipmentDataExtendedBc',
            'ArrayOfServiceEntry' => '\\Dpd\\ArrayType\\ArrayOfServiceEntry',
            'ServiceEntry' => '\\Dpd\\StructType\\ServiceEntry',
            'GetShipmentBcMulti' => '\\Dpd\\StructType\\GetShipmentBcMulti',
            'GetShipmentBcMultiRequest' => '\\Dpd\\StructType\\GetShipmentBcMultiRequest',
            'GetShipmentBcMultiResponse' => '\\Dpd\\StructType\\GetShipmentBcMultiResponse',
            'ArrayOfGetShipmentEntry' => '\\Dpd\\ArrayType\\ArrayOfGetShipmentEntry',
            'GetShipmentEntry' => '\\Dpd\\StructType\\GetShipmentEntry',
            'GetReverseOnDemandMode' => '\\Dpd\\StructType\\GetReverseOnDemandMode',
            'GetReverseOnDemandModeResponse' => '\\Dpd\\StructType\\GetReverseOnDemandModeResponse',
            'IsPickableOnDate' => '\\Dpd\\StructType\\IsPickableOnDate',
            'IsPickableRequest' => '\\Dpd\\StructType\\IsPickableRequest',
            'DayRequestBase' => '\\Dpd\\StructType\\DayRequestBase',
            'IsPickableOnDateResponse' => '\\Dpd\\StructType\\IsPickableOnDateResponse',
            'IsDeliverableOnDate' => '\\Dpd\\StructType\\IsDeliverableOnDate',
            'IsDeliverableRequest' => '\\Dpd\\StructType\\IsDeliverableRequest',
            'IsDeliverableOnDateResponse' => '\\Dpd\\StructType\\IsDeliverableOnDateResponse',
            'GetLastNumber' => '\\Dpd\\StructType\\GetLastNumber',
            'GetLastNumberRequest' => '\\Dpd\\StructType\\GetLastNumberRequest',
            'ArrayOfEntry' => '\\Dpd\\ArrayType\\ArrayOfEntry',
            'Entry' => '\\Dpd\\StructType\\Entry',
            'GetLastNumberResponse' => '\\Dpd\\StructType\\GetLastNumberResponse',
            'ArrayOfLong' => '\\Dpd\\ArrayType\\ArrayOfLong',
            'GetNationalTransitTime' => '\\Dpd\\StructType\\GetNationalTransitTime',
            'GetNationalTransitTimeRequest' => '\\Dpd\\StructType\\GetNationalTransitTimeRequest',
            'GetNationalTransitTimeResponse' => '\\Dpd\\StructType\\GetNationalTransitTimeResponse',
            'GetRdvShipmentData' => '\\Dpd\\StructType\\GetRdvShipmentData',
            'GetRdvShipmentDataRequest' => '\\Dpd\\StructType\\GetRdvShipmentDataRequest',
            'GetRdvShipmentDataResponse' => '\\Dpd\\StructType\\GetRdvShipmentDataResponse',
            'ArrayOfRdvShipmentData' => '\\Dpd\\ArrayType\\ArrayOfRdvShipmentData',
            'RdvShipmentData' => '\\Dpd\\StructType\\RdvShipmentData',
            'RdvShipmentDataBase' => '\\Dpd\\StructType\\RdvShipmentDataBase',
            'RdvAddress' => '\\Dpd\\StructType\\RdvAddress',
            'RdvDeliveryInfo' => '\\Dpd\\StructType\\RdvDeliveryInfo',
            'RdvDeliveryInfoSmall' => '\\Dpd\\StructType\\RdvDeliveryInfoSmall',
            'ArrayOfRdvService' => '\\Dpd\\ArrayType\\ArrayOfRdvService',
            'RdvService' => '\\Dpd\\StructType\\RdvService',
            'ParcelInfoSin' => '\\Dpd\\StructType\\ParcelInfoSin',
            'ParcelInfo' => '\\Dpd\\StructType\\ParcelInfo',
            'UpdateRdvShipmentDataForShop' => '\\Dpd\\StructType\\UpdateRdvShipmentDataForShop',
            'UpdateRdvShipmentDataForShopRequest' => '\\Dpd\\StructType\\UpdateRdvShipmentDataForShopRequest',
            'UpdateRdvShipmentData' => '\\Dpd\\StructType\\UpdateRdvShipmentData',
            'RdvEsnInfo' => '\\Dpd\\StructType\\RdvEsnInfo',
            'UpdateRdvShipmentDataForShopResponse' => '\\Dpd\\StructType\\UpdateRdvShipmentDataForShopResponse',
            'UpdateRdvShipmentDataForAgencyPickup' => '\\Dpd\\StructType\\UpdateRdvShipmentDataForAgencyPickup',
            'UpdateRdvShipmentDataForAgencyPickupRequest' => '\\Dpd\\StructType\\UpdateRdvShipmentDataForAgencyPickupRequest',
            'UpdateRdvShipmentDataForAgencyPickupResponse' => '\\Dpd\\StructType\\UpdateRdvShipmentDataForAgencyPickupResponse',
            'UpdateRdvShipmentDataRequest' => '\\Dpd\\StructType\\UpdateRdvShipmentDataRequest',
            'RdvData' => '\\Dpd\\StructType\\RdvData',
            'UpdateRdvShipmentDataResponse' => '\\Dpd\\StructType\\UpdateRdvShipmentDataResponse',
            'UpdateRdvShipmentDataForPredict' => '\\Dpd\\StructType\\UpdateRdvShipmentDataForPredict',
            'UpdateRdvShipmentDataPredictRequest' => '\\Dpd\\StructType\\UpdateRdvShipmentDataPredictRequest',
            'UpdateRdvShipmentDataForPredictResponse' => '\\Dpd\\StructType\\UpdateRdvShipmentDataForPredictResponse',
            'UpdateRdvShipmentDataForSafePlace' => '\\Dpd\\StructType\\UpdateRdvShipmentDataForSafePlace',
            'UpdateRdvShipmentDataForSafePlaceRequest' => '\\Dpd\\StructType\\UpdateRdvShipmentDataForSafePlaceRequest',
            'UpdateRdvShipmentDataForSafePlaceResponse' => '\\Dpd\\StructType\\UpdateRdvShipmentDataForSafePlaceResponse',
            'GetSafePlaceData' => '\\Dpd\\StructType\\GetSafePlaceData',
            'GetSafePlaceDataRequest' => '\\Dpd\\StructType\\GetSafePlaceDataRequest',
            'GetSafePlaceDataResponse' => '\\Dpd\\StructType\\GetSafePlaceDataResponse',
            'ArrayOfBase64Binary' => '\\Dpd\\ArrayType\\ArrayOfBase64Binary',
            'GetCustomerAddress' => '\\Dpd\\StructType\\GetCustomerAddress',
            'GetCustomerAddressResponse' => '\\Dpd\\StructType\\GetCustomerAddressResponse',
            'CustomerAddress' => '\\Dpd\\StructType\\CustomerAddress',
            'GetNumberRange' => '\\Dpd\\StructType\\GetNumberRange',
            'NumberRangeRequest' => '\\Dpd\\StructType\\NumberRangeRequest',
            'NumberRangeBaseRequest' => '\\Dpd\\StructType\\NumberRangeBaseRequest',
            'GetNumberRangeResponse' => '\\Dpd\\StructType\\GetNumberRangeResponse',
            'NumberRangeResponse' => '\\Dpd\\StructType\\NumberRangeResponse',
            'NumberRangeBaseResponse' => '\\Dpd\\StructType\\NumberRangeBaseResponse',
            'GetNumberRangeBc' => '\\Dpd\\StructType\\GetNumberRangeBc',
            'NumberRangeBcRequest' => '\\Dpd\\StructType\\NumberRangeBcRequest',
            'NumberRangeBcBaseRequest' => '\\Dpd\\StructType\\NumberRangeBcBaseRequest',
            'GetNumberRangeBcResponse' => '\\Dpd\\StructType\\GetNumberRangeBcResponse',
            'NumberRangeBcResponse' => '\\Dpd\\StructType\\NumberRangeBcResponse',
            'TerminateNumberRange' => '\\Dpd\\StructType\\TerminateNumberRange',
            'TerminateNumberRangeRequest' => '\\Dpd\\StructType\\TerminateNumberRangeRequest',
            'TerminateNumberRangeBaseRequest' => '\\Dpd\\StructType\\TerminateNumberRangeBaseRequest',
            'TerminateNumberRangeResponse' => '\\Dpd\\StructType\\TerminateNumberRangeResponse',
            'TerminateNumberRangeBc' => '\\Dpd\\StructType\\TerminateNumberRangeBc',
            'TerminateNumberRangeBcRequest' => '\\Dpd\\StructType\\TerminateNumberRangeBcRequest',
            'TerminateNumberRangeBcResponse' => '\\Dpd\\StructType\\TerminateNumberRangeBcResponse',
            'TerminateShipment' => '\\Dpd\\StructType\\TerminateShipment',
            'TerminateShipmentRequest' => '\\Dpd\\StructType\\TerminateShipmentRequest',
            'TerminateShipmentResponse' => '\\Dpd\\StructType\\TerminateShipmentResponse',
            'GetCustomerProfile' => '\\Dpd\\StructType\\GetCustomerProfile',
            'GetCustomerProfileRequest' => '\\Dpd\\StructType\\GetCustomerProfileRequest',
            'ArrayOfCustomer' => '\\Dpd\\ArrayType\\ArrayOfCustomer',
            'GetCustomerProfileResponse' => '\\Dpd\\StructType\\GetCustomerProfileResponse',
            'ArrayOfCustomerProfile' => '\\Dpd\\ArrayType\\ArrayOfCustomerProfile',
            'CustomerProfile' => '\\Dpd\\StructType\\CustomerProfile',
            'ArrayOfProfileAddress' => '\\Dpd\\ArrayType\\ArrayOfProfileAddress',
            'ProfileAddress' => '\\Dpd\\StructType\\ProfileAddress',
            'ArrayOfCustomerService' => '\\Dpd\\ArrayType\\ArrayOfCustomerService',
            'CustomerService' => '\\Dpd\\StructType\\CustomerService',
            'GetProperties' => '\\Dpd\\StructType\\GetProperties',
            'GetPropertiesRequest' => '\\Dpd\\StructType\\GetPropertiesRequest',
            'GetPropertiesResponse' => '\\Dpd\\StructType\\GetPropertiesResponse',
            'ArrayOfPropertyDefinition' => '\\Dpd\\ArrayType\\ArrayOfPropertyDefinition',
            'PropertyDefinition' => '\\Dpd\\StructType\\PropertyDefinition',
            'PutProperties' => '\\Dpd\\StructType\\PutProperties',
            'PutPropertiesRequest' => '\\Dpd\\StructType\\PutPropertiesRequest',
            'ArrayOfPropertyEntry' => '\\Dpd\\ArrayType\\ArrayOfPropertyEntry',
            'PropertyEntry' => '\\Dpd\\StructType\\PropertyEntry',
            'PutPropertiesResponse' => '\\Dpd\\StructType\\PutPropertiesResponse',
            'GetOptionValue' => '\\Dpd\\StructType\\GetOptionValue',
            'GetOptionRequest' => '\\Dpd\\StructType\\GetOptionRequest',
            'GetOptionValueResponse' => '\\Dpd\\StructType\\GetOptionValueResponse',
            'GetOptionResponse' => '\\Dpd\\StructType\\GetOptionResponse',
            'GetOptionValues' => '\\Dpd\\StructType\\GetOptionValues',
            'GetOptionsRequest' => '\\Dpd\\StructType\\GetOptionsRequest',
            'GetOptionValuesResponse' => '\\Dpd\\StructType\\GetOptionValuesResponse',
            'GetOptionsResponse' => '\\Dpd\\StructType\\GetOptionsResponse',
            'ArrayOfGetOptionResponse' => '\\Dpd\\ArrayType\\ArrayOfGetOptionResponse',
            'SendCNOTData' => '\\Dpd\\StructType\\SendCNOTData',
            'CNOTData' => '\\Dpd\\StructType\\CNOTData',
            'ArrayOfTask' => '\\Dpd\\ArrayType\\ArrayOfTask',
            'Task' => '\\Dpd\\StructType\\Task',
            'ArrayOfCNOTParcel' => '\\Dpd\\ArrayType\\ArrayOfCNOTParcel',
            'CNOTParcel' => '\\Dpd\\StructType\\CNOTParcel',
            'Location' => '\\Dpd\\StructType\\Location',
            'Rendezvous' => '\\Dpd\\StructType\\Rendezvous',
            'ArrayOfPhoneCall' => '\\Dpd\\ArrayType\\ArrayOfPhoneCall',
            'PhoneCall' => '\\Dpd\\StructType\\PhoneCall',
            'ArrayOfLocation' => '\\Dpd\\ArrayType\\ArrayOfLocation',
            'SendCNOTDataResponse' => '\\Dpd\\StructType\\SendCNOTDataResponse',
            'CheckIfReverseInverseShipmentExists' => '\\Dpd\\StructType\\CheckIfReverseInverseShipmentExists',
            'CheckIfReverseInverseShipmentExistsRequest' => '\\Dpd\\StructType\\CheckIfReverseInverseShipmentExistsRequest',
            'ParcelBcIdRequest' => '\\Dpd\\StructType\\ParcelBcIdRequest',
            'BcIdBaseRequest' => '\\Dpd\\StructType\\BcIdBaseRequest',
            'CheckIfReverseInverseShipmentExistsResponse' => '\\Dpd\\StructType\\CheckIfReverseInverseShipmentExistsResponse',
            'CheckIfReverseInverseShipmentExistsBcId' => '\\Dpd\\StructType\\CheckIfReverseInverseShipmentExistsBcId',
            'CheckIfReverseInverseShipmentExistsBcIdRequest' => '\\Dpd\\StructType\\CheckIfReverseInverseShipmentExistsBcIdRequest',
            'BcIdRequest' => '\\Dpd\\StructType\\BcIdRequest',
            'CheckIfReverseInverseShipmentExistsBcIdResponse' => '\\Dpd\\StructType\\CheckIfReverseInverseShipmentExistsBcIdResponse',
            'GetShipping' => '\\Dpd\\StructType\\GetShipping',
            'GetShippingRequest' => '\\Dpd\\StructType\\GetShippingRequest',
            'GetShippingResponse' => '\\Dpd\\StructType\\GetShippingResponse',
            'ArrayOfShipping' => '\\Dpd\\ArrayType\\ArrayOfShipping',
            'Shipping' => '\\Dpd\\StructType\\Shipping',
            'AddressName' => '\\Dpd\\StructType\\AddressName',
            'getInfo' => '\\Dpd\\StructType\\GetInfo',
            'getInfoResponse' => '\\Dpd\\StructType\\GetInfoResponse',
            'VerifyClient' => '\\Dpd\\StructType\\VerifyClient',
            'VerifyRequest' => '\\Dpd\\StructType\\VerifyRequest',
            'VerifyClientResponse' => '\\Dpd\\StructType\\VerifyClientResponse',
            'VerifyResponse' => '\\Dpd\\StructType\\VerifyResponse',
            'runAction' => '\\Dpd\\StructType\\RunAction',
            'RunActionRequest' => '\\Dpd\\StructType\\RunActionRequest',
            'runActionResponse' => '\\Dpd\\StructType\\RunActionResponse',
            'RunActionResponse' => '\\Dpd\\StructType\\RunActionResponse_1',
            'GetShipmentTraceSingle' => '\\Dpd\\StructType\\GetShipmentTraceSingle',
            'ShipmentDetailRequest' => '\\Dpd\\StructType\\ShipmentDetailRequest',
            'ShipmentBaseRequest' => '\\Dpd\\StructType\\ShipmentBaseRequest',
            'RequestShipmentBase' => '\\Dpd\\StructType\\RequestShipmentBase',
            'RequestBase' => '\\Dpd\\StructType\\RequestBase',
            'Options' => '\\Dpd\\StructType\\Options',
            'GetShipmentTraceSingleResponse' => '\\Dpd\\StructType\\GetShipmentTraceSingleResponse',
            'ShipmentTrace' => '\\Dpd\\StructType\\ShipmentTrace',
            'clsShipmentTraceBase' => '\\Dpd\\StructType\\ClsShipmentTraceBase',
            'SdgiData' => '\\Dpd\\StructType\\SdgiData',
            'ArrayOfClsTrace' => '\\Dpd\\ArrayType\\ArrayOfClsTrace',
            'clsTrace' => '\\Dpd\\StructType\\ClsTrace',
            'ArrayOfClsTraceDetails' => '\\Dpd\\ArrayType\\ArrayOfClsTraceDetails',
            'clsTraceDetails' => '\\Dpd\\StructType\\ClsTraceDetails',
            'ArrayOfImage' => '\\Dpd\\ArrayType\\ArrayOfImage',
            'Image' => '\\Dpd\\StructType\\Image',
            'GetShipmentTrace' => '\\Dpd\\StructType\\GetShipmentTrace',
            'GetShipmentTraceResponse' => '\\Dpd\\StructType\\GetShipmentTraceResponse',
            'ArrayOfShipmentTrace' => '\\Dpd\\ArrayType\\ArrayOfShipmentTrace',
            'GetShipmentTraceByReference' => '\\Dpd\\StructType\\GetShipmentTraceByReference',
            'ReferenceDetailRequest' => '\\Dpd\\StructType\\ReferenceDetailRequest',
            'ReferenceBaseRequest' => '\\Dpd\\StructType\\ReferenceBaseRequest',
            'GetShipmentTraceByReferenceResponse' => '\\Dpd\\StructType\\GetShipmentTraceByReferenceResponse',
            'GetLastTrace' => '\\Dpd\\StructType\\GetLastTrace',
            'GetLastTraceRequest' => '\\Dpd\\StructType\\GetLastTraceRequest',
            'GetLastTraceBaseRequest' => '\\Dpd\\StructType\\GetLastTraceBaseRequest',
            'GetLastTraceResponse' => '\\Dpd\\StructType\\GetLastTraceResponse',
            'ArrayOfGetLastTraceResponse' => '\\Dpd\\ArrayType\\ArrayOfGetLastTraceResponse',
            'GetLastTraceBaseResponse' => '\\Dpd\\StructType\\GetLastTraceBaseResponse',
            'GetLastTraceBc' => '\\Dpd\\StructType\\GetLastTraceBc',
            'GetLastTraceBcRequest' => '\\Dpd\\StructType\\GetLastTraceBcRequest',
            'GetLastTraceBcResponse' => '\\Dpd\\StructType\\GetLastTraceBcResponse',
            'ArrayOfGetLastTraceBcResponse' => '\\Dpd\\ArrayType\\ArrayOfGetLastTraceBcResponse',
        );
    }
}
