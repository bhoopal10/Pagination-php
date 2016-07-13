<?php 
 class paginate{
 	protected $total;
 	protected $current;
 	protected $limit;
 	protected $total_page;
 	public function __construct(){

 	}
 	public function  init($total,$current,$limit){
 		$this->total = $total;
 		$this->current = $current;
 		$this->limit = $limit;
 		$this->totalPages();
 	}
 	private function totalPages(){
 		$this->total_page = ceil($this->total / $this->limit);
 		return $this->total_page;
 	}
 	private function preLink(){
 		if( $this->total_page > 1){

 		}
 	}
 	private function nextLink(){

 	}
 	private function currentLink(){

 	}
 	private function firstLink(){

 	}
 	private function lastLink(){

 	}
 	private function listLink(){
 		$get = $_GET;
 		unset($get['page']);
 		$pages = $this->total_page;
 		$current = $this->current;
 		$links = "";
 		for($i=1;$i<=$pages;$i++){
 			if($current == $i){
 				$links .= "<li class='pag-li active'>".$this->span($i).'</li>';
 			}else{
 				$links .= "<li class='pag-li'>".$this->href($i,$get).'</li>';
 			}
 		}
 		return $links;
 	}
 	private function href($text,$get){
 		$get['page'] = $text;
 		$link = http_build_query($get); 
 		$a = "<a href='?".$link."' class='paginate_link' >".$text.'</a>';
 		return $a;
 	}
 	private function span($text){
 		$span = "<span class='paginate_link' >".$text.'</span>';
 		return $span;
 	} 
 	public function create_link(){
 		if($this->total_page > 1)
 		{
 			return $this->listLink();
 		}else{
 			return '';
 		}
 	}
 }