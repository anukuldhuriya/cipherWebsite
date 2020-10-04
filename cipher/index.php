<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        body {
            cursor: pointer;

        }
        img{
            height: 40px;
            width:  40px;
        }
        .plaintext {
            border: 1px solid;
            background: white;
            font-size: 30px;
            color: black;
            padding-top: 5px;
            border: 1px solid black;
            padding-bottom: 5px;
            padding-left: 10px;
            padding-right: 10px;
            font-weight: bold;
        }
        .result{
            padding-top:10px;
        }
    </style>
</head>

<body>
    <div class="card">
    <div class="card-header text-center bg-primary text-white"><?php echo "Pigpen Cipher"; ?></div>
        <div class="card-body">
            <div class="col-md-12 col-sm-12 col-xs-12 row">
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/a.png" alt="a">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/b.png" alt="b">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/c.png" alt="c">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/d.png" alt="d">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/e.png" alt="e">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/f.png" alt="f">
                </div>
            </div>
            <div class="col-md-12 col-xs-12 row">
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/g.png" alt="g">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/h.png" alt="h">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/i.png" alt="i">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/j.png" alt="j">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/k.png" alt="k">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/l.png" alt="l">
                </div>

            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 row">
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/m.png" alt="m">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/n.png" alt="n">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/o.png" alt="o">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/p.png" alt="p">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/q.png" alt="q">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/r.png" alt="r">
                </div>

            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 row">
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/s.png" alt="s">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/t.png" alt="t">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/u.png" alt="u">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/v.png" alt="v">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/w.png" alt="w">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/x.png" alt="x">
                </div>

            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 row">
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/y.png" alt="y">
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="pigpen/z.png" alt="z">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="col-md-12 col-xs-12 row">
                <div class="card bg-success text-white col-md-12">
                    <div class="card-body">CIPHERTEXT:-
                        <span class="ciphertext"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 row result">
                <div class="card bg-primary text-white col-md-12">
                    <div class="card-body ">PLAINTEXT:-
                        <span class="plaintext" style="display: none;"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    plainText = ""
    cipherText = ""
    $('img').on('click', function () {
        // Get the value of plain text to print as result
        var valueClicked = $(this).attr('alt')
        plainText += valueClicked+" "
        $('.plaintext').show()
        $('.plaintext').text(plainText)
        //Get the value of ciphertext to print as input
        var imageClicked = $(this).attr('src')
        cipherText += "<img src=" + imageClicked + "> "
        $('.ciphertext').html(cipherText)
    })
</script>

</html>