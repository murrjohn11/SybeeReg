<?php
	date_default_timezone_set('Asia/Manila');

	class SQL{
		private $conn;
		public function __construct(){
			$this->conn = new mysqli("localhost","root","Codeusctc","sybeer");
		}
		public function signin($idnum){
			$now = new DateTime();
			$time = $now->format('H:i:s A');
			$sql = "UPDATE registration SET timein='".$time."' WHERE idnum='".$idnum."'";
			$query = mysqli_query($this->conn,$sql);
			if($query) return true;
			else return false;
		}
		public function retrieveTimeIns(){
			$sql = "SELECT * FROM registration WHERE timein !=' ' ORDER BY courseyr ASC";
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
