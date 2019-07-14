<?php 
/**
 * 
 */
namespace App\Controllers;
use App\Models\Test;
class IndexController //extends BaseController
{
	


	public function Index()
	{
		Test::test();
	}
}