<?php

declare(strict_types=1);

namespace oihso\CdekSDK2\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class InputHook
 * @package oihso\CdekSDK2\BaseTypes
 */
class InputHook
{
    /**
     * Тип события
     * @Type("string")
     * @var string
     */
    public $type;

    /**
     * Дата и время события в UTC
     * @Type("string")
     * @var string
     */
    public $date_time;

    /**
     * Идентификатор заказа
     * @Type("string")
     * @var string
     */
    public $uuid;

    /**
     * Атрибуты события
     * @Type("oihso\CdekSDK2\Dto\Attributes")
     * @var Attributes
     */
    public $attributes;
}
