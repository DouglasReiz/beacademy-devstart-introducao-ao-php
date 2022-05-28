<form action="" method="POST">
<input type="text" name="nome" placeholder="Nome...">
    <input type="text" name="idade" placeholder="Idade...">
    <input type="text" name="telefone" placeholder="telefone">
    <button>Enviar Dados</button>

</form>
  
<table>
        <caption>Tabela com dados do PHP</caption>
        <tr>

            <th>Nome</th>
            <th>Idade</th>
        </tr>
            
        <tr>
            <td><?PHP echo $_POST["nome"]; ?></td>
            <td><?PHP echo $_POST["idade"]; ?></td>
            <td><?PHP echo $_POST["telefone"]; ?></td>
        </tr>
            
            
        

        
</table>