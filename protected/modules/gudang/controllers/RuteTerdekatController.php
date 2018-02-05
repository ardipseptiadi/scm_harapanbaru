<?php

class RuteTerdekatController extends Controller
{
  public function actionIndex()
  {
    $arr_pesanan = [['id'=>1,'ranking'=>1,'pesanan'=>'PSN/01','pelanggan'=>'Asep','jarak'=>1000]];
    $dt = new CArrayDataProvider($arr_pesanan,array(
							'keyField'=>'id'
						));
    $this->render('index',get_defined_vars());
  }
}
