<?php

namespace App\Http\Controllers;

use PDF;
use App\Salary;
use Illuminate\Http\Request;

class PdfMaker extends Controller
{
    public function printPDF() {
		$data['Salaries'] = Salary::all();        
        $pdf = PDF::loadView('pages.pdf_view', $data);

		// $pdf->set_paper("A4", "portrait");
        return $pdf->download('medium.pdf');
		// return view('pages.pdf_view', $data);

   }
}
