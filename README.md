# BKubicki Magento money-php library adapter


## Overview
Library is small adapter for money-php library. Provides two implementations 
of `BKubicki\Magento2MoneyAdapter\CurrencyAwareMoneyFactoryInterface`. 

* `BaseCurrencyAwareMoneyFactory` gives you money object with base currency (either global or website)
* `CurrentCurrencyAwareMoneyFactory` gives you money object with current currency (base or displayed if differs)


## Prerequisites
* PHP 7.2 / 7.3 / 7.4


## Installation ###
To install the extension use the following commands:

```bash
 composer require bkubicki/magento2-money-adapter
 ```

## Versioning
We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/bartoszkubicki/magento2-unit-tests-doubles/tags).


## Changelog
See changelog [here](CHANGELOG.md).


## Authors
* [Bartosz Kubicki](https://github.com/bartoszkubicki)


## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE.md) file for details.


## TODO
* add integration tests for factories
