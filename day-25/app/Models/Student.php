<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $student;

    public function newStudent()
    {
        $this->student = new Student();
        $this->student->name = 'Nur';
        $this->student->email = 'nur@gmail.com';
        $this->student->mobile = '65475415';
        $this->student->save();
    }

    public static function getAllStudent()
    {
        return [
            0 => [
                'id'        => 1,
                'name'      => 'Shofiullah',
                'email'     => 'shofi@gmail.com',
                'mobile'    => '1235645789',
                'image'     => '',
            ],
            1 => [
                'id'        => 2,
                'name'      => 'rafiq',
                'email'     => 'rafiq@gmail.com',
                'mobile'    => '98754653213',
                'image'     => '',
            ],
            2 => [
                'id'        => 3,
                'name'      => 'ehasan',
                'email'     => 'ehasan@gmail.com',
                'mobile'    => '987351325498',
                'image'     => '',
            ],
        ];
    }
}
