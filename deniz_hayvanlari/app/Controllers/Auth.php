use App\Models\UserModel;

class Auth extends BaseController
{
    public function loginSubmit()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->findOne(['username' => $username]);

        if ($user && password_verify($password, $user['password'])) {
            $session->set(['user_id' => $user['_id'], 'role' => $user['role']]);
            return redirect()->to('/dashboard');
        } else {
            $session->setFlashdata('error', 'Geçersiz kullanıcı adı veya şifre.');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();

        // Oturumu sonlandır
        $session->destroy();

        // Kullanıcıyı login sayfasına yönlendir
        return redirect()->to('/login');
    }
}
