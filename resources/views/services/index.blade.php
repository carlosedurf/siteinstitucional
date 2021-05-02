@extends('layouts.app')

@section('content')
    <main class="principal">
        <div class="container">
            <div class="inner-content">
                <h1 class="titulo-page wow fadeInUp" data-wow-delay="0.3s">Serviços</h1>

                <div class="category-description wow fadeInUp" data-wow-delay="0.3s"><div class='lws-category-description'>Ter um texto aqui é opcional. Se quiser, faça aqui um apanhado geral sobre os tipos de serviços que você oferece, ou aproveite este espaço para falar sobre as vantagens de contratar a sua empresa. Tenha o site ideal para o seu negócio. Ao criar um site com a Loguei, você poderá incluir quantos serviços quiser, então capriche na descrição de cada serviço, e o torne ainda mais interessante para o público-alvo. Na Loguei, a quantidade de páginas é ilimitada. Esta área do site, assim como muitas outras, é opcional. Lembre-se: Você pode colocar no site quantos serviços desejar, dessa forma você terá uma verdadeira vitrine online.</div></div>

                <ul class='lws-share-buttons'><li class='share-title'>Compartilhe:</li><li class='facebook'><a target='_blank' href='https://www.facebook.com/sharer.php?u=https://702e-b.loguei.com/categories/servicos'><i class='fa fa-facebook-square'></i></a></li><li class='twitter'><a target='_blank' href='https://twitter.com/share?url=https://702e-b.loguei.com/categories/servicos&text=Servi%C3%A7os'><i class='fa fa-twitter'></i></a></li><li class='whatsapp'><a target='_blank' href='https://api.whatsapp.com/send?text=Acredito que você possa se interessar: Servi%C3%A7os. Veja mais em: https://702e-b.loguei.com/categories/servicos'><i class='fa fa-whatsapp'></i></a></li><li class='email'><a target='_blank' href='mailto:?subject=Servi%C3%A7os&body=Servi%C3%A7os+-+Veja+mais+em%3A+https://702e-b.loguei.com/categories/servicos'><i class='fa fa-envelope'></i></a></li></ul>

                <div class="page-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="topicos">
                                <h3><a href="{{ route('services.show', 1) }}">Nome do serviço </a></h3>

                                <a href="{{ route('services.show', 1) }}" class="cat-thumbnail" style="background-image: url('https://inovaweb-production.s3.amazonaws.com/attachment/image/medium_72ef1f66-a82c-4a31-b2c3-01a2d487f118.jpg'); background-size: cover"></a>

                                <p class="excerpt">Conte aqui tudo sobre o seu serviço. Quais são as informações importantes que vale a pena passar para as pessoas que entraram no seu site? Quais as...</p>

                                <a href="{{ route('services.show', 1) }}" role="button" class="btn btn-primary">Saiba mais</a>
                            </div>
                        </div>



                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="topicos">
                                <h3><a href="{{ route('services.show', 1) }}">Nome do serviço </a></h3>

                                <a href="{{ route('services.show', 1) }}" class="cat-thumbnail" style="background-image: url('https://inovaweb-production.s3.amazonaws.com/attachment/image/medium_0a9d7349-76e5-4e3e-848c-e4ab836838b3.jpg'); background-size: cover"></a>

                                <p class="excerpt">Conte aqui tudo sobre o seu serviço. Quais são as informações importantes que vale a pena passar para as pessoas que entraram no seu site? Quais as...</p>

                                <a href="{{ route('services.show', 1) }}" role="button" class="btn btn-primary">Saiba mais</a>
                            </div>
                        </div>


                        <div class="hidden-xs col-sm-12 hidden-md hidden-lg"></div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="topicos">
                                <h3><a href="{{ route('services.show', 1) }}">Nome do serviço </a></h3>

                                <a href="{{ route('services.show', 1) }}" class="cat-thumbnail" style="background-image: url('https://inovaweb-production.s3.amazonaws.com/attachment/image/medium_b2cecef0-2953-4483-b649-86e00b4142c5.jpg'); background-size: cover"></a>

                                <p class="excerpt">Conte aqui tudo sobre o seu serviço. Quais são as informações importantes que vale a pena passar para as pessoas que entraram no seu site? Quais as...</p>

                                <a href="{{ route('services.show', 1) }}" role="button" class="btn btn-primary">Saiba mais</a>
                            </div>
                        </div>

                        <div class="hidden-xs hidden-sm col-md-12 col-lg-12"></div>

                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="topicos">
                                <h3><a href="{{ route('services.show', 1) }}">Nome do serviço </a></h3>

                                <a href="{{ route('services.show', 1) }}" class="cat-thumbnail" style="background-image: url('https://inovaweb-production.s3.amazonaws.com/attachment/image/medium_21ec2cdb-a1a1-4149-8f0d-3fd0b5b7be14.jpg'); background-size: cover"></a>

                                <p class="excerpt">Conte aqui tudo sobre o seu serviço. Quais são as informações importantes que vale a pena passar para as pessoas que entraram no seu site? Quais as...</p>

                                <a href="{{ route('services.show', 1) }}" role="button" class="btn btn-primary">Saiba mais</a>
                            </div>
                        </div>


                        <div class="hidden-xs col-sm-12 hidden-md hidden-lg"></div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="topicos">
                                <h3><a href="{{ route('services.show', 1) }}">Nome do serviço </a></h3>

                                <a href="{{ route('services.show', 1) }}" class="cat-thumbnail" style="background-image: url('https://inovaweb-production.s3.amazonaws.com/attachment/image/medium_780a491e-b3ed-436d-b0ca-98ce1057dbd4.jpg'); background-size: cover"></a>

                                <p class="excerpt">Conte aqui tudo sobre o seu serviço. Quais são as informações importantes que vale a pena passar para as pessoas que entraram no seu site? Quais as...</p>

                                <a href="{{ route('services.show', 1) }}" role="button" class="btn btn-primary">Saiba mais</a>
                            </div>
                        </div>



                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="topicos">
                                <h3><a href="{{ route('services.show', 1) }}">Nome do serviço </a></h3>

                                <a href="{{ route('services.show', 1) }}" class="cat-thumbnail" style="background-image: url('https://inovaweb-production.s3.amazonaws.com/attachment/image/medium_1f1317ed-1c17-49f5-a389-86efd73785d0.jpg'); background-size: cover"></a>

                                <p class="excerpt">Conte aqui tudo sobre o seu serviço. Quais são as informações importantes que vale a pena passar para as pessoas que entraram no seu site? Quais as...</p>

                                <a href="{{ route('services.show', 1) }}" role="button" class="btn btn-primary">Saiba mais</a>
                            </div>
                        </div>

                        <div class="hidden-xs hidden-sm col-md-12 col-lg-12"></div>
                        <div class="hidden-xs col-sm-12 hidden-md hidden-lg"></div>
                    </div>

                    <div class="items_pagination text-center"></div>
                </div>
            </div>
        </div>
    </main>
@endsection
