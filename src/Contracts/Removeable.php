<?php

namespace Hundredapps\Repository\Contracts;

interface Removeable
{
    /**
     * @param int|string $identifier
     * @return mixed
     */
    public function remove($identifier);
}