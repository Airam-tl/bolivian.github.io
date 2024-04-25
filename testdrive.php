<?php

    require './includes/funciones.php';
    incluirTemplates('header');
?>
    <!--Breadcrumb Start-->
    <div class="breadcrumb-area" style="background-image: url('assets/img/breadcrumb/06.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="page-title">Test Drive</h1>
                        <ul class="page-list">
                            <li><a href="index.php">Inicio</a></li>
                            <li>Test drive</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb End-->
    <div class="contact-page padding-top-115 padding-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="left-content"> 
                        <div class="section-title breadcrumb-inner text-center">
                            <h2 class="heading-02 padding-bottom-20">Reservar Test Drive</h2>
                            <p>Realiza tu prueba y conoce nuestros modelos!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form action="phpmailer.php" method="POST" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Selecciona marca y modelo</label>
                                </div>
                                <div class="custom-select-box w-100">
                                    <select id="marca" name="marca">
                                        <option value="" disabled selected>--Selecciona una marca y modelo--</option>
                                        <option value="Citroën C3 Suv">Citroën C3 Suv</option>
                                        <option value="Citroën C4 Cactus">Citroën C4 Cactus</option>
                                        <option value="Citroën C5 Aircross">Citroën C5 Aircorss</option>
                                        <option value="Peugeot 2008 Style">Peugeot 2008 Style</option>
                                        <option value="Peugeot 2008 Active">Peugeot 2008 Active</option>
                                        <option value="Peugeot 3008">Peugeot 3008</option>
                                        <option value="Peugeot 5008">Peugeot 5008</option>
                                    </select>
                                </div>
                            </div>
                            <!--<div class="col-lg-6">
                                <div class="form-group">
                                    <label>Elige tu vehículo</label>
                                </div>
                                <div class="custom-select-box w-100">
                                    <select id="modelo" name="modelo">
                                        <option value="">--Selecciona un modelo--</option>
                                        <option value="C3">SUV C3</option>
                                        <option value="C4">C4 Cactus</option>
                                        <option value="C5">C5 Aircorss</option>
                                        <option value="2008 Style">2008 Style</option>
                                        <option value="2008 Active">2008 Active</option>
                                        <option value="3008 Active">3008 Active</option>
                                        <option value="5008 Allure">5008 Allure</option>
                                    </select>
                                </div>
                            </div>-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Selecciona ciudad</label>
                                </div>
                                <div class="custom-select-box w-100">
                                    <select name="ciudad" id="ciudad">                         
                                        <option value="" disabled selected>--Selecciona ciudad--</option>
                                        <option value="Santa Cruz">Santa Cruz</option>
                                        <option value="Cochabamba">Cochabamba</option>
                                        <option value="La Paz">La Paz</option>
                                        <option value="Alto">Alto</option>
                                        <option value="Sucre">Sucre</option>
                                    </select>
                                     
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="date">Fecha</label>
                                    <input type="date" class="form-control" name="fecha">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="hora">Hora:</label>
                                    <input type="time" name="hora" min="9:00" max="19:30">
                                </div>                                
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" autocapitalize="words" autocomple="off" required>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label for="name">Apellidos</label>
                                    <input type="text" class="form-control" name="apellido" placeholder="Ingrese su Apellido"  autocapitalize="words" autocomple="off" required>
                                </div><div class="form-group">
                                    <label for="number">Carnet de Identidad</label>
                                    <input type="number" class="form-control" name="ci" placeholder="Numero C.I."  required>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label>Extensión</label>
                                </div>
                                    <div class="custom-select-box w-100">
                                        <select name="extension">
                                            <option value="" disabled selected>--Selecciona extension--</option>
                                            <option value="Santa Cruz">Santa Cruz</option>
                                            <option value="Cochabamba">Cochabamba</option>
                                            <option value="La Paz">La Paz</option>                               
                                            <option value="Oruro">Oruro</option>
                                            <option value="Potosi">Potosi</option>
                                            <option value="Pando">Pando</option>                                        
                                            <option value="Chuquisaca">Chuquisaca</option>
                                            <option value="Tarija">Tarija</option>
                                            <option value="No aplica">No aplica</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="phone">Movil</label>
                                    <input type="tel" class="form-control" name="phone" placeholder="(591) 7xxxxxxx" required>
                                </div>
                            </div>
                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <label for="email">Correo Electrónico</label>
                                            <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomple="off"required>
                                    </div>
                                <div class="main-btn-wrap">
                                    <input type="submit" value="Enviar mensaje" name="Enviar" class="main-btn black">
                                </div>
                            </div>                                                
                        </form>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer area start -->
    
    </script>
<?php
    incluirTemplates ('footer');
?>