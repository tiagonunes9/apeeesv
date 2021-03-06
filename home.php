<!DOCTYPE html>
<html lang="pt">
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "apeeesv";
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<head>
    <title>APEEESV</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="img/simples.ico" type="image/x-icon" />

</head>

<body>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="#slide-image"><img src="img/logo.png" class="logo"></a></label>
        <ul>
            <li><a href="#somos">Quem somos</a></li>
            <li><a href="#eventos">Eventos</a></li>
            <li><a href="#noticias">Noticias</a></li>
            <li><a href="#contatos">Contactos</a></li>
        </ul>
    </nav>

    <section id="slide-image" class="slide-image">
        <img src="img/escolaviriato.jpg" class="fundo" />

    </section>
    <img src="img/cima.png" class="cima" />
    <section id="somos" class="somos">

        <div class="div-title">
            <div class="title-divider-left">
                <hr>
            </div>
            <div class="title-h1">
                <h1>Quem somos</h1>
            </div>
            <div class="title-divider-right">
                <hr>
            </div>
        </div>
        <div class="div-content">
            <p class="about">A Escola ocupa um lugar primordial na educação das crianças enquanto parte integrante de um grupo de diversos intervenientes: alunos, famílias, professores, técnicos-pedagógicos, assistentes operacionais... todos e cada um com missões insubstituíveis ao longo de todo o processo de aprendizagem.
                Citando o Projeto Educativo da Escola Secundária Viriato 2016-2020, “Estes intervenientes não são meros atores no processo educativo: identificam-no, constroem-no e desenvolvem-no, sendo as suas atuação e interação condições básicas para o sucesso dos resultados e para a missão coletiva de desenvolvimento e valorização da sociedade em que estão integrados”.
                <br>Neste sentido, entendemos que é dever da Associação de Pais e Encarregados de Educação da Escola Secundária Viriato: contribuir para o desenvolvimento saudável dos alunos através da colaboração entre os diversos intervenientes da comunidade educativa, contribuindo para o bom funcionamento da Escola e estimular a comunicação e maior participação dos pais e encarregados de educação, enquanto membros de pleno direito da comunidade escolar, promovendo uma parceria franca e cooperante entre a Escola e as famílias.
            </p><br>
            <h2>Órgãos Sociais da Associação de Pais e Encarregados de Educação do ano letivo de 2019/2020</2><br><br><br>
                <img src="img/associacao.jpg" class="associacao" /><br><br>

                <h3>Mesa da Assembleia Geral</h3>
                <table class="table table-sm tabela">
                    <tbody>
                        <tr>
                            <th scope="row" class="cargo">Presidente</th>
                            <td class="nomes">Maria Helena Lopes Serra Baptista</td>
                        </tr>
                        <tr>
                            <th scope="row" class="cargo">Vice-Presidente</th>
                            <td class="nomes">Maria do Rosário Silva Jesus Coelho </td>
                        </tr>
                        <tr>
                            <th scope="row" class="cargo">Secretária</th>
                            <td class="nomes">Edimeia Gonçalves </td>
                        </tr>
                        <td></td>
                    </tbody>
                </table><br>
                <h3>Conselho Executivo</h3>
                <table class="table table-sm tabela">
                    <tbody>
                        <tr>
                            <th scope="row" class="cargo">Presidente</th>
                            <td class="nomes">Lina Maria de Almeida Rodrigues</td>
                        </tr>
                        <tr>
                            <th scope="row" class="cargo">Vice-Presidente</th>
                            <td class="nomes">Fernando de Oliveira Monteiro</td>
                        </tr>
                        <tr>
                            <th scope="row" class="cargo">Secretária</th>
                            <td class="nomes">Luísa Cruz Lopes</td>
                        </tr>
                        <tr>
                            <th scope="row" class="cargo">Tesoureiro</th>
                            <td class="nomes">Sandra Moreira Sebastião Monteiro</td>
                        </tr>
                        <tr>
                            <th scope="row" class="cargo">1º Vogal</th>
                            <td class="nomes">Patrícia Nunes</td>
                        </tr>
                        <tr>
                            <th scope="row" class="cargo">2º Vogal</th>
                            <td class="nomes">Carla Amaral</td>
                        </tr>
                        <td></td>
                    </tbody>
                </table><br>
                <h3>Conselho Fiscal</h3>
                <table class="table table-sm tabela">
                    <tbody>
                        <tr>
                            <th scope="row" class="cargo">Presidente</th>
                            <td class="nomes">Isabel Marisa Ferreira Pereira</td>
                        </tr>
                        <tr>
                            <th scope="row" class="cargo">1º Vogal</th>
                            <td class="nomes">Domitila Martins Lima</td>
                        </tr>
                        <tr>
                            <th scope="row" class="cargo">2º Vogal</th>
                            <td class="nomes">Maria do Carmo Boloto</td>
                        </tr>
                        <td></td>
                    </tbody>
                </table>
        </div>

    </section>
    <img src="img/cima.png" class="baixo" /><br><br><br><br><br>
    <section id="eventos" class="eventos">
        <div class="div-title">
            <div class="title-divider-left">
                <hr>
            </div>
            <div class="title-h1">
                <h1>Eventos</h1>
            </div>
            <div class="title-divider-right">
                <hr>
            </div>
        </div>
        <div class="div-content">
            <div class="flex-container">
                <?php

                $sql = "SELECT * FROM eventos";
                $result = $conn->query($sql);
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    $id_evento =  $row['id_evento'];
                    $nome =     $row['nome'];
                    $descricao =  $row['descricao'];
                    $imagem =  $row['imagem'];
                    $data =  $row['data'];
                    $local =  $row['local'];

                ?>
                    <a href="#" data-toggle="modal" data-target="#mymodal_<?php echo $id_evento; ?>">
                        <div class="col-sm-4">
                            <?php
                            echo '<div class="flex-item">' . $imagem . '</div>';
                            ?>
                        </div>
                    </a>
                    <!-- Modal -->
                    <div id="mymodal_<?php echo $id_evento; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title modalt" id="exampleModalLabel">
                                        <?php echo $nome; ?></h4>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5><?php echo $local; ?></h5>
                                    <h5><?php echo $data; ?></h5><br>
                                    <h5><?php echo $descricao; ?></h5><br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section id="noticias" class="noticias">
        <div class="div-title">
            <div class="title-divider-left">
                <hr>
            </div>
            <div class="title-h1">
                <h1>Notícias</h1>
            </div>
            <div class="title-divider-right">
                <hr>
            </div>
        </div>
        <div class="div-content">
            <div class="flex-container">
                <div class="flex-item">1</div>
                <div class="flex-item">2</div>
                <div class="flex-item">3</div>
                <div class="flex-item">4</div>
                <div class="flex-item">5</div>
                <div class="flex-item">6</div>
                <div class="flex-item">1</div>
                <div class="flex-item">2</div>
                <div class="flex-item">3</div>
                <div class="flex-item">4</div>
                <div class="flex-item">5</div>
                <div class="flex-item">6</div>
            </div>
        </div>
    </section>
    <section id="contatos" class="contatos">
        <div class="div-title">
            <div class="title-divider-left">
                <hr>
            </div>
            <div class="title-h1">
                <h1>Contactos</h1>
            </div>
            <div class="title-divider-right">
                <hr>
            </div>
        </div>
        <div class="div-content">
            <div class="contacts-content">
                <div class="contacts-left">
                    <div class="title">
                        <h2>QUER FALAR CONNOSCO?</h2>
                    </div>
                    <div class="form-group">
                        <form action="insert.php" method="post">
                            <p class="forms">Nome</p>
                            <input type="text" name="nome" class="form-control" placeholder="Nome" required>

                            <p class="forms">Email</p>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>

                            <p class="forms">Assunto</p>
                            <input type="text" name="assunto" class="form-control" Placeholder="Assunto" required>

                            <p class="forms">Mensagem</p>
                            <textarea class="form-control" rows="5" cols="50" name="mensagem" placeholder="Mensagem" required></textarea>
                            <input type="hidden" name="estado" value="0" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default enviar" name="submit" value="submit">ENVIAR</button>
                    <div class="alert alert-success" role="alert">
                        Entraremos em contacto consigo assim que possível!
                    </div>

                    </form>
                </div>
                <div class="contacts-right">
                    <div class="line">
                        <img src="img/home.png" class="icone">
                        <p class="info">Estrada Velha de Abraveses, 3510-204 Viseu</p>
                    </div>
                    <div class="line">
                        <img src="img/mail.png" class="icone">
                        <p class="info">apeeviriato@esviriato.pt</p>
                    </div>
                    <div class="line">
                        <img src="img/phone.png" class="icone">
                        <p class="info">232 418 330 &nbsp;&nbsp;|&nbsp;&nbsp; 961 970 673</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>