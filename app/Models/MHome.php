<?php

namespace App\Models;

use CodeIgniter\Model;

class MHome extends Model
{
	protected $table = "settings";
	public function getclothes()
	{	$db = db_connect();
		$query = $db->query("SELECT settings_value FROM settings WHERE settings_name = 'featured_province'");
		foreach ($query->getResult() as $row){
		$sv = $row->settings_value;
		}
		$query = $db->query("SELECT * FROM clothes WHERE province_id = $sv");
		foreach ($query->getResult() as $row){
		$data['clothes'] = $row;
		}
		return $data;
	}

	public function getdance()
	{	$db = db_connect();
		$query = $db->query("SELECT settings_value FROM settings WHERE settings_name = 'featured_province'");
		foreach ($query->getResult() as $row){
		$sv = $row->settings_value;
		}
		$query = $db->query("SELECT * FROM dance WHERE province_id = $sv");
		foreach ($query->getResult() as $row){
		$data['dance'] = $row;
		}
		return $data;
	}

	public function getlandmark()
	{	$db = db_connect();
		$query = $db->query("SELECT settings_value FROM settings WHERE settings_name = 'featured_province'");
		foreach ($query->getResult() as $row){
		$sv = $row->settings_value;
		}
		$query = $db->query("SELECT * FROM landmark WHERE province_id = $sv");
		foreach ($query->getResult() as $row){
		$data['landmark'] = $row;
		}
		return $data;
	}

	public function getfood()
	{	$db = db_connect();
		$query = $db->query("SELECT settings_value FROM settings WHERE settings_name = 'featured_province'");
		foreach ($query->getResult() as $row){
		$sv = $row->settings_value;
		}
		$query = $db->query("SELECT * FROM food WHERE province_id = $sv");
		foreach ($query->getResult() as $row){
		$data['food'] = $row;
		}
		return $data;
	}

	public function getstory()
	{	$db = db_connect();
		$query = $db->query("SELECT settings_value FROM settings WHERE settings_name = 'featured_province'");
		foreach ($query->getResult() as $row){
		$sv = $row->settings_value;
		}
		$query = $db->query("SELECT * FROM story WHERE province_id = $sv");
		foreach ($query->getResult() as $row){
		$data['story'] = $row;
		}
		return $data;
	}

	public function getfoodlatest(){
		$db = db_connect();
		$query = $db->query("SELECT * FROM food WHERE food_id=(SELECT max(food_id) FROM food);");
		foreach ($query->getResult() as $row){
			$data['latestfood'] = $row;
		}
		return $data;
	}
	public function getlandmarklatest(){
		$db = db_connect();
		$query = $db->query("SELECT * FROM landmark WHERE landmark_id=(SELECT max(landmark_id) FROM landmark);");
		foreach ($query->getResult() as $row){
			$data['latestlandmark'] = $row;
		}
		return $data;
	}
	public function getdancelatest(){
		$db = db_connect();
		$query = $db->query("SELECT * FROM dance WHERE dance_id=(SELECT max(dance_id) FROM dance);");
		foreach ($query->getResult() as $row){
			$data['latestdance'] = $row;
		}
		return $data;
	}
}
	



