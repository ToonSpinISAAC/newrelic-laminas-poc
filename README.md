# Laminas PoC

This is a small PoC to help with
[this](https://discuss.newrelic.com/t/magento-2-external-service-not-showing-up/105309)
thread.

To use this, clone this repo somewhere and do:

- `composer install`
- `php /path/to/test.php`

Then a single request will be made to New Relic's website in a New Relic
transaction named "LaminasPoC". To do the actual test, just call it from the web
a bunch of times, or do something like `watch php /path/to/test.php`.
