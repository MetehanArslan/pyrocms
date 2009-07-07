<!-- TinyMCE -->
<?= js('tiny_mce/tiny_mce.js'); ?>

<script type="text/javascript">

	// Basic options
	tinyMCE.init({
		
		mode : "specific_textareas",
		editor_selector : "wysiwyg-simple",
		editor_class : "wysiwyg-simple",
		theme : "advanced",

		width : 325,

		force_p_newlines : false,
		force_br_newlines : true,
		forced_root_block : '',
		
		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,code",
		theme_advanced_buttons2 : '',

		valid_elements : 'b/strong,i/em,u,strike,br',
			
    });


	// General options
    tinyMCE.init({

    	mode : "specific_textareas",
		editor_selector : "wysiwyg-advanced",
		editor_class : "wysiwyg-advanced",

		width : 650,
		height : 600,
		constrain_menus : true,
		
		theme : "advanced",
		plugins : "tinycimm,safari,pagebreak,style,layer,advhr,advimage,advlink,emotions,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,fullscreen,noneditable,visualchars,xhtmlxtras,template",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,blockquote,|,sub,sup,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,undo,redo,|,search,replace,|,bullist,numlist,|,outdent,indent,|,insertdate,inserttime,|,forecolor,backcolor,|,print,preview,fullscreen,code",
		theme_advanced_buttons3 : "image,tinycimm-image,anchor,link,unlink,|,charmap,emotions,media,advhr,",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_resizing : true,

		document_base_url: "<?= BASE_URI ;?>",
		
		media_strict: false,

		// required TinyCIMM settings
		file_browser_callback : 'tinycimm',
		tinycimm_controller : '<?=$this->config->item('tinycimm_controller');?>',
		tinycimm_assets_path : '/application/uploads/tinycimm/',
		tinycimm_resize_default_intial_width : '<?=$this->config->item('default_initial_width', 'tinycimm_image_resize_config');?>',
		tinycimm_thumb_width : '<?=$this->config->item('tinycimm_image_thumbnail_default_width');?>',
		tinycimm_thumb_height : '<?=$this->config->item('tinycimm_image_thumbnail_default_height');?>',
		tinycimm_thumb_lightbox_class : '<?=$this->config->item('tinycimm_image_thumbnail_default_lightbox_class');?>',
		tinycimm_thumb_lightbox_gallery : '<?=$this->config->item('tinycimm_image_thumbnail_default_lightbox_gallery');?>',

		// Default ruleset
		valid_elements : "@[id|class|style|title|dir<ltr?rtl|lang|xml::lang|onclick|ondblclick|"
			+ "onmousedown|onmouseup|onmouseover|onmousemove|onmouseout|onkeypress|"
			+ "onkeydown|onkeyup],a[rel|rev|charset|hreflang|tabindex|accesskey|type|"
			+ "name|href|target|title|class|onfocus|onblur],strong/b,em/i,strike,u,"
			+ "#p[align],-ol[type|compact],-ul[type|compact],-li,br,img[longdesc|usemap|"
			+ "src|border|alt=|title|hspace|vspace|width|height|align],-sub,-sup,"
			+ "-blockquote,-table[border=0|cellspacing|cellpadding|width|frame|rules|"
			+ "height|align|summary|bgcolor|background|bordercolor],-tr[rowspan|width|"
			+ "height|align|valign|bgcolor|background|bordercolor],tbody,thead,tfoot,"
			+ "#td[colspan|rowspan|width|height|align|valign|bgcolor|background|bordercolor"
			+ "|scope],#th[colspan|rowspan|width|height|align|valign|scope],caption,-div,"
			+ "-span,-code,-pre,address,-h1,-h2,-h3,-h4,-h5,-h6,hr[size|noshade],-font[face"
			+ "|size|color],dd,dl,dt,cite,abbr,acronym,del[datetime|cite],ins[datetime|cite],"
			+ "object[classid|width|height|codebase|*],param[name|value|_value],"
			+ "script[src|type],map[name],area[shape|coords|href|alt|target],bdo,"
			+ "button,col[align|char|charoff|span|valign|width],colgroup[align|char|charoff|span|"
			+ "valign|width],dfn,fieldset,form[action|accept|accept-charset|enctype|method],"
			+ "input[accept|alt|checked|disabled|maxlength|name|readonly|size|src|type|value],"
			+ "kbd,label[for],legend,noscript,optgroup[label|disabled],option[disabled|label|selected|value],"
			+ "q[cite],samp,select[disabled|multiple|name|size],small,"
			+ "textarea[cols|rows|disabled|name|readonly],tt,var,big"

			// Customisation
			+',embed[width|height|name|flashvars|src|bgcolor|align|play|loop|quality|allowscriptaccess|type|pluginspage]'

    });

	// TinyCIMM file browser callback function
	function tinycimm(field_name, url, type, win) {

		var url = win.tinyMCE.baseURI.relative+'/plugins/tinycimm/'+type+'.htm';

		tinyMCE.activeEditor.windowManager.open({
			file : url,
			width : 574,
			height : 462,
			resizable : "yes",
			inline : "yes",  
			close_previous : "no"
		}, {
			window : win,
			tinyMCEPopup : win.tinyMCEPopup,
			input : field_name
		});
		return false;
	}

    
	// Example content CSS (should be your site CSS)
	//content_css : "css/content.css",

	// Drop lists for link/image/media/template dialogs
	//template_external_list_url : "lists/template_list.js",
	//external_link_list_url : "lists/link_list.js",
	//external_image_list_url : "lists/image_list.js",
	//media_external_list_url : "lists/media_list.js",

	// Replace values for the template plugin
	/*template_replace_values : {
		username : "Some User",
		staffid : "991234"
	}*/
	
</script>
<!-- /TinyMCE -->
