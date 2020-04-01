$(document).ready(function() {

	var editor_config = {
		path_absolute : "/",
		selector: "textarea.my-editor",
		theme: "modern",
		height:300,
		plugins: [
		"advlist autolink lists link image charmap print preview hr anchor pagebreak",
		"searchreplace wordcount visualblocks visualchars code fullscreen",
		"insertdatetime media nonbreaking save table contextmenu directionality",
		"emoticons template paste textcolor colorpicker textpattern"
		],
		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
		relative_urls: false,
		file_browser_callback : function(field_name, url, type, win) {
			var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
			var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

			var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
			if (type == 'image') {
				cmsURL = cmsURL + "&type=Images";
			} else {
				cmsURL = cmsURL + "&type=Files";
			}

			tinyMCE.activeEditor.windowManager.open({
				file : cmsURL,
				title : 'Filemanager',
				width : x * 0.8,
				height : y * 0.8,
				resizable : "yes",
				close_previous : "no"
			});
		}
	};

	tinymce.init(editor_config);

	$(".accordion-dropdpwn").on('change', function(e){
		var selected_value = $(this).val(),
		$target_elem = $('a[href="' + selected_value + '"]');
		$target_elem.trigger('click');


	});

	$('.accordion-toggle').on('click', function(){
		var selected_value = $(this).attr('href');
		$(".accordion-dropdown option").removeAttr('selected');
		$('option[value="' + selected_value + '"]').attr('selected', 'selected');
	});

	$(".accordion-toggle").trigger('change');
	
});