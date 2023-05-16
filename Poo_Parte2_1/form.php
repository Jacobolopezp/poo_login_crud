<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style_f.css">

    <title>Form</title>
</head>

<body>
    <div class="container">
        <div class="row align-items-stretch " >
            <div class="col">
                <h2 class="fw-bold text-center py-5">Biblioteca</h2>

                <form action="#" method="POST">
                    <div class="mb-4">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="autor" class="form-label">Autor</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="fecha_publicacion" class="form-label">Fecha de Publicacion</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="editorial" class="form-label">Editorial</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="numero_pag" class="form-label">Numero de Paginas</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <label for="idioma">Idioma</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Ingles</option>
                            <option>Español</option>
                            <option>Frances</option>
                            <option>Italiano</option>
                            <option>Ruso</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="formato">Formato</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Fisico</option>
                            <option>Electronico</option>
                            <option>Audiolibro</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="valoracion" class="form-label">Valoracion</label>
                        <input type="number" step="0.5" max="5" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <label for="disponiblidad">Disponibilidad</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>En stock</option>
                            <option>Agotado</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="nivel_lectura">Nivel de Lectura</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Infantil</option>
                            <option>Juvenil</option>
                            <option>Adulto</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="pais" class="form-label">Pais de origen</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="categoria" class="form-label">Categoria</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <label for="nivel_lectura">Licencias</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Derechos de autor</option>
                            <option>Dominio Publico</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label for="sinopsis">Sinopsis</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div><br>
        
                </form>
            </div>
            <div class="col d-none d-lg-block">
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>