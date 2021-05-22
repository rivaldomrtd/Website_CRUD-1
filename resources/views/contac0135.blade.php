<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style type="text/css">
        .rounded-image {
            border-radius: 200px;
            -webkit-border-radius: 200px;
            -moz-border-radius: 200px;
        }

    </style>
</head>

<body>
    @extends('layout.header')
    @section('konten')
        <div class="container">
            <div class="row">
                <div class="kolom1" style="float: right; width:500px">
                    <h4>Contact Us</h4>
                    <p>Punya pertanyaan atau umpan balik ?</p>
                    <form action="" method="post">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" placeholder="you name" />
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="you email address" />
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="" placeholder="your message" cols="30"
                            rows="10"></textarea>
                        <br><br>
                        <button class="btn btn-success btn-block">Kirim</button>
                        <form>
                </div>
                <div class="kolom2" style="float: left; width:600px">
                    <div class="kolomm1" style="float: left; width:300px">
                        <div class="fotoku" style="position: center">
                            <img class="rounded-image" src="{{ asset('/aldo.jpg') }}" width="270" height="280">
                        </div>
                    </div>
                    <div class="kolomm2" style="float: left; width:300px">
                        <h2 data-prefix="01" class="block-heading block-heading--contact-1">
                            Rivaldo<br>Marta Dinata
                        </h2>
                        <p class="u-push-bottom@2">Do not do things that are excessive, for example claiming to be a wealthy
                            businessman or a Hollywood artist, even though it is not, let alone an artist's photo as your
                            profile photo. If you are not honest from the start, you will be labeled a liar even before the
                            game you get to know you better. You also definitely won't be attracted to someone like that,
                            right?</p>
                        <p class="u-heading | u-push-bottom@2">
                            Surabaya,<br>Kedinding Pakdidnding No.178</p>
                        <ul class="list--icons">
                            <li>
                                <a href="tel:0895605882133" class="social social--invert"><span
                                        class="icon icon--large icon--telephone"></span><span>0895-6058-8213-3</span></a>
                            </li>
                            <li>
                                <a href="mailto:rivaldomartadinata27@gmail.com" class="social social--invert"><span
                                        class="icon icon--large icon--mail"></span><span>rivaldomartadinata27@gmail.com</span></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/RivaldoMartadinata" class="social social--invert"><span
                                        class="icon icon--large icon--facebook-invert"></span><span
                                        class="is-hidden">Facebook</span><span>/RivaldoMartaDinata</span></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/rivaldomrtd" class="social social--invert"><span
                                        class="icon icon--large icon--instagram-invert"></span><span
                                        class="is-hidden">Instagram</span><span>/@rivaldomrtd</span></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        </div>
    @endsection
</body>

</html>
