<!doctype html>
<html>
<head>
    <script type="text/javascript">
        if (!document.getSelection) {
            window.location = "/oldbrowser.html";
        }
    </script>
    <base href="<?php echo base_url() ;?>"/>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/content/src/css/pub.css">
    <? if (count($head_link)>0) {
    	foreach ($head_link as $key => $value) {
    		    		echo $value;
    		    	}	    	
    }
    ?>
    <title>sophoto-<?php echo $title ?></title>
</head>
<body>