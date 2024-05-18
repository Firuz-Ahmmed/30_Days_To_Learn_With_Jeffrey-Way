<?php
namespace App\Models;
class Jobs{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'salary' => 100000
            ],
            [
                'id' => 2,
                'title' => 'Web Developer',
                'salary' => 80000
            ],
            [
                'id' => 3,
                'title' => 'Data Analyst',
                'salary' => 90000
            ]
        ];
    }
}
   