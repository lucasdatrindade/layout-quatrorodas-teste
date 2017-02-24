<?php
/**
 * The main template file.
 *
 * @link https://livecomposerplugin.com/themes/
 *
 * @package LC Blank
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div id="conteudo-p">
            <img src="<?php echo(get_template_directory_uri()); ?>/imagens/conteudo.png" alt="conteudo principal">
        </div>
        
        <div class="tam">
            <section id="itens">
                <ul>
                    <li><a href=""><img src="<?php echo(get_template_directory_uri()); ?>/imagens/iten1.png" alt="sub intem 1"></a>
                    <h3>AUDI S3 X MERCEDES-BENZ CLA 45 AMG</h3>
                        <span>Pista livre para o embate entre os dois cometas de calda curta</span></li>
        
                    <li><a href=""><img src="<?php echo(get_template_directory_uri()); ?>/imagens/iten2.png" alt="sub item 2"></a>
                    <h3>NISSAN GT-R</h3>
                    <span>Pilotamos o Godzilla, o monstro recordista de Nurburgring que assombra os alemães</span>
                    </li>
                
                    <li><a href=""><img src="<?php echo(get_template_directory_uri()); ?>/imagens/iten3.png" alt="sub item 3"></a>
                    <h3>BMW SÉRIE 2 ACTIVE TOURER</h3>
                    <span>Pista livre para o embate entre os dois cometas de calda curta</span>
                    </li>
        
                    <li><a href=""><img src="<?php echo(get_template_directory_uri()); ?>/imagens/iten4.png" alt="sub item 4"></a>
                    <h3>CHEVROLET MOSTRA NOVA GERAÇÃO DO MALIBU</h3>
                    <span>Sedã perdeu 136 kg e ampliou o espaço entre-eixos</span>
                    </li>
                </ul>
            </section>
        </div>
    </main>
</div>

<?php get_footer(); ?>
