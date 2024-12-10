<?php

/**
 * TimeZone
 * Retorna o fuso horario local
 * que definira a hora e a data
 */
function timeZone(){
    date_default_timezone_set("America/Recife");
}
/**
 * DataAtual
 * Retorna a data atualizada
 */
function dataAtual(){
    return date("d/m/Y"); 
}
/**
 * horaAtual
 * Retorna a hora atualizada
 */
function horaAtual(){
    return date("h:i:sa");
}

/**
 * @param $texto
 * É o texto que será manupulado
 * Retorna Texto maiúsculo
 */
function textoMaiusculo($texto){
    if($texto){
        return strtoupper($texto);
    }
}
/**
 * @param $texto
 * É o texto que será manupulado
 * @param  $tipo
 * É o Número que indica o tipo de 
 * manipulação da string
 * Tipos:
 * 1 - Quantidade de caracters de um texto
 * 2 - Quantidade de palavras de um texto
 * 3 - Busca Posição da palavra na string
 */
function contar($texto, $tipo){
    if($texto && $tipo === 1){
        return strlen($texto);
    }
    if($texto && $tipo === 2){
        return str_word_count($texto);
    }
    if($texto && $tipo === 3){
        return strpos($texto, "Diogo");
    }
    return false;
}

/**
 * ReduzirStr
 * Reduzir o tamanho de um texto
 * @param $str que representa o texto a ser reduzido
 * @param $quantidade que reprenta quantos caracters vão ser exibidos
 */
function reduzirStr($str,$quantidade){
    $tamanho = strlen($str);
    if($str && $tamanho >= $quantidade){
      return substr($str,0,$quantidade)." [...]";
    }else{
        return $str;
    }
  }

  /**
   * CriarLista
   * Popula as informações exibidas na tela principal
   */
  function criarLista(){
      $listaNoticia[0] = array(
          "titulo" => "BOXE",
          "descricao" => "O boxe é um esporte de combate que envolve o uso dos punhos para atacar e se defender. Tem origens antigas, remontando a civilizações como os sumérios e egípcios, mas sua forma moderna se desenvolveu no século XVIII na Inglaterra. O esporte se popularizou ao redor do mundo e é caracterizado pela sua combinação de técnica, força física, estratégia e condicionamento. Os competidores, chamados de pugilistas ou boxeadores, enfrentam-se em um ringue dividido em quadrados e delimitado por cordas. As lutas são divididas em rounds, com duração específica, e são supervisionadas por um árbitro. O objetivo é acertar o oponente com golpes limpos e válidos, enquanto se esquiva e se defende dos ataques recebidos. O boxe moderno é categorizado em diversas classes de peso, desde pesos mosca até pesos pesados, o que permite a participação de atletas de diferentes estaturas e pesos. Existem organizações internacionais que regulamentam o esporte e promovem campeonatos de prestígio, como a Associação Mundial de Boxe (WBA), o Conselho Mundial de Boxe (WBC) e a Federação Internacional de Boxe (IBF). Além da competição profissional, o boxe também é praticado como forma de exercício físico, defesa pessoal e disciplina mental. Muitos academias e clubes oferecem aulas para iniciantes, visando não apenas o condicionamento físico, mas também o desenvolvimento da autoconfiança e disciplina. Apesar de sua popularidade, o boxe também é um esporte controverso devido aos riscos associados às lesões cerebrais traumáticas decorrentes dos golpes na cabeça. Essa preocupação levou a diversas medidas de segurança e regulamentações para proteger a saúde dos atletas, como exames médicos rigorosos e regras específicas sobre golpes permitidos. Em resumo, o boxe é um esporte emocionante e desafiador que exige habilidade técnica, condicionamento físico e coragem dos seus praticantes. Ao longo dos anos, tem sido uma fonte de inspiração para muitos e continua a ser um dos esportes mais assistidos e praticados em todo o mundo.",
          "imagem" => "./imagens/boxe.jpg",
          "href" => ""
      );
      $listaNoticia[1] = array(
          "titulo" => "BASQUETE",
          "descricao" => "O basquete é um esporte de equipe dinâmico e
                        emocionante, jogado entre duas equipes de cinco jogadores cada, que buscam
                        marcar pontos arremessando uma bola em uma cesta localizada no final de uma quadra. Originário
                        dos Estados Unidos no
                        final do século XIX, o basquete rapidamente se tornou um dos esportes mais populares do mundo.

                        O objetivo do jogo é marcar pontos arremessando a bola através da cesta do adversário, enquanto
                        se defende contra os
                        ataques da equipe oponente. Os jogadores podem avançar pela quadra driblando a bola ou
                        passando-a entre os companheiros
                        de equipe. Estratégia, habilidade, agilidade e trabalho em equipe são fundamentais para o
                        sucesso no basquete.

                        As partidas são divididas em quartos (ou períodos), com duração determinada, e a equipe com mais
                        pontos ao final do jogo
                        é declarada vencedora. Durante o jogo, os jogadores competem por rebotes, roubos de bola e
                        bloqueios, enquanto tentam
                        superar a defesa adversária para marcar pontos.",
          "imagem" => "./imagens/basquete.jpg",
          "href" => ""
      );
      $listaNoticia[2] = array(
          "titulo" => "CORRIDA",
          "descricao" => "A corrida é uma atividade física de movimento
                        rápido realizada pelos seres humanos há milhares de anos. No contexto
                        moderno, a corrida é praticada tanto como uma forma de exercício físico quanto como um esporte
                        competitivo. Os
                        corredores podem escolher entre uma variedade de distâncias, desde sprints curtos até maratonas
                        e ultramaratonas,
                        dependendo de seus objetivos e níveis de condicionamento físico.

                        A corrida oferece uma série de benefícios para a saúde, incluindo o fortalecimento do sistema
                        cardiovascular, a queima
                        de calorias, o aumento da resistência e a melhoria da saúde mental. Além disso, é uma atividade
                        acessível, que requer
                        pouco equipamento além de um bom par de tênis e roupas confortáveis.",
          "imagem" => "./imagens/corrida.jpg",
          "href" => ""
      );
      $listaNoticia[3] = array(
          "titulo" => "CROSSFIT",
          "descricao" => "O CrossFit é uma modalidade de treinamento
                        físico que se destaca pela sua abordagem variada e intensa, visando o
                        desenvolvimento completo do condicionamento físico. Criado na década de 2000 pelo treinador Greg
                        Glassman, o CrossFit
                        combina elementos de levantamento de peso olímpico, ginástica e treinamento de alta intensidade
                        em um programa de
                        exercícios desafiador e dinâmico.

                        Os treinos de CrossFit são conhecidos por sua diversidade, envolvendo uma ampla gama de
                        exercícios funcionais realizados
                        em alta intensidade e com períodos de descanso limitados. Os participantes podem esperar
                        realizar exercícios como
                        levantamento de peso, flexões, saltos, corridas, remadas, treinos com cordas e muitos outros
                        movimentos variados.

                        Uma das características distintivas do CrossFit é a ênfase na competição saudável e na superação
                        pessoal. Os treinos são
                        frequentemente cronometrados ou realizados por número de repetições, incentivando os
                        participantes a desafiarem
                        constantemente seus limites e a progredirem em sua forma física.",
          "imagem" => "./imagens/crossfit.jpg",
          "href" => "",
      );
     $listaNoticia[10] = array(
           "titulo" => "ESPORTES NA NEVE",
           "descricao" => "Os esportes na neve incluem uma variedade de
                        atividades praticadas em ambientes gelados, como montanhas cobertas de
                        neve. Estas atividades são populares em regiões com invernos rigorosos e oferecem uma mistura
                        única de desafio físico,
                        beleza natural e diversão ao ar livre.
  
                        Alguns dos esportes mais populares praticados na neve incluem:
                        Esqui alpino: Descer encostas cobertas de neve em esquis é uma prática que combina velocidade,
                        habilidade e controle. Os
                        praticantes podem se aventurar em pistas variadas, desde iniciantes até avançadas, desfrutando
                        da adrenalina e da
                        sensação de liberdade que o esqui proporciona.",
           "imagem" => "./imagens/esportesNaNeve.jpg",
           "href" => "",
         );
      $listaNoticia[4] = array(
        "titulo" => "NATACAO",
        "descricao" => "A natação é uma atividade física baseada na capacidade humana de se locomover na água (nadar). Como esporte, a natação aparece em competições desde meados do século XIX e esteve presente na primeira Olimpíada da era moderna em 1896,
                        experimentando uma significativa evolução ao longo do tempo. A natação é um dos esportes mais praticados em todo o mundo, não apenas melhorando o condicionamento físico, mas também oferecendo diversos benefícios para a saúde.",
        "imagem" => "./imagens/natacao.jpg",
        "href" => "",
      );
      $listaNoticia[5] = array(
        "titulo" => "ROUPAS",
        "descricao" => "Desde o Renascimento, com o nascimento de uma burguesia mercantil (essa, composta apenas por homens), as roupas foram encaixadas dentro de etiquetas sociais, de forma a impor uma forte auto afirmação das classes dominantes. No século
                        XIX há uma transição do mundo medieval feudal para o mundo capitalista e burguês, o mundo moderno. Em contrapartida ao Barroco e Rococó, que eram considerados movimentos com excessos de adornos, peso, decorações etc, surgem novos
                        movimentos e junto a eles, novas tendências indumentárias.[2] Homem do início do séc. XX de terno Por volta de 1850, um estilo de vestimenta mais sóbrio, em relação àqueles presentes no Rococó, Romantismo, Neoclassicismo etc, começa
                        a se popularizar dentre o vestuário masculino. Enquanto a fantasia e a decoração eram preservadas para as mulheres, de classe alta, que não trabalhavam, a hegemonia do terno e gravata, sempre com cores neutras, chegou ao guarda-roupa
                        dos homens. Assim, começa-se a notar as influências da Revolução Industrial dentro da indumentária. Não só isso, mas a do trabalho também. Enquanto o homem se vestia de forma neutra e prática, a mulher demonstrava seu status social
                        em forma de vestimenta.",
        "imagem" => "./imagens/roupas.jpg",
        "href" => "",
      );
      $listaNoticia[6] = array(
        "titulo" => "SURF",
        "descricao" => "O surf é um esporte aquático praticado em
                        pranchas de surf, onde os surfistas deslizam sobre as ondas do mar,
                        aproveitando a energia e a força da água para realizar manobras emocionantes. Originário das
                        antigas culturas
                        polinésias, o surf moderno evoluiu ao longo dos séculos para se tornar uma atividade de lazer,
                        competição e estilo de
                        vida em todo o mundo.

                        Os surfistas enfrentam desafios únicos ao tentar se equilibrar e pegar as ondas, requerendo
                        habilidades de equilíbrio,
                        coordenação e força física. Eles buscam ondas de diferentes tamanhos e formas, dependendo de seu
                        nível de habilidade e
                        preferências pessoais.",
        "imagem" => "./imagens/surf.jpg",
        "href" => "",
      );
      $listaNoticia[7] = array(
        "titulo" => "SKATE",
        "descricao" => "O skate é um esporte radical realizado sobre uma prancha com rodas e consiste na execução de manobras no chão, pistas e em obstáculos. A prática surgiu nos Estados Unidos e atualmente é um esporte olímpico desde os jogos de Tóquio (2021). Entre as modalidades do skate estão: street, park, vertical, downhill.",
        "imagem" => "./imagens/skate.jpg",
        "href" => "",
      );
      $listaNoticia[8] = array(
        "titulo" => "TENIS",
        "descricao" => "O tênis é um esporte praticado
                        individualmente ou em duplas, onde os jogadores utilizam raquetes para rebater uma bola
                        sobre uma quadra dividida ao meio por uma rede. Com raízes que remontam ao século XII na França,
                        o tênis moderno evoluiu
                        ao longo dos séculos para se tornar uma das atividades esportivas mais populares em todo o
                        mundo.
                        O objetivo do jogo é fazer com que a bola passe sobre a rede e caia dentro das linhas da quadra
                        do adversário, ao mesmo
                        tempo em que se evita que a bola rebatida pelo oponente alcance o chão dentro das próprias
                        linhas. Isso requer uma
                        combinação de habilidade, técnica, agilidade e estratégia.",
        "imagem" => "./imagens/tenis.jpg",
        "href" => "",
      );
    //  $listaNoticia[9] = array(
    //     "titulo" => "TRILHA",
    //     "descricao" => "A trilha, também conhecida como hiking ou
    //                     trekking, é uma atividade ao ar livre que envolve caminhar em trilhas
    //                     naturais, explorando ambientes como florestas, montanhas, desertos e planícies. É uma forma de
    //                     conexão com a natureza
    //                     que proporciona uma variedade de benefícios físicos, mentais e emocionais.

    //                     Durante uma trilha, os praticantes enfrentam desafios físicos enquanto percorrem terrenos
    //                     variados e muitas vezes
    //                     irregulares. Isso ajuda a fortalecer os músculos, aumentar a resistência cardiovascular e
    //                     melhorar o equilíbrio e a
    //                     coordenação."
    //     "imagem" => "./imagens/trilha.jpg",
    //     "href" => ""
    //   );
    //   $listaNoticia[10] = array(
    //     "titulo" => "BICICLETAS",
    //     "descricao" => "As bicicletas foram introduzidas no século XIX na Europa. No início do século XXI, havia mais de 1 bilhão de bicicletas no mundo.[1][2][3] Existem muito mais bicicletas do que carros e elas são o principal meio de transporte em muitas
    //                     regiões, além de proporcionarem uma forma popular de recreação e serem adaptadas para serem usadas ​​como brinquedos infantis. As bicicletas são usadas para atividades físicas, aplicações militares e policiais, serviços de correio,
    //                     corridas de bicicleta e ciclismo artístico.",
    //     "href" => "",
    //     "imagem" => "./imagens/bicicletas.jpg",
    //   );
        
      return $listaNoticia;
  }

  function calcularImc($peso, $altura){
    $resposta = 0;
    if($peso && $altura){
        $resposta = $peso / ($altura * $altura);  
    }
    return round($resposta,2);
  }

  function imcBuscarPorId($id)
  {
      $pdo = Database::conexao();
      $sql = "SELECT * FROM imc WHERE id = $id";
      $stmt = $pdo->prepare($sql);
      $list = $stmt->execute();
      $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $list;
  }

  function cadastrar($nome,$email,$peso,$altura,$imc,$classificacao)
    {
        if(!$nome || !$email || !$peso || !$altura || !$imc || !$classificacao){return;}
        $sql = "INSERT INTO `imc_tb` (`nome`,`email`,`peso`,`altura`,`imc`,`classificacao`)
        VALUES(:nome,:email,:peso,:altura,:imc,:classificacao)";

        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':peso', $peso);
        $stmt->bindParam(':altura', $altura);
        $stmt->bindParam(':imc', $imc);
        $stmt->bindParam(':classificacao', $classificacao);
        $result = $stmt->execute();
        return ($result)?true:false;
    }

  function cadastrarRegistro($nome,$email,$telefone,$login,$senha,$aceitacaoCookie)
    {
        if(!$nome || !$email || !$telefone || !$login || !$senha || $aceitarCookie){return;}
        $sql = "INSERT INTO `registro_tb` (`nome`,`email`,`telefone`,`login`,`senha`, `aceitacaoCookie`)
        VALUES(:nome,:email,:telefone,:login,:senha,:aceitacaoCookie)";

        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':aceitacaoCookie', $aceitacaoCookie);
        $result = $stmt->execute();
        return ($result)?true:false;
    }

    function cadastrarContato($nome,$sobrenome,$email,$telefone,$mensagem)
    {
        // var_dump($nome,$sobrenome,$email,$telefone,$mensagem);die;
        if(!$nome ||!$sobrenome || !$email || !$telefone || !$mensagem){return;}
        $sql = "INSERT INTO `contato_tb` (`nome`,`sobrenome`,`email`,`telefone`,`mensagem`)
        VALUES(:nome,:sobrenome,:email,:telefone,:mensagem)";

        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':sobrenome', $sobrenome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':mensagem', $mensagem);
        $result = $stmt->execute();
        return ($result)?true:false;
    }

    function classificarImc($imc){
        if($imc <= 16){
            return "magreza grave;";
        }elseif($imc > 16 && $imc <= 17){
            return "magreza moderada";
        }elseif($imc > 17 && $imc <= 18.5){
            return "magreza leve";
        }elseif($imc >= 18.6 && $imc<= 24.9){
            return "Peso Ideal";
        }elseif($imc >= 25 && $imc <= 29.9 ){
             return "Sobre Peso";
        }elseif($imc >= 30 && $imc <= 34.9){
            return "Obesidade grau 1";
        }elseif($imc >= 35 && $imc <= 39.9){
            return "Obesidade grau 2 ou severa";
        }elseif($imc >= 40){
            return "Obesidade grau 3 ou morbida";
        }
    }

    function criptografia($senha){
        if(!$senha)return false;
        return sha1($senha);
    }

    function listarNoticias()
    {
        $pdo = Database::conexao();
        $sql = "SELECT * FROM noticia_tb";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }

    function buscarNoticiaPorId($id)
    {
         if(!$id){return;}
         $sql = "SELECT * FROM noticia_tb WHERE `id` = :id";
         $pdo = Database::conexao();
         $stmt = $pdo->prepare($sql);
         $stmt->bindParam(':id', $id);
         $result = $stmt->execute();
         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         return $result[0];
    }

    // function registrarAceiteCookies($aceitacaoCookie) {
    //     try {
    //         // Conectar ao banco de dados (usando PDO como exemplo)
    //         $conn = new PDO("mysql:host=localhost;dbname=banco_de_dados",);
    //         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //         $sql = "SELECT * FROM registro_tb WHERE `aceitacaoCookie` = :aceitacaoCookie";
    //         // Atualizar a tabela de usuários para registrar que o usuário aceitou os cookies
    //         $query = "UPDATE usuarios SET aceitou_cookies = 1 WHERE id = :aceitacaoCookie";
    //         $stmt = $conn->prepare($query);
    //         $stmt->bindParam(':aceitacaoCookie', $aceitacaoCookie, PDO::PARAM_INT);
    //         $stmt->execute();
    
    //         return "Aceitação registrada com sucesso!";
    //     } catch (PDOException $e) {
    //         return "Erro ao registrar a aceitação: " . $e->getMessage();
    //     }
    // }

    function cadastrarNoticia($titulo,$imagem,$descricao)
    {
        if(!$titulo ||!$imagem || !$descricao){return;}
        $sql = "INSERT INTO `noticia_tb` (`titulo`,`imagem`,`descricao`)
        VALUES(:titulo,:imagem,:descricao)";

        $pdo = Database::conexao();
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':imagem', $imagem);
        $stmt->bindParam(':descricao', $descricao);
        $result = $stmt->execute();
        return ($result)?true:false;
    }

    // function verificarLogin($login){
    //     $pdo = Database::conexao();
    //     $sql = "SELECT `id`,`nome`,`login`,`senha` FROM registro_tb WHERE `login` = '$login'";
    //     // var_dump($sql);die;
    //     $stmt = $pdo->prepare($sql);
    //     $list = $stmt->execute();
    //     $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     return $list[0];
    // }

    // function validaSenha($senhaDigitada, $senhaBd){
    //     if(!$senhaDigitada || !$senhaBd){return false;}
    //     if($senhaDigitada == $senhaBd){return true;}
    //     return false;
    // }

    // function protegerTela(){
    //     if(
    //         !$_SESSION || 
    //         !$_SESSION["usuario"]["status"] === 'logado'
    //     ){
    //         header('Location:'.constant("URL_LOCAL_SITE_PAGINA_LOGIN"));
    //     }
    // }

    function registrarAcessoValido($usuarioCadastrado){
        $_SESSION["usuario"]["nome"] = $usuarioCadastrado['nome'];
        $_SESSION["usuario"]["id"] = $usuarioCadastrado['id'];
        $_SESSION["usuario"]["status"] = 'logado';
    }

    function limparSessao(){
        unset($_SESSION["usuario"]);
        header('Location:'.constant("URL_LOCAL_SITE_PAGINA_LOGIN"));
    }
    
    function sugestoes($titulo, $categoria){
        $pdo = database::conexao();
        $sql = "SELECT * FROM noticia_tb WHERE titulo != '$titulo' AND categoria LIKE '$categoria' LIMIT 5";
        // var_dump($sql);die;
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
        }

        function listarCategorias(){
            $pdo = Database::conexao();
            $sql = "SELECT * FROM categoria_tb";
            $stmt = $pdo->prepare($sql);
            $list = $stmt->execute();
            $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $list;
      
        }
        
    function listarNoticiasPorCategoria($idCategoria){
        $pdo = Database::conexao();
        $sql = "SELECT * FROM noticia_tb WHERE `categoria` = '$idCategoria' LIMIT 3";
        $stmt = $pdo->prepare($sql);
        $list = $stmt->execute();
        $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }

        function cadastrarCategoria($nomeCategoria)
        {
            if(!$nomeCategoria){return;}
            $sql = "INSERT INTO `categoria_tb` (`nome`)
            VALUES(:nome)";
            $pdo = Database::conexao();
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nome', $nomeCategoria);
            $result = $stmt->execute();
            return ($result)?true:false;
        }

        function verificarCategoriaDuplicada($termo)
      {
          $pdo = Database::conexao();
          $sql = "SELECT * FROM `categoria_tb` WHERE `nome` = '$termo'";
          $stmt = $pdo->prepare($sql);
          $list = $stmt->execute();
          $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
          return ($list)?true:false;
      }

      function gerarNumerosRandomicos(){
        return date('Y').date('m').date('d').date("h").date(':i').'-'.date('sa').rand();
      }
      function upload($imagem){
        if(!isset($_FILES["fileToUpload"])){return;}
        $target_dir = "assets/uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
       
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])){
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 900000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                return $_FILES["fileToUpload"]["name"];
            } else {
                // echo "Sorry, there was an error uploading your file.";
                return false;
            }
        }
      }
      