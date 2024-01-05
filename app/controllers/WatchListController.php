<?php
class WatchListController extends Controller
{
    private $WatchListModel;
    public function __construct()
    {
        $this->WatchListModel = $this->model('WatchList');
    }



    public function addToWatchlist()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cryptoID = $_POST['id'];
        $name = $_POST['crname'];
        $userID = $_SESSION['id'];


 
        $result = $this->WatchListModel->addToWatchlist($userID, $cryptoID);

       
        echo json_encode(['success' => $result]);
        }
    }
    public function displayWatchlist()
    {
        $watchlistModel = $this->model('Watchlist');
        $watchlistData = $watchlistModel->getWatchlistData();
  
        echo "
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const openModalWatchList = document.getElementById('openModalWatchList');
                const closeModalBtn = document.getElementById('closeModalBtn');
                const cryptowatchlist = document.getElementById('Watchlist');

                openModalWatchList.addEventListener('click', (e) => {
                    e.preventDefault();
                    cryptowatchlist.classList.remove('hidden');
                });

                closeModalBtn.addEventListener('click', () => {
                    cryptowatchlist.classList.add('hidden');
                });
            });
        </script>
        ";

        $this->view('/Pages/dashboard', ['watchlistData' => $watchlistData]);
    }



}