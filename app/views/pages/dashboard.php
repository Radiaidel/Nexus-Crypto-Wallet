<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="bg-gray-200">

    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="https://flowbite.com" class="flex items-center">
                    <img src="https://www.shutterstock.com/image-vector/bnb-binance-icon-sign-payment-600nw-2080319677.jpg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <div class="flex items-center lg:order-2 space-x-5">
                    <button id="openwallet"> <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">
                                <path d="M19 12C19 12.5523 18.5523 13 18 13C17.4477 13 17 12.5523 17 12C17 11.4477 17.4477 11 18 11C18.5523 11 19 11.4477 19 12Z" fill="#000000" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.94358 3.25H13.0564C14.8942 3.24998 16.3498 3.24997 17.489 3.40314C18.6614 3.56076 19.6104 3.89288 20.3588 4.64124C21.2831 5.56563 21.5777 6.80363 21.6847 8.41008C22.2619 8.6641 22.6978 9.2013 22.7458 9.88179C22.7501 9.94199 22.75 10.0069 22.75 10.067C22.75 10.0725 22.75 10.0779 22.75 10.0833V13.9167C22.75 13.9221 22.75 13.9275 22.75 13.933C22.75 13.9931 22.7501 14.058 22.7458 14.1182C22.6978 14.7987 22.2619 15.3359 21.6847 15.5899C21.5777 17.1964 21.2831 18.4344 20.3588 19.3588C19.6104 20.1071 18.6614 20.4392 17.489 20.5969C16.3498 20.75 14.8942 20.75 13.0564 20.75H9.94359C8.10583 20.75 6.65019 20.75 5.51098 20.5969C4.33856 20.4392 3.38961 20.1071 2.64124 19.3588C1.89288 18.6104 1.56076 17.6614 1.40314 16.489C1.24997 15.3498 1.24998 13.8942 1.25 12.0564V11.9436C1.24998 10.1058 1.24997 8.65019 1.40314 7.51098C1.56076 6.33856 1.89288 5.38961 2.64124 4.64124C3.38961 3.89288 4.33856 3.56076 5.51098 3.40314C6.65019 3.24997 8.10582 3.24998 9.94358 3.25ZM20.1679 15.75H18.2308C16.0856 15.75 14.25 14.1224 14.25 12C14.25 9.87756 16.0856 8.25 18.2308 8.25H20.1679C20.0541 6.90855 19.7966 6.20043 19.2981 5.7019C18.8749 5.27869 18.2952 5.02502 17.2892 4.88976C16.2615 4.75159 14.9068 4.75 13 4.75H10C8.09318 4.75 6.73851 4.75159 5.71085 4.88976C4.70476 5.02502 4.12511 5.27869 3.7019 5.7019C3.27869 6.12511 3.02502 6.70476 2.88976 7.71085C2.75159 8.73851 2.75 10.0932 2.75 12C2.75 13.9068 2.75159 15.2615 2.88976 16.2892C3.02502 17.2952 3.27869 17.8749 3.7019 18.2981C4.12511 18.7213 4.70476 18.975 5.71085 19.1102C6.73851 19.2484 8.09318 19.25 10 19.25H13C14.9068 19.25 16.2615 19.2484 17.2892 19.1102C18.2952 18.975 18.8749 18.7213 19.2981 18.2981C19.7966 17.7996 20.0541 17.0915 20.1679 15.75ZM5.25 8C5.25 7.58579 5.58579 7.25 6 7.25H10C10.4142 7.25 10.75 7.58579 10.75 8C10.75 8.41421 10.4142 8.75 10 8.75H6C5.58579 8.75 5.25 8.41421 5.25 8ZM20.9235 9.75023C20.9032 9.75001 20.8766 9.75 20.8333 9.75H18.2308C16.8074 9.75 15.75 10.8087 15.75 12C15.75 13.1913 16.8074 14.25 18.2308 14.25H20.8333C20.8766 14.25 20.9032 14.25 20.9235 14.2498C20.936 14.2496 20.9426 14.2495 20.9457 14.2493L20.9479 14.2492C21.1541 14.2367 21.2427 14.0976 21.2495 14.0139C21.2495 14.0139 21.2497 14.0076 21.2498 13.9986C21.25 13.9808 21.25 13.9572 21.25 13.9167V10.0833C21.25 10.0428 21.25 10.0192 21.2498 10.0014C21.2497 9.99238 21.2495 9.98609 21.2495 9.98609C21.2427 9.90242 21.1541 9.7633 20.9479 9.75076C20.9479 9.75076 20.943 9.75043 20.9235 9.75023Z" fill="#000000" />
                            </g>

                        </svg></button> <button>
                        <svg fill="#000000" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 611.999 611.999" xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path d="M570.107,500.254c-65.037-29.371-67.511-155.441-67.559-158.622v-84.578c0-81.402-49.742-151.399-120.427-181.203
                                                C381.969,34,347.883,0,306.001,0c-41.883,0-75.968,34.002-76.121,75.849c-70.682,29.804-120.425,99.801-120.425,181.203v84.578
                                                c-0.046,3.181-2.522,129.251-67.561,158.622c-7.409,3.347-11.481,11.412-9.768,19.36c1.711,7.949,8.74,13.626,16.871,13.626
                                                h164.88c3.38,18.594,12.172,35.892,25.619,49.903c17.86,18.608,41.479,28.856,66.502,28.856
                                                c25.025,0,48.644-10.248,66.502-28.856c13.449-14.012,22.241-31.311,25.619-49.903h164.88c8.131,0,15.159-5.676,16.872-13.626
                                                C581.586,511.664,577.516,503.6,570.107,500.254z M484.434,439.859c6.837,20.728,16.518,41.544,30.246,58.866H97.32
                                                c13.726-17.32,23.407-38.135,30.244-58.866H484.434z M306.001,34.515c18.945,0,34.963,12.73,39.975,30.082
                                                c-12.912-2.678-26.282-4.09-39.975-4.09s-27.063,1.411-39.975,4.09C271.039,47.246,287.057,34.515,306.001,34.515z
                                                M143.97,341.736v-84.685c0-89.343,72.686-162.029,162.031-162.029s162.031,72.686,162.031,162.029v84.826
                                                c0.023,2.596,0.427,29.879,7.303,63.465H136.663C143.543,371.724,143.949,344.393,143.97,341.736z M306.001,577.485
                                                c-26.341,0-49.33-18.992-56.709-44.246h113.416C355.329,558.493,332.344,577.485,306.001,577.485z" />
                                        <path d="M306.001,119.235c-74.25,0-134.657,60.405-134.657,134.654c0,9.531,7.727,17.258,17.258,17.258
                                                c9.531,0,17.258-7.727,17.258-17.258c0-55.217,44.923-100.139,100.142-100.139c9.531,0,17.258-7.727,17.258-17.258
                                                C323.259,126.96,315.532,119.235,306.001,119.235z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg> </button>
                                <!-- Bouton de logout -->
                                
                            </div>
                        </div>
                    </nav>
                </header>
                <aside id="wallet" class="flex flex-col w-[80%] h-screen fixed top-0 left-[-100%]  overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
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
    <section class="container px-4 mx-auto">
        <h2 class="text-lg font-medium text-gray-800 dark:text-white">Crypto</h2>

        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis, quibusdam.</p>

        <div class="flex flex-col mt-6">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">

                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-800">
                                <tr class="text-center">
                                    <th class="text-left">Symbol</th>
                                    <th class="text-left">Rank</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Market Cap</th>
                                    <th class="text-center">Volume (24h)</th>
                                    <th class="text-left">Circulating Supply</th>
                                    <th class="text-left">Actions</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="cryptoinfo" class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>



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
    })}
    closewallet.addEventListener('click', e => {
        wallet.style.transition = 'left 0.5s ease';
        wallet.style.left = '-100%';
    })
    openwallet.addEventListener('click', e => {
        wallet.style.transition = 'left 0.5s ease';
        wallet.style.left = '-1%';
    })
</script>