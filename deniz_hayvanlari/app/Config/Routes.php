use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Auth::login');
$routes->match(['get', 'post'], 'login', 'Auth::login');
$routes->get('logout', 'Auth::logout');
$routes->get('admin', 'Admin::index');
$routes->get('admin/create', 'Admin::create');  
$routes->match(['get', 'post'], 'admin/store', 'Admin::store');  
$routes->get('admin/edit/(:segment)', 'Admin::edit/$1');  
$routes->match(['get', 'post'], 'admin/update/(:segment)', 'Admin::update/$1');  
$routes->get('admin/delete/(:segment)', 'Admin::delete/$1');  
$routes->get('admin/dashboard', 'Admin::dashboard');  
$routes->get('admin/adminpanel', 'Admin::adminpanel'); 
$routes->get('logout', 'Auth::logout');
