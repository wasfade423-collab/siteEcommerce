<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add article Page | Admin</title>
    <meta name="description" content ="site Ecommerce au Bénin">
    <link rel="stylesheet" href="../css/sortie.css">
</head>
<body class="bg-gray-50 font-sans antialiased">

    <header class="bg-white border-b sticky top-0 z-50">
        <div class="max-w-5xl mx-auto px-4 h-16 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="bg-green-500 p-2 rounded-xl text-white shadow-lg shadow-green-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </div>
                <span class="text-xl font-bold text-gray-800 tracking-tight">Nouvel <span class="text-green-500 uppercase">Article</span></span>
            </div>
            <a href="../index.php?admin=me&dash=dash" class="text-sm font-bold text-gray-400 hover:text-red-500 transition-all">Annuler</a>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-4 py-10">

        <?php if(isset($_SESSION['message'])): ?>
            <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 font-bold rounded shadow-sm">
                <?= htmlspecialchars($_SESSION['message']); unset($_SESSION['message']); ?>
            </div>
        <?php endif; ?>

        <form action="" method="post" enctype="multipart/form-data" class="bg-white shadow-2xl shadow-green-900/5 rounded-3xl overflow-hidden border border-gray-100">
            
            <div class="p-8 border-b border-gray-50 bg-green-50/20">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                    <div class="flex flex-col items-center gap-3">
                        <div class="w-40 h-40 rounded-3xl border-2 border-dashed border-green-200 bg-white flex items-center justify-center overflow-hidden relative group">
                            <img id="preview" src="#" class="hidden w-full h-full object-cover">
                            <div id="placeholder" class="text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-200 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        <input type="file" name="cartImg" id="img" required class="text-[10px] text-gray-400 file:bg-green-50 file:text-green-700 file:border-0 file:rounded-full file:px-3 file:py-1 file:font-bold cursor-pointer">
                    </div>

                    <div class="md:col-span-2 space-y-4">
                        <div>
                            <label class="block text-[10px] font-black uppercase text-gray-400 tracking-widest mb-1">Nom du produit</label>
                            <input type="text" name="nomP" id="nomP" required class="w-full px-5 py-3 rounded-xl border-gray-100 border-2 focus:border-green-500 outline-none font-bold" placeholder="Ex: Dolce Bass X1">
                        </div>
                        <div>
                            <label class="block text-[10px] font-black uppercase text-gray-400 tracking-widest mb-1">Prix (XOF)</label>
                            <input type="number" name="prix" id="prix" required class="w-full px-5 py-3 rounded-xl border-gray-100 border-2 focus:border-green-500 outline-none font-black text-green-600 text-xl" placeholder="0">
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-8 grid grid-cols-1 md:grid-cols-2 gap-8 text-sm">
                <div class="space-y-6">
                    <div>
                        <label class="block text-[10px] font-black uppercase text-gray-400 tracking-widest mb-3">Statut</label>
                        <div class="flex gap-2">
                            <?php foreach(['Nouveau', 'Populaire', 'Limité'] as $status): ?>
                                <label class="flex-1">
                                    <input type="radio" name="status" value="<?= $status ?>" required class="hidden peer">
                                    <div class="text-center py-2 rounded-xl border-2 border-gray-50 bg-gray-50/50 peer-checked:border-green-500 peer-checked:bg-white peer-checked:text-green-600 font-bold text-gray-400 cursor-pointer transition-all">
                                        <?= $status ?>
                                    </div>
                                </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div>
                        <label class="block text-[10px] font-black uppercase text-gray-400 tracking-widest mb-3">Évaluation</label>
                        <div class="grid grid-cols-3 gap-2">
                            <input type="number" name="nbreyellow" placeholder="Jaunes" class="bg-gray-50 p-3 rounded-xl border border-gray-100 outline-none focus:border-yellow-400">
                            <input type="number" name="nbreboth" placeholder="Demi" class="bg-gray-50 p-3 rounded-xl border border-gray-100 outline-none focus:border-green-400">
                            <input type="number" name="nbrevide" placeholder="Vides" class="bg-gray-50 p-3 rounded-xl border border-gray-100 outline-none focus:border-gray-400">
                        </div>
                    </div>
                </div>

                <div class="flex flex-col">
                    <label class="block text-[10px] font-black uppercase text-gray-400 tracking-widest mb-1">Description</label>
                    <textarea name="description" id="description" class="flex-1 w-full p-4 rounded-xl border-gray-100 border-2 focus:border-green-500 outline-none resize-none text-gray-600" placeholder="Caractéristiques..."></textarea>
                </div>
            </div>

            <div class="px-8 pb-8">
                <label class="block text-[10px] font-black uppercase text-gray-400 tracking-widest mb-4">Gestion des Couleurs</label>
                <div class="p-6 border-2 border-gray-50 rounded-2xl bg-gray-50/30">
                    <div id="liste-checkbox-couleurs" class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-6">

                    </div>

                    <div class="flex flex-wrap md:flex-nowrap gap-2 items-center border-t pt-4">
                        <input type="text" id="new-color-name" placeholder="Nom de couleur" class="flex-1 border p-2 text-xs rounded-xl outline-none focus:border-green-500">
                        <input type="color" id="new-color-value" class="h-9 w-12 cursor-pointer border-0 bg-transparent">
                        <button type="button" onclick="ajouterCouleurManuelle()" class="bg-gray-900 text-white px-4 py-2 rounded-xl text-xs font-bold hover:bg-green-600 transition-all">
                            + Ajouter
                        </button>
                    </div>
                </div>
            </div>

            <div class="p-8 bg-gray-50 border-t flex justify-end">
                <button type="submit" class="cursor-pointer w-full md:w-auto bg-green-500 hover:bg-green-600 text-white px-12 py-4 rounded-2xl font-black uppercase tracking-widest shadow-xl shadow-green-200 transition-all">
                    Publier l'article
                </button>
            </div>
        </form>
    </main>

    <script>
        // 1. Fonction pour l'aperçu de l'image
        const imgInput = document.getElementById('img');
        const preview = document.getElementById('preview');
        const placeholder = document.getElementById('placeholder');

        imgInput.onchange = () => {
            const [file] = imgInput.files;
            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('hidden');
                placeholder.classList.add('hidden');
            }
        };

        // 2. Catalogue de couleurs prédéfinies pour Dolce
        const catalogueCouleurs = [
            { nom: "Noir", value: "black" },
            { nom: "Blanc", value: "white" },
            { nom: "Bleu nuit", value: "navy" },
            { nom: "Rouge", value: "red" },
            { nom: "Gris Titane", value: "slategray" },
            { nom: "Vert", value: "green" },
            { nom: "Or 24K", value: "gold" },
            { nom: "Argent", value: "silver" },
            { nom: "Cuivre Poli", value: "peru" },
            { nom: "Noyer", value: "brown" }
        ];

        // 3. Fonction pour générer la liste au chargement
        function genererCatalogue() {
            const conteneur = document.getElementById('liste-checkbox-couleurs');
            
            catalogueCouleurs.forEach(c => {
                const div = document.createElement('label');
                div.className = "flex items-center gap-2 p-2 bg-white rounded-lg border cursor-pointer hover:border-green-300 transition-all";
                
                // On stocke l'objet JSON complet dans la value
                const jsonValue = JSON.stringify(c);
                
                div.innerHTML = `
                    <input type="checkbox" name="couleurs[]" value='${jsonValue}' class="accent-green-500 w-4 h-4">
                    <div class="w-3 h-3 rounded-full border shadow-sm" style="background-color: ${c.value}"></div>
                    <span class="text-xs font-bold text-gray-600">${c.nom}</span>
                `;
                conteneur.appendChild(div);
            });
        }

        // 4. Fonction pour ajouter une couleur TOTALEMENT personnalisée
        function ajouterCouleurManuelle() {
            const nom = document.getElementById('new-color-name').value;
            const valeur = document.getElementById('new-color-value').value;
            const conteneur = document.getElementById('liste-checkbox-couleurs');

            if (nom.trim() === "") {
                alert("Donnez un nom à la couleur");
                return;
            }

            const objetCouleur = JSON.stringify({ nom: nom, value: valeur });

            const div = document.createElement('label');
            div.className = "flex items-center gap-2 p-2 bg-white rounded-lg border border-blue-500 shadow-sm animate-pulse";
            div.innerHTML = `
                <input type="checkbox" name="couleurs[]" value='${objetCouleur}' checked class="w-4 h-4 accent-blue-500">
                <div class="w-3 h-3 rounded-full" style="background-color: ${valeur}"></div>
                <span class="text-xs font-bold text-blue-600">${nom}</span>
            `;

            conteneur.appendChild(div);
            document.getElementById('new-color-name').value = ""; // Reset champ
        }

        // Lancement de la génération du catalogue au démarrage
        document.addEventListener('DOMContentLoaded', genererCatalogue);
    </script>
</body>
</html>