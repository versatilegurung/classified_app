<?php

namespace App\Exceptions;

use layout;
use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }


    function render($request, Throwable $exception)
{
        if ($this->isHttpException($exception)) {
            if ($exception->getStatusCode() == 400) {
                return response()->view('errors.400', [], 400);
            }
            if ($exception->getStatusCode() == 401) {
                return response()->view('errors.401', [], 401);
            }
            if ($exception->getStatusCode() == 403) {
                return response()->view('errors.403', [], 403);
            }
            if ($exception->getStatusCode() == 404) {
                return response()->view('errors.404', [], 404);
            }
            if ($exception->getStatusCode() == 502) {
                return response()->view('errors.502', [], 502);
            }
            if ($exception->getStatusCode() == 503) {
                return response()->view('errors.503', [], 503);
            }
            if ($exception->getStatusCode() == 504) {
                return response()->view('errors.504', [], 504);
            }

        }
        return parent::render($request, $exception);
     }
}
