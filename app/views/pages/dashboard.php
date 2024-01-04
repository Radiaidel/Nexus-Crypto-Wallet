<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"></script>
    <title>Nexus Crypto Wallet</title>
    <style>
        .bg-color {
            background-color: #181a20;
        }

        .shadow-md-gray {
            box-shadow: 0 4px 6px -1px rgba(169, 169, 169, 0.1), 0 2px 4px -1px rgba(169, 169, 169, 0.06);
        }
    </style>
</head>

<body class="bg-color">
    <!-- Header Section -->
    <header class="p-4 text-yellow-300 shadow-md-gray">
        <div class="container mx-auto flex justify-between items-center">
            <div>

                <h1 class="text-xl ">Nexus Crypto Wallet</h1>
            </div>
            <div class="flex items-center space-x-4">
                <a href="#">
                    <svg width="25px" height="25px" viewBox="0 0 1024 1024" fill="#fff" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#000000" stroke-width="47.104">
                            <path d="M802.4 967.2c-7.2 0-15.2-1.6-21.6-4.8l-258.4-128.8-252.8 140c-18.4 10.4-41.6 5.6-56-9.6-8.8-9.6-12.8-23.2-11.2-36.8l43.2-285.6L33.6 444C20.8 432 16 414.4 21.6 397.6c4.8-16.8 18.4-28.8 36-31.2l285.6-48L464.8 56c7.2-15.2 22.4-25.6 39.2-26.4 17.6-0.8 33.6 8.8 41.6 24l133.6 256.8 287.2 35.2c17.6 2.4 31.2 13.6 36.8 30.4 5.6 16 1.6 34.4-10.4 46.4L790.4 629.6l55.2 284c2.4 12.8-0.8 26.4-8.8 36.8-8.8 10.4-21.6 16.8-34.4 16.8zM520.8 784.8c7.2 0 15.2 1.6 21.6 4.8l255.2 127.2-54.4-280c-3.2-14.4 1.6-29.6 12-40l200-203.2L672 358.4c-14.4-1.6-28-11.2-34.4-24L506.4 81.6 385.6 340c-6.4 13.6-19.2 23.2-33.6 25.6L70.4 412l208 194.4c11.2 10.4 16 24.8 13.6 40L249.6 928l249.6-137.6c7.2-3.2 14.4-4.8 21.6-5.6z" fill="#fff"></path>
                        </g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M802.4 967.2c-7.2 0-15.2-1.6-21.6-4.8l-258.4-128.8-252.8 140c-18.4 10.4-41.6 5.6-56-9.6-8.8-9.6-12.8-23.2-11.2-36.8l43.2-285.6L33.6 444C20.8 432 16 414.4 21.6 397.6c4.8-16.8 18.4-28.8 36-31.2l285.6-48L464.8 56c7.2-15.2 22.4-25.6 39.2-26.4 17.6-0.8 33.6 8.8 41.6 24l133.6 256.8 287.2 35.2c17.6 2.4 31.2 13.6 36.8 30.4 5.6 16 1.6 34.4-10.4 46.4L790.4 629.6l55.2 284c2.4 12.8-0.8 26.4-8.8 36.8-8.8 10.4-21.6 16.8-34.4 16.8zM520.8 784.8c7.2 0 15.2 1.6 21.6 4.8l255.2 127.2-54.4-280c-3.2-14.4 1.6-29.6 12-40l200-203.2L672 358.4c-14.4-1.6-28-11.2-34.4-24L506.4 81.6 385.6 340c-6.4 13.6-19.2 23.2-33.6 25.6L70.4 412l208 194.4c11.2 10.4 16 24.8 13.6 40L249.6 928l249.6-137.6c7.2-3.2 14.4-4.8 21.6-5.6z" fill="#fff"></path>
                        </g>
                    </svg>
                </a>
                <div class="flex items-center lg:order-2 space-x-5">
                    <button id="openwallet"> <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 15C20.5523 15 21 14.5523 21 14C21 13.4477 20.5523 13 20 13C19.4477 13 19 13.4477 19 14C19 14.5523 19.4477 15 20 15Z" fill="#fce00a" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.775 0.985398C18.4919 0.460783 20.2821 1.55148 20.6033 3.3178L20.9362 5.14896C22.1346 5.54225 23 6.67006 23 8V10.7639C23.6137 11.3132 24 12.1115 24 13V15C24 15.8885 23.6137 16.6868 23 17.2361V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V8C1 6.51309 2.08174 5.27884 3.50118 5.04128L16.775 0.985398ZM21 16C21.5523 16 22 15.5523 22 15V13C22 12.4477 21.5523 12 21 12H18C17.4477 12 17 12.4477 17 13V15C17 15.5523 17.4477 16 18 16H21ZM21 18V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V8C3 7.44772 3.44772 7 4 7H20C20.55 7 20.9962 7.44396 21 7.99303L21 10H18C16.3431 10 15 11.3431 15 13V15C15 16.6569 16.3431 18 18 18H21ZM18.6954 3.60705L18.9412 5H10L17.4232 2.82301C17.9965 2.65104 18.5914 3.01769 18.6954 3.60705Z" fill="#fff" />
                        </svg></button>
                    <!-- Bouton de logout -->

                </div>




                <!-- Logout Icon -->
                <a href="#">
                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 12L13 12" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M18 15L20.913 12.087V12.087C20.961 12.039 20.961 11.961 20.913 11.913V11.913L18 9" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M16 5V4.5V4.5C16 3.67157 15.3284 3 14.5 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H14.5C15.3284 21 16 20.3284 16 19.5V19.5V19" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
    </header>



    <aside id="wallet" class="flex flex-col w-[80%] h-screen fixed top-0 left-[-100%]  bg-slate-800 z-10 border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
        <div class="w-[95%] bg-white "><button class="float-right" id="closewallet"><svg xmlns="http://www.w3.org/2000/svg" height="30" width="24" viewBox="0 0 384 512">
                    <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg></button></div>

        <section class="flex flex-col justify-center h-[50vh] w-[80%]  bg-slate-800 text-gray-600">

            <div  class="flex flex-col col-span-full xl:col-span-8 bg-slate-800  rounded-sm border border-gray-200">
                <canvas  id="mychart" width="400" height="300"></canvas>
            </div>

            <div class="flex flex-col col-span-full xl:col-span-8 bg-yellow-400 shadow-lg rounded-sm border border-gray-200">
                <header class="px-5 py-4 border-b border-gray-100 flex items-center">
                    <h2 class="font-semibold text-gray-800">Analytics</h2>
                </header>
                <div class="px-5 py-1">
                    <div class="flex flex-wrap">
                        <div class="flex items-center py-2">
                            <div class="mr-5">
                                <div class="flex items-center">
                                    <div class="text-3xl font-bold text-gray-800 mr-2">24.7K</div>
                                </div>
                                <div class="text-sm text-gray-500">Unique Visitors</div>
                            </div>
                            <div class="hidden md:block w-px h-8 bg-gray-200 mr-5" aria-hidden="true"></div>
                        </div>
                        <!-- Total Pageviews -->
                        <div class="flex items-center py-2">
                            <div class="mr-5">
                                <div class="flex items-center">
                                    <div class="text-3xl font-bold text-gray-800 mr-2">56.9K</div>
                                </div>
                                <div class="text-sm text-gray-500">Total Pageviews</div>
                            </div>
                            <div class="hidden md:block w-px h-8 bg-gray-200 mr-5" aria-hidden="true"></div>
                        </div>
                        <!-- Bounce Rate -->
                        <div class="flex items-center py-2">
                            <div class="mr-5">
                                <div class="flex items-center">
                                    <div class="text-3xl font-bold text-gray-800 mr-2">54%</div>
                                </div>
                                <div class="text-sm text-gray-500">Bounce Rate</div>
                            </div>
                            <div class="hidden md:block w-px h-8 bg-gray-200 mr-5" aria-hidden="true"></div>
                        </div>
                        <!-- Visit Duration-->
                        <div class="flex items-center">
                            <div>
                                <div class="flex items-center">
                                    <div class="text-3xl font-bold text-gray-800 mr-2">2m 56s</div>
                                </div>
                                <div class="text-sm text-gray-500">Visit Duration</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- More components -->


        <div class="flex justify-between flex-1">

        </div>
    </aside>


    <!-- Crypto Table Section -->
    <div class="container mx-auto p-4 text-gray-300 overflow-x-auto">
        <table class="table-auto border border-gray-500 w-full">
            <!-- Table Header -->
            <thead class="border  p-4 border-gray-500">
                <tr class="text-center bg-gray-800 text-white">
                    <th></th>
                    <th class="text-left">Rank</th>
                    <th class="text-left">Name</th>
                    <th class="text-left">Price</th>
                    <th class="text-left">Market Cap</th>
                    <th class="text-left">Volume (24h)</th>
                    <th class="text-left">Circulating Supply</th>
                    <th class="text-left">Actions</th>
                </tr>
            </thead>
            <!-- Table Body (Sample Data) -->
            <tbody id="cryptoinfo" class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">


            </tbody>
        </table>
    </div>



</body>

</html>


<script>
    let cryptoinfo = document.getElementById('cryptoinfo');
    // fetch('https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest', {
    //         method: 'GET',
    //         headers: {
    //             'Accept': 'application/json',
    //             'X-CMC_PRO_API_KEY': '91f64ee6-d1fc-45d7-b894-b9e601f86d91'
    //         }
    //     })
    //     .then((data) => {
    //         return data.json()
    //     })
    //     .then((parseddata) => {
    //         console.log(parseddata);
    //         for (let i = 0; i < parseddata.data.length; i++) {
    //             cryptoinfo.innerHTML += `
    //             <tr>
    //                                 <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
    //                                     <div>
    //                                         <h2 class="font-medium text-gray-800 dark:text-white ">${parseddata.data[i].symbol}</h2>
    //                                     </div>
    //                                 </td>
    //                                 <td class="px-4 py-4 text-sm whitespace-nowrap">
    //                                     <div>
    //                                         <span class=" w-[100%] bg-green-200"><h4 class="text-gray-700 dark:text-gray-200">${parseddata.data[i].cmc_rank}</h4></span>
    //                                     </div>
    //                                 </td>
    //                                 <td class="px-4 py-4 text-sm whitespace-nowrap">
    //                                     <div>
    //                                         <h4 class="text-center text-blue-500"> ${parseddata.data[i].name}</h4>
    //                                     </div>
    //                                 </td>
    //                                 <td class="px-4 py-4 text-sm whitespace-nowrap">
    //                                     <div>
    //                                         <h4 class="text-center text-gray-700 dark:text-gray-200">$${parseddata.data[i].quote.USD.price}</h4>
    //                                     </div>
    //                                 </td>
    //                                 <td class="px-4 py-4 text-sm whitespace-nowrap">
    //                                     <div>
    //                                         <h4 class="text-center text-gray-700 dark:text-gray-200">${parseddata.data[i].quote.USD.market_cap}</h4>
    //                                     </div>
    //                                 </td>

    //                                 <td class="px-4 py-4 text-sm whitespace-nowrap">
    //                                     <div>
    //                                         <h4 class="text-center text-gray-700 dark:text-gray-200">${parseddata.data[i].quote.USD.volume_24h}</h4>
    //                                     </div>
    //                                 </td>

    //                                 <td class="px-4 py-4 text-sm whitespace-nowrap">
    //                                     <div>
    //                                         <h4 class="text-gray-700 dark:text-gray-200">${parseddata.data[i].circulating_supply}</h4>
    //                                     </div>
    //                                 </td>
    //                                 <td class="px-4 py-4 text-sm whitespace-nowrap">
    //                                     <div>
    //                                         <button class="bg-green-500 text-white px-2 py-1 rounded-md buycrypto">Buy</button>
    //                                     </div>
    //                                 </td>
    //                                 <td class="px-4 py-4 text-sm whitespace-nowrap">
    //                                     <div class='flex items-center'>
    //                                     <button class="addtofav"><svg class="fav" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg></button>
    //                                     </div>
    //                                 </td>
    //                             </tr>
    //             `;
    //         }
    //     });

    let closewallet = document.getElementById('closewallet');
    let wallet = document.getElementById('wallet');
    let openwallet = document.getElementById('openwallet');
    let fav = document.querySelectorAll('.fav');
    let addtofav = document.querySelectorAll('.addtofav');
    for (let i = 0; i < addtofav.length; i++) {
        addtofav[i].addEventListener('click', e => {
            console.log('hello');
            fav[i].innerHTML = '<path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>';
        })
    }
    closewallet.addEventListener('click', e => {
        wallet.style.transition = 'left 0.5s ease';
        wallet.style.left = '-100%';
    })
    openwallet.addEventListener('click', e => {
        wallet.style.transition = 'left 0.5s ease';
        wallet.style.left = '1%';
    })  


    let mychart = document.getElementById('mychart').getContext('2d');
    let cryptochart = new Chart (mychart , {
        type: 'line',
        data: {
            labels: ['mouad', 'badi', 'ali', 'ahmed'],
            datasets: [{
                label: 'Population',
                data: [
                    780, 500, 450, 0
                ]
            }]
        },
        options: {}
    });
</script>