<?php
/*doc index.php

Fecha:   Lunes, 08-feb-2020
Autores: Edward Hernández
--------------------------------------------------------------
Descripción:
Prueba para Edith Cerna, Beo Desings
--------------------------------------------------------------
*/

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/theme.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
        <title>iForm!</title>
    </head>
    <body class="bg-teal row justify-content-center align-items-center">

        <main>
            <div class="container mb-5">
                <div>
                    <h1 class="text-white text-center">CONTACT FORM</h1>
                    <br>
                    <div class="row justify-content-around">
                        <form class="col-sm-12 col-md-6" method="post" action="post.contact.php">
                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <input type="text" class="form-control" name="name" placeholder="YOUR NAME">
                                </div>
                                <div class="form-group col-sm-12">
                                    <input type="email" class="form-control" name="email"  placeholder="YOUR EMAIL ADDRESS">
                                </div>
                                <div class="form-group col-sm-12 col-md-6">
                                    <input type="text" class="form-control" name="company" placeholder="COMPANY">
                                </div>
                                <div class="form-group col-sm-12 col-md-6">
                                    <input type="tel" class="form-control" name="phone" placeholder="PHONE">
                                </div>
                                <div class="form-group col-sm-12">
                                    <textarea class="form-control" name="message" placeholder="YOUR MESSAGE" rows="3" resize="none"></textarea>
                                </div>
                                <div class="form-group col-sm-12 text-right">
                                    <button type="submit" class="btn bg-yellow w-50">SEND MESSAGE</button>
                                </div>
                            </div>
                        </form>
                        <section class="col-sm-12 col-md-6 align-self-md-center">
                            <article class="row justify-content-center">
                                <div>
                                    <h2 class="text-white font-weight-light">YOU CAN FIND US HERE</h2>
                                    <p class="text-white font-weight-light line-h" >SAMPLE ADDRESS. SAMPLE STREET. 123/45</p>
                                    <p class="text-yellow font-weight-light line-h" >OR ON MAPS</p>
                                    <br>
                                    <ul>
                                        <li class="text-white line-h"><p>+3 (000) 0123 3210</p></li>
                                        <li class="text-white line-h"><p>+3 (000) 0456 3210</p></li>
                                    </ul>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
            <!-- Modal of response success ajax-->
            <div class="modal modal-fluid fade" id="modal_response_ajax" tabindex="-1" role="dialog"">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 text-center py-4">
                                    <h4 class="heading h3">Success!</h4>
                                    <p class="lead text-muted">
                                        Data sent successfully
                                    </p>
                                    <p id="name"></p>
                                    <p id="email"></p>
                                    <p id="company"></p>
                                    <p id="phone"></p>
                                    <p id="message"></p>
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Ok!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- dependences JS! -->
        <!-- jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="assets/js/jquery-3.5.1.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- JS Persnonalizados -->
        <script src="assets/js/main.js"></script>
        <script>
        </script>
    </body>
</html>
