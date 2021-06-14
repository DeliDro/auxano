<!DOCTYPE html>
<html lang="fr">
<?php include("components/head.php") ?>
<body class="bg-gray-100 font-family-karla flex">

    <?php include("components/aside.php") ?>
    <script defer>activePage("aside-commandes")</script>

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
    
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="w-full text-3xl text-black pb-6">Commandes</h1>
                
                <?php include("components/table-template.php") ?>
                
                <script>

                    const data = JSON.parse(<?php echo json_encode(file_get_contents("data-handler/data/commandes.json"), JSON_HEX_TAG);?>);

                    setTableTitle("Liste des commandes");

                    console.log(data.commandes);
                    
                    setTHead(["client", "contact", "commandes", "facture"]);

                    setTBody(data.commandes, "commandes", ["client", "contact", "commandes", "facture"]);

                    function showForm(formName) {
                        const doc = document.getElementById(formName);
                        doc.style.display = doc.style.display == "none" ? "block" : "none";
                    }

                    function showEdit(id) {
                        document.getElementById("edit-form").style.display = "block";

                        document.getElementById("edit-form-real").action = `data-handler/edit.php?on=commandes&id=${id}`;
                        const fields = ["client", "contact", "commandes", "facture"];
                        
                        const selected = data.commandes.find(i => i.id === id);

                        for (const field of fields) {
                            document.getElementById("edit-" + field).value = selected[field];
                        }
                    }

                    function deleteData(id) {
                        window.location = `data-handler/delete.php?on=commandes&id=${id}`;
                    }
                </script>

                <input
                    type="button"
                    value="Créer une commande"
                    onclick="showForm('add-form')"
                    class="m-6 bg-blue-600 text-sm font-bold p-2 rounded-lg shadow text-white cursor-pointer hover:bg-blue-500 ease-in-out duration-100"
                >

                <div class="flex flex-wrap" style="display: none" id="add-form">
                    <div class="w-full my-6 pr-0">
                        <p class="text-xl pb-6 flex items-center">
                            Ajouter une commande
                            <a class="text-red-500 ml-6 text-sm " onclick="showForm('add-form')">Annuler</a>
                        </p>

                        <div class="leading-loose">
                            <form
                                method="POST"
                                action="data-handler/add.php?on=commandes"
                                class="p-10 bg-white rounded shadow-xl"
                            >
                                <div>
                                    <label class="block text-sm text-gray-600" for="client">Client</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="client" name="client" type="text" required="" placeholder="Client" aria-label="Client">
                                </div>

                                <div>
                                    <label class="block text-sm text-gray-600" for="contact">Contact</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="contact" name="contact" type="text" required="" placeholder="Contact" aria-label="Contcat">
                                </div>

                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="commandes">Commandes</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="commandes" name="commandes" type="text" required="" placeholder="Commandes" aria-label="Commandes">
                                </div>

                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="facture">Facture</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="facture" name="facture" type="text" required="" placeholder="Facture" aria-label="Facture">
                                </div>

                                <div class="mt-6">
                                    <button
                                        class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                                        type="submit" name="add"
                                    >
                                        Enregistrer
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap" style="display: none" id="edit-form">
                    <div class="w-full my-6 pr-0">
                        <p class="text-xl pb-6 flex items-center">
                            Modifier une commande
                            <a class="text-red-500 ml-6 text-sm cursor-pointer" onclick="showForm('edit-form')">Annuler</a>
                        </p>
                        
                        <div class="leading-loose">
                            <form
                                id="edit-form-real"
                                method="POST"
                                class="p-10 bg-white rounded shadow-xl"
                            >
                            <div>
                                    <label class="block text-sm text-gray-600" for="edit-client">Client</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="edit-client" name="edit-client" type="text" required="" placeholder="Client" aria-label="Client">
                                </div>

                                <div>
                                    <label class="block text-sm text-gray-600" for="edit-contact">Contact</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="edit-contact" name="edit-contact" type="text" required="" placeholder="Contact" aria-label="Contcat">
                                </div>

                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="edit-commandes">Commandes</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="edit-commandes" name="edit-commandes" type="text" required="" placeholder="Commandes" aria-label="Commandes">
                                </div>

                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="edit-facture">Facture</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="edit-facture" name="edit-facture" type="text" required="" placeholder="Facture" aria-label="Facture">
                                </div>

                                <div class="mt-6">
                                    <button
                                        class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                                        type="submit" name="add"
                                    >
                                        Enregistrer
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
            </main>
        </div>
        
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
