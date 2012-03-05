<?php
    //var json_string = 

    //$json = json_decode($_POST);
    //$json = (array)$json;
    //print_r($json);
    //$json = $_POST;
    $json_string='{ "background": { "background": {"version":1}, "background-attachment": {"version":1}, "background-clip": {"version":3}, "background-color": {"version":1}, "background-image": {"version":1}, "background-origin": {"version":3}, "background-position": {"version":1}, "background-position-x": {"version":""}, "background-position-y": {"version":""}, "background-repeat": {"version":1}, "background-repeat-x": {"version":""}, "background-repeat-y": {"version":""} }, "border": { "border": {"version":1}, "border-bottom": {"version":1}, "border-bottom-color": {"version":2.1}, "border-bottom-left-radius": {"version":3}, "border-bottom-right-radius": {"version":3}, "border-bottom-style": {"version":2.1}, "border-bottom-width": {"version":1}, "border-color": {"version":1}, "border-image": {"version":3}, "border-image-outset": {"version":""}, "border-image-repeat": {"version":""}, "border-image-slice": {"version":""}, "border-image-source": {"version":""}, "border-image-width": {"version":""}, "border-left": {"version":1}, "border-left-color": {"version":2.1}, "border-left-style": {"version":2.1}, "border-left-width": {"version":1}, "border-radius": {"version":3}, "border-right": {"version":1}, "border-right-color": {"version":2.1}, "border-right-style": {"version":2.1}, "border-right-width": {"version":1}, "border-style": {"version":2.1}, "border-top": {"version":1}, "border-top-color": {"version":2.1}, "border-top-left-radius": {"version":3}, "border-top-right-radius": {"version":3}, "border-top-style": {"version":2.1}, "border-top-width": {"version":1}, "border-length": {"version":1}, "border-width": {"version":1} }, "positioning": { "position": {"version":2.1}, "z-index": {"version":2.1}, "top": {"version":2.1}, "right": {"version":2.1}, "bottom": {"version":2.1}, "left": {"version":2.1} }, "color": { "color": {"version":1}, "color-interpolation": {"version":""}, "color-interpolation-filters": {"version":""}, "color-profile": {"version":3}, "color-rendering": {"version":""}, "opacity": {"version":3} }, "content": { "content": {"version":2.1}, "counter-increment": {"version":2.1}, "counter-reset": {"version":2.1}, "quotes": {"version":2.1} }, "font": { "font": {"version":1}, "font-effect": {"version":3}, "font-emphasize": {"version":3}, "font-emphasize-position": {"version":3}, "font-emphasize-style": {"version":3}, "font-family": {"version":1}, "font-size": {"version":1}, "font-stretch": {"version":""}, "font-style": {"version":1}, "font-variant": {"version":1}, "font-weight": {"version":1} }, "list": { "lighting-color": {"version":""}, "list-style": {"version":1}, "list-style-image": {"version":1}, "list-style-position": {"version":1}, "list-style-type": {"version":1} }, "layout": { "display": {"version":1}, "float": {"version":1}, "float-offset": {"version":3}, "clear": {"version":1}, "visibility": {"version":2.1}, "clip": {"version":2.1}, "clip-path": {"version":""}, "clip-rule": {"version":""}, "overflow": {"version":2.1}, "overflow-style": {"version":3}, "overflow-x": {"version":3}, "overflow-y": {"version":3} }, "dimension": { "width": {"version":1}, "max-width": {"version":2.1}, "min-width": {"version":2.1}, "height": {"version":1}, "max-height": {"version":2.1}, "min-height": {"version":2.1} }, "margin": { "margin": {"version":1}, "margin-bottom": {"version":1}, "margin-left": {"version":1}, "margin-right": {"version":1}, "margin-top": {"version":1} }, "user-interface": { "outline": {"version":2.1}, "outline-color": {"version":2.1}, "outline-offset": {"version":3}, "outline-style": {"version":2.1}, "outline-width": {"version":2.1}, "nav-index": {"version":3}, "nav-up": {"version":3}, "nav-right": {"version":3}, "nav-down": {"version":3}, "nav-left": {"version":3}, "cursor": {"version":2.1}, "zoom": {"version":""}, "box-align": {"version":3}, "box-direction": {"version":3}, "box-flex": {"version":3}, "box-flex-groups": {"version":3}, "box-lines": {"version":3}, "box-ordinal-groups":{"version":""}, "box-orient": {"version":3}, "box-pack": {"version":3}, "box-reflect": {"version":""}, "box-sizing": {"version":""}, "box-shadow": {"version":3}, "resize": {"version":""} }, "padding": { "padding": {"version":1}, "padding-bottom": {"version":1}, "padding-left": {"version":1}, "padding-right": {"version":1}, "padding-top": {"version":1} }, "printing": { "page": {"version":2.1}, "page-break-after": {"version":2.1}, "page-break-before": {"version":2.1}, "page-break-inside": {"version":2.1}, "page-policy": {"version":3} }, "table": { "border-collapse": {"version":2.1}, "table-layout": {"version":2.1}, "border-spacing": {"version":""}, "caption-side": {"version":2.1}, "empty-cells": {"version":2.1} }, "text": { "direction": {"version":2.1}, "tab-size": {"version":3, "制表符的长度":"", "integer":"", "length":""}, "text-align": {"version":1}, "text-align-last": {"version":3}, "text-anchor": {"version":""}, "text-decoration": {"version":1}, "text-emphasis": {"version":3}, "text-height": {"version":3}, "text-indent": {"version":1}, "text-justify": {"version":3}, "text-outline": {"version":3}, "text-replace": {"version":3}, "text-line-through": {"version":""}, "text-line-through-color": {"version":""}, "text-line-through-mode": {"version":""}, "text-line-through-style": {"version":""}, "text-line-through-width": {"version":""}, "text-overflow": {"version":""}, "text-overline": {"version":""}, "text-overline-color": {"version":""}, "text-overline-mode": {"version":""}, "text-overline-style": {"version":""}, "text-overline-width": {"version":""}, "text-rendering": {"version":""}, "text-shadow": {"version":3}, "text-transform": {"version":2.1}, "text-underline": {"version":""}, "text-underline-color": {"version":""}, "text-underline-mode": {"version":""}, "text-underline-style": {"version":""}, "text-underline-width": {"version":""}, "text-wrap": {"version":3}, "letter-spacing": {"version":1}, "word-spacing": {"version":2.1}, "vertical-align": {"version":1}, "unicode-bidi": {"version":2.1}, "line-height": {"version":1}, "line-stacking": {"version":3}, "line-stacking-ruby": {"version":3}, "line-stacking-shift": {"version":3}, "line-stacking-strategy": {"version":3} }, "media-queries": { "device-width": {"version":3}, "device-height": {"version":3}, "orientation": {"version":3}, "aspect-ratio": {"version":3}, "device-aspect-ratio": {"version":3}, "color-index": {"version":3}, "monochrome": {"version":3}, "resolution": {"version":3}, "scan": {"version":3}, "grid": {"version":3}, "grid-columns": {"version":3}, "grid-rows": {"version":3} }, "others":{ "alignment-adjust": {"version":3}, "alignment-baseline": {"version":3,"baseline":"", "use-script":"", "before-edge":"", "text-before-edge":"", "after-edge":"", "text-after-edge":"", "central":"", "middle":"", "ideographic":"", "alphabetic":"", "hanging":"", "mathematica":""}, "appearance": {"version":3}, "baseline-shift": {"version":3}, "binding": {"version":3}, "bookmark-label": {"version":3}, "bookmark-level": {"version":3}, "bookmark-target": {"version":3}, "column-axis":{"version":3}, "column-break-after": {"version":3}, "column-break-before": {"version":3}, "column-break-inside": {"version":""}, "column-count": {"version":3}, "column-fill": {"version":3}, "column-gap": {"version":3}, "column-rule": {"version":3}, "column-rule-color": {"version":3}, "column-rule-style": {"version":3}, "column-rule-width": {"version":3}, "column-span": {"version":3}, "column-width": {"version":3}, "columns": {"version":3}, "crop": {"version":3}, "cue": {"version":2.1}, "cue-after": {"version":2.1}, "cue-before": {"version":2.1}, "dominant-baseline": {"version":3}, "drop-initial-after-adjust": {"version":3}, "drop-initial-after-align": {"version":3}, "drop-initial-before-adjust": {"version":3}, "drop-initial-before-align": {"version":3}, "drop-initial-size": {"version":3}, "drop-initial-value": {"version":3}, "enable-background": {"version":""}, "elevation": {"version":2.1}, "fill": {"version":""}, "fill-opacity": {"version":""}, "fill-rule": {"version":""}, "filter": {"version":""}, "fit": {"version":3}, "fit-position": {"version":3}, "flood-color": {"version":""}, "flood-opacity": {"version":""}, "glyph-orientation-horizontal": {"version":""}, "glyph-orientation-vertical": {"version":""}, "hanging-punctuations": {"version":3}, "hyphenate-after": {"version":3}, "hyphenate-before": {"version":3}, "hyphenate-character": {"version":3}, "hyphenate-lines": {"version":3}, "hyphenate-resource": {"version":3}, "hyphens": {"version":3}, "icon": {"version":3}, "image-rendering": {"version":""}, "image-orientation": {"version":3}, "image-resolution": {"version":3}, "inline-box-align": {"version":3}, "mark": {"version":3}, "mark-after": {"version":3}, "mark-before": {"version":3}, "mark-offset": {"version":3}, "marks": {"version":3}, "marker": {"version":""}, "marker-mid": {"version":""}, "marker-end": {"version":""}, "marker-start": {"version":""}, "marquee-direction": {"version":3}, "marquee-play-count": {"version":3}, "marquee-speed": {"version":3}, "marquee-style": {"version":3}, "mask": {"version":""}, "move-to": {"version":3}, "orphans": {"version":2.1}, "pointer-events": {"version":""}, "pause": {"version":2.1}, "pause-after": {"version":2.1}, "pause-before": {"version":2.1}, "phonemes": {"version":3}, "pitch": {"version":2.1}, "pitch-range": {"version":2.1}, "play-during": {"version":2.1}, "presentation-level": {"version":3}, "punctuation-trim": {"version":3}, "richness": {"version":2.1}, "rendering-indent": {"version":3}, "rest": {"version":3}, "rest-after": {"version":3}, "rest-before": {"version":3}, "rotation": {"version":3}, "rotation-point": {"version":3}, "ruby-align": {"version":3}, "ruby-overhang": {"version":3}, "ruby-position": {"version":3}, "ruby-span": {"version":3}, "shape-rendering": {"version":""}, "size": {"version":3}, "speak": {"version":2.1}, "speak-header": {"version":2.1}, "speak-numeral": {"version":2.1}, "speak-punctuation": {"version":2.1}, "speech-rate": {"version":2.1}, "stress": {"version":2.1}, "string-set": {"version":3}, "src": {"version":""}, "stop-color": {"version":""}, "stop-opacity": {"version":""}, "stroke": {"version":""}, "stroke-dasharray": {"version":""}, "stroke-dashoffset": {"version":""}, "stroke-linecap": {"version":""}, "stroke-linejoin": {"version":""}, "stroke-miterlimit": {"version":""}, "stroke-opacity": {"version":""}, "stroke-width": {"version":""}, "target": {"version":3}, "target-name": {"version":3}, "target-new": {"version":3}, "target-position": {"version":3}, "unicode-range": {"version":""}, "vertor-effect": {"version":""}, "voice-balance": {"version":3}, "voice-duration": {"version":3}, "voice-family": {"version":2.1}, "voice-pitch": {"version":3}, "voice-pitch-range": {"version":3}, "voice-rate": {"version":3}, "voice-stress": {"version":3}, "voice-volume": {"version":3}, "volume": {"version":2.1}, "white-space": {"version":1}, "white-space-collapse": {"version":3}, "windows": {"version":2.1}, "word-break": {"version":3}, "word-wrap": {"version":3}, "writing-mode": {"version":""} } }';
    //$json = (array) $json_string;
    $json = json_decode($json_string);

	function objectToArray($d) {
		if (is_object($d)) {
			// Gets the properties of the given object
			// with get_object_vars function
			$d = get_object_vars($d);
		}
 
		if (is_array($d)) {
			/*
			* Return array converted to object
			* Using __FUNCTION__ (Magic constant)
			* for recursive call
			*/
			return array_map(__FUNCTION__, $d);
		}
		else {
			// Return array
			return $d;
		}
	}
    
    $json_arr = objectToArray($json);
    //print_r($json_arr);

    foreach($json_arr as $k=>$v){
        foreach($json_arr[$k] as $ke=>$va){
            foreach($json_arr[$k][$ke] as $key=>$val){
                if($key == "version"){
                    echo "<h4>$k</h4>"; //type
                    echo $ke; //property
                    echo "</br>";
                    echo "$key : $val"; //version & value
                    echo "</br>";
                };
            };
        };
    };
    

    if (array_key_exists('background', $json_arr)) {
        $con = mysql_connect("127.0.0.1","root","wanghao");
        //$con = mysql_connect("localhost","csstest","csstest");
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        };
    
    
        $results = array();
    
        mysql_select_db("csstest", $con);
        

        foreach($json_arr as $k=>$v){
            foreach($json_arr[$k] as $ke=>$va){
                foreach($json_arr[$k][$ke] as $key=>$val){
                    if($key == "version"){
                        echo "<h4>$k</h4>"; //type
                        echo $ke; //property
                        echo "</br>";
                        echo "$key : $val"; //version & value
                        echo "</br>";
                        $sql="INSERT INTO prop (`property`, `type`, `version`) VALUES ('$ke', '$k', '$val')";
                        mysql_query($sql);
                    };
                };
            };
        };
        
        
        if (!mysql_query($sql,$con)) {
            die('Error: ' . mysql_error());
        };
        mysql_close($con);
        die;
    };
?>
