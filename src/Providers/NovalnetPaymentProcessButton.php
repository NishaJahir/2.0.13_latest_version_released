<?php
/**
 * This module is used for real time processing of
 * Novalnet payment module of customers.
 * This free contribution made by request.
 * 
 * If you have found this script useful a small
 * recommendation as well as a comment on merchant form
 * would be greatly appreciated.
 *
 * @author       Novalnet AG
 * @copyright(C) Novalnet
 * All rights reserved. https://www.novalnet.de/payment-plugins/kostenlos/lizenz
 */

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

class NovalnetPaymentProcessButton
{
  public function call(Twig $twig, PaymentRepositoryContract $paymentRepositoryContract, Request $request, Response $response, $arg)
    {
     $paymentHelper = pluginApp(PaymentHelper::class);
     $sessionStorage = pluginApp(FrontendSessionStorageFactoryContract::class);
     $order = $arg[0];
    $paymentHelper->logger('session', $sessionStorage);
    $paymentHelper->logger('argument', $arg);
    $paymentHelper->logger('order', $order);
    $paymentHelper->logger('request', $request);
    $paymentHelper->logger('response', $response);
    
    
  }
  
}
