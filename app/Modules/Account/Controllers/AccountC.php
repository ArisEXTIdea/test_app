<?php

namespace App\Modules\Account\Controllers;
use App\Controllers\BaseController;
use App\Modules\Account\Models\AccountM;

class AccountC extends BaseController{
    protected $AccountM;
    protected $viewPath;
    protected $session;

    public function __construct()
    { 
      $this->AccountM = new AccountM;
      $this->viewPath = '\App\Modules\Account\Views';
      $this->session = \Config\Services::session();  
    }

    // --------------- RENDER PAGE SECTION ----------------------- //

    public function render_add_page(){

        $renderData = [
            'title' => 'Tambah Akun Baru | SIAKUN'
        ];


        return view($this->viewPath . '/form_add_page', $renderData);
    }

    public function render_dashboard(){

        $userData = $this->AccountM->get_all_data();

        $renderData = [
            'title' => 'Sistem Informasi Akun | SIAKUN',
            'userData' => $userData
        ];


        return view($this->viewPath . '/dashboard', $renderData);
    }

    public function render_account_detail(){
        $url = array_reverse(explode('/', $_SERVER['PHP_SELF']));
        $uid = $url[0];

        $userData = $this->AccountM->get_user_data($uid);

        $renderData = [
            'title' => 'Detail Akun | SIAKUN',
            'userData' => $userData[0]
        ];


        return view($this->viewPath . '/account_detail_page', $renderData);
    }

    public function render_edit_profile(){
        $url = array_reverse(explode('/', $_SERVER['PHP_SELF']));
        $uid = $url[0];

        $userData = $this->AccountM->get_user_data($uid);

        $renderData = [
            'title' => 'Edit Akun | SIAKUN',
            'userData' => $userData[0]
        ];


        return view($this->viewPath . '/edit_profile_page', $renderData);
    }
    
    

     // --------------- FUNCTION PAGE SECTION ----------------------- //

    public function save_data_user(){

        $file = $this->request->getFile('profile_picture');
        $fileName = $file->getRandomName();
        $file->store('../../public/assets/uploads', $fileName);
        
        $dataToSave = [
            'uid' => 'uid-' . uniqid(),
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'profile_picture' => $fileName,
            'address' => $this->request->getVar('address'),
            'gender' => $this->request->getVar('gender'),
            'status' => $this->request->getVar('status'),
            'level' => $this->request->getVar('level'),
        ];

        $this->session->setFlashdata('alert', 'active');
        if(!$this->AccountM->save_data($dataToSave)){
            $this->session->setFlashdata('success-alert', 'active');
        } else {
            $this->session->setFlashdata('fail-alert', 'active');

        }

        return redirect()->to('/tambah-akun');

    }

    public function edit_data_user(){
        
        $dataToEdit = [
            'uid' => $this->request->getVar('uid'),
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'address' => $this->request->getVar('address'),
            'gender' => $this->request->getVar('gender'),
            'status' => $this->request->getVar('status'),
            'level' => $this->request->getVar('level'),
        ];

        $this->session->setFlashdata('alert', 'active');
        if(!$this->AccountM->edit_user_data($dataToEdit)){
            $this->session->setFlashdata('success-alert', 'active');
        } else {
            $this->session->setFlashdata('fail-alert', 'active');
        }

        return redirect()->to('/edit-profile' . '/'. $dataToEdit['uid']);

    }

}