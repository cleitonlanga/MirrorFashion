    <?php $cabecalho_css = '<link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/geral.css" />
    <link rel="stylesheet" href="./css/sobre.css" />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="/css/footer.css" />
    <link rel="stylesheet" href="./css/sobreResponsive.css" media="(max-width:430px)" />'?>

  <body>
    <!--Cabeçalho-->
    <?php 
     $cabecalho_title = "Sobre Mirror Fashion";
    include("cabecalho.php"); 
    ?>
    <!--EndCabeçalho-->
    <!-- Sobre Mirror Fashion-->
    <section class="sobreMirrorFashion">
      <h1 class="titulo">A Mirror Fashion</h1>
      <p>
        A <strong>Mirror Fashion</strong> é uma empresa de comércio eletrônico
        no segmento de moda em todo mundo. Fundada há <?php print date("Y")-1932?> anos, possui filiais em
        124 países, sendo líder de mercado com mais de 90% de participação em
        118 deles.
      </p>
    </section>
    <!--Sobre centro de distribuição-->
    <section class="sobredistribuicao">
      <p>
        Nosso centro de distribuição fica em
        <a href="https:maps.google.com.br/?q=Jacarezinho"
          >Jacarezinho, no Paraná.</a
        >
        De lá, saem 48 aviões que distribuem nossos produtos ás casas do mundo
        todo. Nosso centro de distribuição:
      </p>
      <figure id="centro-distribuicao">
        <img
          src="./img/centro-distribuicao.png"
          alt="Centro de distribuição da Mirror Fashion"
        />
        <figcaption>Centro de distribuição Mirror Fashion</figcaption>
      </figure>
      <p>
        Compre suas roupas e acessórios na Mirror Fashion. Acesse
        <a href="index.html">nossa loja</a> ou entre em
        <a href="#">contacto</a> se tiver dúvidas. Conheça também nossa
        <a href="#historia">história</a> e nossos
        <a href="#diferenciais">diferenciais.</a>
      </p>
    </section>

    <!--Sobre a história-->
    <h3 id="historia">História</h3>
    <section class="sobrehistoria">
      <figure id="familia-pelho">
        <img src="./img/familia-pelho.jpg" alt="" />
        <figcaption>Familia Pelho</figcaption>
      </figure>
      <caption>
        <p>
          A fundação em 1932 ocorreu no momento da descoberta económica do
          interior do paraná. A <em>família Pelho</em> tradícional da região,
          investiu todas as suas economias nessa nova iniciativa, revolucionária
          para a epóca. O fundador
          <em
            >Eduardo Simões Pelho, dotado de particular visão administrativa,
            guiou os negócios da empresa durante mais de 50 anos, muitos deles
            ao lado do seu filho <em>E.S Pelho Filho</em>, actual CEO. O nome da
            empresa é inspirado no nome da família.
          </em>
        </p>
        <p>
          O crescimento da empresa foi praticamente instantanêo. Nos primeiros 5
          anos, já atendia 18 países. Bateu a marca de 100 países em 15 anos de
          existência. Até hoje, já atendeu 740 milhões de usuários diferentes,
          em bilhões de diferentes pedidos.
        </p>
        <p>
          Dada a importância económica da empresa para o Brasíl, a família Pelho
          já recebeu diversos prémios, homenagens e condecorações. Todos os
          presidentes do brasíl já visitaram as instalações da Mirro Fashion,
          além de presidentes da União Européia, e o secretário-geral da ONU.
        </p>
      </caption>
    </section>

    <!--Sobre os diferenciais-->
    <h3 id="diferenciais">Diferenciais</h3>
    <section class="sobrediferenciais">
      <ul>
        <li>Menor preço do varejo garantido</li>
        <li>
          Se você encontrar uma loja com mesmo item mais barata, leva o produto
          de graça
        </li>
        <li>Pague em reais, dólares, euros, meticais, ou bitcoins</li>
        <li>Todas as compras com frete gratís, para todo o mundo</li>
        <li>Maior comércio eletrónico de moda do mundo</li>
        <li>
          Atendimento via Telefone, email, chat, X, Facebook, Cartas, Fax, e
          Telegrama
        </li>
        <li>Presente em 124 países</li>
        <li>Mais de um milhão de funcionários em todo o mundo</li>
      </ul>
    </section>

    <!--Footer-->
    <?php include("rodape.php"); ?>
    <!--EndFooter-->
  </body>
</html>
