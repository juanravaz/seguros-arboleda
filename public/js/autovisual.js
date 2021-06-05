$(document).ready(function() {

    $('#enviar').on('click', function() {

        matricula = document.getElementById("plate").value;
        model = document.getElementById("model").value;
        brand = document.getElementById('brand').value;
        km = document.getElementById('km').value;
        gasoline = document.getElementById('gasofa').value;
        dt_entry_service = document.getElementById('dt_entry_service').value;

        //alert(dt_entry_service);
        //alert(model);
        //alert(brand);
        //alert(km);
        //alert(gasoline);

        if (model && brand && km && gasoline && dt_entry_service) {
            const settings = {
                "async": true,
                "crossDomain": true,
                "url": "https://api.autovisual.com/v2/av",
                "method": "POST",
                "headers": {
                    "Content-Type": "application/json"
                },
                "processData": false,
                "data": "{\"key\":\"BVYWQSTQFfmfa367rLEVQtEjEG7yaHtJh9HFS2Hzbd3R\",\"txt\":\"" + model + " " + brand + "\",\"km\":\"" + km + "\",\"dt_entry_service\":\"" + dt_entry_service + "\",\"fuel\":\"" + gasoline + "\",\"transmission\":\"Manual\",\"country_ref\":\"ES\",\"value\":\"true\",\"transaction\":\"true\",\"market\":\"true\",\"panel\":\"true\"}"
            };

            $.ajax(settings).done(function(response) {
                //console.log(response);

                carPrice = document.getElementById("carPrice");
                form = document.getElementById("form2");
                precio = document.getElementById("precio");
                type = document.getElementById("type");
                plate = document.getElementById("matricula");
                fuel = document.getElementById("fuel");
                marca = document.getElementById("marca");
                modelo = document.getElementById("modelo");
                anio = document.getElementById("anio");

                texto = document.createTextNode(response['value']['b'] + " €");
                p = document.createElement('p');
                button = document.createElement('input');
                aniocar = dt_entry_service;

                button.setAttribute('type', 'submit');
                button.setAttribute('class', 'btn btn-primary');
                button.setAttribute('value', 'Pagar con Paypal');
                button.setAttribute('id', 'boton');
                p.setAttribute('class', 'text-primary h1');
                p.setAttribute('name', 'price');
                p.setAttribute('id', 'price');
                form.setAttribute('style', 'visibility:visible; margin-top:2em;');

                precio.setAttribute('value', response['value']['b']);
                type.setAttribute('value', 'C');
                fuel.setAttribute('value', gasoline);
                plate.setAttribute('value', matricula);
                marca.setAttribute('value', brand);
                modelo.setAttribute('value', model);
                anio.setAttribute('value', aniocar);

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
            alert('Rellene los todos campos por favor');
        }

    });

});
