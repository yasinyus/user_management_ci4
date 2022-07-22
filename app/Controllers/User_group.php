<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;
use App\Models\ModelUserGroup;
use CodeIgniter\Exceptions\PageNotFoundException;

class User_group extends BaseController
{

  public function __construct()
  {
    if(session()->user_name == ""){
      return redirect()->to(site_url('login'));
     }
  }

	public function index()
	{
        $id_user_owner = session()->user_id;
        $user = new ModelUser();
        $data['level_user'] = $user->getLevelsers($id_user_owner);
		    echo view('user_group/table_list', $data);
    }

    //--------------------------------------------------------------------------
    
    public function preview($id)
	{
		$news = new ModelUser();
		$data['user'] = $news->where('user_id', $id)->first();
		
		if(!$data['user']){
			throw PageNotFoundException::forPageNotFound();
		}
		echo view('user/user_detail', $data);
    }

    //--------------------------------------------------------------------------

    public function create()
    {
        echo view('user_group/add_user_group');
    }
    
    public function create_action()
    {
            $user_group = new ModelUserGroup();
            $user_group->insert([
                "level_name" => $this->request->getPost('level_name'),
                "id_user" => session()->user_id,
            ]);
           
            return redirect('user_group');
        
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        $user_group = new ModelUserGroup();
        $data['user_group'] = $user_group->where('id', $id)->first();
        
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'level_name' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
                $user_group->update($id, [
                    "level_name" => $this->request->getPost('level_name'),
                ]);
            
            return redirect('user_group');
        }
        
        echo view('user_group/edit_user', $data);
    }

    //--------------------------------------------------------------------------

	public function delete($id){
        $group = new ModelUserGroup();
        $group->delete($id);
        return redirect('user_group');
    }
}