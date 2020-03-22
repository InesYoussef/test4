<?php


namespace Mastering\SampleModule\Setup;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\InstallDataInterface;


class InstallData implements \Magento\Framework\Setup\InstallDataInterface
{
    /**
     * @param ModuleDataSetupInterface $setup
     * @param \Magento\Framework\Setup\ModuleContextInterface $context
     */
    public function install(ModuleDataSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $setup->startSetup();
        $setup->getConnection()->insert($setup->getTable('mastering_sample_item'), [
            'name' => 'Item 1'
        ]);
        $setup->getConnection()->insert(
            $setup->getTable('mastering_sample_item'),
            [
                'name' => 'Item 2'
            ]
        );
        $setup->endSetup();
    }
}
