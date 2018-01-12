<?php
namespace Divart\Trumpia\Common;

class RestConst
{
    const TRUMPIA_RESR_URL = 'http://api.trumpia.com/rest';
    const VERSION = 'v1';

    const STATUS_CODES = [
        'MPCE0000'=>'The request was successful.',
        'MPCE0101'=>'The request failed to be authenticated.',
        'MPCE0301'=>'The request failed due to a temporary issue. Please retry in a few moments.',
        'MPCE0302'=>'API Call is temporarily disabled due to an internal issue.',
        'MPCE0801'=>'You must enter at least one proper parameter.',
        'MPCE3101'=>'Your account is past due.',
        'MPCE3102'=>'Your trial period has expired.',
        'MPCE3201'=>'You do not have enough Domestic Text Credits to process this request.',
        'MPCE3202'=>'You do not have enough International Text Credits to process this request.',
        'MPCE3203'=>'There was a credit error.',
        'MPCE3301'=>'The number of mobile keywords you are trying to create exceeds your current plan\'s limit.',
        'MPCE3302'=>'The number of subscriptions to which you are trying to send a message exceeds your current plan\'s limit.',
        'MPCE3303'=>'The total number of emails exceeds your current plant\'s limit.',
        'MPCE4002'=>'Unexpected error. Please contact your support team.',
        // List
        'MPLE1101'=>'The list name exceeds the maximum length allowed.',
        'MPLE1102'=>'The display name exceeds the maximum length allowed.',
        'MPLE1103'=>'The frequency exceeds the maximum length allowed.',
        'MPLE1104'=>'The description exceeds the maximum length allowed.',
        'MPLE1201'=>'The list name includes special characters or spaces, which are not allowed.',
        'MPLE1202'=>'The display name includes special characters or spaces, which are not allowed.',
        'MPLE1203'=>'The frequency includes a non-numeric value, which is not allowed.',
        'MPLE1204'=>'The description includes special characters, which are not allowed.',
        'MPLE2101'=>'"list_name" cannot be empty.',
        'MPLE2102'=>'"display_name" cannot be empty.',
        'MPLE2103'=>'"frequency" cannot be empty.',
        'MPLE2104'=>'"description" cannot be empty.',
        'MPLE2401'=>'The list name is already registered.',
        'MPLE1205'=>'The list ID can include only numerical values; no other characters are allowed.',
        'MPLE2105'=>'A list ID has not been entered.',
        'MPLE2301'=>'The list ID you queried does not exist.',
        'MPLE2001'=>'The list cannot be deleted because it is in use by another feature you are using. For example, you cannot delete a list for a mobile keyword if that same list has been assigned to mobile coupons.',
        // Subscription
        'MPSE0401'=>'PUT Subscription error message with no API contract.',
        'MPSE0501'=>'The tool being added is blocked. Note: Tools include - email, mobile phone, landline phone, and AOL IM.',
        'MPSE1001'=>'The allow-message parameter only accepts only LANDLINE or MOBILE as values.',
        'MPSE1002'=>'Valid values are fixed by the options of the custom data field. You can get the valid values via GET Custom Data Field.',
        'MPSE1101'=>'Each list name can be only 1-30 characters in length.',
        'MPSE1102'=>'The first name of the subscription exceeds the maximum length allowed.',
        'MPSE1103'=>'The last name of the subscription exceeds the maximum length allowed.',
        'MPSE1105'=>'Max length is fixed by the options of the custom data field. You can get the valid values via GET Custom Data Field.',
        'MPSE1106'=>'Mobile number must be 10 characters when the country_code is 1, and 1-20 characters when the country_code is not 1.',
        'MPSE1107'=>'Landline number must be 10 characters.',
        'MPSE1201'=>'The list name includes special characters, which are not allowed.',
        'MPSE1204'=>'The custom data ID can include only numerical values; no other characters are allowed.',
        'MPSE1205'=>'The custom data value includes special characters, which are not allowed.',
        'MPSE1208'=>'The mobile number is only made up of numerical values; no other characters are allowed.',
        'MPSE1209'=>'The landline number is only made up of numerical values; no other characters are allowed.',
        'MPSE2001'=>'An invalid phone number was entered. Supported countries for voice are U.S., Canada, Guam and Puerto Rico.',
        'MPSE2004'=>'Country_code should be 1 only for landline number. For now, we don’t allow other country codes.',
        'MPSE2101'=>'The list name is empty.',
        'MPSE2102'=>'The subscriptions are empty.',
        'MPSE2103'=>'Tool information is missing for the subscription being added.',
        'MPSE2109'=>'A custom data ID has not been entered.',
        'MPSE2110'=>'A value has not been entered.',
        'MPSE2201'=>'The mobile number is incorrectly formatted.',
        'MPSE2202'=>'The landline number is incorrectly formatted.',
        'MPSE2203'=>'The email address is incorrectly formatted.',
        'MPSE2207'=>'The format of the date’s value is incorrect.',
        'MPSE2208'=>'Mobile number may not start with 0 or 1 when the country_code is 1, and may not start with 0 when the country_code is not 1.',
        'MPSE2209'=>'Landline number may not start with 0 or 1.',
        'MPSE2302'=>'The list name being added was not found.',
        'MPSE2306'=>'The custom data ID you entered does not exist.',
        'MPSE2401'=>'The tool being added has already been registered.',
        'MPSE2501'=>'Value should be in a fixed number range. You can get the fixed number range via GET Custom Data Field.',
        'MPSE2502'=>'Valid value is decided by the default and interval values. You can get these values via GET Custom Data Field.',
        'MPSE1202'=>'The subscription ID can include only numerical values; no other characters are allowed.',
        'MPSE2303'=>'The requested subscription is invalid.',
        'MPSE1003'=>'Row_size must have a value from 100 to 10000.',
        'MPSE1206'=>'The row_size is made up of only numerical values; no other characters are allowed.',
        'MPSE1207'=>'The page is made up of only numerical values; no other characters are allowed.',
        'MPSE4001'=>'Selected page does not have any subscriptions.',
        'MPSE1104'=>'Length of search data exceeded the character length limit. Please limit the search_data to 1-90 characters.',
        'MPSE1203'=>'The list ID can include only numerical values; no other characters are allowed.',
        'MPSE2002'=>'Search type value is unsupported type. Supported search type values are 1~4 and 102~105.',
        'MPSE2106'=>'Search type is not specified.',
        'MPSE2107'=>'Search data is not specified.',
        'MPSE2108'=>'A list ID has not been entered.',
        'MPSE2205'=>'Unsupported date format. Dates have to be in the format of “YYYY-MM-DD hh:mm:ss”.',
        'MPSE2206'=>'Unsupported date range format. Dates have to be in the format of “YYYY-MM-DD hh:mm:ss~YYYY-MM-DD hh:mm:ss”.',
        'MPSE2304'=>'The list ID you queried does not exist.',
        'MPSE2305'=>'No subscription was found with given criteria - search type and search data.',
        // Message
        'MPME0401'=>'The account does not have permission to use MMS.',
        'MPME0601'=>'Message content contains inappropriate phrase(s), and is caught by spam filter.',
        'MPME0602'=>'Organization name contains inappropriate phrase(s), and is caught by spam filter.',
        'MPME0603'=>'Email subject contains inappropriate phrase(s), and is caught by spam filter.',
        'MPME1001'=>'The recipient type you have entered is not a valid subscription or list.',
        'MPME1002'=>'The file type of your MMS attachment is not supported.',
        'MPME1003'=>'An invalid resource URL was entered.',
        'MPME1101'=>'The body of your SMS message exceeds the maximum length allowed.',
        'MPME1102'=>'The body of your MMS message exceeds the maximum length allowed.',
        'MPME1103'=>'The subject line of your email message exceeds the maximum length allowed.',
        'MPME1105'=>'The first name from the mail merge exceeds the maximum length allowed.',
        'MPME1106'=>'The last name from the mail merge exceeds the maximum length allowed.',
        'MPME1107'=>'The email content exceeds the maximum length allowed.',
        'MPME1108'=>'The description exceeds the maximum length allowed.',
        'MPME1109'=>'The MMS subject exceeds the maximum length allowed.',
        'MPME1110'=>'The body of your SMS message exceeds the maximum length allowed.',
        'MPME1201'=>'Your list ID includes special characters or spaces, which are not allowed.',
        'MPME1202'=>'Your subscription ID includes special characters or spaces, which are not allowed.',
        'MPME1204'=>'The SMS message includes special characters, which are not allowed.',
        'MPME1205'=>'The MMS message includes special characters, which are not allowed.',
        'MPME1206'=>'The first name includes special characters, which are not allowed.',
        'MPME1207'=>'The last name includes special characters, which are not allowed.',
        'MPME1208'=>'The organization name ID can only include positive numerical values.',
        'MPME2001'=>'Both SMS and MMS cannot be selected for the same mobile text campaign.',
        'MPME2002'=>'There is an insufficient supply of coupons.',
        'MPME2003'=>'The coupon included in your message expires in less than 24 hours. Please set a longer redemption period.',
        'MPME2005'=>'Only one coupon can be included in your email message.',
        'MPME2007'=>'Only one coupon can be included in your mobile text message.',
        'MPME2008'=>'The coupon included in your email and mobile text message is different. They must be the same.',
        'MPME2009'=>'There are no recipients in your selected list(s).',
        'MPME2010'=>'The entered schedule date is in the past.',
        'MPME2011'=>'The coupon included in your message is invalid.',
        'MPME2012'=>'The coupon included in your message is expired.',
        'MPME2013'=>'The file size of your MMS attachment is too large.',
        'MPME2015'=>'You must enter 1 to 100 list IDs for the recipients value.',
        'MPME2016'=>'You must enter 1 to 500 subscription IDs for the recipients value.',
        'MPME2017'=>'The organization name ID is not verified. Organization name IDs must be verified before it can be used.',
        'MPME2020'=>'Selected mobile numbers are registered with carriers that do not support MMS. Here is a list of MMS supported carriers: AT&T, Verizon, T-Mobile, Sprint, Alltel, US Cellular, Cricket, Boost-CDMA, Boost Mobile.',
        'MPME2021'=>'Invalid mail data entered in the SMS message. You can get information about the error via the error_data parameter.',
        'MPME2022'=>'Invalid mail data entered in the MMS message. You can get information about the error via the error_data parameter.',
        'MPME2023'=>'Invalid mail data entered in the email. You can get information about the error via the error_data parameter.',
        'MPME2024'=>'You can add up to 10 custom data fields for the SMS message.',
        'MPME2025'=>'You can add up to 10 custom data fields for the MMS message.',
        'MPME2026'=>'You can add up to 10 custom data fields for the email.',
        'MPME2102'=>'The body of your SMS message is empty.',
        'MPME2103'=>'The body of your MMS message is empty.',
        'MPME2104'=>'The reply to email address of your message is empty.',
        'MPME2105'=>'"description" cannot be empty.',
        'MPME2106'=>'No messaged are entered in your request such as email, SMS/MMS, or IM.',
        'MPME2107'=>'A recipients has not been entered.',
        'MPME2108'=>'A recipients type has not been entered.',
        'MPME2109'=>'A recipients value has not been entered.',
        'MPME2110'=>'A email subject has not been entered.',
        'MPME2111'=>'A email content has not been entered.',
        'MPME2113'=>'A MMS subject has not been entered.',
        'MPME2115'=>'A resource has not been entered.',
        'MPME2116'=>'A first name has not been entered.',
        'MPME2117'=>'A last name has not been entered.',
        'MPME2118'=>'A send date has not been entered.',
        'MPME2201'=>'The format of the send date and time is incorrect.',
        'MPME2202'=>'The resource must include http://.',
        'MPME2301'=>'You have entered an invalid subscription ID.',
        'MPME2302'=>'An invalid list ID was inputted.',
        'MPME2303'=>'The resource you entered does not exist.',
        'MPME2305'=>'The organization name ID you queried does not exist.',
        'MPME1203'=>'The message ID is only made up of numerical values; no other characters are allowed.',
        'MPME2014'=>'Your message was not sent due to insufficient supply of coupons.',
        'MPME2304'=>'You have entered an invalid message ID.',
        'MPME3001'=>'Your request has failed due to inadequate conditions.',
        'MPME1209'=>'The offset is a positive number.',
        'MPME2018'=>'The limit must have a value between 1 and 1000.',
        'MPME2019'=>'The order parameter only accepts scheduled_at or -scheduled_at as values.',
        // Direct SMS
        'MRCE0101'=>'Unauthorized access.',
        'MRCE0301'=>'The request failed due to a temporary issue. Please retry in a few moments.',
        'MRCE0401'=>'The account does not have permission to use the API resource.',
        'MRCE0801'=>'You must enter at least one proper parameter.',
        'MRCE3101'=>'Your account is past due.',
        'MRCE3102'=>'Your account is suspended.',
        'MRCE3103'=>'Your trial period has expired.',
        'MRCE3201'=>'You do not have enough Domestic Text Credits to process this request.',
        'MRCE3202'=>'You do not have enough International Text Credits to process this request.',
        'MRCE3203'=>'There was some other type of credit error.',
        'MRCE3301'=>'The number of mobile keywords you are trying to create exceeds your current plan\'s limit.',
        'MRCE3302'=>'The number of subscriptions you are trying to send a message to exceeds your current plan\'s limit.',
        'MRCE3303'=>'The total number of emails exceeds your current plant\'s limit.',
        'MRME0551'=>'The tool being added is blocked.',
        'MRME0651'=>'Message content contains inappropriate phrase(s), and is caught by spam filter.',
        'MRME0652'=>'Organization name contains inappropriate phrase(s), and is caught by spam filter.',
        'MRME1051'=>'Mobile number must be 10 characters when the country_code is 1, and 1-20 characters when the country_code is not 1.',
        'MRME1052'=>'Only numerical values are valid.',
        'MRME1053'=>'Mobile number may not start with 0 or 1 when the country_code is 1, and may not start with 0 when the country_code is not 1.',
        'MRME1054'=>'The body of your SMS message exceeds the maximum length allowed.',
        'MRME1055'=>'The body of your SMS message exceeds the maximum length allowed.',
        'MRME1056'=>'Only numerical values are valid.',
        'MRME1251'=>'The SMS message includes special characters, which are not allowed.',
        'MRME2001'=>'The mobile number is incorrectly formatted.',
        'MRME2151'=>'A message has not been inputted.',
        'MRME2152'=>'The mobile number us empty.',
        'MRME2251'=>'An invalid country code was entered.',
        'MRME2551'=>'US(1) and CA(1) are the valid values for the intended sender.',
        'MRME2552'=>'Entered sender is invalid for your account.',
        'MRME1252'=>'The SMS ID is only made up of numerical values; no other characters are allowed.',
        'MRME2351'=>'You have entered an invalid SMS ID.',
        'MRME3051'=>'Your request has failed due to inadequate conditions.',
        //Direct Mobile Message
        'MRME0402'=>'You must complete the API Certification to be able to message contacts that have not opted in.',
        'MRME0552'=>'The tool you are trying to add is blocked.',
        'MRME0653'=>'Text content contains inappropriate phrase(s) and was caught by our spam filter.',
        'MRME0654'=>'Organization name contains inappropriate phrase(s) and was caught by our spam filter.',
        'MRME1057'=>'Invalid mobile number: Only numerical values are valid.',
        'MRME1058'=>'Mobile number must be 10 characters when the country_code is 1, and 1-20 characters when the country_code is not 1.',
        'MRME1059'=>'Mobile number may not start with 0 or 1 when the country_code is 1, and may not start with 0 when the country_code is not 1.',
        'MRME1060'=>'Only numerical values are valid.',
        'MRME1061'=>'An invalid media URL was entered.',
        'MRME1062'=>'The file type of your MMS attachment is not supported.',
        'MRME1063'=>'If the sender is registered a landline number, you cannot send video file.',
        'MRME1101'=>'The text exceeds the maximum length allowed.',
        'MRME1102'=>'The MMS subject exceeds the maximum length allowed.',
        'MRME1255'=>'The text includes special characters, which are not allowed.',
        'MRME1256'=>'The MMS subject includes special characters, which are not allowed.',
        'MRME1257'=>'The organization name ID can only include positive numerical values.',
        'MRME2002'=>'The mobile number is incorrectly formatted.',
        'MRME2003'=>'Every message must include text or media.',
        'MRME2004'=>'The organization name ID provided has not been verified. Organization names must be verified before it can be used.',
        'MRME2005'=>'Invalid mobile_number : Unable to find a valid country code from the mobile number.',
        'MRME2006'=>'The file size of your MMS attachment is too large.',
        'MRME2153'=>'The mobile number parameter must not be empty.',
        'MRME2154'=>'A message has not been inputted.',
        'MRME2155'=>'Text has not been inputted.',
        'MRME2156'=>'A media URL has not been entered.',
        'MRME2157'=>'A MMS subject has not been entered.',
        'MRME2201'=>'The media URL must include http:// or https://.',
        'MRME2353'=>'The media URL you entered does not exist.',
        'MRME2354'=>'The organization name ID queried does not exist.',
        'MRME2554'=>'US(1) and CA(1) are the valid values for the intended sender.',
        'MRME2555'=>'Invalid sender value. Verify sender numbers in your account under Manage -> Utilities.',
        'MRME2556'=>'The carrier for this mobile number does not support Free to End User.',
        'MRME2557'=>'LMS/MMS is only supported in the US.',
        'MRME2558'=>'The mobile numbers selected are registered with carriers that do not support MMS. The following is a list of carriers that support MMS: AT&T, Verizon, T-Mobile, Sprint, Alltel, US Cellular, Cricket, Boost-CDMA, Boost Mobile.',
        'MRME1254'=>'The task ID is only made up of numerical values; no other characters are allowed.',
        'MRME2355'=>'You have entered an invalid task ID.',
        'MRME3052'=>'Your request has failed due to inadequate conditions.',
        // Organization Name
        'MPGE0601'=>'Name contains inappropriate phrase(s), and is caught by spam filter.',
        'MPGE1101'=>'Invalid name. Name must be 1-32 characters in length.',
        'MPGE1102'=>'Invalid description. Description must be 1-500 characters in length.',
        'MPGE1201'=>'The name includes special characters, which are not allowed.',
        'MPGE1202'=>'The description includes special characters, which are not allowed.',
        'MPGE2101'=>'Name is empty.',
        'MPGE2102'=>'Description is empty.',
        'MPGE2401'=>'Entered name has been registered already.',
        'MPGE1203'=>'The organization name ID can only include numerical values; no other characters are allowed.',
        'MPGE2001'=>'The organization name is not verified. The default organization name must be verified.',
        'MPGE2301'=>'Org_name_id was not found.',
        'MPGE2002'=>'Default organization name cannot be deleted.',
        // Status Report
        'MPRE2301'=>'The request_id provided is incorrect.',
        'MPCE4001'=>'The request is still in progress. Please wait a few seconds.',
    ];

    public static function textStatusCode($code)
    {
        return array_key_exists($code, self::STATUS_CODES) ? self::STATUS_CODES[$code] : 'Status code not found';
    }
}
