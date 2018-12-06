<?php
class Connection
{
	public $con;
	public function __construct()
	{
		$user="root";
		$pass="";
		$database="quanlynhahang";
        $hostname="localhost";
        try{
            $this->con = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8",$user,$pass);
        } catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
	}
	public function query($sql)
	{
		
		return $this->con->query($sql);
	}
}
?>