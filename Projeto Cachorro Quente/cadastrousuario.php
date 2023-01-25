<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/Base.css">
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <link rel="icon" href="icon/LOGO.png">
   
    <title>Cadastro de Clientes</title>
    <br>
    <img src="img/LOGO1.webp" width="9%" height="9%" align="right">

</head>

<body style="background-color:#524733;">
    <style>
        body {
            background-image: url('img/background.webp');
        }
    </style>

    <nav class="nav nav-pills justify-content-start">
        <a class="navbar-brand" href="pagelogin.html">
            <a style="width: 50px; height: 50px; margin: 10px; margin-top: 5px;background:0;"
                class="nav-link nav-button active" href="index.html"><img src="img/seta_esquerda.png" width="50rem"
                    height="50rem"></a>
            </li>
            </ul>
    </nav>
    <div class="container text-center">
        <img src="img/icon.png" width=8% height=8% class="rounded" alt="...">
    </div>
    <div class="container-fluid col-sm-4 text-break">

        <!-- Inicio do formulário -->
        <form action="registrocliente.php" method="post" id="formRegistro" class="cad">
            <p class="p-1"></p>

            <h4 class="text-break text-center">Cadastro Clientes</h4>
            <p class="p-1"></p>

            <!-- primeira linha -->
            <div class="row">
                <div class="col-sm-7">
                    <label>Nome Completo*</label>
                    <input type="text" class="form-control is valid form-control-md" id="validationdefault01"
                        name="nome" placeholder="Digite seu nome" required><br>
                </div>
                <div class="col-sm">
                    <label>CPF*</label>
                    <input type="text" class="form-control is valid form-control-md" id="cpf" name="cpf" 
                        placeholder="EX.:000.000.000-00" maxlength="14" autocomplet="off"  onkeypress="return somenteNumeros(charCode)" required ><br>
                </div>
            </div>
           
            

            <!-- segunda linha -->
            <div class="row">
                <div class="col-sm-6">
                    <label>E-mail*</label>
                    <input type="text" class="form-control is valid form-control-md" id="validationdefault02"
                        name="Email" placeholder="exemplo@mail.com" required><br>
                </div>
                <div class="col-sm">
                    <label>Telefone*</label>
                    <input type="text" class="form-control phone-ddd-mask" id="tel"
                        name="telefone" placeholder="EX.:(00) 00000-0000" required>
                </div>
            </div>
            <script src= "./main.js"></script>


            <!-- terceira linha -->
            <div class="row">
                <div class="col-sm-6">
                    <label>Tipo de Logradouro*</label>
                    <input type="text" class="form-control is valid form-control-md" id="validationdefault06"
                        name="tp_logradouro" placeholder="Rua, Av.,Travessa, etc" required><br>
                </div>
                <div class="col-sm">
                    <label>Logradouro*</label>
                    <input type="text" class="form-control is valid form-control" id="validationdefault03"
                        name="logradouro" placeholder="Nome do logradouro" required><br>
                </div>
            </div>

            <!-- quarta linha -->
            <div class="row">
                <div class="col-sm-4">

                    <label>Número*</label>
                    <input type="text" class="form-control is valid form-control-md" id="validationdefault03"
                        name="numero" placeholder="Número" required><br>
                </div>
                <div class="col-sm">
                    <label>Complemento</label>
                    <input type="text" class="form-control form-control-md" name="complemento"
                        placeholder="Complemento">
                    <br>
                </div>
            </div>

            <!-- quinta linha  -->

            <div class="row">
                <div class="col-sm-6">
                    <label>Bairro*</label>
                    <input type="text" class="form-control is valid form-control-md" id="validationdefault03"
                        name="bairro" placeholder="Bairro" required>
                </div>
                <div class="col-sm">
                    <label>Município*</label>
                    <input type="text" class="form-control is valid form-control-md" id="validationdefault03"
                        name="municipio" placeholder="Município" required>
                </div>
            </div>

            <!-- sexta linha -->

            <p class="p-1"></p>
            <div class="row">
                <div class="col-sm-6">
                    <label>CEP*</label>
                    <input type="text" class="form-control is valid form-control-md" id="validationdefault03" name="cep"
                        placeholder="Digite seu CEP" required>
                </div>

                <div class="col-sm">
                    <label>Estado*</label>
                    <!--<select class="form-select form-select-md">-->
                    <input type="text" class="form-control is valid form-control-md" id="validationdefault03"
                        name="estado" placeholder="Sigla do estado" required>
                    <!--<option selected>Selecione</option>
                                        <option value="1">ES</option>
                                            <option value="2">MG</option>
                                            <option value="3">RJ</option>
                                            <option value="4">SP</option> -->

                    </select>

                </div>
            </div>
            <p class="p-1"></p>
            <div class="row">
                <div class="col-sm-12">
                    <label>Senha*</label>
                    <input type="password" class="form-control is valid form-control-md" id="validationdefault03"
                        name="senha" placeholder="Senha" required>
                </div>
            </div>


            <p class="p-1"></p>
            <div class="form-check  form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="opcao1">
                <label class="custom-control-label" for="customControlValidation1">Deseja
                    receber conteúdo promocional por E-mail/Whatsapp?</label>
            </div>
            <div class="text-center">
                <p class="p-1"></p>
                <button class="btn btn-lg border-none" style="background-color:#c99c5e; color: black; "
                    type="submit">Cadastrar
                    Usuário</button>
                <p class="p-1"></p>
                <a href="pagelogin.html" style="color:#c99c5e;">Você já tem uma conta? <br>Fazer
                    login</a>

                <p class="p-3"></p>
            </div>
            </nav>
    </div>
    </div>
    </form>
    </div>

    <footer id="rodapecad" class="col-sm-12">
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">

            
</body>
     </html>