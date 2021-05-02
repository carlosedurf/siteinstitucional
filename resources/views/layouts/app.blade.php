<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Site Institucional</title>
    <meta property="og:title" content="702E B">
    <meta name="twitter:title" content="702E B">

    <meta property="og:image"
          content="https://inovaweb-production.s3.amazonaws.com/attachment/image/medium_47a19fec-117d-4b20-ab43-ac2702250b6e.JPG">
    <meta name="twitter:image"
          content="https://inovaweb-production.s3.amazonaws.com/attachment/image/medium_47a19fec-117d-4b20-ab43-ac2702250b6e.JPG">
    <meta property="og:image:secure_url"
          content="https://inovaweb-production.s3.amazonaws.com/attachment/image/medium_47a19fec-117d-4b20-ab43-ac2702250b6e.JPG">

    <meta property="og:image:width" content="600">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:site_name" content="702E B">
    <meta property="og:url" content="https://702e-b.loguei.com/">
    <meta property="og:type" content="website">


    <meta name="csrf-param" content="authenticity_token"/>
    <meta name="csrf-token"
          content="StUq2wn6S3aMiiNzTB8+zE36zfEp6g5IsagFfimW5NGypabLESfF/kGb9aVbW4GqsIS4gpSHtMXOwZgR2oHdyg=="/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
          integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
          crossorigin="anonymous"/>

    <link rel="stylesheet" media="all" href="{{ asset('css/site.css') }}"/>
    <link rel="stylesheet" media="all" href="{{ asset('css/main.css') }}"/>

    @yield('styles')

    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="index">
</head>

<body class="home palette-main">

@include('partials.header')

@yield('content')

@include('partials.footer')

<script>
    var lws_siteinfo = {
        "slug": "702e-b",
        "action_name": "home",
        "controller_name": "sites",
        "resource_type": null,
        "resource_slug": null,
        "namespace": ""
    };
</script>

<script src="{{ asset('js/site.js') }}"></script>

<div id="side-social-networks-loguei" role="group" class="list-unstyled btn-group-vertical">
    <a
        target="_blank" href="https://www.facebook.com" class="facebook btn btn-default">
        <i class="fa fa-facebook"></i>
    </a>
    <a
        target="_blank" href="https://twitter.com" class="twitter btn btn-default">
        <i class="fa fa-twitter"></i>
    </a>
    <a
        target="_blank" href="https://www.instagram.com" class="instagram btn btn-default">
        <i class="fa fa-instagram"></i>
    </a>
    <a
        target="_blank" href="https://www.linkedin.com" class="linkedin btn btn-default">
        <i class="fa fa-linkedin"></i>
    </a>
    <a
        target="_blank" href="https://www.youtube.com" class="youtube-play btn btn-default">
        <i class="fa fa-youtube-play"></i>
    </a>
</div>

<div class="modal fade" id="ModalAVS-CB-Email" tabindex="-1" role="dialog" aria-labelledby="ModalAVS-CB-EmailLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="ModalAVS-CB-EmailLabel">Envie-nos uma mensagem</h4>
            </div>
            <div class="modal-body">
                <form class="iw-contact-form lws-main-form-contact form-ba8dea91-6741-4aab-98a2-d3a911612eac">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group"><label for="text-1559911182729">Nome completo<span
                                        style="color:red;font-weight:bold"> *</span></label><input type="hidden"
                                                                                                   name="field[text-1559911182729][label]"
                                                                                                   value="Nome completo"><input
                                    type="hidden" name="field[text-1559911182729][type]" value="text"><input
                                    class="form-control" type="text" name="field[text-1559911182729][value]"
                                    id="text-1559911182729" required="required"><input type="hidden"
                                                                                       name="field[text-1559911182729][subtype]"
                                                                                       value="text"></div>
                            <!-- .form-group --></div><!-- .col-xs-12 ... -->
                        <div class="col-xs-12">
                            <div class="form-group"><label for="text-1559911200078">Telefone</label><input type="hidden"
                                                                                                           name="field[text-1559911200078][label]"
                                                                                                           value="Telefone"><input
                                    type="hidden" name="field[text-1559911200078][type]" value="text"><input
                                    class="form-control" type="text" name="field[text-1559911200078][value]"
                                    id="text-1559911200078"><input type="hidden"
                                                                   name="field[text-1559911200078][subtype]"
                                                                   value="text"></div><!-- .form-group --></div>
                        <!-- .col-xs-12 ... -->
                        <div class="col-xs-12">
                            <div class="form-group"><label for="text-1559911195582">Email<span
                                        style="color:red;font-weight:bold"> *</span></label><input type="hidden"
                                                                                                   name="field[text-1559911195582][label]"
                                                                                                   value="Email"><input
                                    type="hidden" name="field[text-1559911195582][type]" value="text"><input
                                    class="form-control" type="email" name="field[text-1559911195582][value]"
                                    id="text-1559911195582" required="required"><input type="hidden"
                                                                                       name="field[text-1559911195582][subtype]"
                                                                                       value="email"></div>
                            <!-- .form-group --></div><!-- .col-xs-12 ... -->
                        <div class="col-xs-12">
                            <div class="form-group"><label for="textarea-1559911207846">Mensagem<span
                                        style="color:red;font-weight:bold"> *</span></label><input type="hidden"
                                                                                                   name="field[textarea-1559911207846][label]"
                                                                                                   value="Mensagem"><input
                                    type="hidden" name="field[textarea-1559911207846][type]" value="textarea"><textarea
                                    rows="5" class="form-control" id="textarea-1559911207846"
                                    name="field[textarea-1559911207846][value]" required="required"></textarea></div>
                            <!-- .form-group --></div><!-- .col-xs-12 ... --></div><!-- .row --><input type="hidden"
                                                                                                       name="lws_form_name"
                                                                                                       value="Formulário de contato"><input
                        type="hidden" name="lws_form_identifier" value="ba8dea91-6741-4aab-98a2-d3a911612eac"><input
                        type="hidden" name="lws_current_url" value="https://702e-b.loguei.com/">
                    <p class="lws-required-info" style="font-size: 13px;">Os campos com <span
                            style="color:red;font-weight:bold">*</span> são obrigatórios.</p>
                    <button data-appearance="content_btn_primary_background"
                            class="btn btn-submit btn-primary color-btn"><span
                            data-appearance="content_btn_primary_color">Enviar</span></button>
                    <input type="hidden" name="custom_form" value="1"></form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalAVS-CB-Callme" tabindex="-1" role="dialog" aria-labelledby="ModalAVS-CB-CallmeLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="ModalAVS-CB-CallmeLabel">Solicite uma ligação</h4>
            </div>
            <div class="modal-body">
                <form class="iw-contact-form lws-main-form-call_me form-308dbbf6-139e-4b96-bde6-fea09f900e54">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group"><p><span
                                        style='color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(255, 255, 255);'>Por favor, informe seus dados para que possamos ligar para você.</span>
                                </p></div><!-- .form-group --></div><!-- .col-xs-12 ... -->
                        <div class="col-xs-12">
                            <div class="form-group"><label for="text-1561081586A">Nome completo<span
                                        style="color:red;font-weight:bold"> *</span></label><input type="hidden"
                                                                                                   name="field[text-1561081586A][label]"
                                                                                                   value="Nome completo"><input
                                    type="hidden" name="field[text-1561081586A][type]" value="text"><input
                                    class="form-control" type="text" name="field[text-1561081586A][value]"
                                    id="text-1561081586A" required="required"><input type="hidden"
                                                                                     name="field[text-1561081586A][subtype]"
                                                                                     value="text"></div>
                            <!-- .form-group --></div><!-- .col-xs-12 ... -->
                        <div class="col-xs-12">
                            <div class="form-group"><label for="text-1561081586B">Telefone com DDD<span
                                        style="color:red;font-weight:bold"> *</span></label><input type="hidden"
                                                                                                   name="field[text-1561081586B][label]"
                                                                                                   value="Telefone com DDD"><input
                                    type="hidden" name="field[text-1561081586B][type]" value="text"><input
                                    class="form-control" type="text" name="field[text-1561081586B][value]"
                                    id="text-1561081586B" required="required"><input type="hidden"
                                                                                     name="field[text-1561081586B][subtype]"
                                                                                     value="text"></div>
                            <!-- .form-group --></div><!-- .col-xs-12 ... --></div><!-- .row --><input type="hidden"
                                                                                                       name="lws_form_name"
                                                                                                       value="Solicite uma ligação"><input
                        type="hidden" name="lws_form_identifier" value="308dbbf6-139e-4b96-bde6-fea09f900e54"><input
                        type="hidden" name="lws_current_url" value="https://702e-b.loguei.com/">
                    <p class="lws-required-info" style="font-size: 13px;">Os campos com <span
                            style="color:red;font-weight:bold">*</span> são obrigatórios.</p>
                    <button data-appearance="content_btn_primary_background"
                            class="btn btn-submit btn-primary color-btn"><span
                            data-appearance="content_btn_primary_color">Enviar</span></button>
                    <input type="hidden" name="custom_form" value="1"></form>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    var NEWSLETTER_URL = '/702e-b/newsletters';

    var DEFAULT_ADDRESS = 'Av. Atlântica, Copacabana, Rio de Janeiro/RJ';

    $('.iw-contact-form').submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var lws_siteinfo_str = jQuery.param(lws_siteinfo);

        form.find('.lws-validation-error-message').remove();

        var allowed = true;

        var checkbox_multiple = form.find('[data-require-one="true"]')

        if (checkbox_multiple.length) {
            checkbox_multiple.each(function () {
                var checkbox_group = $(this)
                let checkboxes = checkbox_group.find('input[type="checkbox"]');

                if (checkboxes.length) {
                    var checked = false;
                    checkboxes.each(function () {
                        if ($(this).is(':checked')) {
                            checked = true;
                        }
                    })

                    if (!checked) {
                        allowed = false;
                        checkbox_group.addClass("lws-content-highlight");
                        setTimeout(function () {
                            checkbox_group.removeClass('lws-content-highlight');
                        }, 2000);
                    }

                    console.log(checked)
                }
            })
        }

        if (!allowed) {
            form.append(`<div class='lws-validation-error-message'><strong>Erro:</strong> Por favor, preencha todos os campos obrigatórios.</div>`);
            return false;
        }

        $.ajax({
            url: '/contact/702e-b?authenticity_token=3W6EkZCUjif8%2BpJdTV1TgU9lYK2cbimo%2FLHoqOy%2B4YYlHgiBiEkArzHrRItaGeznshsV3iEDkyWD2HXHH6nYnQ%3D%3D',
            type: 'POST',
            data: form.serialize() + "&" + lws_siteinfo_str,
            success: function () {
                var redir = form.find('[name="iw_redir_loguei_cf"]')
                if (redir.length) {
                    window.location = redir.val();
                } else {
                    alert('Email enviado com sucesso');
                    form[0].reset();
                }
            },
            error: function () {
                alert('Erro ao enviar email');
            }
        });
    });
</script>

<script src="{{ asset('js/main.js') }}"></script>

@yield('scripts')

</body>
</html>
