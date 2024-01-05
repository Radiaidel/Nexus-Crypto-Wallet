<?php
class TransactionController extends Controller
{
    private $Transaction;
    public function __construct()
    {
        $this->Transaction = $this->model('Transaction');
    }
}