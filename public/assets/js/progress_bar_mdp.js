class progressBar {
    constructor(element, barre, niveau1, niveau2, niveau3){
        this.element = element,
        this.barre = barre,
        this.niveau1 = niveau1,
        this.niveau2 = niveau2,
        this.niveau3 = niveau3
    }
}


function ProgressBar(progressBar){

    progressBar.element.addEventListener("input", function(e){
        if(progressBar.niveau1.test(progressBar.element.value) == true){
            width = 33
            bar.style.width = width + "%"
            bar.innerHTML = "Acceptable"
            progressBar.barre.classList.remove('bg-warning');
            progressBar.barre.classList.add('bg-danger');
        }
    
        if(progressBar.niveau2.test(progressBar.element.value) == true){
            width = 66
            progressBar.barre.style.width = width + "%"
            progressBar.barre.classList.remove('bg-danger');
            progressBar.barre.classList.add('bg-warning');
            progressBar.barre.innerHTML = "Moyen"
        } 
    
        if(progressBar.niveau3.test(progressBar.element.value) == true){
            width = 100
            progressBar.barre.style.width = width + "%"
            progressBar.barre.classList.remove('bg-warning');
            progressBar.barre.classList.add('bg-success');
            progressBar.barre.innerHTML = "Fort"
        } 
    
    })

}

const bar = document.querySelector('#bar');
const pwd_bar = document.querySelector('#pwd')

const expressionReguliereMdpFaible = /^(?=(?:.*[A-Z]){1,})(?=(?:.*[a-z]){1,})(?=(?:.*[\W_]){1,}).{6,}$/
const expressionReguliereMdpMoyen = /^(?=(?:.*[A-Z]){2,})(?=(?:.*[a-z]){2,})(?=(?:.*[\W_]){2,}).{8,}$/
const expressionReguliereMdpFort = /^(?=(?:.*[A-Z]){3,})(?=(?:.*[a-z]){3,})(?=(?:.*[\W_]){3,}).{10,}$/

let barreMdp = new progressBar (pwd_bar, bar, expressionReguliereMdpFaible, expressionReguliereMdpMoyen, expressionReguliereMdpFort)

ProgressBar(barreMdp)

// pwd_bar.addEventListener("input", function(e){
//     if(expressionReguliereMdpFaible.test(pwd_bar.value) == true){
//         width = 33
//         bar.style.width = width + "%"
//         bar.innerHTML = "Acceptable"
//     }

//     if(expressionReguliereMdpMoyen.test(pwd_bar.value) == true){
//         width = 66
//         bar.style.width = width + "%"
//         bar.classList.remove('bg-danger');
//         bar.classList.add('bg-warning');
//         bar.innerHTML = "Moyen"
//     } 

//     if(expressionReguliereMdpFort.test(pwd_bar.value) == true){
//         width = 100
//         bar.style.width = width + "%"
//         bar.classList.remove('bg-warning');
//         bar.classList.add('bg-success');
//         bar.innerHTML = "Fort"
//     } 

// })


