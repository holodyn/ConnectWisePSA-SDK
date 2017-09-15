<?php

namespace LabtechSoftware\ConnectwisePsaSdk;

use SoapClient;
use SoapFault;
use LabtechSoftware\ConnectwisePsaSdk\ApiException;

class SoapApiRequester implements ConnectWiseApi
{

    private $soap;
    private $configLoader;

    public function __construct(SoapClient $soap, ConfigLoader $configLoader)
    {
        $this->soap = $soap;
        $this->configLoader= $configLoader;
    }

    public function makeRequest($method, $params = array())
    {
        // squirt credentials into params
        $params['credentials'] = $this->configLoader->getSoapCredentials();
        try {
            if (defined('CW_DEBUG'))
                inspect('Request', $method, $params);
            $res = $this->soap->{$method}($params);
            if (defined('CW_DEBUG'))
                inspect('Result', $method, $res);
            return $res;
        } catch (SoapFault $fault) {
            throw new ApiException($fault->getMessage());
        }
    }
}
