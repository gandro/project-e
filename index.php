<?php
require_once('includes/init.php');

switch(eAction::getAction()) {
	case 'index':
		eTemplating::create();
		break;

	case 'upload':

		$fileID = substr(md5(uniqid()), 0, 8);

		$upload = new fUpload();
		$upload->setMIMETypes(
		    eConfig::get('Upload.Whitelist'),
		    'The mime-type of the file uploaded is not allowed!'
		);
		$upload->setMaxSize(eConfig::get('Upload.MaxFilesize'));
		$validation = $upload->validate('file', true);

		$view = eTemplating::create("view.php");

		if(is_string($validation)) {
			$view->set('error', $validation);
			break;
		}

		$dir = fDirectory::create(FILES_DIR . '/' . $fileID);
		$file = $upload->move($dir, 'file');

		$url = fURL::getDomain() . fFilesystem::translateToWebPath(
			    FILES_DIR . '/' . $fileID . '/' . $file->getName());
		$size = $file->getSize(true, 2);

		$view->set('url', $url);
		$view->set('filesize', $size);
		break;
}
