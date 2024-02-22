<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-montserrat text-sm bg-white dark:bg-zinc-900 ">
    <div
        class="flex min-h-screen  2xl:max-w-screen-2xl 2xl:mx-auto 2xl:border-x-2 2xl:border-gray-200 dark:2xl:border-zinc-700 ">
        <!-- Left Sidebar -->
        <aside
            class=" w-1/6 py-10 pl-10  min-w-min  border-r border-gray-300 dark:border-zinc-700  hidden md:block ">

            <!-- CinéStar Logo  -->
            <div class=" font-bold text-lg flex items-center gap-x-3">
                <svg class="h-8 w-8 fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M10 15.5v-7c0-.41.47-.65.8-.4l4.67 3.5c.27.2.27.6 0 .8l-4.67 3.5c-.33.25-.8.01-.8-.4Zm11.96-4.45c.58 6.26-4.64 11.48-10.9 10.9 -4.43-.41-8.12-3.85-8.9-8.23 -.26-1.42-.19-2.78.12-4.04 .14-.58.76-.9 1.31-.7v0c.47.17.75.67.63 1.16 -.2.82-.27 1.7-.19 2.61 .37 4.04 3.89 7.25 7.95 7.26 4.79.01 8.61-4.21 7.94-9.12 -.51-3.7-3.66-6.62-7.39-6.86 -.83-.06-1.63.02-2.38.2 -.49.11-.99-.16-1.16-.64v0c-.2-.56.12-1.17.69-1.31 1.79-.43 3.75-.41 5.78.37 3.56 1.35 6.15 4.62 6.5 8.4ZM5.5 4C4.67 4 4 4.67 4 5.5 4 6.33 4.67 7 5.5 7 6.33 7 7 6.33 7 5.5 7 4.67 6.33 4 5.5 4Z">
                    </path>
                </svg>
                <div class="tracking-wide dark:text-white">CinéStar<span class="text-red-600">.</span></div>
            </div>

            <!-- Menu -->
            <div class="mt-12 flex flex-col gap-y-4 text-gray-500 fill-gray-500 text-sm">
                <div class="text-gray-400/70  font-medium uppercase">Menu</div>
                <a class="flex items-center space-x-2 py-1 dark:text-white  font-semibold  border-r-4 border-r-red-600 pr-20 "
                    href="#">
                    <svg class="h-5 w-5 fill-red-600 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M5 22h14v0c1.1 0 2-.9 2-2v-9 0c0-.27-.11-.53-.29-.71l-8-8v0c-.4-.39-1.02-.39-1.41 0l-8 8h0c-.2.18-.3.44-.3.71v9 0c0 1.1.89 2 2 2Zm5-2v-5h4v5Zm-5-8.59l7-7 7 7V20h-3v-5 0c0-1.11-.9-2-2-2h-4v0c-1.11 0-2 .89-2 2v5H5Z">
                        </path>
                    </svg>
                    <span>Home</span>
                </a>
                <a class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white "
                    href="#">
                    <svg class="h-5 w-5 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <g>
                            <path
                                d="M19 2H9c-1.11 0-2 .89-2 2v5.586l-4.707 4.7v0c-.4.39-.4 1.02 0 1.41 .18.18.44.29.7.29v5 0c0 .55.44 1 1 1h16v0c.55 0 1-.45 1-1v-17c0-1.11-.9-2-2-2Zm-8 18H5v-5.586l3-3 3 3V20Zm8 0h-6v-4 0c.55 0 .99-.45 1-1 0-.27-.11-.53-.3-.72L8.99 9.57V3.984h10v16Z">
                            </path>
                            <path d="M11 6h2v2h-2Zm4 0h2v2h-2Zm0 4.03h2v1.96h-2Zm0 3.96h2v2h-2Zm-8 1h2v2H7Z"></path>
                        </g>
                    </svg>
                    <span>All Films</span>
                </a>
                <a class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white "
                    href="#">
                    <svg class="h-5 w-5 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <g>
                            <path
                                d="M19 2H9c-1.11 0-2 .89-2 2v5.586l-4.707 4.7v0c-.4.39-.4 1.02 0 1.41 .18.18.44.29.7.29v5 0c0 .55.44 1 1 1h16v0c.55 0 1-.45 1-1v-17c0-1.11-.9-2-2-2Zm-8 18H5v-5.586l3-3 3 3V20Zm8 0h-6v-4 0c.55 0 .99-.45 1-1 0-.27-.11-.53-.3-.72L8.99 9.57V3.984h10v16Z">
                            </path>
                            <path d="M11 6h2v2h-2Zm4 0h2v2h-2Zm0 4.03h2v1.96h-2Zm0 3.96h2v2h-2Zm-8 1h2v2H7Z"></path>
                        </g>
                    </svg>
                    <span>Today's Showings</span>
                </a>
                <div class="mt-8 text-gray-400/70  font-medium uppercase">Social</div>
                <a class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white "
                    href="#">
                    <svg class="h-5 w-5 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 2v0C9.23 2 7 4.23 7 7c0 2.76 2.23 5 5 5 2.76 0 5-2.24 5-5v0c0-2.77-2.24-5-5-5Zm0 8v0c-1.66 0-3-1.35-3-3 0-1.66 1.34-3 3-3 1.65 0 3 1.34 3 3v0c0 1.65-1.35 3-3 3Zm9 11v-1 0c0-3.87-3.14-7-7-7h-4v0c-3.87 0-7 3.13-7 7v1h2v-1 0c0-2.77 2.23-5 5-5h4v0c2.76 0 5 2.23 5 5v1Z">
                        </path>
                    </svg>
                    <span>Profile</span>
                </a>
                <div class="mt-8 text-gray-400/70  font-medium uppercase">General</div>
                <a class=" flex items-center space-x-2 py-1  group hover:border-r-4 hover:border-r-red-600 hover:font-semibold dark:hover:text-white"
                    href="#">
                    <svg class="h-5 w-5 group-hover:fill-red-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <g>
                            <path d="M16 13v-2H7V8l-5 4 5 4v-3Z"></path>
                            <path
                                d="M20 3h-9c-1.11 0-2 .89-2 2v4h2V5h9v14h-9v-4H9v4c0 1.1.89 2 2 2h9c1.1 0 2-.9 2-2V5c0-1.11-.9-2-2-2Z">
                            </path>
                        </g>
                    </svg>
                    <span>Logout</span>
                </a>
            </div><!-- /Menu -->

        </aside><!-- /Left Sidebar -->


        <main class=" flex-1 py-10  px-5 sm:px-10 ">



            <section>
                <!--Searsh -->
                <div>
                    <div class="relative items-center content-center flex ml-2">
                        <span class="text-gray-400 absolute left-4 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </span>
                        <input type="text"
                            class="text-xs ring-1 bg-transparent ring-gray-200 dark:ring-zinc-600 focus:ring-red-300 pl-10 pr-5 text-gray-600 dark:text-white  py-3 rounded-full w-full outline-none focus:ring-1"
                            placeholder="Search ...">
                    </div>
                </div>
                <!--Film publication -->
                <div class="flex flex-col justify-between mt-4 bg-black/10 bg-blend-multiply rounded-3xl h-80 overflow-hidden bg-cover bg-center px-7 pt-4 pb-6 text-white"
                    style="background-image: url('images/inception.jpg');">
                    <div class="bg-gradient-to-r from-black/30 to-transparent -mx-7 -mb-6 px-7 pb-6 pt-2">
                        <span class="uppercase text-3xl font-semibold drop-shadow-lg ">Experience the Magic: Premiering
                            at <span class="text-red-900">CimaStar</span> on <span class="text-yellow-300">March
                                22nd!</span></span>
                        <div class="mt-4 flex space-x-3 items-center">

                        </div>
                    </div>
                </div>

            </section>

            <!--Stars Section -->
            <section class="mt-9">

                <div class="flex items-center justify-between">
                    <span class="font-semibold text-gray-700 text-base dark:text-white">Top Stars</span>
                </div>

                <div class="mt-4 grid grid-cols-2  sm:grid-cols-4 gap-x-5 gap-y-5">
                    <!--Star 1-->
                    <div class="relative rounded-xl overflow-hidden">
                        <img src="https://www.jolie.de/sites/default/files/styles/image_gallery360w/public/2020-02/leonardo-dicaprio-oscars.jpg?h=64dbc2fc&itok=EH0B3oo4"
                            class="object-cover h-full w-full -z-10" alt="">
                        <div
                            class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end">
                            <div class="self-center flex flex-col items-center space-y-2">
                                <span class="capitalize text-white font-medium drop-shadow-md">Leonardo DiCaprio</span>
                                <span class="text-gray-100 text-xs">+12 Movies</span>

                            </div>
                        </div>
                    </div>

                    <!--Star 2-->
                    <div class="relative rounded-xl overflow-hidden ">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/WP_-_random_-5_%2814094372762%29.jpg/319px-WP_-_random_-5_%2814094372762%29.jpg"
                            class="object-cover w-full h-full -z-10" alt="">
                        <div
                            class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end">
                            <div class="self-center flex flex-col items-center space-y-2">
                                <span class="capitalize text-white font-medium drop-shadow-md">Joseph
                                    Gordon-Levitt</span>
                                <span class="text-gray-300 text-xs">+24 Movies</span>

                            </div>
                        </div>
                    </div>

                    <!--Star 3-->
                    <div class="relative rounded-xl overflow-hidden ">
                        <img src="https://img.zeit.de/kultur/film/2020-12/elliot-page-tranmann/wide__450x253__mobile__scale_1"
                            class="object-cover h-full w-full -z-10" alt="">
                        <div
                            class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end">
                            <div class="self-center flex flex-col items-center space-y-2">
                                <span class="capitalize text-white font-medium drop-shadow-md">Elliot Page</span>
                                <span class="text-gray-300 text-xs">+10 Movies</span>

                            </div>
                        </div>
                    </div>

                    <!--Star 4-->
                    <div class="relative rounded-xl overflow-hidden ">
                        <img src="https://de.web.img3.acsta.net/c_310_420/pictures/16/01/19/11/06/274206.jpg"
                            class="object-cover h-full w-full -z-10" alt="">
                        <div
                            class="absolute top-0 h-full w-full bg-gradient-to-t from-black/50 p-3 flex flex-col justify-end">
                            <div class="self-center flex flex-col items-center space-y-2">
                                <span class="capitalize text-white font-medium drop-shadow-md">Tom Hardy</span>
                                <span class="text-gray-300 text-xs">+27 Movies</span>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--Films Section -->
            <section class="mt-9">
                <div class="flex items-center justify-between">
                    <span class="font-semibold text-gray-700 text-base dark:text-white">Similar Movies</span>
                </div>

                <div class="mt-4 grid grid-cols-2 gap-y-5 sm:grid-cols-3 gap-x-5 ">
                    <a href="#"
                        class="flex flex-col rounded-xl overflow-hidden aspect-square border dark:border-zinc-600">
                        <img src="https://upload.wikimedia.org/wikipedia/en/1/14/Tenet_movie_poster.jpg"
                            class=" h-4/5 object-cover w-full  " alt="">
                        <div
                            class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between border-t-2 border-t-red-600">
                            <span class="capitalize  font-medium truncate">Tenet</span>
                            <div class="flex space-x-2 items-center text-xs">
                                <svg class="w-8 h-5" xmlns="http://www.w3.org/2000/svg" width="64"
                                    height="32" viewBox="0 0 64 32" version="1.1">
                                    <g fill="#F5C518">
                                        <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                                    </g>
                                    <g transform="translate(8.000000, 7.000000)" fill="#000000" fill-rule="nonzero">
                                        <polygon points="0 18 5 18 5 0 0 0"></polygon>
                                        <path
                                            d="M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z">
                                        </path>
                                        <path
                                            d="M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z">
                                        </path>
                                        <path
                                            d="M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z">
                                        </path>
                                    </g>
                                </svg>
                                <span>7.4</span>
                            </div>
                        </div>
                    </a>
                    <a href="#"
                        class="flex flex-col rounded-xl overflow-hidden aspect-square border dark:border-zinc-600">
                        <img src="https://upload.wikimedia.org/wikipedia/en/f/fc/Fight_Club_poster.jpg"
                            class=" h-4/5 object-cover w-full  " alt="">
                        <div
                            class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between border-t-2 border-t-red-600">
                            <span class="capitalize  font-medium truncate">Fight Club</span>
                            <div class="flex space-x-2 items-center text-xs">
                                <svg class="w-8 h-5" xmlns="http://www.w3.org/2000/svg" width="64"
                                    height="32" viewBox="0 0 64 32" version="1.1">
                                    <g fill="#F5C518">
                                        <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                                    </g>
                                    <g transform="translate(8.000000, 7.000000)" fill="#000000" fill-rule="nonzero">
                                        <polygon points="0 18 5 18 5 0 0 0"></polygon>
                                        <path
                                            d="M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z">
                                        </path>
                                        <path
                                            d="M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z">
                                        </path>
                                        <path
                                            d="M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z">
                                        </path>
                                    </g>
                                </svg>
                                <span>8.8</span>
                            </div>
                        </div>
                    </a>
                    <a href="#"
                        class="flex flex-col rounded-xl overflow-hidden aspect-square border dark:border-zinc-600">
                        <img src="https://upload.wikimedia.org/wikipedia/en/8/8e/Dune_%282021_film%29.jpg"
                            class=" h-4/5 object-cover w-full  " alt="">
                        <div
                            class="w-full h-1/5 bg-white dark:bg-zinc-800 dark:text-white px-3 flex items-center justify-between border-t-2 border-t-red-600">
                            <span class="capitalize  font-medium truncate">Dune</span>
                            <div class="flex space-x-2 items-center text-xs">
                                <svg class="w-8 h-5" xmlns="http://www.w3.org/2000/svg" width="64"
                                    height="32" viewBox="0 0 64 32" version="1.1">
                                    <g fill="#F5C518">
                                        <rect x="0" y="0" width="100%" height="100%" rx="4"></rect>
                                    </g>
                                    <g transform="translate(8.000000, 7.000000)" fill="#000000" fill-rule="nonzero">
                                        <polygon points="0 18 5 18 5 0 0 0"></polygon>
                                        <path
                                            d="M15.6725178,0 L14.5534833,8.40846934 L13.8582008,3.83502426 C13.65661,2.37009263 13.4632474,1.09175121 13.278113,0 L7,0 L7,18 L11.2416347,18 L11.2580911,6.11380679 L13.0436094,18 L16.0633571,18 L17.7583653,5.8517865 L17.7707076,18 L22,18 L22,0 L15.6725178,0 Z">
                                        </path>
                                        <path
                                            d="M24,18 L24,0 L31.8045586,0 C33.5693522,0 35,1.41994415 35,3.17660424 L35,14.8233958 C35,16.5777858 33.5716617,18 31.8045586,18 L24,18 Z M29.8322479,3.2395236 C29.6339219,3.13233348 29.2545158,3.08072342 28.7026524,3.08072342 L28.7026524,14.8914865 C29.4312846,14.8914865 29.8796736,14.7604764 30.0478195,14.4865461 C30.2159654,14.2165858 30.3021941,13.486105 30.3021941,12.2871637 L30.3021941,5.3078959 C30.3021941,4.49404499 30.272014,3.97397442 30.2159654,3.74371416 C30.1599168,3.5134539 30.0348852,3.34671372 29.8322479,3.2395236 Z">
                                        </path>
                                        <path
                                            d="M44.4299079,4.50685823 L44.749518,4.50685823 C46.5447098,4.50685823 48,5.91267586 48,7.64486762 L48,14.8619906 C48,16.5950653 46.5451816,18 44.749518,18 L44.4299079,18 C43.3314617,18 42.3602746,17.4736618 41.7718697,16.6682739 L41.4838962,17.7687785 L37,17.7687785 L37,0 L41.7843263,0 L41.7843263,5.78053556 C42.4024982,5.01015739 43.3551514,4.50685823 44.4299079,4.50685823 Z M43.4055679,13.2842155 L43.4055679,9.01907814 C43.4055679,8.31433946 43.3603268,7.85185468 43.2660746,7.63896485 C43.1718224,7.42607505 42.7955881,7.2893916 42.5316822,7.2893916 C42.267776,7.2893916 41.8607934,7.40047379 41.7816216,7.58767002 L41.7816216,9.01907814 L41.7816216,13.4207851 L41.7816216,14.8074788 C41.8721037,15.0130276 42.2602358,15.1274059 42.5316822,15.1274059 C42.8031285,15.1274059 43.1982131,15.0166981 43.281155,14.8074788 C43.3640968,14.5982595 43.4055679,14.0880581 43.4055679,13.2842155 Z">
                                        </path>
                                    </g>
                                </svg>
                                <span>8.1</span>
                            </div>
                        </div>
                    </a>



                </div>
                
            </section>
        </main>
    </div>
</body>

</html>
