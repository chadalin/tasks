<?php 

class QueryBilder
{
	public $pdo;
	
	function __construct()
	{
		 $this->pdo = new PDO("mysql:host = localhost; dbname=ch35098_githab","ch35098_githab","m0t0r0la");
	}
	
	//выводим все запросы из базы
	function getAll($data)
	{
		$sql = "SELECT * FROM $data";
        $statement = $this->pdo->prepare($sql); //подготовить
        $statement->execute(); //true || false
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return  $results;
	}
	
	
	function getOne($table,$id)
	{
	   $sql = "SELECT * FROM $table WHERE id=:id";
	   $statement = $this->pdo-prepare($sql);
	   $statement->bindParam(":id",$id );
	   $statement->execute($table);
	   $result = $statement->fetch(PDO::FETCH_ASSOC);
	   return $result;
	}
	
	function delet($table,$id)
	{
	   $sql = "DELETE FROM $table WHERE id=:id ";
	   $statement = $this->pdo->prepare($sql);
	   $statement->bindParam(":id",$id);
	   $statement->execute();
	   
	 
	   
	}
	
	
	
	function store($table, $data) 
	{
		
	$keys = array_keys($data);
        // 2. Сформировать строку title, content
        $stringOfKeys = implode(',', $keys);
        //3. Сформировать метки
        $placeholders = ":" . implode(', :', $keys);

        $sql = "INSERT INTO $table ($stringOfKeys) VALUES ($placeholders)";

        $statement = $this->pdo->prepare($sql);
        $result = $statement->execute($data); //true || false
	//	var_dump($result);die;
	}
	
	
	//обновляем данные
	function update($table, $data)

	{
		$filds ='';
		foreach ($data as $key => $values){
			
			$filds .= $key." =:".$key .",";
			
		}
		$filds=(rtrim($filds,","));
        $sql="UPDATE $table  SET $filds WHERE id=:id";
        //var_dump($sql);
		$statement =$this->pdo->prepare($sql);
	    $statement->execute($data);

		
		
	}

	
	
		function sortUp($table, $column)
	{
			$sql = "SELECT * FROM $table ORDER BY $column ASC";
		$statement = $this->pdo->prepare($sql);
		//$statement->bindParam(":id",$_GET['id']);
		$statement->execute();
		//var_dump($statement);
		header("Location:/githab/tasks/index.php");
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	   
}