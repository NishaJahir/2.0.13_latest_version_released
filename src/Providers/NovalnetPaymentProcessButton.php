<?php

namespace Novalnet\Providers;

use Plenty\Plugin\Templates\Twig;

use Novalnet\Helper\PaymentHelper;
use Plenty\Modules\Order\Models\Order;
use Plenty\Modules\Payment\Models\Payment;
use Plenty\Modules\Comment\Contracts\CommentRepositoryContract;
use Plenty\Modules\Payment\Contracts\PaymentRepositoryContract;
use \Plenty\Modules\Authorization\Services\AuthHelper;
use Plenty\Modules\Frontend\Session\Storage\Contracts\FrontendSessionStorageFactoryContract;
use Novalnet\Services\PaymentService;
use Novalnet\Services\TransactionService;
use Plenty\Plugin\Http\Request;
use Plenty\Plugin\Http\Response;
use Plenty\Modules\Basket\Models\Basket;

class NovalnetPaymentProcessButton {
  public function call(Twig $twig, PaymentRepositoryContract $paymentRepositoryContract, Request $request, Response $responseAll, Basket $basket, $arg) {
    $paymentHelper = pluginApp(PaymentHelper::class);
        $paymentService = pluginApp(PaymentService::class);
        $transactionLog  = pluginApp(TransactionService::class); 
        $sessionStorage = pluginApp(FrontendSessionStorageFactoryContract::class);
        $order = $arg[0];
    $payments = $paymentRepositoryContract->getPaymentsByOrderId($order['id']);
    $getRequest = $paymentService->getMotoRequest($order);
    $response = $paymentHelper->executeCurl($getRequest['data'], $getRequest['url']);
    $responseData =$paymentHelper->convertStringToArray($response['response'], '&');
   
    $paymentHelper->logger('Request details', $getRequest);
    $paymentHelper->logger('Response details', $response);
    $paymentHelper->logger('Response details222', $responseData);
      $paymentHelper->logger('order', $order);
    $paymentHelper->logger('request', $request->all());
      $paymentHelper->logger('argument', $arg); 
    $paymentHelper->logger('basket', $basket); 
    $paymentHelper->logger('payment details', $payments); 
      return $twig->render('Novalnet::NovalnetPaymentButton', ['request' => $getRequest['data'], 'url' => $getRequest['data']['return_url']  ]);
    
   
   // return $responseAll->redirectTo($responseData['url']);
  }
  
}
