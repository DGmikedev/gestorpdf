<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clases\Mpdf;

use Dompdf\Dompdf;
use Dompdf\Options;


class FacturaController extends Controller
{
    public function gen_factura(){

        $pdf = new Mpdf('factura_t.pdf', ['A4', 'portrait'], 'template.pdf_factura', true,  [true, true, true, true, true, true] );


        $titulo_factura = "OBTENER FACTURA";

        $data = [$titulo_factura];

        return $pdf->generaPDF($data);

    }

    
}

