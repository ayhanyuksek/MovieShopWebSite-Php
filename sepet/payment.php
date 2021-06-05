<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://css.gg/shopping-cart.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="SHORTCUT ICON" href="./img/turkuazAdress.png">
    <link rel="stylesheet" type="text/css" href="payment.css" />
    <title>Document</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-6 shipping-form">
                <h3 class="text-center">Shipping Address</h3>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="name" class="form-control" id="name">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="surname">Surname</label>
                        <input type="surname" class="form-control" id="surname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                </form>

            </div>
            <div class="col-5 payment-form" id="myP">
                <h3 class="text-center">Payment Method</h3>
                
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option selected>Select Payment method</option>
                        <option value="0">Credit Card</option>
                        <option value="1">Havale</option>
                    </select>
                    <div id= "credit">
                    <form class="credit-card">
                    
                    <div class="form-group">
                        <label for="inputAddress">Kart üzerindeki isim</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="İsim Soyisim">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Kart Numarası</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="xxxx-xxxx-xxxx-xxxx">
                    </div>
                    <div class="row">
                    <div class="form-group col-6">
                        <label class="label" for="inputAddress2">Son Kullanma Tarihi</label>
                        <input type="number" class="form-control  date-card " id="inputAddress2" placeholder="Ay" min="0" max="12">
                        <input type="number" class="form-control date-card" id="inputAddress2" placeholder="Yıl" min="0" max="99"> 
                    </div>
                    <div class="form-group col-6">
                        <label class="label" for="inputAddress2">CCV</label>
                        <input type="text" class="form-control  ccv-card" id="inputAddress2" placeholder="***">   
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
               
                </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>