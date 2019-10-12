<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{

        public function invoice(){
           $data = $this->getData();
           $date = date('d-m-Y');
           $invoice = "2222";
           $view =  \View::make('pdfprint', compact('data', 'date', 'invoice'))->render();
           $pdf = \App::make('dompdf.wrapper');
           $pdf->loadHTML($view);
           return $pdf->stream('invoice');
           //return $pdf->download('invoice');
         }

        public function getData(){
           $data =  [
               'quantity'      => '1' ,
               'description'   => 'some ramdom text',
               'price'   => '500',
               'total'     => '500'
           ];
           return $data;
        }


}
