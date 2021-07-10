<?php

declare(strict_types=1);

/**
 * File: CurrencyAwareMoneyFactory.php
 *
 * @author Bartosz Kubicki b.w.kubicki@gmail.com>
 * Github: https://github.com/bartoszkubicki
 */

namespace BKubicki\Magento2MoneyAdapter;

use Magento\Framework\Pricing\PriceCurrencyInterface;
use Money\Currency;
use Money\Money;

class CurrentCurrencyAwareMoneyFactory implements CurrencyAwareMoneyFactoryInterface
{
    /**
     * @var PriceCurrencyInterface
     */
    private $priceCurrency;

    /**
     * CurrencyAwareMoneyFactory constructor.
     * @param PriceCurrencyInterface $priceCurrency
     */
    public function __construct(PriceCurrencyInterface $priceCurrency)
    {
        $this->priceCurrency = $priceCurrency;
    }

    /**
     * @param int|string $amount
     * @return Money
     */
    public function create($amount): Money
    {
        return new Money(
            $amount,
            new Currency($this->priceCurrency->getCurrency()->getCode())
        );
    }
}
