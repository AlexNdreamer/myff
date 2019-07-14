<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('(:all)', function($route){
	echo $route.' not  found!';
});

Macaw::get('', 'App\Controllers\IndexController@Index');

Macaw::dispatch();