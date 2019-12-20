<?php 

const HOST = 'localhost';
const USER = 'root';
const PWD = '';
const DB_name = 'Blog';

class Users {
	public function __construct() {
		$this->conn = new mysqli(HOST, USER, PWD, DB_name);
		$this->query = "";

		if ($this->conn->connect_error) {
			die ('Failed to establish connection '. $this->conn->connect_error);
		}
	}

	public function insert($data) {
		$this->query = "INSERT INTO user VALUES ('$data[uname]', '$data[fname]', '$data[lname]', '$data[email]', '$data[password]')";
		// echo $this->query;
		// exit();
		$res = $this->conn->query($this->query);
		if($res) {
			return true;
		}else {
			return false;
		}
	}

	public function find($project=[], $filter=[]){
		if($project != []){
			$project = implode(', ', $project);
		}else{
			$project = "*";
		}
		if($filter != []){
			$filter = implode(' AND ', $filter);
			$filter = ' WHERE ' . "$filter";
		}else{
			$filter = "";
		}
		$this->qry = "SELECT $project FROM user $filter";
		$res = $this->conn->query($this->qry);

		if ($res->num_rows > 0){
			$data = $res->fetch_all();
			return $data;
		}
		return false;
	}

	public function login($user, $pwd){
		$this->query = "SELECT * from user where uname='$user' AND password='$pwd'";
		$res = $this->conn->query($this->query);
		var_dump($res);
		if ($res->num_rows == 1){
			$data = $res->fetch_assoc();
			print_r($data);
			// exit();
			return $data;
		}
		return false;
	}
}

class Post {
	public function __construct() {
		$this->conn = new mysqli(HOST, USER, PWD, DB_name);
		$this->query = "";

		if ($this->conn->connect_error) {
			die ('Failed to establish connection '. $this->conn->connect_error);
		}
	}

	public function find($project=[], $filter=[]){
		if($project != []){
			$project = implode(', ', $project);
		}else{
			$project = "*";
		}
		if($filter != []){
			$filter = implode(' AND ', $filter);
			$filter = ' WHERE ' . "$filter";
		}else{
			$filter = "";
		}
		$this->qry = "SELECT $project FROM post $filter";
		$res = $this->conn->query($this->qry);
		echo $this->qry."<br>";
		// var_dump($res);
		// exit();
		if ($res->num_rows > 0){
			$data = $res->fetch_all();
			return $data;
		}
		return false;
	}

	public function insert($data) {
		$this->query = "INSERT INTO post (title, txt_body, image, created_by, created_on, topic, post_id) VALUES ('$data[title]', '$data[txt_body]', '$data[image]', '$data[created_by]', '$data[created_on]', '$data[topic]', '$data[post_id]')";

		echo $this->query;
		// exit();

		$res = $this->conn->query($this->query);
		if($res) {
			return true;
		}else {
			return false;
		}
	}

	public function update($columns, $condition) {
		$this->query = "UPDATE post SET title = '$columns[title]', txt_body = '$columns[txt_body]', image = '$columns[image]', topic = '$columns[topic]' WHERE $condition";
		echo $this->query;
		// exit();
		$res = $this->conn->query($this->query);

		if($res) {
			return true;
		}
		else
			return false;
	}

	public function delete($filter = []) {
		if($filter != []){
				$filter = implode(' AND ', $filter);
				$filter = ' WHERE ' . "$filter";
			}else{
				$filter = "";
			}

		$this->qry = "Delete FROM post $filter";

		$res = $this->conn->query($this->qry);
		// echo $this->qry;
		// exit();
		if($res)
			return true;
		return false;

	}

	public function publish($post) {
		$this->query = "UPDATE post SET public = '1' WHERE post_id = '$post'";

		$res = $this->conn->query($this->query);
		// echo $this->query;
		// exit();
		if($res)
			return true;
		return false;
	}

	public function private($post) {
		$this->query = "UPDATE post SET public = '0' WHERE post_id = '$post'";

		$res = $this->conn->query($this->query);
		// echo $this->qry;
		// exit();
		if($res)
			return true;
		return false;
	}

}

class Topic {
	public function __construct() {
		$this->conn = new mysqli(HOST, USER, PWD, DB_name);
		$this->query = "";

		if ($this->conn->connect_error) {
			die ('Failed to establish connection '. $this->conn->connect_error);
		}
	}

	public function find($project=[], $filter=[]){
		if($project != []){
			$project = implode(', ', $project);
		}else{
			$project = "*";
		}
		if($filter != []){
			$filter = implode(' AND ', $filter);
			$filter = ' WHERE ' . "$filter";
		}else{
			$filter = "";
		}
		$this->qry = "SELECT $project FROM topic $filter";
		// echo $this->qry;
		// exit();
		$res = $this->conn->query($this->qry);

		if ($res->num_rows > 0){
			$data = $res->fetch_all();
			return $data;
		}
		return false;
	}
}

?>