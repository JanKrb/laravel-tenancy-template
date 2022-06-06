<?php

namespace App\Http\Services;

use Illuminate\Http\JsonResponse;

class ResponseService
{
    /**
     * Send a formatted http response
     * @param array $payload Payload/Data
     * @param string $feedbackMessage Additional message sent with the payload
     * @param int $httpCode HTTP status code (s. https://developer.mozilla.org/en-US/docs/Web/HTTP/Status)
     * @return JsonResponse Formatted HTTP response
     */
    public static function sendResponse(array $payload, string $feedbackMessage, int $httpCode): JsonResponse
    {
        /**
         * Formatted payload
         * @var array
         */
        $httpPayload = [
            "data" => $payload,
            "message" => $feedbackMessage
        ];

        return response()->json($httpPayload, $httpCode);
    }
}
