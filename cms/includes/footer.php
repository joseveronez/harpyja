</div>
	<link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoPlugins ?>/inputfile/css/component.css">
	<script type="text/javascript" src="<?= caminhoPlugins ?>/inputfile/js/custom-file-input.js"></script>
	<script type="text/javascript" src="<?= caminhoSite ?>/js/jquery.mask.min.js"></script>
	<script>
		$(document).ready(function () {
			$('.money').mask('000.000.000.000.000,00', {reverse: true});
			$('.telefone').mask('(00) 0000-0000');

			tinymce.init({
	            selector: "textarea#inputConteudo",
	            theme: "modern",
	            width: '100%',
	            height: 300,
	            plugins: ["autoresize advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
	            content_css: "<?= $caminhoSite ?>/plugins/tinymce/content.min.css",
	            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
	            style_formats: [
	                {title: 'Bold text', inline: 'b'},
	                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
	                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
	                {title: 'Example 1', inline: 'span', classes: 'example1'},
	                {title: 'Example 2', inline: 'span', classes: 'example2'},
	                {title: 'Table styles'},
	                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
	            ]
	        });

	        tinymce.init({
	            selector: "textarea.tinyMCE",
	            theme: "modern",
	            width: '100%',
	            height: 300,
	            plugins: ["autoresize advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
	            content_css: "<?= $caminhoSite ?>/plugins/tinymce/content.min.css",
	            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
	            style_formats: [
	                {title: 'Bold text', inline: 'b'},
	                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
	                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
	                {title: 'Example 1', inline: 'span', classes: 'example1'},
	                {title: 'Example 2', inline: 'span', classes: 'example2'},
	                {title: 'Table styles'},
	                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
	            ]
	        });
		});
	</script>
</body>
</html>