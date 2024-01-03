<?php
class NotificationController extends Controller
{
    private $Notification;
    public function __construct()
    {
        $this->Notification = $this->model('Notification');
    }
}