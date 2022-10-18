<?php

//iniciando sessao e verificando se existe
session_start();
if(isset($_SESSION['mensagem'])):?>
<!--utilizando a mensagem ao criar cadastro com javascript-->
<script>
    window.onload = function(){
    M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
}
</script>

<?php
endif;
//depois de criar a sessao temos que limpar  com
session_unset();