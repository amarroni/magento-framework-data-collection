<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Onetree\Framework\Data;

use Magento\Framework\Data\Collection\EntityFactoryInterface;
use Magento\Framework\Option\ArrayInterface;

/**
 * Data collection
 *
 * TODO: Refactor use of \Magento\Framework\Option\ArrayInterface in library.
 *
 * @api
 */
class Collection
{
    /**
     * Adding item to item array
     *
     * @param \Magento\Eav\Model\Entity\Collection\AbstractCollection $subject
     * @param \Closure $process
     * @param \Magento\Framework\DataObject $object
     * @return $this
     */
    public function aroundAddItem(\Magento\Eav\Model\Entity\Collection\AbstractCollection $subject, \Closure $process, \Magento\Framework\DataObject $object)
    {
        try{
            return $process($object);
        }catch ( \Exception $e){
            return $this;
        }

    }

}
