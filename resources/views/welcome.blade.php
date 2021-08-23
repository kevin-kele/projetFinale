<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
   <title>projet</title>
</head>
<body>
        <!-- L'élément #app -->
<section id="app" >
        <header>
            
        <img width="250" class="card-img-top" src="{{asset('images/assets/bitchest_logo.png')}}"> 
                <h1>Crypto World Evolution</h1>
            <button>
                Sign out
            <font-awesome-icon :icon="['fas', 'sign-out-alt']"/>
                
            </button>
       
        </header>
    <div class="content">
            <nav>
                 <ul class="nav flex-column">
                            <li class="nav-item">
                                 <router-link to="/home">Accueil</router-link>
                                 
                            </li>
                            <li class="nav-item">
                                <router-link to="/btc">Bitcoin <img class="card-img-top" src="{{asset('images/assets/bitcoin.png')}}"> </router-link> 
                                
                            </li>
                            <li class="nav-item">
                               <router-link to="/ether">Ethereum <img class="card-img-top" src="{{asset('images/assets/ethereum.png')}}"></router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/ripple">Ripple <img class="card-img-top" src="{{asset('images/assets/ripple.png')}}"></router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/bitcoin cash">Bitcoin Cash <img class="card-img-top" src="{{asset('images/assets/bitcoin-cash.png')}}"></router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/cardano">Cardano <img class="card-img-top" src="{{asset('images/assets/cardano.png')}}"></router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/litecoin">Litecoin <img class="card-img-top" src="{{asset('images/assets/litecoin.png')}}"></router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/nem">Nem <img class="card-img-top" src="{{asset('images/assets/nem.png')}}"></router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/stellar">Stellar <img class="card-img-top" src="{{asset('images/assets/stellar.png')}}"></router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/iota">Iota <img class="card-img-top" src="{{asset('images/assets/iota.png')}}"></router-link>
                            </li>
                            <li class="nav-item">
                                <router-link to="/dash">Dash <img class="card-img-top" src="{{asset('images/assets/dash.png')}}"></router-link>
                            </li>
                        </ul>
            </nav>
            <div class="contenaire">
              <router-view></router-view>  
            </div>
        
    </div>

    </section>
    
    <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>