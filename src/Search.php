<?php

namespace Valdeilton\search;

class Search
{

    private $url = "https://viacep.com.br/ws/";
    public function getAddressFromZipCode(string $zipcod): array
    {
        $zipcod = preg_replace("/[^0-9]/im", '', $zipcod);
        return   json_decode(file_get_contents($this->url . $zipcod . "/json"), true);
    }
}