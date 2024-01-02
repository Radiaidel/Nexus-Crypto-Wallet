
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .crypto-table {
            min-width: 600px;
        }

        .top-gainers {
            background-color: #FFD700;
            padding: 1.5rem;
            border-radius: 0.5rem;
        }

        .top-gainers-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .top-gainer-item {
            list-style-type: none;
            margin-bottom: 0.5rem;
        }
    </style>
    <title>Crypto App</title>
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
                    <button> <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">

                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M19 12C19 12.5523 18.5523 13 18 13C17.4477 13 17 12.5523 17 12C17 11.4477 17.4477 11 18 11C18.5523 11 19 11.4477 19 12Z"
                                    fill="#000000" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.94358 3.25H13.0564C14.8942 3.24998 16.3498 3.24997 17.489 3.40314C18.6614 3.56076 19.6104 3.89288 20.3588 4.64124C21.2831 5.56563 21.5777 6.80363 21.6847 8.41008C22.2619 8.6641 22.6978 9.2013 22.7458 9.88179C22.7501 9.94199 22.75 10.0069 22.75 10.067C22.75 10.0725 22.75 10.0779 22.75 10.0833V13.9167C22.75 13.9221 22.75 13.9275 22.75 13.933C22.75 13.9931 22.7501 14.058 22.7458 14.1182C22.6978 14.7987 22.2619 15.3359 21.6847 15.5899C21.5777 17.1964 21.2831 18.4344 20.3588 19.3588C19.6104 20.1071 18.6614 20.4392 17.489 20.5969C16.3498 20.75 14.8942 20.75 13.0564 20.75H9.94359C8.10583 20.75 6.65019 20.75 5.51098 20.5969C4.33856 20.4392 3.38961 20.1071 2.64124 19.3588C1.89288 18.6104 1.56076 17.6614 1.40314 16.489C1.24997 15.3498 1.24998 13.8942 1.25 12.0564V11.9436C1.24998 10.1058 1.24997 8.65019 1.40314 7.51098C1.56076 6.33856 1.89288 5.38961 2.64124 4.64124C3.38961 3.89288 4.33856 3.56076 5.51098 3.40314C6.65019 3.24997 8.10582 3.24998 9.94358 3.25ZM20.1679 15.75H18.2308C16.0856 15.75 14.25 14.1224 14.25 12C14.25 9.87756 16.0856 8.25 18.2308 8.25H20.1679C20.0541 6.90855 19.7966 6.20043 19.2981 5.7019C18.8749 5.27869 18.2952 5.02502 17.2892 4.88976C16.2615 4.75159 14.9068 4.75 13 4.75H10C8.09318 4.75 6.73851 4.75159 5.71085 4.88976C4.70476 5.02502 4.12511 5.27869 3.7019 5.7019C3.27869 6.12511 3.02502 6.70476 2.88976 7.71085C2.75159 8.73851 2.75 10.0932 2.75 12C2.75 13.9068 2.75159 15.2615 2.88976 16.2892C3.02502 17.2952 3.27869 17.8749 3.7019 18.2981C4.12511 18.7213 4.70476 18.975 5.71085 19.1102C6.73851 19.2484 8.09318 19.25 10 19.25H13C14.9068 19.25 16.2615 19.2484 17.2892 19.1102C18.2952 18.975 18.8749 18.7213 19.2981 18.2981C19.7966 17.7996 20.0541 17.0915 20.1679 15.75ZM5.25 8C5.25 7.58579 5.58579 7.25 6 7.25H10C10.4142 7.25 10.75 7.58579 10.75 8C10.75 8.41421 10.4142 8.75 10 8.75H6C5.58579 8.75 5.25 8.41421 5.25 8ZM20.9235 9.75023C20.9032 9.75001 20.8766 9.75 20.8333 9.75H18.2308C16.8074 9.75 15.75 10.8087 15.75 12C15.75 13.1913 16.8074 14.25 18.2308 14.25H20.8333C20.8766 14.25 20.9032 14.25 20.9235 14.2498C20.936 14.2496 20.9426 14.2495 20.9457 14.2493L20.9479 14.2492C21.1541 14.2367 21.2427 14.0976 21.2495 14.0139C21.2495 14.0139 21.2497 14.0076 21.2498 13.9986C21.25 13.9808 21.25 13.9572 21.25 13.9167V10.0833C21.25 10.0428 21.25 10.0192 21.2498 10.0014C21.2497 9.99238 21.2495 9.98609 21.2495 9.98609C21.2427 9.90242 21.1541 9.7633 20.9479 9.75076C20.9479 9.75076 20.943 9.75043 20.9235 9.75023Z"
                                    fill="#000000" />
                            </g>

                        </svg></button> <button>
                        <svg fill="#000000" height="20px" width="20px" version="1.1" id="Capa_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 611.999 611.999" xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path
                                            d="M570.107,500.254c-65.037-29.371-67.511-155.441-67.559-158.622v-84.578c0-81.402-49.742-151.399-120.427-181.203
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
    <div class="container mx-auto flex flex-col sm:flex-row-reverse px-4 sm:px-12 mt-10">
        <!-- Right Section: Card -->
        <div class="w-full sm:w-1/3">
            <div class="p-5 rounded-lg top-gainers">
                <h2 class="text-2xl font-bold mb-5 top-gainers-title">Top Gainers</h2>
                <ul id="topGainersList">
                    <!-- Data will be populated using JavaScript -->
                </ul>
            </div>
        </div>

        <!-- Left Section: Table -->
        <div class="w-full sm:w-2/3 mb-8 sm:mr-5">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table id="cryptoTableBody"
                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 crypto-table">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Symbol
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Change (%)
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Market Cap
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Volume 24H
                            </th>
                            <th scope="col" class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data will be populated using JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        // Simulated data for illustration
        const cryptoData = [
            { symbol: 'BTC', name: 'Bitcoin', price: '$45,509.04', change: '+6.58%', marketCap: '$31.10B', volume24h: '$891.40B' },
            { symbol: 'ETH', name: 'Ethereum', price: '$2,394.32', change: '+3.88%', marketCap: '$10.32B', volume24h: '$287.76B' },
            // Add more data as needed
        ];

        const topGainersData = [
            { symbol: 'SOL', name: 'Solana', change: '+7.91%' },
            { symbol: 'BTC', name: 'Bitcoin', change: '+6.58%' },
            // Add more data as needed
        ];

        // Function to populate the left section (table)
        function populateCryptoTable() {
            const tableBody = document.querySelector('#cryptoTableBody tbody');

            cryptoData.forEach(crypto => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">${crypto.symbol}</td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">${crypto.name}</td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">${crypto.price}</td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">${crypto.change}</td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">${crypto.marketCap}</td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">${crypto.volume24h}</td>
                    <td scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Buy</td>
                `;
                tableBody.appendChild(row);
            });
        }

        // Function to populate the right section (top gainer card)
        function populateTopGainersList() {
            const topGainersList = document.getElementById('topGainersList');

            topGainersData.forEach(gainer => {
                const listItem = document.createElement('li');
                listItem.textContent = `${gainer.name} (${gainer.symbol}) - Change: ${gainer.change}`;
                topGainersList.appendChild(listItem);
            });
        }

        // Call the functions to populate the sections
        populateCryptoTable();
        populateTopGainersList();
    </script>

</body>

</html>
