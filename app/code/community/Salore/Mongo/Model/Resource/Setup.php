<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Salore_Mongo to newer
 * versions in the future.
 *
 * @category    Salore
 * @package     Salore_Mongo
 * @author      Salore team
 * @copyright   Copyright (c) Salore team
 */

class SolrBridge_Mongo_Model_Resource_Setup extends Mage_Core_Model_Resource_Setup
{
    /**
     * @var MongoConnection
     */
    protected $_mongoConn;

    /**
     * @param string $resourceName
     */
    public function __construct($resourceName) {
        parent::__construct($resourceName);
    }
}