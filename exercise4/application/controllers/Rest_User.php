<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Rest_User extends REST_Controller
{

    public function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('User_model');
    }

    public function users_get()
    {
        $Data=$this->User_model->getUser();
        $users=array();
        for($i=1;$i<count($Data);$i++)
        {
            $users[]=[
                'id'=>$i,
                'FirstName'=>$Data[$i]['FirstName'],
                'LastName'=>$Data[$i]['LastName'],
                'Gender'=>$Data[$i]['Gender'],
                'Address'=>$Data[$i]['Address'],
                'DoB'=>$Data[$i]['DoB'],
                'Avatar'=>$Data[$i]['Avatar'],
                'Status'=>$Data[$i]['Status'],
                'CreateDate'=>$Data[$i]['CreateDate']
            ];
        }
        $id = $this->get('id'); 
        // If the id parameter doesn't exist return all the users
        
        if ($id === NULL)
        {
            // Check if the users data store contains users (in case the database result returns NULL)
            if ($users)
            {
                // Set the response and exit
                $this->response($users, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
            }
            else
            {
                // Set the response and exit
                $this->response([
                    'status' => FALSE,
                    'message' => 'No users were found'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        }
        
        // Find and return a single record for a particular user.
        
        $id = (int) $id;
        
        // Validate the id.
        if ($id <= 0)
        {
            // Invalid id, set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        }
        
        // Get the user from the array, using the id as key for retrieval.
        // Usually a model is to be used for this.
        
        $user = NULL;
        
        if (!empty($users))
        {
            foreach ($users as $key => $value)
            {
                if (isset($value['id']) && $value['id'] === $id)
                {
                    $user = $value;
                }
            }
        }
        
        if (!empty($user))
        {
            $this->set_response($user, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
        else
        {
            $this->set_response($users, REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
    }

    public function users_delete()
    {
        $First = $this->post('first');
        $Last=$this->post('last');
        $this->User_model->deleteUser($First, $Last);
    }
    
    public function users_post()
    {
        //$this->User_model->updateUser();
    }
}
    
?>