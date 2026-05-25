# Pronko Core for Magento 2

Shared foundation module for all Pronko Consulting Magento 2 extensions.

[![Latest Version](https://img.shields.io/packagist/v/pronko/magento2-core?style=flat-square)](https://packagist.org/packages/pronko/magento2-core)
[![License](https://img.shields.io/badge/License-OSL--3.0-green?style=flat-square)](LICENSE)

---

## What this module provides

- **Parent ACL resource** — `Pronko_Core::pronko` ("Pronko Consulting") under `Magento_Backend::admin`
- **Admin configuration tab** — "Pronko Consulting" tab in Stores → Configuration (sortOrder 400)
- **Brand assets** — shared Pronko Consulting icon for admin UI use
- **Shared logger** — PSR-3 logger virtual type writing to `var/log/pronko.log`

This module contains no business logic, no tracking, and no setup scripts. It exists solely to give all Pronko modules a consistent, shared home in the Magento admin.

---

## Installation

```bash
composer require pronko/magento2-core
bin/magento module:enable Pronko_Core
bin/magento setup:upgrade
```

---

## Usage for module developers

### 1. Declare the dependency

`etc/module.xml`:
```xml
<module name="Vendor_YourModule">
    <sequence>
        <module name="Pronko_Core"/>
    </sequence>
</module>
```

`composer.json`:
```json
"require": {
    "pronko/magento2-core": "^1.0"
}
```

### 2. Nest your ACL under the Pronko parent

`etc/acl.xml`:
```xml
<resource id="Pronko_Core::pronko">
    <resource id="Vendor_YourModule::your_resource" title="Your Feature" sortOrder="10"/>
</resource>
```

### 3. Use the shared logger

Inject `Pronko\Core\Logger` in your module's `etc/di.xml` to route log entries to `var/log/pronko.log`:

`etc/di.xml`:
```xml
<type name="Vendor\YourModule\YourClass">
    <arguments>
        <argument name="logger" xsi:type="object">Pronko\Core\Logger</argument>
    </arguments>
</type>
```

All Pronko modules log to the same `pronko.log` file, keeping errors isolated from Magento's `system.log`.

### 4. Reference the shared tab in your config section

`etc/adminhtml/system.xml`:
```xml
<section id="your_section" ...>
    <tab>pronko</tab>
    ...
</section>
```

---

## Compatibility

| Platform | Version |
|---|---|
| Magento Open Source | 2.4.4 — 2.4.x |
| Adobe Commerce | 2.4.4 — 2.4.x |
| MageOS | 2.4.6+ |
| PHP | 8.1+ |

---

## License

[Open Software License 3.0 (OSL-3.0)](LICENSE)

---

<p align="center">
  Built by <a href="https://www.pronkoconsulting.com">Pronko Consulting</a>
</p>
