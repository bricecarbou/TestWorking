<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Clash Royale Trade</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.7.2-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
     @include('flash::message')
     <form action="/connexion" method="post" class="section">
        {{ csrf_field() }}

        <section class="hero is-fullheight">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <div class="column is-4 is-offset-4">
                        <h3 class="title has-text-grey">Login</h3>
                        <p class="subtitle has-text-grey">Please login to proceed.</p>
                        <div class="box">
                            <figure class="avatar">
                                <img src="https://www.withoutthesarcasm.com/wp-content/uploads/Clash-Royale-Laughing-King.jpg" width="128" height="128">
                            </figure>
                            <form>
                                <div class="field">
                                    <div class="control">
                                        <input class="input is-large" type="nick" name="nick" placeholder="Your Nick" autofocus="">
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input class="input is-large" type="password" name="password" placeholder="Your Password">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <button class="button is-link is-block is-info is-large is-fullwidth" type="submit">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <p class="has-text-grey">
                            <a href="/subscribe">Sign Up</a> &nbsp;·&nbsp;
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <script async type="text/javascript" src="../js/bulma.js"></script>
    </form>
</body>

</html>