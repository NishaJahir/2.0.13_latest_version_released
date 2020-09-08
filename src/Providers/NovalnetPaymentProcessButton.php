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

class NovalnetPaymentProcessButton {
  public function call(Twig $twig, PaymentRepositoryContract $paymentRepositoryContract, Request $request, Response $response, $arg) {
    $paymentHelper = pluginApp(PaymentHelper::class);
        $paymentService = pluginApp(PaymentService::class);
        $transactionLog  = pluginApp(TransactionService::class); 
        $sessionStorage = pluginApp(FrontendSessionStorageFactoryContract::class);
        $order = $arg[0];
      $paymentHelper->logger('order', $order);
    $paymentHelper->logger('request', $request->all());
      $paymentHelper->logger('argument', $arg); 
      return $twig->render('Novalnet::NovalnetPaymentButton', ['request' => 'test']);
  }
  
}
