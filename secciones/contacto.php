<section class="  pb-3">

        <div  id="contact-form-section" class="form-content-wrap container blanco">
            <div class="row">
                <div class="tab-content">
                    <div class="col-sm-12">
                        <div class="item-wrap">
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="item-content colBottomMargin">
                                        <div class="item-info text-center">
                                            <h2 class="azul ">¿En qué podemos ayudarte?</h2>
                                            <p >Escríbenos y pronto nos pondremos en contacto contigo</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-12">

                                    <form id="contactForm" name="contactform" data-toggle="validator"  class="popup-form" action="acciones/procesar-gracias.php" method="post">
                                        <div class="row">
                                            <div id="msgContactSubmit" class="hidden"></div>

                                            <div class="form-group col-sm-6">
                                                <div class="help-block with-errors"></div>
                                                <input name="fname" id="fname" placeholder="Tu nombre*" class="form-control" type="text" required data-error="Por favor ingresa tu nombre">
                                                <div class="input-group-icon"><i class="fa fa-user"></i></div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <div class="help-block with-errors"></div>
                                                <input name="email" id="email" placeholder="Tu E-mail*" pattern=".*@\w{2,}\.\w{2,}" class="form-control" type="email" required data-error="Por favor ingresa un correo electrónico válido">
                                                <div class="input-group-icon"><i class="fa fa-envelope"></i></div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <div class="help-block with-errors"></div>
                                                <input name="phone" id="phone" placeholder="Teléfono*" class="form-control" type="number" required data-error="Por favor ingresa tu número de teléfono">
                                                <div class="input-group-icon"><i class="fa fa-phone"></i></div>
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <div class="help-block with-errors"></div>
                                                <input name="subject" id="subject" placeholder="Asunto*" class="form-control" type="text" required data-error="Por favor ingresa el asunto">
                                                <div class="input-group-icon"><i class="fa fa-book"></i></div>
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <div class="help-block with-errors"></div>
                                                <textarea rows="3" name="message" id="message" placeholder="Escribe tu comentario aquí*" class="form-control" required data-error="Por favor ingresa un mensaje"></textarea>
                                                <div class="textarea input-group-icon"><i class="fa fa-pencil"></i></div>
                                            </div>

                                            <div class="form-group last col-sm-12">
                                                <button type="submit" id="submit" class="btn btn-custom"><i class='fa fa-envelope'></i> Enviar</button>
                                            </div>
                                            <div class=" col-sm-12">
                                                <span class="sub-text">* Campos requeridos</span>
                                            </div>

                                            <div class="clearfix"></div>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Form Validator -->
    <script src="js/validator.min.js"></script>
    <!-- Contact Form Js -->
    <script src="js/contact-form.js"></script>