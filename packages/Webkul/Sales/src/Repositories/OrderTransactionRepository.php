<?php

namespace Webkul\Sales\Repositories;

use Webkul\Core\Eloquent\Repository;

/**
 * Order Transaction Repository
 *
 * @author    bunnybumbum <bunnyyellow1209@gmail.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class OrderTransactionRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model(): string
    {
        return 'Webkul\Sales\Contracts\OrderTransaction';
    }
}