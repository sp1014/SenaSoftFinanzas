<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?= $data['tittle'] ?></title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="Public/Assets/images/icono.png">
    <link href="Public/Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="Public/Assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="Public/Assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="Public/Assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Begin page -->
    <div class="accountbg">
        <div class="wrapper-page">
            <div class="card card-pages shadow-none">
                <div class="card-body">
                    <div class="text-center m-t-0 m-b-15">
                        <a class="logo logo-admin"><img src="Public/Assets/images/Logo.png" height="60" width="240px"></a>
                    </div>
                    <h5 class="font-18 text-center">Iniciar Sesión</h5>
                    <form class="form-horizontal m-t-30" id="signIn">

                        <div class="form-group">
                            <label> Seleccione la Voz:</label>
                            <select id='voiceList' class="form-control">
                        </div>

                        <div class="form-group">
                            <label> Seleccione la Voz:</label>
                            <select id='voiceList' class="form-control">
                        </div>

                        </select>
                        <div class="form-group">
                            <label>Correo</label>
                            <input class="form-control" type="email" id="txtEmail" name="txtEmail" placeholder="ejemplo@micorreo" required parsley-type="email">
                        </div>

                        <div class="form-group">
                            <label>Contraseña</label>
                            <input class="form-control" type="password" id="txtPass" name="txtPass" placeholder="Contraseña" required>
                        </div>

                        <div class="form-group text-center m-t-20">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Ingresar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END wrapper -->
    <!-- jQuery  -->
    <script src="Public/Assets/js/jquery.min.js"></script>
    <script src="Public/Assets/js/bootstrap.bundle.min.js"></script>
    <script src="Public/Assets/js/metismenu.min.js"></script>
    <script src="Public/Assets/js/jquery.slimscroll.js"></script>
    <script src="Public/Assets/js/waves.min.js"></script>

    <!-- Parsley js -->
    <script src="Public/Assets/plugins/parsleyjs/parsley.min.js"></script>
    <!-- App js -->
    <script src="Public/Assets/js/app.js" defer></script>
    <script>
        const base_url = 'http://localhost/SenaSoftFinanzas/';
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="Public/Assets/js/functions/signIn.js"></script>

    <script defer>
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>
    <script>
        var txtInput1 = document.querySelector('#txtEmail');

        var txtInput3 = document.querySelector('#txtPass');
        var txtInput4 = document.querySelector('#text4');

        var txtInput5 = document.querySelector('#myList');


        var voiceList = document.querySelector('#voiceList');
        var synth = window.speechSynthesis;
        var voices = [];

        //PopulateVoices();
        if (speechSynthesis !== undefined) {
            speechSynthesis.onvoiceschanged = PopulateVoices;
        }
        if (txtInput1) {
            txtInput1.addEventListener('mouseover', () => {
                var toSpeak = new SpeechSynthesisUtterance(txtInput1.value);
                var selectedVoiceName = voiceList.selectedOptions[0].getAttribute('data-name');
                voices.forEach((voice) => {
                    if (voice.name === selectedVoiceName) {
                        toSpeak.voice = voice;
                    }
                });
                synth.speak(toSpeak);
            });
        }

        if (txtInput3) {
            txtInput3.addEventListener('click', () => {
                var toSpeak = new SpeechSynthesisUtterance(txtInput3.value);
                var selectedVoiceName = voiceList.selectedOptions[0].getAttribute('data-name');
                voices.forEach((voice) => {
                    if (voice.name === selectedVoiceName) {
                        toSpeak.voice = voice;
                    }
                });
                synth.speak(toSpeak);
            });
        }

        if (txtInput4) {
            txtInput4.addEventListener('click', () => {
                var toSpeak = new SpeechSynthesisUtterance(txtInput4.value);
                var selectedVoiceName = voiceList.selectedOptions[0].getAttribute('data-name');
                voices.forEach((voice) => {
                    if (voice.name === selectedVoiceName) {
                        toSpeak.voice = voice;
                    }
                });
                synth.speak(toSpeak);
            });
        }

        if (txtInput5) {
            txtInput5.addEventListener('mouseover', () => {
                var toSpeak = new SpeechSynthesisUtterance(txtInput5.value);
                var selectedVoiceName = voiceList.selectedOptions[0].getAttribute('data-name');
                voices.forEach((voice) => {
                    if (voice.name === selectedVoiceName) {
                        toSpeak.voice = voice;
                    }
                });
                synth.speak(toSpeak);
            });
        }

        function PopulateVoices() {
            voices = synth.getVoices();
            var selectedIndex = voiceList.selectedIndex < 0 ? 0 : voiceList.selectedIndex;
            voiceList.innerHTML = '';
            voices.forEach((voice) => {
                var listItem = document.createElement('option');
                listItem.textContent = voice.name;
                listItem.setAttribute('data-lang', voice.lang);
                listItem.setAttribute('data-name', voice.name);
                voiceList.appendChild(listItem);
            });

            voiceList.selectedIndex = selectedIndex;
        }
    </script>
</body>

</html>