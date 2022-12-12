/*
function cambiarColores(x){
    
    switch(x.value){
        case '1':
            var topbar = document.getElementById("header");
            topbar.style.background = 'linear-gradient(to bottom, var(--strong-red), var(--white))';

            var leftContainer = document.getElementById("left-section");
            leftContainer.style.backgroundColor = 'var(--strong-red)';

            

            var select = document.getElementById("categories");
            select.style.backgroundColor = 'var(--soft-red)';

        break;
        case '2':
            var topbar = document.getElementById("header");
            topbar.style.background = 'linear-gradient(to bottom, var(--paint_green), var(--white))';

            var leftContainer = document.getElementById("left-section");
            leftContainer.style.backgroundColor = 'var(--paint_green)';

            var select = document.getElementById("categories");
            select.style.backgroundColor = 'var(--soft_green)';
        break;
        case '3':
            var topbar = document.getElementById("header");
            topbar.style.background = 'linear-gradient(to bottom, var(--crafts_pink), var(--white))';

            var leftContainer = document.getElementById("left-section");
            leftContainer.style.backgroundColor = 'var(--crafts_pink)';

            var select = document.getElementById("categories");
            select.style.backgroundColor = 'var(--soft_pink)';
        break;
        case '4':
            var topbar = document.getElementById("header");
            topbar.style.background = 'linear-gradient(to bottom, var(--dance_blue), var(--white))';

            var leftContainer = document.getElementById("left-section");
            leftContainer.style.backgroundColor = 'var(--dance_blue)';

            var select = document.getElementById("categories");
            select.style.backgroundColor = 'var(--soft_blue)';
        break;
    }
}
/*

/*var rightContainer = document.getElementById("right-section");
rightContainer.style.backgroundColor = 'var(--soft-red)';
/*

/*
onchange="cambiarColores(this)"
*/

var tipoSelect = document.getElementById("categories");

tipoSelect.addEventListener("change", event => {
    var elementSelected = tipoSelect.options[tipoSelect.selectedIndex].value;
    
    switch(elementSelected){
        case '1':
            var topbar = document.getElementById("header");
            topbar.style.background = 'var(--strong-red)';

            var leftContainer = document.getElementById("left-section");
            leftContainer.style.background = 'linear-gradient(to top, var(--strong-red), var(--input-red))';

            var musicProy = document.getElementById("musicProyect");
            musicProy.style.backgroundColor = 'var(--soft-red)';

            var select = document.getElementById("categories");
            select.style.backgroundColor = 'var(--soft-red)';
            
            var secondAppearance = document.getElementsByClassName("second-appearance-4");
            for (var i=0; i<secondAppearance.length; i++) secondAppearance[i].style.display = 'none';

            secondAppearance = document.getElementsByClassName("second-appearance-1");
            for (var i=0; i<secondAppearance.length; i++) secondAppearance[i].style.display = 'none';

            secondAppearance = document.getElementsByClassName("second-appearance-2-3");
            for (var i=0; i<secondAppearance.length; i++) secondAppearance[i].style.display = 'grid';
           
            var nomArtistico = document.getElementsByClassName("input");
            for (var i=0; i<nomArtistico.length; i++) nomArtistico[i].style.backgroundColor = 'var(--input-red)';

            var links = document.getElementsByClassName("input-link");
            for (var i=0; i<links.length; i++) links[i].style.backgroundColor = 'var(--input-red)';

            var inputGenero = document.getElementsByClassName("input-genero");
            for (var i=0; i<inputGenero.length; i++) inputGenero[i].style.backgroundColor = 'var(--input-red)';

            var subButton = document.getElementById("submitButton");
            subButton.style.backgroundColor = 'var(--strong-red)';
            subButton.style.display = 'grid';
            

        break;
        case '2':
            var topbar = document.getElementById("header");
            topbar.style.background = 'var(--paint_green)';

            var leftContainer = document.getElementById("left-section");
            leftContainer.style.background = 'linear-gradient(to top, var(--paint_green), var(--input_green))';

            var select = document.getElementById("categories");
            select.style.backgroundColor = 'var(--soft_green)';

            var secondAppearance = document.getElementsByClassName("second-appearance-4");
            for (var i=0; i<secondAppearance.length; i++) secondAppearance[i].style.display = 'none';

            var secondAppearance = document.getElementsByClassName("second-appearance-1");
            for (var i=0; i<secondAppearance.length; i++) secondAppearance[i].style.display = 'none';

            var secondAppearance = document.getElementsByClassName("second-appearance-2-3");
            for (var i=0; i<secondAppearance.length; i++) secondAppearance[i].style.display = 'grid';
           
            var nomArtistico = document.getElementsByClassName("input");
            for (var i=0; i<nomArtistico.length; i++) nomArtistico[i].style.backgroundColor = 'var(--input_green)';

            var links = document.getElementsByClassName("input-link");
            for (var i=0; i<links.length; i++) links[i].style.backgroundColor = 'var(--input_green)';

            var subButton = document.getElementById("submitButton");
            subButton.style.backgroundColor = 'var(--paint_green)';
            subButton.style.display = 'grid';

        break;
        case '3':
            var topbar = document.getElementById("header");
            topbar.style.background = 'var(--crafts_pink)';

            var leftContainer = document.getElementById("left-section");
            leftContainer.style.background = 'linear-gradient(to top, var(--crafts_pink), var(--input_pink))';

            var secondAppearance = document.getElementsByClassName("second-appearance-4");
            for (var i=0; i<secondAppearance.length; i++) secondAppearance[i].style.display = 'none';

            var secondAppearance = document.getElementsByClassName("second-appearance-1");
            for (var i=0; i<secondAppearance.length; i++) secondAppearance[i].style.display = 'none';

            var secondAppearance = document.getElementsByClassName("second-appearance-2-3");
            for (var i=0; i<secondAppearance.length; i++) secondAppearance[i].style.display = 'grid';

            var select = document.getElementById("categories");
            select.style.backgroundColor = 'var(--soft_pink)';

            var nomArtistico = document.getElementsByClassName("input");
            for (var i=0; i<nomArtistico.length; i++) nomArtistico[i].style.backgroundColor = 'var(--input_pink)';


            var links = document.getElementsByClassName("input-link");
            for (var i=0; i<links.length; i++) links[i].style.backgroundColor = 'var(--input_pink)';

            var subButton = document.getElementById("submitButton");
            subButton.style.backgroundColor = 'var(--crafts_pink)';
            subButton.style.display = 'grid';
        break;
        case '4':
            var topbar = document.getElementById("header");
            topbar.style.background = 'var(--dance_blue)';

            var leftContainer = document.getElementById("left-section");
            leftContainer.style.background = 'linear-gradient(to top, var(--dance_blue), var(--input_blue))';

            var select = document.getElementById("categories");
            select.style.backgroundColor = 'var(--soft_blue)';

            var danceProy = document.getElementById("danceProyect");
            danceProy.style.backgroundColor = 'var(--soft_blue)';

            var secondAppearance = document.getElementsByClassName("second-appearance-1");
            for (var i=0; i<secondAppearance.length; i++) secondAppearance[i].style.display = 'none';

            secondAppearance = document.getElementsByClassName("second-appearance-4");
            for (var i=0; i<secondAppearance.length; i++) secondAppearance[i].style.display = 'none';

            secondAppearance = document.getElementsByClassName("second-appearance-2-3");
            for (var i=0; i<secondAppearance.length; i++) secondAppearance[i].style.display = 'grid';

            var nomArtistico = document.getElementsByClassName("input");
            for (var i=0; i<nomArtistico.length; i++) nomArtistico[i].style.backgroundColor = 'var(--input_blue)';

            var links = document.getElementsByClassName("input-link");
            for (var i=0; i<links.length; i++) links[i].style.backgroundColor = 'var(--input_blue)';

            var inputGenero = document.getElementsByClassName("input-genero");
            for (var i=0; i<inputGenero.length; i++) inputGenero[i].style.backgroundColor = 'var(--input_blue)';

            var subButton = document.getElementById("submitButton");
            subButton.style.backgroundColor = 'var(--dance_blue)';
            subButton.style.display = 'grid';
        break;
    }
});