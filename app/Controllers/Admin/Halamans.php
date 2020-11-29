<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\HalamansModel;


class Halamans extends BaseController {
    public function index(){
        //buat object dari class HalamansModel
        $model= new HalamansModel();

        //load seluruh data
        $data['halamans']=$model->orderBy('id','DESC')->findAll();

        return view('halamans_view_all', $data);
    }
    public function create()
    {
        return view('halamans_create_halaman');
    }
    public function store()
    {
        $model = new HalamansModel();
        $data = [
            'id'=> $this->request->getVar('id'),
            'judulhalaman'=> $this->request->getVar('judulhalaman'),
            'author'=> $this->request->getVar('author'),
            'tglposting'=> $this->request->getVar('tglposting'),
            'isihalaman'=> $this->request->getVar('isihalaman'),
        ];
        $save = $model->insert($data);

        return redirect()->to(base_url('admin/halamans'));
    }

    public function edit($id = null){
        $model = new HalamansModel();
        $data['halaman'] = $model->where('id',$id)->first();

        return view('halamans_edit_halaman', $data);
    }

    public function update()
    {
        $model = new HalamansModel();
        $id =$this->request->getVar('id');
        $data = [
            'judulhalaman'=> $this->request->getVar('judulhalaman'),
            'author'=> $this->request->getVar('author'),
            'tglposting'=> $this->request->getVar('tglposting'),
            'isihalaman'=> $this->request->getVar('isihalaman'),
            
        ];
        $save = $model->update($id, $data);

        return redirect()->to(base_url('admin/halamans'));
    }

    public function delete($id = null){
        $model = new HalamansModel();
        $data['halaman'] = $model->where('id',$id)->delete();

        return redirect()->to(base_url('admin/halamans'));
    }
}
?>