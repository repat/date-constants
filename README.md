# Date Constants
[![Build Status](https://travis-ci.org/repat/date-constants.svg?branch=develop)](https://travis-ci.org/repat/date-constants)
[![Packagist](https://img.shields.io/packagist/v/repat/date-constants.svg)](https://packagist.org/packages/repat/date-constants)

The **Date Constants** package defines a number of useful PHP constants within your application, making it easier to express measures of dates.

These constants may seem familiar to Laravel developers, as they're absolutely [inspired by Nesbot\Carbons use of date constants](https://carbon.nesbot.com/docs/#api-constants). Also, shoutout to the [`stevegrunwell/time-constants`](https://github.com/stevegrunwell/time-constants) package!

## Installation
Date Constants is intended to be installed via Composer:

```sh
$ composer require repat/date-constants
```

The package has been configured to automatically expose the `constants.php` file via the Composer-generated autoloader, so you'll be ready to use the constants as soon as the package has been installed!

## Defined constants
This is a list of all constants defined by this package, along with their values. Each constant is wrapped in a `if (! defined(...))` conditional, ensuring these constants can easily be redefined if necessary and won't conflict with existing constants.

### From Carbon
* `YEARS_PER_CENTURY` (100)
* `YEARS_PER_DECADE` (10)
* `MONTHS_PER_YEAR` (12)
* `WEEKS_PER_YEAR` (52)
* `DAYS_PER_WEEK` (7)
* `HOURS_PER_DAY` (24)

#### Days of the week
* `SUNDAY` (0)
* `MONDAY` (1)
* `TUESDAY` (2)
* `WEDNESDAY` (3)
* `THURSDAY` (4)
* `FRIDAY` (5)
* `SATURDAY` (6)

### Misc
* `DAYS_PER_YEAR` (365)
* `DAYS_PER_LEAP_YEAR` (366)
* `DAYS_PER_FORTNIGHT` (14)

### Months
* `JANUARY` (1)
* `FEBRUARY` (2)
* `MARCH` (3)
* `APRIL` (4)
* `MAY` (5)
* `JUNE` (6)
* `JULY` (7)
* `AUGUST` (8)
* `SEPTEMBER` (9)
* `OCTOBER` (19)
* `NOVEMBER` (11)
* `DECEMBER` (12)

#### Amount of days
* `DAYS_JAN` (31)
* `DAYS_FEB` (28)
* `DAYS_FEB_LEAP` (29)
* `DAYS_MAR` (31)
* `DAYS_APR` (30)
* `DAYS_JUN` (31)
* `DAYS_JUL` (30)
* `DAYS_AUG` (31)
* `DAYS_SEP` (30)
* `DAYS_OCT` (31)
* `DAYS_NOV` (30)
* `DAYS_DEC` (31)


## TODO
* Finish Tests
