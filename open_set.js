// let qs = new URLSearchParams(window.location.search);
// let id = qs.get("id");

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  function openSet() {
    let cookie = document.cookie;
    let card_array = getCookie("card_array");
    console.log(card_array);
    card_array = JSON.parse(card_array);
    console.log(card_array);
  
    let counter = 0;
    let max_counter = card_array.length;
    let nextBtn = document.getElementById('nextBtn');
    let prevBtn = document.getElementById('prevBtn');
  
    let flip_card_front = document.getElementById('flip-card-front');
    let flip_card_back = document.getElementById('flip-card-back');
  
    if (max_counter > 0) {
      flip_card_front.innerText = card_array[counter].question;
      flip_card_back.innerText = card_array[counter].answer;
    }
  
  
    prevBtn.addEventListener("click", function() {
      if (counter > 0) {
          counter -= 1;
      }
      flip_card_front.innerText = card_array[counter].question;
      flip_card_back.innerText = card_array[counter].answer;
    });
  
  
    nextBtn.addEventListener("click", function() {
      if (counter < max_counter-1) {
          counter += 1;
      }
      flip_card_front.innerText = card_array[counter].question;
      flip_card_back.innerText = card_array[counter].answer;
    });
  
  }
