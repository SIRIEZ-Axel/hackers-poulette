<?php
require '../template/header.php';
?>

<body class="m-0 font-color">
    <header class=" mb-16 h-24 flex items-center header-color">
        <h1 class="text-4xl font-bold mx-12">
            Formulaire de contact
        </h1>
    </header>
    <div class="flex justify-center shadow-sm">
        <div class="header-color rounded-md">
            <div class="flex">
                <div class="flex">
                    <img src="../assets/img/hackers-poulette-logo.png" alt="form img">
                </div>

                <form action="read.php" method="GET" class="flex flex-col p-10">
                    <div class="flex gap-10">
                        <div class="mb-6 w-60">
                            <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" placeholder="Prénom" required>
                        </div>
                        <div class="mb-6 w-60">
                            <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" placeholder="Nom" required>
                        </div>
                    </div>
                    <div class="flex gap-10">
                        <div class="mb-6 w-60">
                            <input type="gender" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" placeholder="Genre" required>
                        </div>
                        <div class="mb-6 w-60">
                            <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" placeholder="Country" required>
                        </div>
                    </div>
                    <div class="mb-6 w-60">
                        <input type="mail" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" placeholder="mail" required>
                    </div>

                    <label class="mb-4">Sujet :</label>
                    <select data-dropdown-toggle="dropdown" class="text-teal-900 bg-white font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center mb-6">Autre<svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg></select>
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(391.2px, 680.8px, 0px);" data-popper-placement="bottom">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-6 ">
                        <textarea class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" placeholder="Message"></textarea>
                    </div>
                    <div class="flex justify-center mt-6">
                        <button type="submit" class="text-white bg-white font-medium rounded-lg text-sm px-5 py-2.5 text-center text-teal-600 w-28">Soumettre</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <?php
    require '../template/footer.php';
    ?>
</body>

</html>