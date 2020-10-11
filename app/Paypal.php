<?php

namespace App;

use App\Traits\ConsumeExternalService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Paypal extends Model
{
    
    protected $baseUri;
    protected $clientId;
    protected $clientSecret;

    use ConsumeExternalService;

    public function __construct()
    {
        $this->baseUri = config('services.paypal.base_uri');
        $this->clientId = config('services.paypal.client_id');
        $this->clientSecret = config('services.paypal.client_secret');
    }
    public function handlePayment(Request $request){
        $order = $this->createOrder($request->value,'mxn');
        $links = collect($order->links);
        $approve = $links->where('rel','approve')->first();
        redirect($approve->href);
    }
    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $headers['Authorization'] = $this->resolveAccessToken();
    }
    public function resolveAccessToken()
    {
        $credentials = base64_encode("{$this->clientId}:{$this->clientSecret}");
        return "Basic {$credentials}";
    }

    public function createOrder($value, $currency)
    {
        $response = $this->makeRequest(
            'POST',
            '/v2/checkout/orders',
            [
                "intent" => 'CAPTURE',
                "purchase_units" => [
                    0 => [
                        "amount" => [
                            "currency_code" => strtoupper($currency),
                            "value" => $value
                        ]
                    ]
                ],
                "application_context" => [
                    "brand_name" => config('app.name'),
                    "shipping_preference" => 'NO_SHIPPING',
                    "user_action" => 'PAY_NOW',
                    "return_url" => route('payments.approval'),
                    "cancel_url" => route('payments.cancelled'),
                ],
            ],
            [],
            [],
            $isJsonRequest = true
        );
        return $response;
    }

    public function capturePayment($order_id){
        return $this->makeRequest(
            'POST',
            "/v2/checkout/orders/{$order_id}/capture",
            [],
            [],
            ['Content-Type' => 'application/json']
        );
    }
}
