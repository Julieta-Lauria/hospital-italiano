<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consulta;

class ReportController extends Controller
{

        public function showpdf(Request $request){
           $input = $request->all();
           $this->saveData($request);
           $data = $input['form_html'];
           $comment = $input['comment'];
           $edad = $input['edad'];
           $date = date('d-m-Y');
          // $invoice = "Nombre del Paciente";
           $view =  \View::make('pdfprint', compact('data', 'date', 'edad', 'comment' ))->render();
           $pdf = \App::make('dompdf.wrapper');
           $pdf->loadHTML($view);
           return $pdf->stream('reporte.pdf');
           //return $pdf->download('reporte.pdf');
         }



         public function saveData(Request $request){
           $input = $request->all();
           //dd($input);
           $newConsulta = new Consulta();
           $newConsulta->edad = $input['edad'];
           $newConsulta->pais = $input['pais'];
           $newConsulta->profesional = $input['medico'];
           $newConsulta->ambito = $input['ambito'];

           $newConsulta->afirmacion1 = $input['afirmacion1'];
           $newConsulta->afirmacion2 = $input['afirmacion2'];
           $newConsulta->afirmacion3 = $input['afirmacion3'];
           $newConsulta->afirmacion4 = $input['afirmacion4'];
           $newConsulta->afirmacion5 = $input['afirmacion5'];
           $newConsulta->afirmacion6 = $input['afirmacion6'];
           $newConsulta->afirmacion7 = $input['afirmacion7'];
           $newConsulta->afirmacion8 = $input['afirmacion8'];
           $newConsulta->afirmacion9 = $input['afirmacion9'];
           $newConsulta->afirmacion10 = $input['afirmacion10'];
           $newConsulta->afirmacion11 = $input['afirmacion11'];

           $newConsulta->comentario = $input['comment'];
           $newConsulta->form_html = $input['form_html'];

           $newConsulta -> save();

        }

}
