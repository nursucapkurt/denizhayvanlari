namespace App\Models;

use App\Libraries\MongoModel;

class AnimalModel extends MongoModel
{
    public function __construct()
    {
        parent::__construct('animals');
    }
}
