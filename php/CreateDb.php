<?php


class CreateDb
{
        public $servername;
        public $username;
        public $password;
        public $dbname;
        public $tablename;
        public $con;
 
        // class constructor
    public function __construct(
         $dbname, $tablename
    )
    {
      $this->dbname = getenv('DB_NAME');
      $this->tablename = "Producttb";
      $this->servername = getenv('DB_SERVER');
      $this->username = getenv('DB_USER');
      $this->password = getenv('DB_PASSWORD');
    

      // create connection
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);

        // Check connection
        if (!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }

        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

        // execute query
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($this->servername, $this->username, $this->password, $dbname);

            // sql to create new table for products
            $sql1 = " CREATE TABLE IF NOT EXISTS producttb
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             product_name VARCHAR (25) NOT NULL,
                             product_price FLOAT,
                             product_image VARCHAR (100),
                             product_tag VARCHAR (20)
                            );";

            if (!mysqli_query($this->con, $sql1)){
                echo "Error creating table : " . mysqli_error($this->con);
            }

            // sql to create new table for user
            $sql2 = " CREATE TABLE IF NOT EXISTS usertb
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             username VARCHAR (255) NOT NULL,
                             password VARCHAR (255) NOT NULL,
                             email VARCHAR (255) NOT NULL
                            );";

            if (!mysqli_query($this->con, $sql2)){
                echo "Error creating table : " . mysqli_error($this->con);
            }
            

        }else{
            return false;
        }
    }

    // get product from the database
    public function getData($tag = '-1'){
        if($tag=='-1'){
        $sql = "SELECT * FROM producttb";
        }else if($tag=='men'|| $tag=='women'|| $tag=='kids'||$tag=='other'){
        $sql = "SELECT * FROM producttb WHERE product_tag='$tag'";
        }else{
         $sql = "SELECT * FROM producttb WHERE product_name LIKE '%$tag%'";
        }

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
        else{
            return false;
        }
    }

}