<?php

namespace App\Imports;

use App\Models\CsvUpload;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

use Maatwebsite\Excel\Concerns\Importable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\withValidation;
use Throwable;
class UsersImport implements ToCollection,withValidation
{
    /**
    * 
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
     use Importable;

public function collection(Collection $rows)

    {




        foreach ($rows as $row) 
        {
            CsvUpload::create([
                
                'first_name'=>      $row[0],
                'last_name' =>      $row[1],
                'company'=>         $row[2],
                'accessories' =>    $row[3],  


            ]);
        }
    }
    
    public function batchSize(): int
    {
        return 15000;

    }
    public function rules(): array

    
    {
       
        return [
           
            '0' => ['required','email','unique:csv_uploads,first_name']
        ];
    }

    public function customValidationAttributes()
{
    return [
         '0' => 'email'
    ];
}

   

}