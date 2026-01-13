
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Admin</title>
    <meta name="description" content ="site Ecommerce au Bénin">
    <link rel="stylesheet" href="../css/sortie.css">
</head>
<body class="bg-gray-50 font-sans">
<?php
    if(isset($_SESSION['message'])){
        echo "<input type=\"hidden\" id=\"message\" value=\"".htmlspecialchars($_SESSION['message'])."\">";
        unset($_SESSION['message']);
    }
?>

    <header class="bg-white border-b sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 h-16 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="bg-green-500 p-1.5 rounded-lg shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <span class="text-xl font-bold tracking-tight text-gray-800">Site de <span class="text-green-500 uppercase">Dolce</span></span>
            </div>
            <a href="index.php" class="text-sm font-bold text-gray-500 hover:text-green-600 flex items-center gap-2 px-4 py-2 border border-gray-200 rounded-full transition-all bg-white hover:shadow-sm">
                &larr; Retour Boutique
            </a>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-4 py-8">
        
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-4 mb-10">
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100">
                <p class="text-[10px] font-black uppercase text-gray-400 tracking-widest">Visiteurs</p>
                <p class="text-2xl font-black text-blue-600"><?= $cpt ?? 0 ?></p>
            </div>
            <?php 
            $totalGlobal = 0;
            foreach($articles as $cat => $liste): 
                $count = count($liste);
                $totalGlobal += $count;
            ?>
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100">
                <p class="text-[10px] font-black uppercase text-gray-400 tracking-widest"><?= $cat ?></p>
                <p class="text-2xl font-black text-green-500"><?= $count ?></p>
            </div>
            <?php endforeach; ?>
            
            <div class="bg-green-500 p-5 rounded-2xl shadow-md shadow-green-100 text-white col-span-2 lg:col-span-1">
                <p class="text-[10px] font-black uppercase text-green-100 tracking-widest">Total Articles</p>
                <p class="text-2xl font-black"><?= $totalGlobal ?></p>
            </div>
        </div>

        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
            <h2 class="text-2xl font-black text-gray-800 italic">Gestion du Catalogue</h2>
            <a href="index.php?admin=me&add=add" class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-xl font-bold shadow-lg shadow-green-100 flex items-center gap-3 transition-all transform hover:-translate-y-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Nouvel Article
            </a>
        </div>

        <div class="space-y-4">
            <?php 
            // On regroupe tout pour trier par ID décroissant
            $flatArticles = [];
            foreach($articles as $cat => $items) {
                foreach($items as $i) { $i['categorie_label'] = $cat; $flatArticles[] = $i; }
            }
            usort($flatArticles, fn($a, $b) => $b['id'] <=> $a['id']);

            foreach($flatArticles as $item): 
            ?>
            <div class="bg-white p-4 rounded-2xl border border-gray-100 shadow-sm flex flex-col md:flex-row items-center justify-between gap-4 hover:border-green-300 transition-colors">
                
                <div class="flex items-center gap-4 w-full md:w-1/3">
                    <img src="imagesuploade/<?= $item['cartImg'] ?>" class="w-16 h-16 rounded-xl object-cover border-2 border-gray-50">
                    <div>
                        <h3 class="font-black text-gray-800 leading-tight"><?= htmlspecialchars($item['cartName']) ?></h3>
                        <span class="text-[10px] font-bold uppercase px-2 py-0.5 rounded bg-gray-100 text-gray-500 border border-gray-200"><?= $item['categorie_label'] ?></span>
                    </div>
                </div>

                <div class="text-center">
                    <p class="text-xs text-gray-400 font-bold uppercase">Prix</p>
                    <p class="font-black text-green-600"><?= number_format($item['prix'], 0, ',', ' ') ?> XOF</p>
                </div>

                <div class="flex gap-2 w-full md:w-auto">
                    <a href="index.php?admin=me&update=<?= $item['id'] ?>" class="flex-1 md:flex-none text-center bg-gray-100 hover:bg-green-100 text-gray-600 hover:text-green-700 px-4 py-2 rounded-xl font-bold text-sm transition-all">
                        Modifier
                    </a>
                    <a href="?admin=me&drop=<?= $item['id'] ?>" onclick="return confirm('Supprimer cet article ?')" class="flex-1 md:flex-none text-center bg-red-50 hover:bg-red-500 text-red-500 hover:text-white px-4 py-2 rounded-xl font-bold text-sm transition-all">
                        Supprimer
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </main>

    <?php if(isset($_SESSION['message'])): ?>
        <script>
            alert("<?= htmlspecialchars($_SESSION['message']) ?>");
        </script>
        <?php unset($_SESSION['message']); ?>
    <?php endif; ?>
  <script>
    alert(document.querySelector('input').value);
  </script>  
</body>
</html>