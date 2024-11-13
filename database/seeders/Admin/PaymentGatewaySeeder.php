<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Seeder;
use App\Models\Admin\PaymentGateway;
use App\Models\Admin\PaymentGatewayCurrency;

class PaymentGatewaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //gateway
        $payment_gateways = array(
            array('id' => '1','slug' => 'add-money','code' => '105','type' => 'AUTOMATIC','name' => 'Paypal','title' => 'Paypal Payment Gateway','alias' => 'paypal','image' => 'c6e11b4e-0c49-479f-8b65-6283201fb5d1.webp','credentials' => '[{"label":"Secret Id","placeholder":"Enter Secret Id","name":"secret-id","value":"EOmsQW73ja4jFXUIpkeTuKj5qLcqiXRCPZMPx-2UNzNy729C5lzN8cYIdZRfHIx7xPVh9cyaeByefXJL"},{"label":"Client Id","placeholder":"Enter Client Id","name":"client-id","value":"AZhkSGtOqSoGsixors18c5UDkmHD53TzNogt2ksVfxqDeu1RzqdjMClVv8VGarayaAH1exMK0JHMjE8v"}]','supported_currencies' => '["USD","AUD"]','crypto' => '0','desc' => NULL,'input_fields' => NULL,'env' => 'SANDBOX','status' => '1','last_edit_by' => '1','created_at' => '2023-03-09 12:44:11','updated_at' => '2023-06-23 23:39:26'),
            array('id' => '3','slug' => 'add-money','code' => '110','type' => 'AUTOMATIC','name' => 'Stripe','title' => 'Stripe Payment Gateway','alias' => 'stripe','image' => '07775b99-39e0-435a-b0aa-37da922a4898.webp','credentials' => '[{"label":"Publishable Key","placeholder":"Enter Publishable Key","name":"publishable-key","value":"pk_test_51NECrlJXLo7QTdMco2E4YxHSeoBnDvKmmi0CZl3hxjGgH1JwgcLVUF3ZR0yFraoRgT7hf0LtOReFADhShAZqTNuB003PnBSlGP"},{"label":"Secret Id","placeholder":"Enter Secret Id","name":"secret-id","value":"sk_test_51NECrlJXLo7QTdMc2x7K5LaDuiS0MGNYHkO9dzzV0Y9XuWNZsXjECFsusjZEnqtxMIjCh3qtogc5sHHwL2oQ083900aFy1k7DE"}]','supported_currencies' => '["USD","AED","AUD","BDT","BGN","BMD","CAD"]','crypto' => '0','desc' => NULL,'input_fields' => NULL,'env' => NULL,'status' => '1','last_edit_by' => '1','created_at' => '2023-03-19 06:40:08','updated_at' => '2023-06-21 12:00:46'),
            array('id' => '14','slug' => 'add-money','code' => '140','type' => 'AUTOMATIC','name' => 'Flutterwave','title' => 'Flutterwave Payement Gateway','alias' => 'flutterwave','image' => '137701d0-4e12-4a21-bc63-cda5454c2476.webp','credentials' => '[{"label":"Encryption key","placeholder":"Enter Encryption key","name":"encryption-key","value":"FLWSECK_TEST27bee2235efd"},{"label":"Secret key","placeholder":"Enter Secret key","name":"secret-key","value":"FLWSECK_TEST-da35e3dbd28be1e7dc5d5f3519e2ebef-X"},{"label":"Public key","placeholder":"Enter Public key","name":"public-key","value":"FLWPUBK_TEST-e0bc02a00395b938a4a2bed65e1bc94f-X"}]','supported_currencies' => '["AED", "ARS", "AUD", "CAD", "CHF", "CZK", "ETB", "EUR", "GBP", "GHS", "ILS", "INR", "JPY", "KES", "MAD", "MUR", "MYR", "NGN", "NOK", "NZD", "PEN", "PLN", "RUB", "RWF", "SAR", "SEK", "SGD", "SLL", "TZS", "UGX", "USD", "XAF", "XOF", "ZAR", "ZMK", "ZMW", "MWK"]','crypto' => '0','desc' => NULL,'input_fields' => NULL,'env' => NULL,'status' => '1','last_edit_by' => '1','created_at' => '2023-05-25 11:40:27','updated_at' => '2023-05-30 18:42:59'),
            array('id' => '17','slug' => 'money-out','code' => '145','type' => 'AUTOMATIC','name' => 'Flutterwave','title' => 'Flutterwave Withdraw Payment Gateway','alias' => 'flutterwave-money-out','image' => '8ae348ab-83c7-4405-94de-231ea1c8b1bc.webp','credentials' => '[{"label":"Base Url","placeholder":"Enter Base Url","name":"base-url","value":"https://api.flutterwave.com/v3"},{"label":"Callback Url","placeholder":"Enter Callback Url","name":"callback-url","value":"https://webhook.site/b3e505b0-fe02-430e-a538-22bbbce8ce0d"},{"label":"Encryption key","placeholder":"Enter Encryption key","name":"encryption-key","value":"FLWSECK_TESTa21364cf85ef"},{"label":"Secret key","placeholder":"Enter Secret key","name":"secret-key","value":"FLWSECK_TEST-SANDBOXDEMOKEY-X"},{"label":"Public key","placeholder":"Enter Public key","name":"public-key","value":"FLWPUBK_TEST-8c91f68d3221f80efdd1d7f9fa9fb2d4-X"}]','supported_currencies' => '["AED", "ARS", "AUD", "CAD", "CHF", "CZK", "ETB", "EUR", "GBP", "GHS", "ILS", "INR", "JPY", "KES", "MAD", "MUR", "MYR", "NGN", "NOK", "NZD", "PEN", "PLN", "RUB", "RWF", "SAR", "SEK", "SGD", "SLL", "TZS", "UGX", "USD", "XAF", "XOF", "ZAR", "ZMK", "ZMW", "MWK","EGP"]','crypto' => '0','desc' => NULL,'input_fields' => NULL,'env' => NULL,'status' => '1','last_edit_by' => '1','created_at' => '2023-05-29 17:00:08','updated_at' => '2023-05-29 17:00:08'),
            array('id' => '18','slug' => 'add-money','code' => '150','type' => 'MANUAL','name' => 'JazzCash','title' => 'JazzCash Gateway','alias' => 'jazzcash','image' => NULL,'credentials' => NULL,'supported_currencies' => '["PKR"]','crypto' => '0','desc' => '<p>This is the &nbsp;<strong>JazzCash p</strong>ayment gateway for money out, Please follow given instructions.</p>','input_fields' => '[{"type":"text","label":"Mobile Number","name":"mobile_number","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"Pin","name":"pin","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"Trasnaction Id","name":"trasnaction_id","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}}]','env' => NULL,'status' => '1','last_edit_by' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '19','slug' => 'add-money','code' => '155','type' => 'MANUAL','name' => 'EasyPaisa','title' => 'EasyPaisa Gateway','alias' => 'easypaisa','image' => NULL,'credentials' => NULL,'supported_currencies' => '["PKR"]','crypto' => '0','desc' => '<p>This is the &nbsp;<strong>EasyPaisap </strong>ayment gateway for money out, Please follow given instructions.</p>','input_fields' => '[{"type":"text","label":"Mobile","name":"mobile","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"Pin","name":"pin","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"Transaction Id","name":"transaction_id","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}}]','env' => NULL,'status' => '1','last_edit_by' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '20','slug' => 'add-money','code' => '160','type' => 'MANUAL','name' => 'UPI','title' => 'UPI Gateway','alias' => 'upi','image' => NULL,'credentials' => NULL,'supported_currencies' => '["INR"]','crypto' => '0','desc' => '<p>This is the &nbsp;<strong>UPI p</strong>ayment gateway for money out, Please follow given instructions.</p>','input_fields' => '[{"type":"text","label":"UPI ID","name":"upi_id","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"UPI PIN","name":"upi_pin","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}}]','env' => NULL,'status' => '1','last_edit_by' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '21','slug' => 'add-money','code' => '165','type' => 'MANUAL','name' => 'PhonePe','title' => 'PhonePe Gateway','alias' => 'phonepe','image' => NULL,'credentials' => NULL,'supported_currencies' => '["INR"]','crypto' => '0','desc' => '<p>This is the &nbsp;<strong>PhonePe p</strong>ayment gateway for money out, Please follow given instructions.</p>','input_fields' => '[{"type":"text","label":"Mobile Number","name":"mobile_number","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"UPI ID","name":"upi_id","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"UPI PIN","name":"upi_pin","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"Transaction ID","name":"transaction_id","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}}]','env' => NULL,'status' => '1','last_edit_by' => '1','created_at' => NULL,'updated_at' => '2023-06-10 10:19:14'),
            array('id' => '22','slug' => 'add-money','code' => '170','type' => 'MANUAL','name' => 'Khalti','title' => 'Khalti Gateway','alias' => 'khalti','image' => NULL,'credentials' => NULL,'supported_currencies' => '["NPR"]','crypto' => '0','desc' => '<p>This is the &nbsp;<strong>Khalti p</strong>ayment gateway for money out, Please follow given instructions.</p>','input_fields' => '[{"type":"text","label":"Mobile Number","name":"mobile_number","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"PIN","name":"pin","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"Payment Method","name":"payment_method","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"Transaction ID","name":"transaction_id","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}}]','env' => NULL,'status' => '1','last_edit_by' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '23','slug' => 'money-out','code' => '175','type' => 'MANUAL','name' => 'JazzCash','title' => 'JazzCash Gateway','alias' => 'jazzcash','image' => NULL,'credentials' => NULL,'supported_currencies' => '["PKR"]','crypto' => '0','desc' => '<p>This is the &nbsp;<strong>JazzCash p</strong>ayment gateway for money out, Please follow given instructions.</p>','input_fields' => '[{"type":"text","label":"Mobile Number","name":"mobile_number","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"Pin","name":"pin","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"Trasnaction Id","name":"trasnaction_id","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}}]','env' => NULL,'status' => '1','last_edit_by' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '24','slug' => 'money-out','code' => '180','type' => 'MANUAL','name' => 'EasyPaisa','title' => 'EasyPaisa Gateway','alias' => 'easypaisa','image' => NULL,'credentials' => NULL,'supported_currencies' => '["PKR"]','crypto' => '0','desc' => '<p>This is the &nbsp;<strong>EasyPaisa p</strong>ayment gateway for money out, Please follow given instructions.</p>','input_fields' => '[{"type":"text","label":"Mobile","name":"mobile","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"Pin","name":"pin","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"Transaction Id","name":"transaction_id","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}}]','env' => NULL,'status' => '1','last_edit_by' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '25','slug' => 'money-out','code' => '185','type' => 'MANUAL','name' => 'UPI','title' => 'UPI Gateway','alias' => 'upi','image' => NULL,'credentials' => NULL,'supported_currencies' => '["INR"]','crypto' => '0','desc' => '<p>This is the &nbsp;<strong>UPI p</strong>ayment gateway for money out, Please follow given instructions.</p>','input_fields' => '[{"type":"text","label":"UPI ID","name":"upi_id","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"UPI PIN","name":"upi_pin","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}}]','env' => NULL,'status' => '1','last_edit_by' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '26','slug' => 'money-out','code' => '190','type' => 'MANUAL','name' => 'PhonePe','title' => 'PhonePe Gateway','alias' => 'phonepe','image' => NULL,'credentials' => NULL,'supported_currencies' => '["INR"]','crypto' => '0','desc' => NULL,'input_fields' => '[{"type":"text","label":"Mobile Number","name":"mobile_number","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"UPI ID","name":"upi_id","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"UPI PIN","name":"upi_pin","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"Transaction ID","name":"transaction_id","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}}]','env' => NULL,'status' => '1','last_edit_by' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '27','slug' => 'money-out','code' => '195','type' => 'MANUAL','name' => 'Khalti','title' => 'Khalti Gateway','alias' => 'khalti','image' => NULL,'credentials' => NULL,'supported_currencies' => '["NPR"]','crypto' => '0','desc' => '<p>This is the &nbsp;<strong>Khalti p</strong>ayment gateway for money out, Please follow given instructions.</p>','input_fields' => '[{"type":"text","label":"Mobile Number","name":"mobile_number","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"PIN","name":"pin","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"Payment Method","name":"payment_method","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}},{"type":"text","label":"Transaction ID","name":"transaction_id","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}}]','env' => NULL,'status' => '1','last_edit_by' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '28','slug' => 'add-money','code' => '200','type' => 'AUTOMATIC','name' => 'RazorPay','title' => 'Razor Pay Payment Gateway','alias' => 'razorpay','image' => '7f46e145-774e-41bf-9170-243605a5d4d0.webp','credentials' => '[{"label":"Public key","placeholder":"Enter Public key","name":"public-key","value":"rzp_test_voV4gKUbSxoQez"},{"label":"Secret Key","placeholder":"Enter Secret Key","name":"secret-key","value":"cJltc1jy6evA4Vvh9lTO7SWr"}]','supported_currencies' => '["USD","EUR","GBP","SGD","AED","AUD","CAD","CNY","SEK","NZD","MXN","BDT","EGP","HKD","INR","LBP","LKR","MAD","MYR","NGN","NPR","PHP","PKR","QAR","SAR","UZS","GHS"]','crypto' => '0','desc' => NULL,'input_fields' => NULL,'status' => '1','last_edit_by' => '1','created_at' => '2023-08-23 13:21:55','updated_at' => '2023-08-23 13:23:20','env' => 'SANDBOX'),
            array('id' => '29','slug' => 'add-money','code' => '205','type' => 'AUTOMATIC','name' => 'Pagadito','title' => 'Pagadito Payment Gateway','alias' => 'pagadito','image' => 'ae7f6892-ff89-4880-b485-d34f2512df26.webp','credentials' => '[{"label":"UID","placeholder":"Enter UID","name":"uid","value":"b73eb3fa1dc8bea4b4363322c906a8fd"},{"label":"WSK","placeholder":"Enter WSK","name":"wsk","value":"dc843ff5865bac2858ad8f23af081256"},{"label":"base_url","placeholder":"Enter base_url","name":"base_url","value":"https:\\/\\/sandbox.pagadito.com"}]','supported_currencies' => '["USD","HNL","CRC","DOP","GTQ","NIO","PAB"]','crypto' => '0','desc' => NULL,'input_fields' => NULL,'status' => '1','last_edit_by' => '1','created_at' => '2023-08-31 12:55:44','updated_at' => '2023-08-31 13:28:21','env' => 'SANDBOX'),
            array('id' => '30','slug' => 'add-money','code' => '210','type' => 'AUTOMATIC','name' => 'SSLCommerz','title' => 'SSLCommerz Payment Gateway For Add Money','alias' => 'sslcommerz','image' => 'f4fe90e9-9b25-48b8-b3f5-9847cfbc6da7.webp','credentials' => '[{"label":"Store Id","placeholder":"Enter Store Id","name":"store-id","value":"appde6513b3970d62c"},{"label":"Store Password","placeholder":"Enter Store Password","name":"store-password","value":"appde6513b3970d62c@ssl"},{"label":"Sandbox Url","placeholder":"Enter Sandbox Url","name":"sandbox-url","value":"https:\\/\\/sandbox.sslcommerz.com"},{"label":"Live Url","placeholder":"Enter Live Url","name":"live-url","value":"https:\\/\\/securepay.sslcommerz.com"}]','supported_currencies' => '["BDT","EUR","GBP","AUD","USD","CAD"]','crypto' => '0','desc' => NULL,'input_fields' => NULL,'status' => '1','last_edit_by' => '1','created_at' => '2023-09-27 16:11:26','updated_at' => '2023-09-27 16:11:53','env' => 'SANDBOX'),
            array('id' => '31','slug' => 'add-money','code' => '215','type' => 'AUTOMATIC','name' => 'CoinGate','title' => 'Crypto Payment gateway (CoinGate)','alias' => 'coingate','image' => '1e3e7e01-8ffa-46ec-9bcd-bc63501192e7.webp','credentials' => '[{"label":"Sandbox URL","placeholder":"Enter Sandbox URL","name":"sandbox-url","value":"https:\\/\\/api-sandbox.coingate.com\\/v2"},{"label":"Sandbox App Token","placeholder":"Enter Sandbox App Token","name":"sandbox-app-token","value":"XJW4RyhT8F-xssX2PvaHMWJjYe5nsbsrbb2Uqy4m"},{"label":"Production URL","placeholder":"Enter Production URL","name":"production-url","value":"https:\\/\\/api.coingate.com\\/v2"},{"label":"Production App Token","placeholder":"Enter Production App Token","name":"production-app-token","value":null}]','supported_currencies' => '["USD","BTC","LTC","ETH","BCH","TRX","ETC","DOGE","BTG","BNB","TUSD","USDT","BSV","MATIC","BUSD","SOL","WBTC","RVN","BCD","ATOM","BTTC","EURT"]','crypto' => '0','desc' => NULL,'input_fields' => NULL,'status' => '1','last_edit_by' => '1','created_at' => '2023-11-19 12:02:05','updated_at' => '2023-11-19 12:04:50','env' => 'SANDBOX'),
            array('id' => '32','slug' => 'add-money','code' => '220','type' => 'AUTOMATIC','name' => 'Tatum','title' => 'Tatum Gateway','alias' => 'tatum','image' => '857aeca5-e62c-45a1-b479-5e42eb7d746a.webp','credentials' => '[{"label":"Testnet","placeholder":"Enter Testnet","name":"test-net","value":"t-657aafddb117a3001c86eda4-37941d61197f4aa6bf416aff"},{"label":"Mainnet","placeholder":"Enter Mainnet","name":"main-net","value":"t-657aafddb117a3001c86eda4-53dede7263974bb4a63d6e0e"}]','supported_currencies' => '["BTC","ETH","SOL"]','crypto' => '1','desc' => NULL,'input_fields' => NULL,'status' => '1','last_edit_by' => '1','created_at' => now(),'updated_at' => now(),'env' => 'SANDBOX'),
            array('id' => '33','slug' => 'add-money','code' => '225','type' => 'AUTOMATIC','name' => 'Perfect Money','title' => 'Perfect Money Gateway','alias' => 'perfect-money','image' => 'seeder/pmoney.webp','credentials' => '[{"label":"Alternate Passphrase","placeholder":"Enter Alternate Passphrase","name":"alternate-passphrase","value":"t0d2nbK2ZA92fRTnIFsMTWsHT"},{"label":"EUR Account","placeholder":"Enter EUR Account","name":"eur-account","value":"E39620511"},{"label":"USD Account","placeholder":"Enter USD Account","name":"usd-account","value":"U39903302"}]','supported_currencies' => '["USD","EUR"]','crypto' => '0','desc' => NULL,'input_fields' => NULL,'env' => 'SANDBOX','status' => '1','last_edit_by' => '1','created_at' => now(),'updated_at' => now()),
            array('id' => '34','slug' => 'add-money','code' => '230','type' => 'AUTOMATIC','name' => 'Paystack','title' => 'Paystack Gateway','alias' => 'paystack','image' => 'seeder/paystack.webp','credentials' => '[{"label":"Secret Key","placeholder":"Enter Secret Key","name":"secret-key","value":"sk_test_d094bb8359027eab06ca8ea9a3b757e47e35684b"},{"label":"Public Key","placeholder":"Enter Public Key","name":"public-key","value":"pk_test_64a32791e5d7acc43acafb3646a1b9ce898519ea"}]','supported_currencies' => '["NGN","USD","GHS","ZAR","KES"]','crypto' => '0','desc' => NULL,'input_fields' => NULL,'env' => 'SANDBOX','status' => '1','last_edit_by' => '1','created_at' => now(),'updated_at' => now()),
            array('id' => "35",'slug' => 'add-money','code' => "235",'type' => 'MANUAL','name' => 'Bitcoin','title' => 'Bitcoin Gateway','alias' => 'bitcoin','image' => NULL,'credentials' => NULL,'supported_currencies' => '["BTC"]','crypto' => '1','desc' => '<p>This Is Manual Crypto Add Money Gateway</p>','input_fields' => '[{"type":"text","label":"Email","name":"email","required":true,"validation":{"max":"30","mimes":[],"min":"0","options":[],"required":true}}]','status' => '1','last_edit_by' => '1','created_at' => now(),'updated_at' => now(),'env' => NULL),
            array('id' => "36",'slug' => 'money-out','code' => "240",'type' => 'MANUAL','name' => 'Bitcoin','title' => 'Bitcoin Gateway','alias' => 'bitcoin','image' => NULL,'credentials' => NULL,'supported_currencies' => '["BTC"]','crypto' => '1','desc' => '<p>This Is Manual Crypto Withdraw Money Gateway</p>','input_fields' => '[{"type":"text","label":"Email","name":"email","required":true,"validation":{"max":"50","mimes":[],"min":"0","options":[],"required":true}}]','status' => '1','last_edit_by' => '1','created_at' => now(),'updated_at' => now(),'env' => NULL)

          );

          PaymentGateway::insert($payment_gateways);

          //gateway currency
          $payment_gateway_currencies = array(
            array('payment_gateway_id' => '1','name' => 'Paypal USD','alias' => 'paypal-usd-automatic','currency_code' => 'USD','currency_symbol' => '$','image' => '051bf8be-230e-44f5-8c0e-eac5872be32e.webp','min_limit' => '10.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '2.00000000','rate' => '1.00000000','created_at' => '2023-03-11 04:40:32','updated_at' => '2023-06-10 09:41:24'),
            array('payment_gateway_id' => '3','name' => 'Stripe USD','alias' => 'stripe-usd-automatic','currency_code' => 'USD','currency_symbol' => '$','image' => '285e8b55-7ab8-4856-9c12-2b3fa033a85b.webp','min_limit' => '20.00000000','max_limit' => '2000.00000000','percent_charge' => '1.00000000','fixed_charge' => '2.00000000','rate' => '1.00000000','created_at' => '2023-03-12 08:31:29','updated_at' => '2023-06-21 12:00:46'),
            array('payment_gateway_id' => '1','name' => 'Paypal AUD','alias' => 'paypal-aud-automatic','currency_code' => 'AUD','currency_symbol' => '$','image' => '5b5fca3e-c337-4e4d-babd-44538cf17e10.webp','min_limit' => '20.00000000','max_limit' => '10000.00000000','percent_charge' => '1.00000000','fixed_charge' => '2.00000000','rate' => '1.50000000','created_at' => '2023-03-12 13:07:27','updated_at' => '2023-06-10 09:41:24'),
            array('payment_gateway_id' => '3','name' => 'Stripe AUD','alias' => 'stripe-aud-automatic','currency_code' => 'AUD','currency_symbol' => '$','image' => 'ac2766c5-e32c-408e-afbe-62bbc067a090.webp','min_limit' => '10.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '2.00000000','rate' => '1.50000000','created_at' => '2023-03-19 06:41:51','updated_at' => '2023-06-21 12:00:46'),
            array('payment_gateway_id' => '14','name' => 'Flutterwave NGN','alias' => 'flutterwave-ngn-automatic','currency_code' => 'NGN','currency_symbol' => '₦','image' => '50c50c78-020f-4367-89dd-a8600d701cad.webp','min_limit' => '1000.00000000','max_limit' => '100000.00000000','percent_charge' => '1.00000000','fixed_charge' => '0.00000000','rate' => '464.00000000','created_at' => '2023-05-25 11:41:16','updated_at' => '2023-06-10 10:28:56'),
            array('payment_gateway_id' => '17','name' => 'Flutterwave NGN','alias' => 'flutterwave-ngn-money-out-automatic','currency_code' => 'NGN','currency_symbol' => '₦','image' => 'b137736e-1d6a-4cfd-bc2c-ba3cf5d00154.webp','min_limit' => '1000.00000000','max_limit' => '100000000.00000000','percent_charge' => '1.00000000','fixed_charge' => '0.00000000','rate' => '464.00000000','created_at' => '2023-05-29 17:00:56','updated_at' => '2023-06-10 10:24:01'),
            array('payment_gateway_id' => '18','name' => 'JazzCash PKR','alias' => 'jazzcash-pkr-manual','currency_code' => 'PKR','currency_symbol' => '₨','image' => NULL,'min_limit' => '1000.00000000','max_limit' => '100000.00000000','percent_charge' => '2.00000000','fixed_charge' => '1.00000000','rate' => '286.89000000','created_at' => '2023-06-10 09:50:55','updated_at' => '2023-06-15 13:42:14'),
            array('payment_gateway_id' => '19','name' => 'EasyPaisa PKR','alias' => 'easypaisa-pkr-manual','currency_code' => 'PKR','currency_symbol' => '₨','image' => NULL,'min_limit' => '1000.00000000','max_limit' => '100000.00000000','percent_charge' => '1.00000000','fixed_charge' => '1.00000000','rate' => '286.89000000','created_at' => '2023-06-10 09:54:39','updated_at' => '2023-06-15 13:42:40'),
            array('payment_gateway_id' => '20','name' => 'UPI INR','alias' => 'upi-inr-manual','currency_code' => 'INR','currency_symbol' => '₹','image' => NULL,'min_limit' => '1000.00000000','max_limit' => '100000.00000000','percent_charge' => '1.00000000','fixed_charge' => '1.00000000','rate' => '82.45000000','created_at' => '2023-06-10 09:59:06','updated_at' => '2023-06-15 13:43:02'),
            array('payment_gateway_id' => '21','name' => 'PhonePe INR','alias' => 'phonepe-inr-manual','currency_code' => 'INR','currency_symbol' => '₹','image' => NULL,'min_limit' => '1000.00000000','max_limit' => '100000.00000000','percent_charge' => '1.00000000','fixed_charge' => '1.00000000','rate' => '82.45000000','created_at' => '2023-06-10 10:03:09','updated_at' => '2023-06-15 13:43:16'),
            array('payment_gateway_id' => '22','name' => 'Khalti NPR','alias' => 'khalti-npr-manual','currency_code' => 'NPR','currency_symbol' => '₨','image' => NULL,'min_limit' => '1000.00000000','max_limit' => '100000.00000000','percent_charge' => '1.00000000','fixed_charge' => '1.00000000','rate' => '131.88000000','created_at' => '2023-06-10 10:06:35','updated_at' => '2023-06-15 13:43:29'),
            array('payment_gateway_id' => '23','name' => 'JazzCash PKR','alias' => 'jazzcash-pkr-money-out','currency_code' => 'PKR','currency_symbol' => '₨','image' => NULL,'min_limit' => '1000.00000000','max_limit' => '100000.00000000','percent_charge' => '1.00000000','fixed_charge' => '1.00000000','rate' => '286.89000000','created_at' => '2023-06-10 10:12:55','updated_at' => '2023-06-15 13:43:51'),
            array('payment_gateway_id' => '24','name' => 'EasyPaisa PKR','alias' => 'easypaisa-pkr-money-out','currency_code' => 'PKR','currency_symbol' => '₨','image' => NULL,'min_limit' => '1000.00000000','max_limit' => '100000.00000000','percent_charge' => '1.00000000','fixed_charge' => '1.00000000','rate' => '286.89000000','created_at' => '2023-06-10 10:15:25','updated_at' => '2023-06-15 13:44:03'),
            array('payment_gateway_id' => '25','name' => 'UPI INR','alias' => 'upi-inr-money-out','currency_code' => 'INR','currency_symbol' => '₹','image' => NULL,'min_limit' => '1000.00000000','max_limit' => '100000.00000000','percent_charge' => '1.00000000','fixed_charge' => '1.00000000','rate' => '82.45000000','created_at' => '2023-06-10 10:17:11','updated_at' => '2023-06-15 13:44:37'),
            array('payment_gateway_id' => '26','name' => 'PhonePe INR','alias' => 'phonepe-inr-money-out','currency_code' => 'INR','currency_symbol' => '₹','image' => NULL,'min_limit' => '1000.00000000','max_limit' => '100000.00000000','percent_charge' => '1.00000000','fixed_charge' => '1.00000000','rate' => '82.45000000','created_at' => '2023-06-10 10:19:08','updated_at' => '2023-06-15 13:44:50'),
            array('payment_gateway_id' => '27','name' => 'Khalti NPR','alias' => 'khalti-npr-money-out','currency_code' => 'NPR','currency_symbol' => '₨','image' => NULL,'min_limit' => '1000.00000000','max_limit' => '100000.00000000','percent_charge' => '1.00000000','fixed_charge' => '1.00000000','rate' => '131.88000000','created_at' => '2023-06-10 10:21:18','updated_at' => '2023-06-15 13:44:59'),
            array('payment_gateway_id' => '17','name' => 'Flutterwave USD','alias' => 'flutterwave-usd-money-out-automatic','currency_code' => 'USD','currency_symbol' => '$','image' => NULL,'min_limit' => '1.00000000','max_limit' => '1000.00000000','percent_charge' => '0.00000000','fixed_charge' => '0.00000000','rate' => '1.00000000','created_at' => '2023-08-21 15:33:25','updated_at' => '2023-08-21 15:56:11'),
            array('payment_gateway_id' => '17','name' => 'Flutterwave TZS','alias' => 'flutterwave-tzs-money-out-automatic','currency_code' => 'TZS','currency_symbol' => 'TZS','image' => NULL,'min_limit' => '1.00000000','max_limit' => '1000000.00000000','percent_charge' => '0.00000000','fixed_charge' => '0.00000000','rate' => '2505.71000000','created_at' => '2023-08-21 15:52:56','updated_at' => '2023-08-21 15:56:11'),
            array('payment_gateway_id' => '14','name' => 'Flutterwave TZS','alias' => 'flutterwave-tzs-automatic','currency_code' => 'TZS','currency_symbol' => 'TZS','image' => NULL,'min_limit' => '100.00000000','max_limit' => '1000000.00000000','percent_charge' => '0.00000000','fixed_charge' => '0.00000000','rate' => '2505.69000000','created_at' => '2023-08-21 16:10:18','updated_at' => '2023-08-21 16:10:18'),
            array('payment_gateway_id' => '28','name' => 'RazorPay INR','alias' => 'razorpay-inr-automatic','currency_code' => 'INR','currency_symbol' => '₹','image' => '8db52ec2-449d-4727-b251-7d40d89eaad1.webp','min_limit' => '100.00000000','max_limit' => '100000.00000000','percent_charge' => '0.00000000','fixed_charge' => '0.00000000','rate' => '82.87000000','created_at' => '2023-08-23 13:23:21','updated_at' => '2023-08-23 13:26:35'),
            array('payment_gateway_id' => '29','name' => 'Pagadito USD','alias' => 'pagadito-usd-automatic','currency_code' => 'USD','currency_symbol' => NULL,'image' => '923c6152-3346-443c-8984-2782384ad218.webp','min_limit' => '10.00000000','max_limit' => '100.00000000','percent_charge' => '0.00000000','fixed_charge' => '1.00000000','rate' => '1.00000000','created_at' => '2023-08-31 12:56:38','updated_at' => '2023-08-31 15:12:40'),
            array('payment_gateway_id' => '30','name' => 'SSLCommerz BDT','alias' => 'sslcommerz-bdt-automatic','currency_code' => 'BDT','currency_symbol' => '৳','image' => '5db95540-abd5-409b-9956-e23e92de9c5d.webp','min_limit' => '100.00000000','max_limit' => '50000.00000000','percent_charge' => '0.00000000','fixed_charge' => '1.00000000','rate' => '110.64000000','created_at' => '2023-09-27 16:11:53','updated_at' => '2023-09-27 16:12:04'),
            array('payment_gateway_id' => '31','name' => 'CoinGate USDT','alias' => 'coingate-usdt-automatic','currency_code' => 'USDT','currency_symbol' => '$','image' => NULL,'min_limit' => '1.00000000','max_limit' => '100.00000000','percent_charge' => '1.00000000','fixed_charge' => '0.00000000','rate' => '1.00000000','created_at' => '2023-11-19 12:04:50','updated_at' => '2023-11-19 12:04:50'),
            array('payment_gateway_id' => '31','name' => 'CoinGate USD','alias' => 'coingate-usd-automatic','currency_code' => 'USD','currency_symbol' => '$','image' => NULL,'min_limit' => '1.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '0.00000000','rate' => '1.00000000','created_at' => '2023-11-19 12:04:50','updated_at' => '2023-11-19 12:04:50'),
            array('payment_gateway_id' => '32','name' => 'Tatum BTC','alias' => 'tatum-btc-automatic','currency_code' => 'BTC','currency_symbol' => 'BTC','image' => NULL,'min_limit' => '0.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '0.00000000','rate' => '0.00002400','created_at' => now(),'updated_at' => now()),
            array('payment_gateway_id' => '32','name' => 'Tatum ETH','alias' => 'tatum-eth-automatic','currency_code' => 'ETH','currency_symbol' => 'ETH','image' => NULL,'min_limit' => '0.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '0.00000000','rate' => '0.00044000','created_at' => now(),'updated_at' => now()),
            array('payment_gateway_id' => '32','name' => 'Tatum SOL','alias' => 'tatum-sol-automatic','currency_code' => 'SOL','currency_symbol' => 'SOL','image' => NULL,'min_limit' => '0.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '0.00000000','rate' => '3.76000000','created_at' => now(),'updated_at' => now()),

            array('payment_gateway_id' => '33','name' => 'Perfect Money EUR','alias' => 'perfect-money-eur-automatic','currency_code' => 'EUR','currency_symbol' => '€','image' => 'seeder/pmoney.webp','min_limit' => '1.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '1.00000000','rate' => '0.92000000','created_at' => now(),'updated_at' => now()),
            array('payment_gateway_id' => '33','name' => 'Perfect Money USD','alias' => 'perfect-money-usd-automatic','currency_code' => 'USD','currency_symbol' => '$','image' => 'seeder/pmoney.webp','min_limit' => '1.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '1.00000000','rate' => '1.00000000','created_at' => now(),'updated_at' => now()),

            array('payment_gateway_id' => '34','name' => 'Paystack NGN','alias' => 'paystack-ngn-automatic','currency_code' => 'NGN','currency_symbol' => '₦','image' => NULL,'min_limit' => '1000.00000000','max_limit' => '100000.00000000','percent_charge' => '1.00000000','fixed_charge' => '1.00000000','rate' => '1590.00000000','created_at' => now(),'updated_at' => now()),
            array('payment_gateway_id' => '34','name' => 'Paystack USD','alias' => 'paystack-usd-automatic','currency_code' => 'USD','currency_symbol' => '$','image' => NULL,'min_limit' => '1.00000000','max_limit' => '100.00000000','percent_charge' => '1.00000000','fixed_charge' => '1.00000000','rate' => '1.00000000','created_at' => now(),'updated_at' => now()),
            array('payment_gateway_id' => '34','name' => 'Paystack GHS','alias' => 'paystack-ghs-automatic','currency_code' => 'GHS','currency_symbol' => 'GH₵','image' => NULL,'min_limit' => '100.00000000','max_limit' => '10000.00000000','percent_charge' => '1.00000000','fixed_charge' => '1.00000000','rate' => '15.59000000','created_at' => now(),'updated_at' => now()),
            array('payment_gateway_id' => '34','name' => 'Paystack ZAR','alias' => 'paystack-zar-automatic','currency_code' => 'ZAR','currency_symbol' => 'R','image' => NULL,'min_limit' => '20.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '1.00000000','rate' => '17.73000000','created_at' => now(),'updated_at' => now()),
            array('payment_gateway_id' => '34','name' => 'Paystack KES','alias' => 'paystack-kes-automatic','currency_code' => 'KES','currency_symbol' => 'KSh','image' => NULL,'min_limit' => '100.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '1.00000000','rate' => '129.00000000','created_at' => now(),'updated_at' => now()),

            array('payment_gateway_id' => '17','name' => 'Flutterwave ZAR','alias' => 'flutterwave-zar-money-out-automatic','currency_code' => 'ZAR','currency_symbol' => 'R','image' => NULL,'min_limit' => '100.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '0.00000000','rate' => '17.74000000','created_at' => now(),'updated_at' => now()),
            array('payment_gateway_id' => '17','name' => 'Flutterwave UGX','alias' => 'flutterwave-ugx-money-out-automatic','currency_code' => 'UGX','currency_symbol' => 'USh','image' => NULL,'min_limit' => '100.00000000','max_limit' => '10000.00000000','percent_charge' => '1.00000000','fixed_charge' => '0.00000000','rate' => '3690.80000000','created_at' => now(),'updated_at' => now()),
            array('payment_gateway_id' => '17','name' => 'Flutterwave SLL','alias' => 'flutterwave-sll-money-out-automatic','currency_code' => 'SLL','currency_symbol' => 'Le','image' => NULL,'min_limit' => '100.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '0.00000000','rate' => '22.51210000','created_at' => now(),'updated_at' => now()),
            array('payment_gateway_id' => '17','name' => 'Flutterwave RWF','alias' => 'flutterwave-rwf-money-out-automatic','currency_code' => 'RWF','currency_symbol' => 'RWF','image' => NULL,'min_limit' => '100.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '0.00000000','rate' => '1315.15000000','created_at' => now(),'updated_at' => now()),
            array('payment_gateway_id' => '17','name' => 'Flutterwave MWK','alias' => 'flutterwave-mwk-money-out-automatic','currency_code' => 'MWK','currency_symbol' => 'MK','image' => NULL,'min_limit' => '100.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '0.00000000','rate' => '1722.74000000','created_at' => now(),'updated_at' => now()),
            array('payment_gateway_id' => '17','name' => 'Flutterwave KES','alias' => 'flutterwave-kes-money-out-automatic','currency_code' => 'KES','currency_symbol' => 'KSh','image' => NULL,'min_limit' => '100.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '0.00000000','rate' => '129.00000000','created_at' => now(),'updated_at' => now()),
            array('payment_gateway_id' => '17','name' => 'Flutterwave GHS','alias' => 'flutterwave-ghs-money-out-automatic','currency_code' => 'GHS','currency_symbol' => 'GH₵','image' => NULL,'min_limit' => '100.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '0.00000000','rate' => '15.55000000','created_at' => now(),'updated_at' => now()),
            array('payment_gateway_id' => '17','name' => 'Flutterwave ETB','alias' => 'flutterwave-etb-money-out-automatic','currency_code' => 'ETB','currency_symbol' => 'Br','image' => NULL,'min_limit' => '100.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '0.00000000','rate' => '108.54000000','created_at' => now(),'updated_at' => now()),
            array('payment_gateway_id' => '17','name' => 'Flutterwave EGP','alias' => 'flutterwave-egp-money-out-automatic','currency_code' => 'EGP','currency_symbol' => 'E£','image' => NULL,'min_limit' => '100.00000000','max_limit' => '1000.00000000','percent_charge' => '1.00000000','fixed_charge' => '0.00000000','rate' => '48.80000000','created_at' => now(),'updated_at' => now()),

            array('payment_gateway_id' =>  '35','name' => 'Bitcoin BTC','alias' => 'bitcoin-btc-manual','currency_code' => 'BTC','currency_symbol' => '₿','image' => NULL,'min_limit' => '0.00001700','max_limit' => '0.13445566','percent_charge' => '0.00001700','fixed_charge' => '0.00001700','rate' => '0.00001700','created_at' => now(),'updated_at' => now()),
            array('payment_gateway_id' =>  '36','name' => 'Bitcoin BTC','alias' => 'bitcoin-btc-money-out','currency_code' => 'BTC','currency_symbol' => '₿','image' => NULL,'min_limit' => '0.00001700','max_limit' => '0.13445566','percent_charge' => '0.00001700','fixed_charge' => '0.00001700','rate' => '0.00001700','created_at' => now(),'updated_at' => now())
        );


          PaymentGatewayCurrency::insert($payment_gateway_currencies);

    }
}
