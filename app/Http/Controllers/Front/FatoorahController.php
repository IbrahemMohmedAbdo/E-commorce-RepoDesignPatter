<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Services\FatoorahServices;
use Illuminate\Http\Request;

class FatoorahController extends Controller
{
    private $fatoorah;
    public function __construct(FatoorahServices $fatoorah)
    {
        $this->fatoorah = $fatoorah;
    }


    public function pay()
    {
        $postFields = [
            //Fill required data
         //   'InvoiceValue'       => $invoiceValue,
            'CustomerName'       => 'fname lname',
            'NotificationOption' => 'LNK', //'SMS', 'EML', or 'ALL'
                //Fill optional data
                //'DisplayCurrencyIso' => $displayCurrencyIso,
                //'MobileCountryCode'  => $phone[0],
                //'CustomerMobile'     => $phone[1],
                'CustomerEmail'      => 'email@example.com',
                'CallBackUrl'        => 'https://google.com',
                'ErrorUrl'           => 'https://youtube.com', //or 'https://example.com/error.php'
                'Language'           => 'en', //or 'ar'
                //'CustomerReference'  => 'orderId',
                //'CustomerCivilId'    => 'CivilId',
                //'UserDefinedField'   => 'This could be string, number, or array',
                //'ExpiryDate'         => '', //The Invoice expires after 3 days by default. Use 'Y-m-d\TH:i:s' format in the 'Asia/Kuwait' time zone.
                //'CustomerAddress'    => $customerAddress,
                //'InvoiceItems'       => $invoiceItems,
                //'Suppliers'          => $suppliers,
        ];
        return $this->fatoorah->sendPaymentRequest($postFields);
    }
}
