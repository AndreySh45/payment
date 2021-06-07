<?php require_once 'inc/functions.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Витрина товаров</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<section class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <img class="card-img-top" src="http://via.placeholder.com/300x200" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Товар 1</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="price text-danger">100 UAH</p>
                        <a href="#" class="btn btn-primary buy" data-price="100" data-product="Товар 1">Купить</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <img class="card-img-top" src="http://via.placeholder.com/300x200" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Товар 2</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="price text-danger">110 UAH</p>
                        <a href="#" class="btn btn-primary buy" data-price="110" data-product="Товар 2">Купить</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <img class="card-img-top" src="http://via.placeholder.com/300x200" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Товар 3</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="price text-danger">120 UAH</p>
                        <a href="#" class="btn btn-primary buy" data-price="120" data-product="Товар 3">Купить</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <img class="card-img-top" src="http://via.placeholder.com/300x200" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Товар 4</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="price text-danger">130 UAH</p>
                        <a href="#" class="btn btn-primary buy" data-price="130" data-product="Товар 4">Купить</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <img class="card-img-top" src="http://via.placeholder.com/300x200" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Товар 5</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="price text-danger">140 UAH</p>
                        <a href="#" class="btn btn-primary buy" data-price="140" data-product="Товар 5">Купить</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card">
                    <img class="card-img-top" src="http://via.placeholder.com/300x200" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Товар 6</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="price text-danger">150 UAH</p>
                        <a href="#" class="btn btn-primary buy" data-price="150" data-product="Товар 6">Купить</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="cart">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Оформление заказа</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
      </div>
      <div class="modal-body">
            <form id="buy" method="POST">
                <div class="form-group">
                    <label for="name" class="form-label">Ваше имя</label>
                    <input type="name" name="name" class="form-control" id="name" placeholder="Ваше имя" required>                 
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="product">Выбранный товар</label>
                    <input type="text" name="product" class="form-control" id="product" readonly>
                </div>
                <div class="form-group">
                    <label for="price">Цена</label>
                    <input type="text" name="price" class="form-control" id="price" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Купить</button>
        </form>
      </div>
      
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>