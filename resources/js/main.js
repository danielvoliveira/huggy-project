document.addEventListener("DOMContentLoaded", function(e) {

    function show_and_close_menu_mobile(){
        let icon_menu = document.getElementById("icon-menu")
        icon_menu.onclick = function(){
            let back_menu = document.getElementById("back-menu")
            if(back_menu.classList.contains('none')){
                back_menu.classList.remove('none')
            }else{
                back_menu.classList.add('none')
            }
        }
    }
    show_and_close_menu_mobile()

    function show_or_close_input_label(){
        let input_name = document.getElementById("input-name")
        let label_name = document.getElementById("label-name")

        let input_email = document.getElementById("input-email")
        let label_email = document.getElementById("label-email")

        input_name.addEventListener("blur", function(){
            let value = this.value
            if(value == ''){
                label_name.classList.remove('none')
            }else{
                label_name.classList.add('none')
            }
        })

        input_email.addEventListener("blur", function(){
            let value = this.value
            if(value == ''){
                label_email.classList.remove('none')
            }else{
                label_email.classList.add('none')
            }
        })

    }
    show_or_close_input_label()

    function validate_form_and_send(){
        let form_button = document.getElementById("form-button")
        form_button.onclick = function(){
            let input_token_value = document.getElementsByName("_token")[0].value
            let input_name_value = document.getElementById("input-name").value
            let input_email_value = document.getElementById("input-email").value
            let input_campain_id_value = document.getElementById("campain-id").value
            let p_return_message = document.getElementById("return_message")

            if(input_name_value.length < 3){
                p_return_message.innerHTML = "O nome informado deve conter no mínimo 3 caracteres."
            }else if(!validate_email(input_email_value)){
                p_return_message.innerHTML = "Informe um endereço de e-mail válido."
            }else{
                add_lead_from_newsleter(
                    input_name_value,
                    input_email_value,
                    input_campain_id_value
                )

                add_lead_from_newsleter_to_db(
                    input_token_value,
                    input_name_value,
                    input_email_value,
                    input_campain_id_value
                )

                document.getElementById("input-name").value = ""
                document.getElementById("input-email").value = ""
                document.getElementById("label-name").classList.remove('none')
                document.getElementById("label-email").classList.remove('none')

                p_return_message.innerHTML = "Cadastro realizado com sucesso."

                setTimeout(() => {
                    p_return_message.innerHTML = ""
                }, "3000")
            }
        }
    }
    validate_form_and_send()

    function validate_email(email){
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
            return (true)
        }
            return (false)
    }

    function add_lead_from_newsleter(name, email, campain_id){
        let url = 'https://hooks.zapier.com/hooks/catch/8355659/boxq40j/'

        let data = {
            'nome': name,
            'email': email,
            'id_da_campanha': campain_id,
        }

        fetch(url, {
            method: 'POST',
            mode: 'no-cors',
            headers: {
                'Content-Type': 'application/json'
            },
            referrerPolicy: 'no-referrer',
            body: JSON.stringify(data)
        })
    }

    function add_lead_from_newsleter_to_db(token, name, email, campain_id){
        let data = {
            '_token': token,
            'name': name,
            'email': email,
            'campain_id': campain_id,
        }

        fetch('/newsletters/add', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token
            },
            body: JSON.stringify(data)
        })
    }
})
