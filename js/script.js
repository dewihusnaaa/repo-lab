function myFunction() {
    alert("Terimakasih, Pesan Telah Terkirim!");
}

const hamBurger = document.querySelector(".toggle-btn");
hamBurger.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
});
function populateEditModal(id, nama, ruang, tanggal, waktu, deskripsi) {
    document.getElementById("editId").value = id;
    document.getElementById("editNamaMhs").value = nama;
    document.getElementById("editRuangKelas").value = ruang;
    document.getElementById("editTanggal").value = tanggal;
    document.getElementById("editWaktu").value = waktu;
    document.getElementById("editDeskripsi").value = deskripsi;
}
