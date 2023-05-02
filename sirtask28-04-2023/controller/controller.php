<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent:: __construct();

//fetch table data
$shw=$this->selectalldata('tbl_sirtask1'); 

// join and show all students list in show students data
$shwjoin=$this->joindata('tbl_sirtask','tbl_sirtask1','tbl_sirtask.course_id=tbl_sirtask1.course_id');


// insert addstudents data in tables 
if(isset($_POST["btn"]))
{
    $fnm=$_POST["fnm"];
    $lnm=$_POST["lnm"];
    $em=$_POST["email"];
    $ph=$_POST["phone"];
    $course=$_POST["cnm"];
    
    $data=array("first_name"=>$fnm,"last_name"=>$lnm,"email"=>$em,"phone"=>$ph,"course_id"=>$course);
    $chk=$this->insartalldata($data,'tbl_sirtask');
        if($chk)
    {
        echo "<script>
        alert('Thanks for adding students data')
        window.location='./';
        </script>";
    }
}




//load view

if(isset($_SERVER["PATH_INFO"]))
{
    switch ($_SERVER["PATH_INFO"]){
        case '/' :
    require_once("index.php");
    require_once("header.php");
    require_once("home.php");
break;


default:
require_once("index.php");
require_once("header.php");
break;


    }
    
    }
}

    }

$obj= new controller; 
?>