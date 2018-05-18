<!doctype html>
<html amp lang="en">
  <head>
    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <title><?php the_title(); ?></title>
    <link rel="canonical" href="http://example.ampproject.org/article-metadata.html">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <?php wp_head(); ?>
    <!-- TODO: ADD JSON LD METADATA HERE -->
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <style amp-custom>
        /** START NORMALIZE **/
        html{line-height:1.15;-webkit-text-size-adjust:100%}
        body{margin:0}
        h1{font-size:2em;margin:0.67em 0}
        hr{box-sizing:content-box;height:0;overflow:visible}
        pre{font-family:monospace,monospace;font-size:1em}
        a{background-color:transparent}
        abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}
        b,strong{font-weight:bolder}
        code,kbd,samp{font-family:monospace,monospace;font-size:1em}
        small{font-size:80%}
        sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}
        sub{bottom:-0.25em}
        sup{top:-0.5em}
        img{border-style:none}
        button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;line-height:1.15;margin:0}
        button,input{overflow:visible}
        button,select{text-transform:none}
        button,[type="button"],[type="reset"],[type="submit"]{-webkit-appearance:button}
        button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner{border-style:none;padding:0}
        button:-moz-focusring,[type="button"]:-moz-focusring,[type="reset"]:-moz-focusring,[type="submit"]:-moz-focusring{outline:1px dotted ButtonText}
        fieldset{padding:0.35em 0.75em 0.625em}
        legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}
        progress{vertical-align:baseline}
        textarea{overflow:auto}
        [type="checkbox"],[type="radio"]{box-sizing:border-box;padding:0}
        [type="number"]::-webkit-inner-spin-button,[type="number"]::-webkit-outer-spin-button{height:auto}
        [type="search"]{-webkit-appearance:textfield;outline-offset:-2px}
        [type="search"]::-webkit-search-decoration{-webkit-appearance:none}
        ::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}
        details{display:block}
        summary{display:list-item}
        template{display:none}
        [hidden]{display:none}
        /** END NORMALIZE **/

        /** BEGIN VARIABLES **/
        body {
            --color-primary: #1E88E5;
            --color-primary-dark: #0D47A1;
            --color-background: #F1F1F8;
            --color-card: #FDFDFD;
            --color-shadow: #ADADAD;
            --shadow-property: 0px 2px 12px var(--color-shadow);
            --color-text: #263238;
            --color-placeholder: #B0BEC5;
        }
        /** END VARIABLES **/

        @import url('https://fonts.googleapis.com/css?family=Lora|Roboto');

        amp-img {
            background: var(--color-placeholder);
        }

        html, body, body+*, header h2 {
            margin: 0px;
            padding: 0px;
        }

        body {
            background: var(--color-background);
            font-family: 'Roboto', sans-serif;
        }

        small {
            color: var(--color-placeholder);
        }

        .shadowed {
            box-shadow: var(--shadow-property);
        }

        .card {
            background: var(--color-card);
            color: var(--color-text);
            margin: 4px;
            padding: 8px;
            border-radius: 4px;
            min-height: 20vh;
        }

        h2 {
            font-family: 'Lora', serif;
            margin-bottom: 8px;
            font-weight: lighter;
        }

        h2 a {
            color: var(--color-primary);
            text-decoration: none;
        }

    </style>  
  </head>
  <body>