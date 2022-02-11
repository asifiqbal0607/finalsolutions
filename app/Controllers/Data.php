<?php

namespace App\Controllers;
use App\Models\Std_model;
use CodeIgniter\Files\File;

class Data extends BaseController
{


    public function form()
    {
        echo view('data/form');
    }


    //public function data()
    public function datatable()
    {

        $std_model = new Std_model();

        $data['user'] = $std_model->findAll();

        echo view('data/datatable', $data);

        
    }
    



public function doadd(){

    $product_model = new Std_model();
    $data = [
        'std_name'  => $this->request->getVar('std_name'),
        'dob'  => $this->request->getVar('dob'),
        'address'  => $this->request->getVar('address'),
        'mobile_num'  => $this->request->getVar('mobile_num'),
        'email'  => $this->request->getVar('email'),
        'o-level'  => $this->request->getVar('o-level'),
        'a-level'  => $this->request->getVar('a-level'),
        'bachlor'  => $this->request->getVar('bachlor'),
        'master'  => $this->request->getVar('master'),
        'doctorate'  => $this->request->getVar('doctorate'),
        'passport'  => $this->request->getVar('passport'),
        'cnic'  => $this->request->getVar('cnic'),
        'ielts_test'  => $this->request->getVar('ielts_test'),
    ];


    $img = $this->request->getFile('documents');

    //echo PATH;


    echo base_url();

    //exit();
    if (! $img->hasMoved()) {
        $filepath = base_url() . '/uploads/' . $img->store();
        echo $filepath;
        $data = ['uploaded_flleinfo' => new File($filepath)];

        var_dump($data);

        //return view('upload_success', $data);
    } else {
        $data = ['errors' => 'The file has already been moved.'];

        echo "failed";
        //return view('upload_form', $data);
    }


    $product_model->insert($data);

    // session()->setFlashdata('success_message', 'Record Saved Successfully');

    // return redirect()->to('data/datatable'); 

    exit();
}
    

}
?>