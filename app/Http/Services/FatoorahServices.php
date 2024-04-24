<?php

namespace App\Http\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;

class FatoorahServices

{
    private $baseUrl;
    private $headers;
    private $requestClient;

    public function __construct(Client $requestClient)
    {
        $this->requestClient = $requestClient;
        $this->baseUrl = env('fatoorah_base_url');
        $this->headers =[
            'Content-Type' =>'application/json',
            'Authorization' => 'Bearer ' . env('fatoorah_token')
        ];
    }

    private function sendRequest($method, $uri, $body = [])
{
    try {
        // Send the request and get the response
        $response = $this->requestClient->request($method, $this->baseUrl . $uri, [
            'headers' => $this->headers,
            'json' => $body
        ]);

        // Decode the JSON response and return it
        return json_decode($response->getBody()->getContents(), true);
    } catch (RequestException $e) {
        // Handle request exception

        // If the exception has a response (indicating an error response from the server)
        if ($e->hasResponse()) {
            // Extract the error message from the response body and return it
            return [
                'error' => true,
                'message' => 'Error: ' . $e->getResponse()->getBody()->getContents()
            ];
        } else {
            // If the exception doesn't have a response, return the exception message
            return [
                'error' => true,
                'message' => 'Error: ' . $e->getMessage()
            ];
        }
    }
}



     public function sendPaymentRequest($data)
     {
        $response=$this->sendRequest('POST','v2/SendPayment',$data);
        return $response;
     }













}
