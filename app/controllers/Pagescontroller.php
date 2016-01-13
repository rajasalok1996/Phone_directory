<?php
/**
* 
*/
class PagesController extends BaseController
{
	
	function home()
	{
		$name="Rajatttt";
	return View::make('extra.welcome')->with('name',$name);
	}
   function about()
   {    $about="ABoutttttttttt";
   	return View::make('extra.about')->with('about',$about);
   }
}

?>