<?php

namespace Response;

use Response\Service\ResponseGenerator;

class Response {

    //Define default method
    private $method = "GET";

    public function getResponse($method, $url, $params = false) {

        if (!$method) {
            $method = $this->method;
        }

        if (!$url) {
            return ResponseGenerator::getResponse($method, $url, $params);
        }
    }

}
