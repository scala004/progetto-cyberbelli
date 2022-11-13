// get element from html

let div = document.getElementById("divisore");

// definizione classi

class Post {
  constructor(scuola, imgRef, videoRef, descrizione) {
    this.scuola = scuola;
    this.imgRef = imgRef;
    this.videoRef = videoRef;
    this.descrizione = descrizione;
  }
  print() {
    return `
    <div class="post">
      <div class="head">
        <div class="avatar">
          <img src="${this.imgRef}" alt="avatar">
        </div>
        <div class="scuola"><p>${this.scuola}</p></div>
      </div>
      <div class="media">
        <video controls>
          <source src="${this.videoRef}" type="video/mp4">
        </video>
      </div>
      <div class="content">
        <p>${this.descrizione}
        </p>
        <div class="dataPost"><p>${Date()}</p></div>
      </div>
    </div>
          `;
  }
}

// codice

let posts = [
  new Post(
    "ITT Giorgi - Brindisi",
    "",
    "",
    "Scuola Aperta. Domenica mattina 6 Novembre 2022, dalle ore 10:00 alle ore 12:00, avrà luogo la prima apertura dell’Istituto alla cittadinanza: “Anteprima ScuolAperta”. Studenti e genitori potrannovisitare e conoscere le peculiarità dell’ITT Giorgi attraverso un tour guidato che li accompagnerà ascoprire, oltre agli indirizzi di studio offerti dalla scuola, la struttura scolastica e i suoi laboratori ed inoltre si avrà la possibilità di incontrare la Dirigente Scolastica e diversi docenti. L’ingresso è libero e non occorre prenotazione."
  ),
  new Post(
    "ITT Giorgi - Brindisi",
    "",
    "",
    "Scuola Aperta. Domenica mattina 6 Novembre 2022, dalle ore 10:00 alle ore 12:00, avrà luogo la prima apertura dell’Istituto alla cittadinanza: “Anteprima ScuolAperta”. Studenti e genitori potrannovisitare e conoscere le peculiarità dell’ITT Giorgi attraverso un tour guidato che li accompagnerà ascoprire, oltre agli indirizzi di studio offerti dalla scuola, la struttura scolastica e i suoi laboratori ed inoltre si avrà la possibilità di incontrare la Dirigente Scolastica e diversi docenti. L’ingresso è libero e non occorre prenotazione."
  ),
];
for (let post of posts) {
  div.innerHTML += post.print();
}


