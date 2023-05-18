<?php
    namespace App\Traits;

    use Illuminate\Http\JsonResponse;

    trait ResponseTrait{
        /**
         * success response
         *
         * @param array|object $data
         * @param $message
         * @return JsonResponse
         */
        public function responseSuccess($data, $message = "successful"): JsonResponse
        {
           return response()->json([
                'status' => true,
                'message' => $message,
                'data' => $data,
                'errors' => null
            ]);
        }
        /**
         * error response
         *
         * @param array|object $error
         * @param $message
         * @return JsonResponse
         */
        public function responseError($error, $message = "Data is invalid"): JsonResponse
        {
            return response()->json([
                'status' => false,
                'message' => $message,
                'data' => null,
                'errors' => $error
            ]);
        }
    }
