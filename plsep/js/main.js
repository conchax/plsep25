window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('.fixedmenu');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);
});


/* collapse menu */
var coll = document.getElementsByClassName("collapsiblem");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("mouseenter", function () {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

function myFunction() {
  var element = document.getElementById("overlay");
  element.classList.toggle("open");
  var element = document.getElementById("toggle");
  element.classList.toggle("active");
  /* var element = document.getElementById("menu-buttoms");
  element.classList.toggle("d-none"); */
}

/* window.onscroll = function () {
  var y = window.scrollY;
  console.log(y);
} */


/* Dropmenu movi  */

document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".sidebar .nav-link").forEach(function (element) {
    element.addEventListener("click", function (e) {
      let nextEl = element.nextElementSibling;
      let parentEl = element.parentElement;

      if (nextEl) {
        e.preventDefault();
        let mycollapse = new bootstrap.Collapse(nextEl);

        if (nextEl.classList.contains("show")) {
          mycollapse.hide();
        } else {
          mycollapse.show();
          // find other submenus with class=show
          var opened_submenu =
            parentEl.parentElement.querySelector(".submenu.show");
          // if it exists, then close all of them
          if (opened_submenu) {
            new bootstrap.Collapse(opened_submenu);
          }
        }
      }
    });
  });
});
// DOMContentLoaded  end

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




