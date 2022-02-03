<?php


namespace App\classes;


class Student
{

    protected $text;
    protected $students;
    protected $result = [];

    public function __construct($post = null )
    {
        if (isset($post['search_btn'])){
            $this->text = $post['search'];
        }

    }

    public function getAllStudent(){

        return [
            0 => [
                'name'      => 'Khorshed',
                'mobile'    => '123456777',
                'email'     => 'khorshed@gmail.com',
                'address'   => 'Mouchak'
            ],
            1 => [
                'name'      => 'Alom',
                'mobile'    => '468646325',
                'email'     => 'alom@gmail.com',
                'address'   => 'Malibagh'
            ],
            2 => [
                'name'      => 'Emon',
                'mobile'    => '2234655656',
                'email'     => 'emon@gmail.com',
                'address'   => 'Dhaka'
            ],
            3 => [
                'name'      => 'Sumon',
                'mobile'    => '43546686',
                'email'     => 'sumon@gmail.com',
                'address'   => 'Wireless'
            ],
            4 => [
                'name'      => 'Tamal',
                'mobile'    => '976543685',
                'email'     => 'tamal@gmail.com',
                'address'   => 'Jigatola'
            ],

        ];
    }

    public function getStudentBySearchText(){

        $this->students = $this->getAllStudent();
        foreach ($this->students as $std){
            if ($this->text == $std['name']){
                $this->result = $std;
                break;
            }
        }
        return $this->result;
    }
}