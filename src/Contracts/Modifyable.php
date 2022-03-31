<?php

namespace Hundredapps\Repository\Contracts;

interface Modifyable
{
    /**
     * @param int|string $identifier
     * @param array $data
     * @return mixed
     */
    public function modify($identifier, $data);
}