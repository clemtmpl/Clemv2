var btnPopup_sport = document.getElementById('button_sport');
var overlay_sport = document.getElementById('overlay_sport');
btnPopup_sport.addEventListener('click',openMoadlsport);
function openMoadlsport() {
    overlay_sport.style.left='0';
    overlay_sport.style.position='fixed';
}

var btnclose_sport = document.getElementById('btnclose_sport');
btnclose_sport.addEventListener('click',closeModalsport);
function closeModalsport() {
    overlay_sport.style.left='-3000px';
    overlay_sport.style.position='absolute';
}

var btnPopup_mode = document.getElementById('button_mode');
var overlay_mode = document.getElementById('overlay_mode');
btnPopup_mode.addEventListener('click',openMoadlmode);
function openMoadlmode() {
    overlay_mode.style.left='0';
    overlay_mode.style.position='fixed';
}

var btnclose = document.getElementById('btnclose_mode');
btnclose.addEventListener('click',closeModalmode);
function closeModalmode() {
    overlay_mode.style.left='-3000px';
    overlay_mode.style.position='absolute';
}

var btnPopup_manga = document.getElementById('button_manga');
var overlay_manga = document.getElementById('overlay_manga');
btnPopup_manga.addEventListener('click',openMoadlmanga);
function openMoadlmanga() {
    overlay_manga.style.left='0';
    overlay_manga.style.position='fixed';
}

var btnclose_manga = document.getElementById('btnclose_manga');
btnclose_manga.addEventListener('click',closeModalmanga);
function closeModalmanga() {
    overlay_manga.style.left='-3000px';
    overlay_manga.style.position='absolute';
}

var btnPopup_japon = document.getElementById('button_japon');
var overlay_japon = document.getElementById('overlay_japon');
btnPopup_japon.addEventListener('click',openMoadljapon);
function openMoadljapon() {
    overlay_japon.style.left='0';
    overlay_japon.style.position='fixed';
}

var btnclose_japon = document.getElementById('btnclose_japon');
btnclose_japon.addEventListener('click',closeModaljapon);
function closeModaljapon() {
    overlay_japon.style.left='-3000px';
    overlay_japon.style.position='absolute';
}
