<!DOCTYPE html>
<html lang="fr">
<?php include("components/head.php") ?>
<body class="bg-gray-100 font-family-karla flex">

    <?php include("components/aside.php") ?>
    <script defer>activePage("aside-offres")</script>

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
    
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="w-full text-3xl text-black pb-6">Offres</h1>
                
                <?php include("components/table-template.php") ?>
                
                <script>

                    const data = JSON.parse(<?php echo json_encode(file_get_contents("data-handler/data/offres.json"), JSON_HEX_TAG);?>);

                    setTableTitle("Liste des offres");
                    
                    setTHead(["intitule", "places", "salaire", "description"]);

                    setTBody(data.offres, "offres", ["intitule", "places", "salaire", "description"]);

                    function showForm(formName) {
                        var doc = document.getElementById(formName);
                        doc.style.display = doc.style.display == "none" ? "block" : "none";

                        doc = document.getElementById("edit-form");
                        doc.style.display = "none";
                    }

                    function showEdit(id) {
                        document.getElementById("add-form").style.display = "none";
                        document.getElementById("edit-form").style.display = "block";

                        document.getElementById("edit-form-real").action = `data-handler/edit.php?on=offres&id=${id}`;
                        const fields = ["intitule", "places", "prerequis", "salaire", "description"];
                        
                        const selected = data.offres.find(i => i.id === id);

                        for (const field of fields) {
                            document.getElementById("edit-" + field).value = selected[field];
                        }
                    }

                    function deleteData(id) {
                        window.location = `data-handler/delete.php?on=offres&id=${id}`;
                    }
                </script>
                    
                <input
                    type="button"
                    value="Créer une offre"
                    onclick="showForm('add-form')"
                    class="m-6 bg-blue-600 text-sm font-bold p-2 rounded-lg shadow text-white cursor-pointer hover:bg-blue-500 ease-in-out duration-100"
                >
                
                <!-- AJOUTER -->
                <div class="flex flex-wrap" style="display: none" id="add-form">
                    <div class="w-full my-6 pr-0">
                        <p class="text-xl pb-6 flex items-center">
                            Ajouter une offre
                            <a class="text-red-500 ml-6 text-sm cursor-pointer" onclick="showForm('add-form')">Annuler</a>
                        </p>
                        
                        <div class="leading-loose">
                            <form
                                method="POST"
                                action="data-handler/add.php?on=offres"
                                class="p-10 bg-white rounded shadow-xl"
                            >
                                <div>
                                    <label class="block text-sm text-gray-600" for="intitule">Intitule</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="intitule" name="intitule" type="text" required="" placeholder="Intitule" aria-label="Intitule">
                                </div>
                                
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="places">Places</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="places" name="places" type="number" required="" placeholder="Nombre de places" aria-label="Places">
                                </div>

                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="salaire">Salaire</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="salaire" name="salaire" type="text" placeholder="Salaire" aria-label="Salaire">
                                </div>
                                
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="prerequis">Prérequis</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="prerequis" name="prerequis" type="text" required="" placeholder="Prérequis du poste" aria-label="Prerequis">
                                </div>
                                
                                <div class="mt-6">
                                    <label class=" block text-sm text-gray-600" for="description">Description</label>
                                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="description" name="description" rows="6" required="" placeholder="Saisir le description"></textarea>
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
                
                <!-- MODIFIER -->
                <div class="flex flex-wrap" style="display: none" id="edit-form">
                    <div class="w-full my-6 pr-0">
                        <p class="text-xl pb-6 flex items-center">
                            Modifier une offre
                            <a class="text-red-500 ml-6 text-sm cursor-pointer" onclick="showForm('edit-form')">Annuler</a>
                        </p>
                        
                        <div class="leading-loose">
                            <form
                                id="edit-form-real"
                                method="POST"
                                action="data-handler/edit.php?on=offres"
                                class="p-10 bg-white rounded shadow-xl"
                            >
                                <div>
                                    <label class="block text-sm text-gray-600" for="edit-intitule">Intitule</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="edit-intitule" name="edit-intitule" type="text" required="" placeholder="Intitule" aria-label="Intitule">
                                </div>
                                
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="edit-places">Places</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="edit-places" name="edit-places" type="number" required="" placeholder="Nombre de places" aria-label="Places">
                                </div>

                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="edit-salaire">Salaire</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="edit-salaire" name="edit-salaire" type="text" placeholder="Salaire" aria-label="Salaire">
                                </div>
                                
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="edit-prerequis">Prérequis</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="edit-prerequis" name="edit-prerequis" type="text" required="" placeholder="Prérequis du poste" aria-label="Prerequis">
                                </div>
                                
                                <div class="mt-6">
                                    <label class=" block text-sm text-gray-600" for="edit-description">Description</label>
                                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="edit-description" name="edit-description" rows="6" required="" placeholder="Saisir le description"></textarea>
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
