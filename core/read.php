<?php
require '../template/header.php';
require 'conn.php';
?>

<div class="flex justify-center my-36">
    <div class="header-color rounded-md ">
        <div class="flex">
            <div class="h-full">
                <img src="../assets/img/hackers-poulette-logo.png" alt="form img">
            </div>

            <form action="create.php" method="GET" class="flex flex-col p-10">
                <div class="flex gap-10">
                    <div class="mb-6 w-60">
                        <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" name="prenom" placeholder="Prénom">
                    </div>
                    <div class="mb-6 w-60">
                        <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" name="nom" placeholder="Nom">
                    </div>
                </div>
                <div class="flex gap-10">
                    <div class="mb-6 w-60">
                        <input type="gender" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" name="genre" placeholder="Genre">
                    </div>
                    <div class="mb-6 w-60">
                        <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" name="pays" placeholder="Pays">
                    </div>
                </div>
                <div class="mb-6">
                    <input type="mail" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" name="mail" placeholder="email">
                </div>

                <label class="mb-4">Sujet :</label>
                <select data-dropdown-toggle="dropdown" class="bg-white font-medium rounded-lg text-sm px-4 py-2.5 mb-6 hover:header-color" name="sujet">
                    <option>Autre</option>
                    <option>Appareil défectueux</option>
                    <option >Remboursement</option>
                    <option >Article manquant</option>
                </select>
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(391.2px, 680.8px, 0px);" data-popper-placement="bottom">
                </div>
                <div class="mb-6 ">
                    <textarea class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-40 p-2.5 outline-none" name="message" placeholder="Message"></textarea>
                </div>
                <div class="flex justify-center mt-6">
                    <button type="submit" class="text-white bg-white font-medium rounded-lg text-sm px-5 py-2.5 text-center text-teal-600 w-28">Soumettre</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require '../template/footer.php';
?>