
const elementos = document.querySelectorAll(".bEliminar");

elementos.forEach(elemento => {
    elemento.addEventListener("click", function(){
        const curp = this.dataset.curp;

        const confirm = window.confirm("Deseas eliminar el alumno?");

        if(confirm){
            httpRequest("http://localhost/yedidproyecto/consulta/eliminarAlumno/" + curp, function(e){
                console.log(this.responseText);
                const tbody = document.querySelector("#tbody-alumnos");
                const fila  = document.querySelector("#fila-" + curp);
                tbody.removeChild(fila);
            })
        }
    });
});


function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}