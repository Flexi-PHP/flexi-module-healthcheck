# HealthCheck Module

The HealthCheck module provides a `GET /health` endpoint and a `version` CLI query. The endpoint reports the version value obtained from the module's version provider.

Routes, query handlers, and services are configured in `Config/routes.json`, `Config/queries.json`, and `Config/services.json`. Install `cubadevops/flexi-module-healthcheck` and explicitly activate `HealthCheck`.

The endpoint currently reports version information; it does not probe databases, queues, or other dependencies. It supports PHP 7.4+, Flexi Core `^3.2`, and `flexi/contracts` `^5.2.1`.

## Tests

Install the development dependencies with `composer install`, then run `vendor/bin/phpunit tests` from the module root.
