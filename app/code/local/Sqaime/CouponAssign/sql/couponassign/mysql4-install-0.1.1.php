<?php
$installer = $this;
$installer->startSetup();
$installer->getConnection()
    ->addColumn($installer->getTable('salesrule'),
        'couponassign',
        array(
            'type' => Varien_Db_Ddl_Table::TEXT
            'nullable' => false,
            'default' => 0,
            'comment' => 'Assign to UserId'
        )
    );
$installer->endSetup();
