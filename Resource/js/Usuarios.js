class Usuarios {
    constructor() {

    }
    loginUser(email, password) {
        if (email == "") {
            document.getElementById("email").focus();
            M.toast({ html: 'Ingrese el email', classes: 'rounded' });
        } else {
            if (password == "") {
                document.getElementById("password").focus();
                M.toast({ html: 'Ingrese el password', classes: 'rounded' });
            } else {
                if(validarEmail(email)){
                    if(6 <= password.length){
                        $.post(
                            "Index/userLogin",
                            {email, password},
                            (response)=>{
                                console.log(response);
                            }
                        );

                    }else{
                        document.getElementById("password").focus();
                        M.toast({ html: 'Ingrese al menos 6 caracteres', classes: 'rounded' }); 
                    }
                }else{
                    document.getElementById("email").focus();
                     M.toast({ html: 'Ingrese un correo valido', classes:
                      'rounded' });
                }


            }


        }
    }
}