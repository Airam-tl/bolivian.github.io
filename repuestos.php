<?php

    require './includes/funciones.php';
    incluirTemplates('header', $inicio = true);
?>
<!--Breadcrumb Start-->
<div class="breadcrumb-area" style="background-image: url('assets/img/breadcrumb/04.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h1 class="page-title">Repuestos</h1>
                        <ul class="page-list">
                            <li><a href="index.php">Inicio</a></li>
                            <li>Repuestos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--// Breadcrumb End-->


    <!--Blog Page Content-->
    <div class="blog-page-content padding-top-120 padding-bottom-160">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Shop Page Grig View-->
                    <div class="shop-page-grid-view">
                        <div class="product-filtering-area">

                            <div class="filter-left" id="btnContainer">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#home-grid">
                                            <i class="ti ti-layout-grid2-alt"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#single-grid">
                                            <i class="ti ti-menu"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-right">
                                <span class="sorting-text">Ordenar</span>
                                <div class="custom-select-box">
                                    <select>
                                        <option value="ban">Ordenar articulo</option>
                                        <option value="ban">10 Productos</option>
                                        <option value="ban">20 Productos</option>
                                        <option value="ban">50 Productos</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--// Product Filtering Area-->

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-grid">
                                <div class="grid-list-wrapper padding-top-40">
                                    <!-- Grid List Column-->
                                    <div class="grid-list-column-item">
                                        
                                        <div class="thumb">
                                            <img src="assets/img/shop/repuestos/01.png" alt="img">
                                        </div>
                                        <h5 class="title padding-top-10">Filtro de aceite de motor</h5>
                                       
                                        <div class="common-price-style ">
                                            Precio: <span class="black">Bs 104.44</span>
                                        </div>
                                        <div class="main-btn-wrap padding-top-20">
                                            <a href="#" class="main-btn black-border"><i
                                                    class="flaticon-shopping-cart"></i>
                                                Contactame</a>
                                        </div>
                                    </div>
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
                                    <div class="grid-list-column-item">
                                        <!-- <span class="price-drop-tag">22%</span> -->
                                        <div class="thumb">
                                            <img src="assets/img/shop/repuestos/02.png" alt="img">
                                        </div>
                                        <h5 class="title padding-top-10">Filtro de aire de motor</h5>                                        
                                        <div class="common-price-style ">
                                            Precio: <span class="black">Bs 232.22</span>
                                        </div>
                                        <div class="main-btn-wrap padding-top-20">
                                            <a href="#" class="main-btn black-border"><i
                                                    class="flaticon-shopping-cart"></i>
                                                Add
                                                To Cart</a>
                                        </div>
                                    </div>
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
                                    <div class="grid-list-column-item">                                        
                                        <div class="thumb">
                                            <img src="assets/img/shop/repuestos/03.png" alt="img">
                                        </div>
                                        <h5 class="title padding-top-10">Auto Clutch & Brake</h5>                                        
                                        <div class="common-price-style ">
                                            Price: <span class="black">$145</span>
                                        </div>
                                        <div class="main-btn-wrap padding-top-20">
                                            <a href="#" class="main-btn black-border"><i
                                                    class="flaticon-shopping-cart"></i>
                                                Add
                                                To Cart</a>
                                        </div>
                                    </div>
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
                                    <div class="grid-list-column-item">
                                        <!-- <span class="price-drop-tag">22%</span> -->
                                        <div class="thumb">
                                            <img src="assets/img/shop/repuestos/01.png" alt="img">
                                        </div>
                                        <h5 class="title padding-top-10">Flash Deals Tyre</h5>
                                        <div class="common-price-style ">
                                            Price: <span class="black">$145</span>
                                        </div>
                                        <div class="main-btn-wrap padding-top-20">
                                            <a href="#" class="main-btn black-border"><i
                                                    class="flaticon-shopping-cart"></i>
                                                Add
                                                To Cart</a>
                                        </div>
                                    </div>
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
                                    <div class="grid-list-column-item">
                                        
                                        <div class="thumb">
                                            <img src="assets/img/shop/repuestos/02.png" alt="img">
                                        </div>
                                        <h5 class="title padding-top-10">Air Intake System</h5>
                                        
                                        <div class="common-price-style ">
                                            Price: <span class="black">$145</span>
                                        </div>
                                        <div class="main-btn-wrap padding-top-20">
                                            <a href="#" class="main-btn black-border"><i
                                                    class="flaticon-shopping-cart"></i>
                                                Add
                                                To Cart</a>
                                        </div>
                                    </div>
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
                                    <div class="grid-list-column-item">
                                        
                                        <div class="thumb">
                                            <img src="assets/img/shop/repuestos/03.png" alt="img">
                                        </div>
                                        <h5 class="title padding-top-10">Auto Clutch & Brake</h5>
                                        
                                        <div class="common-price-style ">
                                            Price: <span class="black">$145</span>
                                        </div>
                                        <div class="main-btn-wrap padding-top-20">
                                            <a href="#" class="main-btn black-border"><i
                                                    class="flaticon-shopping-cart"></i>
                                                Add
                                                To Cart</a>
                                        </div>
                                    </div>
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
                                    <div class="grid-list-column-item">
                                        
                                        <div class="thumb">
                                            <img src="assets/img/shop/repuestos/01.png" alt="img">
                                        </div>
                                        <h5 class="title padding-top-10">Flash Deals Tyre</h5>
                                        
                                        <div class="common-price-style ">
                                            Price: <span class="black">$145</span>
                                        </div>
                                        <div class="main-btn-wrap padding-top-20">
                                            <a href="#" class="main-btn black-border"><i
                                                    class="flaticon-shopping-cart"></i>
                                                Add
                                                To Cart</a>
                                        </div>
                                    </div>
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
                                    <div class="grid-list-column-item">
                                        <!-- <span class="price-drop-tag">22%</span> -->
                                        <div class="thumb">
                                            <img src="assets/img/shop/repuestos/02.png" alt="img">
                                        </div>
                                        <h5 class="title padding-top-10">Air Intake System</h5>
                                        
                                        <div class="common-price-style ">
                                            Price: <span class="black">$145</span>
                                        </div>
                                        <div class="main-btn-wrap padding-top-20">
                                            <a href="#" class="main-btn black-border"><i
                                                    class="flaticon-shopping-cart"></i>
                                                Add
                                                To Cart</a>
                                        </div>
                                    </div>
                                    <!--// Grid List Column-->

                                    <!-- Grid List Column-->
                                    <div class="grid-list-column-item">
                                        <span class="price-drop-tag">22%</span>
                                        <div class="thumb">
                                            <img src="assets/img/shop/repuestos/03.png" alt="img">
                                        </div>
                                        <h5 class="title padding-top-10">Auto Clutch & Brake</h5>
                                    
                                        <div class="common-price-style ">
                                            Price: <span class="black">$145</span>
                                        </div>
                                        <div class="main-btn-wrap padding-top-20">
                                            <a href="#" class="main-btn black-border"><i
                                                    class="flaticon-shopping-cart"></i>
                                                Add
                                                To Cart</a>
                                        </div>
                                    </div>
                                    <!--// Grid List Column-->
                                </div>
                                <!--// Grid List Wrapper-->
                            </div>

                            <div class="tab-pane fade" id="single-grid">
                                <div class="grid-list-wrapper padding-top-40">
                                    <!-- list View Item-->
                                    <div class="grid-list-column-item list-view">
                                        <span class="price-drop-tag">22%</span>
                                        <div class="grid-list-column-item__wrap">
                                            <div class="thumb">
                                                <img src="assets/img/shop/repuestos/01.png" alt="img">
                                            </div>
                                            <div class="grid-list-column-item__content">
                                                <h5 class="title padding-top-10">Flash Deals Tyre</h5>
                                                
                                                <div class="common-price-style">
                                                    Price: <span class="black">$145</span>
                                                </div>
                                                <div class="main-btn-wrap padding-top-20">
                                                    <a href="#" class="main-btn black-border"><i
                                                            class="flaticon-shopping-cart"></i>
                                                        Add To Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--// list View Item-->

                                    <!-- list View Item-->
                                    <div class="grid-list-column-item list-view">
                                        <span class="price-drop-tag">22%</span>
                                        <div class="grid-list-column-item__wrap">
                                            <div class="thumb">
                                                <img src="assets/img/shop/repuestos/02.png" alt="img">
                                            </div>
                                            <div class="grid-list-column-item__content">
                                                <h5 class="title padding-top-10">Flash Deals Tyre</h5>
                                                
                                                <div class="common-price-style">
                                                    Price: <span class="black">$145</span>
                                                </div>
                                                <div class="main-btn-wrap padding-top-20">
                                                    <a href="#" class="main-btn black-border"><i
                                                            class="flaticon-shopping-cart"></i>
                                                        Add To Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--// list View Item-->

                                    <!-- list View Item-->
                                    <div class="grid-list-column-item list-view">
                                        <span class="price-drop-tag">22%</span>
                                        <div class="grid-list-column-item__wrap">
                                            <div class="thumb">
                                                <img src="assets/img/shop/repuestos/03.png" alt="img">
                                            </div>
                                            <div class="grid-list-column-item__content">
                                                <h5 class="title padding-top-10">Flash Deals Tyre</h5>
                                                
                                                <div class="common-price-style">
                                                    Price: <span class="black">$145</span>
                                                </div>
                                                <div class="main-btn-wrap padding-top-20">
                                                    <a href="#" class="main-btn black-border"><i
                                                            class="flaticon-shopping-cart"></i>
                                                        Add To Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--// list View Item-->

                                    <!-- list View Item-->
                                    <div class="grid-list-column-item list-view">
                                        <span class="price-drop-tag">22%</span>
                                        <div class="grid-list-column-item__wrap">
                                            <div class="thumb">
                                                <img src="assets/img/shop/repuestos/01.png" alt="img">
                                            </div>
                                            <div class="grid-list-column-item__content">
                                                <h5 class="title padding-top-10">Flash Deals Tyre</h5>
                                                
                                                <div class="common-price-style">
                                                    Price: <span class="black">$145</span>
                                                </div>
                                                <div class="main-btn-wrap padding-top-20">
                                                    <a href="#" class="main-btn black-border"><i
                                                            class="flaticon-shopping-cart"></i>
                                                        Add To Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--// list View Item-->

                                    <!-- list View Item-->
                                    <div class="grid-list-column-item list-view">
                                        <span class="price-drop-tag">22%</span>
                                        <div class="grid-list-column-item__wrap">
                                            <div class="thumb">
                                                <img src="assets/img/shop/repuestos/02.png" alt="img">
                                            </div>
                                            <div class="grid-list-column-item__content">
                                                <h5 class="title padding-top-10">Flash Deals Tyre</h5>
                                                
                                                <div class="common-price-style">
                                                    Price: <span class="black">$145</span>
                                                </div>
                                                <div class="main-btn-wrap padding-top-20">
                                                    <a href="#" class="main-btn black-border"><i
                                                            class="flaticon-shopping-cart"></i>
                                                        Add To Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--// list View Item-->

                                    <!-- list View Item-->
                                    <div class="grid-list-column-item list-view">
                                        <span class="price-drop-tag">22%</span>
                                        <div class="grid-list-column-item__wrap">
                                            <div class="thumb">
                                                <img src="assets/img/shop/repuestos/03.png" alt="img">
                                            </div>
                                            <div class="grid-list-column-item__content">
                                                <h5 class="title padding-top-10">Flash Deals Tyre</h5>
                                                
                                                <div class="common-price-style">
                                                    Price: <span class="black">$145</span>
                                                </div>
                                                <div class="main-btn-wrap padding-top-20">
                                                    <a href="#" class="main-btn black-border"><i
                                                            class="flaticon-shopping-cart"></i>
                                                        Add To Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--// list View Item-->

                                    <!-- list View Item-->
                                    <div class="grid-list-column-item list-view">
                                        <span class="price-drop-tag">22%</span>
                                        <div class="grid-list-column-item__wrap">
                                            <div class="thumb">
                                                <img src="assets/img/shop/repuestos/01.png" alt="img">
                                            </div>
                                            <div class="grid-list-column-item__content">
                                                <h5 class="title padding-top-10">Flash Deals Tyre</h5>
                                                
                                                <div class="common-price-style">
                                                    Price: <span class="black">$145</span>
                                                </div>
                                                <div class="main-btn-wrap padding-top-20">
                                                    <a href="#" class="main-btn black-border"><i
                                                            class="flaticon-shopping-cart"></i>
                                                        Add To Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--// list View Item-->

                                    <!-- list View Item-->
                                    <div class="grid-list-column-item list-view">
                                        <span class="price-drop-tag">22%</span>
                                        <div class="grid-list-column-item__wrap">
                                            <div class="thumb">
                                                <img src="assets/img/shop/repuestos/02.png" alt="img">
                                            </div>
                                            <div class="grid-list-column-item__content">
                                                <h5 class="title padding-top-10">Flash Deals Tyre</h5>
                                                
                                                <div class="common-price-style">
                                                    Price: <span class="black">$145</span>
                                                </div>
                                                <div class="main-btn-wrap padding-top-20">
                                                    <a href="#" class="main-btn black-border"><i
                                                            class="flaticon-shopping-cart"></i>
                                                        Add To Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--// list View Item-->

                                </div>
                            </div>
                        </div>

                    </div>
                    <!--// Shop Page Grid View-->

                    <!-- Pagination-->
                    <div class="col-lg-12 margin-bottom-60">
                        <div class="blog-pagination text-center">
                            <ul class="page-numbers">
                                <li><a class="next page-numbers" href="#"><i class="flaticon-left-arrow"></i></a></li>
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="page-numbers" href="#">3</a></li>
                                <li><a class="page-numbers" href="#">4</a></li>
                                <li><a class="next page-numbers" href="#"><i class="flaticon-right-arrow"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--// Pagination-->
                </div>

                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="widget widget_search blog-bg">
                            <form action="blog.html" class="search-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Buscar">
                                </div>
                                <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!--// Search Widget -->
                        <div class="widget widget_nav_menu blog-bg radio-button">
                            <h5 class="widget-title border-bottom ">Categoria repuestos</h5>
                            <ul>
                                <li><a href="#">Todos productos</a></li>
                                <li><a href="#">Piezas de vehículos</a></li>
                                <li><a href="#">Accesorios</a></li>                          
                                <li><a href="#">Otros</a></li>
                            </ul>
                        </div>

                        <div class="widget blog-bg">
                            <h5 class="widget-title border-bottom">Filtros por precio</h5>
                            <div class="price-filter">
                                <div id="slider-range"></div>
                                <div class="price-slider-amount">
                                    <input type="submit" value="Enter Filters" />
                                    <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                </div>
                            </div>
                            <!--// Price Filter-->
                        </div>

                        <!--// New Product Widget-->
                        <div class="widget blog-bg style-01">
                            <h5 class="widget-title border-bottom">Tags</h5>
                            <div class="tagcloud">
                                <a href="#">Bujias</a>
                                <a href="#">Filtro de aceite de motor</a>
                                <a href="#">Correa dentada</a>
                                <a href="#">Rodamiento apoyo de distribución</a>
                                <a href="#">Rodamiento tensor de distribución</a>
                            </div>
                        </div>
                        <!--// Tag Widget-->
                    </div>

                </div>
            </div>
        </div>
        <!--// Container-->
    </div>
    <!--// Blog Page Content-->


    <?php
    incluirTemplates ('footer');
?>