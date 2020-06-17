<?php

namespace Linktracker\Tracking\Model\ResourceModel;

class Tracking extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function _construct()
    {
        $this->_init(\Linktracker\Tracking\Api\Config::TRACKING_TABLE, "entity_id");
    }
}
