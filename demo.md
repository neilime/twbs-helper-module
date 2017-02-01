---
layout: default
title:  "Demonstration"
menu: "menu.html"
---
This demonstration page shows how to render Twitter Boostrap elements. For each elements, you can see how to do it in "Source" tabs. These are supposed to be run into a view file.

# Content
<small>[Twitter bootstrap Documentation](https://v4-alpha.getbootstrap.com/content/)</small>

## Typography
<small>[Twitter bootstrap Documentation](https://v4-alpha.getbootstrap.com/content/typography/)</small>

### Abbreviations
<small>[Twitter bootstrap Documentation](https://v4-alpha.getbootstrap.com/content/typography/#abbreviations)</small>

<ul class="nav nav-tabs" id="abbreviations_5891c58a99697_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#abbreviations_5891c58a99697_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#abbreviations_5891c58a99697_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="abbreviations_5891c58a99697_result" role="tabpanel"><br/><p><abbr title="attribute">attr</abbr></p>
<p><abbr title="HyperText&#x20;Markup&#x20;Language" class="initialism">HTML</abbr></p></div>
  <div class="tab-pane" id="abbreviations_5891c58a99697_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;First&nbsp;abbreviation<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;p&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">abbreviation</span><span style="color: #007700">(</span><span style="color: #DD0000">'attr'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attribute'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/p&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Second&nbsp;abbreviation<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;p&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">abbreviation</span><span style="color: #007700">(</span><span style="color: #DD0000">'HTML'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'HyperText&nbsp;Markup&nbsp;Language'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/p&gt;'</span><span style="color: #007700">;</span>
</span>
</code></pre></div>
</div>

### Blockquotes
<small>[Twitter bootstrap Documentation](https://v4-alpha.getbootstrap.com/content/typography/#blockquotes)</small>

<ul class="nav nav-tabs" id="blockquotes_5891c58a997e1_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#blockquotes_5891c58a997e1_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#blockquotes_5891c58a997e1_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="blockquotes_5891c58a997e1_result" role="tabpanel"><br/><blockquote class="blockquote">
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
</blockquote></div>
  <div class="tab-pane" id="blockquotes_5891c58a997e1_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">blockquote</span><span style="color: #007700">(</span><span style="color: #DD0000">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipiscing&nbsp;elit.&nbsp;Integer&nbsp;posuere&nbsp;erat&nbsp;a&nbsp;ante.'</span><span style="color: #007700">);</span>
</span>
</code></pre></div>
</div>

#### Naming a source
<small>[Twitter bootstrap Documentation](https://v4-alpha.getbootstrap.com/content/typography/#naming-a-source)</small>

<ul class="nav nav-tabs" id="naming--a--source_5891c58a99943_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#naming--a--source_5891c58a99943_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#naming--a--source_5891c58a99943_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="naming--a--source_5891c58a99943_result" role="tabpanel"><br/><blockquote class="blockquote">
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote></div>
  <div class="tab-pane" id="naming--a--source_5891c58a99943_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">blockquote</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Content<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipiscing&nbsp;elit.&nbsp;Integer&nbsp;posuere&nbsp;erat&nbsp;a&nbsp;ante.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Footer&nbsp;content<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Someone&nbsp;famous&nbsp;in&nbsp;&lt;cite&nbsp;title="Source&nbsp;Title"&gt;Source&nbsp;Title&lt;/cite&gt;'</span><span style="color: #007700">,&nbsp;array(),&nbsp;array(),&nbsp;array(),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Disable&nbsp;escaping<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">false<br /></span><span style="color: #007700">);</span>
</span>
</code></pre></div>
</div>

#### Reverse layout
<small>[Twitter bootstrap Documentation](https://v4-alpha.getbootstrap.com/content/typography/#reverse-layout)</small>

<ul class="nav nav-tabs" id="reverse--layout_5891c58a99abd_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#reverse--layout_5891c58a99abd_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#reverse--layout_5891c58a99abd_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="reverse--layout_5891c58a99abd_result" role="tabpanel"><br/><blockquote class="blockquote-reverse&#x20;blockquote">
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote></div>
  <div class="tab-pane" id="reverse--layout_5891c58a99abd_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">blockquote</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Content<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipiscing&nbsp;elit.&nbsp;Integer&nbsp;posuere&nbsp;erat&nbsp;a&nbsp;ante.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Footer&nbsp;content<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Someone&nbsp;famous&nbsp;in&nbsp;&lt;cite&nbsp;title="Source&nbsp;Title"&gt;Source&nbsp;Title&lt;/cite&gt;'</span><span style="color: #007700">,&nbsp;array(</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'blockquote-reverse'</span><span style="color: #007700">),&nbsp;array(),&nbsp;array(),<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Disable&nbsp;escaping<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">false<br /></span><span style="color: #007700">);</span>
</span>
</code></pre></div>
</div>

