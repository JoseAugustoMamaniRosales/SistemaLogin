<html>
    <head>
        <title>Sistema de Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="container text-center">

            <div class="row">
                <div class="col">
                    <nav class="navbar bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                                <img src="img/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                                 Bootstrap
                            </a>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Sistema Web 2.0</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                        <div class="navbar-nav">
                                            <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                                            <a class="nav-link" href="#">Consultar</a>
        
                                        </div>
                                    </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Nome:</label>
                            <input class="form-control" id="exampleFormControlTextarea1" rows="3"></input>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Endereço:</label>
                            <input class="form-control" id="exampleFormControlTextarea1" rows="3"></input>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Bairro:</label>
                            <input class="form-control" id="exampleFormControlTextarea1" rows="3"></input>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Cep:</label>
                            <input class="form-control" id="exampleFormControlTextarea1" rows="3"></input>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Cidade:</label>
                            <input class="form-control" id="exampleFormControlTextarea1" rows="3"></input>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Estado</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Selecione um estado</option>
                                <option value="1">AC</option>
                                <option value="2">AL</option>
                                <option value="3">AP</option>
                                <option value="4">AM</option>
                                <option value="5">BA</option>
                                <option value="6">CE</option>
                                <option value="7">ES</option>
                                <option value="8">GO</option>
                                <option value="9">MA</option>
                                <option value="10">MT</option>
                                <option value="11">MS</option>
                                <option value="12">MG</option>
                                <option value="13">PA</option>
                                <option value="14">PB</option>
                                <option value="15">PR</option>
                                <option value="16">PE</option>
                                <option value="17">PI</option>
                                <option value="18">RJ</option>
                                <option value="19">RN</option>
                                <option value="20">RS</option>
                                <option value="21">RO</option>
                                <option value="22">RR</option>
                                <option value="23">SC</option>
                                <option value="24">SP</option>
                                <option value="25">SE</option>
                                <option value="26">TO</option>
                                <option value="27">DF</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Login:</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Senha:</label>
                            <input class="form-control" id="exampleFormControlTextarea1" rows="3"></input>
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>