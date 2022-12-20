<?php
namespace App\Modules\Account\Models;

use CodeIgniter\Model;

class AccountM extends Model {
    protected $table = 'users';
    protected $allowedFields = [
        'uid',
        'name',
        'email',
        'password',
        'profile_picture',
        'address',
        'gender',
        'status',
        'level'        
    ];

    public function save_data($data){
        $this->insert($data);
    }

    public function get_all_data(){
        return $this->findAll();
    }

    public function get_user_data($uid){
        $this->where('uid', $uid);
        return $this->find();
    }

    public function edit_user_data($data){
        $this->set('name', $data['name']);
        $this->set('email', $data['email']);
        $this->set('password', $data['password']);
        $this->set('address', $data['address']);
        $this->set('gender', $data['gender']);
        $this->set('status', $data['status']);
        $this->set('level', $data['level']);
        $this->where('uid', $data['uid']);
        $this->update();
    }
}