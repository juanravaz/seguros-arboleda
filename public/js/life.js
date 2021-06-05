$(document).ready(function() {

    $('#enviar').on('click', function() {

        name = document.getElementById("name").value;
        DNI = document.getElementById("DNI").value;
        date = document.getElementById("date").value;

        //alert(dt_entry_service);
        //alert(model);
        //alert(brand);
        //alert(km);
        //alert(gasoline);

        if (name && DNI && date) {

            $.ajax().done(function(response) {
                //console.log(response);


                form = document.getElementById("form2");
                precio = document.getElementById("precio");
                formDNI = document.getElementById("formDNI");
                formName = document.getElementById("formName");
                formBirth = document.getElementById("formBirth");
                type = document.getElementById("type");

                texto = document.createTextNode('1123' + " €");
                p = document.createElement('p');
                button = document.createElement('input');


                button.setAttribute('type', 'submit');
                button.setAttribute('class', 'btn btn-primary');
                button.setAttribute('value', 'Pagar con Paypal');
                button.setAttribute('id', 'boton');
                p.setAttribute('class', 'text-primary h1');
                p.setAttribute('name', 'price');
                p.setAttribute('id', 'price');
                form.setAttribute('style', 'visibility:visible; margin-top:2em;');

                precio.setAttribute('value', '123123');
                type.setAttribute('value', 'L');
                formName.setAttribute('value', name);
                formDNI.setAttribute('value', DNI);
                formBirth.setAttribute('value', date);

                p.appendChild(texto);

                if (!document.getElementById("price")) {
                    carPrice.appendChild(p);
                } else {
                    $('#price').html(p);
                }

                if (!document.getElementById("boton")) {
                    form.appendChild(button);
                }

            });
        } else {
            alert('Rellene los todos los campos, por favor');
        }

    });

});
