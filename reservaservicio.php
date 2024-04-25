<?php

    require './includes/funciones.php';
    incluirTemplates('header');
?>
    <!--Breadcrumb Start-->
    <div class="breadcrumb-area" style="background-image: url('assets/img/breadcrumb/02.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="page-title">Reservar mantenimiento</h1>
                        <ul class="page-list">
                            <li><a href="index.php">Inicio</a></li>
                            <li>Reservar mantenimiento</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb End-->
    <!--Step Car Sell-->
    
    <div class="step-car-sell">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="step-car-sell__thumb margin-minus">
                        <img src="assets/img/bg/01.png" alt="img">
                    </div>
                </div>
                <!--// Thumbnail-->

                <div class="col-lg-12 padding-bottom-160">
                    <div class="step-car-sell__content">
                        <div class="step-car-sell__details">
                            <form action="mail.php" method="POST" class="contact-form">
                                <div class="step-car-sell__details_form style-02">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Nombres</label>
                                            <input id="nombre" name="nombre" type="text" placeholder="Ingrese su Nombre"  autocapitalize="words" class="form-control" autocomple="off" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Apellidos</label>
                                            <input id="apellido" name="apellido" type="text" class="form-control"  placeholder="Ingrese su Apellido"  autocapitalize="words" autocomple="off" required>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Placa</label>
                                            <input id="placa" name="placa" type="text" placeholder="Ingrese su Placa"  autocapitalize="words" autocomple="off" required class="form-control">
                                        </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Kilometraje</label>
                                                <div class="custom-select-box w-100">
                                                        <select name="kilometraje" id="kilometraje"> 
                                                            <option value="" disabled selected>Seleccionar Kilometraje</option>
                                                            <option value="5.000 Km">5.000 Km</option>
                                                            <option value="10.000 Km">10.000 Km</option>
                                                            <option value="15.000 Km">15.000 Km</option>
                                                            <option value="20.000 km">20.000 km</option>
                                                            <option value="25.000 km">25.000 km</option>
                                                            <option value="30.000 km">30.000 km</option>
                                                            <option value="35.000 km">35.000 km</option>
                                                            <option value="40.000 km">40.000 km</option>
                                                            <option value="45.000 km">45.000 km</option>
                                                            <option value="50.000 km">50.000 km</option>
                                                            <option value="55.000 km">55.000 km</option>
                                                            <option value="60.000 km">60.000 km</option>
                                                            <option value="65.000 km">65.000 km</option>
                                                            <option value="70.000 km">70.000 km</option>
                                                            <option value="75.000 km">75.000 km</option>
                                                            <option value="80.000 km">80.000 km</option>
                                                            <option value="85.000 km">85.000 km</option>
                                                            <option value="90.000 km">90.000 km</option>
                                                            <option value="95.000 km">95.000 km</option>
                                                            <option value="100.000 km">100.000 km</option>
                                                            <option value="105.000 km">105.000 km</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Selecciona ciudad</label>
                                            <div class="custom-select-box w-100">
                                                    <select name="ciudad" id="ciudad">
                                                    <option value="" disabled selected>Selecciona tu ciudad</option>
                                                    <option value="Santa Cruz">Santa Cruz</option>
                                                    <option value="La Paz">La Paz</option>
                                                    <option value="Cochabamba">Cochabamba</option>
                                                    <option value="El Alto">El Alto</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-lg-4">
                                            <label>Correo</label>
                                            <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomple="off" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Numero Celular</label>
                                            <input id="phone" name="phone" class="form-control" type="tel" placeholder="(591)7xxxxxxx" autocomple="off" required>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Marca del vehículo</label>
                                            <input id="marca" type="text" name="marca" placeholder="Marca" autocomple="off" required class="form-control">
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Modelo</label>
                                            <input id="modelo" type="text" name="modelo" placeholder="Modelo" autocomple="off" required class="form-control">
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Fecha</label>
                                            <input type="date" name="fecha" class="form-control datepicker" >
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Hora deseadas</label>
                                            <input type="time" class="form-control datepicker" name="hora" min="8:00" max="18:00">
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="custom-select-box w-100">
                                                <label>Elige Taller</label>
                                            </div>
                                            <div class="custom-select-box w-100">
                                                    <select name="taller" id="taller">
                                                    <option value="" disabled selected>Selecciona taller</option>
                                                    <option value="Taller Central Ba">Taller Central Urenda</option>
                                                    <option value="Taller Citroën">Taller Citroën</option>
                                                    <option value="Taller Peugeot">Taller Peugeot</option>
                                                    <option value="Taller Chaperio y pintura Dakar">Taller Chaperio y pintura Dakar</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br><br><br><br>
                                                
                                                <!--// Main Btn-->
                                        <div class="col-lg-12">
                                            <div class="d-flex align-items-center">
                                                <div class="main-btn-wrap">
                                                    <input type="submit" value="Reservar ahora" name="Enviar" class="main-btn black">
                                                </div>
                                            <p> &nbsp; &nbsp; Al enviar este formulario, solicitará el valor de intercambio sin compromiso y un representante de ventas se comunicará con <br> &nbsp; &nbsp;usted dentro de las 24 horas.</p>
                                            </div>
                                        </div>
                                               
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    <!--// Step Car Sell Content-->
                </div>
            </div>
        </div>
    </div>
    <!--// Step Car Sell-->

    <!-- footer area start -->
    <?php
    incluirTemplates ('footer');
?>