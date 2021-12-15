let body = document.getElementById('body');

function load() {
    for (i = 0; i < 24; i++) {
        body.innerHTML += `<div class="kugel" onclick="react(this)" name="${i + 1}" id="kugelnr${i + 1}"> <img src="./img/kugel.svg" alt="Kugel"> <h1 id="h1${i + 1}">${i + 1}</h1> </div>`;
    }
    for (i = 0; i < 24; i++) {
        let kugel = document.getElementById(`kugelnr${i+1}`);
        kugel.innerHTML += `<div class="strich" id="strichnr${i+1}"></div>`;
        let strich = document.getElementById(`strichnr${i+1}`);
        console.log(strich.style.height + kugel.offsetTop);
        let temp01 = 50+kugel.offsetTop;
        let temp = temp01+'px';
        strich.style.height= temp;
        temp01 = kugel.offsetHeight;
        temp = temp01+'px';
        strich.style.bottom= temp;
    }
}
load();

function react(elem) {
    let date = new Date();
    if (elem.children[1].innerHTML <= date.getDate()) {
        fetch(`./data.php?date=${elem.children[1].innerHTML}`)
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                let h1 = document.getElementById(`h1${elem.children[1].innerHTML}`);
                h1.innerHTML = `${data}`;
                h1.style.fontSize = "10px";
                h1.style.fontFamily = "Open Sans, sans-serif";
                h1.style.margin = "3px";
            })
            .catch((error) => {
                console.log('[ERROR]: ', error);
            });

    }
}