let autenticacionController = {
    dataUsuario: {
        id: "0",
        nombre: "",
        apellido: "",
        nombreUsuario: "",
        correo: "",
        clave: "",
        tipo: ""
    },
    saveUsuario: () => {
        let form = document.forms["formularioAltaUsuario"];

        if (form.checkValidity()){
            //COMPLETAR VERIFICACIONES
            if (false) {
                autenticacionController.showMessage("Existen campos vacios!");
            }else{
                autenticacionController.dataUsuario.nombre = form.datoNombre.value;
                autenticacionController.dataUsuario.apellido = form.datoApellido.value;
                autenticacionController.dataUsuario.nombreUsuario = form.datoNombreUsuario.value;
                autenticacionController.dataUsuario.correo = form.datoEmail.value;
                autenticacionController.dataUsuario.clave = form.datoRegistroClave.value;

                autenticacionService.saveUsuario(autenticacionController.dataUsuario)
                .then(response => {
                    console.log("Respuesta del servidor", response)
                    if(response.error == ""){
                        //autenticacionController.showMessage(response.mensaje);
                        form.reset();
                    }
                    else{
                        //autenticacionController.showMessage(response.error);
                    }
                })
            }
        }

    },
    login: () =>{
        let formUsuario = document.getElementById("datoUsuario");
        let formClave = document.getElementById("datoClave");
        autenticacionController.dataUsuario.nombreUsuario = formUsuario.value;
        autenticacionController.dataUsuario.clave = formClave.value;

        autenticacionService.login(autenticacionController.dataUsuario)
        .then(response => {
            if(response.error === "" && response.mensaje === "OK"){
                //console.log("Respuesta del servidor", response)
                window.location.href = response.controlador + "/index";
            }else{
                const toastLiveExample = document.getElementById('liveToast')
                const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
                const message = document.getElementById("messageContainer");
                message.innerHTML = response.error;
                toastBootstrap.show()
            }
        })
    }
}


document.addEventListener("DOMContentLoaded", () => {
    let btnLogin = document.getElementById("btnLogin");
    let btnRegister = document.getElementById("btnRegistrarUsuario");
    if(btnLogin != null){
        btnLogin.onclick = () => {
            autenticacionController.login();
        }
    }
    if(btnRegister != null){
        btnRegister.onclick = () => {
            autenticacionController.saveUsuario();
        }
    }
})
