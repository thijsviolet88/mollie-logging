<?php

namespace Violet88\MollieLogging;

use SilverStripe\ORM\DataObject;
use App\Objects\MolliePayment;

class MollieLog extends DataObject
{
    private static $table_name = 'Violet88_MollieLoggingModule_MollieLog';

    private static $db = [
        'RequestPayload' => 'Text',       // JSON representation of the request payload
        'Response' => 'Text',             // JSON representation of the response
        'Timestamp' => 'Datetime',        // Timestamp of when the log entry was created
        'StatusCode' => 'Int',            // HTTP status code of the Mollie response
    ];

    private static $summary_fields = [
        'Timestamp' => 'Timestamp',
        'StatusCode' => 'Status Code',
    ];

    private static $has_one = [
        'MolliePayment' => MolliePayment::class,
    ];

    private static $default_sort = 'Timestamp DESC';
}