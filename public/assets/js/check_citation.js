const choix_auteur = document.querySelector("#select_aut")

const add_citation = document.querySelector("#citation")

choix_auteur.addEventListener("blur", function(){
    fetch("/api.php?action=check-citation&add_auteur=" + this.value)
    .then(function(response){
       return response.json()
    })
    .then(function(resultat){
        const ListeCitation = document.querySelector('#select_cita')


        resultat.forEach(choix_citation => {
            let newCitation = document.createElement('option')
            newCitation.value = choix_citation.id_citations;
            newCitation.innerHTML = choix_citation.citation
            ListeCitation.appendChild(newCitation)
        });
    })
})