<?php
	date_default_timezone_set('Asia/Manila');

	class SQL{
		private $conn;
		public function __construct(){
			$this->conn = mysqli_connect("localhost","root","Codeusctc","sybeer");
			$this->conn2 = mysqli_connect("localhost","root","Codeusctc","test");
		}
		public function validateID($idnum){
			$sql = "SELECT * FROM registration WHERE idnum='".$idnum."'";
			$query = mysqli_query($this->conn,$sql);
			if(mysqli_num_rows($query)>0) return true;
			else return false;
		}
		public function validateFacultyID($idnum){
			$sql = "SELECT * FROM faculty WHERE idnum='".$idnum."'";
			$query = mysqli_query($this->conn,$sql);
			if(mysqli_num_rows($query)>0) return true;
			else return false;
		}
		public function isSignedIn($idnum){
			if($this->validateID($idnum))
				$sql = "SELECT * FROM registration WHERE idnum='".$idnum."' AND timein!=' '";
			else $sql = "SELECT * FROM faculty WHERE idnum='".$idnum."' AND timein!=' '";
			$query = mysqli_query($this->conn,$sql);
			if(mysqli_num_rows($query)>0) return true;
			else return false;
		}
		public function signin($idnum){
			$now = new DateTime();
			$time = $now->format('G:i:s');
			if($this->validateID($idnum))
				$sql = "UPDATE registration SET timein='".$time."' WHERE idnum='".$idnum."'";
			else $sql = $sql = "UPDATE faculty SET timein='".$time."' WHERE idnum='".$idnum."'";
			$query = mysqli_query($this->conn,$sql);
			if(!$query) echo mysqli_error($this->conn);
		}
		public function updateTable(){
			$sql = "SELECT * FROM students";
			$query = mysqli_query($this->conn2,$sql);
			if($query){
				$count = 0;
				while($row = mysqli_fetch_assoc($query)){
					if($count%2==1&&!$this->validateID($row['idnum'])){
						$sql = "INSERT INTO `registration`(`idnum`, `name`, `courseyr`, `year`, `timein`) VALUES ('".$row['idnum']."','".$row['name']."','BSBA MKTG','".$row['year']."','')";
						if(mysqli_query($this->conn,$sql)){
							echo "Success<br>";
						}else echo mysqli_error($this->conn)."<br>";
					}
					$count++;
				}
			}
		}
		public function retrieveTimeIns($page){
			$sql = "SELECT * FROM registration ORDER BY courseyr,year ASC";
			$query = mysqli_query($this->conn,$sql);
			if($query){
				$itemArray = [];
				while($row = mysqli_fetch_assoc($query)){
					if($row['courseyr']==$page){
						array_push($itemArray, $row);
					}
				}
				return $itemArray;
			}else return false;
		}
		public function getNumberOfRows(){
			return $this->noOfitems;
		}
	}

	$SQL = new SQL;
