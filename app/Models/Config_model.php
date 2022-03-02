<?php


namespace App\Models;


use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;

class Config_model extends Model
{
	//private $db;

	public function __construct(?ConnectionInterface &$db = null, ?ValidationInterface $validation = null)
	{
		parent::__construct($db, $validation);

		//$this->db = \Config\Database::connect();
	}

	public function saveConfig($data)
	{
//		$sql = "INSERT INTO et3_first (txt) VALUES (".$this->db->escape($title).", ".$this->db->escape($name).")";
		$db = \Config\Database::connect();
		$sql = "INSERT INTO et3_first (txt,yyyy) VALUES ('тестовая запись " . date('Y-m-d H:i:s') . "')";
		if (!$db->query($sql)) {
			$error = $db->error();
			$error['query'] = $sql;
			return json_encode($error);
		}


		$query   = $db->query('SELECT id, txt FROM et3_first');
		$results = $query->getResultArray();

		$r = print_r($data,true) . '<br>';
		foreach ($results as $row) {
			$r .= $row['id'] . ' - ' . $row['txt'] . '<br>';
		}

//		echo $db->affectedRows();
//		return print_r($data,true);
		return $r;
	}

}