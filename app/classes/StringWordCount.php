<?php


namespace App\classes;


class StringWordCount
{
    protected $string;
    protected $word;
    protected $char;

    public function __construct($post = null)
    {
        $this->string = $post['given_string'];
    }

    public function index(){

        header('Location: pages/index.php');
    }

    public function getWordString(){

        $this->word     = str_word_count($this->string);
        $this->char     = strlen($this->string);
        return ['word'  => $this->word,
                'char'  => $this->char
        ];
    }
}