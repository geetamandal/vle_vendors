<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Housing.com Broker Leads API
    |--------------------------------------------------------------------------
    |
    | Replace the placeholder strings below with your real values from
    | Housing.com. No .env involved — these are used directly.
    |
    */

    'broker_base_url' => 'https://pahal.housing.com/api/v0/get-broker-leads',

    'id' => 46127322,

    'api_key' => '916a373c667c28c1a4c3ef0a99ba1eb3',

    // Default page size if not overridden per-call
    'per_page' => 1000,

    // Optional filters (comma-separated strings), leave null to fetch all
    'flat_ids' => null,
    'apartment_names' => null,

    /*
    |--------------------------------------------------------------------------
    | Housing.com Builder Leads API
    |--------------------------------------------------------------------------
    |
    | If Housing.com gave you the same credentials for broker and builder,
    | just copy the same id/key values here.
    |
    */

    'builder_base_url' => 'https://pahal.housing.com/api/v0/get-builder-leads',

    'builder_id' => 46127322,

    'builder_api_key' => '916a373c667c28c1a4c3ef0a99ba1eb3',

    'builder_project_ids' => null,

];