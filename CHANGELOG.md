# Changelog

## 1.0.0 — 2026-05-25

### Added

- Parent ACL resource `Pronko_Core::pronko` for all Pronko Consulting modules
- Pronko Consulting tab in Stores → Configuration (sortOrder 400)
- Pronko Consulting brand icon (`view/adminhtml/web/images/pronkoconsulting-icon.svg`)
- Shared PSR-3 logger virtual type `Pronko\Core\Logger` writing to `var/log/pronko.log`
- Logger handler virtual type `Pronko\Core\Logger\Handler` based on `Magento\Framework\Logger\Handler\Base`
