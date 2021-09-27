const kiri = document.querySelector(".kiri"),
    kanan = document.querySelector(".kanan"),
    bar = document.querySelector(".bar"),
    editor = document.querySelector(".editor"),
    run = document.querySelector(".run-btn"),
    iframe = document.querySelector(".iframe");

const drag = (e) => {
    e.preventDefault();
    document.selection ? documen.selcetion.empty() :
        window.getSelection().removeAllRanges();
    kiri.style.width = (e.pageX - bar.offsetWidth / 3) + "px";
    editor.resize();
}
bar.addEventListener("mousedown", () => {
    document.addEventListener("mousemove", drag);
})
bar.addEventListener("mouseup", () => {
    document.removeEventListener("mousemove", drag);
})
// tombol run
run.addEventListener("click", () => {
    console.log("ommaleka");
    const html = editor.textContent;
    iframe.style.color = ("white");
    iframe.src = "data:text/html;charset=utf-8," + encodeURI
        (html);
})