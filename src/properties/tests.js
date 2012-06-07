Specs = {
    "animation": {
        "title": "动画(Animation)",
        "properties": {
            "animation": {"version":3, "value":["animations 2s ease-out", 'ease-out']},
            "animation-name": {"version":3, "value":["none","animation1"]},
            "animation-duration": {"version":3, "value":["2s"]},
            "animation-timing-function": {"version":3, "value":["linear","ease","ease-in","ease-out","ease-in-out"]},
            "animation-delay": {"version":3, "value":[".5s"]},
            "animation-iteration-count": {"version":3, "value":["infinite","1"]},
            "animation-direction": {"version":3, "value":["normal","alternate"]}
        }
    },
    "background": {
        "title": "背景(Background)",
        "properties": {
            "background": {"version":1, "value":["#eee url(skin/p_103x196_1.jpg) no-repeat scroll 50px 30px"]},
            "background-color": {"version":1, "value":["transparent","#eee"]},
            "background-attachment": {"version":"1/3", "value":["scroll","fixed","local"]},
            "background-image": {"version":"1/3", "value":["url('paper.gif')", "linear-gradient(left, #45B5DA, #0382AD)", "radial-gradient(left top, circle, #45B5DA, #0382AD)","gradient(linear, 50% 0%, 50% 100%, from(#45B5DA), to(#0382AD))","gradient(radial, 50% 0%, 40, 50% 100%, 80, from(#45B5DA), to(#0382AD))", "repeating-linear-gradient(top,#f00,#ff0 10%,#f00 15%)", "url(1.jpg),url(2.jpg),url(3.jpg)"]},
            "background-position": {"version":"1/3", "value":["top center","0 0","50% 50%"]},
            "background-repeat": {"version":"1/3", "value":["no-repeat","repeat","repeat-x","repeat-y","round","space"]},
            "background-clip": {"version":3, "value":["border-box","padding-box","content-box"]},
            "background-origin": {"version":3, "value":["border-box","padding-box","content-box"]},
            "background-size": {"version":3, "value":["auto","cover","contain","80px 60px"]}
        }
    },
    "border": {
        "title": "边框(Border)",
        "properties": {
            "border": {"version":1, "value":["5px solid #00f"]},
            "border-width": {"version":1, "value":["5px","thin","medium","thick"]},
            "border-style": {"version":1, "value":["none","hidden","dotted","dashed","solid","double","groove","ridge","inset","outset"]},
            "border-color": {"version":1, "value":["#00f"]},
            "border-top": {"version":1, "value":["5px solid #00f"]},
            "border-top-color": {"version":1, "value":["#00f"]},
            "border-top-style": {"version":1, "value":["solid"]},
            "border-top-width": {"version":1, "value":["5px"]},
            "border-right": {"version":1, "value":["5px solid #00f"]},
            "border-right-color": {"version":1, "value":["#00f"]},
            "border-right-style": {"version":1, "value":["solid"]},
            "border-right-width": {"version":1, "value":["5px"]},
            "border-bottom": {"version":1, "value":["5px solid #00f"]},
            "border-bottom-color": {"version":1, "value":["#00f"]},
            "border-bottom-style": {"version":1, "value":["solid"]},
            "border-bottom-width": {"version":1, "value":["5px"]},
            "border-left": {"version":1, "value":["5px solid #00f"]},
            "border-left-color": {"version":1, "value":["#00f"]},
            "border-left-style": {"version":1, "value":["solid"]},
            "border-left-width": {"version":1, "value":["5px"]},
            "border-radius": {"version":3, "value":["5px","5px 10px","5px 10px 15px","5px 10px 15px 20px"]},
            "border-top-left-radius": {"version":3, "value":["5px","5px 10px"]},
            "border-top-right-radius": {"version":3, "value":["5px","5px 10px"]},
            "border-bottom-left-radius": {"version":3, "value":["5px","5px 10px"]},
            "border-bottom-right-radius": {"version":3, "value":["5px","5px 10px "]},
            "border-image": {"version":3, "value":["url(skin/border.png) 27/27px","url(skin/border.png) 27/27px stretch"]},
            "border-image-outset": {"version":3, "value":["30 30"]},
            "border-image-repeat": {"version":3, "value":["stretch","repeat","round"]},
            "border-image-slice": {"version":3, "value":["50% 50%"]},
            "border-image-source": {"version":3, "value":["url(border.png)"]},
            "border-image-width": {"version":3, "value":["30 30"]},
            "box-shadow": {"version":3, "value":["none","5px 5px rgba(0, 0, 0, .6)","5px 5px 5px rgba(0, 0, 0, .6)","2px 2px 5px 1px rgba(0, 0, 0, .6) inset","0 0 5px 3px rgba(255, 0, 0, .6), 0 0 5px 6px rgba(0, 182, 0, .6), 0 0 5px 10px rgba(255, 255, 0, .6)"]},
            "box-reflect": {"version":3, "value":["below 5px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(0.5, transparent), to(white))"]},
            "box-decoration-break": {"version":3, "value":["slice","clone"]}
        }
    },
    "color": {
        "title": "颜色(Color)",
        "properties": {
            "color": {"version":1, "value":["#666"]},
            "color-interpolation": {"version":3, "value":["auto","sRGB","linearRGB"]},
            "color-interpolation-filters": {"version":3, "value":["auto","sRGB","linearRGB","inherit"]},
            "color-profile": {"version":3, "value":["auto"]},
            "color-rendering": {"version":3, "value":["auto","optimizeSpeed","optimizeQuality"]},
            "opacity": {"version":3, "value":["0.5"]},
            "rendering-intent": {"version":3, "value":["auto"]},
            "lighting-color": {"version":3, "value":[""]}
        }
    },
    "Content-for-Paged-Media":{
        "title": "Content for Paged Media",
        "properties": {
			//以下四行：http://www.w3.org/TR/css3-gcpm/
            "bookmark-label": {"version":3, "value":["attr(title,string)","content()","content(before)","string"]},
            "bookmark-level": {"version":3, "value":["none","5"]},
            "bookmark-target": {"version":3, "value":["self","url(http://www.etao.com/)","attr(href,url)"]},
            "float-offset": {"version":3, "value":["25px 50px","0 0"]},
			//以下五行：http://www.w3schools.com/cssref/default.asp
            "hyphenate-after": {"version":3, "value":["5","auto"]},
            "hyphenate-before": {"version":3, "value":["5","auto"]},
            "hyphenate-character": {"version":3, "value":["string","auto"]},
            "hyphenate-lines": {"version":3, "value":["5","auto"]},
            "hyphenate-resource": {"version":3, "value":["url('hyph_da_DK.dic')","none"]},
			//http://css.html.it/articoli/leggi/3972/css3-hyphens-controllare-la-sillabazione-dei-testi/
            "hyphens": {"version":3, "value":["auto","manual","none"]},
			//https://developer.mozilla.org/En/CSS/Image-rendering
            "image-rendering": {"version":"3", "value":["auto","inherit","optimizeSpeed","optimizeQuality","-moz-crisp-edges","-o-crisp-edges"]},
            "marks": {"version":3, "value":["crop","cross","none"]},
            "string-set": {"version":3, "value":["identifier,identifier","identifier,content-list","content-list,identifier","content-list,content-list","none"]}
        }
    },
    "Dimension": {
        "title": "尺寸(Dimension)",
        "properties": {
            "width": {"version":1, "value":["100px","100%"]},
            "max-width": {"version":2, "value":["100px","100%"]},
            "min-width": {"version":2, "value":["100px","100%"]},
            "height": {"version":1, "value":["100px","100%"]},
            "max-height": {"version":2, "value":["100px","100%"]},
            "min-height": {"version":2, "value":["100px","100%"]}
        }
    },
    "Flexible-Box": {
        "title": "弹性盒模型(Flexible Box)",
        "properties": {
            "box-align": {"version":3, "value":["start","end","center","baseline","stretch"]},
            "box-direction": {"version":3, "value":["normal","reverse"]},
            "box-flex": {"version":3, "value":["1"]},
            "box-flex-group": {"version":3, "value":["1"]},
            "box-lines": {"version":3, "value":["single","multiple"]},
            "box-ordinal-group": {"version":3, "value":["1"]},
            "box-orient": {"version":3, "value":["horizontal","vertical"]},
            "box-pack": {"version":3, "value":["start","center","end","justify"]}
        }
    },
    "Font": {
        "title": "字体(Font)",
        "properties": {
            "font": {"version":1, "value":["italic small-caps bold 18px/2 Simsun,arial,sans-serif"]},
            "font-style": {"version":1, "value":["normal","italic","oblique"]},
            "font-variant": {"version":1, "value":["small-caps"]},
            "font-weight": {"version":1, "value":["normal","bold"]},
            "font-size": {"version":1, "value":["12px","200%"]},
            "font-family": {"version":1, "value":["Georgia,Serif"]},
            "font-effect": {"version":3, "value":["none","emboss","engrave","outline","initial","inherit"]},
			//http://webdesign.about.com/od/styleproperties/p/blspfontemphasi.htm
            "font-emphasize": {"version":3, "value":["&lt;font-emphasisze-style&gt;","&lt;font-emphasize-position&gt;","accent after","initial","inherit"]},
			//http://webdesign.about.com/od/styleproperties/p/blspfontempos.htm
            "font-emphasize-position": {"version":3, "value":["before","after","initial","inherit"]},
			//http://webdesign.about.com/od/styleproperties/p/blspfontemstyle.htm
            "font-emphasize-style": {"version":3, "value":["none","accent","dot","circle","disc","initial","inherit"]},
            "font-size-adjust": {"version":3, "value":["none","0.58"]},
            "font-stretch": {"version":3, "value":["wider","narrower","ultra-condensed","extra-condensed","condensed","semi-condensed","normal","semi-expanded","expanded","extra-expanded","ultra-expanded"]}
        }
    },
    "Content": {
        "title": "内容(Content)",
        "properties": {
            "content": {"version":2, "value":["normal","none","no-close-quote","no-open-quote","close-quote","open-quote"]},
            "counter-increment": {"version":2, "value":["none","testname"]},
            "counter-reset": {"version":2, "value":["none","testname"]},
            "quotes": {"version":2, "value":["none"]},
			//http://www.w3.org/TR/css3-content/#the-crop
            "crop": {"version":3, "value":["auto","rect(top, right, bottom, left)","inset-rect(top, right, bottom, left)"]},
			//http://www.w3.org/TR/css3-content/#move-to
            "move-to": {"version":3, "value":["normal","here","&lt;identifier&gt;"]},
			//http://www.w3.org/TR/css3-content/#page-policy0
            "page-policy": {"version":3, "value":["start","first","last"]}
        }
    },
    "Grid":{
        "title": "Grid",
        "properties": {
            "grid": {"version":3, "value":["3"]},
			//http://www.w3.org/TR/2007/WD-css3-grid-20070905/#grid-columns
            "grid-columns": {"version":3, "value":["50% * * 4em","none","inherit"]},
			//http://www.w3.org/TR/2007/WD-css3-grid-20070905/#grid-rows
            "grid-rows": {"version":3, "value":["4em (0.25em 1em)","none","inherit"]}
        }
    },
    "链接(Hyperlink)":{
        "title": "链接(Hyperlink)",
        "properties": {
			//http://www.w3.org/TR/2004/WD-css3-hyperlinks-20040224/#target0
            "target": {"version":3, "value":["&lg;target-name&gt &lt;target-new&gt; &lt;target-position&gt;","new tab front"]},
			//http://www.w3.org/TR/2004/WD-css3-hyperlinks-20040224/#target-name
            "target-name": {"version":3, "value":["current","root","parent","new","modal","other string"]},
			//http://www.w3.org/TR/2004/WD-css3-hyperlinks-20040224/#target-new
            "target-new": {"version":3, "value":["window","tab","none"]},
			//http://www.w3.org/TR/2004/WD-css3-hyperlinks-20040224/#target-position
            "target-position": {"version":3, "value":["above","behind","front","back"]}
        }
    },
    "Layout": {
        "title": "布局(Layout)",
        "properties": {
            "display": {"version":"1/2/3", "value":["none","inline","block","list-item","inline-block","table","inline-table","table-caption","table-cell","table-row","table-row-group","table-column","table-column-group","table-footer-group","table-header-group","compact","run-in","ruby","ruby-base","ruby-text","ruby-base-group","ruby-text-group","box","inline-box"]},
            "float": {"version":1, "value":["none","left","right"]},
            "clear": {"version":1, "value":["none","left","right","both"]},
            "visibility": {"version":2, "value":["visible","hidden","collapse"]},
            "clip": {"version":2, "value":["auto","rect(auto 50px 20px auto)","rect(auto,50px,20px,auto)"]},
            "clip-path": {"version":3, "value":["url(#clip1)"], "desc":"SVG Attribute"},
			//http://technet.microsoft.com/zh-cn/library/hh773193
            "clip-rule": {"version":3, "value":["nonzero","evenodd","inherit"], "desc":"SVG Attribute"},
            "overflow": {"version":2, "value":["visible","hidden","scroll","auto"]},
            "overflow-style": {"version":3, "value":["visible","hidden","scroll","auto"]},
            "overflow-x": {"version":3, "value":["visible","hidden","scroll","auto"]},
            "overflow-y": {"version":3, "value":["visible","hidden","scroll","auto"]},
            "rotation": {"version":3, "value":["180deg"]},
            "rotation-point": {"version":3, "value":["50% 50%"]}
        }
    },
    "Linebox":{
        "title": "Linebox",
        "properties": {
			//http://www.cssportal.com/css-properties/alignment-adjust.htm
            "alignment-adjust": {"version":3, "value":["auto","baseline","before-edge","text-before-edge","middle","central","after-edge","text-after-edge","ideographic","alphabetic","hanging","mathematical","50%","80px"]},
			//http://www.cssportal.com/css-properties/alignment-baseline.htm
            "alignment-baseline": {"version":3, "value":["baseline","use-script","before-edge","text-before-edge","after-edge","text-after-edge","central","middle","ideographic","alphabetic","hanging","mathematical"],"baseline":"", "use-script":"", "before-edge":"", "text-before-edge":"", "after-edge":"", "text-after-edge":"", "central":"", "middle":"", "ideographic":"", "alphabetic":"", "hanging":"", "mathematica":""},
			//http://www.cssportal.com/css-properties/baseline-shift.htm
            "baseline-shift": {"version":3, "value":["baseline","sub","super","50%","80px"]},
			//http://msdn.microsoft.com/zh-cn/library/windows/apps/ff972256
            "dominant-baseline": {"version":3, "value":["auto","use-script","no-change","reset-size","ideographic","alphabetic","hanging","mathematical","central","middle","text-after-edge","text-before-edge","inherit"]},
			//http://www.cssportal.com/css-properties/drop-initial-after-adjust.htm
            "drop-initial-after-adjust": {"version":3, "value":["central","middle","after-edge","text-after-edge","ideographic","alphabetical","mathematical","50%","80px"]},
			//http://www.cssportal.com/css-properties/drop-initial-after-align.htm
            "drop-initial-after-align": {"version":3, "value":["&lt;alignment-baseline&gt;"]},
			//http://www.cssportal.com/css-properties/drop-initial-before-adjust.htm
            "drop-initial-before-adjust": {"version":3, "value":["before-edge","text-before-edge","central","middle","hanging","mathematical","50%","80px"]},
			//http://www.cssportal.com/css-properties/drop-initial-before-align.htm
            "drop-initial-before-align": {"version":3, "value":["caps-height","&lt;alignment-baseline&gt;"]},
			//http://www.cssportal.com/css-properties/drop-initial-size.htm
            "drop-initial-size": {"version":3, "value":["auto","50","50px","5%"]},
			//http://www.cssportal.com/css-properties/drop-initial-value.htm
            "drop-initial-value": {"version":3, "value":["initial","50"]},
			//http://www.cssportal.com/css-properties/inline-box-align.htm
            "inline-box-align": {"version":3, "value":["initial","last","50"]},
			//http://www.cssportal.com/css-properties/line-stacking.htm
            "line-stacking": {"version":3, "value":["&lt;line-stacking-strategy&gt;","&lt;line-stacking-ruby&gt;","&lt;line-stacking-shift&gt;"]},
			//http://www.cssportal.com/css-properties/line-stacking-ruby.htm
            "line-stacking-ruby": {"version":3, "value":["exclude-ruby","include-ruby"]},
			//http://www.cssportal.com/css-properties/line-stacking-shift.htm
            "line-stacking-shift": {"version":3, "value":["consider-shifts","disregard-shifts"]},
			//http://www.cssportal.com/css-properties/line-stacking-strategy.htm
            "line-stacking-strategy": {"version":3, "value":["inline-line-height","block-line-height","max-height","grid-height"]},
			//http://www.cssportal.com/css-properties/text-height.htm
            "text-height": {"version":3, "value":["auto","text-size","font-size","max-size"]}
        }
    },
    "List": {
        "title": "列表(List)",
        "properties": {
            "list-style": {"version":1, "value":["upper-alpha outside none"]},
            "list-style-image": {"version":1, "value":["none"]},
            "list-style-position": {"version":1, "value":["outside","inside"]},
            "list-style-type": {"version":1, "value":["disc","circle","square","decimal","lower-roman","upper-roman","lower-alpha","upper-alpha","none","armenian","cjk-ideographic","georgian","lower-greek","hebrew","hiragana","hiragana-iroha","katakana","katakana-iroha","lower-latin","upper-latin"]}
        }
    },
    "Margin": {
        "title": "外补白(Margin)",
        "properties": {
            "margin": {"version":1, "value":["10px","5px 10px","5px 10px 15px","5px 10px 15px 20px"]},
            "margin-top": {"version":1, "value":["10px"]},
            "margin-right": {"version":1, "value":["10px"]},
            "margin-bottom": {"version":1, "value":["10px"]},
            "margin-left": {"version":1, "value":["10px"]}
        }
    },
    "Marquee": {
        "title": "滚动(Marquee)",
        "properties": {
			//http://www.cssportal.com/css-properties/marquee-direction.htm
            "marquee-direction": {"version":3, "value":["forward","reverse"]},
			//http://www.cssportal.com/css-properties/marquee-play-count.htm
            "marquee-play-count": {"version":3, "value":["non-negative-integer","infinite"]},
			//http://www.cssportal.com/css-properties/marquee-speed.htm
            "marquee-speed": {"version":3, "value":["slow","normal","fast"]},
			//http://www.cssportal.com/css-properties/marquee-style.htm
            "marquee-style": {"version":3, "value":["scroll","slide","alternate"]}
        }
    },
    "Media-queries": {
        "title": "媒介查询(Media-queries)",
        "Media queries": {
			"negation": {"version":3, "value":["not print", "(not width:1px)"]},
			"width": {"version":3, "value":["(width)", "(min-width:1px)", "(max-width: 1000000px)"]},
			"height": {"version":3, "value":["(height)", "(min-height:1px)", "(max-height: 1000000px)"]},
            "device-width": {"version":3, "value":["(device-width)", "(min-device-width:1px)", "(max-device-width:1000000px)"]},
            "device-height": {"version":3, "value":["(device-height)", "(min-device-height:1px)", "(max-device-height:1000000px)"]},
            "orientation": {"version":3, "value":["(orientation:portrait), (orientation:landscape)"]},
            "aspect-ratio": {"version":3, "value":["(aspect-ratio)", "(min-aspect-ratio:1/1000000)", "(min-aspect-ratio:1 / 1000000)", "(max-aspect-ratio: 1000000/1)"]},
            "device-aspect-ratio": {"version":3, "value":["(device-aspect-ratio)", "(min-device-aspect-ratio:1/1000000)", "(min-device-aspect-ratio:1 / 1000000)", "(max-device-aspect-ratio:1000000/1)"]},
            "color": {"version":3, "value":["(color)", "(min-color: 0)", "(max-color: 100)"]},
            "color-index": {"version":3, "value":["all, (color-index)", "(min-color-index: 0)", "(max-color-index: 1000000)"]},
            "monochrome": {"version":3, "value":["all, (monochrome)","(min-monochrome: 0)", "(max-monochrome: 10000)"]},
            "resolution": {"version":3, "value":["(resolution)", "(min-resolution: 1dpi)", "(max-resolution: 1000000dpi)", "(max-resolution: 1000000dpcm)"]}, 
            "scan": {"version":3, "value":["not tv, (scan: progressive)", "not tv, (scan: interlace)"]},
            "grid": {"version":3, "value":["all, (grid)", "(grid: 0), (grid: 1)"]}
        }
    },
    "Multi-column": {
        "title": "多栏(Multi-column)",
        "properties": {
            "columns": {"version":3, "value":["200px 3"]},
            "column-width": {"version":3, "value":["auto","200px"]},
            "column-count": {"version":3, "value":["3"]},
            "column-gap": {"version":3, "value":["normal","40px"]},
            "column-rule": {"version":3, "value":["10px solid #090"]},
            "column-rule-color": {"version":3, "value":["#090"]},
            "column-rule-style": {"version":3, "value":["none","hidden","dotted","dashed","solid","double","groove","ridge","inset","outset"]},
            "column-span": {"version":3, "value":["none","all"]},
            "column-rule-width": {"version":3, "value":["10px"]},
            "column-fill": {"version":3, "value":["auto","balance"]},
            "column-break-before": {"version":3, "value":["auto","always","avoid","left","right","page","column","avoid-page","avoid-column"]},
            "column-break-after": {"version":3, "value":["auto","always","avoid","left","right","page","column","avoid-page","avoid-column"]},
            "column-break-inside": {"version":3, "value":["auto","avoid","avoid-page","avoid-column"]},
            "column-axis":{"version":3, "value":["auto"]}
        }
    },
    "Padding": {
        "title": "内补白(Padding)",
        "properties": {
            "padding": {"version":1, "value":["10px","5px 10px","5px 10px 15px","5px 10px 15px 20px"]},
            "padding-top": {"version":1, "value":["10px"]},
            "padding-right": {"version":1, "value":["10px"]},
            "padding-bottom": {"version":1, "value":["10px"]},
            "padding-left": {"version":1, "value":["10px"]}
        }
    },
    "Paged-Media":{
        "title": "Paged Media",
        "properties": {
			//http://www.cssportal.com/css-properties/fit.htm
            "fit": {"version":3, "value":["fill","hidden","meet","slice"]},
			//http://www.cssportal.com/css-properties/fit-position.htm
            "fit-position": {"version":3, "value":["50% 50%","50px 50px","auto","center","top center","top left","top right","bottom left","bottom center","bottom right","center top","left top","right top","center bottom","left bottom","right bottom"]},
			//http://www.cssportal.com/css-properties/image-orientation.htm
            "image-orientation": {"version":3, "value":["auto","90deg"]},
			//http://www.cssportal.com/css-properties/image-resolution.htm
            "image-resolution": {"version":3, "value":["normal","auto","300dpi"]},
			//http://www.cssportal.com/css-properties/page.htm
            "page": {"version":3, "value":["inherit","50"]},
			//http://www.cssportal.com/css-properties/size.htm
            "size": {"version":3, "value":["50px 50px","auto","page-size","portrait","landscape"]}
        }
    },
    "Positioning": {
        "title": "定位(Positioning)",
        "properties": {
            "position": {"version":2, "value":["static","relative","absolute","fixed"]},
            "z-index": {"version":2, "value":["auto","9","-9"]},
            "top": {"version":2, "value":["9px"]},
            "right": {"version":2, "value":["9px"]},
            "bottom": {"version":2, "value":["9px"]},
            "left": {"version":2, "value":["9px"]}
        }
    },
    "Printing": {
        "title": "打印(Printing)",
        "properties": {
			////http://www.cssportal.com/css-properties/orphans.htm
            "orphans": {"version":2, "value":["inherit","50"]},
			//http://www.cssportal.com/css-properties/page-break-before.htm
            "page-break-before": {"version":2, "value":["auto","always","avoid","left","right","inherit"]},
            "page-break-after": {"version":2, "value":["auto","always","avoid","left","right"]},
            "page-break-inside": {"version":2, "value":["auto","avoid"]},
			//http://www.cssportal.com/css-properties/widows.htm
            "widows": {"version":2, "value":["50","inherit"]}
        }
    },
    "Ruby":{
        "title": "Ruby",
        "properties": {
			//http://www.cssportal.com/css-properties/ruby-align.htm
            "ruby-align": {"version":3, "value":["auto","start","left","end","right","center","distribute-letter","distribute-space","line-edge"]},
			//http://www.cssportal.com/css-properties/ruby-overhang.htm
            "ruby-overhang": {"version":3, "value":["auto","start","end","none"]},
			//http://www.cssportal.com/css-properties/ruby-position.htm
            "ruby-position": {"version":3, "value":["before","after","right"]},
			//http://www.cssportal.com/css-properties/ruby-span.htm
            "ruby-span": {"version":3, "value":["attr(rbspan)","none"]}
        }
    },
    "Speech":{
        "title": "语音(Speech)",
        "properties": {
			//http://www.cssportal.com/css-properties/mark.htm
            "mark": {"version":3, "value":["&lt;mark-before&gt; &lt;mark-after&gt;"]},
			//http://www.cssportal.com/css-properties/mark-after.htm
            "mark-after": {"version":3, "value":["end"]},
			//http://www.cssportal.com/css-properties/mark-before.htm
            "mark-before": {"version":3, "value":["start"]},
            "mark-offset": {"version":3, "value":["auto","50px"]},
			//http://www.cssportal.com/css-properties/phonemes.htm
            "phonemes": {"version":3, "value":["t\0252 m\0251 to\028a"]},
			//http://www.cssportal.com/css-properties/rest.htm
            "rest": {"version":3, "value":["inherit","&lt;rest-after&gt;","&lt;reset-before&gt;"]},
			//http://www.cssportal.com/css-properties/rest-after.htm
            "rest-after": {"version":3, "value":["3s","none","x-weak","weak","medium","strong","x-strong","inherit"]},
			//http://www.cssportal.com/css-properties/rest-before.htm
            "rest-before": {"version":3, "value":["3s","none","x-weak","weak","medium","strong","x-strong","inherit"]},
			//http://www.cssportal.com/css-properties/voice-balance.htm
            "voice-balance": {"version":3, "value":["50","left","center","right","leftwards","rightwards","inherit"]},
			//http://www.cssportal.com/css-properties/voice-duration.htm
            "voice-duration": {"version":3, "value":["3s","250ms"]},
			//http://www.cssportal.com/css-properties/voice-family.htm
            "voice-family": {"version":2, "value":["Male","Female","Child","inherit"]},
			//http://www.cssportal.com/css-properties/voice-pitch.htm
            "voice-pitch": {"version":3, "value":["50","50%","x-low","low","high","x-high","inherit"]},
			//http://www.cssportal.com/css-properties/voice-pitch-range.htm
            "voice-pitch-range": {"version":3, "value":["50","50%","x-low","low","high","x-high","inherit"]},
			//http://www.cssportal.com/css-properties/voice-rate.htm
            "voice-rate": {"version":3, "value":["50%","x-slow","slow","fast","x-fast","medium","inherit"]},
			//http://www.cssportal.com/css-properties/voice-stress.htm
            "voice-stress": {"version":3, "value":["strong","moderate","none","reduced","inherit"]},
			//http://www.cssportal.com/css-properties/voice-volume.htm
            "voice-volume": {"version":3, "value":["50","50%","silent","x-soft","soft","medium","loud","x-loud","inherit"]},
			//http://www.cssportal.com/css-properties/volume.htm
            "volume": {"version":2, "value":["50","50%","silent","x-soft","soft","medium","loud","x-loud","inherit"]}
        }
    },
    "Table": {
        "title": "表格(Table)",
        "properties": {
            "table-layout": {"version":2, "value":["auto","fixed"]},
            "border-collapse": {"version":2, "value":["separate","collapse"]},
            "border-spacing": {"version":"2", "value":["10px 20px"]},
            "caption-side": {"version":2, "value":["top","right","bottom","left"]},
            "empty-cells": {"version":2, "value":["hide","show"]}
        }
    },
    "Text": {
        "title": "文本(Text)",
        "properties": {
            "text-indent": {"version":1, "value":["2em"]},
            "text-overflow": {"version":"3", "value":["clip","ellipsis"]},
            "direction": {"version":2, "value":["ltr","rtl"]},
            "letter-spacing": {"version":1, "value":["normal","2px"]},
            "line-height": {"version":1, "value":["200%"]},
            "text-align": {"version":1, "value":["center","left","right"]},
            "text-decoration": {"version":"1/3", "value":["none", "overline","line-through","underline","blink","#f00 dotted underline"]},
            "text-decoration-line": {"version":3, "value":["overline","line-through","underline","none"]},
            "text-decoration-color": {"version":3, "value":["#f00"]},
            "text-decoration-style": {"version":3, "value":["solid","double","dotted","dashed","wavy"]},
            "text-transform": {"version":1, "value":["uppercase","capitalize","lowercase"]},
            "vertical-align": {"version":1, "value":["baseline","sub","super","top","text-top","middle","bottom","text-bottom"]},
            "unicode-bidi": {"version":2, "value":["normal","embed","bidi-override"]},
            "white-space": {"version":1, "value":["nowrap","normal"]},
            "word-spacing": {"version":1, "value":["normal","10px"]},
            "word-break": {"version":3, "value":["normal","break-all","hyphenate"]},
            "word-wrap": {"version":3, "value":["normal","break-word"]},
            "hanging-punctuation": {"version":3, "value":["first","last","none","allow-end","force-end"]},
            "punctuation-trim": {"version":3, "value":["none","start","end","allow-end","adjacent"]},
            "text-justify": {"version":3, "value":["auto","inter-word","inter-ideograph","inter-cluster","distribute","kashida","trim"]},
            "tab-size": {"version":3, "value":["8","4"]},
			//http://www.cssportal.com/css-properties/text-align-last.htm
            "text-align-last": {"version":3, "value":["start","left","end","right","center","justify"]},
            "text-outline": {"version":3, "value":["2px 2px #f00"]},
            "text-shadow": {"version":3, "value":["none","1px 1px rgba(0,0,0,.3)","1px 1px 0 rgba(255,255,255,1),1px 1px 2px rgba(0,85,0,.8)"]},
            "text-wrap": {"version":3, "value":["normal","none","unrestricted","suppress"]},
            "text-stroke": {"version":3, "value":["1px #f00"]},
            "text-stroke-width": {"version":3, "value":["1px"]},
            "text-stroke-color": {"version":3, "value":["#f00"]},
			//http://technet.microsoft.com/zh-cn/library/hh453683
            "text-anchor": {"version":3, "value":["start","middle","end","inherit"]},
			//http://www.cssportal.com/css-properties/text-emphasis.htm
            "text-emphasis": {"version":3, "value":["none","accent","dot","cicle","disk","before","after"]},
			//http://www.cssportal.com/css-properties/text-replace.htm
            "text-replace": {"version":3, "value":["none","string"]},
            "text-line-through": {"version":3, "value":["&lt;text-line-through-color&gt; &lt;text-line-through-mode&gt; &lt;text-through-style&gt;"]},
            "text-line-through-color": {"version":3, "value":["#ccc"]},
            "text-line-through-mode": {"version":3, "value":[""]},
            "text-line-through-style": {"version":3, "value":[""]},
            "text-line-through-width": {"version":3, "value":["5px"]},
            "text-overline": {"version":3, "value":[""]},
            "text-overline-color": {"version":3, "value":["#ccc"]},
            "text-overline-mode": {"version":3, "value":[""]},
            "text-overline-style": {"version":3, "value":[""]},
            "text-overline-width": {"version":3, "value":["5px"]},
            "text-rendering": {"version":3, "value":[""]},
            "text-fill-color": {"version":3, "value":["transparent","#f00"]},
            "text-underline": {"version":3, "value":[""]},
            "text-underline-color": {"version":3, "value":["#ccc"]},
            "text-underline-mode": {"version":3, "value":[""]},
            "text-underline-style": {"version":3, "value":[""]},
            "text-underline-width": {"version":3, "value":["5px"]}
        }
    },
    "Transform": {
        "title": "2D/3D变形(2D/3D Transform)",
        "properties": {
            "transform": {"version":3, "value":["none","matrix(0,1,1,1,10,10)","translate(5%,10px)","translate(20px)","translateX(20px)","rotate(-15deg)","scale(.8)","skew(-5deg)","skew(-5deg,-5deg)"]},
            "transform-origin": {"version":3, "value":["20% 50%","left center"]},
            "transform-style": {"version":3, "value":["preserve-3d","flat"]},
            "perspective": {"version":3, "value":["500","none"]},
            "perspective-origin": {"version":3, "value":["10% 10%","none"]},
            "backface-visibility": {"version":3, "value":["hidden","visible"]}
        }
    },
    "Transition": {
        "title": "过渡(Transition)",
        "properties": {
            "transition": {"version":3, "value":["border-color .5s ease-in .1s"]},
            "transition-property": {"version":3, "value":["all","border-color"]},
            "transition-duration": {"version":3, "value":[".5s"]},
            "transition-timing-function": {"version":3, "value":["linear","ease","ease-in","ease-out","ease-in-out"]},
            "transition-delay": {"version":3, "value":[".1s"]},
            "transition-play-state": {"version":3, "value":["running","paused"]},
            "transition-fill-mode": {"version":3, "value":["none","forwards","backwards","both"]}
        }
    },
    "UserInterface": {
        "title": "用户界面(UserInterface)",
        "properties": {
            "appearance": {"version":3, "value":["normal","icon","window","button","menu","field"]},
			//http://www.cssportal.com/css-properties/icon.htm
            "icon": {"version":3, "value":["auto","url(imgicon.png)","inherit"]},
            "outline": {"version":2, "value":["2px solid #f00"]},
            "outline-color": {"version":2, "value":["#f00"]},
            "outline-style": {"version":2, "value":["none","dotted","dashed","solid","double","groove","ridge","inset","outset"]},
            "outline-width": {"version":2, "value":["2px","thin","medium","thick"]},
            "outline-offset": {"version":3, "value":["4px"]},
            "nav-index": {"version":3, "value":["auto","1"]},
            "nav-up": {"version":3, "value":["#b1"]},
            "nav-right": {"version":3, "value":["#b1"]},
            "nav-down": {"version":3, "value":["#b1"]},
            "nav-left": {"version":3, "value":["#b1"]},
            "cursor": {"version":2, "value":["auto","default","none","context-menu","help","pointer","progress","wait","cell","crosshair","text","vertical-text","alias","copy","move","no-drop","not-allowed","e-resize","n-resize","ne-resize","nw-resize","s-resize","se-resize","sw-resize","w-resize","ew-resize","ns-resize","nesw-resize","nwse-resize","col-resize","row-resize","all-scroll"]},
            "zoom": {"version":3, "value":["1","5","200%"]},
            "box-sizing": {"version":3, "value":["content-box","border-box"]},
            "resize": {"version":3, "value":["none","both","horizontal","vertical"]},
            "ime-mode": {"version":3, "value":["auto","normal","active","inactive","disabled"]}
        }
    },
    "onlyIE":{
        "title": "OnlyIE",
        "properties": {
            "filter": {"version":1, "value":["alpha(opacity=50)"]},
            "scrollbar-3dlight-color": {"version":1, "value":["threedlightshadow","#f00"]},
            "scrollbar-darkshadow-color": {"version":1, "value":["threeddarkshadow","#f00"]},
            "scrollbar-highlight-color": {"version":1, "value":["#f00"]},
            "scrollbar-shadow-color": {"version":1, "value":["#f00"]},
            "scrollbar-arrow-color": {"version":1, "value":["#f00"]},
            "scrollbar-face-color": {"version":1, "value":["#f00"]},
            "scrollbar-track-color": {"version":1, "value":["#f00"]},
            "scrollbar-base-color": {"version":1, "value":["#f00"]},
            "behavior": {"version":1, "value":["url(fly.htc)"]}
        }
    },
    "others":{
        "title": "others",
        "properties": {
			//http://www.cssportal.com/css-properties/binding.htm
            "binding": {"version":3, "value":["none","url(triangles.xml#rightangle)"]},
			//http://www.cssportal.com/css-properties/cue.htm
            "cue": {"version":2, "value":["none","url('quack.wav')","inherit"]},
			//http://www.cssportal.com/css-properties/cue-after.htm
            "cue-after": {"version":2, "value":["none","url('woof.wav')","inherit"]},
			//http://www.cssportal.com/css-properties/cue-before.htm
            "cue-before": {"version":2, "value":["none","url('quack.wav')","inherit"]},
            "enable-background": {"version":"3", "value":["new 0 0 596 842"]},
			//http://www.cssportal.com/css-properties/elevation.htm
            "elevation": {"version":2, "value":["90deg","below","level","above","higher","lower","inherit"]},
			//http://technet.microsoft.com/zh-cn/library/hh453678
            "flood-color": {"version":"3", "value":["currentColor","#ccc","inherit"]},
			//http://de.wikibooks.org/wiki/SVG/_Grafiken_formatieren#F.C3.BCll-Opazit.C3.A4t.2C_fill-opacity
            "flood-opacity": {"version":"3", "value":["0.5"]},
			//http://de.wikibooks.org/wiki/SVG/_Grafiken_formatieren#F.C3.BCllung.2C_fill
            "fill": {"version":"3", "value":["none","currentColor","inherit"]},
            "fill-opacity": {"version":"3", "value":["0.5"]},
			//http://de.wikibooks.org/wiki/SVG/_Grafiken_formatieren#F.C3.BCllregel.2C_fill-rule
            "fill-rule": {"version":"3", "value":["nonzero","evenodd"]},
			//http://msdn.microsoft.com/zh-cn/ff972260
            "glyph-orientation-horizontal": {"version":"3", "value":["90deg","inherit"]},
			//http://msdn.microsoft.com/zh-cn/ff972261
            "glyph-orientation-vertical": {"version":"3", "value":["auto","90deg","inherit"]},
            "marker": {"version":"3", "value":[""]},
            "marker-mid": {"version":"3", "value":[""]},
            "marker-end": {"version":"3", "value":[""]},
            "marker-start": {"version":"3", "value":[""]},
            "mask": {"version":"3", "value":["gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), to(rgba(0,0,0,0)))", "linear-gradient(left, #45B5DA, #0382AD)"]},
            "pointer-events": {"version":"3", "value":["auto","none","visiblePainted","visibleFill","visibleStroke","visible","painted","fill","stroke","all","inherit"]},
			//http://www.cssportal.com/css-properties/pause.htm
            "pause": {"version":2, "value":["250ms 300ms","50% 50%","inherit"]},
			//http://www.cssportal.com/css-properties/pause-after.htm
            "pause-after": {"version":2, "value":["50ms","50%","inherit"]},
			//http://www.cssportal.com/css-properties/pause-before.htm
            "pause-before": {"version":2, "value":["50ms","50%","inherit"]},
			//http://www.cssportal.com/css-properties/pitch.htm
            "pitch": {"version":2, "value":["50Hz","x-low","low","medium","high","x-high","inherit"]},
			//http://www.cssportal.com/css-properties/pitch-range.htm
            "pitch-range": {"version":2, "value":["50","inherit"]},
			//http://www.cssportal.com/css-properties/play-during.htm
            "play-during": {"version":2, "value":["none","auto","url(music.wav)","mix","repeat","inherit"]},
			//http://www.cssportal.com/css-properties/presentation-level.htm
            "presentation-level": {"version":3, "value":["50","same","increment"]},
			//http://www.cssportal.com/css-properties/richness.htm
            "richness": {"version":2, "value":["50","inherit"]},
            "shape-rendering": {"version":"3", "value":[""]},
			//http://www.cssportal.com/css-properties/speak.htm
            "speak": {"version":2, "value":["none","normal","spell-out","inherit"]},
			//http://www.cssportal.com/css-properties/speak-header.htm
            "speak-header": {"version":2, "value":["once","always","inherit"]},
			//http://www.cssportal.com/css-properties/speak-numeral.htm
            "speak-numeral": {"version":2, "value":["digits","continuous","inherit"]},
			//http://www.cssportal.com/css-properties/speak-punctuation.htm
            "speak-punctuation": {"version":2, "value":["code","none","inherit"]},
			//http://www.cssportal.com/css-properties/speech-rate.htm
            "speech-rate": {"version":2, "value":["50","x-slow","slow","medium","fast","x-fast","faster","slower","inherit"]},
			//http://www.cssportal.com/css-properties/stress.htm
            "stress": {"version":2, "value":["50","inherit"]},
            "src": {"version":"3", "value":["http://www.etao.com/"]},
            "stop-color": {"version":"3", "value":["#ccc"]},
            "stop-opacity": {"version":"3", "value":["0.5"]},
            "stroke": {"version":"3", "value":["5px black"]},
			//http://de.wikibooks.org/wiki/SVG/_Grafiken_formatieren#Strichmuster.2C_stroke-dasharray
            "stroke-dasharray": {"version":"3", "value":["none","inherit"]},
			//http://de.wikibooks.org/wiki/SVG/_Grafiken_formatieren#Strichmusterversatz.2C_stroke-dashoffset
            "stroke-dashoffset": {"version":"3", "value":["10px"]},
			//http://de.wikibooks.org/wiki/SVG/_Grafiken_formatieren#Strichenden.2C_stroke-linecap
            "stroke-linecap": {"version":"3", "value":["inherit","square","round","butt"]},
			//http://de.wikibooks.org/wiki/SVG/_Grafiken_formatieren#Strichecken.2C_stroke-linejoin
            "stroke-linejoin": {"version":"3", "value":["inherit","miter","round","bevel"]},
			//http://de.wikibooks.org/wiki/SVG/_Grafiken_formatieren#Strich-Gehrungsbegrenzung.2C_stroke-miterlimit
            "stroke-miterlimit": {"version":"3", "value":["1"]},
			//http://de.wikibooks.org/wiki/SVG/_Grafiken_formatieren#Strich-Opazit.C3.A4t.2C_stroke-opacity
            "stroke-opacity": {"version":"3", "value":["0.5"]},
			//http://de.wikibooks.org/wiki/SVG/_Grafiken_formatieren#Strichst.C3.A4rken.2C_stroke-width
            "stroke-width": {"version":"3", "value":["5px"]},
            "unicode-range": {"version":"3", "value":["U+0-10FFFF"]},
			//http://de.wikibooks.org/wiki/SVG/_Grafiken_formatieren#Vektoreffekt.2C_vector-effect
            "vertor-effect": {"version":"3", "value":["inherit","none","non-scaling-stroke"]},
			//http://www.cssportal.com/css-properties/white-space-collapse.htm
            "white-space-collapse": {"version":3, "value":["preserve","collapse","preserve-breaks","discard"]},
            "windows": {"version":2, "value":[""]},
			//http://wenku.baidu.com/view/7b28e84d852458fb770b56fa.html
            "writing-mode": {"version":"3", "value":["tb-rl","lr-tb"]}
        }
    }
};
