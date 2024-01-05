
<?php
class Wallet {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    public function getall($walletid){
        $this->db->query('SELECT * FROM wallet_elements WHERE WalletID	= :walletid');
        $this->db->bind(':walletid',$walletid);
        $row = $this->db->resultSet();
        return $row ; 
    }

}
