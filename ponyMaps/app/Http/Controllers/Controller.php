<?php

namespace App\Http\Controllers;

use App\Imports\HorariosImport;
use Error;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;
use Maatwebsite\Excel\Excel as ExcelExcel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function importExcel(Request $request){

        $file=$request->file('file');
        Excel::import(new HorariosImport,$file, \Maatwebsite\Excel\Excel::XLSX);
        return redirect()->route('horariosVista')->with("success","horarios importados");
    

    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }


}
