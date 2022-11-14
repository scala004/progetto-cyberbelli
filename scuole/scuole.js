// get element from html

let div = document.getElementById("divisore");

// definizione classi

class Scuola {
  constructor(id, nome, telefono, email, logo, descrizione, sito, indirizzo) {
    this.id = id;
    this.nome = nome;
    this.telefono = telefono;
    this.email = email;
    this.logo = logo;
    this.descrizione = descrizione;
    this.sito = sito;
    this.indirizzo = indirizzo;
  }
  print() {
    return `
    <div class="container_post">
      <div class="head">
        <div class="avatar">
          <img src="${this.imgRef}" alt="avatar">
        </div>
        <div class="username_scuola"><p>${this.nome}</p></div>
      </div>
      <div class="content_scuola">
        <div class="descrizione">
          <p>${this.descrizione}
          </p>
        </div>
        <div class="link_scuola"><a href="${this.sito}" target="_blank"><b>Vai al sito ufficiale</b></a></a></div>
      </div>
    </div>
        `;
  }
}

// codice

let scuole = [
  new Scuola(
    "sg18367",
    "itt giorgi",
    3928429331,
    "acaprdfd",
    "",
    "istituto tecnico tecnologico",
    "https://www.ittgiorgi.edu.it/",
    "via amalfi 6"
  ),
  new Scuola(
    "sg18367",
    "itt giorgi",
    3928429331,
    "acaprdfd",
    "",
    "istituto tecnico tecnologico",
    "https://www.ittgiorgi.edu.it/",
    "via amalfi 6"
  ),
];
for (let scuola of scuole) {
  div.innerHTML += scuola.print();
}
