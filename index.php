<?php
include("header_main.php");
?>

<div class="container-fluid text-left shadow-sm">
    <div class="row justify-content-evenly">
        <!-- <div class="col-2">
            <div class="list-group  shadow mb-5 bg-body rounded">
                <a href="#" class="list-group-item list-group-item-action active bg-success" aria-current="true">
                    Crops
                </a>
                <a href="#" class="list-group-item list-group-item-action">Vegetables</a>
                <a href="#" class="list-group-item list-group-item-action">Cereals and Legumes</a>
                <a href="#" class="list-group-item list-group-item-action">Fruits</a>
                <a href="#" class="list-group-item list-group-item-action">Spices</a>
                <a href="#" class="list-group-item list-group-item-action">Tubers</a>
                <a href="#" class="list-group-item list-group-item-action">Nuts</a>
                <a href="#" class="list-group-item list-group-item-action active bg-success" aria-current="true">
                    Animal Products
                </a>
                <a href="#" class="list-group-item list-group-item-action">Eggs</a>
                <a href="#" class="list-group-item list-group-item-action">Milk</a>
                <a href="#" class="list-group-item list-group-item-action">Poultry</a>
                <a href="#" class="list-group-item list-group-item-action">Wool</a>
            </div>
        </div> -->
        <div class="col-10">
            <div id="carouselExampleCaptions" class="carousel slide shadow mb-5 bg-body rounded" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/800/350" class="d-block w-100 rounded-top" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/800/351" class="d-block w-100 rounded-top" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/800/349" class="d-block w-100 rounded-top" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        
    </div>
</div>

<?php
include("footer.php");
?>