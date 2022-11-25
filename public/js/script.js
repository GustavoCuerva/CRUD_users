const date = new Date();


function validation(true_or_false) {
        /* A validation for the form. */
    $('#form-register').validate({
        rules:{
            name: {
                required: true,
                minWords: 2
            },
            email: {
                required: true,
                email: true
            },
            birth_date: {
                required: true,
                dateNL: true,
                minlength: 10,
                maxlength: 10
            },
            password: {
                required: true_or_false,
                minlength: 8
            },
            confirm_password: {
                required: true,
                minlength: 8,
                equalTo: "#inputPassword4"
            },
            password_before: {
                required: true,
                minlength: 8
            }
        },

        messages: {
            password: {
                minlength: "A senha deve ter 8 digitos"
            },

            confirm_password: {
                equalTo: "Digite a mesma senha novamente"
            },

            password_before: {
                required: "Digite a senha do usuário para poder edita-lo"
            },
            
            date: {
                minlength: "Data incompleta, utilize o padrão dd/mm/aaaa",
                maxlength: "Data incorreta, utilize o padrão dd/mm/aaaa"
            },

            name: {
                minWords: "Digite o nome e sobrenome"
            }
        }
    })

    /* A validation for the date input. */
    $('#date').mask("00/00/0000");

    $('#date').keyup(function(e){
    var data = $(this).val();
    if (data.length == 10) {
        anoInput = data.substr(6);
        anoAtual = date.getFullYear();
        dataRest = data.substr(0, 6);
        
        
        if (anoInput > anoAtual) {
        var msg_erro = document.getElementById('date-error');
        var msg = document.getElementById('error');

            if (!document.body.contains(msg_erro)) {
                msg.style.display = "block";
                msg.innerHTML = "Por favor, forneça um ano correto."
                document.getElementById('date').value = dataRest;
            }

        }
    }
    })

    /* A validation for the password input. */
    $('#inputPassword4').keyup(function(e){

        var numbers = /([0-9])/;
        var alphabet = /([a-z])/;
        var Alphabet = /([A-Z])/
        var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;

        var password = $(this).val();
        var password2 = document.getElementById('inputPassword4_');
        var button = document.getElementById('cadastrar');

        var msg = document.getElementById('error_senha');

        if (password.length >= 8) {
            if ((password.match(numbers) && password.match(alphabet) && password.match(Alphabet) && password.match(special_characters))) {
                password2.disabled = false;
                button.disabled = false;
                msg.style.display = "none";
            }else{
                password2.disabled = true;
                button.disabled = true;
                msg.style.display = "block";
            }      
        }
    })
}