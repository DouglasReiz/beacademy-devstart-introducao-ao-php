<div class="s-lista">
    <div class="container">
        <h1>Sua lista</h1>

        <img src="./assets/img/imperial-logo.svg" alt="Imperio">

        <div class="t-contacts">
            <table class="c-table">
                <thead class="table-h">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Celular</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody class="table-b">
                    <?php
                        foreach($contatos as $posicao => $cadaContato){
                            $partes = explode(';', $cadaContato);

                            echo '<tr>';
                                echo '<td>' . $partes[0] . '</td>';
                                echo '<td>' . $partes[1] . '</td>';
                                echo '<td>' . $partes[2] . '</td>';
                                echo "<td class='l-botoes'>
                                <a href='/excluir?id={$posicao}' class='btn-primary'>Excluir</a>
                                </td>";
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>


    </div>
</div>