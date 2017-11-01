<!DOCTYPE html>

<html class="js">

<head>
	<title><?= title ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoPlugins ?>/bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoSite ?>/css/simple-sidebar.css">
    <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoSite ?>/css/style.css">
    <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoPlugins ?>/sweetalert-master/dist/sweetalert.css">
    
    <!-- jQuery DataTable Style Sheet -->
    <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoPlugins ?>/DataTables-1.10.13/media/css/jquery.dataTables.css">
    
    <!-- Font Awesome Icons Style Sheet -->
    <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoPlugins ?>/font-awesome-4.7.0/css/font-awesome.min.css">

    <link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoSite ?>/css/jquery-ui.min.css">

    <script type="text/javascript" src="<?= caminhoSite ?>/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="<?= caminhoPlugins ?>/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= caminhoSite ?>/js/functions.js"></script>
    <script type="text/javascript" src="<?= caminhoPlugins ?>/sweetalert-master/dist/sweetalert.min.js"></script>

    <!-- DataTable jQuery + DataTable JavaScript Plugin -->
    <script type="text/javascript" src="<?= caminhoPlugins ?>/DataTables-1.10.13/media/js/jquery.js"></script>
    <script type="text/javascript" src="<?= caminhoPlugins ?>/DataTables-1.10.13/media/js/jquery.dataTables.min.js"></script>

    <!-- TinyMCE JavaScript Plugin -->
    <script type="text/javascript" src="<?= caminhoPlugins ?>/tinymce/js/tinymce/tinymce.min.js"></script>

    <script>
        $(document).ready(function(){
            var table = $('#example').DataTable();
            var table = $('.dataTable').DataTable();
             
            $('#example tbody')
            .on( 'mouseenter', 'td', function () {
                var colIdx = table.cell(this).index().column;
     
                $( table.cells().nodes() ).removeClass( 'highlight' );
                $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
            });

            $('#myArquivo').on('shown.bs.modal', function () {
              $('#myInput').focus()
            });
        });
    </script>
</head>