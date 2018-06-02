<?php

namespace SisBezaFest;
Class PayPal
{
    private $_apiContext;
    private $paquete;
    private $total;
    private $_ClienteId='AbADZXbkx24TyO0DjabqNuS4amC6C8R7iK2xMY31CCZVeOP9GIDquwhRAUJKDyTht-ppcjuygvzPsoDO';
    private $_ClientSecret='EPKkFlWsZrjYLqVUmTwcXXdHoK-DRArasWowrXNUZs8-83ixjaT3E3CzUqfDC7YL0xIshkoutAFc0eMR';

    public function _construct($paquete,$total){

        $this->_apiContext= \PaypalPayment::ApiContext($this->_ClientId,$this->_ClientSecret);

        $config=config("paypal_payment");
        $flatConfig=array_dot($config);

        $this->_apiContext->setConfig($flatConfig);

        $this->paquete=$paquete;
        $this->total=$total;
        return dd($shopping_cart->all());
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
   
    public function RedirectUrl(){
        //retorna la transaccion
        $baseURL=url('url');
        return \PaypalPayment::redirectUrl()
                    ->setReturnUrl("$baseURL/payements/store")
                    ->setCancelUrl("$baseURL/shoppincar");
    }

    public function items(){
        $items=[];
        
        //foreach($paquete as $p) {
      //      array_push($items,$p->paypalItem());
       // }
        return \paypalPayment::itemList()->setItems($items);
     }

    public function amount(){
        return \PaypalPayment::amount()->setCurrency("USD")
                    ->setTotal("20");
                    //$this->shopping_cart->total()
     }


}