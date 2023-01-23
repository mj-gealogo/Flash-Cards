function createSet() {
    let createSetBtn = document.getElementById('createSetBtn');
    createSetBtn.addEventListener("click", function() {
    toggle();
    nameSet();
});
}

function nameSet() {
    let nameSetBtn = document.getElementById('nameSetBtn');
    nameSetBtn.addEventListener("click", function() {
        loadMain("create_card.php");
        console.log("Hi");
    });
}

function toggle() {
    let blur = document.getElementById('blur');
    blur.classList.toggle('active');

    let popup = document.getElementById('popup');
    popup.classList.toggle('active');
}

/**
  * @param {String} url - address for the HTML to fetch
  * @return {String} the resulting HTML string fragment
  */
async function fetchHtmlAsText(url) {
    return await (await fetch(url)).text();
}

// this is your `load_home() function`
async function loadMain(phplink) {
    const contentDiv = document.getElementById("main");
    contentDiv.innerHTML = await fetchHtmlAsText(phplink);
}
