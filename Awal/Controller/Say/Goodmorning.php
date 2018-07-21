<?php
namespace Sabak\Awal\Controller\Say;
class Goodmorning extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
       $this->_view->loadLayout();
       // $this->_view->getLayout()->initMessages();
		//echo 'Goodmorning.';
        $this->_view->renderLayout();
    }
}