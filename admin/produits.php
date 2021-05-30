<!DOCTYPE html>
<html lang="fr">
<?php include("components/head.php") ?>
<body class="bg-gray-100 font-family-karla flex">

    <?php include("components/aside.php") ?>
    <script defer>activePage("aside-produits")</script>

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
    
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="w-full text-3xl text-black pb-6">Produits</h1>
                
                <?php include("components/table-template.php") ?>
                
                <script>

                    const data = JSON.parse(<?php echo json_encode(file_get_contents("data-handler/data/produits.json"), JSON_HEX_TAG);?>);

                    setTableTitle("Liste des produits");
                    
                    setTHead(["nom", "image", "prix", "reduction", "description"]);

                    setTBody(data.produits, "produits", ["nom", "image", "prix", "reduction", "description"]);

                    function showForm(formName) {
                        const doc = document.getElementById(formName);
                        doc.style.display = doc.style.display == "none" ? "block" : "none";
                    }

                    function showEdit(id) {
                        document.getElementById("edit-form").style.display = "block";

                        document.getElementById("edit-form-real").action = `data-handler/edit.php?on=produits&id=${id}`;
                        const fields = ["nom", "prix", "reduction", "description"];
                        
                        const selected = data.produits.find(i => i.id === id);

                        for (const field of fields) {
                            document.getElementById("edit-" + field).value = selected[field];
                        }
                    }

                    function deleteData(id) {
                        window.location = `data-handler/delete.php?on=produits&id=${id}`;
                    }
                </script>

                <input
                    type="button"
                    value="Créer un produit"
                    onclick="showForm('add-form')"
                    class="m-6 bg-blue-600 text-sm font-bold p-2 rounded-lg shadow text-white cursor-pointer hover:bg-blue-500 ease-in-out duration-100"
                >
                
                <div class="flex flex-wrap" style="display: none" id="add-form">
                    <div class="w-full my-6 pr-0">
                        <p class="text-xl pb-6 flex items-center">
                            Ajouter un produit
                            <a class="text-red-500 ml-6 text-sm cursor-pointer" onclick="showForm('add-form')">Annuler</a>
                        </p>
                        
                        <div class="leading-loose">
                            <form
                                method="POST"
                                action="data-handler/add.php?on=produits"
                                class="p-10 bg-white rounded shadow-xl"
                            >
                                <input style="display: none" id="date" name="date">
                                <div>
                                    <label class="block text-sm text-gray-600" for="nom">Nom</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nom" name="nom" type="text" required="" placeholder="Nom" aria-label="Nom">
                                </div>
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="image">Image</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="image" name="image" type="file" required="" placeholder="Lien image" aria-label="Image">
                                </div>
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="prix">Prix</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="prix" name="prix" type="number" required="" placeholder="Prix" aria-label="Prix">
                                </div>
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="reduction">Réduction</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="reduction" name="reduction" type="number" required="" placeholder="Réduction" aria-label="Réduction">
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

                <div class="flex flex-wrap" style="display: none" id="edit-form">
                    <div class="w-full my-6 pr-0">
                        <p class="text-xl pb-6 flex items-center">
                            Modifier un produit
                            <a class="text-red-500 ml-6 text-sm cursor-pointer" onclick="showForm('edit-form')">Annuler</a>
                        </p>
                        
                        <div class="leading-loose">
                            <form
                                id="edit-form-real"
                                method="POST"
                                class="p-10 bg-white rounded shadow-xl"
                            >
                                <div>
                                    <label class="block text-sm text-gray-600" for="edit-nom">Nom</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="edit-nom" name="edit-nom" type="text" required="" placeholder="Nom" aria-label="Nom">
                                </div>
                                
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="edit-image">Image</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="edit-image" name="edit-image" type="file" required="" placeholder="Lien image" aria-label="Image">
                                </div>
                                
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="edit-prix">Prix</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="edit-prix" name="edit-prix" type="text" required="" placeholder="Prix" aria-label="Prix">
                                </div>
                                
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="reduction">Réduction</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="edit-reduction" name="edit-reduction" type="number" required="" placeholder="Réduction" aria-label="Réduction">
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
