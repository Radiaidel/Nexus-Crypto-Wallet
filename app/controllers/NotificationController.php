<?php
class NotificationController extends Controller
{
    private $notificationModel;

    public function __construct()
    {
        $this->notificationModel = $this->model('Notification');
    }

    public function showNotification() {
        $notifications = $this->notificationModel->getNotifications();
    echo '
    <script>
                            let notification = document.getElementById("notification");
                            let checdiv = document.getElementById("chec-div");
                            let flag3 = false;
                            const notificationHandler = () => {
                                if (!flag3) {
                                    document.getElementById("NotifyForm").submit();
                                    notification.classList.add("translate-x-full");
                                    notification.classList.remove("translate-x-0");
                                    setTimeout(function() {
                                        checdiv.classList.add("hidden");
                                    }, 300);
                                    flag3 = true;
                                } else {
                                    setTimeout(function() {
                                        notification.classList.remove("translate-x-full");
                                        notification.classList.add("translate-x-0");
                                    }, 300);
                                    checdiv.classList.remove("hidden");
                                    flag3 = false;
                                    event.preventDefault();
                                }
                            };
                        </script>';

        $this->view('/Pages/dashboard', ['notificationData'=> $notifications]);
  
    }
}
?>