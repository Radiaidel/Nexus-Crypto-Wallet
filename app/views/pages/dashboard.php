<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
                    <svg width="25px" height="25px" viewBox="0 0 1024 1024" fill="#fff" class="icon" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#000000"
                            stroke-width="47.104">
                            <path
                                d="M802.4 967.2c-7.2 0-15.2-1.6-21.6-4.8l-258.4-128.8-252.8 140c-18.4 10.4-41.6 5.6-56-9.6-8.8-9.6-12.8-23.2-11.2-36.8l43.2-285.6L33.6 444C20.8 432 16 414.4 21.6 397.6c4.8-16.8 18.4-28.8 36-31.2l285.6-48L464.8 56c7.2-15.2 22.4-25.6 39.2-26.4 17.6-0.8 33.6 8.8 41.6 24l133.6 256.8 287.2 35.2c17.6 2.4 31.2 13.6 36.8 30.4 5.6 16 1.6 34.4-10.4 46.4L790.4 629.6l55.2 284c2.4 12.8-0.8 26.4-8.8 36.8-8.8 10.4-21.6 16.8-34.4 16.8zM520.8 784.8c7.2 0 15.2 1.6 21.6 4.8l255.2 127.2-54.4-280c-3.2-14.4 1.6-29.6 12-40l200-203.2L672 358.4c-14.4-1.6-28-11.2-34.4-24L506.4 81.6 385.6 340c-6.4 13.6-19.2 23.2-33.6 25.6L70.4 412l208 194.4c11.2 10.4 16 24.8 13.6 40L249.6 928l249.6-137.6c7.2-3.2 14.4-4.8 21.6-5.6z"
                                fill="#fff"></path>
                        </g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M802.4 967.2c-7.2 0-15.2-1.6-21.6-4.8l-258.4-128.8-252.8 140c-18.4 10.4-41.6 5.6-56-9.6-8.8-9.6-12.8-23.2-11.2-36.8l43.2-285.6L33.6 444C20.8 432 16 414.4 21.6 397.6c4.8-16.8 18.4-28.8 36-31.2l285.6-48L464.8 56c7.2-15.2 22.4-25.6 39.2-26.4 17.6-0.8 33.6 8.8 41.6 24l133.6 256.8 287.2 35.2c17.6 2.4 31.2 13.6 36.8 30.4 5.6 16 1.6 34.4-10.4 46.4L790.4 629.6l55.2 284c2.4 12.8-0.8 26.4-8.8 36.8-8.8 10.4-21.6 16.8-34.4 16.8zM520.8 784.8c7.2 0 15.2 1.6 21.6 4.8l255.2 127.2-54.4-280c-3.2-14.4 1.6-29.6 12-40l200-203.2L672 358.4c-14.4-1.6-28-11.2-34.4-24L506.4 81.6 385.6 340c-6.4 13.6-19.2 23.2-33.6 25.6L70.4 412l208 194.4c11.2 10.4 16 24.8 13.6 40L249.6 928l249.6-137.6c7.2-3.2 14.4-4.8 21.6-5.6z"
                                fill="#fff"></path>
                        </g>
                    </svg>
                </a>
                <button href="#" id="openwallet">
                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20 15C20.5523 15 21 14.5523 21 14C21 13.4477 20.5523 13 20 13C19.4477 13 19 13.4477 19 14C19 14.5523 19.4477 15 20 15Z"
                            fill="#fce00a" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16.775 0.985398C18.4919 0.460783 20.2821 1.55148 20.6033 3.3178L20.9362 5.14896C22.1346 5.54225 23 6.67006 23 8V10.7639C23.6137 11.3132 24 12.1115 24 13V15C24 15.8885 23.6137 16.6868 23 17.2361V20C23 21.6569 21.6569 23 20 23H4C2.34315 23 1 21.6569 1 20V8C1 6.51309 2.08174 5.27884 3.50118 5.04128L16.775 0.985398ZM21 16C21.5523 16 22 15.5523 22 15V13C22 12.4477 21.5523 12 21 12H18C17.4477 12 17 12.4477 17 13V15C17 15.5523 17.4477 16 18 16H21ZM21 18V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V8C3 7.44772 3.44772 7 4 7H20C20.55 7 20.9962 7.44396 21 7.99303L21 10H18C16.3431 10 15 11.3431 15 13V15C15 16.6569 16.3431 18 18 18H21ZM18.6954 3.60705L18.9412 5H10L17.4232 2.82301C17.9965 2.65104 18.5914 3.01769 18.6954 3.60705Z"
                            fill="#fff" />
                    </svg>
                </button>

                <!-- Wallet Icon -->
                <a href="#">
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.713 7.14977C12.1271 7.13953 12.4545 6.79555 12.4443 6.38146C12.434 5.96738 12.0901 5.63999 11.676 5.65023L11.713 7.14977ZM6.30665 12.193H7.05665C7.05665 12.1874 7.05659 12.1818 7.05646 12.1761L6.30665 12.193ZM6.30665 14.51L6.34575 15.259C6.74423 15.2382 7.05665 14.909 7.05665 14.51H6.30665ZM6.30665 17.6L6.26755 18.349C6.28057 18.3497 6.29361 18.35 6.30665 18.35L6.30665 17.6ZM9.41983 18.35C9.83404 18.35 10.1698 18.0142 10.1698 17.6C10.1698 17.1858 9.83404 16.85 9.41983 16.85V18.35ZM10.9445 6.4C10.9445 6.81421 11.2803 7.15 11.6945 7.15C12.1087 7.15 12.4445 6.81421 12.4445 6.4H10.9445ZM12.4445 4C12.4445 3.58579 12.1087 3.25 11.6945 3.25C11.2803 3.25 10.9445 3.58579 10.9445 4H12.4445ZM11.713 5.65023C11.299 5.63999 10.955 5.96738 10.9447 6.38146C10.9345 6.79555 11.2619 7.13953 11.676 7.14977L11.713 5.65023ZM17.0824 12.193L16.3325 12.1761C16.3324 12.1818 16.3324 12.1874 16.3324 12.193H17.0824ZM17.0824 14.51H16.3324C16.3324 14.909 16.6448 15.2382 17.0433 15.259L17.0824 14.51ZM17.0824 17.6V18.35C17.0954 18.35 17.1084 18.3497 17.1215 18.349L17.0824 17.6ZM13.9692 16.85C13.555 16.85 13.2192 17.1858 13.2192 17.6C13.2192 18.0142 13.555 18.35 13.9692 18.35V16.85ZM10.1688 17.6027C10.1703 17.1885 9.83574 16.8515 9.42153 16.85C9.00732 16.8485 8.67034 17.1831 8.66886 17.5973L10.1688 17.6027ZM10.0848 19.3L10.6322 18.7873L10.6309 18.786L10.0848 19.3ZM13.3023 19.3L12.7561 18.786L12.7549 18.7873L13.3023 19.3ZM14.7182 17.5973C14.7167 17.1831 14.3797 16.8485 13.9655 16.85C13.5513 16.8515 13.2167 17.1885 13.2182 17.6027L14.7182 17.5973ZM9.41788 16.85C9.00366 16.85 8.66788 17.1858 8.66788 17.6C8.66788 18.0142 9.00366 18.35 9.41788 18.35V16.85ZM13.9692 18.35C14.3834 18.35 14.7192 18.0142 14.7192 17.6C14.7192 17.1858 14.3834 16.85 13.9692 16.85V18.35ZM11.676 5.65023C8.198 5.73622 5.47765 8.68931 5.55684 12.2099L7.05646 12.1761C6.99506 9.44664 9.09735 7.21444 11.713 7.14977L11.676 5.65023ZM5.55665 12.193V14.51H7.05665V12.193H5.55665ZM6.26755 13.761C5.0505 13.8246 4.125 14.8488 4.125 16.055H5.625C5.625 15.6136 5.95844 15.2792 6.34575 15.259L6.26755 13.761ZM4.125 16.055C4.125 17.2612 5.0505 18.2854 6.26755 18.349L6.34575 16.851C5.95843 16.8308 5.625 16.4964 5.625 16.055H4.125ZM6.30665 18.35H9.41983V16.85H6.30665V18.35ZM12.4445 6.4V4H10.9445V6.4H12.4445ZM11.676 7.14977C14.2917 7.21444 16.3939 9.44664 16.3325 12.1761L17.8322 12.2099C17.9114 8.68931 15.191 5.73622 11.713 5.65023L11.676 7.14977ZM16.3324 12.193V14.51H17.8324V12.193H16.3324ZM17.0433 15.259C17.4306 15.2792 17.764 15.6136 17.764 16.055H19.264C19.264 14.8488 18.3385 13.8246 17.1215 13.761L17.0433 15.259ZM17.764 16.055C17.764 16.4964 17.4306 16.8308 17.0433 16.851L17.1215 18.349C18.3385 18.2854 19.264 17.2612 19.264 16.055H17.764ZM17.0824 16.85H13.9692V18.35H17.0824V16.85ZM8.66886 17.5973C8.66592 18.4207 8.976 19.2162 9.53861 19.814L10.6309 18.786C10.335 18.4715 10.1673 18.0473 10.1688 17.6027L8.66886 17.5973ZM9.53739 19.8127C10.0977 20.4109 10.8758 20.7529 11.6935 20.7529V19.2529C11.2969 19.2529 10.9132 19.0873 10.6322 18.7873L9.53739 19.8127ZM11.6935 20.7529C12.5113 20.7529 13.2894 20.4109 13.8497 19.8127L12.7549 18.7873C12.4739 19.0873 12.0901 19.2529 11.6935 19.2529V20.7529ZM13.8484 19.814C14.4111 19.2162 14.7211 18.4207 14.7182 17.5973L13.2182 17.6027C13.2198 18.0473 13.0521 18.4715 12.7561 18.786L13.8484 19.814ZM9.41788 18.35H13.9692V16.85H9.41788V18.35Z"
                            fill="#fff" />
                    </svg>
                </a>

                <!-- Logout Icon -->
                <a href="#">
                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 12L13 12" stroke="#323232" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M18 15L20.913 12.087V12.087C20.961 12.039 20.961 11.961 20.913 11.913V11.913L18 9"
                            stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M16 5V4.5V4.5C16 3.67157 15.3284 3 14.5 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H14.5C15.3284 21 16 20.3284 16 19.5V19.5V19"
                            stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
    </header>

    <!-- Filter Buttons Section -->
    <section class="container mx-auto my-4 p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Carte Cryptos vedettes -->
            <div
                class="group relative text-gray-300 flex flex-col items-stretch gap-2 rounded-xl border border-line px-4 py-2 no-underline transition duration-200 border border-gray-500 ">

                <div class="w-full">
                    <!-- Contenu des cryptos vedettes -->
                    <!-- Exemple : -->
                    <div class="crypto-item cursor-pointer flex items-center justify-between rounded-md p-2 ">
                        <a href="/fr/trade/BNB_USDT?_from=markets" class="flex items-center gap-2">
                            <img src="https://s2.coinmarketcap.com/static/img/coins/64x64/1.png" alt="BTC logo"
                                class="w-6 h-6 rounded-full mr-2">
                            <div class="line-clamp-1 truncate">BNB</div>
                        </a>
                        <div class="text-right">
                            <div class="text-t-primary">$318.20</div>
                            <div class="text-red-500">-0.44%</div>
                        </div>
                    </div>
                    <!-- Ajoutez d'autres éléments de cryptos vedettes ici -->
                </div>
            </div>

        </div>
    </section>

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
            <tbody id="cryptoinfo">

            </tbody>
        </table>
    </div>

    <aside id="wallet" class="flex flex-col w-[70%] h-screen fixed top-0 left-[-100%] px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
        <div class="w-[95%] "><button class="float-right" id="closewallet"><svg xmlns="http://www.w3.org/2000/svg" height="30" width="24" viewBox="0 0 384 512">
                    <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg></button></div>
        <a href="#" class="mx-auto">
            <img class="w-auto h-6 sm:h-7" src="https://merakiui.com/images/full-logo.svg" alt="">
        </a>

        <div class="flex justify-between flex-1">
            <nav class="flex justify-around items-center w-[100%]">
                <div class="flex items-center bg-red-300 px-2 py-2 rounded-xl ">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <button class="mx-4 font-medium">Wallet</button>
                </div>
                <div class="flex items-center bg-green-300 px-2 py-2 rounded-xl">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <button class="mx-4 font-medium">Stats</button>
                    <div>
            </nav>
        </div>

        <div class="flex justify-between flex-1">

        </div>
    </aside>


</body>

</html>

<script>
    let cryptoinfo = document.getElementById('cryptoinfo');
    fetch('https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest', {
        method: 'GET',
        headers: {
            'Accept': 'application/json',
            'X-CMC_PRO_API_KEY': '91f64ee6-d1fc-45d7-b894-b9e601f86d91'
        }
    })
        .then((data) => {
            return data.json()
        })
        .then((parseddata) => {
            console.log(parseddata);
            for (let i = 0; i < parseddata.data.length; i++) {
                cryptoinfo.innerHTML += `
                <tr class="cursor-pointer p-2 border-t border-gray-400">
                <td class="text-center"><span class="text-yellow-500 text-xl">&#9733;</span></td>
                <td class="text-left">${parseddata.data[i].cmc_rank}</td>
                <td class="text-left">
                    <div class="flex items-center">
                        <img src="https://s2.coinmarketcap.com/static/img/coins/64x64/1.png" alt="BTC logo"
                            class="w-6 h-6 rounded-full mr-2">
                        <div>
                            <p class="font-medium text-gray-300">${parseddata.data[i].name}</p>
                            <p class="text-gray-300 text-xs">${parseddata.data[i].symbol}</p>
                        </div>
                    </div>
                </td>
                <td class="text-left"><a href="/fr/currencies/bitcoin/#markets" class="text-blue-500">$${parseddata.data[i].quote.USD.price}</a>
                </td>
                <td class="text-left">${parseddata.data[i].quote.USD.market_cap}</td>
                <td class="text-left"><a href="/fr/currencies/bitcoin/#markets"
                        class="text-blue-500">${parseddata.data[i].quote.USD.volume_24h}</a></td>
                <td class="text-left">
                    <p>${parseddata.data[i].circulating_supply}</p>
                </td>
                <td class="text-left">
                    <button class="bg-green-500 text-white px-2 py-1 rounded-md">Buy</button>
                </td>
                </tr>
                `;
            }
        });

    let closewallet = document.getElementById('closewallet');
    let wallet = document.getElementById('wallet');
    let openwallet = document.getElementById('openwallet');
    closewallet.addEventListener('click', e => {
        wallet.style.transition = 'left 0.5s ease';
        wallet.style.left = '-100%';
    })
    openwallet.addEventListener('click', e => {
        wallet.style.transition = 'left 0.5s ease';
        wallet.style.left = '-1%';
    })
</script>