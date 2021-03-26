const items = [
  [
    "001",
    "Keyboard Logitek",
    60000,
    "Keyboard yang mantap untuk kantoran",
    "logitek.jpg",
  ],
  ["002", "Keyboard MSI", 300000, "Keyboard gaming MSI mekanik", "msi.jpg"],
  [
    "003",
    "Mouse Genius",
    50000,
    "Mouse Genius biar lebih pinter",
    "genius.jpeg",
  ],
  ["004", "Mouse Jerry", 30000, "Mouse yang disukai kucing", "jerry.jpg"],
];

const field = document.querySelector(`#listBarang`);
tampil();

formItem.addEventListener("submit", (e) => {
  e.preventDefault();

  const keywowrd = document.querySelector("#keyword").value;
  render = ``;
  tampil(keywowrd);
});

function tampil(keyword = null) {
  let render = ``;
  for (let i = 0; i < items.length; i++) {
    if (keyword != null) {
      let Nama = items[i][1].split(" ")[0];
      let nama = Nama.toLowerCase();
      if (keyword != Nama && keyword != nama) {
        continue;
      }
    }
    render += `<div class="card col-md-4 mt-2" style="width: 18rem;">
                   <img src="public/img/${items[i][4]}" class="card-img-top" alt="${items[i][4]}">
                   <div class="card-body">
                   <h5 class="card-title">${items[i][1]}</h5>
                   <p class="card-text">${items[i][3]}</p>
                   <p class="card-text">Rp. ${items[i][2]}</p>
                   <a href="javascript:void(0)" class="btn btn-primary" id="addCart">Tambahkan ke keranjang</a>
                   </div>
                </div>`;
  }

  field.innerHTML = render;
}

const tblTambah = document.querySelectorAll(`#addCart`);

for (let i = 0; i < tblTambah.length; i++) {
  tblTambah[i].addEventListener("click", () => {
    let tambah = document.querySelector(`#cart`);
    let tambahIsi = tambah.textContent;
    let keranjang = parseInt(tambahIsi[1]) + 1;
    tambah.innerHTML = `<i class="fas fa-shopping-cart"></i>(${keranjang})`;
  });
}
