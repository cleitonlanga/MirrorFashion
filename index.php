    <?php $cabecalho_css='<link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/Home.css" />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/geral.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="/css/mobile.css" media="(max-width: 430px)">
    <link rel="stylesheet" href="/css/tablets.css" media="(min-width: 431px)">';?>

    <!--Cabeçalho-->
    <?php
     $cabecalho_title = "Mirror Fashion";
    include("cabecalho.php");
    ?>
    <!--EndCabeçalho-->
    <!--Destaques-->
    <section id="destaque">
        <!--Container destaques-->
        <div class="container destaque">
            <!--Busca-->
            <section class="busca">
                <h2>Busca</h2>
                <form action="#">
                    <input type="search" />
                    <input type="image" src="img/busca.png" />
                </form>
            </section>
            <!--EndBusca-->
            <!--Menu-departamentos-->
            <section class="menu-departamentos">
                <h2>Departamentos</h2>
                <nav>
                    <ul>
                        <li>
                            <a href="#">Blusas e Camisas</a>
                            <ul>
                                <li><a href="#">Manga curta</a></li>
                                <li><a href="#">Manga comprida</a></li>
                                <li><a href="#">Camisa social</a></li>
                                <li><a href="#">Camisa casual</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Calças</a></li>
                        <li><a href="#">Sais</a></li>
                        <li><a href="#">Vestidos</a></li>
                        <li><a href="#">Sapatos</a></li>
                        <li><a href="#">Bolsas e Carteiras</a></li>
                        <li><a href="#">Acessórios</a></li>
                    </ul>
                </nav>
            </section>
            <!--EndMenu-departamentos-->
            <img src="./img/destaque-home.png" alt="Promoção: Big City Night" />
        </div>
        <!--EndContainer destaques-->
    </section>
    <!--EndDestaques-->
    <!--Paineis-->
    <section id="painel">
        <!--Div paines-->
        <div class="container painel">
            <!--Painel de Novidades-->
            <section class="painel novidades">
                <h2>Novidades</h2>
                <ol>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/Produtos/miniatura1.png" alt="" />
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/Produtos/miniatura2.png" alt="" />
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/Produtos/miniatura3.png" alt="" />
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/Produtos/miniatura4.png" alt="" />
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/Produtos/miniatura5.png" alt="" />
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/Produtos/miniatura6.png" alt="" />
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
                <button type="button">Mostrar mais</button>
            </section>
            <!--End Painel de Novidades-->
            <!--Painel mais Vendidos-->
            <section class="painel mais-vendidos">
                <h2>Mais vendidos</h2>
                <ol>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/Produtos/miniatura7.png" alt="" />
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/Produtos/miniatura8.png" alt="" />
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/Produtos/miniatura9.png" alt="" />
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/Produtos/miniatura10.png" alt="" />
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/Produtos/miniatura11.png" alt="" />
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/Produtos/miniatura12.png" alt="" />
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
                <button type="button">Mostrar mais</button>
            </section>
            <!--End Painel mais vendido-->
        </div>
        <!--EndDiv paines-->
    </section>
    <!--EndPaines-->
    <!--Footer-->
    <?php include("rodape.php");?>
    <!--EndFooter-->
    <script src="jquery-3.7.1.min.js"></script>
    <script src="./js/home.js"></script>
    <script src="./js/converterMoeda.js"></script>
    <script src="./js/trocaBanners.js"></script>
    </body>

    </html>