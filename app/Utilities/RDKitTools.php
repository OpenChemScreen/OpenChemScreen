<?php

namespace App\Utilities;

use GuzzleHttp\Client;

class RDKitTools
{

    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function substructureSearch($query, $patterns) {
        $response = $this->client->request('POST', 'http://'.config('rdkit.host').'/search',
            [
                'json' => [
                    'query' => $query,
                    'patterns' => $patterns
                ]
            ]
        );

        if ( $response->getStatusCode() == 200 ) {
            return json_decode($response->getBody(), true);
        }

        if ( $response->getStatusCode() == 400 ) {
            return [];
        }

        if ( $response->getStatusCode() == 500 ) {
            return [];
        }

        return [];
    }

}
