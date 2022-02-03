<!DOCTYPE html>
<html>

<head>
    <?php include VIEW_PATH . "layout/head.php"; ?>
</head>

<body>
    <section id="top">
        <img src="https://www.bing.com/<?= getBingWallpaperData()->images[0]->url ?>" id="backgroundWrapper" />
        <div class="full-screen p-3">
            <div class="bg-white p-3 shadow d-flex <?= isMobile() ? 'flex-column' : '' ?>" style="width: <?= isMobile() ? '100%' : 'fit-content' ?>;">
                <?php if (isMobile()) : ?>
                    <div class="w-100 d-flex">
                        <img src="/images/pp.png" style="width: 148px; height: auto;" />
                        <a class="p-btn-link my-auto ml-auto" data-toggle="collapse" href="#menu" role="button" aria-expanded="false" aria-controls="menu">
                            <i class="fas fa-bars fa-lg"></i>
                        </a>
                    </div>
                    <div class="collapse" id="menu">
                        <div class="mt-3 d-flex flex-column align-items-center">
                            <a href="#open-source" class="p-btn-link text-left py-3 w-100">Código aberto</a>
                            <a href="#front-end" class="p-btn-link text-left py-3 w-100">Front-end</a>
                            <a href="#contato" class="p-btn-link text-left py-3 w-100">Contato</a>
                        </div>
                    </div>
                <?php else : ?>
                    <img src="/images/pp.png" style="width: 148px; height: auto;" />
                    <div class="ml-3 d-flex align-items-center">
                        <a href="#open-source" class="p-btn-link">Código aberto</a>
                        <a href="#front-end" class="p-btn-link">Front-end</a>
                        <a href="#contato" class="p-btn-link">Contato</a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="bg-white p-2 px-3 shadow bottom-right-sm-text">Imagens diárias providas por <a target="_blank" href="https://www.microsoft.com/en-us/bing/bing-wallpaper">Bing</a></div>
        </div>
    </section>

    <section id="open-source">
        <div class="bg-white shadow p-header-padding border-bottom">
            <div class="container">
                <h1>Projetos de código aberto</h1>
                <span class="lead">Projetos que fundamentam a privacidade, segurança e qualidade da internet, para todos.</span>
                <div class="row mt-4">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="/images/Starless Sky.png" style="width: 48px; height: 48px;" />
                                <h4 class="mt-3">Starless Sky</h4>
                                <p>Protocolo de rede descentralizado, privado e seguro, com suporte para mensagens, contratos e identidades inteligentes.</p>
                                <a class="p-link" target="_blank" href="https://github.com/starless-sky-protocol">Visitar o repositório</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="front-end">
        <div class="bg-white shadow p-header-padding border-bottom">
            <div class="container">
                <h1>Projetos front-end</h1>
                <span class="lead">Projetos e apresentações feitas sob medida para sua empresa ou seu produto.</span>
                <div class="row mt-4">
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="card hover-shadow" style="min-height: 370px;">
                            <img class="card-img" src="/images/websites/pxvk.png" />
                            <div class="card-body">
                                <h5 class="card-title">PXVK</h5>
                                <p class="card-text">Site completo para selo musical com vinculação de artistas e lançamentos.</p>
                                <a target="_blank" href="https://pxvk.com.br/" class="p-link">Visitar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="card hover-shadow" style="min-height: 370px;">
                            <img class="card-img" src="/images/websites/impisa.png" />
                            <div class="card-body">
                                <h5 class="card-title">Acampamento Impisa</h5>
                                <p class="card-text">Landing Page para site de acampamentos e viagens em grupo.</p>
                                <a target="_blank" href="https://acampamentoimpisa.com.br/" class="p-link">Visitar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="card hover-shadow" style="min-height: 370px;">
                            <img class="card-img" src="/images/websites/collabproducoes.png" />
                            <div class="card-body">
                                <h5 class="card-title">Collab Produções</h5>
                                <p class="card-text">Landing Page para prestador de serviços em produção artística e audiovisual.</p>
                                <a target="_blank" href="https://collabproducoes.com/" class="p-link">Visitar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="card hover-shadow" style="min-height: 370px;">
                            <img class="card-img" src="/images/websites/foodstudio.png" />
                            <div class="card-body">
                                <h5 class="card-title">Food Studio</h5>
                                <p class="card-text">Landing Page para estúdio especializado em fotografias de comidas.</p>
                                <a target="_blank" href="https://foodstudio.com.br/" class="p-link">Visitar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="card hover-shadow" style="min-height: 370px;">
                            <img class="card-img" src="/images/websites/hogx.png" />
                            <div class="card-body">
                                <h5 class="card-title">HOGX Imports</h5>
                                <p class="card-text">E-commerce para venda de importados da Apple.</p>
                                <a target="_blank" href="https://hogx-imports.com/" class="p-link">Visitar (em construção)</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="card hover-shadow" style="min-height: 370px;">
                            <img class="card-img" src="/images/websites/plenitudesign.png" />
                            <div class="card-body">
                                <h5 class="card-title">Plenitudesign</h5>
                                <p class="card-text">E-commerce para venda de sofás e poltronas exclusivos da fábrica.</p>
                                <a target="_blank" href="https://plenitude-design.project-principium.dev/" class="p-link">Visitar (em construção)</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="card hover-shadow" style="min-height: 370px;">
                            <img class="card-img" src="/images/websites/unkoncept.png" />
                            <div class="card-body">
                                <h5 class="card-title">Unkoncept</h5>
                                <p class="card-text">E-commerce para artigos de moda vintage e new brands.</p>
                                <a target="_blank" href="https://unkoncept.project-principium.dev/" class="p-link">Visitar (em construção)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contato">
        <div class="bg-white shadow p-header-padding border-bottom">
            <div class="container">
                <h1>Contate-nos</h1>
                Contrate nossos serviços pelos meios de contato abaixo:</a>
                <div class="button-group mt-3">
                    <a href="mailto:contact@project-principium.dev" target="_blank" class="p-btn"><i class="far fa-envelope"></i> contact@project-principium.dev</a>
                </div>
            </div>
        </div>
    </section>

    <section id="sobre-nos">
        <div class="bg-white shadow p-header-padding border-bottom">
            <div class="container d-flex flex-column">
                <img src="/images/pp.png" style="width: 300px; height: auto;" />
                <span class="lead mt-4">
                    A Project Principium é um grupo de desenvolvedores e tecnólogos que anseiam que buscam tornar a internet um lugar mais seguro, agradável e privado.
                </span>
            </div>
        </div>
    </section>
</body>

</html>