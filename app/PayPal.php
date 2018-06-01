<?php

namespace SisBezaFest;
Class PayPal
{
    private $_apiContext;
    private $shopping_cart;
    private $_ClienteId='';
    private $_ClientSecret='\';

    public function _construct($shopping_cart1){

        $this->_apiContext= \PaypalPayment::ApiContext($this->_ClientId,$this->_ClientSecret);

        $config=config("paypal_payment");
        $flatConfig=array_dot($config);

        $this->_apiContext->setConfig($flatConfig);

        $this->shopping_cart=$shopping_cart1;
    }

    public function generate(){
        $payment = \PaypalPayment::payment()->setIntent("sale")
                            ->setPayer($this->payer())
                            ->setTransactions([$this->transaction()])
                            ->setRedirectUrls($this->redirectUrl());
        try{
            $payment->create($this->_apiContext);
        }CATCH( \Exception $ex){
            dd($ex);
            exit(1);
        }
        return $payment;
    }

    public function payer(){
        return \PaypalPayment::payer()->setPaymentMethod("paypal");
    }
    public function transaction(){
       return \PaypalPayment::transaction()
                ->setAmount($this->amount())
                ->setItemList($this->items())
                ->setDescription("Tu compra En BiZaFeSt")
                ->setInvoiceNumber(uniqid());
    }
   
    public function RedirectUrls(){
        //retorna la transaccion
        $baseURL=url('url');
        return \PaypalPayment::redirectUrls()
                    ->setReturnUrl("$baseURL/payements/store")
                    ->setCancelUrl("$baseURL/shoppincar");
    }

    public function items(){
        $items=[];
        $paquete = $this->shopping_cart->paquete()->get();
        
        foreach ($paquete as $paquete2) {
            array_push($items,$paquete2->paypalItem());
        }
        return \paypalPayment::itemList()->setItems($items);
     }

    public function amount(){
        return \PaypalPayment::amount()->setCurrency("USD")
                    ->setTotal("20");
                    //$this->shopping_cart->total()
     }


}