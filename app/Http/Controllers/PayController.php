<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Serial;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Shetabit\Multipay\Invoice;
use App\Http\Controllers\Controller;
use Shetabit\Payment\Facade\Payment;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;

class PayController extends Controller
{
    public function  send_pay(Request  $request)
    {
        $user = auth()->user();
        $via = 'zarinpal';
        $type = $request->type;
        $amount = $request->amount;

        if ($amount <100000) {
            alert()->warning(' حداقل مبلغ صد هزار  تومان میباشد  ');
            return back();
        }

        if ($amount %100000!=0) {
            alert()->warning('  مبلغ باید مضربی از  صد هزار  تومان میباشد  ');
            return back();
        }
        // $invoice = (new Invoice)->amount(1000);


        // $invoice->amount(1000);
        // return   Payment::via($via)->callbackUrl(route('pay.verify'))->purchase($invoice,
        //  function ($driver, $transactionId) use ($user,$type,) {

        // })->pay()->render();
        // $invoice = (new Invoice)->amount(1000);
        // // Purchase and pay the given invoice.
        // // You should use return statement to redirect user to the bank page.
        // return Payment::purchase($invoice, function ($driver, $transactionId) {
        //     // Store transactionId in database as we need it to verify payment in the future.
        // })->pay()->render();


        $invoice = (new Invoice);

        // if(!$amount || $amount %10000 !=0){
        //     alert()->warning('مقدار پرداخت باید مضربی از صفر باشد');
        //     return redirect()->route('client',['route'=>route("serial.result")]);
        // }
        // $amount=10000;

        $invoice->amount($amount);
        return   Payment::via($via)->callbackUrl(route('pay.verify'))->purchase(
            $invoice,
            function ($driver, $transactionId) use ($user, $type, $invoice, $amount) {
                $transaction = $user->transactions()->create([
                    'amount' => $amount,
                    'transactionId' => $transactionId,
                    'type' => $type,
                ]);
            }
        )->pay()->render();
    }



    public function result_pay(Transaction $transaction)
    {
        $user = $transaction->user;
        return view('pay.result_pay', compact(["transaction"]));
    }







    public function bill_verify(Request $request)
    {
        // dd($request->all());
        $tid = ($request->Authority);
        $transaction = Transaction::where('transactionId', ($tid))->first();
        $user = $transaction->user;

        $amount = (int)$transaction->amount;
        // $amount = 10000;
        if (!$transaction) {
            alert()->error('پرداخت با مشکل مواجه شد');
            return redirect()->route('client', ['route' => route("serial.result")]);
        }

        try {
            $receipt = Payment::amount((int)$amount)->transactionId($request->Authority)->verify();
            if ($request->Status == 'OK') {
                $transaction->update([
                    'status' => 'payed',
                ]);

            }
        } catch (InvalidPaymentException $exception) {
            /**
                when payment is not verified, it will throw an exception.
                We can catch the exception to handle invalid payments.
                getMessage method, returns a suitable message that can be used in user interface.
             **/
            alert()->warning('پرداخت با مشکل موجه شد ');
            return redirect()->route("result.pay", $transaction->id);
            // echo $exception->getMessage();
        }
        if ($transaction->status == 'payed') {
            alert()->success('پرداخت با موفقیت انجام  شد ');
        } else {
            alert()->warning('پرداخت انجام نشد ');
        }
        return redirect()->route("result.pay", $transaction->id);
    }
}
