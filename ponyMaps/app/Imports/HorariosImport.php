<?php

namespace App\Imports;

use App\Models\horarios;
use App\Models\materias;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;


class HorariosImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {


        //Hora Inicio
        $valorDecimal = $row["inicio"];
        $segundos = $valorDecimal * 60 * 60 * 24;
        $hora = Carbon::today()->startOfDay()->addSeconds($segundos);
        $horaIn = $hora->format('H:i');

        //Hora Fin
        $valorDecimal2 = $row["fin"];
        $segundos2 = $valorDecimal2 * 60 * 60 * 24;
        $hora2 = Carbon::today()->startOfDay()->addSeconds($segundos2);
        $horaFin= $hora2->format('H:i');


        if ($horaIn=='10:59'||$horaFin=='10:59') {
            $horaIn='11:00';
            $horaFin='11:00';
        }elseif ($horaIn=='12:59'||$horaFin=='12:59') {
            $horaIn='13:00';
            $horaFin='13:00';
        }elseif ($horaIn=='13:59'||$horaFin=='13:59') {
            $horaIn='14:00';
            $horaFin='14:00';
        }elseif ($horaIn=='15:59'||$horaFin=='15:59') {
            $horaIn='16:00';
            $horaFin='16:00';
        }elseif ($horaIn=='16:59'||$horaFin=='16:59') {
            $horaIn='17:00';
            $horaFin='17:00';
        }elseif ($horaIn=='19:59'||$horaFin=='19:59') {
            $horaIn='20:00';
            $horaFin='20:00';
        }elseif ($horaIn=='22:59'||$horaFin=='22:59') {
            $horaIn='23:00';
            $horaFin='23:00';
        }else{
            $horaIn=$horaIn;
            $horaFin=$horaFin;
        }
        $horaFormateadaInicio=$horaIn;
        $horaFormateadaFinal=$horaFin;


        return new horarios([
            "inicio" => $horaFormateadaInicio,
            "fin" => $horaFormateadaFinal,
            "edificio"=>$row["edificio"],
            "salon"=>$row["salon"],
            "dia"=>$row["dia"],
            "materia" => $row["materia"],

        ]);
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
