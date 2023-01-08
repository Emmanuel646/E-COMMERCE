function activeConfirme() {
    alert('Votre produit vient de s\'ajouter sur votre site internet !');
}

function connectConfirme() {
    alert('Bienvenue sur votre compte utilisateur sur Info - Jeux 64 😀 ');
}

function disconnectConfirme() {
    alert('A Bientot sur notre site Info - Jeux 64 😪 ');
}

function bonneAnnee() {
    window.alert('BIENVENUE SUR NOTRE SITE 😀 INFO - JEUX 64 😀 ET 🎉 BONNE ANNEE 2023 🎉');
}

//fonction diaporama

let compteur = 0;

let timer, elements, slides, slideWidth;

window.onload = () => {
    //recupération du diaporama
    const diapo = document.querySelector(".diapo");

    elements = document.querySelector(".elements");

    // clone first image

    let firstImage = elements.firstElementChild.cloneNode(true);

    // injecter le clone à la fin

    elements.appendChild(firstImage);

    slides = Array.from(elements.children);

    // largeur une diapo

    slideWidth = diapo.getBoundingClientRect().width;

    //récupération flèches

    let next = document.querySelector("#nav-droite");
    let prev = document.querySelector("#nav-gauche");

    next.addEventListener("click", slideNext);
    prev.addEventListener("click", slidePrev);
}


//fonction défilement vers la droite

function slideNext(){
    compteur++;
    elements.style.transition = "2s linear";

    let decal = -slideWidth * compteur;
    elements.style.transform = `translateX(${decal}px)`;

    // fin de transition et rembobinage

    setTimeout(function(){
        if(compteur >= slides.length -1) {
            compteur = 0;
            elements.style.transition = "unset";
            elements.style.transform = "translateX(0)";
            
        }
    }, 2000);
}

//fonction défilement vers la gauche
function slidePrev(){
    compteur--;
    elements.style.transition = "2s linear";

    if(compteur < 0) {
        compteur = slides.length - 1;
        let decal = -slideWidth * compteur;
        elements.style.transition = "unset";
        elements.style.transform = `translateX(${decal}px)`;
        setTimeout(slidePrev, 1);
    }
    let decal = -slideWidth * compteur;
    elements.style.transform = `translateX(${decal}px)`;
}

// automatiser le défilement
    timer = setInterval(slideNext, 5000);
