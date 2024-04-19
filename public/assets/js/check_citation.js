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

            console.log(citation_choisie.citation);
            console.log(ListeCitation.value);

            let template = document.querySelector("#temp_modif_cit");
            let clone = template.content.cloneNode(true);
            let ligne = clone.firstElementChild;
            console.log(citation_choisie.citation);
            console.log(citation_choisie.explication);
            console.log(citation_choisie.année);
            console.log(citation_choisie.id_auteur);
            ligne.querySelector("#citation").innerHTML = citation_choisie.citation;
            ligne.querySelector("#explication").innerHTML = citation_choisie.explication;
            ligne.querySelector("#annee").value = citation_choisie.année;
            ligne.querySelector("#IDauteur").value = citation_choisie.id_auteur;

        
            // Ajouter le contenu cloné au document actif
            document.body.appendChild(clone);
        })
        
    })
})