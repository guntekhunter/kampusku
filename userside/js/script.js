const kiri = document.querySelector(".kiri"),
    kanan = document.querySelector(".kanan"),
    bar = document.querySelector(".bar"),
    editor = document.querySelector(".editor"),
    run = document.querySelector(".run-btn"),
    iframe = document.querySelector(".iframe"),
    dark = document.querySelector(".dark-btn"),
    light = document.querySelector(".light-btn");

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
    const html = editor.textContent;
    iframe.style.color = ("white");
    iframe.src = "data:text/html;charset=utf-8," + encodeURI
        (html);
})
// sets dark mode

dark.addEventListener("click", () => {
    editor.style.backgroundColor = "#363836";
    editor.style.color = "#eee";
})

// set light mode
light.addEventListener("click", () => {
    editor.style.backgroundColor = "";
    editor.style.color = "";
})