<?php
	date_default_timezone_set('Asia/Manila');

	class SQL{
		private $conn;
		public function __construct(){
			$this->conn = mysqli_connect("localhost","root","Codeusctc","sybeer");
		}
		public function validateID($idnum){
			$sql = "SELECT * FROM registration WHERE idnum='".$idnum."'";
			$query = mysqli_query($this->conn,$sql);
			if(mysqli_num_rows($query)>0) return true;
			else return false;
		}
		public function isSignedIn($idnum){
			$sql = "SELECT * FROM registration WHERE idnum='".$idnum."' AND timein!=' '";
			$query = mysqli_query($this->conn,$sql);
			if(mysqli_num_rows($query)>0) return true;
			else return false;
		}
		public function signin($idnum){
			$now = new DateTime();
			$time = $now->format('G:i:s A');
			$sql = "UPDATE registration SET timein='".$time."' WHERE idnum='".$idnum."'";
			$count = 0;
			$query = mysqli_query($this->conn,$sql);
			if(!$query) echo mysqli_error($this->conn);
		}
		public function retrieveTimeIns(){
			$sql = "SELECT * FROM registration ORDER BY courseyr,idnum ASC";
			$query = mysqli_query($this->conn,$sql);
			if($query){
				$itemArray = [];
				while($row = mysqli_fetch_assoc($query)){
					array_push($itemArray, $row);
				}
				return $itemArray;
			}else return false;
		}
		public function getNumberOfRows(){
			return $this->noOfitems;
		}
	}

	$SQL = new SQL;
