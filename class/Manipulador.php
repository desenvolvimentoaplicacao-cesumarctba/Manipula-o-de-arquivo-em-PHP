<?php


class Manipulador {

    private $file;
    private $data;

    public function __construct($file,$data)
    {
        
        if(empty($file)){
            die("Arquivo Não selecionado");
        }else {
            $this->file = $file;
        
            $this->data = $data;
        }
        
    }

    public function textModify(){
        $file = $this->file;

        $data = $this->data;

        
        file_put_contents($file, $data);

        $modifyFile = file_get_contents($file);
        
        return $modifyFile;
    }

    public function clear(){
        $file = $this->file;

        $data = NULL;

        file_put_contents($file, $data);

        $ClearFile = file_get_contents($file);
        
        return $ClearFile;
    }

    public function setEndOfLine(){
        $file = $this->file;

        $data = $this->data;

        file_put_contents($file, $data, FILE_APPEND);

        $modifyFile = file_get_contents($file);

        return $modifyFile;
    }

    public function seeFile(){

        $file = $this->file;

        $File = file_get_contents($file);

        return $File;
    }
}