<?php 
class Home extends Controllers
{
  public function __construct()
  {
    parent::__construct();
  }
  public function home()
  {
    $data['titulo'] = "Home";
    $data['content'] = "contet home";
    $data['subonten'] = "sub content";
   $this->Views->getView($this,"home", $data);
  }

}
?>