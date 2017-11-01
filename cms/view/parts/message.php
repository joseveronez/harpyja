<?php
    if (!empty($_SESSION['sucesso'])) {
        if ($_SESSION['sucesso'] == 'S') {
            ?>
            <script type="text/javascript">
                swal("Pronto!", "Alterações gravadas com sucesso!", "success");
            </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                swal("Erro!", "Não foi possível salvar as alterações!", "error");
            </script>
            <?php
        }
        unset($_SESSION['sucesso']);
    }

    if (!empty($_SESSION['erroCadastro'])) {
        if ($_SESSION['erroCadastro'] == 'E') {
            ?>
            <script type="text/javascript">
                swal("Erro ao cadastrar!", "Usuário ja cadastrado!", "error");
            </script>
            <?php
        }
        unset($_SESSION['erroCadastro']);
    }

    if (!empty($_SESSION['senha'])) {
        if ($_SESSION['senha'] == 'S') {
            ?>
            <script type="text/javascript">
                swal("Pronto!", "Senha alterada com sucesso!", "success");
            </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                swal("Erro!", "Não foi possível atualizar senha!", "error");
            </script>
            <?php
        }
        unset($_SESSION['senha']);
    }
?>