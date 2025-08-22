<?php
    include 'cabecalho.php';
?>
<body>    
    <div class="container">
        <h2>LISTAGEM DE PRODUTOS</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">PREÇO</th>
                    <th scope="col">QUANTIDADE</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Teclado Gamer</td>
                    <td>120,99</td>
                    <td>10</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="#" type="button" class="btn btn-success">Atualizar</a>
                            <a href="#" type="button" class="btn btn-danger">Apagar</a>
                        </div>
                    </td>
                </tr>                
            </tbody>
        </table>
    </div>
</body>
</html>