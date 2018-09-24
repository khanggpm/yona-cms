<?php

namespace User\Api;

use Core\Interfaces\CollectionsInterface;
use Phalcon\Mvc\Micro\Collection as MicroCollection;
use User\Api\Controllers\IndexControllerAbstract;

class Collections implements CollectionsInterface
{
    /**
     * @return MicroCollection[]
     */
    public function collections(): array
    {
        // IndexControllerAbstract
        $index = new MicroCollection();
        $index->setHandler(IndexControllerAbstract::class, true);
        // common prefix for all routes
        $index->setPrefix('/user');
        $index->get('/', 'index');

        return [$index];
    }
}