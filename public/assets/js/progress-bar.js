let start = 0;
let end = 100;
let sec = 0;

let step = Math.ceil(end / 10);

const bar = document.querySelector('#blips .progress-bar');

setInterval(() => {
    start += step;
    sec += 1;
    bar.style.width = start + '%';
    bar.innerHTML = sec + ' sec';
}, 1000);