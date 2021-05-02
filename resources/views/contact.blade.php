@extends('layouts.app')

@section('content')
    <main class="principal">
        <div class="container">
            <div class="inner-content">
                <h1 class="titulo-page wow fadeInUp" data-wow-delay="0.3s">Fale conosco</h1>

                <div class="page-social-share wow fadeInUp" data-wow-delay="0.3s">
                    <ul class='lws-share-buttons'><li class='share-title'>Compartilhe:</li><li class='facebook'><a target='_blank' href='https://www.facebook.com/sharer.php?u=https://702e-b.loguei.com/fale-conosco'><i class='fa fa-facebook-square'></i></a></li><li class='twitter'><a target='_blank' href='https://twitter.com/share?url=https://702e-b.loguei.com/fale-conosco&text=Fale%20conosco'><i class='fa fa-twitter'></i></a></li><li class='whatsapp'><a target='_blank' href='https://api.whatsapp.com/send?text=Acredito que você possa se interessar: Fale%20conosco. Veja mais em: https://702e-b.loguei.com/fale-conosco'><i class='fa fa-whatsapp'></i></a></li><li class='email'><a target='_blank' href='mailto:?subject=Fale%20conosco&body=Fale%20conosco+-+Veja+mais+em%3A+https://702e-b.loguei.com/fale-conosco'><i class='fa fa-envelope'></i></a></li></ul>
                </div>

                <div class="page-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="editor-content"><p>Coloque todas as formas de contato que você disponibiliza para os seus clientes. Você terá também um formulário de contato, e receberá diretamente no seu email, todos os contatos feitos através deste formulário. Os formulários são personalizados, você pode incluir os "campos" que desejar, e ter "campos" de preenchimento obrigatório. </p>
                        <ul>
                            <li>WhatsApp: (00) 00000-0000  </li>
                            <li>Telefone: (00) 0000-0000</li>
                            <li>Email: contato@seusite.com</li>
                        </ul><form class="iw-contact-form lws-main-form-contact form-ba8dea91-6741-4aab-98a2-d3a911612eac"><div class="row"><div class="col-xs-12"><div class="form-group"><label for="text-1559911182729">Nome completo<span style="color:red;font-weight:bold"> *</span></label><input type="hidden" name="field[text-1559911182729][label]" value="Nome completo"><input type="hidden" name="field[text-1559911182729][type]" value="text"><input  class="form-control" type="text" name="field[text-1559911182729][value]" id="text-1559911182729" required="required"><input type="hidden" name="field[text-1559911182729][subtype]" value="text"></div><!-- .form-group --></div><!-- .col-xs-12 ... --><div class="col-xs-12"><div class="form-group"><label for="text-1559911200078">Telefone</label><input type="hidden" name="field[text-1559911200078][label]" value="Telefone"><input type="hidden" name="field[text-1559911200078][type]" value="text"><input  class="form-control" type="text" name="field[text-1559911200078][value]" id="text-1559911200078" ><input type="hidden" name="field[text-1559911200078][subtype]" value="text"></div><!-- .form-group --></div><!-- .col-xs-12 ... --><div class="col-xs-12"><div class="form-group"><label for="text-1559911195582">Email<span style="color:red;font-weight:bold"> *</span></label><input type="hidden" name="field[text-1559911195582][label]" value="Email"><input type="hidden" name="field[text-1559911195582][type]" value="text"><input  class="form-control" type="email" name="field[text-1559911195582][value]" id="text-1559911195582" required="required"><input type="hidden" name="field[text-1559911195582][subtype]" value="email"></div><!-- .form-group --></div><!-- .col-xs-12 ... --><div class="col-xs-12"><div class="form-group"><label for="textarea-1559911207846">Mensagem<span style="color:red;font-weight:bold"> *</span></label><input type="hidden" name="field[textarea-1559911207846][label]" value="Mensagem"><input type="hidden" name="field[textarea-1559911207846][type]" value="textarea"><textarea  rows="5" class="form-control" id="textarea-1559911207846" name="field[textarea-1559911207846][value]" required="required"></textarea></div><!-- .form-group --></div><!-- .col-xs-12 ... --></div><!-- .row --><input type="hidden" name="lws_form_name" value="Formulário de contato"><input type="hidden" name="lws_form_identifier" value="ba8dea91-6741-4aab-98a2-d3a911612eac"><input type="hidden" name="lws_current_url" value="https://702e-b.loguei.com/fale-conosco"><p class="lws-required-info" style="font-size: 13px;">Os campos com <span style="color:red;font-weight:bold">*</span> são obrigatórios.</p><button data-appearance="content_btn_primary_background" class="btn btn-submit btn-primary color-btn"><span data-appearance="content_btn_primary_color">Enviar</span></button><input type="hidden" name="custom_form" value="1"></form></div>

                </div>
            </div>
        </div>
    </main>
@endsection
