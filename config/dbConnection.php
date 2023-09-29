<?php

class dbConnection
{

    private $connection;
    private $db_type;
    private $db_host;
    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_port;
    private $posted_values;

    public function __construct($DB_HOST, $DB_NAME, $DB_USER, $DB_PASS, $DB_PORT)
    {
        $this->db_host      = $DB_HOST;
        $this->db_name      = $DB_NAME;
        $this->db_user      = $DB_USER;
        $this->db_pass      = $DB_PASS;
        $this->db_port      = $DB_PORT;
        $this->connection($DB_HOST, $DB_NAME, $DB_USER, $DB_PASS, $DB_PORT);
    }

    public function connection($DB_HOST, $DB_NAME, $DB_USER, $DB_PASS, $DB_PORT)
    {

        if ($DB_PORT <> Null) {
            $DB_HOST .= "";
        }
        try {
            $this->connection = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function insert($table, $data){
        ksort($data);
        $fieldDetails = NULL;
        $fieldNames = implode('`, `',  array_keys($data));
        $fieldValues = implode("', '",  array_values($data));
        $sth = "INSERT INTO $table (`$fieldNames`) VALUES ('$fieldValues')";
        return $this->extracted($sth);
    }
   
    public function select($sql){
                $result = $this->connection->prepare($sql);
                $result->execute();
                return $result->fetchAll()[0];
    }
    
    public function select_while($sql){

                $result = $this->connection->prepare($sql);
                $result->execute();
                return $result->fetchAll();
    }
    
    public function update($table, $data, $where){
        $wer = '';
        if(is_array($where)){
            foreach ($where as $clave=>$value){
                $wer.= $clave."='".$value."' AND ";
            }
            $wer   = substr($wer, 0, -4);
            $where = $wer;
        }
        ksort($data);
        $fieldDetails = NULL;
        foreach ($data as $key => $values){
            $fieldDetails .= "$key='$values',";
        }
        $fieldDetails = rtrim($fieldDetails,',');
        if($where==NULL or $where==''){
            $sth = "UPDATE $table SET $fieldDetails";
        }else {
            $sth = "UPDATE $table SET $fieldDetails WHERE $where";
        }
        return $this->extracted($sth);
    }
    
    public function delete($table,$where){
        $wer = '';
        if(is_array($where)){
            foreach ($where as $clave=>$value){
                $wer.= $clave."='".$value."' and ";
            }
            $wer   = substr($wer, 0, -4);
            $where = $wer;
        }
        if($where==NULL or $where==''){
            $sth = "DELETE FROM $table";
        }else{
            $sth = "DELETE FROM $table WHERE $where";
        }
            return $this->extracted($sth);
    }
    
    public function truncate($table){
        $sth = "TRUNCATE $table";
        return $this->extracted($sth);
    }
	
	
	public function last_id(){

		return $this->connection->lastInsertId();
		
	}	
    
    /**
     * @param string $sth
     * @return bool|string|void
     */
    public function extracted(string $sth)
    {
        try {
            // Prepare statement
            $stmt = $this->connection->prepare($sth);
            // execute the query
            $stmt->execute();
            return TRUE;
        } catch (PDOException $e) {
            return $sth . "<br />" . $e->getMessage();
        }
        
    }
}
