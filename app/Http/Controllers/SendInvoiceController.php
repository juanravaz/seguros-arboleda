<?php

namespace App\Http\Controllers;

use App\Models\CarInsurance;
use App\Models\Insurance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendInvoiceController extends Controller
{
    public function sendmail($id){
        $insurance = Insurance::find($id);
        $data["email"]=$insurance->user->email;
        $data["client_name"]=$insurance->user->name;
        $data["subject"]='Su factura de SegurosArboleda';

        if($insurance->type == "C")
        {
            $datainsurance = CarInsurance::find($id);
            $data = [
                'name' => $insurance->name,
                'price' => $insurance->price,
                'email' => $insurance->user->email,
                'userName' => $insurance->user->name,
                'detail' => $datainsurance->car." - ".$datainsurance->plate
            ];
        }

        $pdf = PDF::loadView('admin.reports.invoiceprint', $data);

        try{
            Mail::send('admin.reports.invoiceprint', $data, function($message)use($data,$pdf) {
                $message->to($data["email"], $data["client_name"])
                    ->subject($data["subject"])
                    ->attachData($pdf->output(), "invoice.pdf");
            });
        }catch(JWTException $exception){
            $this->serverstatuscode = "0";
            $this->serverstatusdes = $exception->getMessage();
        }
        if (Mail::failures()) {
            $this->statusdesc  =   "Error sending mail";
            $this->statuscode  =   "0";

        }else{

            $this->statusdesc  =   "Message sent Succesfully";
            $this->statuscode  =   "1";
        }
        return response()->json(compact('this'));
    }
}
