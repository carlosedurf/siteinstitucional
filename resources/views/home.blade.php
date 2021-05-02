@extends('layouts.app')

@section('content')
    <div id="MainCarousel" class="wow fadeInUp" data-wow-delay="1s">
        <div style="max-width:100%;margin: 0 auto;" id="8562db80-ff4c-41bf-9240-873a7a4fd4b3"
             class="inner-content-slide carousel slide" data-ride="carousel" data-interval="3000" data-pause="hover">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="item-img" role="img" aria-label=""
                         style="padding-bottom: calc((430 / 1347) * 100%);background-image:url(https://inovaweb-production.s3.amazonaws.com/attachment/image/original_3cb7bfd1-d8fd-43df-b1dd-88ffbbc89318.jpg);background-size:cover"></div>
                    <div data-appearance="slide_caption_background" class="carousel-caption"><h3
                            data-appearance="slide_title_color">FALE SOBRE O SEU NEGÓCIO</h3></div>
                </div>
                <div class="item ">
                    <div class="item-img" role="img" aria-label=""
                         style="padding-bottom: calc((430 / 1347) * 100%);background-image:url(/storage/assets/default-office2.1.jpg);background-size:cover"></div>
                    <div data-appearance="slide_caption_background" class="carousel-caption"><h3
                            data-appearance="slide_title_color">FALE SOBRE O SEU NEGÓCIO</h3></div>
                </div>
                <div class="item ">
                    <div class="item-img" role="img" aria-label=""
                         style="padding-bottom: calc((430 / 1347) * 100%);background-image:url(https://inovaweb-production.s3.amazonaws.com/attachment/image/original_0153a68b-1f32-46c4-934d-d98e65ce5363.jpg);background-size:cover"></div>
                    <div data-appearance="slide_caption_background" class="carousel-caption"><h3
                            data-appearance="slide_title_color">FALE SOBRE O SEU NEGÓCIO</h3><a
                            data-appearance="slide_button_background" href="{{ route('about') }}" class="btn btn-primary"><span
                                data-appearance="slide_button_text_color">Saiba mais</span></a></div>
                </div>
            </div>
            <a class="left carousel-control" href="#8562db80-ff4c-41bf-9240-873a7a4fd4b3" role="button"
               data-slide="prev"><i class="icon-prev"></i><span class="sr-only">Anterior</span></a><a
                class="right carousel-control" href="#8562db80-ff4c-41bf-9240-873a7a4fd4b3" role="button"
                data-slide="next"><i class="icon-next"></i><span class="sr-only">Próximo</span></a></div>
    </div>

    <section data-section-area='V10'>
        <div class='home-section-item-wrapper' data-section='home-section' data-position='1' data-area='V10'
             data-section-id='0d5acd0a-cd33-4873-821c-7bc04ca017b6'>
            <div class='container'><h2 class='lws-homesection-title'>Nossos Serviços Contábeis</h2>
                <div class='lws-homesection-body'>Veja abaixo como nossa empresa de contabilidade pode te ajudar no seu
                    dia-a-dia.
                </div>
                <div class='lws-homesection-resource-list'>
                    <div class='row'>
                        <div class='col-xs-12 col-sm-6 col-md-4'>
                            <div class='lws-homesection-wrapper-item'>
                                <div role='img' aria-label='' class='resource-list-post-thumbnail'
                                     style='background-image:url(https://inovaweb-production.s3.amazonaws.com/attachment/image/medium_72ef1f66-a82c-4a31-b2c3-01a2d487f118.jpg);background-size:cover'></div>
                                <h4 class='resource-list-title'>Nome do serviço </h4>
                                <div class='resource-list-excerpt'>Conte aqui tudo sobre o seu serviço. Quais são as
                                    informações importantes que vale a pena passar para as pessoas que entraram no seu
                                    site? Quais as...
                                </div>
                                <a href='{{ route('services.show', 1) }}' class='btn btn-primary'>Saiba mais</a></div>
                        </div>
                        <div class='col-xs-12 col-sm-6 col-md-4'>
                            <div class='lws-homesection-wrapper-item'>
                                <div role='img' aria-label='' class='resource-list-post-thumbnail'
                                     style='background-image:url(https://inovaweb-production.s3.amazonaws.com/attachment/image/medium_0a9d7349-76e5-4e3e-848c-e4ab836838b3.jpg);background-size:cover'></div>
                                <h4 class='resource-list-title'>Nome do serviço </h4>
                                <div class='resource-list-excerpt'>Conte aqui tudo sobre o seu serviço. Quais são as
                                    informações importantes que vale a pena passar para as pessoas que entraram no seu
                                    site? Quais as...
                                </div>
                                <a href='{{ route('services.show', 1) }}' class='btn btn-primary'>Saiba mais</a></div>
                        </div>
                        <div class="hidden-xs col-sm-12 hidden-md hidden-lg"></div>
                        <div class='col-xs-12 col-sm-6 col-md-4'>
                            <div class='lws-homesection-wrapper-item'>
                                <div role='img' aria-label='' class='resource-list-post-thumbnail'
                                     style='background-image:url(https://inovaweb-production.s3.amazonaws.com/attachment/image/medium_b2cecef0-2953-4483-b649-86e00b4142c5.jpg);background-size:cover'></div>
                                <h4 class='resource-list-title'>Nome do serviço </h4>
                                <div class='resource-list-excerpt'>Conte aqui tudo sobre o seu serviço. Quais são as
                                    informações importantes que vale a pena passar para as pessoas que entraram no seu
                                    site? Quais as...
                                </div>
                                <a href='{{ route('services.show', 1) }}' class='btn btn-primary'>Saiba mais</a></div>
                        </div>
                        <div class="hidden-xs hidden-sm col-md-12 col-lg-12"></div>
                        <div class='col-xs-12 col-sm-6 col-md-4'>
                            <div class='lws-homesection-wrapper-item'>
                                <div role='img' aria-label='' class='resource-list-post-thumbnail'
                                     style='background-image:url(https://inovaweb-production.s3.amazonaws.com/attachment/image/medium_21ec2cdb-a1a1-4149-8f0d-3fd0b5b7be14.jpg);background-size:cover'></div>
                                <h4 class='resource-list-title'>Nome do serviço </h4>
                                <div class='resource-list-excerpt'>Conte aqui tudo sobre o seu serviço. Quais são as
                                    informações importantes que vale a pena passar para as pessoas que entraram no seu
                                    site? Quais as...
                                </div>
                                <a href='{{ route('services.show', 1) }}' class='btn btn-primary'>Saiba mais</a></div>
                        </div>
                        <div class="hidden-xs col-sm-12 hidden-md hidden-lg"></div>
                        <div class='col-xs-12 col-sm-6 col-md-4'>
                            <div class='lws-homesection-wrapper-item'>
                                <div role='img' aria-label='' class='resource-list-post-thumbnail'
                                     style='background-image:url(https://inovaweb-production.s3.amazonaws.com/attachment/image/medium_780a491e-b3ed-436d-b0ca-98ce1057dbd4.jpg);background-size:cover'></div>
                                <h4 class='resource-list-title'>Nome do serviço </h4>
                                <div class='resource-list-excerpt'>Conte aqui tudo sobre o seu serviço. Quais são as
                                    informações importantes que vale a pena passar para as pessoas que entraram no seu
                                    site? Quais as...
                                </div>
                                <a href='{{ route('services.show', 1) }}' class='btn btn-primary'>Saiba mais</a></div>
                        </div>
                        <div class='col-xs-12 col-sm-6 col-md-4'>
                            <div class='lws-homesection-wrapper-item'>
                                <div role='img' aria-label='' class='resource-list-post-thumbnail'
                                     style='background-image:url(https://inovaweb-production.s3.amazonaws.com/attachment/image/medium_1f1317ed-1c17-49f5-a389-86efd73785d0.jpg);background-size:cover'></div>
                                <h4 class='resource-list-title'>Nome do serviço </h4>
                                <div class='resource-list-excerpt'>Conte aqui tudo sobre o seu serviço. Quais são as
                                    informações importantes que vale a pena passar para as pessoas que entraram no seu
                                    site? Quais as...
                                </div>
                                <a href='{{ route('services.show', 1) }}' class='btn btn-primary'>Saiba mais</a></div>
                        </div>
                        <div class="hidden-xs col-sm-12 hidden-md hidden-lg"></div>
                        <div class="hidden-xs hidden-sm col-md-12 col-lg-12"></div>
                    </div>
                </div>
            </div><!-- .container --></div><!-- data-section --></section>

    <section id="FeaturedBlocks">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-sm-4 col-md-4 wow bounceInUp" data-wow-delay="0.3s"
                     data-wow-offset="100">
                    <div class="side-blocks" data-iw-group="group1">
                        <a target="_self" href="{{ route('services.index') }}" data-iw-op="no-label"
                           data-iw-link="link_group1" class="">
                            <div
                                style="background-image: url(https://inovaweb-production.s3.amazonaws.com/attachment/image/large_780a491e-b3ed-436d-b0ca-98ce1057dbd4.jpg); background-size: cover"
                                class="image-icon"
                                data-iw-bg="https://inovaweb-production.s3.amazonaws.com/attachment/image/large_780a491e-b3ed-436d-b0ca-98ce1057dbd4.jpg"
                                data-iw-image="image_group1" data-iw-version="medium"></div>
                            <h3 data-iw-line="title_group1">Sobre</h3>
                            <p data-iw-multiline="body_group1">Fale aqui, de forma resumida, sobre os seus produtos e
                                serviços, ou diga quais são as principais características da sua empresa. Você também
                                pode utilizar este espaço como preferir.quem entende do assunto.</p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-sm-4 col-md-4 wow bounceInUp" data-wow-delay="0.7s"
                     data-wow-offset="150">
                    <div class="side-blocks" data-iw-group="group2">
                        <a target="_self" href="{{ route('blog.index') }}" data-iw-op="no-label"
                           data-iw-link="link_group2" class="">
                            <div
                                style="background-image: url(https://inovaweb-production.s3.amazonaws.com/attachment/image/large_1f1317ed-1c17-49f5-a389-86efd73785d0.jpg); background-size: cover"
                                class="image-icon"
                                data-iw-bg="https://inovaweb-production.s3.amazonaws.com/attachment/image/large_1f1317ed-1c17-49f5-a389-86efd73785d0.jpg"
                                data-iw-image="image_group2" data-iw-version="medium"></div>
                            <h3 data-iw-line="title_group2">Sobre</h3>
                            <p data-iw-multiline="body_group2">Fale aqui, de forma resumida, sobre os seus produtos e
                                serviços, ou diga quais são as principais características da sua empresa. Você também
                                pode utilizar este espaço como preferir.</p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-sm-4 col-md-4 wow bounceInUp" data-wow-delay="1.1s"
                     data-wow-offset="150">
                    <div class="side-blocks" data-iw-group="group3">
                        <a target="_self" href="{{ route('about') }}" data-iw-op="no-label" data-iw-link="link_group3"
                           class="">
                            <div
                                style="background-image: url(https://inovaweb-production.s3.amazonaws.com/attachment/image/large_26fbdc7b-06a7-42de-981f-74c5af36c82f.jpg); background-size: cover"
                                class="image-icon"
                                data-iw-bg="https://inovaweb-production.s3.amazonaws.com/attachment/image/large_26fbdc7b-06a7-42de-981f-74c5af36c82f.jpg"
                                data-iw-image="image_group3" data-iw-version="medium"></div>
                            <h3 data-iw-line="title_group3">Sobre</h3>
                            <p data-iw-multiline="body_group3">Fale aqui, de forma resumida, sobre os seus produtos e
                                serviços, ou diga quais são as principais características da sua empresa. Você também
                                pode utilizar este espaço como preferir.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-section-area='V20'></section>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <section data-section-area='V20A'></section>
            </div>
            <div class="col-xs-12 col-sm-6">
                <section data-section-area='V20B'></section>
            </div>
        </div>
    </div>

    <section id="HomeGallery">
        <div class="container">
            <header data-iw-group="group4">
                <h3 data-iw-line="title_group4" class="wow fadeInUp" data-wow-delay="0.5s">Veja abaixo nossas
                    imagens</h3>
            </header>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-sm-4 col-md-4 wow bounceInUp" data-wow-delay="1s">
                    <div data-iw-group="group5">
                        <a target="_self" href="{{ route('about') }}" data-iw-op="no-label" data-iw-link="link_group5"
                           class="">
                            <h4 class="titulo-imagens" data-iw-line="title_group5">Seu negócio</h4>
                            <div
                                style="background-image: url(https://inovaweb-production.s3.amazonaws.com/attachment/image/large_10debbd4-afb8-4f04-a04a-6f5c4c9c382b.jpg); background-size: cover"
                                class="img-galeria"
                                data-iw-bg="https://inovaweb-production.s3.amazonaws.com/attachment/image/large_10debbd4-afb8-4f04-a04a-6f5c4c9c382b.jpg"
                                data-iw-image="image_group5" data-iw-version="medium"></div>
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-sm-4 col-md-4 wow bounceInUp" data-wow-delay="1.4s">
                    <div data-iw-group="group6">
                        <a target="_self" href="{{ route('products.index') }}" data-iw-op="no-label"
                           data-iw-link="link_group6" class="">
                            <h4 class="titulo-imagens" data-iw-line="title_group6">Seu negócio</h4>
                            <div
                                style="background-image: url(https://inovaweb-production.s3.amazonaws.com/attachment/image/large_bf1aecf9-4231-43bb-9b9d-f30211e61a0a.jpg); background-size: cover"
                                class="img-galeria"
                                data-iw-bg="https://inovaweb-production.s3.amazonaws.com/attachment/image/large_bf1aecf9-4231-43bb-9b9d-f30211e61a0a.jpg"
                                data-iw-image="image_group6" data-iw-version="medium"></div>
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-sm-4 col-md-4 wow bounceInUp" data-wow-delay="1.8s">
                    <div data-iw-group="group7">
                        <a target="_self" href="{{ route('products.index') }}" data-iw-op="no-label"
                           data-iw-link="link_group7" class="">
                            <h4 class="titulo-imagens" data-iw-line="title_group7">Seu negócio</h4>
                            <div
                                style="background-image: url(https://inovaweb-production.s3.amazonaws.com/attachment/image/large_186fe68e-98cb-4999-98cd-e37138eecfcf.jpg); background-size: cover"
                                class="img-galeria"
                                data-iw-bg="https://inovaweb-production.s3.amazonaws.com/attachment/image/large_186fe68e-98cb-4999-98cd-e37138eecfcf.jpg"
                                data-iw-image="image_group7" data-iw-version="medium"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-section-area='V30'></section>
@endsection
