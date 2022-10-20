<?php
    include('../php/protecaoAgenda.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="../css/style-global.css">
    <link rel="stylesheet" href="../css/rodape.css">
    <link rel="stylesheet" href="../css/agenda.css">
    <title>Agenda</title>
</head>
<body>
    <header class="area-logo"><!-- Aqui fica a logo da página -->
        <img class="col-sm-5 col-md-3 col-lg-2" src="../img/logo.png" alt="logo da empresa vet abc">
    </header>
    
        <nav class="main-nav-bar"><!-- Essa div vai conter o MENU -->
            <span class="material-symbols-outlined three-bars col-sm-2" onclick="toggleMenu()">menu</span>
            <ul id="menu">
                <li><a href="index_fun.php">Home</a></li>
                <li><a href="quemsomos_funcionarios.php">Quem Somos</a></li>
                <li><a href="agenda_funcionarios.php">Agenda</a></li>
                <li><a class="login-cadastro" href="cadastro_funcionarios.php">Cadastro</a></li>
                <li><a class="login-cadastro" href="../php/logout.php">Sair</a></li>
                <li><a href="cadastro_consulta.php">Agendar Consulta</a></li>
            </ul>
        </nav>
        <nav class="nav-menu-mobile">
            <label for="three-bars" id="three-bars" class="material-symbols-outlined three-bars col-sm-2" onclick="toggleMenu()">menu</label>
            <ul id="menu-mobile">
                <li><a href="index_fun.php">Home</a></li>
                <li><a href="quemsomos_funcionarios.php">Quem Somos</a></li>
                <li><a href="agenda_funcionarios.php">Agenda</a></li>
                <li><a class="login-cadastro" href="cadastro_funcionarios.php">Cadastro</a></li>
                <li><a class="login-cadastro" href="../php/logout.php">Sair</a></li>
                <li><a href="cadastro_consulta.php">Agendar Consulta</a></li>
            </ul>
        </nav>

    <main>
        <table class="col-sm-12 col-md-11 col-lg-8">
            <tr>
                <td colspan="7" class="first-row">
                    <div class="month-banner">
                        <input type="button" value="&lang;" onclick="toggleMonth(0)">
                        <h1 id="monthBanner">Outubro</h1>
                        <input type="button" value="&rang;" onclick="toggleMonth(1)">
                    </div>
                </td>
            </tr>
            <tr>
                <td class="last-month-days">
                    <div class="cell-container">
                        <span>29</span>
                    </div>
                </td>
                <td class="last-month-days">
                    <div class="cell-container">
                        <span>30</span>
                    </div>
                </td>
                <td class="last-month-days">
                    <div class="cell-container">
                        <span>31</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>1</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>2</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>3</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>4</span>
                        <div class="event">
                            <p>Lavar a louça</p>
                        </div>
                        <div class="event">
                            <p>Varrer a casa</p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="cell-container">
                        <span>5</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>6</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>7</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>8</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>9</span>
                        <div class="event">
                            <p>Dia do Favo</p>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>10</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>11</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="cell-container">
                        <span>12</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>13</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>14</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>15</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>16</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>17</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>18</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="cell-container">
                        <span>19</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>20</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>21</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>22</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>23</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>24</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>25</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="cell-container">
                        <span>26</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>27</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>28</span>
                        <div class="event">
                            <p>Reunião Bíblica</p>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>29</span>
                    </div>
                </td>
                <td>
                    <div class="cell-container">
                        <span>30</span>
                    </div>
                </td>
                <td class="next-month-days">
                    <div class="cell-container">
                        <span>1</span>
                    </div>
                </td>
                <td class="next-month-days">
                    <div class="cell-container">
                        <span>2</span>
                    </div>
                </td>
            </tr>
        </table>

        <div class="event-info col-sm-12 col-md-11 col-lg-4">
            <div class="title">
                <h1>Consulta do dia XX</h1>
            </div>
            <div class="event-content">
                <div>
                    <h3>Nome do Cliente</h3>
                    <span>Adalto Lourenço</span>
                </div>
                <div>
                    <h3>Raça do Animal</h3>
                    <span>Cão, Pitbull Terrié</span>
                </div>
                <div>
                    <h3>Nome do Profissional</h3>
                    <span>Roberto Carlos da Rocha Costa de Bourbon</span>
                </div>
                <div>
                    <h3>Horário da Consulta </h3>
                    <span><span class="material-symbols-outlined clock"> schedule </span>17:30</span>
                </div>
            </div>
        </div>
    </main>

    <footer class="rodape col-sm-12 col-md-12 col-lg-12">
        <img src="../img/alcina.jpg" class="logo-alcina col-sm-12 col-md-12 col-lg-12"><!-- imagem alcina -->
        <img src="../img/logo-abc.png" class="logo-abc"><!-- imagem abc -->
        <div class="info"> <!-- classe onde estáarmazenado as informações -->
            <p class="r-name">Escola Municipal Alcina Dantas Feijão</p>
            <p class="r-endereco">Rua Capivari nº 500 - Bairro Mauá - São Caetano do Sul - SP</p>
            <p class="r-email">secretaria.alcina@gmail.com</p>
            <p class="r-tel">(11) 4224-0679</p>
        </div>
    </footer>
    
    <script src="../javascript/toggle_menu.js"></script>
    <script src="../javascript/agenda.js"></script>
</body>
</html>