<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/v5-font-face.min.css" integrity="sha512-DG+gORwHSOHlIRwrUl2peOlG9vcxDg8qnbI1WkCfttaERikRSgrRoDeDa1PK4uZD24IJwAeKb6TuQk+/15b66A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1 id="ownerid"><?php echo $_SESSION['id']; ?></h1>
    <div class="min-h-full flex">
        <div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">

            <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>
            <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-gray-800">
                <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex-shrink-0 flex items-center px-4">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-rose-500-mark-white-text.svg" alt="Workflow">
                </div>
                <div class="mt-5 flex-1 h-0 overflow-y-auto">
                    <nav class="px-2">
                        <div class="space-y-1">
                            <a href="#" class="bg-gray-900 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md" aria-current="page">
                                <svg class="text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Projects
                            </a>

                            <a href="<?php echo URLROOT; ?>users/logout" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-base font-medium rounded-md">
                                <svg class="text-gray-400 group-hover:text-gray-300 mr-4 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Log Out
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="flex-shrink-0 w-14" aria-hidden="true">
            </div>
        </div>
        <div class="hidden lg:flex lg:w-64 lg:fixed lg:inset-y-0">
            <div class="flex-1 flex flex-col min-h-0">
                <div class="flex items-center h-16 flex-shrink-0 px-4 bg-gray-900">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-rose-500-mark-white-text.svg" alt="Workflow">
                </div>
                <div class="flex-1 flex flex-col overflow-y-auto bg-gray-800">
                    <nav class="flex-1 px-2 py-4">
                        <div class="space-y-1">
                            <a href="#" class="bg-gray-900 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md" aria-current="page">
                                <svg class="text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                Projects
                            </a>
                            <a href="<?php echo URLROOT; ?>users/logout" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                                <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Log Out
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="lg:pl-64 flex flex-col w-0 flex-1">
            <div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200">
                <button type="button" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-900 lg:hidden">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </button>
                <div class="flex-1 px-4 flex justify-between">
                    <div class="flex-1 flex">
                        <form class="w-full flex lg:ml-0" action="#" method="GET">
                            <label for="search-field" class="sr-only">Search</label>
                            <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input id="search-field" class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search" type="search" name="search">
                            </div>
                        </form>
                    </div>
                    <div class="ml-4 w-[15%] flex items-center justify-between lg:ml-6">
                        <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900" id="stats">Stats</button>
                        <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900" id="addproj">Add Project</button>
                    </div>

                </div>

            </div>
            <div id="added" class="relative flex flex-col sm:flex-row sm:items-center bg-green-100 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6 hidden">
                <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                    <div id="closemessage" class="text-green-500">
                        <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="text-sm font-medium ml-3">Project Added Successfully</div>
                </div>
                <div class="text-sm tracking-wide text-gray-500 mt-4 sm:mt-0 sm:ml-4">Your Project was Added Successful. Please Refresh the page.</div>
                <div class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-400 hover:text-gray-800 cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>



            <div id="statsdiv" class="flex justify-center bg-gray-100 py-10 p-14 hidden">
                <!---== First Stats Container ====--->
                <?php $userid =$_SESSION['id'];
                $user = new Users();
                $row = $user->statpro($userid); ?>
                <div class="container mx-auto pr-4">
                    <div class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
                        <div class="h-20 bg-red-400 flex items-center justify-between">
                            <p class="mr-0 text-white text-lg pl-5">Total Projects</p>
                        </div>
                        <div class="flex justify-between px-5 pt-6 mb-2 text-sm text-gray-600">
                            <p>TOTAL</p>
                        </div>
                        <p class="py-4 text-3xl ml-5"><?php 
                        echo $row ? $row : 0;
                         ?></p>
                        <!-- <hr > -->
                    </div>
                </div>
                <!---== First Stats Container ====--->

                <!---== Second Stats Container ====--->
                <div class="container mx-auto pr-4">
                    <div class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
                        <div class="h-20 bg-blue-500 flex items-center justify-between">
                            <p class="mr-0 text-white text-lg pl-5">Total Tasks</p>
                        </div>
                        <div class="flex justify-between px-5 pt-6 mb-2 text-sm text-gray-600">
                            <p>TOTAL</p>
                        </div>
                        <p class="py-4 text-3xl ml-5"><?php 
                        $row = $user->stattask($userid);
                        echo $row ? $row : 0;
                         ?></p>
                        <!-- <hr > -->
                    </div>
                </div>
                <!---== Second Stats Container ====--->

                <!---== Third Stats Container ====--->
                <div class="container mx-auto pr-4">
                    <div class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
                        <div class="h-20 bg-purple-400 flex items-center justify-between">
                            <p class="mr-0 text-white text-lg pl-5">Active Tasks</p>
                        </div>
                        <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
                            <p>TOTAL</p>
                        </div>
                        <p class="py-4 text-3xl ml-5"><?php 
                        $row = $user->total_actv_task($userid);
                        echo $row ? $row : 0;
                         ?></p>
                        <!-- <hr > -->
                    </div>
                </div>
                <!---== Third Stats Container ====--->

                <!---== Fourth Stats Container ====--->
                <div class="container mx-auto">
                    <div class="w-72 bg-white max-w-xs mx-auto rounded-sm overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-100 cursor-pointer">
                        <div class="h-20 bg-purple-900 flex items-center justify-between">
                            <p class="mr-0 text-white text-lg pl-5">Finished Tasks</p>
                        </div>
                        <div class="flex justify-between pt-6 px-5 mb-2 text-sm text-gray-600">
                            <p>TOTAL</p>
                        </div>
                        <p class="py-4 text-3xl ml-5"><?php 
                        $row = json_decode($user->total_done_task($userid)) ;
                        echo $row ? $row : 0;
                        $_SESSION['id'] = $userid ; 
                         ?></p>
                        <!-- <hr > -->
                    </div>
                </div>
                <!---== Fourth Stats Container ====--->
            </div>

            <section id="projectsdiv" class="flex flex-row flex-wrap justify-center gap-5 mt-5">




            </section>

            <dh-component id="proform" class="hidden">


                <div role="alert" class="container fixed w-[60%] h-[60%] top-[20%] left-[20%]  z-10">
                    <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                        <div class="w-full flex justify-start text-gray-600 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wallet" width="52" height="52" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                            </svg>
                        </div>
                        <form action="#" method="post">
                            <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">Enter Project Info :</h1>
                            <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Project Name : </label>
                            <input id="proname" name="name" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="" />
                            <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Project Description : </label>
                            <input id="prodesc" name="desc" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="" />
                            <input id="userid" value="<?php echo $_SESSION['id']; ?>" name="userid" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border hidden" placeholder="" />

                            <label for="expiry" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">DeadLine : </label>
                            <div class="relative mb-5 mt-2">
                                <div class="absolute right-0 text-gray-600 flex items-center pr-3 h-full cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <rect x="4" y="5" width="16" height="16" rx="2" />
                                        <line x1="16" y1="3" x2="16" y2="7" />
                                        <line x1="8" y1="3" x2="8" y2="7" />
                                        <line x1="4" y1="11" x2="20" y2="11" />
                                        <rect x="8" y="15" width="2" height="2" />
                                    </svg>
                                </div>
                                <input id="prodead" name="deadline" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" type="date" />
                            </div>
                            <div class="flex items-center justify-start w-full">
                                <button id="addpro" name="add" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Add Project</button>
                            </div>
                        </form>
                        <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600 close" aria-label="close modal" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                        </button>
                    </div>
                </div>
            </dh-component>


            <main class="flex-1">
                <div class="py-8 xl:py-10">
                    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 xl:max-w-5xl xl:grid xl:grid-cols-3">
                        <div class="xl:col-span-2 xl:pr-8 xl:border-r xl:border-gray-200">
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <dh-component id="editpro" class="hidden">

        <div role="alert" class="container fixed w-[60%] h-[60%] top-[20%] left-[20%]  z-10">
            <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                <div class="w-full flex justify-start text-gray-600 mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wallet" width="52" height="52" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                        <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                    </svg>
                </div>
                <form action="<?php echo URLROOT; ?>projects/editpro" method="post">
                    <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">Edit Project Info :</h1>
                    <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Project Name : </label>
                    <input id="name" name="name" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="" />
                    <label for="prodesc" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Project Description : </label>
                    <input id="prodesc" name="desc" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="" />
                    <input id="proid" value="" name="proid" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border hidden " placeholder="" />
                    <input id="" value="<?php echo $_SESSION['id']; ?>" name="userid" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border hidden" placeholder="" />
                    <label for="expiry" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">DeadLine : </label>
                    <div class="relative mb-5 mt-2">
                        <div class="absolute right-0 text-gray-600 flex items-center pr-3 h-full cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <rect x="4" y="5" width="16" height="16" rx="2" />
                                <line x1="16" y1="3" x2="16" y2="7" />
                                <line x1="8" y1="3" x2="8" y2="7" />
                                <line x1="4" y1="11" x2="20" y2="11" />
                                <rect x="8" y="15" width="2" height="2" />
                            </svg>
                        </div>
                        <input id="expiry" name="deadline" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" type="date" />
                    </div>
                    <div class="flex items-center justify-start w-full">
                        <input name="add" value="Submit" type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">
                        <button class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm close">Cancel</button>
                    </div>
                </form>
                <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600 " id="close" aria-label="close modal" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </button>
            </div>
        </div>
    </dh-component>

</body>

</html>


<script>
    const addpro = document.getElementById('addproj');
    const profrom = document.getElementById('proform');
    const closefrom = document.querySelectorAll('.close');
    addpro.addEventListener("click", addproj);

    function addproj() {
        profrom.classList.remove('hidden');
        for (let i = 0; i < closefrom.length; i++) {
            closefrom[i].addEventListener('click', e => {

                profrom.classList.add('hidden');
            })
        }
    }
    /*********************add project hna******************************* */


    let add = document.getElementById('addpro');
    let closemesage = document.getElementById('closemessage');
    let added = document.getElementById('added');

    add.addEventListener('click', e => {
        let proname = document.getElementById('proname').value;
        let prodesc = document.getElementById('prodesc').value;
        let prodead = document.getElementById('prodead').value;
        let userid = document.getElementById('userid').value;
        e.preventDefault(e);
        var formData = new FormData();
        formData.append('name', proname);
        formData.append('desc', prodesc);
        formData.append('dead', prodead);
        formData.append('userid', userid);

        const xhr = new XMLHttpRequest();
        xhr.open('POST', '<?php echo URLROOT; ?>projects/addpro', true);
        xhr.onload = function() {
            if (xhr.status == 200 && xhr.readyState == 4) {

                added.classList.remove('hidden');
                setTimeout(function() {
                    added.classList.add('hidden');
                }, 3000);
                profrom.classList.add('hidden');
            }
        };
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(new URLSearchParams(formData));
    })









    /****************************************************************** */
    /********************************************* */
    var ownerid = document.getElementById('ownerid').innerText;
    ownerid = parseInt(ownerid);
    var response;
    const projectsdiv = document.getElementById('projectsdiv');
    let output = ``;
    const xhr = new XMLHttpRequest();
    xhr.open('GET', '<?php echo URLROOT; ?>Projects/displaypro?ownerid=' + ownerid, false);

    xhr.onload = function() {
        if (xhr.status == 200 && xhr.readyState == 4) {
            response = JSON.parse(xhr.response);
            for (let i = 0; i < response.length; i++) {
                output += ` 
    <div class="bg-white items-center shadow-md border border-gray-200 rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg" src="../public/img/project.png" alt="...">
        <div class="p-5">
                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white name">${response[i][1]}</h5>
                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white hidden proid">${response[i][0]}</h5>
                <h5 class="text-gray-900 font-bold text-2xl tracking-tight mb-2 dark:text-white hidden ownerid">project owner:${response[i][5]}</h5>
            <p class="font-normal text-gray-700 mb-3 dark:text-gray-400">status : ${response[i][2]}</p>
            <p class="mt-5 desc"> project description : ${response[i][3]}</p>
            <p class="mt-5 dead"> project Deadline : ${response[i][4]}</p>
            <a href="<?php echo URLROOT; ?>tasks/displaytask?proid=${response[i][0]}&userid=${response[i][5]}" class="mt-2 text-white bg-rose-700 hover:bg-rose-700 focus:ring-4 focus:bg-rose-700 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center  dark:bg-rose-700 dark:hover:bg-rose-700 dark:focus:ring-blue-800 ">
                Tasks
                <svg class="-mr-1 ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
       <div class='flex h-[10%] mb-2 justify-between m-3'>
       <svg class='deletepro cursor-pointer' xmlns="http://www.w3.org/2000/svg" height="24" width="20" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#ff0000" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
       <svg class='updatepro cursor-pointer' xmlns="http://www.w3.org/2000/svg" height="24" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#00ff04" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg>
       </div>
    </div>
`;
                projectsdiv.innerHTML += output;
            }
        }
    };

    xhr.send();
    /************************************************ */
    const deletepro = document.querySelectorAll('.deletepro');
    const updatepro = document.querySelectorAll('.updatepro');
    const close = document.getElementById('close');
    let eidtpro = document.getElementById('editpro');
    let proid = document.querySelectorAll('.proid');
    let editproid = document.getElementById('proid');
    close.addEventListener('click', e => {
        eidtpro.classList.add('hidden');
    })
    let editname = document.querySelectorAll('.name');
    let editdesc = document.querySelectorAll('.desc');
    let proname = document.getElementById('name');
    let prodesc = document.getElementById('prodesc');
    for (let i = 0; i < deletepro.length; i++) {
        deletepro[i].addEventListener('click', e => {
            console.log('hello');
            let id = proid[i].innerText;
            console.log(id);
            const xhr = new XMLHttpRequest();
            xhr.open('GET', '<?php echo URLROOT; ?>Projects/deletepro?ownerid=' + ownerid + '&proid=' + id, true);

            xhr.onload = function() {
                if (xhr.status == 200 && xhr.readyState == 4) {
                    console.log("deleted");
                }
            };
            xhr.send();
        });
        updatepro[i].addEventListener('click', e => {
            eidtpro.classList.remove('hidden');
            proname.value = editname[i].innerText;
            prodesc.value = editdesc[i].innerText;
            editproid.value = parseInt(proid[i].innerText);
        })
    }
    /****************************************************** */

    let stats = document.getElementById('stats');
    let statsdiv = document.getElementById('statsdiv');
    let clicked = false;

    stats.addEventListener('click', e => {
        clicked = !clicked;

        if (clicked) {
            statsdiv.classList.remove('hidden');
        } else {
            statsdiv.classList.add('hidden');
        }
    });
</script>