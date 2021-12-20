// JS Imagens novo posts
    let ImgPost = document.querySelectorAll("#NewPostBodyStructureImg");

        for (let i = 0; i < ImgPost.length; i++) {
            ImgPost[i].addEventListener("click", ImgPostfunction(ImgPost[i]));
        };

        function ImgPostfunction(ImgPost) {

            const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    let Aux = this.responseText;
                        ImgPost.style.backgroundimage = `URL(${Aux})`;
                    }

            xhttp.open("GET", "script.php");
            xhttp.send();   
        }
