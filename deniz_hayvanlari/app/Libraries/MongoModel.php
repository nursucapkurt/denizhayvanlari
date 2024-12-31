namespace App\Libraries;

use MongoDB\Client;

class MongoModel
{
    protected $client;
    protected $db;
    protected $collection;

    public function __construct($collection)
    {
        $config = config('Database')->mongoDB;
        $this->client = new Client("mongodb://{$config['host']}:{$config['port']}");
        $this->db = $this->client->{$config['database']};
        $this->collection = $this->db->{$collection};
    }

    public function findAll()
    {
        return $this->collection->find()->toArray();
    }

    public function findOne($filter = [])
    {
        return $this->collection->findOne($filter);
    }

    public function insert($data)
    {
        return $this->collection->insertOne($data);
    }

    public function update($filter, $data)
    {
        return $this->collection->updateOne($filter, ['$set' => $data]);
    }

    public function delete($filter)
    {
        return $this->collection->deleteOne($filter);
    }
}
