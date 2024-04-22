<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

trait HandleResponse
{
    public function response($data, $status = 200): JsonResponse
    {
        return response()->json($data, $status);
    }
    public function successWithData($data, $msg, $status_code = 200): JsonResponse
    {
        return $this->response([
            'status' => true,
            'status_code' => $status_code,
            'message' => $msg,
            'data' => $data,
        ], $status_code);
    }

    public function successMessage($msg = '', $status_code = 200): JsonResponse
    {
        return $this->response([
            'status' => true,
            'status_code' => $status_code,
            'message' => $msg,
        ], $status_code);
    }

    public function unauthorizedResponse($msg): JsonResponse
    {
        return $this->fail('unauthorized', $msg, [], 401);
    }

    public function badRequestResponse($msg): JsonResponse
    {
        return $this->fail('bad_request', $msg, [], 400);
    }
    public function fail($code = 'internal_error', $msg = 'Internal Server Error', $errors = [], $status_code = Response::HTTP_INTERNAL_SERVER_ERROR): JsonResponse
    {
        return $this->response([
            'status' => false,
            'status_code' => $status_code,
            'message' => $msg,
            'error_code' => $code,
            'error' => $errors,
        ], $status_code);
    }
}
