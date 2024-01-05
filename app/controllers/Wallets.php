<?php

class Wallets extends Controller {
    private $walletModel;

    public function __construct() {
        $this->walletModel = $this->model('Wallet');
    }

   public function getAll(){
    $walletid =0;
    if(isset($_POST['walletid'])){
        $walletid =  $_POST['walletid'];
    }
    $data = $this->walletModel->getall($walletid);
    if($data){  
        echo "
        <div class='flex flex-col col-span-full xl:col-span-8 bg-yellow-400 shadow-lg rounded-sm border border-gray-200 mb-2'>
                <header class='px-5 py-4 border-b border-gray-100 flex items-center'>
                    <h2 class='font-semibold text-gray-800'>$data</h2>
                </header>
                <div class='px-5 py-1'>
                    <div class='flex flex-wrap'>
                        <div class='flex items-center py-2'>
                            <div class='mr-5'>
                                <div class='flex items-center'>
                                    <div class='text-3xl font-bold text-gray-800 mr-2'>24.7K</div>
                                </div>
                                <div class='text-sm text-gray-500'>Unique Visitors</div>
                            </div>
                            <div class='hidden md:block w-px h-8 bg-gray-200 mr-5' aria-hidden='true'></div>
                        </div>
                        <!-- Total Pageviews -->
                        <div class='flex items-center py-2'>
                            <div class='mr-5'>
                                <div class='flex items-center'>
                                    <div class='text-3xl font-bold text-gray-800 mr-2'>56.9K</div>
                                </div>
                                <div class='text-sm text-gray-500'>Total Pageviews</div>
                            </div>
                            <div class='hidden md:block w-px h-8 bg-gray-200 mr-5' aria-hidden='true'></div>
                        </div>
                        <!-- Bounce Rate -->
                        <div class='flex items-center py-2'>
                            <div class='mr-5'>
                                <div class='flex items-center'>
                                    <div class='text-3xl font-bold text-gray-800 mr-2'>54%</div>
                                </div>
                                <div class='text-sm text-gray-500'>Bounce Rate</div>
                            </div>
                            <div class='hidden md:block w-px h-8 bg-gray-200 mr-5' aria-hidden='true'></div>
                        </div>
                        <!-- Visit Duration-->
                        <div class='flex items-center'>
                            <div>
                                <div class='flex items-center'>
                                    <div class='text-3xl font-bold text-gray-800 mr-2'>2m 56s</div>
                                </div>
                                <div class='text-sm text-gray-500'>Visit Duration</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='flex  justify-between w-[80%]'>
                   <button class='p-4 bg-black-300'>Transfer</button>
                   <button class='p-4 bg-black-300'>Sell</button>
                </div>
            </div>";
    }
   }
}

    
