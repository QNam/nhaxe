<?php
/**
 * @Project BNC v2 -> Module Home
 * @File home/main.php
 * @Author Quang Chau Tran (nquangchauvn@gmail.com)
 * @Createdate 10/29/2014, 09:38 AM
 */
if (!defined('BNC_CODE')) {
	exit('Access Denied');
}
Class Home extends Controller {
	public function index() {
		global $web;

		$data['home_block'] = $this->getHomeBlock();
		if($_COOKIE['doanhdz']){
        	$data['ss'] = $_COOKIE['doanhdz'];
        }
		if(!empty($web['anvui_id'])){
            $data['anvuiId'] = $web['anvui_id'];
			$data['chuyen'] = $this->GetAnvui('https://dobody-anvui.appspot.com/web/route-getlist?page=0&count=100&companyId='.$web['anvui_id'].'&version=0.1');
			// echo 'https://dobody-anvui.appspot.com/web/route-getlist?page=0&count=10&companyId='.$web['anvui_id'].'&version=0.1';
			// var_dump($data['chuyen']); die;

			$infoNhaxe['companyId'] = $web['anvui_id'];


			$data['chuyen'] = $data['chuyen']['results']['listRoute'];

			// if (isset($_COOKIE['doanhdz']) ) {
			// echo "<pre>";var_dump($web);echo "</pre>";
			// }
			$routeId = '';
			foreach ($data['chuyen'] as $key => &$value) {
				if($routeId == ''){
					$routeId = $value['routeId'];
				}
				$value['price'] = number_format(max($value['listPriceByVehicleType'])).' đ';
				if($web['idw'] == 2829){
					$value['link'] = 'https://'.$web['home'].'/dat-ve?routeId='.$value['routeId'];
				}else{
					$value['link'] = 'http://'.$web['home'].'/dat-ve?routeId='.$value['routeId'];
				}
				
			}	



			$beginOfDay = strtotime("midnight"); 
			$endOfDay   = strtotime("tomorrow", $beginOfDay) - 1;

			$data['days'][] = date("d-m-Y",$endOfDay);
			for ($i=1; $i < 30 ; $i++) { 
				$data['days'][] = date("d-m-Y",$endOfDay+$i*24*60*60);
			}

			$beginOfDay = $beginOfDay*1000;
			$endOfDay = $endOfDay*1000;

			$rt= $this->GetAnvui('https://dobody-anvui.appspot.com/web/route-view-by-id?page=0&count=10&routeId='.$routeId.'&startDate='.$beginOfDay.'&endDate='.$endOfDay);
	 		
	 		

	 		$data['listPoint'] = $rt['results']['listPoint'];


	 		$data['routeId'] = $routeId;


		}
		if($web['id_anvui'] === 'TC0Ah1r7aBgqH7jX'){
			if (isset($_COOKIE['doanhdz']) ) {
				echo "<pre>";echo 1;echo "</pre>";
			}
		}
		
		$this->setContent($data, 'index');
	}
	private function getHomeBlock() {
		$return = array();
		return $return;
	}
}