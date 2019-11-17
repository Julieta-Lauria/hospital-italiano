<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consulta;

class ReportController extends Controller
{

        public function showpdf2(Request $request){
           $input = $request->all();
           $data = $input['form_html'];
           $comment = $input['comment'];
           $date = date('d-m-Y');
           $invoice = "Nombre del Paciente";
           $view =  \View::make('pdfprint', compact('data', 'date', 'invoice', 'comment' ))->render();
           $pdf = \App::make('dompdf.wrapper');
           $pdf->loadHTML($view);
           //dd($pdf);
           return $pdf->stream('reporte.pdf');
           //return $pdf->download('reporte.pdf');
         }



         public function showpdf(Request $request){
           $input = $request->all();

           $newConsulta = new Consulta();
           $newConsulta->edad = $input['edad'];
           $newConsulta->pais = $input['pais'];
           $newConsulta->profesional = $input['medico'];
           $newConsulta->ambito = $input['ambito'];
           $newConsulta->comentario = $input['comment'];
           $newConsulta->form_html = $input['form_html'];

           $newConsulta -> save();
           return dd($newConsulta);
        }


}
