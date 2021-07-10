<?php

declare(strict_types=1);

/**
 * File: CurrencyAwareMoneyFactory.php
 *
 * @author Bartosz Kubicki b.w.kubicki@gmail.com>
 * Github: https://github.com/bartoszkubicki
 */

namespace BKubicki\Magento2MoneyAdapter;

use Magento\Store\Model\Website;
use Money\Currency;
use Money\Money;

class BaseCurrencyAwareMoneyFactory implements CurrencyAwareMoneyFactoryInterface
{
    /**
     * @var Website
     */
    private $website;

    /**
     * CurrentCurrencyAwareMoneyFactory constructor.
     * @param Website $website
     */
    public function __construct(Website $website)
    {
        $this->website = $website;
    }

    /**
     * @param int|string $amount
     * @return Money
     */
    public function create($amount): Money
    {
        return new Money(
            $amount,
            new Currency($this->website->getBaseCurrencyCode())
        );
    }
}
