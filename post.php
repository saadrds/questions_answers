<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - BBBootstrap</title>
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>html,
body {
    height: 100%
}

body {
    display: grid;
    place-items: center;
    background: #00d2ff
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border-radius: 6px;
    -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1)
}

.form-control {
    border-color: transparent transparent #00d2ff transparent;
    background: transparent;
    outline: 0 !important
}

.form-control:focus {
    border-color: transparent transparent blue transparent;
    background: transparent;
    outline: 0 !important;
    box-shadow: 0 0 0 0rem rgba(0, 123, 255, .25)
}

.form-control {
    position: relative;
    display: inline-block;
    overflow: hidden
}

.form-control>input[type=text] {
    border: none;
    border-bottom: 3px solid red;
    outline: none
}

.underline-animation {
    transition: all 1s;
    display: inline-block;
    bottom: 0;
    left: -100%;
    position: absolute;
    width: 100%;
    height: 2px;
    background-color: #64e4fe
}

.form-control>input[type=text]:focus+.underline-animation {
    left: 0
}

.send-button {
    float: right
}

.send-button .button {
    font: inherit;
    line-height: normal;
    cursor: pointer;
    background-color: #00d2ff;
    color: white;
    padding: 11px;
    border: none;
    text-transform: uppercase;
    text-align: center;
    letter-spacing: 0.14286em;
    transition-duration: 0.4s
}

.send-button .button:hover,
.form .button:focus,
.form .button:active {
    box-shadow: 0 10px 15px rgba(0, 0, 0, .1)
}

.send-button .button:active {
    position: relative;
    top: 1px;
    left: 1px
}</style>
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="container text-center">
    <div class="card p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6"> <input type="text" placeholder="Titre" class="form-control" /> </div>
                    <div class="col-md-6"> <input type="text" placeholder="Categorie" class="form-control" /> </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"> <textarea class="form-control textarea" rows="4">Question </textarea> </div>
                </div>
                <div class="send-button mt-4"> <button class="button">Post my question </button> </div>
            </div>
        </div>
    </div>
</div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript'></script>
                                </body>
                            </html>