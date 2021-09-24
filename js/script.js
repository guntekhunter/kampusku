const kiri = document.querySelector(".kiri"),
    kanan = document.querySelector(".kanan"),
    bar = document.querySelector(".bar"),
    editor = document.querySelector(".editor")

const drag = (e) => {
    e.preventDefault();
    document.selection ? documen.selcetion.empty() :
        window.getSelection().removeAllRanges();
    kiri.style.width = (e.pageX - bar.offsetWidth / 3) + "px";
    editor.resize();
}
bar.addEventListener("mousedown", () => {
    document.addEventListener("mousemove", drag);
    document.style.width = (auto);
})
bar.addEventListener("mouseup", () => {
    document.removeEventListener("mousemove", drag);
})