<?php

declare(strict_types=1);

namespace Evgeek\Moysklad\Api\Traits\Methods;

use Evgeek\Moysklad\Api\Methods\AbstractMethodById;
use Evgeek\Moysklad\Api\Methods\PositionedMethodById;

trait PositionedMethodByIdTrait
{
    /**
     * Single entity with positions by id
     * <code>
     * $order = $ms->entity()
     *      ->customerorder()
     *      ->byId('efe3944b-980d-11ec-0a80-0d180027c266')
     *      ->positions()
     *      ->byId('fb72fc83-7ef5-11e3-ad1c-002590a28eca')
     *      ->get();
     * </code>
     *
     * @return PositionedMethodById
     */
    public function byId(string $guid): AbstractMethodById
    {
        $this->addPayloadToList();

        return new PositionedMethodById($this->api, $this->payloadList, $guid);
    }
}
