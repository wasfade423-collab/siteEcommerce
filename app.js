// 📌 Données des climats
const climates = [
    {
        pays: "Bénin",
        region: "Afrique de l'Ouest",
        type: "Climat tropical",
        description: "Températures élevées toute l'année avec saisons sèche et pluvieuse."
    },
    {
        pays: "Canada",
        region: "Amérique du Nord",
        type: "Climat continental",
        description: "Hivers très froids et étés modérés."
    },
    {
        pays: "France",
        region: "Europe",
        type: "Climat tempéré",
        description: "Saisons bien marquées avec des températures modérées."
    },
    {
        pays: "Égypte",
        region: "Afrique du Nord",
        type: "Climat désertique",
        description: "Très chaud et sec avec peu de précipitations."
    },
    {
        pays: "Brésil",
        region: "Amérique du Sud",
        type: "Climat équatorial",
        description: "Chaud et humide toute l'année."
    }
];

const container = document.getElementById("climate-container");
const searchInput = document.getElementById("search");

// 📌 Fonction d'affichage
function afficherClimats(liste) {
    container.innerHTML = "";

    if (liste.length === 0) {
        container.innerHTML = "<p>Aucun résultat trouvé.</p>";
        return;
    }

    liste.forEach(climat => {
        const div = document.createElement("div");
        div.className = "climate-card";

        div.innerHTML = `
            <h3>${climat.pays}</h3>
            <p><strong>Région :</strong> ${climat.region}</p>
            <p><strong>Type :</strong> ${climat.type}</p>
            <p>${climat.description}</p>
        `;

        container.appendChild(div);
    });
}

// 📌 Recherche dynamique
searchInput.addEventListener("input", () => {
    const valeur = searchInput.value.toLowerCase();

    const resultat = climates.filter(climat =>
        climat.pays.toLowerCase().includes(valeur) ||
        climat.region.toLowerCase().includes(valeur) ||
        climat.type.toLowerCase().includes(valeur)
    );

    afficherClimats(resultat);
});

// 📌 Affichage initial
afficherClimats(climates);
