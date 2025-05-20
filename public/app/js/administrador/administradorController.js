let administradorController = {
    data: {
        id: "0",
        capacidad: "0",
        numeroSala: "0",
        estado: "0"
    },
    dataPelicula: {
        
    },
    saveSala: () => {
        let form = document.forms["formularioAltaSala"];

        if (form.checkValidity()){
            if (form.salaCapacidad.value.trim() === "" || form.salaNumero.value.trim() === "") {
                administradorController.showMessage("Existen campos vacios!");
            }else{
                administradorController.data.capacidad = form.salaCapacidad.value;
                administradorController.data.numeroSala = form.salaNumero.value;
                if(document.getElementById("habilitada").checked){
                    administradorController.data.estado = form.habilitada.value;
                }else{
                    administradorController.data.estado = form.inhabilitada.value;
                }
                administradorService.save(administradorController.data)
                .then(response => {
                    console.log("Respuesta del servidor", response)
                    if(response.error == ""){
                        administradorController.showMessage(response.mensaje);
                        form.reset();
                    }
                    else{
                        administradorController.showMessage(response.error);
                    }
                })
            }
        }
    },
    showMessage: (respuesta) => {
        const toastLiveExample = document.getElementById('liveToast')
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
        const message = document.getElementById("messageContainer");
        message.innerHTML = respuesta;
        toastBootstrap.show()
    }
}

document.addEventListener("DOMContentLoaded", () => {
    let btnNewSala = document.getElementById("btnGuardarSala");
    if(btnNewSala != null){
        btnNewSala.onclick = () => {
            administradorController.saveSala();
        }
    }
})