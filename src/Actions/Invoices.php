<?php

declare(strict_types=1);

namespace oihso\CdekSDK2\Actions;

use oihso\CdekSDK2\BaseTypes\Invoice;
use oihso\CdekSDK2\Exceptions\RequestException;
use oihso\CdekSDK2\Http\ApiResponse;

/**
 * Class Invoices
 * @package oihso\CdekSDK2\Actions
 */
class Invoices extends Action
{
    /**
     * URL для запросов к API на формирование квитаниции
     * @var string
     */
    public const URL = '/print/orders';

    /**
     * Запрос на формирование квитанции к заказу
     * @param Invoice $invoice
     * @return ApiResponse
     * @throws RequestException
     */
    public function add(Invoice $invoice): ApiResponse
    {
        $params = $this->serializer->toArray($invoice);
        return $this->preparedAdd($params);
    }

    /**
     * Запрос на получение данных печатной формы
     * @param string $uuid
     * @return ApiResponse
     * @throws RequestException
     */
    public function download(string $uuid): ApiResponse
    {
        return $this->http_client->get($this->slug($uuid) . '.pdf');
    }
}
