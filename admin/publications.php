<!DOCTYPE html>
<html lang="fr">
<?php include("components/head.php") ?>
<body class="bg-gray-100 font-family-karla flex">

    <?php include("components/aside.php") ?>
    <script defer>activePage("aside-publications")</script>

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">

        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="w-full text-3xl text-black pb-6">Publications</h1>

                <?php include("components/table-template.php") ?>

                <script>

                    const data = JSON.parse(<?php echo json_encode(file_get_contents("data-handler/data/publications.json"), JSON_HEX_TAG);?>);

                    setTableTitle("Liste des publications");

                    setTHead(["titre", "image", "tags", "contenu"]);

                    setTBody(data.publications, "publications", ["titre", "image", "tags", "contenu"]);

                    function showForm(formName) {
                        const doc = document.getElementById(formName);
                        doc.style.display = doc.style.display == "none" ? "block" : "none";
                    }

                    function showEdit(id) {
                        document.getElementById("edit-form").style.display = "block";

                        document.getElementById("edit-form-real").action = `data-handler/edit.php?on=publications&id=${id}`;
                        const fields = ["titre", "tags", "contenu", "date"];
                        
                        const selected = data.publications.find(i => i.id === id);

                        for (const field of fields) {
                            document.getElementById("edit-" + field).value = selected[field];
                        }
                    }

                    function deleteData(id) {
                        window.location = `data-handler/delete.php?on=publications&id=${id}`;
                    }
                </script>

                <input
                    type="button"
                    value="Créer une publication"
                    onclick="showForm('add-form')"
                    class="m-6 bg-blue-600 text-sm font-bold p-2 rounded-lg shadow text-white cursor-pointer hover:bg-blue-500 ease-in-out duration-100"
                >
                
                <div class="flex flex-wrap" style="display: none" id="add-form">
                    <div class="w-full my-6 pr-0">
                        <p class="text-xl pb-6 flex items-center">
                            Créer une publication
                            <a class="text-red-500 ml-6 text-sm cursor-pointer" onclick="showForm('add-form')">Annuler</a>
                        </p>
                        
                        <div class="leading-loose">
                            <form
                                method="POST"
                                action="data-handler/add.php?on=publications"
                                class="p-10 bg-white rounded shadow-xl"
                            >
                                <input style="display: none" id="date" name="date">
                                <div>
                                    <label class="block text-sm text-gray-600" for="titre">Titre</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="titre" name="titre" type="text" required="" placeholder="Titre" aria-label="Titre">
                                </div>
                                
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="tags">Tags</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="tags" name="tags" type="text" required="" placeholder="Tags" aria-label="Tags">
                                </div>
                                
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="image">Image</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="image" name="image" type="file" required="" placeholder="Lien image" aria-label="Image">
                                </div>
                                
                                <div class="mt-6">
                                    <label class=" block text-sm text-gray-600" for="contenu">Contenu</label>
                                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="contenu" name="contenu" rows="6" required="" placeholder="Saisir le contenu">
                                    [titre] Titre de l'article
                                        [citation] Une phrase importante
                                        [image] Une image à insérer
                                        Texte
                                    </textarea>
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
                            Modifier une publication
                            <a class="text-red-500 ml-6 text-sm cursor-pointer" onclick="showForm('edit-form')">Annuler</a>
                        </p>
                        
                        <div class="leading-loose">
                            <form
                                id="edit-form-real"
                                method="POST"
                                class="p-10 bg-white rounded shadow-xl"
                            >
                                <div>
                                    <label class="block text-sm text-gray-600" for="edit-titre">Titre</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="edit-titre" name="edit-titre" type="text" required="" placeholder="Titre" aria-label="Titre">
                                </div>
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="edit-tags">Tags</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="edit-tags" name="edit-tags" type="text" required="" placeholder="Tags" aria-label="Tags">
                                </div>
                                
                                <input style="display: none" id="edit-date" name="edit-date">
                                
                                <div class="mt-6">
                                    <label class="block text-sm text-gray-600" for="edit-image">Image</label>
                                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="edit-image" name="edit-image" type="file" required="" placeholder="Lien image" aria-label="Image">
                                </div>
                                <div class="mt-6">
                                    <label class=" block text-sm text-gray-600" for="edit-contenu">Contenu</label>
                                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="edit-contenu" name="edit-contenu" rows="6" required="" placeholder="Saisir le contenu">
                                        
                                    </textarea>
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

        <script>
            function getDate() {
                let date = new Date();
                let jour = date.getDate(); jour = jour < 10 ? "0" + jour : jour;
                let mois = date.getMonth() + 1; mois = mois < 10 ? "0" + mois : mois;
                let annee = date.getFullYear();
                const final =  jour + '/'+ mois  + '/' + annee;
                document.getElementById("date").value = final;
                document.getElementById("edit-date").value = final;
            }

            getDate();
        </script>
        
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
