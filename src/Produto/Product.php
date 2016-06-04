<?php
	namespace Produto;

	class Product{
		/**
		**@var conn
		**/
		private $table;
		/**
		**@var conn
		**/
		private $pdo;
		/**
		**@var datas
		**/
		private $data = array();

		public function __construct(\PDO $pdo)
		{
			$this->pdo = $pdo;
		}
		public function table($table)
		{
			$this->table = $table;
		}
		public function setValue($name,$value,$description)
		{
			$this->data = array(
				'name' => (string) $name, 
				'value' => (float) $value,
				'description' => (string) $description
				);
		}
		public function run()
		{
			$prepare = $this->pdo->prepare("INSERT INTO ".$this->table." (nome,valor,descrip) VALUES (:name,:value,:description)");
			$prepare->bindValue(":name",(string) $this->data['name'],\PDO::PARAM_STR);
			$prepare->bindValue(":value",(float) $this->data['value'],\PDO::PARAM_STR);
			$prepare->bindValue(":description",(string) $this->data['description'],\PDO::PARAM_STR);
			return $prepare->execute();
		}
		public function getValue()
		{
			return $this->data;
		}
		public function getSearchValue($id)
		{
			$prepare = $this->pdo->prepare("SELECT * FROM ".$this->table." WHERE id = :id");
			$prepare->bindValue(":id", (int) $id,\PDO::PARAM_INT);
			$prepare->execute();
			$result = $prepare->fetchAll(\PDO::FETCH_ASSOC);
			return $result;
		}
		public function getSearchValueAll()
		{
			$prepare = $this->pdo->prepare("SELECT * FROM ".$this->table."");
			$prepare->execute();
			$result = $prepare->fetchAll(\PDO::FETCH_ASSOC);
			return $result;
		}
		public function deleteValue($id)
		{
			$prepare = $this->pdo->prepare("DELETE FROM ".$this->table." WHERE id = :id");
			$prepare->bindValue(":id",(int) $id,\PDO::PARAM_INT);
			return $prepare->execute();
		}
		public function updateValue($id)
		{
			$prepare = $this->pdo->prepare("UPDATE ".$this->table." SET nome = :name,valor = :value,descrip = :description WHERE id = :id");
			$prepare->bindValue(":name", $this->data['name'],\PDO::PARAM_STR);
			$prepare->bindValue(":value", $this->data['value']);
			$prepare->bindValue(":description", $this->data['description'],\PDO::PARAM_STR);
			$prepare->bindValue(":id",(int) $id,\PDO::PARAM_INT);
			return $prepare->execute();
		}	
	}