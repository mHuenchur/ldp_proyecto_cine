let administradorService = {
    save: (data) => {
        return fetch("sala/save", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json"
            },
            body: JSON.stringify(data)
        })
        .then(response => {
            if(!response.ok){
                throw new Error(response.status);
            }
            return response.json()
        })
        .catch(error => {
            console.log(response.Error),
            console.error("ERROR EN LA PETICION ", error)
        });
    }
}