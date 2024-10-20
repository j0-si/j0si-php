<html prefix="og: https://ogp.me/ns#">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <style>.caveat{font-family:"Caveat",cursive;font-optical-sizing:auto;font-weight:600;font-style:normal}nav{top:0;position:fixed;text-align:center;backdrop-filter:blur(8px);z-index:10000;width:100vw;background-color:#000000b0;box-shadow:#000 0 0 10px}.nx{font-size:27px;text-decoration:none}.lg{color:#fff}.ctl{font-size:12vh}body{animation:bg 15s linear infinite}@keyframes bg{0%{background-color:#111222}50%{background-color:#222333}100%{background-color:#111222}}.contentn{display:inline-block}.urlbtn{--bs-btn-color:#ffffff;--bs-btn-hover-bg:#555666;--bs-btn-bg:#222333}body{color:white;}</style>
        <title>j0.si</title>
        <meta property="og:title" content="j0.si">
        <meta property="og:url" content="https://j0.si">
        <meta name="description" content="Link shortener by j0.si">
        <meta name="og:description" content="Link shortener by j0.si">
        <meta name="application-name" content="j0.si">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    </head>
    <body class="text-center position-relative">
        <nav class="nav justify-content-center">
            <div class="nv">
                <h3 class="caveat"><a href="./" class="nx lg">j0.si</a></h3>
        </nav>
        
            <div class="position-relative top-50 translte-middle mx-auto text-center contentn" id="m">
            <h1 class="caveat lg ctl">j0.si</h1>
            <div id="a"></div>
            <?php
                ini_set('display_errors', 0);
                function generateRandomString($length) {
                    $characters = '123456789qwertyuiopasdfghjklzxcvbnm-_';
                    $charactersLength = strlen($characters);
                    $randomString = '';
                    for ($i = 0; $i < $length; $i++) {
                        $randomString .= $characters[random_int(0, $charactersLength - 1)];
                    }
                    return $randomString;
                }

                function cuq($url) {
                    $parsed_url = parse_url($url);
                    
                    $encoded_query = '';
                    if (isset($parsed_url['query'])) {
                        $query_parts = explode('&', $parsed_url['query']);
                        $encoded_parts = [];
                        foreach ($query_parts as $part) {
                            list($key, $value) = explode('=', $part, 2);
                            $encoded_parts[] = rawurlencode($key) . '=' . rawurlencode($value);
                        }
                        $encoded_query = implode('&', $encoded_parts);
                    }
                    
                    $encoded_url = $parsed_url['scheme'] . '://' . $parsed_url['host'];
                    if (isset($parsed_url['path'])) {
                        $encoded_url .= $parsed_url['path'];
                    }
                    if (!empty($encoded_query)) {
                        $encoded_url .= '?' . $encoded_query;
                    }
                    
                    return $encoded_url;
                }

                $sl = ""; $p = ""; $sl = "";
                $h = "";
                $h = $_POST["path"];
                if (isset($_POST["snd"]) && $_POST["link"] != "") {
                    $g = 1;
                    $p = $h;
                    if ($h == "") {
                        $g = 0;
                        $p = generateRandomString(random_int(4, 5));
                    }
                    $j = 0;
                    if (strlen($p) < 3 && $h != "") {
                        echo("<div class=\"alert alert-danger\" role=\"alert\">Custom pathname must be at least 3 characters long.</div>");
                    } else {
                        $u = $_POST['link'];
                        $e = cuq($u);
                        $pu = parse_url($u);
                        if ($pu['scheme'] == "http" || $pu['scheme'] == "https") {
                            if (str_contains($p, '/') || str_contains($p, '.')) {
                                echo "<div class=\"alert alert-danger\" role=\"alert\">URL or pathname contains characters that cannot be used.</div>";
                            } else {
                                do {
                                    $sl = $p . "/index.html";
                                    if (file_exists($sl) == false) {
                                            mkdir("./" . $p);
                                            touch("./" . $sl);
                                            file_put_contents("./$p/index.html", '<html prefix="og: https://ogp.me/ns#"><head><meta charset="utf-8"><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet"><title>[5s] j0.si</title><meta property="og:title" content="'.$e.'"><meta property="og:image" content="/assets/logo/jli.png"><meta property="og:url" content="'.$e.'"><meta name="description" content="Link shortener by j0.si"><meta http-equiv="refresh" content="5;'.$e.'"><style>body{background-color:#121212;color:#fff;text-align:center;font-family:\'Noto Sans\',\'Open Sans\',Caveat,\'Segoe UI\',Arial,Helvetica,sans-serif;}h6{font-weight:normal;font-size:2vw;}div{top:25vh;position:relative;}.l{font-family:Consolas,Inconsolata,monospace;}a{font-size:5vw;color:#2d76fd}</style></head><body><div><h6>You\'ll be redirected to:</h6><h1 class="l"><a href="'.$e.'">'.htmlspecialchars($u).'</a></h1><p style="font-size:3.2vw;">in <span style="font-size:5vw;" id="c">5</span> second<span id="s">s</span></p></div><script>i=5;const t=setInterval(()=>{i--;document.getElementById(\'c\').textContent=i;document.title=`[${i}s] j0.si`;const y=document.getElementById(\'s\');if(i===1){y.textContent="";}else{y.textContent="s";}if(i<=0){clearInterval(t);location.href="'.$e.'";}},1000);</script></body></html>');
                                            if (file_exists($sl) != false) {
                                                $l = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . "/" . $p;
                                                echo "<script>location.search = \"?q=" . $p . "\";</script>";
                                                exit;
                                            } else {
                                                echo "<div class=\"alert alert-danger\" role=\"alert\">URL or pathname contains characters that cannot be used.</div>";
                                            }
                                            $g = 0;
                                    } else {
                                        if ($g) {
                                            echo("<div class=\"alert alert-danger\" role=\"alert\">Sorry, the pathname \"" . htmlspecialchars($p) . "\" is already used.<br>Please try another pathname.</div>");
                                            if ($h != "") {
                                                $g = 0;
                                            }
                                        } else {
                                            $j++;
                                            $p = generateRandomString(random_int(4, 5));
                                            if ($j > 200) {
                                                echo("<div class=\"alert alert-danger\" role=\"alert\">Something went wrong.<br>Please try again.</div>");
                                                $g = 0;
                                            }
                                        }
                                    }
                                } while ($g);
                            }
                        } else {
                            echo("<div class=\"alert alert-danger\" role=\"alert\">Protocol not supported.<br>Supported protocols: http, https</div>");
                        }
                    }
                }
                
            ?>
            <div class="py-2"></div>
            <div class="input-group mb-3">
            <form action="" method="post" class="input-group justify-content-center">
                    <div class="input-group">
                        <input class="form-control" type="url" placeholder="Enter a long url" style="width:50vw" name="link" id="l" minlength=1 required>
                        <button class="btn btn-outline-secondary urlbtn" type="submit" id="sb" name="snd">Shorten long url</button>
                    </div>
                    <div>
                        <div class="btn-group mt-2">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            options
                            </button>
                            <div class="mb-3">
                                <ul class="dropdown-menu position-absolute" style="padding: 5px; width: 48vw; background-color: #333444; border-radius:8px">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon3" style="background-color:#222333;color:#fff;user-select:none;">https://j0.si/</span>
                                        <input class="form-control" type="text" placeholder="Custom pathname (Optional, min: 3)" name="path" value="" minlength=3 id="ph">
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <p style="margin-top:-16px" id="msg"></p>
        </div>
        <script>const m=document.getElementById("m");let h=0,v=0,x=0,y=0;document.addEventListener("mousemove",e=>{h=e.clientX-window.innerWidth/2,v=e.clientY-window.innerHeight/2}),setInterval(()=>{x+=(h/32-x)/16,y+=(v/32-y)/16,m.style.transform=`translate(${x}px,${y-.15*window.innerHeight}px)`},16);const u=new URLSearchParams(location.search);if(u.has("q")){let e=`<div class="alert alert-success" role="alert">Success! <a target="_blank" href="${location.origin}/${u.get("q")}">${location.origin}/${u.get("q")}</a></div>`,t=document.getElementById("a");t.innerHTML=e,history.replaceState(null,"",`${location.origin}${location.pathname}`)}const o=document.getElementById('msg');const b=document.getElementById('ph');b.addEventListener('invalid',()=>{o.textContent="Custom pathname must be at least 3 characters long.";})</script>
    </body>
</html>