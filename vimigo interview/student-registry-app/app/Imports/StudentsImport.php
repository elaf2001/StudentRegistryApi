<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class StudentsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $user = Student::where('email', '=', $row['email'])->first();
        //ensures that the users added are unique
        if ($user === null) {
        // user doesn't exist
            return new Student([
                'name' => $row['name'],
                'email' => $row['email'],
                'address' => $row['address'],
                'studycourse' => $row['studycourse'],
            ]);
        }
        
    }

}
