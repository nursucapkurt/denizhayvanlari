use App\Models\AnimalModel;

class Admin extends BaseController
{
    public function index()
    {
        $model = new AnimalModel();
        $data['animals'] = $model->findAll();
        return view('admin/dashboard', $data);
    }

    public function store()
    {
        $model = new AnimalModel();
        $model->insert([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description')
        ]);
        return redirect()->to('/admin');
    }

    public function show($id)
    {
        $model = new AnimalModel();
        $data['animal'] = $model->findOne(['_id' => new \MongoDB\BSON\ObjectId($id)]); // ID'ye göre hayvanı al
        return view('admin/animal_show', $data); 
    }

    public function delete($id)
    {
        $model = new AnimalModel();
        $model->delete(['_id' => new \MongoDB\BSON\ObjectId($id)]); 
        return redirect()->to('/admin'); 
    }

    public function update($id)
    {
        $model = new AnimalModel();
        $model->update(
            ['_id' => new \MongoDB\BSON\ObjectId($id)], 
            [
                '$set' => [
                    'name' => $this->request->getPost('name'),
                    'description' => $this->request->getPost('description')
                ]
            ]
        );
        return redirect()->to('/admin'); 
    }
}
