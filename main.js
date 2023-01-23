let home = document.getElementById('home');
home.addEventListener("click", function() {
    loadMain("home.php");
});

let create = document.getElementById('create');
create.addEventListener("click", function() {
    loadMain("create_set.php");
});


let cards = document.getElementById('cards');
cards.addEventListener("click", function() {
    loadMain("your_cards.php");
});

let account = document.getElementById('account');
account.addEventListener("click", function() {
    loadMain("account.php");
});

/** Used for debugging purposes */
function debug(name) {
    console.log(name);
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

