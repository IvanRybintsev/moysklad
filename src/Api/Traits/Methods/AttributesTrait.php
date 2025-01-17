<?php

declare(strict_types=1);

namespace Evgeek\Moysklad\Api\Traits\Methods;

use Evgeek\Moysklad\Api\Methods\Nested\Attributes;

trait AttributesTrait
{
    /**
     * Attributes
     * <code>
     * $product = $ms->entity()
     *      ->product()
     *      ->metadata()
     *      ->attributes()
     *      ->get();
     * </code>
     */
    public function attributes(): Attributes
    {
        $this->addPayloadToList();

        return new Attributes($this->api, $this->payloadList);
    }
}
