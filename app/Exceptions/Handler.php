<?php

namespace App\Exceptions;

use App\Http\Services\ResponseService;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the exception types that will be skipped.
     *
     * @var array
     */
    protected array $skipCustomException = [
        'Illuminate\\Validation\\ValidationException'
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * @param Throwable $e
     * @return void
     * @throws Throwable
     */
    public function report(Throwable $e)
    {
        parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param Request $request
     * @param Throwable $e
     * @return Response|JsonResponse
     * @throws Throwable
     */
    public function render($request, Throwable $e): Response|JsonResponse
    {
        if ($request->expectsJson()) {
            if (!empty($e)) {
                if (in_array(get_class($e), $this->skipCustomException)) {
                    return parent::render($request, $e);
                }

                $payload = [];
                $status = method_exists($e, 'getStatusCode') ? $e->getStatusCode() : 400;

                if (config('app.debug')) {
                    $payload['exception'] = get_class($e);
                    $payload['message'] = $e->getMessage();
                    $payload['trace'] = $e->getTrace();
                }

                return ResponseService::sendResponse(
                    payload: $payload,
                    feedbackMessage: __('Something went wrong.'),
                    httpCode: $status
                );
            }
        }

        return parent::render($request, $e);
    }

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
