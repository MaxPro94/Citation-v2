const choix_auteur = document.querySelector("#select_aut")

const add_citation = document.querySelector("#citation")

choix_auteur.addEventListener("change", function(){



    fetch("/api.php?action=check-citation&add_auteur=" + this.value)
    .then(function(response){
       return response.json()
    })
    .then(function(resultat){

        const ListeCitation = document.querySelector('#select_cita')
        ListeCitation.innerHTML = "";
        resultat.forEach(choix_citation => {
            let newCitation = document.createElement('option')
            newCitation.value = choix_citation.id_citations;
            newCitation.innerHTML = choix_citation.citation
            ListeCitation.appendChild(newCitation)
        });


        ListeCitation.addEventListener("change", function(e){

            const IDcitation = parseInt(ListeCitation.value)
            const citation_choisie = resultat.find(citation => citation.id_citations === IDcitation)
            const citation = document.querySelector("#citation")
            const explication = document.querySelector("#explication")
            const annee = document.querySelector("#annee")
            const IDauteur = document.querySelector("#IDauteur")
            const updateIdCitation = document.querySelector("#id_citation")


            updateIdCitation.value = IDcitation
            citation.innerHTML = citation_choisie.citation;
            explication.innerHTML = citation_choisie.explication;
            annee.value = citation_choisie.année;
            IDauteur.value = citation_choisie.id_auteur;

        })

        
    })

})

const choix_philosophe = document.querySelector("#select_auteur")

choix_philosophe.addEventListener("change", function(e){

    fetch("/api.php?action=check-citation&add_auteur=" + this.value)
    .then(function(response){
        return response.json()
    })
    .then(function(resultat_cita){
        const citation_to_delete = document.querySelector("#select_citation")
        citation_to_delete.innerHTML = "";
        resultat_cita.forEach(citation_delete => {
            let citations_choice = document.createElement('option')

            citations_choice.value = citation_delete.id_citations
            citations_choice.innerHTML = citation_delete.citation
            citation_to_delete.appendChild(citations_choice)
        })

    })
})

