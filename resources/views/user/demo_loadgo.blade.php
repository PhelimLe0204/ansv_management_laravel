<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="franverona">
    <meta name="description" content="Javascript plugin for using your own images as a progress bar">
    <meta name="keywords" content="loadgo jquery plugin progress bar javascript html5 web development">

    <title>LoadGo - Your own images as a progress bar</title>

    <link rel="stylesheet" type="text/css" href="user/js/loadgo/bootstrap.min.css">

    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <style>
      h4 {
        font-weight: normal;
        line-height: 1.5;
      }
    </style>

  </head>
  <body>

    <div class="container" style="padding-top:20px;padding-bottom:60px;background: #fff;">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h2 style="border-bottom: 1px solid #ddd;padding-bottom: 10px;">LoadGo - jQuery Examples</h2>
          <ul style="margin-top: 20px">
            <li><h4><a href="http://franverona.com/loadgo">Official Site</a></h4></li>
            <li><h4><a href="http://github.com/franverona/loadgo">Github</a></h4></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <div id="examples">
          <h3>Example #1: default</h3>

          <h4>
            Image logo with default properties.
          </h4>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-6 col-md-offset-3">
              <h4>
                <strong>jQuery</strong>
              </h4>
              <pre class="language-javascript">
$('#disney').loadgo();</pre>
            </div>
          </div>
          <div class="row" style="margin-top:10px;">
            <div class="col-sm-4 col-sm-offset-4">
              <img id="disney" src="user/images/logo/big_logo-removebg-preview.png" alt="Disney Logo" class="img-responsive logo" style="margin: 0 auto;" />
            </div>
          </div>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-12 text-center">
              <div id="demo-progress-2" style="margin-bottom:10px;font-size:16px;opacity:0;font-weight:bold;">0 %</div>
              <div id="demo-msg-2">
                <button class="btn btn-primary" onclick="playDemo('disney', 2, disneyInterval);">
                  Start
                </button>
              </div>
            </div>
          </div>

          <h3>Example #2: opacity, no transition animation and background color</h3>

          <h4>
            Image logo with opacity set to <code>0.2</code>, without width transition when changing progress and background set to <code>#01AEF0</code>
          </h4>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-6 col-md-offset-3">
              <h4>
                <strong>jQuery</strong>
              </h4>
              <pre class="language-javascript">
$('#superman').loadgo({
  'opacity': 0.2,
  'animated': false,
  'bgcolor': '#01AEF0'
});</pre>
            </div>
          </div>
          <div class="row" style="margin-top:10px;">
            <div class="col-sm-4 col-sm-offset-4">
              <img id="superman" src="../logos/superman.png" alt="Disney Logo" class="img-responsive logo" style="margin: 0 auto;" />
            </div>
          </div>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-12 text-center">
              <div id="demo-progress-3" style="margin-bottom:10px;font-size:16px;opacity:0;font-weight:bold;">0 %</div>
              <div id="demo-msg-3">
                <button class="btn btn-primary" onclick="playDemo('superman', 3, supermanInterval);">
                  Start
                </button>
              </div>
            </div>
          </div>

          <h3>Example #3: image overlay</h3>

          <h4>
            Image logo is the original (in this case, Batman's logo with yellow background) and overlay image is the one with some filter, or other effect pretty similar to the original image logo (in this case, Batman's logo with white background).
          </h4>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-6 col-md-offset-3">
              <h4>
                <strong>jQuery</strong>
              </h4>
              <pre class="language-javascript">
$('#batman').loadgo({
  'opacity': 1,
  'image': 'batman-overlay.png'
});</pre>
            </div>
          </div>
          <div class="row" style="margin-top:10px;">
            <div class="col-sm-4 col-sm-offset-4">
              <img id="batman" src="../logos/batman.png" alt="Batman Logo" class="img-responsive logo" style="margin: 0 auto;" />
            </div>
          </div>
          <div class="row" style="margin-top:10px;">
            <div class="col-md-12 text-center">
              <div id="demo-progress-4" style="margin-bottom:10px;font-size:16px;opacity:0;font-weight:bold;">0 %</div>
              <div id="demo-msg-4">
                <button class="btn btn-primary" onclick="playDemo('batman', 4, batmanInterval);">
                  Start
                </button>
              </div>
            </div>
          </div>

          <h3>Example #4: playing with directions</h3>

            <h4>
              Loading animation can be set from: left to right (<code>lt</code>), right to left (<code>rl</code>), bottom to top (<code>bt</code>) or top to bottom (<code>tb</code>).
            </h4>
            <div class="row" style="margin-top:20px;">
              <div class="col-md-6" style="margin-bottom:20px;">
                <pre class="col-md-12 language-javascript">
// Left to Right - jQuery
$('#jurassiclr').loadgo({
  'direction': 'lr'
});
</pre>
                <div class="col-sm-12">
                  <img id="jurassiclr" src="../logos/jurassic.png" alt="Jurassic Park Logo" class="img-responsive logo" style="margin: 0 auto;" />
                </div>
                <div class="col-sm-12 text-center">
                  <div id="demo-progress-5" style="margin-bottom:10px;font-size:16px;opacity:0;font-weight:bold;">0 %</div>
                  <div id="demo-msg-5">
                    <button class="btn btn-primary" onclick="playDemo('jurassiclr', 5, jurassicIntervalLR);">
                      Start
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-6" style="margin-bottom:20px;">
                <pre class="col-md-12 language-javascript">
// Right to Left - jQuery
$('#jurassicrl').loadgo({
  'direction': 'rl'
});
</pre>
                <div class="col-sm-12">
                  <img id="jurassicrl" src="../logos/jurassic.png" alt="Jurassic Park Logo" class="img-responsive logo" style="margin: 0 auto;" />
                </div>
                <div class="col-sm-12 text-center">
                  <div id="demo-progress-6" style="margin-bottom:10px;font-size:16px;opacity:0;font-weight:bold;">0 %</div>
                  <div id="demo-msg-6">
                    <button class="btn btn-primary" onclick="playDemo('jurassicrl', 6, jurassicIntervalRL);">
                      Start
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="margin-top:20px;">
              <div class="col-md-6" style="margin-bottom:20px;">
                <pre class="col-md-12 language-javascript">
// Bottom to Top - jQuery
$('#jurassicbt').loadgo({
  'direction': 'bt'
});
</pre>
                <div class="col-sm-12">
                  <img id="jurassicbt" src="../logos/jurassic.png" alt="Jurassic Park Logo" class="img-responsive logo" style="margin: 0 auto;" />
                </div>
                <div class="col-sm-12 text-center">
                  <div id="demo-progress-7" style="margin-bottom:10px;font-size:16px;opacity:0;font-weight:bold;">0 %</div>
                  <div id="demo-msg-7">
                    <button class="btn btn-primary" onclick="playDemo('jurassicbt', 7, jurassicIntervalBT);">
                      Start
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-6" style="margin-bottom:20px;">
                <pre class="col-md-12 language-javascript">
// Top to Bottom - jQuery
$('#jurassictb').loadgo({
  'direction': 'tb'
});
</pre>
                <div class="col-sm-12">
                  <img id="jurassictb" src="../logos/jurassic.png" alt="Jurassic Park Logo" class="img-responsive logo" style="margin: 0 auto;" />
                </div>
                <div class="col-sm-12 text-center">
                  <div id="demo-progress-8" style="margin-bottom:10px;font-size:16px;opacity:0;font-weight:bold;">0 %</div>
                  <div id="demo-msg-8">
                    <button class="btn btn-primary" onclick="playDemo('jurassictb', 8, jurassicIntervalTB);">
                      Start
                    </button>
                  </div>
                </div>
              </div>
            </div>

          <h3>Example #5: filters</h3>

          <h4>
            CSS3 image filters applied for progress instead of an overlay. Filters can be: <code>sepia</code>, <code>blur</code>, <code>invert</code>, <code>hue-rotate</code>, <code>opacity</code> or <code>gayscale</code>.
          </h4>
          <div class="row" style="margin-top:20px;">
            <div class="col-md-6" style="margin-bottom:20px;">
              <pre class="col-md-12 language-javascript">
// Sepia - jQuery
$('#spidermanSepia').loadgo({
  'filter': 'sepia'
});
</pre>
              <div class="col-sm-12"  style="margin-top:30px">
                <img id="spidermanSepia" src="../logos/spiderman.png" alt="spiderman Logo" class="img-responsive logo" style="margin: 0 auto;" />
              </div>
              <div class="col-sm-12 text-center" style="margin-top:10px">
                <div id="demo-progress-9" style="margin-bottom:10px;font-size:16px;opacity:0;font-weight:bold;">0 %</div>
                <div id="demo-msg-9">
                  <button class="btn btn-primary" onclick="playDemo('spidermanSepia', 9, spidermanSepiaInterval);">
                    Start
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-6" style="margin-bottom:20px;">
              <pre class="col-md-12 language-javascript">
// Blur - jQuery
$('#spidermanBlur').loadgo({
  'filter': 'blur'
});
</pre>
              <div class="col-sm-12"  style="margin-top:30px">
                <img id="spidermanBlur" src="../logos/spiderman.png" alt="spiderman Logo" class="img-responsive logo" style="margin: 0 auto;" />
              </div>
              <div class="col-sm-12 text-center" style="margin-top:10px">
                <div id="demo-progress-10" style="margin-bottom:10px;font-size:16px;opacity:0;font-weight:bold;">0 %</div>
                <div id="demo-msg-10">
                  <button class="btn btn-primary" onclick="playDemo('spidermanBlur', 10, spidermanBlurInterval);">
                    Start
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="row" style="margin-top:20px;">
            <div class="col-md-6" style="margin-bottom:20px;">
              <pre class="col-md-12 language-javascript">
// Invert - jQuery
$('#spidermanInvert').loadgo({
  'filter': 'invert'
});
</pre>
              <div class="col-sm-12"  style="margin-top:30px">
                <img id="spidermanInvert" src="../logos/spiderman.png" alt="spiderman Logo" class="img-responsive logo" style="margin: 0 auto;" />
              </div>
              <div class="col-sm-12 text-center" style="margin-top:10px">
                <div id="demo-progress-11" style="margin-bottom:10px;font-size:16px;opacity:0;font-weight:bold;">0 %</div>
                <div id="demo-msg-11">
                  <button class="btn btn-primary" onclick="playDemo('spidermanInvert', 11, spidermanInvertInterval);">
                    Start
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-6" style="margin-bottom:20px;">
              <pre class="col-md-12 language-javascript">
// Hue Rotate - jQuery
$('#spidermanHue').loadgo({
  'filter': 'hue-rotate'
});
</pre>
              <div class="col-sm-12"  style="margin-top:30px">
                <img id="spidermanHue" src="../logos/spiderman.png" alt="spiderman Logo" class="img-responsive logo" style="margin: 0 auto;" />
              </div>
              <div class="col-sm-12 text-center" style="margin-top:10px">
                <div id="demo-progress-12" style="margin-bottom:10px;font-size:16px;opacity:0;font-weight:bold;">0 %</div>
                <div id="demo-msg-12">
                  <button class="btn btn-primary" onclick="playDemo('spidermanHue', 12, spidermanHueInterval);">
                    Start
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="row" style="margin-top:20px;">
            <div class="col-md-6" style="margin-bottom:20px;">
              <pre class="col-md-12 language-javascript">
// Opacity - jQuery
$('#spidermanOpacity').loadgo({
  'filter': 'opacity'
});
</pre>
              <div class="col-sm-12"  style="margin-top:30px">
                <img id="spidermanOpacity" src="../logos/spiderman.png" alt="spiderman Logo" class="img-responsive logo" style="margin: 0 auto;" />
              </div>
              <div class="col-sm-12 text-center" style="margin-top:10px">
                <div id="demo-progress-13" style="margin-bottom:10px;font-size:16px;opacity:0;font-weight:bold;">0 %</div>
                <div id="demo-msg-13">
                  <button class="btn btn-primary" onclick="playDemo('spidermanOpacity', 13, spidermanOpacityInterval);">
                    Start
                  </button>
                </div>
              </div>
            </div>
            <div class="col-md-6" style="margin-bottom:20px;">
              <pre class="col-md-12 language-javascript">
// Grayscale - jQuery
$('#spidermanGrayscale').loadgo({
  'filter': 'grayscale'
});
</pre>
              <div class="col-sm-12"  style="margin-top:30px">
                <img id="spidermanGrayscale" src="../logos/spiderman.png" alt="spiderman Logo" class="img-responsive logo" style="margin: 0 auto;" />
              </div>
              <div class="col-sm-12 text-center" style="margin-top:10px">
                <div id="demo-progress-14" style="margin-bottom:10px;font-size:16px;opacity:0;font-weight:bold;">0 %</div>
                <div id="demo-msg-14">
                  <button class="btn btn-primary" onclick="playDemo('spidermanGrayscale', 14, spidermanGrayscaleInterval);">
                    Start
                  </button>
                </div>
              </div>
            </div>
          </div>

        </div>
        <hr/>
      </div>
    </div>

  </body>

  <script type="text/javascript" src="user/js/loadgo/jquery-1.11.2.min.js"></script>

  <script type="text/javascript" src="user/js/loadgo/loadgo.js"></script>
  <script type="text/javascript" src="user/js/loadgo/main.js"></script>

</html>
