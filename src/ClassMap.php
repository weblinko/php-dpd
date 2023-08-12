<?php
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
            'isAlive' => '\\StructType\\IsAlive',
            'isAliveResponse' => '\\StructType\\IsAliveResponse',
            'setAlive' => '\\StructType\\SetAlive',
            'setAliveResponse' => '\\StructType\\SetAliveResponse',
            'UserCredentials' => '\\StructType\\UserCredentials',
            'CreateShipment' => '\\StructType\\CreateShipment',
            'StdShipmentRequest' => '\\StructType\\StdShipmentRequest',
            'StdShipmentBaseRequest' => '\\StructType\\StdShipmentBaseRequest',
            'ShipmentRequestDefaultData' => '\\StructType\\ShipmentRequestDefaultData',
            'ShipmentRequestBase' => '\\StructType\\ShipmentRequestBase',
            'Address' => '\\StructType\\Address',
            'AddressMini' => '\\StructType\\AddressMini',
            'ShopAddress' => '\\StructType\\ShopAddress',
            'AddressInfo' => '\\StructType\\AddressInfo',
            'StdServices' => '\\StructType\\StdServices',
            'StdServicesBase' => '\\StructType\\StdServicesBase',
            'ServiceBaseList' => '\\StructType\\ServiceBaseList',
            'AppendOptionsBase' => '\\StructType\\AppendOptionsBase',
            'Bic3' => '\\StructType\\Bic3',
            'PickupData' => '\\StructType\\PickupData',
            'ServiceBase' => '\\StructType\\ServiceBase',
            'DefaultService' => '\\StructType\\DefaultService',
            'Sameday' => '\\StructType\\Sameday',
            'Consolidation' => '\\StructType\\Consolidation',
            'AutoConsolidation' => '\\StructType\\AutoConsolidation',
            'ReverseReturnBase' => '\\StructType\\ReverseReturnBase',
            'ReverseBcReturn' => '\\StructType\\ReverseBcReturn',
            'BcData' => '\\StructType\\BcData',
            'ReverseInverseReturnBc' => '\\StructType\\ReverseInverseReturnBc',
            'ReverseReturn' => '\\StructType\\ReverseReturn',
            'Parcel' => '\\StructType\\Parcel',
            'ReverseInverseReturn' => '\\StructType\\ReverseInverseReturn',
            'Reverse' => '\\StructType\\Reverse',
            'ParcelShop' => '\\StructType\\ParcelShop',
            'Contact' => '\\StructType\\Contact',
            'ExtraInsurance' => '\\StructType\\ExtraInsurance',
            'CreateShipmentResponse' => '\\StructType\\CreateShipmentResponse',
            'ArrayOfShipment' => '\\ArrayType\\ArrayOfShipment',
            'Shipment' => '\\StructType\\Shipment',
            'CreateShipmentBc' => '\\StructType\\CreateShipmentBc',
            'CreateShipmentBcResponse' => '\\StructType\\CreateShipmentBcResponse',
            'ArrayOfShipmentBc' => '\\ArrayType\\ArrayOfShipmentBc',
            'ShipmentBc' => '\\StructType\\ShipmentBc',
            'BcDataExt' => '\\StructType\\BcDataExt',
            'CreateShipmentWithLabels' => '\\StructType\\CreateShipmentWithLabels',
            'StdShipmentLabelRequest' => '\\StructType\\StdShipmentLabelRequest',
            'StdShipmentLabelBaseRequest' => '\\StructType\\StdShipmentLabelBaseRequest',
            'LabelType' => '\\StructType\\LabelType',
            'Bic3LabelData' => '\\StructType\\Bic3LabelData',
            'ReferenceInBarcode' => '\\StructType\\ReferenceInBarcode',
            'CreateShipmentWithLabelsResponse' => '\\StructType\\CreateShipmentWithLabelsResponse',
            'ShipmentsWithLabels' => '\\StructType\\ShipmentsWithLabels',
            'ArrayOfLabel' => '\\ArrayType\\ArrayOfLabel',
            'Label' => '\\StructType\\Label',
            'CreateShipmentWithLabelsBc' => '\\StructType\\CreateShipmentWithLabelsBc',
            'CreateShipmentWithLabelsBcResponse' => '\\StructType\\CreateShipmentWithLabelsBcResponse',
            'ShipmentsWithLabelsBc' => '\\StructType\\ShipmentsWithLabelsBc',
            'CreateMultiShipment' => '\\StructType\\CreateMultiShipment',
            'MultiShipmentRequest' => '\\StructType\\MultiShipmentRequest',
            'MultiServices' => '\\StructType\\MultiServices',
            'ArrayOfSlaveRequest' => '\\ArrayType\\ArrayOfSlaveRequest',
            'SlaveRequest' => '\\StructType\\SlaveRequest',
            'SlaveServices' => '\\StructType\\SlaveServices',
            'CreateMultiShipmentResponse' => '\\StructType\\CreateMultiShipmentResponse',
            'MultiShipment' => '\\StructType\\MultiShipment',
            'CreateMultiShipmentBc' => '\\StructType\\CreateMultiShipmentBc',
            'CreateMultiShipmentBcResponse' => '\\StructType\\CreateMultiShipmentBcResponse',
            'MultiShipmentBc' => '\\StructType\\MultiShipmentBc',
            'GetServiceNoticeAnswers' => '\\StructType\\GetServiceNoticeAnswers',
            'ServiceNoticeAnswersRequest' => '\\StructType\\ServiceNoticeAnswersRequest',
            'GetServiceNoticeAnswersResponse' => '\\StructType\\GetServiceNoticeAnswersResponse',
            'ServiceNoticeAnswersResponse' => '\\StructType\\ServiceNoticeAnswersResponse',
            'ArrayOfText' => '\\ArrayType\\ArrayOfText',
            'Text' => '\\StructType\\Text',
            'GetServiceNotices' => '\\StructType\\GetServiceNotices',
            'ServiceNoticeRequest' => '\\StructType\\ServiceNoticeRequest',
            'Customer' => '\\StructType\\Customer',
            'CustomerSmall' => '\\StructType\\CustomerSmall',
            'GetServiceNoticesResponse' => '\\StructType\\GetServiceNoticesResponse',
            'ServiceNoticeResponse' => '\\StructType\\ServiceNoticeResponse',
            'ArrayOfServiceNotice' => '\\ArrayType\\ArrayOfServiceNotice',
            'ServiceNotice' => '\\StructType\\ServiceNotice',
            'GetAllServiceNotices' => '\\StructType\\GetAllServiceNotices',
            'GetAllServiceNoticesRequest' => '\\StructType\\GetAllServiceNoticesRequest',
            'ArrayOfString' => '\\ArrayType\\ArrayOfString',
            'GetAllServiceNoticesResponse' => '\\StructType\\GetAllServiceNoticesResponse',
            'ArrayOfServiceNoticeEntry' => '\\ArrayType\\ArrayOfServiceNoticeEntry',
            'ServiceNoticeEntry' => '\\StructType\\ServiceNoticeEntry',
            'ArrayOfReason' => '\\ArrayType\\ArrayOfReason',
            'Reason' => '\\StructType\\Reason',
            'GetBic3' => '\\StructType\\GetBic3',
            'GetBic3Request' => '\\StructType\\GetBic3Request',
            'GetBic3Response' => '\\StructType\\GetBic3Response',
            'GetBic3Routing' => '\\StructType\\GetBic3Routing',
            'GetBic3RoutingRequest' => '\\StructType\\GetBic3RoutingRequest',
            'GeoRoutingRequest' => '\\StructType\\GeoRoutingRequest',
            'GeoRoutingBaseRequest' => '\\StructType\\GeoRoutingBaseRequest',
            'GetBic3RoutingResponse' => '\\StructType\\GetBic3RoutingResponse',
            'GeoRouting' => '\\StructType\\GeoRouting',
            'GetGeoRouting' => '\\StructType\\GetGeoRouting',
            'GetGeoRoutingResponse' => '\\StructType\\GetGeoRoutingResponse',
            'UpdateServiceNotice' => '\\StructType\\UpdateServiceNotice',
            'UpdateServiceNoticeRequest' => '\\StructType\\UpdateServiceNoticeRequest',
            'UpdateServiceNoticeRequestBase' => '\\StructType\\UpdateServiceNoticeRequestBase',
            'UpdateServiceNoticeResponse' => '\\StructType\\UpdateServiceNoticeResponse',
            'CancelServiceNotice' => '\\StructType\\CancelServiceNotice',
            'CancelServiceNoticeRequest' => '\\StructType\\CancelServiceNoticeRequest',
            'CancelServiceNoticeResponse' => '\\StructType\\CancelServiceNoticeResponse',
            'GetRetourShipmentData' => '\\StructType\\GetRetourShipmentData',
            'RetourShipmentRequest' => '\\StructType\\RetourShipmentRequest',
            'RetourShipmentBaseRequest' => '\\StructType\\RetourShipmentBaseRequest',
            'GetRetourShipmentDataResponse' => '\\StructType\\GetRetourShipmentDataResponse',
            'RetourShipmentData' => '\\StructType\\RetourShipmentData',
            'ShipmentData' => '\\StructType\\ShipmentData',
            'ShipmentDataBase' => '\\StructType\\ShipmentDataBase',
            'RetourServices' => '\\StructType\\RetourServices',
            'GetRetourShipmentDataBc' => '\\StructType\\GetRetourShipmentDataBc',
            'RetourShipmentBcRequest' => '\\StructType\\RetourShipmentBcRequest',
            'GetRetourShipmentDataBcResponse' => '\\StructType\\GetRetourShipmentDataBcResponse',
            'RetourShipmentDataBc' => '\\StructType\\RetourShipmentDataBc',
            'ShipmentDataBc' => '\\StructType\\ShipmentDataBc',
            'CreateReverseInverseShipment' => '\\StructType\\CreateReverseInverseShipment',
            'ReverseShipmentRequest' => '\\StructType\\ReverseShipmentRequest',
            'ReverseInverseServices' => '\\StructType\\ReverseInverseServices',
            'CreateReverseInverseShipmentResponse' => '\\StructType\\CreateReverseInverseShipmentResponse',
            'CreateReverseInverseShipmentBc' => '\\StructType\\CreateReverseInverseShipmentBc',
            'CreateReverseInverseShipmentBcResponse' => '\\StructType\\CreateReverseInverseShipmentBcResponse',
            'CreateReverseInverseShipmentWithLabels' => '\\StructType\\CreateReverseInverseShipmentWithLabels',
            'ReverseShipmentLabelRequest' => '\\StructType\\ReverseShipmentLabelRequest',
            'CreateReverseInverseShipmentWithLabelsResponse' => '\\StructType\\CreateReverseInverseShipmentWithLabelsResponse',
            'ShipmentWithLabels' => '\\StructType\\ShipmentWithLabels',
            'CreateReverseInverseShipmentWithLabelsBc' => '\\StructType\\CreateReverseInverseShipmentWithLabelsBc',
            'CreateReverseInverseShipmentWithLabelsBcResponse' => '\\StructType\\CreateReverseInverseShipmentWithLabelsBcResponse',
            'ShipmentWithLabelsBc' => '\\StructType\\ShipmentWithLabelsBc',
            'GetLabel' => '\\StructType\\GetLabel',
            'ReceiveLabelRequest' => '\\StructType\\ReceiveLabelRequest',
            'ReceiveLabelRequestBase' => '\\StructType\\ReceiveLabelRequestBase',
            'GetLabelResponse' => '\\StructType\\GetLabelResponse',
            'LabelResponse' => '\\StructType\\LabelResponse',
            'LabelBaseResponse' => '\\StructType\\LabelBaseResponse',
            'GetLabelBc' => '\\StructType\\GetLabelBc',
            'ReceiveLabelBcRequest' => '\\StructType\\ReceiveLabelBcRequest',
            'GetLabelBcResponse' => '\\StructType\\GetLabelBcResponse',
            'LabelBcResponse' => '\\StructType\\LabelBcResponse',
            'GetLabelData' => '\\StructType\\GetLabelData',
            'GetLabelDataRequest' => '\\StructType\\GetLabelDataRequest',
            'ShipmentRequestBcBase' => '\\StructType\\ShipmentRequestBcBase',
            'GetShipmentRequestBase' => '\\StructType\\GetShipmentRequestBase',
            'GetLabelDataResponse' => '\\StructType\\GetLabelDataResponse',
            'LabelData' => '\\StructType\\LabelData',
            'LabelDataPn' => '\\StructType\\LabelDataPn',
            'LabelDataBase' => '\\StructType\\LabelDataBase',
            'ArrayOfBarcodeData' => '\\ArrayType\\ArrayOfBarcodeData',
            'BarcodeData' => '\\StructType\\BarcodeData',
            'GetRetourLabel' => '\\StructType\\GetRetourLabel',
            'ReceiveRetourLabelRequest' => '\\StructType\\ReceiveRetourLabelRequest',
            'ReceiveRetourLabelRequestBase' => '\\StructType\\ReceiveRetourLabelRequestBase',
            'GetRetourLabelResponse' => '\\StructType\\GetRetourLabelResponse',
            'GetRetourLabelBc' => '\\StructType\\GetRetourLabelBc',
            'ReceiveRetourLabelBcRequest' => '\\StructType\\ReceiveRetourLabelBcRequest',
            'GetRetourLabelBcResponse' => '\\StructType\\GetRetourLabelBcResponse',
            'CreateCollectionRequest' => '\\StructType\\CreateCollectionRequest',
            'CollectionRequestRequest' => '\\StructType\\CollectionRequestRequest',
            'CollectionRequestServices' => '\\StructType\\CollectionRequestServices',
            'ContactCollectionRequest' => '\\StructType\\ContactCollectionRequest',
            'CreateCollectionRequestResponse' => '\\StructType\\CreateCollectionRequestResponse',
            'CreateCollectionRequestBc' => '\\StructType\\CreateCollectionRequestBc',
            'CreateCollectionRequestBcResponse' => '\\StructType\\CreateCollectionRequestBcResponse',
            'TerminateCollectionRequest' => '\\StructType\\TerminateCollectionRequest',
            'TerminateCollectionRequestBase' => '\\StructType\\TerminateCollectionRequestBase',
            'TerminateCollectionRequestResponse' => '\\StructType\\TerminateCollectionRequestResponse',
            'TerminateCollectionRequestBc' => '\\StructType\\TerminateCollectionRequestBc',
            'TerminateCollectionRequestBcResponse' => '\\StructType\\TerminateCollectionRequestBcResponse',
            'CreatePickupAtCustomer' => '\\StructType\\CreatePickupAtCustomer',
            'PickupAtCustomerRequest' => '\\StructType\\PickupAtCustomerRequest',
            'PickupAtCustomerRequestBase' => '\\StructType\\PickupAtCustomerRequestBase',
            'ArrayOfParcel' => '\\ArrayType\\ArrayOfParcel',
            'CreatePickupAtCustomerResponse' => '\\StructType\\CreatePickupAtCustomerResponse',
            'CreatePickupAtCustomerBc' => '\\StructType\\CreatePickupAtCustomerBc',
            'PickupAtCustomerBcRequest' => '\\StructType\\PickupAtCustomerBcRequest',
            'CreatePickupAtCustomerBcResponse' => '\\StructType\\CreatePickupAtCustomerBcResponse',
            'PickupAtCustomerResponse' => '\\StructType\\PickupAtCustomerResponse',
            'GetShipment' => '\\StructType\\GetShipment',
            'ShipmentRequest' => '\\StructType\\ShipmentRequest',
            'GetShipmentResponse' => '\\StructType\\GetShipmentResponse',
            'ShipmentDataExtended' => '\\StructType\\ShipmentDataExtended',
            'ShipmentDataExtendedBase' => '\\StructType\\ShipmentDataExtendedBase',
            'ParcelDimension' => '\\StructType\\ParcelDimension',
            'GetShipmentBc' => '\\StructType\\GetShipmentBc',
            'ShipmentRequestBc' => '\\StructType\\ShipmentRequestBc',
            'GetShipmentBcResponse' => '\\StructType\\GetShipmentBcResponse',
            'ShipmentDataExtendedBc' => '\\StructType\\ShipmentDataExtendedBc',
            'ArrayOfServiceEntry' => '\\ArrayType\\ArrayOfServiceEntry',
            'ServiceEntry' => '\\StructType\\ServiceEntry',
            'GetShipmentBcMulti' => '\\StructType\\GetShipmentBcMulti',
            'GetShipmentBcMultiRequest' => '\\StructType\\GetShipmentBcMultiRequest',
            'GetShipmentBcMultiResponse' => '\\StructType\\GetShipmentBcMultiResponse',
            'ArrayOfGetShipmentEntry' => '\\ArrayType\\ArrayOfGetShipmentEntry',
            'GetShipmentEntry' => '\\StructType\\GetShipmentEntry',
            'GetReverseOnDemandMode' => '\\StructType\\GetReverseOnDemandMode',
            'GetReverseOnDemandModeResponse' => '\\StructType\\GetReverseOnDemandModeResponse',
            'IsPickableOnDate' => '\\StructType\\IsPickableOnDate',
            'IsPickableRequest' => '\\StructType\\IsPickableRequest',
            'DayRequestBase' => '\\StructType\\DayRequestBase',
            'IsPickableOnDateResponse' => '\\StructType\\IsPickableOnDateResponse',
            'IsDeliverableOnDate' => '\\StructType\\IsDeliverableOnDate',
            'IsDeliverableRequest' => '\\StructType\\IsDeliverableRequest',
            'IsDeliverableOnDateResponse' => '\\StructType\\IsDeliverableOnDateResponse',
            'GetLastNumber' => '\\StructType\\GetLastNumber',
            'GetLastNumberRequest' => '\\StructType\\GetLastNumberRequest',
            'ArrayOfEntry' => '\\ArrayType\\ArrayOfEntry',
            'Entry' => '\\StructType\\Entry',
            'GetLastNumberResponse' => '\\StructType\\GetLastNumberResponse',
            'ArrayOfLong' => '\\ArrayType\\ArrayOfLong',
            'GetNationalTransitTime' => '\\StructType\\GetNationalTransitTime',
            'GetNationalTransitTimeRequest' => '\\StructType\\GetNationalTransitTimeRequest',
            'GetNationalTransitTimeResponse' => '\\StructType\\GetNationalTransitTimeResponse',
            'GetRdvShipmentData' => '\\StructType\\GetRdvShipmentData',
            'GetRdvShipmentDataRequest' => '\\StructType\\GetRdvShipmentDataRequest',
            'GetRdvShipmentDataResponse' => '\\StructType\\GetRdvShipmentDataResponse',
            'ArrayOfRdvShipmentData' => '\\ArrayType\\ArrayOfRdvShipmentData',
            'RdvShipmentData' => '\\StructType\\RdvShipmentData',
            'RdvShipmentDataBase' => '\\StructType\\RdvShipmentDataBase',
            'RdvAddress' => '\\StructType\\RdvAddress',
            'RdvDeliveryInfo' => '\\StructType\\RdvDeliveryInfo',
            'RdvDeliveryInfoSmall' => '\\StructType\\RdvDeliveryInfoSmall',
            'ArrayOfRdvService' => '\\ArrayType\\ArrayOfRdvService',
            'RdvService' => '\\StructType\\RdvService',
            'ParcelInfoSin' => '\\StructType\\ParcelInfoSin',
            'ParcelInfo' => '\\StructType\\ParcelInfo',
            'UpdateRdvShipmentDataForShop' => '\\StructType\\UpdateRdvShipmentDataForShop',
            'UpdateRdvShipmentDataForShopRequest' => '\\StructType\\UpdateRdvShipmentDataForShopRequest',
            'UpdateRdvShipmentData' => '\\StructType\\UpdateRdvShipmentData',
            'RdvEsnInfo' => '\\StructType\\RdvEsnInfo',
            'UpdateRdvShipmentDataForShopResponse' => '\\StructType\\UpdateRdvShipmentDataForShopResponse',
            'UpdateRdvShipmentDataForAgencyPickup' => '\\StructType\\UpdateRdvShipmentDataForAgencyPickup',
            'UpdateRdvShipmentDataForAgencyPickupRequest' => '\\StructType\\UpdateRdvShipmentDataForAgencyPickupRequest',
            'UpdateRdvShipmentDataForAgencyPickupResponse' => '\\StructType\\UpdateRdvShipmentDataForAgencyPickupResponse',
            'UpdateRdvShipmentDataRequest' => '\\StructType\\UpdateRdvShipmentDataRequest',
            'RdvData' => '\\StructType\\RdvData',
            'UpdateRdvShipmentDataResponse' => '\\StructType\\UpdateRdvShipmentDataResponse',
            'UpdateRdvShipmentDataForPredict' => '\\StructType\\UpdateRdvShipmentDataForPredict',
            'UpdateRdvShipmentDataPredictRequest' => '\\StructType\\UpdateRdvShipmentDataPredictRequest',
            'UpdateRdvShipmentDataForPredictResponse' => '\\StructType\\UpdateRdvShipmentDataForPredictResponse',
            'UpdateRdvShipmentDataForSafePlace' => '\\StructType\\UpdateRdvShipmentDataForSafePlace',
            'UpdateRdvShipmentDataForSafePlaceRequest' => '\\StructType\\UpdateRdvShipmentDataForSafePlaceRequest',
            'UpdateRdvShipmentDataForSafePlaceResponse' => '\\StructType\\UpdateRdvShipmentDataForSafePlaceResponse',
            'GetSafePlaceData' => '\\StructType\\GetSafePlaceData',
            'GetSafePlaceDataRequest' => '\\StructType\\GetSafePlaceDataRequest',
            'GetSafePlaceDataResponse' => '\\StructType\\GetSafePlaceDataResponse',
            'ArrayOfBase64Binary' => '\\ArrayType\\ArrayOfBase64Binary',
            'GetCustomerAddress' => '\\StructType\\GetCustomerAddress',
            'GetCustomerAddressResponse' => '\\StructType\\GetCustomerAddressResponse',
            'CustomerAddress' => '\\StructType\\CustomerAddress',
            'GetNumberRange' => '\\StructType\\GetNumberRange',
            'NumberRangeRequest' => '\\StructType\\NumberRangeRequest',
            'NumberRangeBaseRequest' => '\\StructType\\NumberRangeBaseRequest',
            'GetNumberRangeResponse' => '\\StructType\\GetNumberRangeResponse',
            'NumberRangeResponse' => '\\StructType\\NumberRangeResponse',
            'NumberRangeBaseResponse' => '\\StructType\\NumberRangeBaseResponse',
            'GetNumberRangeBc' => '\\StructType\\GetNumberRangeBc',
            'NumberRangeBcRequest' => '\\StructType\\NumberRangeBcRequest',
            'NumberRangeBcBaseRequest' => '\\StructType\\NumberRangeBcBaseRequest',
            'GetNumberRangeBcResponse' => '\\StructType\\GetNumberRangeBcResponse',
            'NumberRangeBcResponse' => '\\StructType\\NumberRangeBcResponse',
            'TerminateNumberRange' => '\\StructType\\TerminateNumberRange',
            'TerminateNumberRangeRequest' => '\\StructType\\TerminateNumberRangeRequest',
            'TerminateNumberRangeBaseRequest' => '\\StructType\\TerminateNumberRangeBaseRequest',
            'TerminateNumberRangeResponse' => '\\StructType\\TerminateNumberRangeResponse',
            'TerminateNumberRangeBc' => '\\StructType\\TerminateNumberRangeBc',
            'TerminateNumberRangeBcRequest' => '\\StructType\\TerminateNumberRangeBcRequest',
            'TerminateNumberRangeBcResponse' => '\\StructType\\TerminateNumberRangeBcResponse',
            'TerminateShipment' => '\\StructType\\TerminateShipment',
            'TerminateShipmentRequest' => '\\StructType\\TerminateShipmentRequest',
            'TerminateShipmentResponse' => '\\StructType\\TerminateShipmentResponse',
            'GetCustomerProfile' => '\\StructType\\GetCustomerProfile',
            'GetCustomerProfileRequest' => '\\StructType\\GetCustomerProfileRequest',
            'ArrayOfCustomer' => '\\ArrayType\\ArrayOfCustomer',
            'GetCustomerProfileResponse' => '\\StructType\\GetCustomerProfileResponse',
            'ArrayOfCustomerProfile' => '\\ArrayType\\ArrayOfCustomerProfile',
            'CustomerProfile' => '\\StructType\\CustomerProfile',
            'ArrayOfProfileAddress' => '\\ArrayType\\ArrayOfProfileAddress',
            'ProfileAddress' => '\\StructType\\ProfileAddress',
            'ArrayOfCustomerService' => '\\ArrayType\\ArrayOfCustomerService',
            'CustomerService' => '\\StructType\\CustomerService',
            'GetProperties' => '\\StructType\\GetProperties',
            'GetPropertiesRequest' => '\\StructType\\GetPropertiesRequest',
            'GetPropertiesResponse' => '\\StructType\\GetPropertiesResponse',
            'ArrayOfPropertyDefinition' => '\\ArrayType\\ArrayOfPropertyDefinition',
            'PropertyDefinition' => '\\StructType\\PropertyDefinition',
            'PutProperties' => '\\StructType\\PutProperties',
            'PutPropertiesRequest' => '\\StructType\\PutPropertiesRequest',
            'ArrayOfPropertyEntry' => '\\ArrayType\\ArrayOfPropertyEntry',
            'PropertyEntry' => '\\StructType\\PropertyEntry',
            'PutPropertiesResponse' => '\\StructType\\PutPropertiesResponse',
            'GetOptionValue' => '\\StructType\\GetOptionValue',
            'GetOptionRequest' => '\\StructType\\GetOptionRequest',
            'GetOptionValueResponse' => '\\StructType\\GetOptionValueResponse',
            'GetOptionResponse' => '\\StructType\\GetOptionResponse',
            'GetOptionValues' => '\\StructType\\GetOptionValues',
            'GetOptionsRequest' => '\\StructType\\GetOptionsRequest',
            'GetOptionValuesResponse' => '\\StructType\\GetOptionValuesResponse',
            'GetOptionsResponse' => '\\StructType\\GetOptionsResponse',
            'ArrayOfGetOptionResponse' => '\\ArrayType\\ArrayOfGetOptionResponse',
            'SendCNOTData' => '\\StructType\\SendCNOTData',
            'CNOTData' => '\\StructType\\CNOTData',
            'ArrayOfTask' => '\\ArrayType\\ArrayOfTask',
            'Task' => '\\StructType\\Task',
            'ArrayOfCNOTParcel' => '\\ArrayType\\ArrayOfCNOTParcel',
            'CNOTParcel' => '\\StructType\\CNOTParcel',
            'Location' => '\\StructType\\Location',
            'Rendezvous' => '\\StructType\\Rendezvous',
            'ArrayOfPhoneCall' => '\\ArrayType\\ArrayOfPhoneCall',
            'PhoneCall' => '\\StructType\\PhoneCall',
            'ArrayOfLocation' => '\\ArrayType\\ArrayOfLocation',
            'SendCNOTDataResponse' => '\\StructType\\SendCNOTDataResponse',
            'CheckIfReverseInverseShipmentExists' => '\\StructType\\CheckIfReverseInverseShipmentExists',
            'CheckIfReverseInverseShipmentExistsRequest' => '\\StructType\\CheckIfReverseInverseShipmentExistsRequest',
            'ParcelBcIdRequest' => '\\StructType\\ParcelBcIdRequest',
            'BcIdBaseRequest' => '\\StructType\\BcIdBaseRequest',
            'CheckIfReverseInverseShipmentExistsResponse' => '\\StructType\\CheckIfReverseInverseShipmentExistsResponse',
            'CheckIfReverseInverseShipmentExistsBcId' => '\\StructType\\CheckIfReverseInverseShipmentExistsBcId',
            'CheckIfReverseInverseShipmentExistsBcIdRequest' => '\\StructType\\CheckIfReverseInverseShipmentExistsBcIdRequest',
            'BcIdRequest' => '\\StructType\\BcIdRequest',
            'CheckIfReverseInverseShipmentExistsBcIdResponse' => '\\StructType\\CheckIfReverseInverseShipmentExistsBcIdResponse',
            'GetShipping' => '\\StructType\\GetShipping',
            'GetShippingRequest' => '\\StructType\\GetShippingRequest',
            'GetShippingResponse' => '\\StructType\\GetShippingResponse',
            'ArrayOfShipping' => '\\ArrayType\\ArrayOfShipping',
            'Shipping' => '\\StructType\\Shipping',
            'AddressName' => '\\StructType\\AddressName',
            'getInfo' => '\\StructType\\GetInfo',
            'getInfoResponse' => '\\StructType\\GetInfoResponse',
            'VerifyClient' => '\\StructType\\VerifyClient',
            'VerifyRequest' => '\\StructType\\VerifyRequest',
            'VerifyClientResponse' => '\\StructType\\VerifyClientResponse',
            'VerifyResponse' => '\\StructType\\VerifyResponse',
            'runAction' => '\\StructType\\RunAction',
            'RunActionRequest' => '\\StructType\\RunActionRequest',
            'runActionResponse' => '\\StructType\\RunActionResponse',
            'RunActionResponse' => '\\StructType\\RunActionResponse_1',
            'GetShipmentTraceSingle' => '\\StructType\\GetShipmentTraceSingle',
            'ShipmentDetailRequest' => '\\StructType\\ShipmentDetailRequest',
            'ShipmentBaseRequest' => '\\StructType\\ShipmentBaseRequest',
            'RequestShipmentBase' => '\\StructType\\RequestShipmentBase',
            'RequestBase' => '\\StructType\\RequestBase',
            'Options' => '\\StructType\\Options',
            'GetShipmentTraceSingleResponse' => '\\StructType\\GetShipmentTraceSingleResponse',
            'ShipmentTrace' => '\\StructType\\ShipmentTrace',
            'clsShipmentTraceBase' => '\\StructType\\ClsShipmentTraceBase',
            'SdgiData' => '\\StructType\\SdgiData',
            'ArrayOfClsTrace' => '\\ArrayType\\ArrayOfClsTrace',
            'clsTrace' => '\\StructType\\ClsTrace',
            'ArrayOfClsTraceDetails' => '\\ArrayType\\ArrayOfClsTraceDetails',
            'clsTraceDetails' => '\\StructType\\ClsTraceDetails',
            'ArrayOfImage' => '\\ArrayType\\ArrayOfImage',
            'Image' => '\\StructType\\Image',
            'GetShipmentTrace' => '\\StructType\\GetShipmentTrace',
            'GetShipmentTraceResponse' => '\\StructType\\GetShipmentTraceResponse',
            'ArrayOfShipmentTrace' => '\\ArrayType\\ArrayOfShipmentTrace',
            'GetShipmentTraceByReference' => '\\StructType\\GetShipmentTraceByReference',
            'ReferenceDetailRequest' => '\\StructType\\ReferenceDetailRequest',
            'ReferenceBaseRequest' => '\\StructType\\ReferenceBaseRequest',
            'GetShipmentTraceByReferenceResponse' => '\\StructType\\GetShipmentTraceByReferenceResponse',
            'GetLastTrace' => '\\StructType\\GetLastTrace',
            'GetLastTraceRequest' => '\\StructType\\GetLastTraceRequest',
            'GetLastTraceBaseRequest' => '\\StructType\\GetLastTraceBaseRequest',
            'Parcel' => '\\StructType\\Parcel',
            'GetLastTraceResponse' => '\\StructType\\GetLastTraceResponse',
            'ArrayOfGetLastTraceResponse' => '\\ArrayType\\ArrayOfGetLastTraceResponse',
            'GetLastTraceBaseResponse' => '\\StructType\\GetLastTraceBaseResponse',
            'GetLastTraceBc' => '\\StructType\\GetLastTraceBc',
            'GetLastTraceBcRequest' => '\\StructType\\GetLastTraceBcRequest',
            'GetLastTraceBcResponse' => '\\StructType\\GetLastTraceBcResponse',
            'ArrayOfGetLastTraceBcResponse' => '\\ArrayType\\ArrayOfGetLastTraceBcResponse',
        );
    }
}