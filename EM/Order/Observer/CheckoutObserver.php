<?php
 
namespace EM\Order\Observer;

use Magento\Framework\Event\ObserverInterface;

class CheckoutObserver implements ObserverInterface {

   protected $redirect;

   public function __construct(
        \Magento\Framework\App\Response\RedirectInterface $redirect
   ) {
       $this->redirect = $redirect;
   }

   public function execute(\Magento\Framework\Event\Observer $observer) {
       echo "Loaded";
       $order= $observer->getEvent()->getOrder();
        // echo "<pre>";
        // print_r($order->getData());
    //    die;?
       
   }

   

}