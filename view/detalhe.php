    <div class="container">
        <header class="header">
            <a class="logo" href="index.html">InfoSports</a>
            <div class="headerBtnGroup">
                <button class="navBtn"><a href="login.html">Login</a></button>
                <button class="navBtn"><a href="registro.html">Registro</a></button>
                <button class="navBtn"><a href="contato.html">Contato</a></button>
                <div>
                    <input type="checkbox" class="check" id="chk" />
                
                    <label class="label" for="chk">
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                        <div class="bola"></div>
                    </label>
                </div>
            </div>
            <div class="hamburguer-menu">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </header>
        <p class="sectionTitle" id="backToTop">BEM VINDO A INFOSPORTS!</p>
        <p class="sectionDescription">Aqui é onde você encontra todos os itens mais novos e modernos do seu esporte
            preferido.</p>
        <section class="">
            <div class="">
                <div class="">
                    <img src="<?=$noticia['imagem']?>" alt="mainCardImg" class="photo" width=1500x >
                    <h1 class="miojo"><?=$noticia['titulo']?></h1>
                    <p class="mainCategoryCardDescription" Align="justify">
                    <?=$noticia['descricao']?>
                    </p>
                </div>
            </div>
        <div>
        <br>
        <h1 class="htitulo"> Sugestões: </h1>
        <br>
        </div>
            
    <section class="gridContainer">
            <div class="mainContent">
                <?php
                $sugestoes = sugestoes($noticia["titulo"],$noticia["categoria"]);
                foreach($sugestoes as $s){
                    ?>
                <a class="link" href="<?=constant('URL_LOCAL_SITE_DETALHE').$s['id']?>">
                    <div class="categoryCard">
                        <img src="<?=$s['imagem']?>" alt="CardImg" class="mainCardImg" width=320px height=180px>                        
                        <p class="mainCategoryCardTitle"><?=$s['titulo']?></p>"
                        <p class="mainCategoryCardDescription"><?=reduzirStr($s['descricao'],180)?></p>
                    </div>
                </a>
                <?php } ?>
            </div>
        </section/.contain>



        <footer class="footer">
            <span>Info Sports</span>
            <a href="#backToTop" class="footerAnchor">VOLTAR PARA O TOPO</a>
        </footer>
    </div>
    