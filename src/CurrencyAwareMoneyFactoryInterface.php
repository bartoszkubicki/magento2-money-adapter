<?php

declare(strict_types=1);

/**
 * File: CurrencyAwareMoneyFactoryInterface.php
 *
 * @author Bartosz Kubicki b.w.kubicki@gmail.com>
 * Github: https://github.com/bartoszkubicki
 */

namespace BKubicki\Magento2MoneyAdapter;

use Money\Money;

interface CurrencyAwareMoneyFactoryInterface
{
    /**
     * @param int|string $amount
     * @return Money
     */
    public function create($amount): Money;
}
