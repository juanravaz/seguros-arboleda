<?php

namespace App\Http\Controllers;

use App\Models\CarInsurance;
use App\Models\HomeInsurance;
use App\Models\Insurance;
use App\Models\LifeInsurance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class PaymentController extends Controller
{
    private $apiContext;

    public function __construct()
    {

        $payPalConfig = Config::get('paypal');

        $this->apiContext = new ApiContext(
            new oAuthTokenCredential(
                $payPalConfig['client_id'],
                $payPalConfig['secret'],
            )
        );
    }

    public function payWithPayPal(Request $request){

        //dd($request->all());

        if(!session()->has('respuesta'))
        {
            session(['respuesta' => $request->all()]);
        }

        //dd(session()->all());

        if(!auth()->check())
        {
            return redirect('logueo');
        }

        $item = session('respuesta');

        $price = $item['precio'];


        //dd($request->session()->all());
        //dd($type);
        //dd($carprice);

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setTotal($price);
        $amount->setCurrency('EUR');
        //dd($amount);

        $transaction = new Transaction();
        $transaction->setAmount($amount);
        $transaction->setDescription('Gracias por confiar en seguros arboleda');


        $callbackUrl = url('/paypal/status');

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);
        try {
            $payment->create($this->apiContext);
            echo $payment;

            return redirect()->away($payment->getApprovalLink()); //redirect()->to()
        }
        catch (PayPalConnectionException $ex) {

            echo $ex->getData();
        }
    }
    public function payPalStatus(Request $request){

        //dd($request->session()->all());
        $item = session('respuesta');

        $paymentId = $request->input('paymentId');
        $payer = $request->input('PayerID');
        $token = $request->input('token');

        if (!$paymentId || !$payer || !$token){
            $status = 'No se pudo proceder con el pago a través de PayPal';
            $request->session()->forget('respuesta');
            return redirect('/paypal/failed')->with(compact('status'));
        }

        $payment = Payment::get($paymentId, $this->apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId($payer);

        /**Execute the payment**/
        $result = $payment->execute($execution, $this->apiContext);

        if ($result->getState() === 'approved'){

           if($item['type']=='C'){
               $carbrand = $item['marca'];
               $carmodel = $item['modelo'];

               $carname = $carbrand;
               $carname .= ' ';
               $carname .= $carmodel;

               $insurance = new Insurance();
               $insurance->name = 'Seguro de Coche';
               $insurance->price = $item['precio'];
               $insurance->type = $item['type'];
               $insurance->user_id = auth()->user()->id;

               if($insurance->save())
               {
                   $carinsurance = new CarInsurance();
                   $carinsurance->plate = $item['matricula'];
                   $carinsurance->fuel = $item['fuel'];
                   $carinsurance->car = $carname;
                   $carinsurance->year = $item['anio'];
                   $carinsurance->insurance_id = $insurance->id;

                   if($carinsurance->save())
                   {
                       $status = 'Gracias! El pago a través de PayPal se ha realizado correctamente!';
                       $request->session()->forget('respuesta');

                       $id = $insurance->id;
                       return redirect('/email/'.$id)->with(compact('id'));
                   }

               }
           }
           elseif ($item['type']=="L") {
               $insurance = new Insurance();
               $insurance->name = 'Seguro de Vida';
               $insurance->price = $item['precio'];
               $insurance->type = $item['type'];
               $insurance->user_id = auth()->user()->id;

               if ($insurance->save()) {
                   $lifeInsurance = new LifeInsurance();
                   $lifeInsurance->DNI = $item['DNI'];
                   $lifeInsurance->Name = $item['Name'];
                   $lifeInsurance->Birth = $item['Birth'];
                   $lifeInsurance->insurance_id = $insurance->id;

                   if ($lifeInsurance->save()) {
                       $status = 'Gracias! El pago a través de PayPal se ha realizado correctamente!';
                       $request->session()->forget('respuesta');
                       $id = $insurance->id;
                       return redirect('/email/'.$id)->with(compact('id'));
                   }

               }
           }
            elseif ($item['type']=="H") {
                $insurance = new Insurance();
                $insurance->name = 'Seguro de Hogar';
                $insurance->price = $item['precio'];
                $insurance->type = $item['type'];
                $insurance->user_id = auth()->user()->id;

                if ($insurance->save()) {
                    $homeInsurance = new HomeInsurance();
                    $homeInsurance->street = $item['street'];
                    $homeInsurance->m2 = $item['m2'];
                    $homeInsurance->postalCode = $item['postalCode'];
                    $homeInsurance->insurance_id = $insurance->id;

                    if ($homeInsurance->save()) {
                        $status = 'Gracias! El pago a través de PayPal se ha realizado correctamente!';
                        $request->session()->forget('respuesta');
                        $id = $insurance->id;
                        return redirect('/email/'.$id)->with(compact('id'));
                    }

                }
            }



        }
        $request->session()->forget('respuesta');
        $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
        return redirect('/results')->with(compact('status'));

    }
}
