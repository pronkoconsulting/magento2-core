# Changelog

## 1.0.2 — 2026-05-29

### Fixed

- Admin menu icon now uses CSS `mask` instead of `filter` to correctly inherit the nav text color in both Magento Open Source and MageOS themes

## 1.0.1 — 2026-05-29

### Added

- Pronko Consulting top-level admin menu entry (`Pronko_Core::pronko`)
- PC logo icon in the admin navigation menu

## 1.0.0 — 2026-05-25

### Added

- Parent ACL resource `Pronko_Core::pronko` for all Pronko Consulting modules
- Pronko Consulting tab in Stores → Configuration (sortOrder 400)
- Pronko Consulting brand icon (`view/adminhtml/web/images/pronkoconsulting-icon.svg`)
- Shared PSR-3 logger virtual type `Pronko\Core\Logger` writing to `var/log/pronko.log`
- Logger handler virtual type `Pronko\Core\Logger\Handler` based on `Magento\Framework\Logger\Handler\Base`
