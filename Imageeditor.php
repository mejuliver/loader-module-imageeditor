<?php

namespace PDLoader;

class Imageeditor extends Loader{

	function __construct(){
		echo ( !$this->is_connected() ) ? 'Not connected to internet, unable to download caman plugin' : '';
	}

	public function init(){
		echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/camanjs/4.1.2/caman.full.min.js"></script>'."\r\n";
		echo '<link rel="stylesheet" type="text/css" media="all" href="'.$this->config()['url'].'/loader/modules/Imageeditor/image-editor.min.css">'."\r\n";
		echo '<script src="'.$this->config()['url'].'/loader/modules/Imageeditor/image-editor.min.js"></script>'."\r\n";
	}

	public function imgeditor($opts = []){
		$id = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 6);

		echo '<div id="imgeditor-'.$id.'"></div>';
		$opts["el"] = '#imgeditor-'.$id;
		echo '<script>';
		echo "new cnimage_editor(".json_encode( (object)$opts ).")";
		echo '</script>';
	}
}
