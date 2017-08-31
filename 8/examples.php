<?php $TITLE = "Nerdly Examples" ?>
<?php $BODYCLASS = "examples" ?>
<?php include(dirname(_FILE_) . '/atop.php'); ?>
<?php include(dirname(_FILE_) . '/astrap.php'); ?>
<?php include(dirname(_FILE_) . '/anavbar.php'); ?>

<div class="imagea exp">
  <img src="i/ehed.jpg" alt="Eschers Orange Heads.">
  </div>
  <div class="noddy box">
    <p>This has a dotted border in its default colour.</p>
    <code>
      <pre>
      background-color: #a4fb6e;
      width: 350px;
      height: auto;
      padding: 10px;
      border: dotted;
      margin: 50px;
    </pre>
    </code>


</div>


<div class="imageb box">
  <img src="i/ehed.jpg" alt="Eschers Orange Heads.">
  <div class="noddy">
    <p>The higher I set the border radius the rounder the corners become.  This has a 50px radius border. Nice.</p>
    <code><pre>
      background-color: #40e0d0;
      width: 350px;
      height: auto;
      padding: 20px;
      border: ridge;
      border-color: red;
      border-radius: 50px;
      margin: 50px;
    </pre>
    </code>
    </div>
</div>

<div class="imagec box">
<img src="i/ehed.jpg" alt="Eschers Orange Heads.">
<div class="noddy">

</div>
<p>There is no background colour.  This has a 1000px border radius. Cut out and keep.</p>
<code>
  <pre>
background-color: none;
width: 350px;
height: auto;
padding: 10px;
border: dashed;
border-color: blue;
border-radius: 1000px;
margin: 50px;
</pre>
</code>
</div>

<div class="imaged clearboth example">
<img src="i/ehed.jpg" alt="Eschers Orange Heads.">
<p><b>I have instructed different borders on each side.</b>
  <code>background-color: black ;
  width: 350px;
  height: auto;
  padding: 20px;
  border-color: hotpink;
  border-top-style: dashed;
  border-right-style: double;
  border-bottom-style: dotted;
  border-left-style: double;
  border-radius: 20px;
  margin: 50px;</code></p>
</div>
<div class="imagee clearboth example">
<img src="i/ehed.jpg" alt="Eschers Orange Heads.">
<p><b>A 500px radius border has been applied to the top right side only.  Pretty fuckin neat ay?.</b>
  <code>background-color: hotpink;
  width: 350px;
  height: auto;
  padding: 30px;
  border-color: #5CBC88;
  border-style: groove;
  border-top-right-radius: 500px;
  margin: 50px;</code></p>
</div>
<div class="imagef clearboth example">
<img src="i/ehed.jpg" alt="Eschers Orange Heads.">
<p><b>Now bottom right radius applied and border width thickened, exagerating the border style.</b>
  <code>background-color: #9e379f;
  width: 350px;
  height: auto;
  padding: 10px;
  border-color: #43e8d8;
  border-style: dotted;
  border-width: 20px;
  border-bottom-right-radius: 500px;
  margin: 50px;<code></p>
</div>
<div class="imageg clearboth example">
<img src="i/ehed.jpg" alt="Eschers Orange Heads.">
<p><b>Border radius applied and border width thickened, again exagerating the border style.</b>
  <code>background-color: #43e8d8;
  width: 350px;
  height: auto;
  padding: 10px;
  border-color: black;
  border-style: double;
  border-width: 20px;
  border-radius: 600px;
  margin: 50px;</code>
</p>
</div>
<div class="imageh clearboth example">
<img src="i/ehed.jpg" alt="Eschers Orange Heads.">
<p><b>10px radius border. Just rounds the outer edge.  Thicker width and padding.</b>
  <code>background-color: #40e0d0;
  width: 350px;
  height: auto;
  padding: 30px;
  border-color: red;
  border-style: double;
  border-width: 30px;
  border-radius: 10px;
  margin: 50px;</code>
</p>
</div>

<?php include(dirname(_FILE_) . '/afooter.php'); ?>
