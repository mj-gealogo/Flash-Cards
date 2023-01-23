function yourCards() {
    let folders = document.getElementsByClassName("folder");

    for (let folder of folders) {
        folder.addEventListener("click", function() {
            setCookie('table_id', folder.id, 1);
            loadMain("open_set.php");
        });
    }
}

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
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