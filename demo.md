---
layout: default
title:  "Demonstration"
menu: "menu.html"
---
This demonstration page shows how to render Twitter Boostrap elements. For each elements, you can see how to do it in "Source" tabs. These are supposed to be run into a view file.

# Content
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/)</small>

## Typography
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/typography/)</small>

### Abbreviations
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/typography/#abbreviations)</small>

<ul class="nav nav-tabs" id="content-typography-abbreviations-abbreviations_5d1614cc0be84_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-typography-abbreviations-abbreviations_5d1614cc0be84_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-typography-abbreviations-abbreviations_5d1614cc0be84_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-typography-abbreviations-abbreviations_5d1614cc0be84_result" role="tabpanel"><br/><p><abbr title="attribute">attr</abbr></p>
<p><abbr title="HyperText&#x20;Markup&#x20;Language" class="initialism">HTML</abbr></p></div>
  <div class="tab-pane" id="content-typography-abbreviations-abbreviations_5d1614cc0be84_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;First&nbsp;abbreviation<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;p&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">abbreviation</span><span style="color: #007700">(</span><span style="color: #DD0000">'attr'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attribute'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/p&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Second&nbsp;abbreviation<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;p&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">abbreviation</span><span style="color: #007700">(</span><span style="color: #DD0000">'HTML'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'HyperText&nbsp;Markup&nbsp;Language'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/p&gt;'</span><span style="color: #007700">;</span>
</span>
</code></pre></div>
</div><br/>

### Blockquotes
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/typography/#blockquotes)</small>

<ul class="nav nav-tabs" id="content-typography-blockquotes-blockquotes_5d1614cc0bed3_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-typography-blockquotes-blockquotes_5d1614cc0bed3_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-typography-blockquotes-blockquotes_5d1614cc0bed3_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-typography-blockquotes-blockquotes_5d1614cc0bed3_result" role="tabpanel"><br/><blockquote class="blockquote">
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
</blockquote></div>
  <div class="tab-pane" id="content-typography-blockquotes-blockquotes_5d1614cc0bed3_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">blockquote</span><span style="color: #007700">(</span><span style="color: #DD0000">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipiscing&nbsp;elit.&nbsp;Integer&nbsp;posuere&nbsp;erat&nbsp;a&nbsp;ante.'</span><span style="color: #007700">);</span>
</span>
</code></pre></div>
</div><br/>

#### Naming a source
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/typography/#naming-a-source)</small>

<ul class="nav nav-tabs" id="content-typography-blockquotes-naming-a-source-naming--a--source_5d1614cc0bf61_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-typography-blockquotes-naming-a-source-naming--a--source_5d1614cc0bf61_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-typography-blockquotes-naming-a-source-naming--a--source_5d1614cc0bf61_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-typography-blockquotes-naming-a-source-naming--a--source_5d1614cc0bf61_result" role="tabpanel"><br/><blockquote class="blockquote">
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote></div>
  <div class="tab-pane" id="content-typography-blockquotes-naming-a-source-naming--a--source_5d1614cc0bf61_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">blockquote</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Content<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipiscing&nbsp;elit.&nbsp;Integer&nbsp;posuere&nbsp;erat&nbsp;a&nbsp;ante.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Footer&nbsp;content<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Someone&nbsp;famous&nbsp;in&nbsp;&lt;cite&nbsp;title="Source&nbsp;Title"&gt;Source&nbsp;Title&lt;/cite&gt;'</span><span style="color: #007700">,&nbsp;array(),&nbsp;array(),&nbsp;array(),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Disable&nbsp;escaping<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">false<br /></span><span style="color: #007700">);</span>
</span>
</code></pre></div>
</div><br/>

#### Reverse layout
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/typography/#reverse-layout)</small>

<ul class="nav nav-tabs" id="content-typography-blockquotes-reverse-layout-reverse--layout_5d1614cc0bfd9_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-typography-blockquotes-reverse-layout-reverse--layout_5d1614cc0bfd9_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-typography-blockquotes-reverse-layout-reverse--layout_5d1614cc0bfd9_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-typography-blockquotes-reverse-layout-reverse--layout_5d1614cc0bfd9_result" role="tabpanel"><br/><blockquote class="blockquote-reverse&#x20;blockquote">
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote></div>
  <div class="tab-pane" id="content-typography-blockquotes-reverse-layout-reverse--layout_5d1614cc0bfd9_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">blockquote</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Content<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipiscing&nbsp;elit.&nbsp;Integer&nbsp;posuere&nbsp;erat&nbsp;a&nbsp;ante.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Footer&nbsp;content<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Someone&nbsp;famous&nbsp;in&nbsp;&lt;cite&nbsp;title="Source&nbsp;Title"&gt;Source&nbsp;Title&lt;/cite&gt;'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'blockquote-reverse'</span><span style="color: #007700">),&nbsp;array(),&nbsp;array(),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Disable&nbsp;escaping<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">false<br /></span><span style="color: #007700">);</span>
</span>
</code></pre></div>
</div><br/>

### List
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/typography/#lists)</small>

#### Unstyled
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/typography/#unstyled)</small>

<ul class="nav nav-tabs" id="content-typography-list-unstyled-unstyled_5d1614cc0c0df_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-typography-list-unstyled-unstyled_5d1614cc0c0df_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-typography-list-unstyled-unstyled_5d1614cc0c0df_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-typography-list-unstyled-unstyled_5d1614cc0c0df_result" role="tabpanel"><br/><ul class="list-unstyled">
    <li>Lorem ipsum dolor sit amet</li>
    <li>Consectetur adipiscing elit</li>
    <li>Integer molestie lorem at massa</li>
    <li>Facilisis in pretium nisl aliquet</li>
    <li>Nulla volutpat aliquam velit
        <ul class="list-unstyled">
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
            <li>Ac tristique libero volutpat at</li>
        </ul>
    </li>
    <li>Faucibus porta lacus fringilla vel</li>
    <li>Aenean sit amet erat nunc</li>
    <li>Eget porttitor lorem</li>
</ul>
</div>
  <div class="tab-pane" id="content-typography-list-unstyled-unstyled_5d1614cc0c0df_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlList</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;List&nbsp;items<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Consectetur&nbsp;adipiscing&nbsp;elit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Integer&nbsp;molestie&nbsp;lorem&nbsp;at&nbsp;massa'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Facilisis&nbsp;in&nbsp;pretium&nbsp;nisl&nbsp;aliquet'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Nulla&nbsp;volutpat&nbsp;aliquam&nbsp;velit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Phasellus&nbsp;iaculis&nbsp;neque'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Purus&nbsp;sodales&nbsp;ultricies'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Vestibulum&nbsp;laoreet&nbsp;porttitor&nbsp;sem'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Ac&nbsp;tristique&nbsp;libero&nbsp;volutpat&nbsp;at'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Faucibus&nbsp;porta&nbsp;lacus&nbsp;fringilla&nbsp;vel'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Aenean&nbsp;sit&nbsp;amet&nbsp;erat&nbsp;nunc'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Eget&nbsp;porttitor&nbsp;lorem'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Do&nbsp;not&nbsp;order&nbsp;items<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Add&nbsp;"list-unstyled"&nbsp;class<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'list-unstyled'</span><span style="color: #007700">)<br />);</span>
</span>
</code></pre></div>
</div><br/>

#### Inline
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/typography/#inline)</small>

<ul class="nav nav-tabs" id="content-typography-list-inline-inline_5d1614cc0c1cc_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-typography-list-inline-inline_5d1614cc0c1cc_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-typography-list-inline-inline_5d1614cc0c1cc_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-typography-list-inline-inline_5d1614cc0c1cc_result" role="tabpanel"><br/><ul class="list-inline">
    <li class="list-inline-item">Lorem ipsum</li>
    <li class="list-inline-item">Phasellus iaculis</li>
    <li class="list-inline-item">Nulla volutpat</li>
</ul>
</div>
  <div class="tab-pane" id="content-typography-list-inline-inline_5d1614cc0c1cc_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlList</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;List&nbsp;items<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">array(</span><span style="color: #DD0000">'Lorem&nbsp;ipsum'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Phasellus&nbsp;iaculis'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Nulla&nbsp;volutpat'</span><span style="color: #007700">,),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Do&nbsp;not&nbsp;order&nbsp;items<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Add&nbsp;"list-inline"&nbsp;class<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'list-inline'</span><span style="color: #007700">)<br />);</span>
</span>
</code></pre></div>
</div><br/>

## Figures
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/images/)</small>

### Responsive images
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/images/#responsive-images)</small>

<ul class="nav nav-tabs" id="content-figures-responsive-images-responsive--images_5d1614cc0c2ba_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-figures-responsive-images-responsive--images_5d1614cc0c2ba_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-figures-responsive-images-responsive--images_5d1614cc0c2ba_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-figures-responsive-images-responsive--images_5d1614cc0c2ba_result" role="tabpanel"><br/><img alt="Responsive&#x20;image" class="img-fluid" src="images&#x2F;demo-sample.svg"/></div>
  <div class="tab-pane" id="content-figures-responsive-images-responsive--images_5d1614cc0c2ba_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'fluid'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Responsive&nbsp;image'</span><span style="color: #007700">,));</span>
</span>
</code></pre></div>
</div><br/>

### Image thumbnails
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/images/#image-thumbnails)</small>

<ul class="nav nav-tabs" id="content-figures-image-thumbnails-image--thumbnails_5d1614cc0c35f_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-figures-image-thumbnails-image--thumbnails_5d1614cc0c35f_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-figures-image-thumbnails-image--thumbnails_5d1614cc0c35f_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-figures-image-thumbnails-image--thumbnails_5d1614cc0c35f_result" role="tabpanel"><br/><img alt="Image&#x20;thumbnail" class="img-thumbnail" src="images&#x2F;demo-sample.svg"/></div>
  <div class="tab-pane" id="content-figures-image-thumbnails-image--thumbnails_5d1614cc0c35f_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'thumbnail'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Image&nbsp;thumbnail'</span><span style="color: #007700">,));</span>
</span>
</code></pre></div>
</div><br/>

### Aligning images
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/images/#aligning-images)</small>

<ul class="nav nav-tabs" id="content-figures-aligning-images-aligning--images_5d1614cc0c45d_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-figures-aligning-images-aligning--images_5d1614cc0c45d_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-figures-aligning-images-aligning--images_5d1614cc0c45d_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-figures-aligning-images-aligning--images_5d1614cc0c45d_result" role="tabpanel"><br/><img alt="Image&#x20;aligned&#x20;left" class="float-left&#x20;rounded" src="images&#x2F;demo-sample.svg"/>
<img alt="Image&#x20;aligned&#x20;right" class="float-right&#x20;rounded" src="images&#x2F;demo-sample.svg"/>
<img alt="Image&#x20;aligned&#x20;block" class="d-block&#x20;mx-auto&#x20;rounded" src="images&#x2F;demo-sample.svg"/></div>
  <div class="tab-pane" id="content-figures-aligning-images-aligning--images_5d1614cc0c45d_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'rounded'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Image&nbsp;aligned&nbsp;left'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'float-left'</span><span style="color: #007700">))&nbsp;&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'rounded'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Image&nbsp;aligned&nbsp;right'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'float-right'</span><span style="color: #007700">))&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'rounded'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Image&nbsp;aligned&nbsp;block'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mx-auto&nbsp;d-block'</span><span style="color: #007700">));</span>
</span>
</code></pre></div>
</div><br/>

### Picture
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/images/#picture)</small>

<ul class="nav nav-tabs" id="content-figures-picture-picture_5d1614cc0c501_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-figures-picture-picture_5d1614cc0c501_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-figures-picture-picture_5d1614cc0c501_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-figures-picture-picture_5d1614cc0c501_result" role="tabpanel"><br/><picture>
    <source srcset="images&#x2F;demo-sample.svg" type="image&#x2F;svg&#x2B;xml"/>
    <img alt="Picture&#x20;image" class="img-fluid&#x20;img-thumbnail" src="images&#x2F;demo-sample.svg"/>
</picture></div>
  <div class="tab-pane" id="content-figures-picture-picture_5d1614cc0c501_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'thumbnail'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fluid'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Picture&nbsp;image'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'sources'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/svg+xml'</span><span style="color: #007700">],<br />));</span>
</span>
</code></pre></div>
</div><br/>

## Tables
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/tables/)</small>

### Examples
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/tables/#examples)</small>

#### Basic

<ul class="nav nav-tabs" id="content-tables-examples-basic-basic_5d1614cc0c5ec_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-tables-examples-basic-basic_5d1614cc0c5ec_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-tables-examples-basic-basic_5d1614cc0c5ec_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-tables-examples-basic-basic_5d1614cc0c5ec_result" role="tabpanel"><br/><table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table></div>
  <div class="tab-pane" id="content-tables-examples-basic-basic_5d1614cc0c5ec_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Larry'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />));</span>
</span>
</code></pre></div>
</div><br/>

#### Invert the colors

<ul class="nav nav-tabs" id="content-tables-examples-invert-the-colors-invert--the--colors_5d1614cc0c697_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-tables-examples-invert-the-colors-invert--the--colors_5d1614cc0c697_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-tables-examples-invert-the-colors-invert--the--colors_5d1614cc0c697_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-tables-examples-invert-the-colors-invert--the--colors_5d1614cc0c697_result" role="tabpanel"><br/><table class="table&#x20;table-inverse">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table></div>
  <div class="tab-pane" id="content-tables-examples-invert-the-colors-invert--the--colors_5d1614cc0c697_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Larry'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;),&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-inverse'</span><span style="color: #007700">)<br />);</span>
</span>
</code></pre></div>
</div><br/>

### Table head options
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/tables/#table-head-options)</small>

<ul class="nav nav-tabs" id="content-tables-table-head-options-table--head--options_5d1614cc0c805_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-tables-table-head-options-table--head--options_5d1614cc0c805_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-tables-table-head-options-table--head--options_5d1614cc0c805_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-tables-table-head-options-table--head--options_5d1614cc0c805_result" role="tabpanel"><br/><table class="table">
    <thead class="thead-inverse">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>

<table class="table">
    <thead class="thead-default">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table></div>
  <div class="tab-pane" id="content-tables-table-head-options-table--head--options_5d1614cc0c805_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;First&nbsp;table&nbsp;(head&nbsp;inversed)<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'thead-inverse'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'rows'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Larry'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />));<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Second&nbsp;table&nbsp;(head&nbsp;default)<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'thead-default'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'rows'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Larry'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />));</span>
</span>
</code></pre></div>
</div><br/>

### Striped rows
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/tables/#striped-rows)</small>

<ul class="nav nav-tabs" id="content-tables-striped-rows-striped--rows_5d1614cc0c8e0_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-tables-striped-rows-striped--rows_5d1614cc0c8e0_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-tables-striped-rows-striped--rows_5d1614cc0c8e0_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-tables-striped-rows-striped--rows_5d1614cc0c8e0_result" role="tabpanel"><br/><table class="table&#x20;table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table></div>
  <div class="tab-pane" id="content-tables-striped-rows-striped--rows_5d1614cc0c8e0_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Larry'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;),&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-striped'</span><span style="color: #007700">)<br />);</span>
</span>
</code></pre></div>
</div><br/>

### Bordered table
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/tables/#bordered-table)</small>

<ul class="nav nav-tabs" id="content-tables-bordered-table-bordered--table_5d1614cc0c98f_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-tables-bordered-table-bordered--table_5d1614cc0c98f_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-tables-bordered-table-bordered--table_5d1614cc0c98f_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-tables-bordered-table-bordered--table_5d1614cc0c98f_result" role="tabpanel"><br/><table class="table&#x20;table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table></div>
  <div class="tab-pane" id="content-tables-bordered-table-bordered--table_5d1614cc0c98f_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Larry'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;),&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-bordered'</span><span style="color: #007700">)<br />);</span>
</span>
</code></pre></div>
</div><br/>

### Borderless table
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/tables/#borderless-table)</small>

<ul class="nav nav-tabs" id="content-tables-borderless-table-borderless--table_5d1614cc0ca38_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-tables-borderless-table-borderless--table_5d1614cc0ca38_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-tables-borderless-table-borderless--table_5d1614cc0ca38_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-tables-borderless-table-borderless--table_5d1614cc0ca38_result" role="tabpanel"><br/><table class="table&#x20;table-borderless">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table></div>
  <div class="tab-pane" id="content-tables-borderless-table-borderless--table_5d1614cc0ca38_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Larry'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;),&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-borderless'</span><span style="color: #007700">)<br />);</span>
</span>
</code></pre></div>
</div><br/>

### Hoverable rows
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/tables/#hoverable-rows)</small>

<ul class="nav nav-tabs" id="content-tables-hoverable-rows-hoverable--rows_5d1614cc0cae1_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-tables-hoverable-rows-hoverable--rows_5d1614cc0cae1_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-tables-hoverable-rows-hoverable--rows_5d1614cc0cae1_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-tables-hoverable-rows-hoverable--rows_5d1614cc0cae1_result" role="tabpanel"><br/><table class="table&#x20;table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table></div>
  <div class="tab-pane" id="content-tables-hoverable-rows-hoverable--rows_5d1614cc0cae1_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Larry'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;),&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-hover'</span><span style="color: #007700">)<br />);</span>
</span>
</code></pre></div>
</div><br/>

### Small Table
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/tables/#small-table)</small>

<ul class="nav nav-tabs" id="content-tables-small-table-small--table_5d1614cc0cb85_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-tables-small-table-small--table_5d1614cc0cb85_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-tables-small-table-small--table_5d1614cc0cb85_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-tables-small-table-small--table_5d1614cc0cb85_result" role="tabpanel"><br/><table class="table&#x20;table-sm">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table></div>
  <div class="tab-pane" id="content-tables-small-table-small--table_5d1614cc0cb85_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last&nbsp;Name'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Larry'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;),&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-sm'</span><span style="color: #007700">)<br />);</span>
</span>
</code></pre></div>
</div><br/>

### Contextual classes
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/tables/#contextual-classes)</small>

<ul class="nav nav-tabs" id="content-tables-contextual-classes-contextual--classes_5d1614cc0ccfd_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-tables-contextual-classes-contextual--classes_5d1614cc0ccfd_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-tables-contextual-classes-contextual--classes_5d1614cc0ccfd_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-tables-contextual-classes-contextual--classes_5d1614cc0ccfd_result" role="tabpanel"><br/><table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Column heading</th>
            <th>Column heading</th>
            <th>Column heading</th>
        </tr>
    </thead>
    <tbody>
        <tr class="table-active">
            <th scope="row">1</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        <tr class="table-success">
            <th scope="row">3</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        <tr class="table-info">
            <th scope="row">5</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        <tr class="table-warning">
            <th scope="row">7</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        <tr>
            <th scope="row">8</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
        <tr class="table-danger">
            <th scope="row">9</th>
            <td>Column content</td>
            <td>Column content</td>
            <td>Column content</td>
        </tr>
    </tbody>
</table></div>
  <div class="tab-pane" id="content-tables-contextual-classes-contextual--classes_5d1614cc0ccfd_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;heading'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-active'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-success'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-info'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-warning'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-danger'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Column&nbsp;content'</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />));</span>
</span>
</code></pre></div>
</div><br/>

### Responsive classes
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/tables/#responsive-tables)</small>

<ul class="nav nav-tabs" id="content-tables-responsive-classes-responsive--classes_5d1614cc0cdc2_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-tables-responsive-classes-responsive--classes_5d1614cc0cdc2_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-tables-responsive-classes-responsive--classes_5d1614cc0cdc2_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-tables-responsive-classes-responsive--classes_5d1614cc0cdc2_result" role="tabpanel"><br/><table class="table&#x20;table-responsive">
    <thead>
        <tr>
            <th>#</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
            <th>Table heading</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
        </tr>
    </tbody>
</table></div>
  <div class="tab-pane" id="content-tables-responsive-classes-responsive--classes_5d1614cc0cdc2_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">(array(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;heading'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array(array(</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'th'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(</span><span style="color: #DD0000">'scope'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'row'</span><span style="color: #007700">)),&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Table&nbsp;cell'</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;),&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-responsive'</span><span style="color: #007700">));</span>
</span>
</code></pre></div>
</div><br/>

## Figures
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/content/figures/)</small>

### Basic

<ul class="nav nav-tabs" id="content-figures-basic-basic_5d1614cc0ce59_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-figures-basic-basic_5d1614cc0ce59_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-figures-basic-basic_5d1614cc0ce59_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-figures-basic-basic_5d1614cc0ce59_result" role="tabpanel"><br/><figure class="figure">
    <img alt="A&#x20;generic&#x20;square&#x20;placeholder&#x20;image&#x20;with&#x20;rounded&#x20;corners&#x20;in&#x20;a&#x20;figure." class="figure-img&#x20;img-fluid&#x20;rounded" src="images&#x2F;demo-sample.svg"/>
    <figcaption class="figure-caption">A caption for the above image.</figcaption>
</figure></div>
  <div class="tab-pane" id="content-figures-basic-basic_5d1614cc0ce59_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">figure</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'A&nbsp;caption&nbsp;for&nbsp;the&nbsp;above&nbsp;image.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;array(),<br />&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'fluid'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'rounded'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'A&nbsp;generic&nbsp;square&nbsp;placeholder&nbsp;image&nbsp;with&nbsp;rounded&nbsp;corners&nbsp;in&nbsp;a&nbsp;figure.'</span><span style="color: #007700">,)<br />);</span>
</span>
</code></pre></div>
</div><br/>

### Aligning figure's caption

<ul class="nav nav-tabs" id="content-figures-aligning-figure-s-caption-aligning--figure--s--caption_5d1614cc0ced2_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#content-figures-aligning-figure-s-caption-aligning--figure--s--caption_5d1614cc0ced2_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#content-figures-aligning-figure-s-caption-aligning--figure--s--caption_5d1614cc0ced2_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="content-figures-aligning-figure-s-caption-aligning--figure--s--caption_5d1614cc0ced2_result" role="tabpanel"><br/><figure class="figure">
    <img alt="A&#x20;generic&#x20;square&#x20;placeholder&#x20;image&#x20;with&#x20;rounded&#x20;corners&#x20;in&#x20;a&#x20;figure." class="figure-img&#x20;img-fluid&#x20;rounded" src="images&#x2F;demo-sample.svg"/>
    <figcaption class="figure-caption&#x20;text-right">A caption for the above image.</figcaption>
</figure></div>
  <div class="tab-pane" id="content-figures-aligning-figure-s-caption-aligning--figure--s--caption_5d1614cc0ced2_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">figure</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'A&nbsp;caption&nbsp;for&nbsp;the&nbsp;above&nbsp;image.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;array(),<br />&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fluid'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'rounded'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'A&nbsp;generic&nbsp;square&nbsp;placeholder&nbsp;image&nbsp;with&nbsp;rounded&nbsp;corners&nbsp;in&nbsp;a&nbsp;figure.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text-right'</span><span style="color: #007700">)<br />);</span>
</span>
</code></pre></div>
</div><br/>

# Components
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/components/)</small>

## Alerts
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/components/alerts/)</small>

### Example
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/components/alerts/#examples)</small>

<ul class="nav nav-tabs" id="components-alerts-example-example_5d1614cc0d23a_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#components-alerts-example-example_5d1614cc0d23a_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#components-alerts-example-example_5d1614cc0d23a_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="components-alerts-example-example_5d1614cc0d23a_result" role="tabpanel"><br/><div class="alert&#x20;alert-success" role="alert">
    <strong>Well done!</strong> You successfully read this important alert message.
</div>
<div class="alert&#x20;alert-info" role="alert">
    <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
</div>
<div class="alert&#x20;alert-warning" role="alert">
    <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
<div class="alert&#x20;alert-danger" role="alert">
    <strong>Oh snap!</strong> Change a few things up and try submitting again.
</div></div>
  <div class="tab-pane" id="components-alerts-example-example_5d1614cc0d23a_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Success<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alert</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;strong&gt;Well&nbsp;done!&lt;/strong&gt;&nbsp;You&nbsp;successfully&nbsp;read&nbsp;this&nbsp;important&nbsp;alert&nbsp;message.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;array(),&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Info<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alert</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;strong&gt;Heads&nbsp;up!&lt;/strong&gt;&nbsp;This&nbsp;alert&nbsp;needs&nbsp;your&nbsp;attention,&nbsp;but&nbsp;it\'s&nbsp;not&nbsp;super&nbsp;important.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;array(),&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Warning<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alert</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;strong&gt;Warning!&lt;/strong&gt;&nbsp;Better&nbsp;check&nbsp;yourself,&nbsp;you\'re&nbsp;not&nbsp;looking&nbsp;too&nbsp;good.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;array(),&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Danger<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alert</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;strong&gt;Oh&nbsp;snap!&lt;/strong&gt;&nbsp;Change&nbsp;a&nbsp;few&nbsp;things&nbsp;up&nbsp;and&nbsp;try&nbsp;submitting&nbsp;again.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;array(),&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);</span>
</span>
</code></pre></div>
</div><br/>

#### Link color
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/components/alerts/#link-color)</small>

<ul class="nav nav-tabs" id="components-alerts-example-link-color-link--color_5d1614cc0d2ef_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#components-alerts-example-link-color-link--color_5d1614cc0d2ef_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#components-alerts-example-link-color-link--color_5d1614cc0d2ef_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="components-alerts-example-link-color-link--color_5d1614cc0d2ef_result" role="tabpanel"><br/><div class="alert&#x20;alert-success" role="alert">
    <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
</div>
<div class="alert&#x20;alert-info" role="alert">
    <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
</div>
<div class="alert&#x20;alert-warning" role="alert">
    <strong>Warning!</strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good</a>.
</div>
<div class="alert&#x20;alert-danger" role="alert">
    <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
</div></div>
  <div class="tab-pane" id="components-alerts-example-link-color-link--color_5d1614cc0d2ef_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Success<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alert</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;strong&gt;Well&nbsp;done!&lt;/strong&gt;&nbsp;You&nbsp;successfully&nbsp;read&nbsp;&lt;a&nbsp;href="#"&nbsp;class="alert-link"&gt;this&nbsp;important&nbsp;alert&nbsp;message&lt;/a&gt;.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;array(),&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Info<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alert</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;strong&gt;Heads&nbsp;up!&lt;/strong&gt;&nbsp;This&nbsp;&lt;a&nbsp;href="#"&nbsp;class="alert-link"&gt;alert&nbsp;needs&nbsp;your&nbsp;attention&lt;/a&gt;,&nbsp;but&nbsp;it\'s&nbsp;not&nbsp;super&nbsp;important.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;array(),&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Warning<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alert</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;strong&gt;Warning!&lt;/strong&gt;&nbsp;Better&nbsp;check&nbsp;yourself,&nbsp;you\'re&nbsp;&lt;a&nbsp;href="#"&nbsp;class="alert-link"&gt;not&nbsp;looking&nbsp;too&nbsp;good&lt;/a&gt;.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;array(),&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Danger<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alert</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;strong&gt;Oh&nbsp;snap!&lt;/strong&gt;&nbsp;&lt;a&nbsp;href="#"&nbsp;class="alert-link"&gt;Change&nbsp;a&nbsp;few&nbsp;things&nbsp;up&lt;/a&gt;&nbsp;and&nbsp;try&nbsp;submitting&nbsp;again.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;array(),&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);</span>
</span>
</code></pre></div>
</div><br/>

#### Additional content
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/components/alerts/#additional-content)</small>

<ul class="nav nav-tabs" id="components-alerts-example-additional-content-additional--content_5d1614cc0d365_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#components-alerts-example-additional-content-additional--content_5d1614cc0d365_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#components-alerts-example-additional-content-additional--content_5d1614cc0d365_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="components-alerts-example-additional-content-additional--content_5d1614cc0d365_result" role="tabpanel"><br/><div class="alert&#x20;alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div></div>
  <div class="tab-pane" id="components-alerts-example-additional-content-additional--content_5d1614cc0d365_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Success<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alert</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;h4&nbsp;class="alert-heading"&gt;Well&nbsp;done!&lt;/h4&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;Aww&nbsp;yeah,&nbsp;you&nbsp;successfully&nbsp;read&nbsp;this&nbsp;important&nbsp;alert&nbsp;message.&nbsp;This&nbsp;example&nbsp;text&nbsp;is&nbsp;going&nbsp;to&nbsp;run&nbsp;a&nbsp;bit&nbsp;longer&nbsp;so&nbsp;that&nbsp;you&nbsp;can&nbsp;see&nbsp;how&nbsp;spacing&nbsp;within&nbsp;an&nbsp;alert&nbsp;works&nbsp;with&nbsp;this&nbsp;kind&nbsp;of&nbsp;content.&lt;/p&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&nbsp;&nbsp;&nbsp;&nbsp;&lt;p&nbsp;class="mb-0"&gt;Whenever&nbsp;you&nbsp;need&nbsp;to,&nbsp;be&nbsp;sure&nbsp;to&nbsp;use&nbsp;margin&nbsp;utilities&nbsp;to&nbsp;keep&nbsp;things&nbsp;nice&nbsp;and&nbsp;tidy.&lt;/p&gt;'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,&nbsp;array(),&nbsp;</span><span style="color: #0000BB">false<br /></span><span style="color: #007700">);</span>
</span>
</code></pre></div>
</div><br/>

#### Dismissing
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/components/alerts/#dismissing)</small>

<ul class="nav nav-tabs" id="components-alerts-example-dismissing-dismissing_5d1614cc0d3af_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#components-alerts-example-dismissing-dismissing_5d1614cc0d3af_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#components-alerts-example-dismissing-dismissing_5d1614cc0d3af_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="components-alerts-example-dismissing-dismissing_5d1614cc0d3af_result" role="tabpanel"><br/><div class="alert&#x20;alert-warning&#x20;alert-dismissible&#x20;fade&#x20;show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
</div></div>
  <div class="tab-pane" id="components-alerts-example-dismissing-dismissing_5d1614cc0d3af_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alert</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;strong&gt;Holy&nbsp;guacamole!&lt;/strong&gt;&nbsp;You&nbsp;should&nbsp;check&nbsp;in&nbsp;on&nbsp;some&nbsp;of&nbsp;those&nbsp;fields&nbsp;below.'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;array(),&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">);</span>
</span>
</code></pre></div>
</div><br/>

## Badges
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/components/badge/)</small>

### Example
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/components/badge/#example)</small>

<ul class="nav nav-tabs" id="components-badges-example-example_5d1614cc0d472_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#components-badges-example-example_5d1614cc0d472_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#components-badges-example-example_5d1614cc0d472_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="components-badges-example-example_5d1614cc0d472_result" role="tabpanel"><br/><h1>Example heading <span class="badge&#x20;badge-default">New</span></h1>
<h2>Example heading <span class="badge&#x20;badge-default">New</span></h2>
<h3>Example heading <span class="badge&#x20;badge-default">New</span></h3>
<h4>Example heading <span class="badge&#x20;badge-default">New</span></h4>
<h5>Example heading <span class="badge&#x20;badge-default">New</span></h5>
<h6>Example heading <span class="badge&#x20;badge-default">New</span></h6></div>
  <div class="tab-pane" id="components-badges-example-example_5d1614cc0d472_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;H1<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;h1&gt;Example&nbsp;heading&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'New'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/h1&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;H2<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;h2&gt;Example&nbsp;heading&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'New'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/h2&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;H3<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;h3&gt;Example&nbsp;heading&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'New'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/h3&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;H4<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;h4&gt;Example&nbsp;heading&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'New'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/h4&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;H5<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;h5&gt;Example&nbsp;heading&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'New'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/h5&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;H6<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;h6&gt;Example&nbsp;heading&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'New'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/h6&gt;'</span><span style="color: #007700">;</span>
</span>
</code></pre></div>
</div><br/>

### Contextual variations
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/components/badge/#contextual-variations)</small>

<ul class="nav nav-tabs" id="components-badges-contextual-variations-contextual--variations_5d1614cc0d509_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#components-badges-contextual-variations-contextual--variations_5d1614cc0d509_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#components-badges-contextual-variations-contextual--variations_5d1614cc0d509_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="components-badges-contextual-variations-contextual--variations_5d1614cc0d509_result" role="tabpanel"><br/><span class="badge&#x20;badge-default">Default</span>
<span class="badge&#x20;badge-primary">Primary</span>
<span class="badge&#x20;badge-success">Success</span>
<span class="badge&#x20;badge-info">Info</span>
<span class="badge&#x20;badge-warning">Warning</span>
<span class="badge&#x20;badge-danger">Danger</span></div>
  <div class="tab-pane" id="components-badges-contextual-variations-contextual--variations_5d1614cc0d509_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Default<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Default'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Primary<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Success<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Info<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Warning<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Danger<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Danger'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">);</span>
</span>
</code></pre></div>
</div><br/>

### Pill badges
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/components/badge/#pill-badges)</small>

<ul class="nav nav-tabs" id="components-badges-pill-badges-pill--badges_5d1614cc0d5a0_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#components-badges-pill-badges-pill--badges_5d1614cc0d5a0_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#components-badges-pill-badges-pill--badges_5d1614cc0d5a0_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="components-badges-pill-badges-pill--badges_5d1614cc0d5a0_result" role="tabpanel"><br/><span class="badge&#x20;badge-default&#x20;badge-pill">Default</span>
<span class="badge&#x20;badge-pill&#x20;badge-primary">Primary</span>
<span class="badge&#x20;badge-pill&#x20;badge-success">Success</span>
<span class="badge&#x20;badge-info&#x20;badge-pill">Info</span>
<span class="badge&#x20;badge-pill&#x20;badge-warning">Warning</span>
<span class="badge&#x20;badge-danger&#x20;badge-pill">Danger</span></div>
  <div class="tab-pane" id="components-badges-pill-badges-pill--badges_5d1614cc0d5a0_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Default<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Default'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'default'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pill'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Primary<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pill'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Success<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pill'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Info<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pill'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Warning<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pill'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Danger<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Danger'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pill'</span><span style="color: #007700">);</span>
</span>
</code></pre></div>
</div><br/>

### Links
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/components/badge/#links)</small>

<ul class="nav nav-tabs" id="components-badges-links-links_5d1614cc0d640_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#components-badges-links-links_5d1614cc0d640_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#components-badges-links-links_5d1614cc0d640_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="components-badges-links-links_5d1614cc0d640_result" role="tabpanel"><br/><a href="&#x23;" class="badge&#x20;badge-default">Default</a>
<a href="&#x23;" class="badge&#x20;badge-primary">Primary</a>
<a href="&#x23;" class="badge&#x20;badge-success">Success</a>
<a href="&#x23;" class="badge&#x20;badge-info">Info</a>
<a href="&#x23;" class="badge&#x20;badge-warning">Warning</a>
<a href="&#x23;" class="badge&#x20;badge-danger">Danger</a></div>
  <div class="tab-pane" id="components-badges-links-links_5d1614cc0d640_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Default<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Default'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'default'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'link'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'href'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">))&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Primary<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'link'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'href'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">))&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Success<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'link'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'href'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">))&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Info<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'link'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'href'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">))&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Warning<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'link'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'href'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">))&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Danger<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'Danger'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'link'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'href'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">));</span>
</span>
</code></pre></div>
</div><br/>

## Breadcrumb
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/components/breadcrumb/)</small>

### Example
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/components/breadcrumb/#example)</small>

<ul class="nav nav-tabs" id="components-breadcrumb-example-example_5d1614cc0d76a_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#components-breadcrumb-example-example_5d1614cc0d76a_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#components-breadcrumb-example-example_5d1614cc0d76a_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="components-breadcrumb-example-example_5d1614cc0d76a_result" role="tabpanel"><br/><nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="&#x2F;">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Library</li>
    </ol>
</nav>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="&#x2F;">Home</a></li>
        <li class="breadcrumb-item"><a href="&#x2F;library">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
</div>
  <div class="tab-pane" id="components-breadcrumb-example-example_5d1614cc0d76a_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oNavigationHelper&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">navigation</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$oNavigationHelper</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setContainer</span><span style="color: #007700">(new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Navigation</span><span style="color: #007700">\</span><span style="color: #0000BB">Navigation</span><span style="color: #007700">([<br />[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Home'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'active'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,],<br />]));<br />echo&nbsp;</span><span style="color: #0000BB">$oNavigationHelper</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">breadcrumbs</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">setMinDepth</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$oNavigationHelper</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setContainer</span><span style="color: #007700">(new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Navigation</span><span style="color: #007700">\</span><span style="color: #0000BB">Navigation</span><span style="color: #007700">([<br />[<br /></span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Home'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pages'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Library'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'/library'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'active'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">],<br />],<br />],<br />]));<br />echo&nbsp;</span><span style="color: #0000BB">$oNavigationHelper</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">breadcrumbs</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">setMinDepth</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$oNavigationHelper</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setContainer</span><span style="color: #007700">(new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Navigation</span><span style="color: #007700">\</span><span style="color: #0000BB">Navigation</span><span style="color: #007700">([<br />[<br /></span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Home'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pages'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />[<br /></span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Library'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'/library'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pages'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Data'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'/library/data'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'active'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">],<br />],<br />],<br />],<br />],<br />]));<br />echo&nbsp;</span><span style="color: #0000BB">$oNavigationHelper</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">breadcrumbs</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">setMinDepth</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;</span>
</span>
</code></pre></div>
</div><br/>

## Buttons
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/components/buttons/)</small>

### Example
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/components/buttons/#example)</small>

<ul class="nav nav-tabs" id="components-buttons-example-example_5d1614cc0d807_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#components-buttons-example-example_5d1614cc0d807_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#components-buttons-example-example_5d1614cc0d807_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="components-buttons-example-example_5d1614cc0d807_result" role="tabpanel"><br/><button type="button" name="primary" class="btn&#x20;btn-primary" value="">Primary</button>
<button type="button" name="secondary" class="btn&#x20;btn-secondary" value="">Secondary</button>
<button type="button" name="success" class="btn&#x20;btn-success" value="">Success</button>
<button type="button" name="danger" class="btn&#x20;btn-danger" value="">Danger</button>
<button type="button" name="warning" class="btn&#x20;btn-warning" value="">Warning</button>
<button type="button" name="info" class="btn&#x20;btn-info" value="">Info</button>
<button type="button" name="light" class="btn&#x20;btn-light" value="">Light</button>
<button type="button" name="dark" class="btn&#x20;btn-dark" value="">Dark</button>
<button type="button" name="link" class="btn&#x20;btn-link" value="">Link</button>
</div>
  <div class="tab-pane" id="components-buttons-example-example_5d1614cc0d807_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach&nbsp;([</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'secondary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'light'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'dark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'link'</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$oButton&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">ucfirst</span><span style="color: #007700">(</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$oButton</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}</span>
</span>
</code></pre></div>
</div><br/>

### Outline buttons
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/components/buttons/#outline-buttons)</small>

<ul class="nav nav-tabs" id="components-buttons-outline-buttons-outline--buttons_5d1614cc0d89a_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#components-buttons-outline-buttons-outline--buttons_5d1614cc0d89a_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#components-buttons-outline-buttons-outline--buttons_5d1614cc0d89a_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="components-buttons-outline-buttons-outline--buttons_5d1614cc0d89a_result" role="tabpanel"><br/><button type="button" name="primary" class="btn&#x20;btn-outline-primary" value="">Primary</button>
<button type="button" name="secondary" class="btn&#x20;btn-outline-secondary" value="">Secondary</button>
<button type="button" name="success" class="btn&#x20;btn-outline-success" value="">Success</button>
<button type="button" name="danger" class="btn&#x20;btn-outline-danger" value="">Danger</button>
<button type="button" name="warning" class="btn&#x20;btn-outline-warning" value="">Warning</button>
<button type="button" name="info" class="btn&#x20;btn-outline-info" value="">Info</button>
<button type="button" name="light" class="btn&#x20;btn-outline-light" value="">Light</button>
<button type="button" name="dark" class="btn&#x20;btn-outline-dark" value="">Dark</button>
</div>
  <div class="tab-pane" id="components-buttons-outline-buttons-outline--buttons_5d1614cc0d89a_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach&nbsp;([</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'secondary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'light'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'dark'</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$oButton&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">,&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">ucfirst</span><span style="color: #007700">(</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'outline-'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;));<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$oButton</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}</span>
</span>
</code></pre></div>
</div><br/>
