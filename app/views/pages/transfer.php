<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Votre Titre</title>
    <style>
        .bg-color {
            background-color: #181a20;
        }
    </style>
</head>

<body class="bg-color">
    <!-- Bouton pour afficher le modèle -->
    <button id="showModelBtn"
        class="bg-yellow-500 text-white px-4 py-2 mt-4 mx-auto block rounded-md hover:bg-yellow-600 focus:outline-none">
        Afficher le modèle
    </button>

    <div id="nexusIdModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center">
        <div class="max-w-md mx-auto p-6 bg-white rounded-2xl shadow-md border w-3/5">
            <!-- Barre de fermeture en haut à droite -->
            <div class="flex justify-end">
                <button id="closeNexusIdModalBtn" class="text-gray-500 hover:text-gray-300 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Formulaire pour saisir NexusID -->
            <form id="nexusIdForm" action="<?php echo URLROOT; ?>TransactionController/findNexusID" method="POST">
                <div class="mt-8">
                    <label for="nexusID" class="block text-sm font-medium text-gray-600">NexusID</label>

                    <input type="text" id="nexusID" name="nexusID"
                        class="mt-1 p-2 block w-full border-b-2 border-yellow-300 focus:outline-none focus:border-yellow-500 bg-gray-100 rounded-md">
                </div>

                <!-- Bouton Suivant en bas à droite -->
                <div class="mt-6 flex justify-end">
                    <button id="nextBtn"
                        class="px-4 py-2 bg-yellow-500 text-white rounded-xl hover:bg-yellow-600 focus:outline-none">
                        Suivant
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div id="otherInfoModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center">
        <div class="max-w-md mx-auto p-6 bg-white rounded-md shadow-md w-3/5">
            <!-- Barre de fermeture en haut à droite -->
            <div class="flex justify-end">
                <button id="closeOtherInfoModalBtn" class="text-gray-500 hover:text-gray-300 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>

            <!-- Formulaire pour saisir d'autres informations -->
            <form id="otherInfoForm" action="<?php echo URLROOT; ?>TransactionController/sendCryptocurrency" method="POST">
                <div class="mt-4">
                    <label for="cryptoType" class="block text-sm font-medium text-gray-600">Type de
                        Cryptomonnaie</label>

                    <select id="cryptoType" name="cryptoType"
                        class="mt-1 p-2 block w-full border-b-2 border-yellow-300 focus:outline-none focus:border-yellow-500 bg-gray-100 rounded-md">
                        <?php if (isset($data['cryptoData'])) {
                            foreach ($data['cryptoData'] as $crypto): ?>
                                <option value="<?= $crypto['CryptoID']; ?>">
                                    <?= $crypto['Name']; ?>
                                </option>
                            <?php endforeach;
                        } ?>
                    </select>


                    <label for="quantity" class="block mt-4 text-sm font-medium text-gray-600">Quantité</label>
                    <input type="text" id="quantity" name="quantity"
                        class="mt-1 p-2 block w-full border-b-2 border-yellow-300 focus:outline-none focus:border-yellow-500 bg-gray-100 rounded-md">
                    <div id="quantityError" class="text-red-500"></div>
                </div>

                <!-- Bouton Envoyer en bas à droite -->
                <div class="mt-8 flex justify-end">
                    <button  type="submit" id="sendBtn" name="transferBtn" onclick="confirmTransfer()"
                        class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 focus:outline-none">
                        Envoyer
                    </button>
                </div>
            </form>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    // Récupérez la quantité initiale de la base de données pour la première crypto
                    var cryptoData = <?= json_encode($data['cryptoData'], JSON_NUMERIC_CHECK); ?>;
                    var selectedCryptoIndex = document.getElementById("cryptoType").selectedIndex;
                    var dbQuantity = cryptoData[selectedCryptoIndex].Quantity;

                    // Ajoutez un gestionnaire d'événements au menu déroulant pour détecter les changements de crypto
                    var cryptoTypeSelect = document.getElementById("cryptoType");
                    cryptoTypeSelect.addEventListener("change", function () {
                        // Récupérez la quantité de la crypto sélectionnée par l'utilisateur
                        var selectedCryptoIndex = cryptoTypeSelect.selectedIndex;
                        var selectedCryptoQuantity = cryptoData[selectedCryptoIndex].Quantity;

                        // Mettez à jour dbQuantity avec la nouvelle quantité
                        dbQuantity = selectedCryptoQuantity;

                        // Réinitialisez le message d'erreur
                        var errorContainer = document.getElementById("quantityError");
                        errorContainer.innerHTML = "";
                    });

                    // Ajoutez un gestionnaire d'événements à l'input de la quantité
                    var quantityInput = document.getElementById("quantity");
                    quantityInput.addEventListener("input", function () {
                        // Récupérez la quantité saisie par l'utilisateur
                        var userQuantity = parseFloat(quantityInput.value);

                        // Sélectionnez l'élément où afficher le message d'erreur
                        var errorContainer = document.getElementById("quantityError");

                        // Vérifiez si la quantité saisie est comprise entre 0 et la quantité de la base de données
                        if (userQuantity <= 0 || userQuantity > dbQuantity) {
                            document.getElementById("sendBtn").disabled = true;
                            // Affichez le message d'erreur
                            errorContainer.innerHTML = "La quantité saisie doit être supérieure à 0 et ne doit pas dépasser " + dbQuantity + ".";
                        } else {
                            document.getElementById("sendBtn").disabled = false;
                            // Effacez le message d'erreur
                            errorContainer.innerHTML = "";
                        }
                    });
                });
            </script>
        </div>
    </div>


    <script>
        const showModelBtn = document.getElementById('showModelBtn');
        const closeNexusIdModalBtn = document.getElementById('closeNexusIdModalBtn');
        const closeOtherInfoModalBtn = document.getElementById('closeOtherInfoModalBtn');
        const nexusIdModal = document.getElementById('nexusIdModal');
        const otherInfoModal = document.getElementById('otherInfoModal');
        const nexusIdForm = document.getElementById('nexusIdForm');
        const nextBtn = document.getElementById('nextBtn');
        const otherInfoForm = document.getElementById('otherInfoForm');
        const sendBtn = document.getElementById('sendBtn');

        showModelBtn.addEventListener('click', () => {
            nexusIdModal.classList.remove('hidden');
        });

        // Ajouter un gestionnaire d'événement pour fermer le modèle de NexusID
        closeNexusIdModalBtn.addEventListener('click', () => {
            nexusIdModal.classList.add('hidden');
            nexusIdForm.reset();
        });

        // Ajouter un gestionnaire d'événement pour fermer le modèle d'autres informations
        closeOtherInfoModalBtn.addEventListener('click', () => {
            otherInfoModal.classList.add('hidden');
            otherInfoForm.reset();
        });




        function confirmTransfer() {
            // Afficher une boîte de dialogue de confirmation
            var confirmation = confirm("Confirmez-vous le transfert ?");

            // Si l'utilisateur clique sur "Oui", soumettre le formulaire
            if (confirmation) {
                document.getElementById("otherInfoForm").submit();
            }else{
                event.preventDefault();
            }
        }
    </script>



</body>

</html>