// cambiar la foto de producto
let fotoSrc = document.getElementById("foto-producto-src");
const fotosSrc = document.querySelectorAll(".fotos-productos-src");

for (const fotos of fotosSrc) {
    fotos.addEventListener("click", () => {
        fotoSrc.src = fotos.currentSrc;
    });
}
