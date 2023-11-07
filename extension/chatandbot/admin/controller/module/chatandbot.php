<?php



namespace Opencart\Admin\Controller\Extension\Chatandbot\Module;


/**
 * @package       Live chat and ChatBot - ChatAndBot
 * @license       GNU/GPL 2 or later
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307,USA.
 *
 * The "GNU General Public License" (GPL) is available at
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 */


class ChatAndBot extends \Opencart\System\Engine\Controller 
{

    public function index() {
 
    $this->load->language('extension/chatandbot/module/chatandbot');
    $this->document->setTitle($this->language->get('heading_title'));
    $this->load->model('setting/setting');
    
 
    if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
     
        	$this->model_setting_setting->editSetting('module_chatandbot', $this->request->post);
         $this->session->data['success'] =$this->session->data['text_success'];
         $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
    }
 
    $data = array();
    $data += $this->load->language('extension/chatandbot/module/chatandbot');
    $data['module_chatandbot_plugin_id'] = html_entity_decode($this->config->get('module_chatandbot_plugin_id'));
    $data['module_chatandbot_status']=$this->config->get('module_chatandbot_status');
    $data += $this->GetBreadCrumbs();
    $data['action'] = $this->url->link('extension/chatandbot/module/chatandbot', 'user_token=' . $this->session->data['user_token'], true);
    $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
    $data['header'] = $this->load->controller('common/header');
    $data['column_left'] = $this->load->controller('common/column_left');
    $data['footer'] = $this->load->controller('common/footer');
    $data['user_token'] = $this->session->data['user_token'];
 
    $this->response->setOutput($this->load->view('extension/chatandbot/module/chatandbot', $data));
 
  }
  
  
  private function GetBreadCrumbs() {
    $data['breadcrumbs'] = array();

	  	$data['breadcrumbs'][] = array(
	  		'text' => $this->language->get('text_home'),
		  	'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
	  	);

	  	$data['breadcrumbs'][] = array(
	  		'text' => $this->language->get('text_extension'),
	  		'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		  );

   	$data['breadcrumbs'][] = array(
      'text'      => $this->language->get('heading_title'),
	     'href'      => $this->url->link('extension/chatandbot/module/chatandbot', 'user_token=' . $this->session->data['user_token'], true)
   		);
    return $data;
  }
 

}
?>
