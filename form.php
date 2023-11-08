<?php include "parts/head.php"; ?>
<body>
    <?php include "parts/header.php"; ?>
    <main class="container">
        <form action="ws/save.php" method="get">
            <div class="form-group">
                <label for="txtMusica">Música</label>
                <input type="text" class="form-control" name="nome" id="txtMusica" placeholder="Nome da música">
            </div>
            <div class="form-group">
                <label for="txtBanda">Banda</label>
                <input type="text" class="form-control" name="banda" id="txtBanda" placeholder="Nome da banda">
            </div>
            <input type="submit" value="Salvar" class="btn btn-success">
        </form>
    </main>
    <?php include "parts/footer.php"; ?>
</body>
</html>