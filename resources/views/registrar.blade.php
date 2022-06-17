<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

    <div class="row">
        <div class="col-lg-3 backdaniels" ><img src="/img/daniel.png" alt="daniel"></div>
        <div class="col-lg-6">
            <form method="post" action="/registrar">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nome Funcionário:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="namefunc">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Titulo Solicitação:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="titlesolic">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Setor Solicitante:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="setorsolic">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nivel de Prioridade:</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="nivel">
                        <option>Baixo</option>
                        <option>Médio</option>
                        <option>Alto</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descrição:</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descreva em detalhes seu problema."></textarea>
                </div>
                <input type="submit" value="Enviar">

                <p style="font-style: italic">Todos os chamados tem um prazo de no minimo <strong> 24 horas</strong> para a resolução.</p>
            </form>
        </div>
        <div class="col-lg-3 backdaniels"><img src="/img/daniel.png" alt="daniel"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
