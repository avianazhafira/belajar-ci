<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\BeritasModel;


class Beritas extends BaseController {
    public function index(){
        //buat object dari class BeritasModel
        $model= new BeritasModel();

        //load seluruh data
        $data['beritas']=$model->orderBy('id','DESC')->findAll();

        return view('beritas_view_all', $data);
    }
    public function create()
    {
        return view('beritas_create_berita');
    }
    public function store()
    {
        $model = new BeritasModel();
        $data = [
            'id'=> $this->request->getVar('id'),
            'judulberita'=> $this->request->getVar('judulberita'),
            'author'=> $this->request->getVar('author'),
            'tglposting'=> $this->request->getVar('tglposting'),
            'foto'=> $this->request->getVar('foto'),
            'isiberita'=> $this->request->getVar('isiberita'),
        ];
        $save = $model->insert($data);

        return redirect()->to(base_url('admin/beritas'));
    }

    public function edit($id = null){
        $model = new BeritasModel();
        $data['berita'] = $model->where('id',$id)->first();

        return view('beritas_edit_berita', $data);
    }

    public function update()
    {
        $model = new BeritasModel();
        $id =$this->request->getVar('id');
        $data = [
            'judulberita'=> $this->request->getVar('judulberita'),
            'author'=> $this->request->getVar('author'),
            'tglposting'=> $this->request->getVar('tglposting'),
            'foto'=> $this->request->getVar('foto'),
            'isiberita'=> $this->request->getVar('isiberita'),
            
        ];
        $save = $model->update($id, $data);

        return redirect()->to(base_url('admin/beritas'));
    }

    public function delete($id = null){
        $model = new BeritasModel();
        $data['berita'] = $model->where('id',$id)->delete();

        return redirect()->to(base_url('admin/beritas'));
    }
}
?>