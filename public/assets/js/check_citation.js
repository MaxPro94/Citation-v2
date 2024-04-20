const choix_auteur = document.querySelector("#select_aut")

const add_citation = document.querySelector("#citation")

choix_auteur.addEventListener("change", function(){
    fetch("/api.php?action=check-citation&add_auteur=" + this.value)
    .then(function(response){
       return response.json()
    })
    .then(function(resultat){
        const ListeCitation = document.querySelector('#select_cita')

        console.log(resultat);
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

            console.log(citation_choisie.citation);
            console.log(ListeCitation.value);

            updateIdCitation.value = IDcitation
            citation.innerHTML = citation_choisie.citation;
            explication.innerHTML = citation_choisie.explication;
            annee.value = citation_choisie.année;
            IDauteur.value = citation_choisie.id_auteur;


        })
        
    })
})