<?php include "parts/head.php"; ?>
<body>
    <?php include "parts/header.php"; ?>
    <main class="container">
    <?php
        $id = 0;
        $car = null;

        if (isset($_GET["id"])) {
            $id = $_GET["id"];

            $pathDb = "musicas.sqlite";
            $connection = new PDO("sqlite:" . $pathDb);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            $prepare = $connection->prepare("SELECT * FROM musicas WHERE id=:id;");
            $prepare->bindParam(":id", $id);

            $prepare->execute();

            $musica = $prepare->fetch();
        }
        ?>

        <form action="ws/update.php" method="get">
            <div class="form-group">
                <input type="hidden" name="id" value="<?= $id ?>">
            </div>
            <div class="form-group">
                <label for="txtMusica">Música</label>
                <input type="text" class="form-control" name="nome" id="txtMusica" placeholder="Nome da música"
                       value="<?= is_null($musica) ? '' : $musica->nome ?>">
            </div>
            <div class="form-group">
                <label for="txtBanda">Banda</label>
                <input type="text" class="form-control" name="banda" id="txtBanda" placeholder="Nome da banda"
                       value="<?= is_null($musica) ? '' : $musica->banda ?>">
            </div>
            <input type="submit" value="Salvar" class="btn btn-success">
        </form>
    </main>
    <?php include "parts/footer.php"; ?>
</body>
</html>