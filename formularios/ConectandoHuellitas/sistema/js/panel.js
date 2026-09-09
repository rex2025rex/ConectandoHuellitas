document.addEventListener("DOMContentLoaded", function () {

    const modulos = document.querySelectorAll(".panel-modulo");


    modulos.forEach(function (modulo) {

        const cabecera = modulo.querySelector(".panel-modulo-cabecera");
        const flecha = modulo.querySelector(".panel-flecha");


        cabecera.addEventListener("click", function () {

            const estaAbierto = modulo.classList.contains("activo");


            /* CERRAR TODOS */

            modulos.forEach(function (otroModulo) {

                otroModulo.classList.remove("activo");

                const otraCabecera =
                    otroModulo.querySelector(".panel-modulo-cabecera");

                const otraFlecha =
                    otroModulo.querySelector(".panel-flecha");


                otraCabecera.setAttribute(
                    "aria-expanded",
                    "false"
                );

                otraFlecha.textContent = "▶";

            });


            /* ABRIR EL SELECCIONADOo */

            if (!estaAbierto) {

                modulo.classList.add("activo");

                cabecera.setAttribute(
                    "aria-expanded",
                    "true"
                );

                flecha.textContent = "▼";

            }

        });

    });

});