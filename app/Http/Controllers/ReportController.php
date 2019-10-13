<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{

        public function showpdf(){
           $data = $this->getData();
           $date = date('d-m-Y');
           $invoice = "Nombre del Paciente";
           $view =  \View::make('pdfprint', compact('data', 'date', 'invoice'))->render();
           $pdf = \App::make('dompdf.wrapper');
           $pdf->loadHTML($view);
           //dd($pdf);
           return $pdf->stream('reporte.pdf');
           //return $pdf->download('reporte.pdf');
         }

        public function getData(){
           $data = $_POST['form_html'];
           //dd($data);
           return $data;
        }


}
