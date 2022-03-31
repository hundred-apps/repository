<?php

namespace Hundredapps\Repository\Contracts;

interface Allable
{
    /**
     * @param array $querystring
     * @return mixed
     */
    public function all($querystring = []);
}