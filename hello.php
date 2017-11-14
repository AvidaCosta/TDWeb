<?php

class Foo
{
    public $aMemberVar = 'aMemberVar Member Variable';
    public $aFuncName = 'aMemberFunc';
    
    function aMemberFunc()
    {
        print'Inside `aMemberFunc()`';
    }
}




class Movie 
{
    protected $name = 'a Film Name';
    protected $description = ' a Film Description';
    protected $time = 'a Film Time';
    protected $releaseYear = 'an Year';

    
    function aFunction()
    {
        echo $this->name . $this->description . $this->time . $this->releaseYear."\n";
    }
    
    public function __construct($name="",$descr="",$time="",$year="")
    {
        $this->name = $name;
        $this->description = $descr;
        $this->time = $time;
        $this->releaseYear = $year;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name = "")
    {
        $this->name = $name;
    }
}
$Sharknado = new Movie("Biatch","Nul","1h","1998");
$Sharknado->aFunction();
$Sharknado->setName("Btch");
$Sharknado->aFunction();
