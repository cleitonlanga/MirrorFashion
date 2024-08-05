   <?php $cabecalho_css= '<link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/Home.css" />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/geral.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="/css/produto.css"/>
    <link rel="stylesheet" href="/css/mobile.css" media="(max-width: 430px)">
    <link rel="stylesheet" href="/css/tablets.css" media="(min-width: 431px)">'
    ?>

   <body>
       <?php 
    $cabecalho_title = "Produto da Mirror Fashion";
    include("cabecalho.php");
    ?>
       <div class="produto-back">
           <div class="container">
               <div class="produto">
                   <h1>Fuzzy Cardigan</h1>
                   <p>Por apenas R$ 129,00</p>

                   <form action="checkout.php" method="POST">
                       <fieldset class="cores">
                           <legend>Escolha a cor:</legend>
                           <input type="hidden" name="nome" value="Fuzzy Cardigan">
                           <input type="hidden" name="preco" value="129.00">
                           <input type="radio" name="cor" value="verde" id="verde" checked>
                           <label for="verde">
                               <img src="img/Produtos/foto2-verde.png" alt="verde">
                           </label>

                           <input type="radio" name="cor" value="azul" id="azul" checked>
                           <label for="azul">
                               <img src="img/Produtos/foto2-azul.png" alt="azul">
                           </label>

                           <input type="radio" name="cor" value="rosa" id="rosa" checked>
                           <label for="rosa">
                               <img src="img/Produtos/foto2-rosa.png" alt="rosa">
                           </label>
                       </fieldset>
                       <fieldset class="tamanhos">
                           <legend>Escolha o tamanho: </legend>

                           <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">

                       </fieldset>
                       <input type="submit" class="comprar" value="comprar">
                   </form>

                   <div class="detalhes">
                       <h2>Detalhes do produto</h2>

                       <p>Esse é o melhor casaco de Cardigã que você já viu. Excelente material italiano com estampa
                           desenhada pelos artesãos da comunidade de Krotor nas ilhas gregas. Compre já e receba hoje
                           mesmo
                           pela nossa entrega a jato</p>

                       <table>
                           <thead>
                               <tr>
                                   <th>Característica</th>
                                   <th>Detalhe</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr>
                                   <td>Modelo</td>
                                   <td>Cardigã 7845</td>
                               </tr>
                               <tr>
                                   <td>Material</td>
                                   <td>Algodão e poliester</td>
                               </tr>
                               <tr>
                                   <td>Cores</td>
                                   <td>Azul, Rosa e verde</td>
                               </tr>
                               <tr>
                                   <td>Lavagem</td>
                                   <td>Lavar a mão</td>
                               </tr>
                           </tbody>
                       </table>
                   </div>

               </div>
           </div>
       </div>





       <?php include("rodape.php");?>
   </body>

   </html>