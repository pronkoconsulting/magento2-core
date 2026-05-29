<?php
/**
 * Copyright © Pronko Consulting (https://www.pronkoconsulting.com)
 * See LICENSE for license details.
 */
declare(strict_types=1);

namespace Pronko\Core\Plugin\Menu\Item;

use Magento\Backend\Model\Menu\Item;

class HideEmptyParent
{
    public function afterIsAllowed(Item $subject, bool $result): bool
    {
        if (!$result) {
            return false;
        }

        return $subject->getAction() || $subject->hasChildren();
    }
}
