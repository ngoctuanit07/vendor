<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Salore_Salon to newer
 * versions in the future.
 *
 * @category    Salore
 * @package     Salore_Salon
 * @author      Salore team
 * @copyright   Copyright (c) Salore team
 */
class Salore_Salon_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction() {
        $this->loadLayout();
        $this->renderLayout();
    }
    public function paginationAction() {
        $this->loadLayout('salon_index_index');
        $layout = $this->getLayout();
        $block = $layout->getBlock('salon.index');
        echo $block->toHtml() ;
        return ;
    }
}