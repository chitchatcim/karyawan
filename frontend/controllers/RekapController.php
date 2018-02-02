<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class RekapController extends Controller{
	
	public function actionIndex()
	{
		
	$query=Yii::$app->db->createCommand("select * from karyawan")
	->queryAll();
	return $this->render('index', [
	
	'query' => $query ]);
}
} 