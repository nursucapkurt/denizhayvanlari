namespace App\Models;

use App\Libraries\MongoModel;

class UserModel extends MongoModel
{
    public function __construct()
    {
        parent::__construct('users');
    }
}

