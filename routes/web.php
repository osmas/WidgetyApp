<?php

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
//use Widgety\Widgety;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/{apiendpoint}', function ($apiendpoint) {

//$widgety = new App\Widgety\WidgetyAPI($client);
	$res = Widgety::callAPI($apiendpoint);

	// App::make('widgety')->callAPI($apiendpoint);

//$res = $widgety->callAPI($apiendpoint);




echo 'status'. ":" . $res->getStatusCode() ."<br>";
    // 200
    echo  $res->getHeaderLine('content-type'). "<br>";
    // 'application/json; charset=utf8'
      echo $res->getBody();

    // $arrdata =json_decode($res->getBody(), TRUE);

// foreach ($arrdata as $name => $value) {
 //    echo "<br>" .$name . ': ' . $value."<br>";
 //   }


    //return view('welcome');
});
