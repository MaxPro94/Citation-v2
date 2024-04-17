const add_auteur = document.querySelector("#auteur")
const choix_auteur = document.querySelector("#choix_auteur")

const add_citation = document.querySelector("#citation")

add_auteur.addEventListener("blur", function(){
    fetch("/api.php?action=check-citation&add_auteur=" + this.value)
    .then(function(response){
       return response.json()
    })
    .then(function(resultat){
        const ListeAuteur = document.querySelector('#liste')
        ListeAuteur.innerHTML = ""

        resultat.forEach(auteur => {
            let newAuteur = document.createElement('option')
            newAuteur.value = auteur.nom;
            newAuteur.innerHTML = auteur.nom + " " + auteur.prenom
            ListeAuteur.appendChild(newAuteur)

            
        });
    })
})