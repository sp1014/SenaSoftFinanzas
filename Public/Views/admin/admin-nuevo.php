<body>
    <?php
    require_once('Public/Views/vector/header.php');
    ?>
    <link rel="shortcut icon" href="Public/Assets/images/icono.png">
    <link href="Public/Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="Public/Assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="Public/Assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="Public/Assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="Public/Assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="Public/Assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="Public/Assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- end page-title -->
    <div class="form-row  d-flex justify-content-center">
        <div class="col-lg-5">
            <div class="card m-b-30">
                <div class="card-body">

                    <form id="frm-admin" action="?c=admin&a=Guardar" method="post" enctype="multipart/form-data">

                    <div class="form-group col-md-6">
                   <label> Seleccione la Voz:</label> 
                   <select  id='voiceList' class="form-control"> </select>
                    </div>

               
                        <div class="form-group col-md-6">
                            <label>Nombre</label>
                            <input type="text" id="nombre" name="nombre" value="<?php echo $pvd->nombre; ?>" class="form-control" required />
                        </div>

                        <div class="form-group col-md-6">
                            <label>Tipo Documento</label>
                            <!-- <input type="text" name="id_tipodocumento" value="" class="form-control"  data-validacion-tipo="requerido|min:100" />-->
                            <select name="id_tipodocumento" id="txtTipoDoc" class="form-control" value="<?php echo $pvd->id_tipodocumento; ?>" required>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Numero Documento</label>
                            <input type="text" id="numero_documento" name="numero_documento" data-parsley-type="number" value="<?php echo $pvd->numero_documento; ?>" class="form-control" required data-validacion-tipo="requerido|min:10" />
                        </div>

                        <div class="form-group col-md-6">
                            <label>Teléfono</label>
                            <input type="text" id="telefono" name="telefono" data-parsley-type="number" value="<?php echo $pvd->telefono; ?>" class="form-control" required data-validacion-tipo="requerido|min:10" />
                        </div>

                        <div class="form-group col-md-6">
                            <label>Correo</label>
                            <input type="text" id="correo" name="correo" value="<?php echo $pvd->correo; ?>" data-parsley-type="email" class="form-control" data-validacion-tipo="requerido|min:10" />
                        </div>

                        <div class="form-group col-md-6">
                            <label>Clave</label>
                            <input type="password" name="pass" value="<?php echo $pvd->pass; ?>" data-parsley-type="password" class="form-control" required data-validacion-tipo="requerido|min:10" />
                        </div>

                        <div class="form-group col-md-6">
                            <label>Rol</label>
                            <select class="form-select form-control" name="tipo_rol" value="<?php echo $pvd->tipo_rol; ?>" required>
                                <option value="Administrador">Administrador</option>
                                <option value="Cliente Interno">Cliente Interno</option>
                                <option value="Cliente Externo">Cliente Externo</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Estado</label>
                            <select class="form-select form-control" name="estado" value="<?php echo $pvd->estado; ?>" required>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->



        
        <?php
        require_once('Public/Views/vector/footer.php');
        require_once('Public/Views/components/scripts.php');
        ?>
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
        <script defer>
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>



<script>
        var txtInput1 = document.querySelector('#nombre');

        var txtInput3 = document.querySelector('#numero_documento');
        
        var txtInput4 = document.querySelector('#telefono');

        var txtInput5 = document.querySelector('#correo');


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