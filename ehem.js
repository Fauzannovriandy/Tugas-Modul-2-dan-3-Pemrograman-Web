let ayamgoreng = document.querySelector(".ayamgoreng");
const jumlahbeliayamgoreng = document.querySelector(".jumlahBeliayamgoreng");

let ayambakar = document.querySelector(".ayambakar");
const jumlahbeliayambakar = document.querySelector(".jumlahBeliayambakar");

let bebekgoreng = document.querySelector(".bebekgoreng");
const jumlahbelibebekgoreng = document.querySelector(".jumlahBelibebekgoreng");

const hasil = document.querySelector("#total");

const proses = document.querySelector('input[type="button"]');
proses.addEventListener("click", function () {
  let hargaayamgoreng = 15000;
  let hargaayambakar = 17000;
  let hargabebekgoreng = 20000;

  if (
    ayamgoreng.checked === false &&
    bebekgoreng.checked === false &&
    ayambakar.checked === false
  ) {
    alert("Check barang terlebih dahulu!");
  }

  if (
    ayamgoreng.checked === true &&
    ayambakar.checked === true &&
    bebekgoreng.checked === true
  ) {
    hasil.value =
      hargaayamgoreng * jumlahbeliayamgoreng.value +
      hargaayambakar * jumlahbeliayambakar.value +
      hargabebekgoreng * jumlahbelibebekgoreng.value;
  } else if (ayamgoreng.checked === true && ayambakar.checked === true) {
    hasil.value =
      hargaayamgoreng * jumlahbeliayamgoreng.value +
      hargaayambakar * jumlahbeliayambakar.value;
  } else if (ayamgoreng.checked === true && bebekgoreng.checked === true) {
    hasil.value =
      hargaayamgoreng * jumlahbeliayamgoreng.value +
      hargabebekgoreng * jumlahbelibebekgoreng.value;
  } else if (ayambakar.checked === true && bebekgoreng.checked === true) {
    hasil.value =
      hargaayambakar * jumlahbeliayambakar.value +
      hargabebekgoreng * jumlahbelibebekgoreng.value;
  } else if (ayamgoreng.checked === true) {
    hargaayamgoreng *= jumlahbeliayamgoreng.value;
    hasil.value = hargaayamgoreng;
  } else if (ayambakar.checked === true) {
    hargaayambakar *= jumlahbeliayambakar.value;
    hasil.value = hargaayambakar;
  } else if (bebekgoreng.checked === true) {
    hargabebekgoreng *= jumlahbelibebekgoreng.value;
    hasil.value = hargabebekgoreng;
  }
});
