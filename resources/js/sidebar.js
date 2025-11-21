import tippy, { createSingleton } from 'tippy.js';
import 'tippy.js/dist/tippy.css';
import 'tippy.js/themes/light.css';


document.addEventListener("DOMContentLoaded", function () {
    const body = document.querySelector('body');

    const themeClass = [...body.classList].find(c => c.startsWith('theme-')) || "theme-neutral";
    console.log(themeClass);
    const currentTheme = themeClass ? themeClass.replace('theme-', '') : 'dark';
    
    const sidebar = document.getElementById("sidebar");
    if (!sidebar) return;
    
    const page = document.getElementById("pageContent");
    const btn = document.getElementById("toggleSidebar");

    const labels = document.querySelectorAll(".menu-label");
    const sections = document.querySelectorAll(".menu-section-title");

    const arrowsLvl0 = document.querySelectorAll(".dropdown-arrow");
    const arrowsLvl1 = document.querySelectorAll(".arrow-second");

    const width = sidebar.offsetWidth;

    // cria os tooltips individuais (cada item já usa seu content como você fez antes)
    const tippies = tippy('.menu-item', {
    content(reference) {
        const label = reference.querySelector('.menu-label');
        return label ? label.textContent.trim() : '';
    },
    });

    // cria o singleton a partir do array/NodeList de instâncias
    const singleton = createSingleton(tippies, {
        delay: 0, // ou [100, 50] etc
        moveTransition: 'transform 0.2s ease-out',
        placement: 'right',
    });

    let aberto = true;
    singleton.disable();

    // ============================================================
    //  ABRIR / FECHAR SIDEBAR
    // ============================================================
    btn.addEventListener("click", () => {
        if (aberto) {
            sidebar.style.width = "56px";
            page.style.marginLeft = "56px";

            labels.forEach(el => {
                el.style.width = "0px";
                el.style.opacity = "0";
                el.style.transform = "translateX(-10px)";
            });

            sections.forEach(el => {
                el.style.opacity = "0";
                el.style.transform = "translateX(-10px)";
            });

            arrowsLvl0.forEach(el => {
                el.style.opacity = "0";
                el.style.transform = "translateX(-10px)";
            });

            arrowsLvl1.forEach(el => {
                el.style.opacity = "0";
                el.style.transform = "translateX(-10px)";
            });

        // FECHANDO → mostra tooltip
        //tippies.forEach(t => t.enable());  
        singleton.enable(); 
        } else {
            sidebar.style.width = width+"px";
            page.style.marginLeft = width+"px";

            labels.forEach(el => {
                el.style.width = "auto";
                el.style.opacity = "1";
                el.style.transform = "translateX(0px)";
            });

            sections.forEach(el => {
                el.style.opacity = "1";
                el.style.transform = "translateX(0px)";
            });

            arrowsLvl0.forEach(el => {
                el.style.opacity = "1";
                el.style.transform = "translateX(0px)";
            });

            arrowsLvl1.forEach(el => {
                el.style.opacity = "1";
                el.style.transform = "translateX(0px)";
            });

            // ABRINDO → esconde tooltip
            //tippies.forEach(t => t.disable()); 
            singleton.disable();          
        }

        aberto = !aberto;
    });

    // ============================================================
    //  DROPDOWN 1º NÍVEL
    // ============================================================
    const dropdowns = document.querySelectorAll(".menu-dropdown");
    dropdowns.forEach(item => {
        item.addEventListener("click", e => {
            e.preventDefault();
            const submenu = item.nextElementSibling;

            document.querySelectorAll(".submenu.open").forEach(openMenu => {
                if (openMenu !== submenu) {
                    openMenu.style.maxHeight = 0;
                    openMenu.classList.remove("open");
                    const arrow = openMenu.previousElementSibling.querySelector(".dropdown-arrow");
                    if (arrow) arrow.style.transform = "rotate(0deg)";
                }
            });

            if (submenu.classList.contains("open")) {
                submenu.style.maxHeight = 0;
                submenu.classList.remove("open");
                item.querySelector(".dropdown-arrow").style.transform = "rotate(0deg)";
            } else {
                submenu.style.maxHeight = submenu.scrollHeight + "px";
                submenu.classList.add("open");
                item.querySelector(".dropdown-arrow").style.transform = "rotate(180deg)";
            }
        });
    });

    // ============================================================
    //  DROPDOWN 2º NÍVEL
    // ============================================================
    const dropdownSeconds = document.querySelectorAll(".menu-dropdown-second");
    dropdownSeconds.forEach(item => {
        item.addEventListener("click", e => {
            
            const submenu = item.nextElementSibling;
            const parent = item.closest(".submenu");

            if (!submenu) return;

            e.preventDefault();

            parent.querySelectorAll(".submenu-second.open").forEach(openMenu => {
                if (openMenu !== submenu) {
                    openMenu.style.maxHeight = 0;
                    openMenu.classList.remove("open");
                    const arrow = openMenu.previousElementSibling.querySelector(".arrow-second");
                    if (arrow) arrow.style.transform = "rotate(0deg)";
                }
            });

            if (submenu.classList.contains("open")) {
                submenu.style.maxHeight = 0;
                submenu.classList.remove("open");
                item.querySelector(".arrow-second").style.transform = "rotate(0deg)";
            } else {
                submenu.style.maxHeight = submenu.scrollHeight + "px";
                submenu.classList.add("open");
                item.querySelector(".arrow-second").style.transform = "rotate(-180deg)";
            }

            let totalHeight = 0;
            parent.querySelectorAll(".submenu-second, .menu-dropdown-second").forEach(el => {
                totalHeight += el.scrollHeight;
            });

            parent.style.maxHeight = totalHeight + "px";
        });
    });

    // ============================================================
    //  AUTO-EXPANDIR MENU BASEADO NA ROTA ATUAL
    // ============================================================
    const urlAtual = window.location.pathname;
    const urlAbsoluta = window.location.href;
    //console.log(urlAtual, urlAbsoluta);

    const arrayLinksAtivos = [];

    let node = null;
    if (sidebar) {//FUNCIONA TANTO PARA A URL QUANTO PARA O NOME DA ROTA
        node = sidebar.querySelector(`a[href="${urlAbsoluta}"]`) 
            || sidebar.querySelector(`a[href="${urlAtual}"]`);
        //console.log(node);
        if (node) node.classList.add("active-item");
    }


    // Utiliza o data-parent para reabrir automaticamente os submenus
    while (node && node.dataset && node.dataset.parent) {
        const dataid = node.dataset.parent;
        node = document.getElementById(dataid);
        //console.log('node',node);
        arrayLinksAtivos.unshift(node);
    }

    arrayLinksAtivos.forEach(item => {
        if (item) item.click();
    });


});
