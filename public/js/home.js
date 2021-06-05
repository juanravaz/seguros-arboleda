$(document).ready(function() {

    $('#enviar').on('click', function() {

        postalCode = document.getElementById("postalCode").value;
        street = document.getElementById("street").value;
        m2 = document.getElementById("m2").value;

        //alert(dt_entry_service);
        //alert(model);
        //alert(brand);
        //alert(km);
        //alert(gasoline);

        if (postalCode && street && m2) {

            $.ajax().done(function(response) {
                //console.log(response);


                form = document.getElementById("form2");
                precio = document.getElementById("precio");
                formPostalCode = document.getElementById("formPostalCode");
                formStreet = document.getElementById("formStreet");
                formM2 = document.getElementById("formM2");
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
                type.setAttribute('value', 'H');
                formStreet.setAttribute('value', street);
                formPostalCode.setAttribute('value', postalCode);
                formM2.setAttribute('value', m2);

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
