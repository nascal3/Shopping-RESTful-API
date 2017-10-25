<?php

namespace App\Traits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

trait  ApiResponser {

    private function successRsponse($data, $code) {
        return response()->json($data, $code);
    }

    protected function errorResponse($message, $code) {
        return response()->json(['error' => $message, 'code' => $code]);
    }

    protected  function showAll(Collection $collection, $code = 200) {
        return $this->successRsponse(['data' => $collection], $code);
    }

    protected  function showOne(Model $model, $code = 200) {
        return $this->successRsponse(['data' => $model], $code);
    }
}
