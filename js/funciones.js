function validarPass(){
    let pass1, pass2;

    pass1 = document.getElementById("pass1").value;
    pass2 = document.getElementById("pass2").value;
    boton = document.getElementById("submit");

    // console.log(pass1);
    // console.log(pass2);

    if(pass1 != pass2){
        pass1 = null;
        pass2 = null;
        // console.log("Contraseñas diferentes");
        boton.disabled = true;
    }
    else{
        boton.disabled = false;
    }
    
}

function cuentaCaracteres(){
    let textarea, caracteres;

    textarea = document.getElementById("texto").value;
    caracteres = document.getElementById("caracteres").innerHTML = "Texto: (" + textarea.length + "/1000)";
}