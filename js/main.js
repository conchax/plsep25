
/* copy url */

function getlink() {
  var aux = document.createElement("input");
  aux.setAttribute("value", window.location.href.split("?")[0].split("#")[0]);
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  document.body.removeChild(aux);
  var css = document.createElement("style");
  var estilo = document.createTextNode(
    "#aviso {position:fixed; z-index: 9999999; top:30%;left:50%;margin-left: -40px;padding: 5px; background: #26290F ;border-radius: 8px;font-size: 18px; color:#C2D04C}"
  );
  css.appendChild(estilo);
  document.head.appendChild(css);
  var aviso = document.createElement("div");
  aviso.setAttribute("id", "aviso");
  var contenidoc = document.createTextNode("URL copiada");
  aviso.appendChild(contenidoc);
  document.body.appendChild(aviso);
  window.load = setTimeout("document.body.removeChild(aviso)", 4000);
}

/* lanzar popop con url */
document.addEventListener("DOMContentLoaded", function() {
	if (window.location.href.indexOf("#mi-comunidad") > -1) {
		var comunidadModal = new bootstrap.Modal(document.getElementById('micomunidad'));
		comunidadModal.show();
	}
});

/* banner colavorativos  */
const showHideBtn = document.querySelector('.show-hide-btn');
const container = document.querySelector('.banner-colavorativos');

showHideBtn.addEventListener('click', () => {
    document.startViewTransition(() => {
        container.classList.toggle('expanded');
    });
});


