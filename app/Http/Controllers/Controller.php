<?php

namespace App\Http\Controllers;
use App\Urls;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;


class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;


public function short_url($incoming_url=null)
{
	//echo $incoming_url;
    
	if(preg_match("/(https:\/\/|http:\/\/)[\S]+\.[\S]+/",$incoming_url))
	{
		
		if($url = Urls::where('orignal_url','=',$incoming_url)->first())
		{
			return json_encode(array("orignal_url"=>$incoming_url,"short_url"=>"localhost/".$url->short_url));
		}
		else
		{

		$url  =  new Urls;
		$url->orignal_url = $incoming_url;
		$url->save();
		$new_url = Urls::where('orignal_url','=',$incoming_url)->first();
		$incoming_url = html_entity_decode($incoming_url);
	    return json_encode(array("orignal_url"=>$incoming_url,"short_url"=>"localhost/".html_entity_decode($new_url->short_url)),JSON_UNESCAPED_SLASHES);      		
	}
}
	else
	{
		$error =  array("error"=>"Wrong url format, make sure you have a valid protocol and real site.");
    
		return json_encode($error);
	}
}

public function redirect_url($short_url = null)
{

    if($url = Urls::where('short_url','=',$short_url)->first())
		return redirect($url->orignal_url);
	else
	{
		$error =  array("error"=>"This url is not on the database");		
		return json_encode($error);	
	}
}

}
