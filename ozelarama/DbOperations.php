<?php 
class DbOperations{

	private $connection;

	function connect(){ //Db Bağlantı fonksiyonu
		
		$conn = mysqli_connect("localhost","root","","blogsite");

		if (mysqli_connect_errno($conn))	//Bağlanmazsa error verdirilir.
			echo "MySQLe baglanamadi: " . mysqli_connect_error();
		else
			$this->connection = $conn;
	}

	function search($key){

		mysql_query("SET NAMES UTF8"); // Türkçe karakter sorununu ortadan kaldırır.
		$result = mysqli_query($this->connection, 
			"SELECT * FROM blog_posts JOIN categories on blog_posts.postID=categories.categoryID WHERE blog_posts.postContent like '%$key%';");
		return $result;

	}

	function commentSearch($key){

		$result = mysqli_query($this->connection, 
			"SELECT * FROM comments JOIN blog_posts on blog_posts.postID=comments.postID WHERE comments.comment like '%$key%';");
		mysql_unbuffered_query('SET NAMES utf8');
		return $result;
	}

	function view($result, $commentResult){
		include 'results.php';
	}
}