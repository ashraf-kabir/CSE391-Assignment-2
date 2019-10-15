<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment 2 exam</title>
    <link href="css/a2reset.css" rel="stylesheet">
    <link href="css/a2style1.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <link rel="stylesheet" href="css/a2style2.css">

    <script src="vendor/jquery/jquery.min.js"></script>

    <style>
        #redDiv {
            background-color: red;
            color: white;
            border: 15px solid black;
            font-family: Arial;
        }

        #greenDiv {
            background-color: green;
            color: black;
            border: 15px solid red;
            font-family: Georgia;
        }

        #blueDiv {
            background-color: blue;
            color: chartreuse;
            border: 15px solid crimson;
            font-family: monospace;
        }

        #yellowDiv {
            background-color: yellow;
            color: fuchsia;
            border: 15px solid green;
            font-family: Garamond;
        }

    </style>
</head>
<body>

    <div class="container">

        <div class="col-md-12">
            <h1>Part 1.1</h1>
            <header class="transparent" style="padding-top: 30px;">
                <h2>Random Quote Generator</h2>
            </header>
            <br>
            <div id="abc">

                <div class="quote-box" id="border">

                    <div class="quote-area">

                    </div>

                    <div class="author-area">
                        <form action="" name="form02">
                            <br>
                            <label for="tarea01"></label>
                            <textarea name="tarea01" id="tarea01" cols="80" rows="10"></textarea>
                            <br><br>
                            <input class="btn-primary" type="button" id="2" value="Clear it" onclick="clear();">
                            <input class="btn-primary" type="button" id="3" value="min sum avg" onclick="minsumavg()">
                            <input class="btn-primary" type="button" id="4" value="kg to lb" onclick="kgtolb(value)">
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-12" style="margin-top: 10px;">

            <button class="btn btn-primary" onclick="randomColor()">
                Random style
            </button>

            <button class="btn btn-primary" onclick="black()">
                Black
            </button>

            <button class="btn btn-primary" onclick="red()">
                Red
            </button>

            <button class="btn btn-primary" onclick="blue()">
                Blue
            </button>

        </div>
        <br><br><br><br><br>

        <div class="col-md-12" style="margin-top: 10px;" id="xyz">
            Min <span id="span1"></span><br>
            Sum <span id="span2"></span><br>
            Avg <span id="span3"></span><br>
            Kg to lb <span id="span4"></span><br>
        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br>
       
        <script>
            function randomColor() {
                var color = '#';
                var letters = ['000000','FF0000','00FF00','0000FF','FFFF00','00FFFF','FF00FF','C0C0C0']; //Set your colors here
                color += letters[Math.floor(Math.random() * letters.length)];
                document.getElementById('abc').style.background = color;
            }
        </script>

        <script>
            function black() {
                var color = '#';
                var letters = ['000000'];
                color += letters[Math.floor(Math.random() * letters.length)];
                document.getElementById('abc').style.background = color;
            }

            function red() {
                var color = '#';
                var letters = ['FF0000'];
                color += letters[Math.floor(Math.random() * letters.length)];
                document.getElementById('abc').style.background = color;
            }

            function blue() {
                var color = '#';
                var letters = ['0000FF'];
                color += letters[Math.floor(Math.random() * letters.length)];
                document.getElementById('abc').style.background = color;
            }
        </script>

        <script>
            function minsumavg2() {
                var values = document.getElementById('tarea01').value.split(', ');
                var result;
                document.getElementById("span1").innerHTML = values;

            }
        </script>

        <script>
            function minsumavg() {
                var values = document.getElementById('tarea01').value.split(', ');
                var sum = values.reduce(function (a, b) {
                    return parseInt(a) + parseInt(b);
                });

                document.querySelector('#span1').innerHTML = values.min();
                document.querySelector('#span2').innerHTML = sum;
                document.querySelector('#span3').innerHTML = sum / values.length;
            }

            Array.prototype.min = function () {
                return Math.min.apply(null, this);
            };
        </script>

        <script>
            function clear() {
                val = "";
                document.getElementById("xyz").innerHTML = val;
            }
        </script>

        <script>
            function kgtolb() {
                x = document.getElementById("tarea01").value;
                x = x.split("\n");

                r = "";

                for (var i=0; i<x.length; i++) {
                    p = x[i].split(",");;
                    for (g=0; g<p.length; g++) {
                        t = parseInt(p[g])*2.206;
                        r = r+t+"; "+"\n";
                    }
                    document.getElementById("span4").innerHTML=r;
                }
            }
        </script>

        <script src="js/a2part1p1.js"></script>
        <script src="js/a2exam.js"></script>

        <div class="col-md-9" style="margin-top: 50px;">
            <h1>Part 1.2</h1>

            <div class="converter-body">

                <h1 class="converter-title">Weight Converter</h1>

                <input type="text" placeholder="Input" id="input">
                <span>=</span>
                <input type="text" placeholder="Result" id="result">


                <select id="inputType">
                    <option value="pound">Pound</option>
                    <option value="kilogram">Kilogram</option>
                </select>

                <select id="resultType">
                    <option value="pound">Pound</option>
                    <option value="kilogram">Kilogram</option>
                </select>
                <br>
                <span id="result2" style="margin-left: 25px; margin-top: 40px; padding-top: 30px; font-weight: bold;">&nbsp;</span>

            </div>
            <script src="js/a2part1p2.js"></script>

        </div>
        <br><br><br>

        <div class="col-md-9" style="margin-top: 50px;">
            <div style="text-align: center;">
                <h1>Part 2</h1>
                <h2>Max, Min, Sum, Avg</h2>
            </div>
            <br>
            <table width="100%" border="0" align="center"
                   style="font-size: 19px; font-family: Arial; text-align: right;background-color: crimson; padding: 20px; margin-bottom: 30px;">
                <tr>
                    <td>&nbsp;</td>
                    <td></td>
                </tr>
                <tr>
                    <td width="13%" style="padding-right: 5px;">Input Field:</td>
                    <td width="29%" style="text-align: left;"><input
                                style="text-align: left; padding-left: 5px; padding-right: 5px;" name="box1" type="text"
                                onkeyup="calculate();"
                                id="box1"/></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td></td>
                </tr>
                <tr>
                    <td style="padding-right: 5px;">Max:</td>
                    <td style="text-align: left; color: white;">
                        <div id="max"></div>
                    </td>
                </tr>
                <tr>
                    <td style="padding-right: 5px;">Min:</td>
                    <td style="text-align: left; color: white;">
                        <div id="min"></div>
                    </td>
                </tr>
                <tr>
                    <td style="padding-right: 5px;">Sum:</td>
                    <td style="text-align: left; color: white;">
                        <div id="sum"></div>
                    </td>
                </tr>
                <tr>
                    <td style="padding-right: 5px;">Average:</td>
                    <td style="text-align: left; color: white;">
                        <div id="avg"></div>
                    </td>
                </tr>
                <tr>
                    <td style="padding-right: 5px;">Reverse Order:</td>
                    <td style="text-align: left; color: white;">
                        <div id="reverse"></div>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td></td>
                </tr>
            </table>
            <br><br><br><br><br>

            <script>
                function calculate() {
                    var values = document.getElementById('box1').value.split(', ');
                    var sum = values.reduce(function (a, b) {
                        return parseInt(a) + parseInt(b);
                    });
                    document.querySelector('#max').innerHTML = values.max();
                    document.querySelector('#min').innerHTML = values.min();
                    document.querySelector('#sum').innerHTML = sum;
                    document.querySelector('#avg').innerHTML = sum / values.length;
                    document.querySelector('#reverse').innerHTML = values.reverse().join(', ');
                }

                Array.prototype.max = function () {
                    return Math.max.apply(null, this);
                };

                Array.prototype.min = function () {
                    return Math.min.apply(null, this);
                };
            </script>
        </div>

        <div class="col-md-12">
            <!-- Uppercase lowercase -->
            <script type="text/javascript">
                function toggle(button) {
                    if (document.getElementById("1").value == "uppercase") {
                        document.getElementById("myP").style.textTransform = "uppercase";
                        document.getElementById("1").value = "lowercase";
                    } else if (document.getElementById("1").value == "lowercase") {
                        document.getElementById("myP").style.textTransform = "lowercase";
                        document.getElementById("1").value = "uppercase";
                    }
                }
            </script>

            <!-- Clear All -->
            <script>
                function clearContents() {
                    document.getElementById("tarea01").value = "";
                }
            </script>

            <!-- sort alphabetically & numerically -->
            <script type="text/javascript">
                function sortit(a, b) {
                    return (a - b)
                }

                function sortvalues(param) {
                    var inputvalues = document.form03.tarea.value.split(" "); // store input as array of words
                    if (param == 0) { //if sort alphabetically
                        inputvalues.sort()
                    } else { //else if sort numerically
                        inputvalues.sort(sortit)
                    }
                    document.form03.tarea.value = '';
                    var i;
                    for (i = 0; i < inputvalues.length - 1; i++) {
                        document.form03.tarea.value = document.form03.tarea.value + inputvalues[i] + " ";
                    }
                    document.form03.tarea.value += inputvalues[inputvalues.length - 1];
                }
            </script>
            <script>
                function alphabetSort() {
                    var inp = document.getElementById("myP");
                    var arr = inp.value.split('\n');
                    arr.sort();
                    var arr2 = arr.filter(arr => arr.length > 0);
                    var ans = arr2.join("\n");
                    document.form03.tarea.value = ans;
                }
            </script>

            <!-- reverse -->
            <script>
                function revWords(str) {
                    words = str.split(" ");
                    j = words.length - 1;
                    backWords = new Array();
                    for (i = 0; i < words.length; i++) {
                        backWords[j] = words[i];
                        j--;
                    }
                    document.form03.tarea.value = backWords.join(" ");
                }
            </script>
            <script>
                function reverseLines(something) {
                    //var textsplit = something.value;
                    var arr = something.value.split('\n');
                    var numberOfParts = arr.length;
                    var revStr = "";
                    var c;
                    for (c = numberOfParts - 1; c >= 0; c--) {
                        revStr = revStr + arr[c];
                        if (c > 0) {
                            revStr = revStr + "\n";
                        }
                    }
                    something.value = revStr;
                }
            </script>

            <!-- strip blank, remove empty line -->
            <script>
                jQuery(function ($) {
                    $("#six").on("click", function () {
                        var avalue = $('#myP').val();
                        var newVal = avalue.replace(/^\s*[\r\n]/gm, '');

                        //var finalResults = newVal.replace("\n", "");
                        $('#myP').val(newVal);
                        //var myText = $('#myP').val();
                        //var remove_space = myText.replace(/ /g,'');
                        //$('#myP').val(remove_space);
                    });
                })
            </script>

            <!-- add line numbers -->
            <script>
                function lineNum() {
                    var e = document.getElementById('myP').value;
                    var arr = e.split("\n");
                    var p = "";
                    var i, j;
                    for (i = 0; i < arr.length; i++) {
                        j = i + 1;
                        p = p + j + " " + arr[i] + "\n";
                    }
                    document.getElementById('myP').value = p;
                }
            </script>

            <!-- shuffle lines -->
            <script>
                function shuffleLines() {
                    var lines = $('#myP').val().split(/\n/);
                    var texts = [];
                    for (var i = 0; i < lines.length; i++) {
                        if (/\S/.test(lines[i])) {
                            texts.push($.trim(lines[i]));
                        }
                    }

                    //shuffle
                    for (let i = texts.length - 1; i > 0; i--) {
                        const j = Math.floor(Math.random() * i);
                        const temp = texts[i];
                        texts[i] = texts[j];
                        texts[j] = temp;
                    }

                    for (var i = 0; i < texts.length; i++) {
                        //alert(i + "-  " + texts[i]);
                        var x = texts[i];
                        var textarea = document.getElementById("myP");
                        textarea.value = texts.join("\n");
                    }

                }
            </script>

            <form name="form03" action="">
                <br>
                <h1>Part 03</h1>
                <label for="myP"></label>
                <textarea id="myP" rows="10" name="tarea" cols="80" maxlength="255" required></textarea><br><br>

                <input class="btn-primary" type="button" id="1" value="uppercase" onclick="toggle(this);">
                <input class="btn-primary" type="button" id="2" value="Clear all" onclick="clearContents();">
                <input class="btn-primary" type="button" id="3" value="Sort Alphabetically" onclick="alphabetSort()">
                <input class="btn-primary" type="button" id="4" value="Sort Numerically" onclick="sortvalues(1)">
                <input class="btn-primary" type="button" id="5" value="Reverse"
                       onclick="reverseLines(document.form03.tarea)">
                <input class="btn-primary" type="button" id="six" value="Strip Blank">
                <input class="btn-primary" type="button" id="seven" value="Add Line Numbers" onclick="lineNum();">
                <input class="btn-primary" type="button" id="eight" value="Shuffle" onclick="shuffleLines();">
            </form>
        </div>
        <br><br><br><br>


    </div>

</body>

</html>