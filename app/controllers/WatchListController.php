<?php
class WatchListController extends Controller
{
    private $WatchListModel;
    public function __construct()
    {
        $this->WatchListModel = $this->model('WatchList');
    }
}