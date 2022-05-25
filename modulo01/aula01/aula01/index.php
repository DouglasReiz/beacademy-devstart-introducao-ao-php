<form action="" method="POST">
    <input name="nome" placeholder="Nome"> <br>
    <Input name="cidade" placeholder="Cidade"> <br>
    <button>Enviar</button>
</form>



<?php 
    if ($_POST){
        echo "oi ".$_POST['nome'];
    }
?>