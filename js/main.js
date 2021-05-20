window.onload = () => {
    let episodios = document.querySelector(".episodios");
    let h2 = document.querySelector('h2');

    episodios.addEventListener('click', function () {
        location.href = "https://anvolkova10.github.io/lasextapata/index.html";
        h2.innerText = "Episodios"
        podcastsA.classList.remove('hidden');
        podcastsB.classList.remove('hidden');
        podcastsBo.classList.remove('hidden');
        podcastsMi.classList.remove('hidden');
    });

    let ladosA = document.querySelector(".lados-a");
    let podcastsA = document.querySelector(".lado-a");

    ladosA.addEventListener('click', function() {
        h2.innerText = "Episodios - LadoA"
        podcastsA.classList.remove('hidden');
        podcastsB.classList.add('hidden');
        podcastsBo.classList.add('hidden');
        podcastsMi.classList.add('hidden');
    });
    
    let ladosB = document.querySelector(".lados-b");
    let podcastsB = document.querySelector(".lado-b");

    ladosB.addEventListener('click', function() {
        h2.innerText = "Episodios - Lado B"
        podcastsB.classList.remove('hidden');
        podcastsA.classList.add('hidden');
        podcastsBo.classList.add('hidden');
        podcastsMi.classList.add('hidden');
    });

    let bonustracks = document.querySelector(".bonustracks");
    let podcastsBo = document.querySelector(".bonustrack");

    bonustracks.addEventListener('click', function() {
        h2.innerText = "Bonustracks"
        podcastsBo.classList.remove('hidden');
        podcastsA.classList.add('hidden');
        podcastsB.classList.add('hidden');
        podcastsMi.classList.add('hidden');
    });

    let minisodes = document.querySelector(".minisodios");
    let podcastsMi = document.querySelector(".minisodio");

    minisodes.addEventListener('click', function() {
        h2.innerText = "Minisodios"
        podcastsMi.classList.remove('hidden');
        podcastsA.classList.add('hidden');
        podcastsB.classList.add('hidden');
        podcastsBo.classList.add('hidden');
    });

    let perfil = document.querySelector(".perfil");
    let opciones = document.querySelector(".opciones");
    let construccion = document.querySelector(".construccion")
    
    perfil.addEventListener('click', function() {
        construccion.classList.remove('hidden');
    })
    opciones.addEventListener('click', function() {
        construccion.classList.remove('hidden');
    })

    let cerrar = document.querySelector(".cerrar");
    
    cerrar.addEventListener('click', function() {
        construccion.classList.add("hidden");
    })
    
    

}
