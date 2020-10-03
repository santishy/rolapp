<?php

namespace App;

use App\Traits\ConsumeExternalService;
use Illuminate\Database\Eloquent\Model;

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
    public function resolveAuthorizathion(&$queryParams,&$formParams,&$headers){
        
    }
}
