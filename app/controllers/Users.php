<?php
class Users extends Controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }
    public function register()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
            $data = [
                'name' => trim($_POST['fullname']),
                'email' => trim($_POST['email']),
                'pass' => trim($_POST['pass'])
            ];
            $data['pass'] = password_hash($data['pass'], PASSWORD_BCRYPT);

            if ($this->userModel->register($data)) {
                if ($this->userModel->findUserbyEmail($data['email'])) {
                    echo "email already exists ";
                }
                header('location:../public/index.php');
            } else {
                die("something went wrong");
            }
        }
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
            $data = [
                'email' => trim($_POST['logmail']),
                'pass' => trim($_POST['logpass'])
            ];
            $logged = $this->userModel->login($data);
            if ($logged) {
                session_start();
                $_SESSION['id'] = $logged['user_id'];
            }
        }
        $check = $this->isLoggedIn();
        if ($check) {
            $this->view('pages/dash', $data);
        } else {
            $data = [
                'email' => '',
                'pass' => ''
            ];
            $this->view('pages/index', $data);
        }
    }
    public function session($logged)
    {
        session_start();
        $_SESSION['id'] = $logged['user_id'];
        $_SESSION['email'] = $logged['user_email'];
        $_SESSION['name'] = $logged['user_fullname'];
    }
    public function logout()
    {
        session_start();
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        $data = [
            'email' => '',
            'pass' => ''
        ];
        $this->view('pages/index', $data);
    }
    public function isLoggedIn()
    {
        if (isset($_SESSION['id'])) {
            return true;
        } else {
            return false;
        }
    }

    public function search()
    {
        $title = '';
        if (isset($_POST['search'])) {
            $title = $_POST['search'];
        }

        $response = $this->userModel->search($title);

        if ($response) {
?>
            <div class='mt-4'>
                <h1 class='text-lg text-gray-700 font-semibold hover:underline cursor-pointer'>
                    <?php echo htmlspecialchars($response['task_name']); ?>
                </h1>
                <p class='mt-4 text-md text-gray-600'>
                    <?php echo htmlspecialchars($response['task_desc']); ?>
                </p>
                <div class='flex justify-between items-center'>
                    <div class='mt-4 flex items-center space-x-4 py-6'>
                        <div class='text-sm font-semibold'>
                            <span class='font-normal'>
                                <?php echo htmlspecialchars($response['task_deadline']); ?>
                            </span>
                        </div>
                    </div>
                    <div class='py-4 px-16 bg-yellow-400 rounded-full h-4 w-4 flex items-center justify-center text-1xl text-white mt-4 shadow-lg cursor-pointer'><?php echo htmlspecialchars($response['task_status']); ?></div>
                </div>
            </div>
<?php
        } else {
            echo "No task was found";
        }
    }

    public function statpro($userid)
    {
        $row = $this->userModel->totalpro($userid);
        return $row;
    }
    public function stattask($userid)
    {
        $row = $this->userModel->totaltasks($userid);
        return $row;
    }
    public function total_actv_task($userid)
    {
        $row = $this->userModel->total_act_tasks($userid);
        return $row;
    }
    public function total_done_task($userid)
    {
        $row = $this->userModel->total_done_task($userid);
        return $row;
    }
}
