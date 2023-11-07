<?php

namespace Opencart\Catalog\Controller\Extension\Chatandbot\Module;

class ChatAndBot extends \Opencart\System\Engine\Controller 
{

	public function index()
	{
   
    $data = array();
    $data['module_chatandbot_plugin_id'] =explode('124wedf239_', $this->config->get('module_chatandbot_plugin_id'));
			 $data['f_part'] = $data['module_chatandbot_plugin_id'][0];
		 	$data['s_part'] = $data['module_chatandbot_plugin_id'][1];

   if(isset($data['s_part']) && $this->config->get('module_chatandbot_status') ){
    
     $data['ret'] ="<script async='true' type='text/javascript'>(function () { var _id = ". html_entity_decode($data['f_part'])."; var _aid = '".html_entity_decode($data['s_part'])."'; var d = document;var w = window;var cab_user_param ='';var title = encodeURIComponent(d.title); var url = w.location.origin+w.location.pathname;   var _date = Date.now();var width=document.documentElement.clientWidth;  var height=document.documentElement.clientHeight; function l(){ var s = document.createElement('script');s.type = 'text/javascript'; s.async = true;s.src = 'https://chatandbot.com/erl/web333?width='+width+'&height='+height+cab_user_param+'&get_fr=1&title='+title+'&sid='+_id+'&aid='+_aid+'&date='+_date+'&url='+url;var ss = document.getElementsByTagName('script')[0];ss.parentNode.insertBefore(s, ss);}if (d.readyState == 'complete') {l();} else {if (w.attachEvent) {w.attachEvent('onload', l);} else { w.addEventListener('load', l, false);}}})()</script>";
     return  $this->load->view('extension/chatandbot/module/chatandbot', $data);
   }

	}

   
}
?>