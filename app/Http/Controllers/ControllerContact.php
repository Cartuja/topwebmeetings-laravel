<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

//Intermediario entre el modelo y las vistas

class ControllerContact extends Controller {

	public static function contact($input)
	{
    $devuelve['ok'] = 0;
    if(isset($input['nombre']) && isset($input['email']) && isset($input['mensaje']))
		{
			if(trim($input['nombre']) != '' && trim($input['email']) != '' && trim($input['mensaje']) != '')
			{
	      $to      = '';
	      $subject = "Mensaje de TopWebMeetings: ".$input['nombre'];
	      $message = $input['mensaje'];
	      $headers = 'From: isaac@andalusele.com' . "\r\n";

	      mail($to, $subject, $message, $headers);
	      $devuelve['ok'] = 1;
    	}
			else
			{
				$devuelve['ok'] = 0;
			}
		}
    return $devuelve;
	}

}
