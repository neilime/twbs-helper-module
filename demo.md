---
layout: default
title:  "Demonstration"
menu: "menu.html"
---
This demonstration page shows how to render Twitter Boostrap elements. For each elements, you can see how to do it in "Source" tabs. These are supposed to be run into a view file.

# Components
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/)</small>

## Alerts
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/alerts/)</small>

### Example
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/alerts/#examples)</small>

<ul class="nav nav-tabs" id="example_5d5fb96d7ad2f_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#example_5d5fb96d7ad2f_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#example_5d5fb96d7ad2f_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="example_5d5fb96d7ad2f_result" role="tabpanel"><br/><div class="alert&#x20;alert-primary" role="alert">
    A simple primary alert—check it out!
</div>
<div class="alert&#x20;alert-secondary" role="alert">
    A simple secondary alert—check it out!
</div>
<div class="alert&#x20;alert-success" role="alert">
    A simple success alert—check it out!
</div>
<div class="alert&#x20;alert-danger" role="alert">
    A simple danger alert—check it out!
</div>
<div class="alert&#x20;alert-warning" role="alert">
    A simple warning alert—check it out!
</div>
<div class="alert&#x20;alert-info" role="alert">
    A simple info alert—check it out!
</div>
<div class="alert&#x20;alert-light" role="alert">
    A simple light alert—check it out!
</div>
<div class="alert&#x20;alert-dark" role="alert">
    A simple dark alert—check it out!
</div>
</div>
  <div class="tab-pane" id="example_5d5fb96d7ad2f_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach&nbsp;([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'secondary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'light'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'dark'</span><span style="color: #007700">,<br />]&nbsp;as&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alert</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'A&nbsp;simple&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$sVariant&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;alert—check&nbsp;it&nbsp;out!'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sVariant<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}</span>
</span>
</code></pre></div>
</div><br/>

#### Link color
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/alerts/#link-color)</small>

<ul class="nav nav-tabs" id="link--color_5d5fb96d7ade9_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#link--color_5d5fb96d7ade9_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#link--color_5d5fb96d7ade9_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="link--color_5d5fb96d7ade9_result" role="tabpanel"><br/><div class="alert&#x20;alert-primary" role="alert">
    A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert&#x20;alert-secondary" role="alert">
    A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert&#x20;alert-success" role="alert">
    A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert&#x20;alert-danger" role="alert">
    A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert&#x20;alert-warning" role="alert">
    A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert&#x20;alert-info" role="alert">
    A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert&#x20;alert-light" role="alert">
    A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
<div class="alert&#x20;alert-dark" role="alert">
    A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
</div>
</div>
  <div class="tab-pane" id="link--color_5d5fb96d7ade9_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach&nbsp;([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'secondary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'light'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'dark'</span><span style="color: #007700">,<br />]&nbsp;as&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alert</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'A&nbsp;simple&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$sVariant&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&nbsp;alert&nbsp;with&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;a&nbsp;href="#"&nbsp;class="alert-link"&gt;an&nbsp;example&nbsp;link&lt;/a&gt;.&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Give&nbsp;it&nbsp;a&nbsp;click&nbsp;if&nbsp;you&nbsp;like.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$sVariant<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}</span>
</span>
</code></pre></div>
</div><br/>

#### Additional content
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/alerts/#additional-content)</small>

<ul class="nav nav-tabs" id="additional--content_5d5fb96d7aea9_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#additional--content_5d5fb96d7aea9_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#additional--content_5d5fb96d7aea9_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="additional--content_5d5fb96d7aea9_result" role="tabpanel"><br/><div class="alert&#x20;alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
    <hr>
    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div></div>
  <div class="tab-pane" id="additional--content_5d5fb96d7aea9_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Success<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alert</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;p&gt;Aww&nbsp;yeah,&nbsp;you&nbsp;successfully&nbsp;read&nbsp;this&nbsp;important&nbsp;alert&nbsp;message.&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;example&nbsp;text&nbsp;is&nbsp;going&nbsp;to&nbsp;run&nbsp;a&nbsp;bit&nbsp;longer&nbsp;so&nbsp;that&nbsp;you&nbsp;can&nbsp;see&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'how&nbsp;spacing&nbsp;within&nbsp;an&nbsp;alert&nbsp;works&nbsp;with&nbsp;this&nbsp;kind&nbsp;of&nbsp;content.&lt;/p&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;hr&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;p&nbsp;class="mb-0"&gt;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Whenever&nbsp;you&nbsp;need&nbsp;to,&nbsp;be&nbsp;sure&nbsp;to&nbsp;use&nbsp;margin&nbsp;utilities&nbsp;to&nbsp;keep&nbsp;things&nbsp;nice&nbsp;and&nbsp;tidy.'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;/p&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'heading'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Well&nbsp;done!'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;);</span>
</span>
</code></pre></div>
</div><br/>

#### Dismissing
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/alerts/#dismissing)</small>

<ul class="nav nav-tabs" id="dismissing_5d5fb96d7af22_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#dismissing_5d5fb96d7af22_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#dismissing_5d5fb96d7af22_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="dismissing_5d5fb96d7af22_result" role="tabpanel"><br/><div class="alert&#x20;alert-dismissible&#x20;alert-warning&#x20;fade&#x20;show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div></div>
  <div class="tab-pane" id="dismissing_5d5fb96d7af22_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">alert</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;strong&gt;Holy&nbsp;guacamole!&lt;/strong&gt;&nbsp;You&nbsp;should&nbsp;check&nbsp;in&nbsp;on&nbsp;some&nbsp;of&nbsp;those&nbsp;fields&nbsp;below.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dismissible'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;);</span>
</span>
</code></pre></div>
</div><br/>

## Badges
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/badge/)</small>

### Example
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/badge/#example)</small>

<ul class="nav nav-tabs" id="example_5d5fb96d7b090_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#example_5d5fb96d7b090_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#example_5d5fb96d7b090_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="example_5d5fb96d7b090_result" role="tabpanel"><br/><h1>Example heading <span class="badge&#x20;badge-secondary">New</span></h1>
<h2>Example heading <span class="badge&#x20;badge-secondary">New</span></h2>
<h3>Example heading <span class="badge&#x20;badge-secondary">New</span></h3>
<h4>Example heading <span class="badge&#x20;badge-secondary">New</span></h4>
<h5>Example heading <span class="badge&#x20;badge-secondary">New</span></h5>
<h6>Example heading <span class="badge&#x20;badge-secondary">New</span></h6>
<br>
<button type="button" name="button" class="btn&#x20;btn-primary" value="">
    Profile <span class="badge&#x20;badge-light">9</span>
    <span class="sr-only">unread messages</span>
</button></div>
  <div class="tab-pane" id="example_5d5fb96d7b090_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;H1<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;h1&gt;Example&nbsp;heading&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'New'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/h1&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;H2<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;h2&gt;Example&nbsp;heading&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'New'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/h2&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;H3<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;h3&gt;Example&nbsp;heading&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'New'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/h3&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;H4<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;h4&gt;Example&nbsp;heading&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'New'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/h4&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;H5<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;h5&gt;Example&nbsp;heading&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'New'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/h5&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;H6<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;h6&gt;Example&nbsp;heading&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'New'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/h6&gt;'</span><span style="color: #007700">;<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Button<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Profile&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #DD0000">'9'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'light'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;span&nbsp;class="sr-only"&gt;unread&nbsp;messages&lt;/span&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);</span>
</span>
</code></pre></div>
</div><br/>

### Contextual variations
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/badge/#contextual-variations)</small>

<ul class="nav nav-tabs" id="contextual--variations_5d5fb96d7b117_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#contextual--variations_5d5fb96d7b117_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#contextual--variations_5d5fb96d7b117_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="contextual--variations_5d5fb96d7b117_result" role="tabpanel"><br/><span class="badge&#x20;badge-primary">Primary</span>
<span class="badge&#x20;badge-secondary">Secondary</span>
<span class="badge&#x20;badge-success">Success</span>
<span class="badge&#x20;badge-danger">Danger</span>
<span class="badge&#x20;badge-warning">Warning</span>
<span class="badge&#x20;badge-info">Info</span>
<span class="badge&#x20;badge-light">Light</span>
<span class="badge&#x20;badge-dark">Dark</span>
</div>
  <div class="tab-pane" id="contextual--variations_5d5fb96d7b117_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach&nbsp;([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'secondary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'light'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'dark'</span><span style="color: #007700">,<br />]&nbsp;as&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(</span><span style="color: #0000BB">ucfirst</span><span style="color: #007700">(</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">),&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}</span>
</span>
</code></pre></div>
</div><br/>

### Pill badges
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/badge/#pill-badges)</small>

<ul class="nav nav-tabs" id="pill--badges_5d5fb96d7b1b6_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#pill--badges_5d5fb96d7b1b6_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#pill--badges_5d5fb96d7b1b6_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="pill--badges_5d5fb96d7b1b6_result" role="tabpanel"><br/><span class="badge&#x20;badge-pill&#x20;badge-primary">Primary</span>
<span class="badge&#x20;badge-pill&#x20;badge-secondary">Secondary</span>
<span class="badge&#x20;badge-pill&#x20;badge-success">Success</span>
<span class="badge&#x20;badge-danger&#x20;badge-pill">Danger</span>
<span class="badge&#x20;badge-pill&#x20;badge-warning">Warning</span>
<span class="badge&#x20;badge-info&#x20;badge-pill">Info</span>
<span class="badge&#x20;badge-light&#x20;badge-pill">Light</span>
<span class="badge&#x20;badge-dark&#x20;badge-pill">Dark</span>
</div>
  <div class="tab-pane" id="pill--badges_5d5fb96d7b1b6_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach&nbsp;([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'secondary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'light'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'dark'</span><span style="color: #007700">,<br />]&nbsp;as&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ucfirst</span><span style="color: #007700">(</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'pill'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}</span>
</span>
</code></pre></div>
</div><br/>

### Links
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/badge/#links)</small>

<ul class="nav nav-tabs" id="links_5d5fb96d7b262_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#links_5d5fb96d7b262_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#links_5d5fb96d7b262_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="links_5d5fb96d7b262_result" role="tabpanel"><br/><a href="&#x23;" class="badge&#x20;badge-primary">Primary</a>
<a href="&#x23;" class="badge&#x20;badge-secondary">Secondary</a>
<a href="&#x23;" class="badge&#x20;badge-success">Success</a>
<a href="&#x23;" class="badge&#x20;badge-danger">Danger</a>
<a href="&#x23;" class="badge&#x20;badge-warning">Warning</a>
<a href="&#x23;" class="badge&#x20;badge-info">Info</a>
<a href="&#x23;" class="badge&#x20;badge-light">Light</a>
<a href="&#x23;" class="badge&#x20;badge-dark">Dark</a>
</div>
  <div class="tab-pane" id="links_5d5fb96d7b262_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach&nbsp;([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'secondary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'light'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'dark'</span><span style="color: #007700">,<br />]&nbsp;as&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">badge</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ucfirst</span><span style="color: #007700">(</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'link'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'href'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}</span>
</span>
</code></pre></div>
</div><br/>

## Breadcrumb
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/breadcrumb/)</small>

### Example
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/breadcrumb/#example)</small>

<ul class="nav nav-tabs" id="example_5d5fb96d7b39f_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#example_5d5fb96d7b39f_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#example_5d5fb96d7b39f_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="example_5d5fb96d7b39f_result" role="tabpanel"><br/><nav aria-label="breadcrumb">
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
  <div class="tab-pane" id="example_5d5fb96d7b39f_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">breadcrumbs</span><span style="color: #007700">(new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Navigation</span><span style="color: #007700">\</span><span style="color: #0000BB">Navigation</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Home'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'active'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,],<br />&nbsp;&nbsp;&nbsp;&nbsp;]))-&gt;</span><span style="color: #0000BB">setMinDepth</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">breadcrumbs</span><span style="color: #007700">(new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Navigation</span><span style="color: #007700">\</span><span style="color: #0000BB">Navigation</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Home'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pages'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Library'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'/library'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'active'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]))-&gt;</span><span style="color: #0000BB">setMinDepth</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">breadcrumbs</span><span style="color: #007700">(new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Navigation</span><span style="color: #007700">\</span><span style="color: #0000BB">Navigation</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Home'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'/'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pages'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Library'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'/library'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'pages'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Data'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'/library/data'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'active'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]))-&gt;</span><span style="color: #0000BB">setMinDepth</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;</span>
</span>
</code></pre></div>
</div><br/>

## Buttons
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/buttons/)</small>

### Example
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/buttons/#example)</small>

<ul class="nav nav-tabs" id="example_5d5fb96d7b476_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#example_5d5fb96d7b476_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#example_5d5fb96d7b476_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="example_5d5fb96d7b476_result" role="tabpanel"><br/><button type="button" name="primary" class="btn&#x20;btn-primary" value="">Primary</button>
<button type="button" name="secondary" class="btn&#x20;btn-secondary" value="">Secondary</button>
<button type="button" name="success" class="btn&#x20;btn-success" value="">Success</button>
<button type="button" name="danger" class="btn&#x20;btn-danger" value="">Danger</button>
<button type="button" name="warning" class="btn&#x20;btn-warning" value="">Warning</button>
<button type="button" name="info" class="btn&#x20;btn-info" value="">Info</button>
<button type="button" name="light" class="btn&#x20;btn-light" value="">Light</button>
<button type="button" name="dark" class="btn&#x20;btn-dark" value="">Dark</button>
<button type="button" name="link" class="btn&#x20;btn-link" value="">Link</button>
</div>
  <div class="tab-pane" id="example_5d5fb96d7b476_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach&nbsp;([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'secondary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'light'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'dark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'link'</span><span style="color: #007700">,<br />]&nbsp;as&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$oButton&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">,&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">ucfirst</span><span style="color: #007700">(</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;]);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$oButton</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}</span>
</span>
</code></pre></div>
</div><br/>

### Button tags
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/buttons/#button-tags)</small>

<ul class="nav nav-tabs" id="button--tags_5d5fb96d7b536_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#button--tags_5d5fb96d7b536_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#button--tags_5d5fb96d7b536_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="button--tags_5d5fb96d7b536_result" role="tabpanel"><br/><a href="&#x23;" class="btn&#x20;btn-primary" role="button">Link</a>
<button type="submit" name="Button" class="btn&#x20;btn-primary" value="">Button</button>
</div>
  <div class="tab-pane" id="button--tags_5d5fb96d7b536_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Link&nbsp;button<br /></span><span style="color: #0000BB">$oButton&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'Link'</span><span style="color: #007700">,&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Link'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'tag'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'a'</span><span style="color: #007700">,<br />]);<br /></span><span style="color: #0000BB">$oButton</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'href'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$oButton</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Submit&nbsp;button<br /></span><span style="color: #0000BB">$oButton&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Submit</span><span style="color: #007700">(</span><span style="color: #DD0000">'Button'</span><span style="color: #007700">,&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Button'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,<br />]);<br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$oButton</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;</span>
</span>
</code></pre></div>
</div><br/>

### Outline buttons
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/buttons/#outline-buttons)</small>

<ul class="nav nav-tabs" id="outline--buttons_5d5fb96d7b5d2_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#outline--buttons_5d5fb96d7b5d2_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#outline--buttons_5d5fb96d7b5d2_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="outline--buttons_5d5fb96d7b5d2_result" role="tabpanel"><br/><button type="button" name="primary" class="btn&#x20;btn-outline-primary" value="">Primary</button>
<button type="button" name="secondary" class="btn&#x20;btn-outline-secondary" value="">Secondary</button>
<button type="button" name="success" class="btn&#x20;btn-outline-success" value="">Success</button>
<button type="button" name="danger" class="btn&#x20;btn-outline-danger" value="">Danger</button>
<button type="button" name="warning" class="btn&#x20;btn-outline-warning" value="">Warning</button>
<button type="button" name="info" class="btn&#x20;btn-outline-info" value="">Info</button>
<button type="button" name="light" class="btn&#x20;btn-outline-light" value="">Light</button>
<button type="button" name="dark" class="btn&#x20;btn-outline-dark" value="">Dark</button>
</div>
  <div class="tab-pane" id="outline--buttons_5d5fb96d7b5d2_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach&nbsp;([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'secondary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'light'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'dark'</span><span style="color: #007700">,<br />]&nbsp;as&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$oButton&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">,&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">ucfirst</span><span style="color: #007700">(</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'outline-'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;]);<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$oButton</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}</span>
</span>
</code></pre></div>
</div><br/>

### Sizes
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/buttons/#sizes)</small>

<ul class="nav nav-tabs" id="sizes_5d5fb96d7b77b_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#sizes_5d5fb96d7b77b_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#sizes_5d5fb96d7b77b_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="sizes_5d5fb96d7b77b_result" role="tabpanel"><br/><button type="button" name="large-button" class="btn&#x20;btn-lg&#x20;btn-primary" value="">Large button</button>
<button type="button" name="large-button" class="btn&#x20;btn-lg&#x20;btn-secondary" value="">Large button</button>
<br><br>
<button type="button" name="small-button" class="btn&#x20;btn-primary&#x20;btn-sm" value="">Small button</button>
<button type="button" name="small-button" class="btn&#x20;btn-sm&#x20;btn-secondary" value="">Small button</button>
<br><br>
<button type="button" name="block-level-button" class="btn&#x20;btn-block&#x20;btn-lg&#x20;btn-primary" value="">Block level button</button>
<button type="button" name="block-level-button" class="btn&#x20;btn-block&#x20;btn-lg&#x20;btn-secondary" value="">Block level button</button>
</div>
  <div class="tab-pane" id="sizes_5d5fb96d7b77b_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Large&nbsp;buttons<br /></span><span style="color: #0000BB">$oButton&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'large-button'</span><span style="color: #007700">,&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Large&nbsp;button'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,<br />]);<br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$oButton</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$oButton&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'large-button'</span><span style="color: #007700">,&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Large&nbsp;button'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,<br />]);<br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$oButton</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Small&nbsp;buttons<br /></span><span style="color: #0000BB">$oButton&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'small-button'</span><span style="color: #007700">,&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Small&nbsp;button'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm'</span><span style="color: #007700">,<br />]);<br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$oButton</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$oButton&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'small-button'</span><span style="color: #007700">,&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Small&nbsp;button'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm'</span><span style="color: #007700">,<br />]);<br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$oButton</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Block&nbsp;level&nbsp;buttons<br /></span><span style="color: #0000BB">$oButton&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'block-level-button'</span><span style="color: #007700">,&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Block&nbsp;level&nbsp;button'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'block'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />]);<br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$oButton</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$oButton&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'block-level-button'</span><span style="color: #007700">,&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Block&nbsp;level&nbsp;button'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'block'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />]);<br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">(</span><span style="color: #0000BB">$oButton</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;</span>
</span>
</code></pre></div>
</div><br/>

## Button group
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/button-group/)</small>

### Basic example
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/button-group/#basic-example)</small>

<ul class="nav nav-tabs" id="basic--example_5d5fb96d7b86d_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#basic--example_5d5fb96d7b86d_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#basic--example_5d5fb96d7b86d_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="basic--example_5d5fb96d7b86d_result" role="tabpanel"><br/><div role="group" aria-label="Basic&#x20;example" class="btn-group">
    <button type="button" name="left" class="btn&#x20;btn-secondary" value="">Left</button>
    <button type="button" name="middle" class="btn&#x20;btn-secondary" value="">Middle</button>
    <button type="button" name="right" class="btn&#x20;btn-secondary" value="">Right</button>
</div></div>
  <div class="tab-pane" id="basic--example_5d5fb96d7b86d_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttonGroup</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Create&nbsp;button&nbsp;via&nbsp;\Zend\Form\Factory<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'button'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'left'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Left'</span><span style="color: #007700">]],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Button&nbsp;object<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'middle'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Middle'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'button'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'right'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Right'</span><span style="color: #007700">]],<br />],&nbsp;[</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'role'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'group'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'aria-label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Basic&nbsp;example'</span><span style="color: #007700">]]);</span>
</span>
</code></pre></div>
</div><br/>

### Button toolbar
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/button-group/#button-toolbar)</small>

#### Combine sets of button groups

<ul class="nav nav-tabs" id="combine--sets--of--button--groups_5d5fb96d7ba53_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#combine--sets--of--button--groups_5d5fb96d7ba53_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#combine--sets--of--button--groups_5d5fb96d7ba53_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="combine--sets--of--button--groups_5d5fb96d7ba53_result" role="tabpanel"><br/><div role="toolbar" aria-label="Toolbar&#x20;with&#x20;button&#x20;groups" class="btn-toolbar">
    <div role="group" aria-label="First&#x20;group" class="btn-group&#x20;mr-2">
        <button type="button" name="1" class="btn&#x20;btn-secondary" value="">1</button>
        <button type="button" name="2" class="btn&#x20;btn-secondary" value="">2</button>
        <button type="button" name="3" class="btn&#x20;btn-secondary" value="">3</button>
        <button type="button" name="4" class="btn&#x20;btn-secondary" value="">4</button>
    </div>
    <div role="group" aria-label="Second&#x20;group" class="btn-group&#x20;mr-2">
        <button type="button" name="5" class="btn&#x20;btn-secondary" value="">5</button>
        <button type="button" name="6" class="btn&#x20;btn-secondary" value="">6</button>
        <button type="button" name="7" class="btn&#x20;btn-secondary" value="">7</button>
    </div>
    <div role="group" aria-label="Third&#x20;group" class="btn-group&#x20;mr-2">
        <button type="button" name="8" class="btn&#x20;btn-secondary" value="">8</button>
    </div>
</div></div>
  <div class="tab-pane" id="combine--sets--of--button--groups_5d5fb96d7ba53_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttonToolbar</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'buttons'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'role'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'group'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'aria-label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'First&nbsp;group'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mr-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'buttons'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'5'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'5'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'6'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'6'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'7'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'7'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'role'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'group'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'aria-label'&nbsp;</span><span style="color: #007700">=&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Second&nbsp;group'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mr-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'buttons'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'8'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'8'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'role'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'group'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'aria-label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Third&nbsp;group'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mr-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'role'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'toolbar'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'aria-label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Toolbar&nbsp;with&nbsp;button&nbsp;groups'</span><span style="color: #007700">]]);</span>
</span>
</code></pre></div>
</div><br/>

#### Mix input groups with button groups

<ul class="nav nav-tabs" id="mix--input--groups--with--button--groups_5d5fb96d7bc2c_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#mix--input--groups--with--button--groups_5d5fb96d7bc2c_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#mix--input--groups--with--button--groups_5d5fb96d7bc2c_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="mix--input--groups--with--button--groups_5d5fb96d7bc2c_result" role="tabpanel"><br/><div role="toolbar" aria-label="Toolbar&#x20;with&#x20;button&#x20;groups" class="btn-toolbar&#x20;mb-3">
    <div role="group" aria-label="First&#x20;group" class="btn-group&#x20;mr-2">
        <button type="button" name="1" class="btn&#x20;btn-secondary" value="">1</button>
        <button type="button" name="2" class="btn&#x20;btn-secondary" value="">2</button>
        <button type="button" name="3" class="btn&#x20;btn-secondary" value="">3</button>
        <button type="button" name="4" class="btn&#x20;btn-secondary" value="">4</button>
    </div>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text">
                @
            </div>
        </div>
        <input type="text" name="input-group-example" placeholder="Input&#x20;group&#x20;example" aria-label="Input&#x20;group&#x20;example" aria-describedby="btnGroupAddon" class="form-control" value="">
    </div>
</div>
<div role="toolbar" aria-label="Toolbar&#x20;with&#x20;button&#x20;groups" class="btn-toolbar&#x20;justify-content-between">
    <div role="group" aria-label="First&#x20;group" class="btn-group&#x20;mr-2">
        <button type="button" name="1" class="btn&#x20;btn-secondary" value="">1</button>
        <button type="button" name="2" class="btn&#x20;btn-secondary" value="">2</button>
        <button type="button" name="3" class="btn&#x20;btn-secondary" value="">3</button>
        <button type="button" name="4" class="btn&#x20;btn-secondary" value="">4</button>
    </div>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text">
                @
            </div>
        </div>
        <input type="text" name="input-group-example" placeholder="Input&#x20;group&#x20;example" aria-label="Input&#x20;group&#x20;example" aria-describedby="btnGroupAddon" class="form-control" value="">
    </div>
</div></div>
  <div class="tab-pane" id="mix--input--groups--with--button--groups_5d5fb96d7bc2c_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$aToolbarItems&nbsp;</span><span style="color: #007700">=&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'buttons'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'3'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'4'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'4'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'role'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'group'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'aria-label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'First&nbsp;group'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mr-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Text</span><span style="color: #007700">::class,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'input-group-example'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'add_on_prepend'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'@'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Input&nbsp;group&nbsp;example'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'aria-label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Input&nbsp;group&nbsp;example'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'aria-describedby'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'btnGroupAddon'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />];<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttonToolbar</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$aToolbarItems</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'role'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'toolbar'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'aria-label'&nbsp;</span><span style="color: #007700">=&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Toolbar&nbsp;with&nbsp;button&nbsp;groups'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Justified&nbsp;content<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttonToolbar</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$aToolbarItems</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'role'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'toolbar'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'aria-label'&nbsp;</span><span style="color: #007700">=&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Toolbar&nbsp;with&nbsp;button&nbsp;groups'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'justify-content-between'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);</span>
</span>
</code></pre></div>
</div><br/>

### Sizing
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/button-group/#sizing)</small>

<ul class="nav nav-tabs" id="sizing_5d5fb96d7bce6_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#sizing_5d5fb96d7bce6_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#sizing_5d5fb96d7bce6_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="sizing_5d5fb96d7bce6_result" role="tabpanel"><br/><div role="group" aria-label="..." class="btn-group&#x20;btn-group-lg">
    <button type="button" name="left" class="btn&#x20;btn-secondary" value="">Left</button>
    <button type="button" name="middle" class="btn&#x20;btn-secondary" value="">Middle</button>
    <button type="button" name="right" class="btn&#x20;btn-secondary" value="">Right</button>
</div>
<div role="group" aria-label="..." class="btn-group">
    <button type="button" name="left" class="btn&#x20;btn-secondary" value="">Left</button>
    <button type="button" name="middle" class="btn&#x20;btn-secondary" value="">Middle</button>
    <button type="button" name="right" class="btn&#x20;btn-secondary" value="">Right</button>
</div>
<div role="group" aria-label="..." class="btn-group&#x20;btn-group-sm">
    <button type="button" name="left" class="btn&#x20;btn-secondary" value="">Left</button>
    <button type="button" name="middle" class="btn&#x20;btn-secondary" value="">Middle</button>
    <button type="button" name="right" class="btn&#x20;btn-secondary" value="">Right</button>
</div>
</div>
  <div class="tab-pane" id="sizing_5d5fb96d7bce6_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach&nbsp;([</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'sm'</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$sSize</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttonGroup</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'left'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Left'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'middle'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Middle'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'right'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Right'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;],&nbsp;[</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$sSize</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'role'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'group'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'aria-label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">]])&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}</span>
</span>
</code></pre></div>
</div><br/>

### Nesting
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/button-group/#nesting)</small>

<ul class="nav nav-tabs" id="nesting_5d5fb96d7becf_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#nesting_5d5fb96d7becf_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#nesting_5d5fb96d7becf_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="nesting_5d5fb96d7becf_result" role="tabpanel"><br/><div role="group" aria-label="Button&#x20;group&#x20;with&#x20;nested&#x20;dropdown" class="btn-group">
    <button type="button" name="1" class="btn&#x20;btn-secondary" value="">1</button>
    <button type="button" name="2" class="btn&#x20;btn-secondary" value="">2</button>
    <div class="btn-group" role="group">
        <button type="button" name="dropdown" id="btnGroupDrop1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;dropdown-toggle&#x20;btn-secondary" value="">Dropdown</button>
        <div aria-labelledby="btnGroupDrop1" class="dropdown-menu">
            <a href="&#x23;" class="dropdown-item">Dropdown link</a>
            <a href="&#x23;" class="dropdown-item">Dropdown link</a>
        </div>
    </div>
</div></div>
  <div class="tab-pane" id="nesting_5d5fb96d7becf_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttonGroup</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">::class,&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">]],<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">::class,&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">]],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">::class,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Dropdown&nbsp;link'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Dropdown&nbsp;link'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'btnGroupDrop1'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'role'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'group'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'aria-label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Button&nbsp;group&nbsp;with&nbsp;nested&nbsp;dropdown'</span><span style="color: #007700">]]);</span>
</span>
</code></pre></div>
</div><br/>

### Vertical variation
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/button-group/#vertical-variation)</small>

<ul class="nav nav-tabs" id="vertical--variation_5d5fb96d7c189_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#vertical--variation_5d5fb96d7c189_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#vertical--variation_5d5fb96d7c189_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="vertical--variation_5d5fb96d7c189_result" role="tabpanel"><br/><div class="btn-group-vertical">
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
</div>
<div class="btn-group-vertical">
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <div class="btn-group" role="group">
        <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;dropdown-toggle&#x20;btn-secondary" value="">Dropdown</button>
        <div class="dropdown-menu">
            <a href="&#x23;" class="dropdown-item">Dropdown link</a>
            <a href="&#x23;" class="dropdown-item">Dropdown link</a>
        </div>
    </div>
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <button type="button" name="button" class="btn&#x20;btn-secondary" value="">Button</button>
    <div class="btn-group" role="group">
        <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;dropdown-toggle&#x20;btn-secondary" value="">Dropdown</button>
        <div class="dropdown-menu">
            <a href="&#x23;" class="dropdown-item">Dropdown link</a>
            <a href="&#x23;" class="dropdown-item">Dropdown link</a>
        </div>
    </div>
    <div class="btn-group" role="group">
        <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;dropdown-toggle&#x20;btn-secondary" value="">Dropdown</button>
        <div class="dropdown-menu">
            <a href="&#x23;" class="dropdown-item">Dropdown link</a>
            <a href="&#x23;" class="dropdown-item">Dropdown link</a>
        </div>
    </div>
    <div class="btn-group" role="group">
        <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;dropdown-toggle&#x20;btn-secondary" value="">Dropdown</button>
        <div class="dropdown-menu">
            <a href="&#x23;" class="dropdown-item">Dropdown link</a>
            <a href="&#x23;" class="dropdown-item">Dropdown link</a>
        </div>
    </div>
</div></div>
  <div class="tab-pane" id="vertical--variation_5d5fb96d7c189_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttonGroup</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'button'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Button'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'button'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Button'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'button'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Button'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'button'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Button'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'button'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Button'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'button'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Button'</span><span style="color: #007700">]),<br />],&nbsp;[</span><span style="color: #DD0000">'vertical'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">])&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">buttonGroup</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'button'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Button'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'button'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Button'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Dropdown&nbsp;link'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Dropdown&nbsp;link'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;]),<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'button'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Button'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'button'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Button'</span><span style="color: #007700">]),<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Dropdown&nbsp;link'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Dropdown&nbsp;link'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;]),<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Dropdown&nbsp;link'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Dropdown&nbsp;link'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;]),<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Element</span><span style="color: #007700">\</span><span style="color: #0000BB">Button</span><span style="color: #007700">(</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Dropdown&nbsp;link'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Dropdown&nbsp;link'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;]),<br />],&nbsp;[</span><span style="color: #DD0000">'vertical'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

## Card
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/)</small>

### Example
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#example)</small>

<ul class="nav nav-tabs" id="example_5d5fb96d7c247_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#example_5d5fb96d7c247_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#example_5d5fb96d7c247_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="example_5d5fb96d7c247_result" role="tabpanel"><br/><div style="width&#x3A;&#x20;18rem&#x3B;" class="card">
    <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
        <a href="&#x23;" class="btn btn-primary">Go somewhere</a>
    </div>
</div></div>
  <div class="tab-pane" id="example_5d5fb96d7c247_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Some&nbsp;quick&nbsp;example&nbsp;text&nbsp;to&nbsp;build&nbsp;on&nbsp;the&nbsp;card&nbsp;title&nbsp;and&nbsp;make&nbsp;up&nbsp;the&nbsp;bulk&nbsp;of&nbsp;the&nbsp;card\'s&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;a&nbsp;href="&amp;#x23;"&nbsp;class="btn&nbsp;btn-primary"&gt;Go&nbsp;somewhere&lt;/a&gt;'</span><span style="color: #007700">,<br />],&nbsp;[</span><span style="color: #DD0000">'style'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'width:&nbsp;18rem;'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

### Content types
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#content-types)</small>

#### Body
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#body)</small>

<ul class="nav nav-tabs" id="body_5d5fb96d7c2c9_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#body_5d5fb96d7c2c9_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#body_5d5fb96d7c2c9_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="body_5d5fb96d7c2c9_result" role="tabpanel"><br/><div class="card">
    <div class="card-body">
        This is some text within a card body.
    </div>
</div></div>
  <div class="tab-pane" id="body_5d5fb96d7c2c9_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">(</span><span style="color: #DD0000">'This&nbsp;is&nbsp;some&nbsp;text&nbsp;within&nbsp;a&nbsp;card&nbsp;body.'</span><span style="color: #007700">);</span>
</span>
</code></pre></div>
</div><br/>

#### Titles, text, and links
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#titles-text-and-links)</small>

<ul class="nav nav-tabs" id="titles--text--and--links_5d5fb96d7c3d1_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#titles--text--and--links_5d5fb96d7c3d1_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#titles--text--and--links_5d5fb96d7c3d1_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="titles--text--and--links_5d5fb96d7c3d1_result" role="tabpanel"><br/><div style="width&#x3A;&#x20;18rem&#x3B;" class="card">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle&#x20;mb-2&#x20;text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
        <a href="&#x23;" class="card-link">Card link</a>
        <a href="&#x23;" class="card-link">Another link</a>
    </div>
</div></div>
  <div class="tab-pane" id="titles--text--and--links_5d5fb96d7c3d1_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'subtitle'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'content'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Card&nbsp;subtitle'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2&nbsp;text-muted'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Some&nbsp;quick&nbsp;example&nbsp;text&nbsp;to&nbsp;build&nbsp;on&nbsp;the&nbsp;card&nbsp;title&nbsp;'</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'and&nbsp;make&nbsp;up&nbsp;the&nbsp;bulk&nbsp;of&nbsp;the&nbsp;card\'s&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'link'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Card&nbsp;link'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Another&nbsp;link'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'style'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'width:&nbsp;18rem;'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

#### Images
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#images)</small>

<ul class="nav nav-tabs" id="images_5d5fb96d7c44a_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#images_5d5fb96d7c44a_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#images_5d5fb96d7c44a_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="images_5d5fb96d7c44a_result" role="tabpanel"><br/><div style="width&#x3A;&#x20;18rem&#x3B;" class="card">
    <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div></div>
  <div class="tab-pane" id="images_5d5fb96d7c44a_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Some&nbsp;quick&nbsp;example&nbsp;text&nbsp;to&nbsp;build&nbsp;on&nbsp;the&nbsp;card&nbsp;title&nbsp;'</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'and&nbsp;make&nbsp;up&nbsp;the&nbsp;bulk&nbsp;of&nbsp;the&nbsp;card\'s&nbsp;content.'</span><span style="color: #007700">,<br />],&nbsp;[</span><span style="color: #DD0000">'style'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'width:&nbsp;18rem;'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

#### List groups
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#list-groups)</small>

<ul class="nav nav-tabs" id="list--groups_5d5fb96d7c528_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#list--groups_5d5fb96d7c528_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#list--groups_5d5fb96d7c528_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="list--groups_5d5fb96d7c528_result" role="tabpanel"><br/><div style="width&#x3A;&#x20;18rem&#x3B;" class="card">
    <ul class="list-group&#x20;list-group-flush">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>
</div>
<br>
<div style="width&#x3A;&#x20;18rem&#x3B;" class="card">
    <div class="card-header">
        Featured
    </div>
    <ul class="list-group&#x20;list-group-flush">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>
</div></div>
  <div class="tab-pane" id="list--groups_5d5fb96d7c528_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'listGroup'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Cras&nbsp;justo&nbsp;odio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Dapibus&nbsp;ac&nbsp;facilisis&nbsp;in'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Vestibulum&nbsp;at&nbsp;eros'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'style'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'width:&nbsp;18rem;'</span><span style="color: #007700">]);<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'header'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Featured'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'listGroup'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Cras&nbsp;justo&nbsp;odio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Dapibus&nbsp;ac&nbsp;facilisis&nbsp;in'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Vestibulum&nbsp;at&nbsp;eros'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'style'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'width:&nbsp;18rem;'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

#### Kitchen sink
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#kitchen-sink)</small>

<ul class="nav nav-tabs" id="kitchen--sink_5d5fb96d7c5ed_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#kitchen--sink_5d5fb96d7c5ed_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#kitchen--sink_5d5fb96d7c5ed_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="kitchen--sink_5d5fb96d7c5ed_result" role="tabpanel"><br/><div style="width&#x3A;&#x20;18rem&#x3B;" class="card">
    <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
    <ul class="list-group&#x20;list-group-flush">
        <li class="list-group-item">Cras justo odio</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Vestibulum at eros</li>
    </ul>
    <div class="card-body">
        <a href="&#x23;" class="card-link">Card link</a>
        <a href="&#x23;" class="card-link">Another link</a>
    </div>
</div></div>
  <div class="tab-pane" id="kitchen--sink_5d5fb96d7c5ed_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Some&nbsp;quick&nbsp;example&nbsp;text&nbsp;to&nbsp;build&nbsp;on&nbsp;the&nbsp;card&nbsp;title&nbsp;'</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'and&nbsp;make&nbsp;up&nbsp;the&nbsp;bulk&nbsp;of&nbsp;the&nbsp;card\'s&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'listGroup'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Cras&nbsp;justo&nbsp;odio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Dapibus&nbsp;ac&nbsp;facilisis&nbsp;in'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Vestibulum&nbsp;at&nbsp;eros'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'link'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Card&nbsp;link'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Another&nbsp;link'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'style'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'width:&nbsp;18rem;'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

#### Header and footer
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#header-and-footer)</small>

<ul class="nav nav-tabs" id="header--and--footer_5d5fb96d7c710_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#header--and--footer_5d5fb96d7c710_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#header--and--footer_5d5fb96d7c710_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="header--and--footer_5d5fb96d7c710_result" role="tabpanel"><br/><div class="card">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<br>
<div class="card">
    <div class="card-header">
        Quote
    </div>
    <div class="card-body">
        <blockquote class="blockquote&#x20;mb-0">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
    </div>
</div>
<br>
<div class="card&#x20;text-center">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    <div class="card-footer&#x20;text-muted">
        2 days ago
    </div>
</div></div>
  <div class="tab-pane" id="header--and--footer_5d5fb96d7c710_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'header'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Featured'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Special&nbsp;title&nbsp;treatment'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'With&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;a&nbsp;href="#"&nbsp;class="btn&nbsp;btn-primary"&gt;Go&nbsp;somewhere&lt;/a&gt;'</span><span style="color: #007700">,<br />]);<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;With&nbsp;blockquote<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'header'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Quote'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'blockquote'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipiscing&nbsp;elit.&nbsp;Integer&nbsp;posuere&nbsp;erat&nbsp;a&nbsp;ante.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Someone&nbsp;famous&nbsp;in&nbsp;&lt;cite&nbsp;title="Source&nbsp;Title"&gt;Source&nbsp;Title&lt;/cite&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-0'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Centered<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'header'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Featured'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Special&nbsp;title&nbsp;treatment'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'With&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;a&nbsp;href="#"&nbsp;class="btn&nbsp;btn-primary"&gt;Go&nbsp;somewhere&lt;/a&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'footer'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'2&nbsp;days&nbsp;ago'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text-muted'</span><span style="color: #007700">]],<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text-center'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

### Sizing
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#sizing)</small>

#### Using utilities
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#using-utilities)</small>

<ul class="nav nav-tabs" id="using--utilities_5d5fb96d7c7e7_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#using--utilities_5d5fb96d7c7e7_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#using--utilities_5d5fb96d7c7e7_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="using--utilities_5d5fb96d7c7e7_result" role="tabpanel"><br/><div class="card&#x20;w-75">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Button</a>
    </div>
</div>
<div class="card&#x20;w-50">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Button</a>
    </div>
</div></div>
  <div class="tab-pane" id="using--utilities_5d5fb96d7c7e7_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'With&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;a&nbsp;href="#"&nbsp;class="btn&nbsp;btn-primary"&gt;Button&lt;/a&gt;'</span><span style="color: #007700">,<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'w-75'</span><span style="color: #007700">])&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'With&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;a&nbsp;href="#"&nbsp;class="btn&nbsp;btn-primary"&gt;Button&lt;/a&gt;'</span><span style="color: #007700">,<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'w-50'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

#### Using custom CSS
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#using-custom-css)</small>

<ul class="nav nav-tabs" id="using--custom--css_5d5fb96d7c850_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#using--custom--css_5d5fb96d7c850_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#using--custom--css_5d5fb96d7c850_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="using--custom--css_5d5fb96d7c850_result" role="tabpanel"><br/><div style="width&#x3A;&#x20;18rem&#x3B;" class="card">
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div></div>
  <div class="tab-pane" id="using--custom--css_5d5fb96d7c850_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Special&nbsp;title&nbsp;treatment'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'With&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;a&nbsp;href="#"&nbsp;class="btn&nbsp;btn-primary"&gt;Go&nbsp;somewhere&lt;/a&gt;'</span><span style="color: #007700">,<br />],&nbsp;[</span><span style="color: #DD0000">'style'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'width:&nbsp;18rem;'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

### Text alignment
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#text-alignment)</small>

<ul class="nav nav-tabs" id="text--alignment_5d5fb96d7c960_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#text--alignment_5d5fb96d7c960_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#text--alignment_5d5fb96d7c960_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="text--alignment_5d5fb96d7c960_result" role="tabpanel"><br/><div style="width&#x3A;&#x20;18rem&#x3B;" class="card">
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<br>
<div class="card&#x20;text-center" style="width&#x3A;&#x20;18rem&#x3B;">
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<br>
<div class="card&#x20;text-right" style="width&#x3A;&#x20;18rem&#x3B;">
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div></div>
  <div class="tab-pane" id="text--alignment_5d5fb96d7c960_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Special&nbsp;title&nbsp;treatment'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'With&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;a&nbsp;href="#"&nbsp;class="btn&nbsp;btn-primary"&gt;Go&nbsp;somewhere&lt;/a&gt;'</span><span style="color: #007700">,<br />],&nbsp;[</span><span style="color: #DD0000">'style'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'width:&nbsp;18rem;'</span><span style="color: #007700">])&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Text&nbsp;center<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Special&nbsp;title&nbsp;treatment'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'With&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;a&nbsp;href="#"&nbsp;class="btn&nbsp;btn-primary"&gt;Go&nbsp;somewhere&lt;/a&gt;'</span><span style="color: #007700">,<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text-center'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'style'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'width:&nbsp;18rem;'</span><span style="color: #007700">])&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Text&nbsp;right<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Special&nbsp;title&nbsp;treatment'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'With&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;a&nbsp;href="#"&nbsp;class="btn&nbsp;btn-primary"&gt;Go&nbsp;somewhere&lt;/a&gt;'</span><span style="color: #007700">,<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text-right'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'style'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'width:&nbsp;18rem;'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

### Navigation
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#navigation)</small>

<ul class="nav nav-tabs" id="navigation_5d5fb96d7cac1_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#navigation_5d5fb96d7cac1_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#navigation_5d5fb96d7cac1_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="navigation_5d5fb96d7cac1_result" role="tabpanel"><br/><div class="card&#x20;text-center">
    <div class="card-header">
        <ul class="card-header-tabs&#x20;nav&#x20;nav-tabs">
            <li class="&#x20;nav-item">
                <a class="nav-link&#x20;active" href="&#x23;">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
<br>
<div class="card&#x20;text-center">
    <div class="card-header">
        <ul class="card-header-pills&#x20;nav&#x20;nav-pills">
            <li class="&#x20;nav-item">
                <a class="nav-link&#x20;active" href="&#x23;">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="&#x23;">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div></div>
  <div class="tab-pane" id="navigation_5d5fb96d7cac1_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Nav&nbsp;tabs&nbsp;(pages&nbsp;defined&nbsp;by&nbsp;a&nbsp;\Zend\Navigation\Navigation&nbsp;object&nbsp;as&nbsp;container)<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'nav'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Navigation</span><span style="color: #007700">\</span><span style="color: #0000BB">Navigation</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Active'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'active'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Link'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Link'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Disabled'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'visible'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Special&nbsp;title&nbsp;treatment'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'With&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;a&nbsp;href="#"&nbsp;class="btn&nbsp;btn-primary"&gt;Go&nbsp;somewhere&lt;/a&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text-center'</span><span style="color: #007700">]);<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Nav&nbsp;pills&nbsp;(pages&nbsp;defined&nbsp;by&nbsp;an&nbsp;array&nbsp;as&nbsp;&nbsp;container)<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'nav'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'pills'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'container'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Active'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'active'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Link'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Link'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Disabled'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'visible'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Special&nbsp;title&nbsp;treatment'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'With&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;a&nbsp;href="#"&nbsp;class="btn&nbsp;btn-primary"&gt;Go&nbsp;somewhere&lt;/a&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text-center'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

### Images
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#images-1)</small>

#### Image caps
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#image-caps)</small>

<ul class="nav nav-tabs" id="image--caps_5d5fb96d7cbc9_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#image--caps_5d5fb96d7cbc9_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#image--caps_5d5fb96d7cbc9_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="image--caps_5d5fb96d7cbc9_result" role="tabpanel"><br/><div class="card&#x20;mb-3">
    <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
</div></div>
  <div class="tab-pane" id="image--caps_5d5fb96d7cbc9_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;is&nbsp;a&nbsp;wider&nbsp;card&nbsp;with&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.&nbsp;'</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;content&nbsp;is&nbsp;a&nbsp;little&nbsp;bit&nbsp;longer.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;small&nbsp;class="text-muted"&gt;Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago&lt;/small&gt;'<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">],<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-3'</span><span style="color: #007700">])&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;is&nbsp;a&nbsp;wider&nbsp;card&nbsp;with&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.&nbsp;'</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;content&nbsp;is&nbsp;a&nbsp;little&nbsp;bit&nbsp;longer.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;small&nbsp;class="text-muted"&gt;Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago&lt;/small&gt;'<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />]);</span>
</span>
</code></pre></div>
</div><br/>

#### Image overlays
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#image-overlays)</small>

<ul class="nav nav-tabs" id="image--overlays_5d5fb96d7cc6a_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#image--overlays_5d5fb96d7cc6a_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#image--overlays_5d5fb96d7cc6a_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="image--overlays_5d5fb96d7cc6a_result" role="tabpanel"><br/><div class="bg-dark&#x20;card&#x20;text-white">
    <img alt="..." class="card-img" src="images&#x2F;demo-sample.svg">
    <div class="card-img-overlay">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text">Last updated 3 mins ago</p>
    </div>
</div></div>
  <div class="tab-pane" id="image--overlays_5d5fb96d7cc6a_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'overlay'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'img'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;is&nbsp;a&nbsp;wider&nbsp;card&nbsp;with&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;'</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'lead-in&nbsp;to&nbsp;additional&nbsp;content.&nbsp;'</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;content&nbsp;is&nbsp;a&nbsp;little&nbsp;bit&nbsp;longer.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'bgVariant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text-white'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

### Card styles
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#card-styles)</small>

#### Background and color
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#background-and-color)</small>

<ul class="nav nav-tabs" id="background--and--color_5d5fb96d7cd5b_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#background--and--color_5d5fb96d7cd5b_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#background--and--color_5d5fb96d7cd5b_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="background--and--color_5d5fb96d7cd5b_result" role="tabpanel"><br/><div class="bg-primary&#x20;card&#x20;mb-3&#x20;text-white">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="bg-secondary&#x20;card&#x20;mb-3&#x20;text-white">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="bg-success&#x20;card&#x20;mb-3&#x20;text-white">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="bg-danger&#x20;card&#x20;mb-3&#x20;text-white">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="bg-warning&#x20;card&#x20;mb-3&#x20;text-white">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="bg-info&#x20;card&#x20;mb-3&#x20;text-white">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="bg-light&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="bg-dark&#x20;card&#x20;mb-3&#x20;text-white">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
</div>
  <div class="tab-pane" id="background--and--color_5d5fb96d7cd5b_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach&nbsp;([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'secondary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'light'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'dark'</span><span style="color: #007700">,<br />]&nbsp;as&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'header'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Header'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Primary&nbsp;card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Some&nbsp;quick&nbsp;example&nbsp;text&nbsp;to&nbsp;build&nbsp;on&nbsp;the&nbsp;card&nbsp;title&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'and&nbsp;make&nbsp;up&nbsp;the&nbsp;bulk&nbsp;of&nbsp;the&nbsp;card\'s&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bgVariant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;(</span><span style="color: #0000BB">$sVariant&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #DD0000">'light'&nbsp;</span><span style="color: #007700">?&nbsp;</span><span style="color: #DD0000">'text-white&nbsp;'&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'mb-3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;])&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}</span>
</span>
</code></pre></div>
</div><br/>

#### Border
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#border)</small>

<ul class="nav nav-tabs" id="border_5d5fb96d7ce1d_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#border_5d5fb96d7ce1d_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#border_5d5fb96d7ce1d_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="border_5d5fb96d7ce1d_result" role="tabpanel"><br/><div class="border-primary&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body&#x20;text-primary">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="border-secondary&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body&#x20;text-secondary">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="border-success&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body&#x20;text-success">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="border-danger&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body&#x20;text-danger">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="border-warning&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body&#x20;text-warning">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="border-info&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body&#x20;text-info">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="border-light&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
<div class="border-dark&#x20;card&#x20;mb-3">
    <div class="card-header">
        Header
    </div>
    <div class="card-body&#x20;text-dark">
        <h5 class="card-title">Primary card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
</div>
</div>
  <div class="tab-pane" id="border_5d5fb96d7ce1d_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach&nbsp;([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'secondary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'light'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'dark'</span><span style="color: #007700">,<br />]&nbsp;as&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'header'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Header'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Primary&nbsp;card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Some&nbsp;quick&nbsp;example&nbsp;text&nbsp;to&nbsp;build&nbsp;on&nbsp;the&nbsp;card&nbsp;title&nbsp;and&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'make&nbsp;up&nbsp;the&nbsp;bulk&nbsp;of&nbsp;the&nbsp;card\'s&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'borderVariant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bodyVariant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$sVariant&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #DD0000">'light'&nbsp;</span><span style="color: #007700">?&nbsp;&nbsp;</span><span style="color: #0000BB">$sVariant&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-3'<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">])&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}</span>
</span>
</code></pre></div>
</div><br/>

#### Mixins utilities
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#mixins-utilities)</small>

<ul class="nav nav-tabs" id="mixins--utilities_5d5fb96d7cec5_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#mixins--utilities_5d5fb96d7cec5_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#mixins--utilities_5d5fb96d7cec5_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="mixins--utilities_5d5fb96d7cec5_result" role="tabpanel"><br/><div class="border-success&#x20;card&#x20;mb-3">
    <div class="bg-transparent&#x20;border-success&#x20;card-header">
        Header
    </div>
    <div class="card-body&#x20;text-success">
        <h5 class="card-title">Success card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card&#039;s content.</p>
    </div>
    <div class="bg-transparent&#x20;border-success&#x20;card-footer">
        Footer
    </div>
</div></div>
  <div class="tab-pane" id="mixins--utilities_5d5fb96d7cec5_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">card</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'header'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Header'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'bg-transparent&nbsp;border-success'</span><span style="color: #007700">]],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Success&nbsp;card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Some&nbsp;quick&nbsp;example&nbsp;text&nbsp;to&nbsp;build&nbsp;on&nbsp;the&nbsp;card&nbsp;title&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'and&nbsp;make&nbsp;up&nbsp;the&nbsp;bulk&nbsp;of&nbsp;the&nbsp;card\'s&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'footer'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Footer'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'card-footer&nbsp;bg-transparent&nbsp;border-success'</span><span style="color: #007700">]],<br />],&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'borderVariant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'bodyVariant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-3'<br /></span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

### Card layout
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#card-layout)</small>

#### Card groups
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#card-groups)</small>

<ul class="nav nav-tabs" id="card--groups_5d5fb96d7d12a_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#card--groups_5d5fb96d7d12a_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#card--groups_5d5fb96d7d12a_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="card--groups_5d5fb96d7d12a_result" role="tabpanel"><br/><div class="card-group">
    <div class="card">
        <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
</div>
<br>
<div class="card-group">
    <div class="card">
        <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
</div></div>
  <div class="tab-pane" id="card--groups_5d5fb96d7d12a_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cardGroup</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Primary&nbsp;card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;is&nbsp;a&nbsp;wider&nbsp;card&nbsp;with&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'content.&nbsp;This&nbsp;content&nbsp;is&nbsp;a&nbsp;little&nbsp;bit&nbsp;longer.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;small&nbsp;class="text-muted"&gt;Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago&lt;/small&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Primary&nbsp;card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;card&nbsp;has&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;small&nbsp;class="text-muted"&gt;Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago&lt;/small&gt;'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Primary&nbsp;card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;is&nbsp;a&nbsp;wider&nbsp;card&nbsp;with&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'to&nbsp;additional&nbsp;content.&nbsp;This&nbsp;card&nbsp;has&nbsp;even&nbsp;longer&nbsp;content&nbsp;than&nbsp;the&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'first&nbsp;to&nbsp;show&nbsp;that&nbsp;equal&nbsp;height&nbsp;action.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;small&nbsp;class="text-muted"&gt;Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago&lt;/small&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);<br /><br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;With&nbsp;footers<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cardGroup</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Primary&nbsp;card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'This&nbsp;is&nbsp;a&nbsp;wider&nbsp;card&nbsp;with&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'additional&nbsp;content.&nbsp;This&nbsp;content&nbsp;is&nbsp;a&nbsp;little&nbsp;bit&nbsp;longer.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'footer'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'&lt;small&nbsp;class="text-muted"&gt;Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago&lt;/small&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Primary&nbsp;card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'This&nbsp;card&nbsp;has&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'footer'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'&lt;small&nbsp;class="text-muted"&gt;Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago&lt;/small&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Primary&nbsp;card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'This&nbsp;is&nbsp;a&nbsp;wider&nbsp;card&nbsp;with&nbsp;supporting&nbsp;text&nbsp;below&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;card&nbsp;has&nbsp;even&nbsp;longer&nbsp;content&nbsp;than&nbsp;the&nbsp;first&nbsp;to&nbsp;show&nbsp;that&nbsp;equal&nbsp;height&nbsp;action.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'footer'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'&lt;small&nbsp;class="text-muted"&gt;Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago&lt;/small&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);</span>
</span>
</code></pre></div>
</div><br/>

#### Card decks
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#card-decks)</small>

<ul class="nav nav-tabs" id="card--decks_5d5fb96d7d332_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#card--decks_5d5fb96d7d332_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#card--decks_5d5fb96d7d332_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="card--decks_5d5fb96d7d332_result" role="tabpanel"><br/><div class="card-deck">
    <div class="card">
        <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
</div>
<br>
<div class="card-deck">
    <div class="card">
        <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
        <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
</div></div>
  <div class="tab-pane" id="card--decks_5d5fb96d7d332_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cardDeck</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Primary&nbsp;card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;is&nbsp;a&nbsp;wider&nbsp;card&nbsp;with&nbsp;supporting&nbsp;text&nbsp;below&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;content&nbsp;is&nbsp;a&nbsp;little&nbsp;bit&nbsp;longer.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;small&nbsp;class="text-muted"&gt;Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago&lt;/small&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Primary&nbsp;card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;card&nbsp;has&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;small&nbsp;class="text-muted"&gt;Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago&lt;/small&gt;'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Primary&nbsp;card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;is&nbsp;a&nbsp;wider&nbsp;card&nbsp;with&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;card&nbsp;has&nbsp;even&nbsp;longer&nbsp;content&nbsp;than&nbsp;the&nbsp;first&nbsp;to&nbsp;show&nbsp;that&nbsp;equal&nbsp;height&nbsp;action.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;small&nbsp;class="text-muted"&gt;Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago&lt;/small&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;With&nbsp;footers<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cardDeck</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Primary&nbsp;card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'This&nbsp;is&nbsp;a&nbsp;wider&nbsp;card&nbsp;with&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.&nbsp;This&nbsp;content&nbsp;is&nbsp;a&nbsp;little&nbsp;bit&nbsp;longer.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'footer'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'&lt;small&nbsp;class="text-muted"&gt;Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago&lt;/small&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Primary&nbsp;card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'This&nbsp;card&nbsp;has&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'footer'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'&lt;small&nbsp;class="text-muted"&gt;Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago&lt;/small&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Primary&nbsp;card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'This&nbsp;is&nbsp;a&nbsp;wider&nbsp;card&nbsp;with&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'lead-in&nbsp;to&nbsp;additional&nbsp;content.&nbsp;This&nbsp;card&nbsp;has&nbsp;even&nbsp;longer&nbsp;content&nbsp;than&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'the&nbsp;first&nbsp;to&nbsp;show&nbsp;that&nbsp;equal&nbsp;height&nbsp;action.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'footer'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'&lt;small&nbsp;class="text-muted"&gt;Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago&lt;/small&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);</span>
</span>
</code></pre></div>
</div><br/>

#### Card columns
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/card/#card-columns)</small>

<ul class="nav nav-tabs" id="card--columns_5d5fb96d7d57a_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#card--columns_5d5fb96d7d57a_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#card--columns_5d5fb96d7d57a_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="card--columns_5d5fb96d7d57a_result" role="tabpanel"><br/><div class="card-columns">
    <div class="card">
        <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
        <div class="card-body">
            <h5 class="card-title">Card title that wraps to a new line</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
    </div>
    <div class="card&#x20;p-3">
        <div class="card-body">
            <blockquote class="blockquote&#x20;mb-0">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="bg-primary&#x20;card&#x20;p-3&#x20;text-center&#x20;text-white">
        <div class="card-body">
            <blockquote class="blockquote&#x20;mb-0">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                <footer class="blockquote-footer&#x20;text-white">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
        </div>
    </div>
    <div class="card&#x20;text-center">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img alt="..." class="card-img-top" src="images&#x2F;demo-sample.svg">
    </div>
    <div class="card&#x20;p-3&#x20;text-right">
        <div class="card-body">
            <blockquote class="blockquote&#x20;mb-0">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
</div></div>
  <div class="tab-pane" id="card--columns_5d5fb96d7d57a_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">cardColumns</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Card&nbsp;title&nbsp;that&nbsp;wraps&nbsp;to&nbsp;a&nbsp;new&nbsp;line'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'This&nbsp;is&nbsp;a&nbsp;longer&nbsp;card&nbsp;with&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.&nbsp;This&nbsp;content&nbsp;is&nbsp;a&nbsp;little&nbsp;bit&nbsp;longer.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'blockquote'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipiscing&nbsp;elit.&nbsp;Integer&nbsp;posuere&nbsp;erat&nbsp;a&nbsp;ante.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Someone&nbsp;famous&nbsp;in&nbsp;&lt;cite&nbsp;title="Source&nbsp;Title"&gt;Source&nbsp;Title&lt;/cite&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-0'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'p-3'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;card&nbsp;has&nbsp;supporting&nbsp;text&nbsp;below&nbsp;as&nbsp;a&nbsp;natural&nbsp;lead-in&nbsp;to&nbsp;additional&nbsp;content.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;small&nbsp;class="text-muted"&gt;Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago&lt;/small&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'blockquote'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipiscing&nbsp;elit.&nbsp;Integer&nbsp;posuere&nbsp;erat.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Someone&nbsp;famous&nbsp;in&nbsp;&lt;cite&nbsp;title="Source&nbsp;Title"&gt;Source&nbsp;Title&lt;/cite&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-0'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text-white'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'bgVariant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text-white&nbsp;text-center&nbsp;p-3'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;card&nbsp;has&nbsp;a&nbsp;regular&nbsp;title&nbsp;and&nbsp;short&nbsp;paragraphy&nbsp;of&nbsp;text&nbsp;below&nbsp;it.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;small&nbsp;class="text-muted"&gt;Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago&lt;/small&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text-center'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'imgTop'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'blockquote'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipiscing&nbsp;elit.&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Integer&nbsp;posuere&nbsp;erat&nbsp;a&nbsp;ante.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Someone&nbsp;famous&nbsp;in&nbsp;&lt;cite&nbsp;title="Source&nbsp;Title"&gt;Source&nbsp;Title&lt;/cite&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-0'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'p-3&nbsp;text-right'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Card&nbsp;title'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;is&nbsp;another&nbsp;card&nbsp;with&nbsp;title&nbsp;and&nbsp;supporting&nbsp;text&nbsp;below.&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'This&nbsp;card&nbsp;has&nbsp;some&nbsp;additional&nbsp;content&nbsp;to&nbsp;make&nbsp;it&nbsp;slightly&nbsp;taller&nbsp;overall.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;small&nbsp;class="text-muted"&gt;Last&nbsp;updated&nbsp;3&nbsp;mins&nbsp;ago&lt;/small&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);</span>
</span>
</code></pre></div>
</div><br/>

## Carousel
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/carousel/)</small>

### Example
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/carousel/#example)</small>

#### Slides only
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/carousel/#slides-only)</small>

<ul class="nav nav-tabs" id="slides--only_5d5fb96d7d67f_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#slides--only_5d5fb96d7d67f_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#slides--only_5d5fb96d7d67f_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="slides--only_5d5fb96d7d67f_result" role="tabpanel"><br/><div id="carouselExampleSlidesOnly" data-ride="carousel" class="carousel&#x20;slide">
    <div class="carousel-inner">
        <div class="active&#x20;carousel-item">
            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
        </div>
    </div>
</div></div>
  <div class="tab-pane" id="slides--only_5d5fb96d7d67f_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">carousel</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'src'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'optionsAndAttributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'active'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;1'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;2'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;3'</span><span style="color: #007700">,],<br />],&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'carouselExampleSlidesOnly'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

#### With controls
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/carousel/#with-controls)</small>

<ul class="nav nav-tabs" id="with--controls_5d5fb96d7d714_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#with--controls_5d5fb96d7d714_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#with--controls_5d5fb96d7d714_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="with--controls_5d5fb96d7d714_result" role="tabpanel"><br/><div id="carouselExampleControls" data-ride="carousel" class="carousel&#x20;slide">
    <div class="carousel-inner">
        <div class="active&#x20;carousel-item">
            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
        </div>
    </div>
    <a class="carousel-control-prev" href="&#x23;carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="&#x23;carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div></div>
  <div class="tab-pane" id="with--controls_5d5fb96d7d714_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">carousel</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'src'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'optionsAndAttributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'active'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;1'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;2'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;3'</span><span style="color: #007700">,],<br />],&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'carouselExampleControls'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'controls'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

#### With indicators
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/carousel/#with-indicators)</small>

<ul class="nav nav-tabs" id="with--indicators_5d5fb96d7d7ad_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#with--indicators_5d5fb96d7d7ad_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#with--indicators_5d5fb96d7d7ad_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="with--indicators_5d5fb96d7d7ad_result" role="tabpanel"><br/><div id="carouselExampleIndicators" data-ride="carousel" class="carousel&#x20;slide">
    <ol class="carousel-indicators">
        <li data-target="&#x23;carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="&#x23;carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="&#x23;carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="active&#x20;carousel-item">
            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
        </div>
    </div>
    <a class="carousel-control-prev" href="&#x23;carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="&#x23;carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div></div>
  <div class="tab-pane" id="with--indicators_5d5fb96d7d7ad_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">carousel</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'src'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'optionsAndAttributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'active'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;1'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;2'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;3'</span><span style="color: #007700">,],<br />],&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'carouselExampleIndicators'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'controls'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'indicators'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

#### With captions
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/carousel/#with-captions)</small>

<ul class="nav nav-tabs" id="with--captions_5d5fb96d7d8e7_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#with--captions_5d5fb96d7d8e7_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#with--captions_5d5fb96d7d8e7_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="with--captions_5d5fb96d7d8e7_result" role="tabpanel"><br/><div id="carouselExampleCaptions" data-ride="carousel" class="carousel&#x20;slide">
    <ol class="carousel-indicators">
        <li data-target="&#x23;carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="&#x23;carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="&#x23;carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="active&#x20;carousel-item">
            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
            <div class="carousel-caption&#x20;d-md-block&#x20;d-none">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
            <div class="carousel-caption&#x20;d-md-block&#x20;d-none">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
            <div class="carousel-caption&#x20;d-md-block&#x20;d-none">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="&#x23;carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="&#x23;carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div></div>
  <div class="tab-pane" id="with--captions_5d5fb96d7d8e7_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">carousel</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'src'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'optionsAndAttributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'active'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'caption'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'First&nbsp;slide&nbsp;label'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Nulla&nbsp;vitae&nbsp;elit&nbsp;libero,&nbsp;a&nbsp;pharetra&nbsp;augue&nbsp;mollis&nbsp;interdum.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'caption'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Second&nbsp;slide&nbsp;label'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipiscing&nbsp;elit.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'caption'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'title'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Third&nbsp;slide&nbsp;label'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Praesent&nbsp;commodo&nbsp;cursus&nbsp;magna,&nbsp;vel&nbsp;scelerisque&nbsp;nisl&nbsp;consectetur.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'carouselExampleCaptions'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'controls'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'indicators'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;]);</span>
</span>
</code></pre></div>
</div><br/>

#### Crossfade
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/carousel/#crossfade)</small>

<ul class="nav nav-tabs" id="crossfade_5d5fb96d7d98b_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#crossfade_5d5fb96d7d98b_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#crossfade_5d5fb96d7d98b_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="crossfade_5d5fb96d7d98b_result" role="tabpanel"><br/><div id="carouselExampleFade" data-ride="carousel" class="carousel&#x20;carousel-fade&#x20;slide">
    <div class="carousel-inner">
        <div class="active&#x20;carousel-item">
            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
        </div>
    </div>
    <a class="carousel-control-prev" href="&#x23;carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="&#x23;carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div></div>
  <div class="tab-pane" id="crossfade_5d5fb96d7d98b_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">carousel</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'src'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'optionsAndAttributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'active'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;1'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;2'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;3'</span><span style="color: #007700">,],<br />],&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'carouselExampleFade'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'controls'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'crossfade'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

#### Individual .carousel-item interval
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/carousel/#individual-carousel-item-interval)</small>

<ul class="nav nav-tabs" id="individual--carousel--item--interval_5d5fb96d7da28_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#individual--carousel--item--interval_5d5fb96d7da28_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#individual--carousel--item--interval_5d5fb96d7da28_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="individual--carousel--item--interval_5d5fb96d7da28_result" role="tabpanel"><br/><div id="carouselExampleControls" data-ride="carousel" class="carousel&#x20;slide">
    <div class="carousel-inner">
        <div data-interval="10000" class="active&#x20;carousel-item">
            <img alt="Slide&#x20;1" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
        </div>
        <div data-interval="2000" class="carousel-item">
            <img alt="Slide&#x20;2" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
        </div>
        <div class="carousel-item">
            <img alt="Slide&#x20;3" class="d-block&#x20;w-100" src="images&#x2F;demo-sample.svg">
        </div>
    </div>
    <a class="carousel-control-prev" href="&#x23;carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="&#x23;carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div></div>
  <div class="tab-pane" id="individual--carousel--item--interval_5d5fb96d7da28_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">carousel</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'src'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'optionsAndAttributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'interval'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">10000</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'active'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;]],<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'interval'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">2000</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;2'</span><span style="color: #007700">,]],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Slide&nbsp;3'</span><span style="color: #007700">,],<br />],&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'carouselExampleControls'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'controls'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

## Dropdowns
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/)</small>

### Examples
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#examples)</small>

#### Single button
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#single-button)</small>

<ul class="nav nav-tabs" id="single--button_5d5fb96d7dc93_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#single--button_5d5fb96d7dc93_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#single--button_5d5fb96d7dc93_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="single--button_5d5fb96d7dc93_result" role="tabpanel"><br/><div class="dropdown">
    <button type="button" name="dropdown" id="dropdownMenuButton" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;dropdown-toggle&#x20;btn-secondary" value="">Dropdown</button>
    <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
    </div>
</div>
<br>
<div class="dropdown">
    <a id="dropdownMenuButton" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="&#x23;" class="btn&#x20;dropdown-toggle&#x20;btn-secondary">Dropdown</a>
    <div aria-labelledby="dropdownMenuButton" class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
    </div>
</div>
<br>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-primary&#x20;dropdown-toggle" value="">Dropdown</button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value="">Dropdown</button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-success&#x20;dropdown-toggle" value="">Dropdown</button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-danger&#x20;dropdown-toggle" value="">Dropdown</button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-warning&#x20;dropdown-toggle" value="">Dropdown</button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-info&#x20;dropdown-toggle" value="">Dropdown</button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-light&#x20;dropdown-toggle" value="">Dropdown</button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-dark&#x20;dropdown-toggle" value="">Dropdown</button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
</div>
  <div class="tab-pane" id="single--button_5d5fb96d7dc93_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">,],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdownMenuButton'</span><span style="color: #007700">],<br />]);<br /><br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;With&nbsp;&lt;a&gt;&nbsp;elements<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'tag'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'a'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">,],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdownMenuButton'</span><span style="color: #007700">],<br />]);<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Variations<br /></span><span style="color: #007700">foreach&nbsp;([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'secondary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'light'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'dark'</span><span style="color: #007700">,<br />]&nbsp;as&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'btn-group'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'---'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Separated&nbsp;link'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;])&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}</span>
</span>
</code></pre></div>
</div><br/>

#### Split button
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#split-button)</small>

<ul class="nav nav-tabs" id="split--button_5d5fb96d7ddb3_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#split--button_5d5fb96d7ddb3_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#split--button_5d5fb96d7ddb3_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="split--button_5d5fb96d7ddb3_result" role="tabpanel"><br/><div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-primary" value="">Dropdown</button>
    <button type="button" name="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-primary&#x20;dropdown-toggle" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-secondary" value="">Dropdown</button>
    <button type="button" name="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-secondary&#x20;dropdown-toggle" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-success" value="">Dropdown</button>
    <button type="button" name="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-success&#x20;dropdown-toggle" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-danger" value="">Dropdown</button>
    <button type="button" name="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-danger&#x20;dropdown-toggle" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-warning" value="">Dropdown</button>
    <button type="button" name="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-warning&#x20;dropdown-toggle" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-info" value="">Dropdown</button>
    <button type="button" name="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-info&#x20;dropdown-toggle" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-light" value="">Dropdown</button>
    <button type="button" name="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-light&#x20;dropdown-toggle" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-dark" value="">Dropdown</button>
    <button type="button" name="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-dark&#x20;dropdown-toggle" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
</div>
  <div class="tab-pane" id="split--button_5d5fb96d7ddb3_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach&nbsp;([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'secondary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'danger'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'light'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'dark'</span><span style="color: #007700">,<br />]&nbsp;as&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$sVariant</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'split'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Toggle&nbsp;Dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'---'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Separated&nbsp;link'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;])&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />}</span>
</span>
</code></pre></div>
</div><br/>

### Sizing
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#sizing)</small>

<ul class="nav nav-tabs" id="sizing_5d5fb96d7e01b_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#sizing_5d5fb96d7e01b_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#sizing_5d5fb96d7e01b_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="sizing_5d5fb96d7e01b_result" role="tabpanel"><br/><div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-lg&#x20;dropdown-toggle&#x20;btn-secondary" value="">Large button</button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-lg&#x20;btn-secondary" value="">Large button</button>
    <button type="button" name="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-lg&#x20;dropdown-toggle&#x20;btn-secondary" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<br>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-sm&#x20;dropdown-toggle&#x20;btn-secondary" value="">Small button</button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" class="btn&#x20;btn-sm&#x20;btn-secondary" value="">Small button</button>
    <button type="button" name="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-sm&#x20;dropdown-toggle&#x20;btn-secondary" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div></div>
  <div class="tab-pane" id="sizing_5d5fb96d7e01b_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Large&nbsp;button<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Large&nbsp;button'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'btn-group'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'---'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Separated&nbsp;link'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />])&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Large&nbsp;split&nbsp;button<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Large&nbsp;button'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'split'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Toggle&nbsp;Dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'---'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Separated&nbsp;link'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Small&nbsp;button<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Small&nbsp;button'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'btn-group'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'---'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Separated&nbsp;link'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />])&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Small&nbsp;split&nbsp;button<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Small&nbsp;button'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'split'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Toggle&nbsp;Dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'---'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Separated&nbsp;link'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);</span>
</span>
</code></pre></div>
</div><br/>

### Directions
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#directions)</small>

#### Dropup
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#dropup)</small>

<ul class="nav nav-tabs" id="dropup_5d5fb96d7e1e0_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#dropup_5d5fb96d7e1e0_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#dropup_5d5fb96d7e1e0_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="dropup_5d5fb96d7e1e0_result" role="tabpanel"><br/><div class="btn-group&#x20;dropup">
    <button type="button" name="dropup" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-lg&#x20;dropdown-toggle&#x20;btn-secondary" value="">Dropup</button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropup">
    <button type="button" name="split-dropup" class="btn&#x20;btn-lg&#x20;btn-secondary" value="">Split dropup</button>
    <button type="button" name="split-dropup-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-lg&#x20;dropdown-toggle&#x20;btn-secondary" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div></div>
  <div class="tab-pane" id="dropup_5d5fb96d7e1e0_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Dropup&nbsp;button<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropup'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Dropup'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'direction'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'up'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'btn-group'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'---'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Separated&nbsp;link'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;])&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Dropup&nbsp;split&nbsp;button<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'split-dropup'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Split&nbsp;dropup'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'direction'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'up'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'split'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Toggle&nbsp;Dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'---'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Separated&nbsp;link'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;]);</span>
</span>
</code></pre></div>
</div><br/>

#### Dropright
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#dropright)</small>

<ul class="nav nav-tabs" id="dropright_5d5fb96d7e367_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#dropright_5d5fb96d7e367_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#dropright_5d5fb96d7e367_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="dropright_5d5fb96d7e367_result" role="tabpanel"><br/><div class="btn-group&#x20;dropright">
    <button type="button" name="dropright" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-lg&#x20;dropdown-toggle&#x20;btn-secondary" value="">Dropright</button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div>
<div class="btn-group&#x20;dropright">
    <button type="button" name="split-dropright" class="btn&#x20;btn-lg&#x20;btn-secondary" value="">Split dropright</button>
    <button type="button" name="split-dropright-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;btn-lg&#x20;dropdown-toggle&#x20;btn-secondary" value=""><span class="sr-only">Toggle Dropdown</span></button>
    <div class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="&#x23;" class="dropdown-item">Separated link</a>
    </div>
</div></div>
  <div class="tab-pane" id="dropright_5d5fb96d7e367_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Dropright&nbsp;button<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropright'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Dropright'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'direction'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'right'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'btn-group'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'---'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Separated&nbsp;link'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />])&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Dropright&nbsp;split&nbsp;button<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'split-dropright'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Split&nbsp;dropright'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'direction'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'right'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'split'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Toggle&nbsp;Dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'---'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Separated&nbsp;link'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);</span>
</span>
</code></pre></div>
</div><br/>

### Menu items
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#menu-items)</small>

<ul class="nav nav-tabs" id="menu--items_5d5fb96d7e473_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#menu--items_5d5fb96d7e473_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu--items_5d5fb96d7e473_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="menu--items_5d5fb96d7e473_result" role="tabpanel"><br/><div class="dropdown">
    <button type="button" name="dropdown" id="dropdownMenu2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;dropdown-toggle&#x20;btn-secondary" value="">Dropdown</button>
    <div aria-labelledby="dropdownMenu2" class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
    </div>
</div>
<br>
<div class="dropdown-menu">
    <span class="dropdown-item-text">Dropdown item text</span>
    <a href="&#x23;" class="dropdown-item">Action</a>
    <a href="&#x23;" class="dropdown-item">Another action</a>
    <a href="&#x23;" class="dropdown-item">Something else here</a>
</div></div>
  <div class="tab-pane" id="menu--items_5d5fb96d7e473_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdownMenu2'</span><span style="color: #007700">],<br />]);<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Non-interactive&nbsp;dropdown&nbsp;items<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dropdown</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">renderMenu</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Dropdown&nbsp;item&nbsp;text'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;\</span><span style="color: #0000BB">TwbsHelper</span><span style="color: #007700">\</span><span style="color: #0000BB">View</span><span style="color: #007700">\</span><span style="color: #0000BB">Helper</span><span style="color: #007700">\</span><span style="color: #0000BB">Dropdown</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_ITEM_TEXT</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'<br /></span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

#### Active
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#active)</small>

<ul class="nav nav-tabs" id="active_5d5fb96d7e516_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#active_5d5fb96d7e516_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#active_5d5fb96d7e516_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="active_5d5fb96d7e516_result" role="tabpanel"><br/><div class="dropdown-menu">
    <a href="&#x23;" class="dropdown-item">Regular link</a>
    <a href="&#x23;" class="active&#x20;dropdown-item">Active link</a>
    <a href="&#x23;" class="dropdown-item">Another link</a>
</div></div>
  <div class="tab-pane" id="active_5d5fb96d7e516_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dropdown</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">renderMenu</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Regular&nbsp;link'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Active&nbsp;link'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'active'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Another&nbsp;link'<br /></span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

#### Disabled
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#disabled)</small>

<ul class="nav nav-tabs" id="disabled_5d5fb96d7e5a7_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#disabled_5d5fb96d7e5a7_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#disabled_5d5fb96d7e5a7_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="disabled_5d5fb96d7e5a7_result" role="tabpanel"><br/><div class="dropdown-menu">
    <a href="&#x23;" class="dropdown-item">Regular link</a>
    <a href="&#x23;" tabindex="-1" aria-disabled="true" class="disabled&#x20;dropdown-item">Disabled link</a>
    <a href="&#x23;" class="dropdown-item">Another link</a>
</div></div>
  <div class="tab-pane" id="disabled_5d5fb96d7e5a7_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dropdown</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">renderMenu</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Regular&nbsp;link'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Disabled&nbsp;link'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'disabled'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Another&nbsp;link'<br /></span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

### Menu alignment
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#menu-alignment)</small>

<ul class="nav nav-tabs" id="menu--alignment_5d5fb96d7e684_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#menu--alignment_5d5fb96d7e684_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu--alignment_5d5fb96d7e684_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="menu--alignment_5d5fb96d7e684_result" role="tabpanel"><br/><div class="dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;dropdown-toggle&#x20;btn-secondary" value="">Right-aligned menu</button>
    <div class="dropdown-menu&#x20;dropdown-menu-right">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
    </div>
</div></div>
  <div class="tab-pane" id="menu--alignment_5d5fb96d7e684_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Right-aligned&nbsp;menu'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'alignment'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'right'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />]);</span>
</span>
</code></pre></div>
</div><br/>

#### Responsive alignment
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#responsive-alignment)</small>

<ul class="nav nav-tabs" id="responsive--alignment_5d5fb96d7e7a1_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#responsive--alignment_5d5fb96d7e7a1_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#responsive--alignment_5d5fb96d7e7a1_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="responsive--alignment_5d5fb96d7e7a1_result" role="tabpanel"><br/><div class="dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;dropdown-toggle&#x20;btn-secondary" value="">Left-aligned but right aligned when large screen</button>
    <div class="dropdown-menu&#x20;dropdown-menu-lg-right">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
    </div>
</div>
<br>
<div class="dropdown">
    <button type="button" name="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;dropdown-toggle&#x20;btn-secondary" value="">Left-aligned but right aligned when large screen</button>
    <div class="dropdown-menu&#x20;dropdown-menu-lg-left&#x20;dropdown-menu-right">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
    </div>
</div></div>
  <div class="tab-pane" id="responsive--alignment_5d5fb96d7e7a1_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Left-aligned&nbsp;but&nbsp;right&nbsp;aligned&nbsp;when&nbsp;large&nbsp;screen'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'alignment'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg-right'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Left-aligned&nbsp;but&nbsp;right&nbsp;aligned&nbsp;when&nbsp;large&nbsp;screen'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'alignment'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'right'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'lg-left'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);</span>
</span>
</code></pre></div>
</div><br/>

### Menu content
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#menu-content)</small>

#### Headers
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#headers)</small>

<ul class="nav nav-tabs" id="headers_5d5fb96d7e88b_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#headers_5d5fb96d7e88b_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#headers_5d5fb96d7e88b_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="headers_5d5fb96d7e88b_result" role="tabpanel"><br/><div class="dropdown-menu">
    <h6 class="dropdown-header">Dropdown header</h6>
    <a href="&#x23;" class="dropdown-item">Action</a>
    <a href="&#x23;" class="dropdown-item">Another action</a>
</div></div>
  <div class="tab-pane" id="headers_5d5fb96d7e88b_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dropdown</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">renderMenu</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Dropdown&nbsp;header'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;\</span><span style="color: #0000BB">TwbsHelper</span><span style="color: #007700">\</span><span style="color: #0000BB">View</span><span style="color: #007700">\</span><span style="color: #0000BB">Helper</span><span style="color: #007700">\</span><span style="color: #0000BB">Dropdown</span><span style="color: #007700">::</span><span style="color: #0000BB">TYPE_ITEM_HEADER</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,<br />]);</span>
</span>
</code></pre></div>
</div><br/>

#### Dividers
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#headers)</small>

<ul class="nav nav-tabs" id="dividers_5d5fb96d7e92f_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#dividers_5d5fb96d7e92f_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#dividers_5d5fb96d7e92f_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="dividers_5d5fb96d7e92f_result" role="tabpanel"><br/><div class="dropdown-menu">
    <a href="&#x23;" class="dropdown-item">Action</a>
    <a href="&#x23;" class="dropdown-item">Another action</a>
    <a href="&#x23;" class="dropdown-item">Something else here</a>
    <div class="dropdown-divider"></div>
    <a href="&#x23;" class="dropdown-item">Separated link</a>
</div></div>
  <div class="tab-pane" id="dividers_5d5fb96d7e92f_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dropdown</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">renderMenu</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'---'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Separated&nbsp;link'</span><span style="color: #007700">,<br />]);</span>
</span>
</code></pre></div>
</div><br/>

#### Text
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#headers)</small>

<ul class="nav nav-tabs" id="text_5d5fb96d7e9c1_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#text_5d5fb96d7e9c1_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#text_5d5fb96d7e9c1_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="text_5d5fb96d7e9c1_result" role="tabpanel"><br/><div class="dropdown-menu&#x20;p-4&#x20;text-muted" style="max-width&#x3A;&#x20;200px&#x3B;">
    <p>Some example text that's free-flowing within the dropdown menu.</p>
    <p class="mb-0">And this is more example text.</p>
</div></div>
  <div class="tab-pane" id="text_5d5fb96d7e9c1_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dropdown</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">renderMenu</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;p&gt;Some&nbsp;example&nbsp;text&nbsp;that\'s&nbsp;free-flowing&nbsp;within&nbsp;the&nbsp;dropdown&nbsp;menu.&lt;/p&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'&lt;p&nbsp;class="mb-0"&gt;And&nbsp;this&nbsp;is&nbsp;more&nbsp;example&nbsp;text.&lt;/p&gt;'</span><span style="color: #007700">,<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'p-4&nbsp;text-muted'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'style'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'max-width:&nbsp;200px;'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

#### Forms
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#forms)</small>

<ul class="nav nav-tabs" id="forms_5d5fb96d7ebae_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#forms_5d5fb96d7ebae_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#forms_5d5fb96d7ebae_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="forms_5d5fb96d7ebae_result" role="tabpanel"><br/><div class="dropdown-menu">
    <form method="POST" name="dropdown" id="dropdown" role="form">
        <div class="form-group">
            <label for="exampleDropdownFormEmail1">Email address</label>
            <input name="email" type="email" id="exampleDropdownFormEmail1" placeholder="email&#x40;example.com" class="form-control" value="">
        </div>
        <div class="form-group">
            <label for="exampleDropdownFormPassword1">Password</label>
            <input name="password" type="password" id="exampleDropdownFormPassword1" placeholder="Password" class="form-control" value="">
        </div>
        <div class="form-group">
            <div class="form-check">
                <input type="checkbox" name="remember_me" id="dropdownCheck" class="form-check-input" value="1">
                <label class="form-check-label" for="dropdownCheck">Remember me</label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">Sign in</button>
        </div>
    </form>
    <a href="&#x23;" class="dropdown-item">New around here? Sign up</a>
    <a href="&#x23;" class="dropdown-item">Forgot password?</a>
</div></div>
  <div class="tab-pane" id="forms_5d5fb96d7ebae_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Create&nbsp;form<br /></span><span style="color: #0000BB">$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$oForm&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Email&nbsp;address'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'exampleDropdownFormEmail1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email@example.com'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Password'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'exampleDropdownFormPassword1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'remember_me'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Remember&nbsp;me'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'use_hidden_element'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdownCheck'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Sign&nbsp;in'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;]);<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">dropdown</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">renderMenu</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$oForm</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'New&nbsp;around&nbsp;here?&nbsp;Sign&nbsp;up'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Forgot&nbsp;password?'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;]);</span>
</span>
</code></pre></div>
</div><br/>

### Dropdown options
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/dropdowns/#dropdown-options)</small>

<ul class="nav nav-tabs" id="dropdown--options_5d5fb96d7ed1b_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#dropdown--options_5d5fb96d7ed1b_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#dropdown--options_5d5fb96d7ed1b_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="dropdown--options_5d5fb96d7ed1b_result" role="tabpanel"><br/><div class="d-flex">
<div class="dropdown&#x20;mr-1">
    <button type="button" name="dropdown" id="dropdownMenuOffset" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-offset="10,20" class="btn&#x20;dropdown-toggle&#x20;btn-secondary" value="">Offset</button>
    <div aria-labelledby="dropdownMenuOffset" class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
    </div>
</div>
<div class="btn-group&#x20;dropdown">
    <button type="button" name="dropdown" id="dropdownMenuReference" class="btn&#x20;btn-secondary" value="">Reference</button>
    <button type="button" name="dropdown-toggle" data-reference="parent" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn&#x20;dropdown-toggle&#x20;btn-secondary" value=""><span class="sr-only">Reference</span></button>
    <div aria-labelledby="dropdownMenuReference" class="dropdown-menu">
        <a href="&#x23;" class="dropdown-item">Action</a>
        <a href="&#x23;" class="dropdown-item">Another action</a>
        <a href="&#x23;" class="dropdown-item">Something else here</a>
    </div>
</div>
</div></div>
  <div class="tab-pane" id="dropdown--options_5d5fb96d7ed1b_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;div&nbsp;class="d-flex"&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Offset'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mr-1'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'offset'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'10,20'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdownMenuOffset'</span><span style="color: #007700">],<br />])&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formButton</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdown'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Reference'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'dropdown'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'split'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'data-reference'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'parent'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'items'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Another&nbsp;action'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Something&nbsp;else&nbsp;here'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'dropdownMenuReference'</span><span style="color: #007700">],<br />]);<br /><br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;/div&gt;'</span><span style="color: #007700">;</span>
</span>
</code></pre></div>
</div><br/>

## Forms
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/)</small>

### Overview
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#overview)</small>

<ul class="nav nav-tabs" id="overview_5d5fb96d7ef5a_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#overview_5d5fb96d7ef5a_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#overview_5d5fb96d7ef5a_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="overview_5d5fb96d7ef5a_result" role="tabpanel"><br/><form method="POST" name="form" role="form" id="form">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input name="email" type="email" id="exampleInputEmail1" placeholder="Enter&#x20;email" class="form-control" value="">
        <small id="emailHelp" class="form-text&#x20;text-muted">We&#039;ll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" id="exampleInputPassword1" placeholder="Password" class="form-control" value="">
    </div>
    <div class="form-group">
        <div class="form-check">
            <input type="checkbox" name="remember_me" id="exampleCheck1" class="form-check-input" value="1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">Submit</button>
    </div>
</form></div>
  <div class="tab-pane" id="overview_5d5fb96d7ef5a_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Email&nbsp;address'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'help_block'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'content'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'We\'ll&nbsp;never&nbsp;share&nbsp;your&nbsp;email&nbsp;with&nbsp;anyone&nbsp;else.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'emailHelp'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'exampleInputEmail1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Enter&nbsp;email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Password'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'exampleInputPassword1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'remember_me'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Check&nbsp;me&nbsp;out'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'use_hidden_element'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'exampleCheck1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Submit'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]));</span>
</span>
</code></pre></div>
</div><br/>

### Form controls
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#form-controls)</small>

<ul class="nav nav-tabs" id="form--controls_5d5fb96d7f214_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#form--controls_5d5fb96d7f214_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#form--controls_5d5fb96d7f214_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="form--controls_5d5fb96d7f214_result" role="tabpanel"><br/><form method="POST" name="form" role="form" id="form">
    <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input name="email" type="email" id="exampleFormControlInput1" placeholder="name&#x40;example.com" class="form-control" value="">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label>
        <select name="select" id="exampleFormControlSelect1" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">Example multiple select</label>
        <select name="multiple_select&#x5B;&#x5D;" id="exampleFormControlSelect2" multiple="multiple" class="form-control">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea name="textarea" id="exampleFormControlTextarea1" rows="3" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Example file input</label>
        <input name="file_input" type="file" id="exampleFormControlFile1" class="form-control-file" value="">
    </div>
</form></div>
  <div class="tab-pane" id="form--controls_5d5fb96d7f214_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Email&nbsp;address'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'exampleFormControlInput1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'name@example.com'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Example&nbsp;select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">3&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">4&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">5&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">5</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'exampleFormControlSelect1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'multiple_select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Example&nbsp;multiple&nbsp;select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">3&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">4&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">5&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">5</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'exampleFormControlSelect2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'multiple'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'textarea'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Example&nbsp;textarea'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'textarea'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'exampleFormControlTextarea1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'rows'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'file_input'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Example&nbsp;file&nbsp;input'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'file'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'exampleFormControlFile1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

#### Sizing
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#sizing)</small>

<ul class="nav nav-tabs" id="sizing_5d5fb96d7f413_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#sizing_5d5fb96d7f413_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#sizing_5d5fb96d7f413_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="sizing_5d5fb96d7f413_result" role="tabpanel"><br/><input type="text" name="lg" placeholder=".form-control-lg" class="form-control&#x20;form-control-lg" value="">
<br>
<input type="text" name="default" placeholder="Default&#x20;input" class="form-control" value="">
<br>
<input type="text" name="sm" placeholder=".form-control-sm" class="form-control&#x20;form-control-sm" value="">
<br>
<select name="lg" class="form-control&#x20;form-control-lg"><option value="0">Large select</option></select>
<br>
<select name="default" class="form-control"><option value="0">Default select</option></select>
<br>
<select name="sm" class="form-control&#x20;form-control-sm"><option value="0">Small select</option></select>
<br>
</div>
  <div class="tab-pane" id="sizing_5d5fb96d7f413_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">//&nbsp;Render&nbsp;large&nbsp;input<br /></span><span style="color: #0000BB">$oElement&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'.form-control-lg'</span><span style="color: #007700">],<br />]);<br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$oElement</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Render&nbsp;default&nbsp;input<br /></span><span style="color: #0000BB">$oElement&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'default'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Default&nbsp;input'</span><span style="color: #007700">],<br />]);<br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$oElement</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Render&nbsp;small&nbsp;input<br /></span><span style="color: #0000BB">$oElement&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'.form-control-sm'</span><span style="color: #007700">],<br />]);<br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$oElement</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Render&nbsp;large&nbsp;select<br /></span><span style="color: #0000BB">$oElement&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Large&nbsp;select'</span><span style="color: #007700">]],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'.form-control-lg'</span><span style="color: #007700">],<br />]);<br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$oElement</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Render&nbsp;default&nbsp;select<br /></span><span style="color: #0000BB">$oElement&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'default'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Default&nbsp;select'</span><span style="color: #007700">]],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Default&nbsp;input'</span><span style="color: #007700">],<br />]);<br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$oElement</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Render&nbsp;small&nbsp;select<br /></span><span style="color: #0000BB">$oElement&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Small&nbsp;select'</span><span style="color: #007700">]],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'.form-control-sm'</span><span style="color: #007700">],<br />]);<br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$oElement</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;</span>
</span>
</code></pre></div>
</div><br/>

#### Readonly
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#readonly)</small>

<ul class="nav nav-tabs" id="readonly_5d5fb96d7f4c8_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#readonly_5d5fb96d7f4c8_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#readonly_5d5fb96d7f4c8_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="readonly_5d5fb96d7f4c8_result" role="tabpanel"><br/><input type="text" name="readonly-input" readonly="readonly" placeholder="Readonly&#x20;input&#x20;here..." class="form-control" value=""></div>
  <div class="tab-pane" id="readonly_5d5fb96d7f4c8_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Render&nbsp;element<br /></span><span style="color: #0000BB">$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$oElement&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'readonly-input'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'readonly'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Readonly&nbsp;input&nbsp;here...'</span><span style="color: #007700">],<br />]);<br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$oElement</span><span style="color: #007700">);</span>
</span>
</code></pre></div>
</div><br/>

#### Readonly plain text
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#readonly-plain-text)</small>

<ul class="nav nav-tabs" id="readonly--plain--text_5d5fb96d7f778_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#readonly--plain--text_5d5fb96d7f778_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#readonly--plain--text_5d5fb96d7f778_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="readonly--plain--text_5d5fb96d7f778_result" role="tabpanel"><br/><form method="POST" name="form" role="form" id="form">
    <div class="form-group&#x20;row">
        <label class="col-form-label&#x20;col-sm-2" for="staticEmail">Email</label>
        <div class="col-sm-10">
            <input name="email" type="email" id="staticEmail" readonly="readonly" class="form-control-plaintext" value="email&#x40;example.com">
        </div>
    </div>
    <div class="form-group&#x20;row">
        <label class="col-form-label&#x20;col-sm-2" for="inputPassword">Password</label>
        <div class="col-sm-10">
            <input name="password" type="password" id="inputPassword" placeholder="Password" class="form-control" value="">
        </div>
    </div>
</form>
<br>
<form method="POST" name="form" role="form" class="form-inline" id="form">
    <div class="form-group&#x20;mb-2">
        <label class="sr-only" for="staticEmail2">Email</label>
        <input name="email" type="email" id="staticEmail2" readonly="readonly" class="form-control-plaintext" value="email&#x40;example.com">
    </div>
    <div class="form-group&#x20;mb-2&#x20;mx-sm-3">
        <label class="sr-only" for="inputPassword2">Password</label>
        <input name="password" type="password" id="inputPassword2" placeholder="Password" class="form-control" value="">
    </div>
    <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">Confirm identity</button>
</form></div>
  <div class="tab-pane" id="readonly--plain--text_5d5fb96d7f778_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /></span><span style="color: #FF8000">//&nbsp;Render&nbsp;horizontal&nbsp;form<br /></span><span style="color: #0000BB">$oForm&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'layout'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;\</span><span style="color: #0000BB">TwbsHelper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">View</span><span style="color: #007700">\</span><span style="color: #0000BB">Helper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">::</span><span style="color: #0000BB">LAYOUT_HORIZONTAL</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'plaintext'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'staticEmail'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email@example.com'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'readonly'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inputPassword'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oForm</span><span style="color: #007700">);<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Render&nbsp;inline&nbsp;form<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'layout'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;\</span><span style="color: #0000BB">TwbsHelper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">View</span><span style="color: #007700">\</span><span style="color: #0000BB">Helper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">::</span><span style="color: #0000BB">LAYOUT_INLINE</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'plaintext'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'staticEmail2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email@example.com'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'readonly'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mx-sm-3&nbsp;mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inputPassword2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Confirm&nbsp;identity'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

### Range Inputs
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#range-inputs)</small>

<ul class="nav nav-tabs" id="range--inputs_5d5fb96d7f864_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#range--inputs_5d5fb96d7f864_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#range--inputs_5d5fb96d7f864_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="range--inputs_5d5fb96d7f864_result" role="tabpanel"><br/><form method="POST" name="form" role="form" id="form">
    <div class="form-group">
        <label for="formControlRange">Example Range input</label>
        <input name="range" type="range" id="formControlRange" class="form-control-range" value="">
    </div>
</form></div>
  <div class="tab-pane" id="range--inputs_5d5fb96d7f864_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'range'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Example&nbsp;Range&nbsp;input'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'range'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'formControlRange'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;]));</span>
</span>
</code></pre></div>
</div><br/>

### Checkboxes and radios
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#checkboxes-and-radios)</small>

#### Default (stacked)
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#default-stacked)</small>

<ul class="nav nav-tabs" id="default--stacked--_5d5fb96d7fa69_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#default--stacked--_5d5fb96d7fa69_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#default--stacked--_5d5fb96d7fa69_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="default--stacked--_5d5fb96d7fa69_result" role="tabpanel"><br/><div class="form-check">
    <input type="checkbox" name="default-checkbox" id="defaultCheck1" class="form-check-input" value="1">
    <label class="form-check-label" for="defaultCheck1">Default checkbox</label>
</div>
<div class="form-check">
    <input type="checkbox" name="disabled-checkbox" id="defaultCheck2" disabled="disabled" class="form-check-input" value="1">
    <label class="form-check-label" for="defaultCheck2">Disabled checkbox</label>
</div>
<br>
<div class="form-check">
    <input type="radio" name="exampleRadios" class="form-check-input" id="exampleRadios1" value="option1">
    <label class="form-check-label" for="exampleRadios1">Default radio</label>
</div>
<div class="form-check">
    <input type="radio" name="exampleRadios" class="form-check-input" id="exampleRadios2" value="option2">
    <label class="form-check-label" for="exampleRadios2">Second default radio</label>
</div>
<div class="form-check">
    <input type="radio" name="exampleRadios" class="form-check-input" id="exampleRadios3" value="option1" disabled="disabled">
    <label class="form-check-label" for="exampleRadios3">Disabled radio</label>
</div></div>
  <div class="tab-pane" id="default--stacked--_5d5fb96d7fa69_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">//&nbsp;Render&nbsp;Default&nbsp;checkbox<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'default-checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Default&nbsp;checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'use_hidden_element'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'defaultCheck1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]))&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Render&nbsp;Disabled&nbsp;checkbox<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'disabled-checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Disabled&nbsp;checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'use_hidden_element'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'defaultCheck2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'disabled'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Render&nbsp;radio<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'exampleRadios'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Default&nbsp;radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'option1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'exampleRadios1'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Second&nbsp;default&nbsp;radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'option2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'exampleRadios2'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Disabled&nbsp;radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'option1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'disabled'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'exampleRadios3'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

#### Inline
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#inline)</small>

<ul class="nav nav-tabs" id="inline_5d5fb96d7fc4f_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#inline_5d5fb96d7fc4f_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#inline_5d5fb96d7fc4f_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="inline_5d5fb96d7fc4f_result" role="tabpanel"><br/><div class="form-check&#x20;form-check-inline">
    <input type="checkbox" name="inlineCheckboxOptions&#x5B;&#x5D;" class="form-check-input" id="inlineCheckbox1" value="option1">
    <label class="form-check-label" for="inlineCheckbox1">1</label>
</div>
<div class="form-check&#x20;form-check-inline">
    <input type="checkbox" name="inlineCheckboxOptions&#x5B;&#x5D;" class="form-check-input" id="inlineCheckbox2" value="option2">
    <label class="form-check-label" for="inlineCheckbox2">2</label>
</div>
<div class="form-check&#x20;form-check-inline">
    <input type="checkbox" name="inlineCheckboxOptions&#x5B;&#x5D;" class="form-check-input" id="inlineCheckbox3" value="option3" disabled="disabled">
    <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
</div>
<br>
<div class="form-check&#x20;form-check-inline">
    <input type="radio" name="inlineRadioOptions" class="form-check-input" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">1</label>
</div>
<div class="form-check&#x20;form-check-inline">
    <input type="radio" name="inlineRadioOptions" class="form-check-input" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio2">2</label>
</div>
<div class="form-check&#x20;form-check-inline">
    <input type="radio" name="inlineRadioOptions" class="form-check-input" id="inlineRadio3" value="option3" disabled="disabled">
    <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
</div></div>
  <div class="tab-pane" id="inline_5d5fb96d7fc4f_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">//&nbsp;Render&nbsp;checkbox<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineCheckboxOptions'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'multicheckbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'layout'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inline'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'option1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineCheckbox1'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'option2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineCheckbox2'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'3&nbsp;(disabled)'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'option3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'disabled'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineCheckbox3'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Render&nbsp;radio<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineRadioOptions'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'layout'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inline'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'option1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineRadio1'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'option2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineRadio2'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'3&nbsp;(disabled)'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'option3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'disabled'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineRadio3'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

#### Without labels
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#without-labels)</small>

<ul class="nav nav-tabs" id="without--labels_5d5fb96d7fd92_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#without--labels_5d5fb96d7fd92_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#without--labels_5d5fb96d7fd92_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="without--labels_5d5fb96d7fd92_result" role="tabpanel"><br/><div class="form-check">
    <input type="checkbox" name="blankCheckbox&#x5B;&#x5D;" class="form-check-input&#x20;position-static" id="blankCheckbox" aria-label="..." value="option1">
</div>
<div class="form-check">
    <input type="radio" name="blankRadio" class="form-check-input&#x20;position-static" id="blankRadio1" aria-label="..." value="option1">
</div></div>
  <div class="tab-pane" id="without--labels_5d5fb96d7fd92_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">//&nbsp;Render&nbsp;checkbox<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'blankCheckbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'multicheckbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'option1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'blankCheckbox'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'aria-label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]))&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Render&nbsp;radio<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'blankRadio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'option1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'blankRadio1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'aria-label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'...'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

### Layout
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#layout)</small>

#### Form groups
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#form-groups)</small>

<ul class="nav nav-tabs" id="form--groups_5d5fb96d7ff04_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#form--groups_5d5fb96d7ff04_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#form--groups_5d5fb96d7ff04_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="form--groups_5d5fb96d7ff04_result" role="tabpanel"><br/><form method="POST" name="form" role="form" id="form">
    <div class="form-group">
        <label for="formGroupExampleInput">Example label</label>
        <input name="exampleInput" type="text" id="formGroupExampleInput" placeholder="Example&#x20;input" class="form-control" value="">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Another label</label>
        <input name="exampleInput2" type="text" id="formGroupExampleInput2" placeholder="Another&#x20;input" class="form-control" value="">
    </div>
</form></div>
  <div class="tab-pane" id="form--groups_5d5fb96d7ff04_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'exampleInput'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Example&nbsp;label'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'formGroupExampleInput'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Example&nbsp;input'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'exampleInput2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Another&nbsp;label'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'formGroupExampleInput2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Another&nbsp;input'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;]));</span>
</span>
</code></pre></div>
</div><br/>

#### Form grid
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#form-grid)</small>

<ul class="nav nav-tabs" id="form--grid_5d5fb96d80023_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#form--grid_5d5fb96d80023_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#form--grid_5d5fb96d80023_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="form--grid_5d5fb96d80023_result" role="tabpanel"><br/><form method="POST" name="form" role="form" id="form">
    <div class="row">
        <div class="col">
            <input name="firstName" type="text" placeholder="First&#x20;name" class="form-control" value="">
        </div>
        <div class="col">
            <input name="lastName" type="text" placeholder="Last&#x20;name" class="form-control" value="">
        </div>
    </div>
</form></div>
  <div class="tab-pane" id="form--grid_5d5fb96d80023_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'firstName'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'First&nbsp;name'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lastName'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Last&nbsp;name'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;]));</span>
</span>
</code></pre></div>
</div><br/>

##### Form row
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#form-row)</small>

<ul class="nav nav-tabs" id="form--row_5d5fb96d8014b_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#form--row_5d5fb96d8014b_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#form--row_5d5fb96d8014b_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="form--row_5d5fb96d8014b_result" role="tabpanel"><br/><form method="POST" name="form" role="form" id="form">
    <div class="form-row">
        <div class="col">
            <input name="firstName" type="text" placeholder="First&#x20;name" class="form-control" value="">
        </div>
        <div class="col">
            <input name="lastName" type="text" placeholder="Last&#x20;name" class="form-control" value="">
        </div>
    </div>
</form></div>
  <div class="tab-pane" id="form--row_5d5fb96d8014b_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form-row'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'firstName'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'First&nbsp;name'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lastName'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Last&nbsp;name'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;]));</span>
</span>
</code></pre></div>
</div><br/>

##### Horizontal form
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#horizontal-form)</small>

<ul class="nav nav-tabs" id="horizontal--form_5d5fb96d8046c_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#horizontal--form_5d5fb96d8046c_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#horizontal--form_5d5fb96d8046c_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="horizontal--form_5d5fb96d8046c_result" role="tabpanel"><br/><form method="POST" name="form" role="form" id="form">
    <div class="form-group&#x20;row">
        <label class="col-form-label&#x20;col-sm-2" for="inputEmail3">Email</label>
        <div class="col-sm-10">
            <input name="email" type="email" id="inputEmail3" placeholder="Email" class="form-control" value="">
        </div>
    </div>
    <div class="form-group&#x20;row">
        <label class="col-form-label&#x20;col-sm-2" for="inputPassword3">Password</label>
        <div class="col-sm-10">
            <input name="password" type="password" id="inputPassword3" placeholder="Password" class="form-control" value="">
        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label&#x20;col-sm-2&#x20;pt-0">Radios</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" class="form-check-input" id="gridRadios1" value="option1">
                    <label class="form-check-label" for="gridRadios1">First radio</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" class="form-check-input" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">Second radio</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" class="form-check-input" id="gridRadios3" value="option3" disabled="disabled">
                    <label class="form-check-label" for="gridRadios3">Third disabled radio</label>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="form-group&#x20;row">
        <div class="col-sm-2">
            Checkbox
        </div>
        <div class="col-sm-10">
            <div class="form-check">
                <input type="checkbox" name="multicheckbox&#x5B;&#x5D;" class="form-check-input" id="gridCheck1" value="1">
                <label class="form-check-label" for="gridCheck1">Example checkbox</label>
            </div>
        </div>
    </div>
    <div class="form-group&#x20;row">
        <div class="col-sm-10">
            <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">Sign in</button>
        </div>
    </div>
</form></div>
  <div class="tab-pane" id="horizontal--form_5d5fb96d8046c_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'layout'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;\</span><span style="color: #0000BB">TwbsHelper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">View</span><span style="color: #007700">\</span><span style="color: #0000BB">Helper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">::</span><span style="color: #0000BB">LAYOUT_HORIZONTAL</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inputEmail3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inputPassword3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'fieldset'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Radios'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label_attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'pt-0'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'gridRadios'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'First&nbsp;radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'gridRadios1'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'option1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Second&nbsp;radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'gridRadios2'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'option2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Third&nbsp;disabled&nbsp;radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'disabled'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'gridRadios3'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'option3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'multicheckbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Example&nbsp;checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'gridCheck1'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Sign&nbsp;in'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;]));</span>
</span>
</code></pre></div>
</div><br/>

###### Horizontal form label sizing
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#horizontal-form-label-sizing)</small>

<ul class="nav nav-tabs" id="horizontal--form--label--sizing_5d5fb96d80651_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#horizontal--form--label--sizing_5d5fb96d80651_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#horizontal--form--label--sizing_5d5fb96d80651_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="horizontal--form--label--sizing_5d5fb96d80651_result" role="tabpanel"><br/><form method="POST" name="form" role="form" id="form">
    <div class="form-group&#x20;row">
        <label class="col-form-label&#x20;col-form-label-sm&#x20;col-sm-2" for="colFormLabelSm">Email</label>
        <div class="col-sm-10">
            <input name="emailSm" type="email" id="colFormLabelSm" placeholder="col-form-label-sm" class="form-control&#x20;form-control-sm" value="">
        </div>
    </div>
    <div class="form-group&#x20;row">
        <label class="col-form-label&#x20;col-sm-2" for="colFormLabel">Email</label>
        <div class="col-sm-10">
            <input name="email" type="email" id="colFormLabel" placeholder="col-form-label" class="form-control" value="">
        </div>
    </div>
    <div class="form-group&#x20;row">
        <label class="col-form-label&#x20;col-form-label-lg&#x20;col-sm-2" for="colFormLabelLg">Email</label>
        <div class="col-sm-10">
            <input name="emailLg" type="email" id="colFormLabelLg" placeholder="col-form-label-lg" class="form-control&#x20;form-control-lg" value="">
        </div>
    </div>
</form></div>
  <div class="tab-pane" id="horizontal--form--label--sizing_5d5fb96d80651_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'layout'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;\</span><span style="color: #0000BB">TwbsHelper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">View</span><span style="color: #007700">\</span><span style="color: #0000BB">Helper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">::</span><span style="color: #0000BB">LAYOUT_HORIZONTAL</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'emailSm'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'colFormLabelSm'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'col-form-label-sm'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'colFormLabel'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'col-form-label'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'emailLg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'colFormLabelLg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'col-form-label-lg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

##### Column sizing
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#column-sizing)</small>

<ul class="nav nav-tabs" id="column--sizing_5d5fb96d807dc_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#column--sizing_5d5fb96d807dc_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#column--sizing_5d5fb96d807dc_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="column--sizing_5d5fb96d807dc_result" role="tabpanel"><br/><form method="POST" name="form" role="form" id="form">
    <div class="form-row">
        <div class="col-7">
            <input name="city" type="text" placeholder="City" class="form-control" value="">
        </div>
        <div class="col">
            <input name="state" type="text" placeholder="State" class="form-control" value="">
        </div>
        <div class="col">
            <input name="zip" type="text" placeholder="Zip" class="form-control" value="">
        </div>
    </div>
</form></div>
  <div class="tab-pane" id="column--sizing_5d5fb96d807dc_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form-row'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'city'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">7</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'City'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'state'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'State'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'zip'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Zip'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;]));</span>
</span>
</code></pre></div>
</div><br/>

##### Auto-sizing
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#auto-sizing)</small>

<ul class="nav nav-tabs" id="auto--sizing_5d5fb96d80e3c_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#auto--sizing_5d5fb96d80e3c_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#auto--sizing_5d5fb96d80e3c_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="auto--sizing_5d5fb96d80e3c_result" role="tabpanel"><br/><form method="POST" name="form" role="form" id="form">
    <div class="align-items-center&#x20;form-row">
        <div class="col-auto">
            <label class="sr-only" for="inlineFormInput">Name</label>
            <input name="name" type="text" id="inlineFormInput" placeholder="Jane&#x20;Doe" class="form-control&#x20;mb-2" value="">
        </div>
        <div class="col-auto">
            <label class="sr-only" for="inlineFormInputGroup">Username</label>
            <div class="input-group&#x20;mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        @
                    </div>
                </div>
                <input name="username" type="text" id="inlineFormInputGroup" placeholder="Username" class="form-control" value="">
            </div>
        </div>
        <div class="col-auto">
            <div class="form-check&#x20;mb-2">
                <input type="checkbox" name="remember_me" id="autoSizingCheck" class="form-check-input" value="1">
                <label class="form-check-label" for="autoSizingCheck">Remember me</label>
            </div>
        </div>
        <div class="col-auto">
            <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">Submit</button>
        </div>
    </div>
</form>
<br>
<form method="POST" name="form" role="form" id="form">
    <div class="align-items-center&#x20;form-row">
        <div class="col-sm-3&#x20;my-1">
            <label class="sr-only" for="inlineFormInput">Name</label>
            <input name="name" type="text" id="inlineFormInput" placeholder="Jane&#x20;Doe" class="form-control&#x20;mb-2" value="">
        </div>
        <div class="col-sm-3&#x20;my-1">
            <label class="sr-only" for="inlineFormInputGroup">Username</label>
            <div class="input-group&#x20;mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        @
                    </div>
                </div>
                <input name="username" type="text" id="inlineFormInputGroup" placeholder="Username" class="form-control" value="">
            </div>
        </div>
        <div class="col-auto&#x20;my-1">
            <div class="form-check&#x20;mb-2">
                <input type="checkbox" name="remember_me" id="autoSizingCheck" class="form-check-input" value="1">
                <label class="form-check-label" for="autoSizingCheck">Remember me</label>
            </div>
        </div>
        <div class="col-auto&#x20;my-1">
            <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">Submit</button>
        </div>
    </div>
</form>
<br>
<form method="POST" name="form" role="form" id="form">
    <div class="align-items-center&#x20;form-row">
        <div class="col-sm-3&#x20;my-1">
            <label class="mr-sm-2&#x20;sr-only" for="inlineFormCustomSelect">Preference</label>
            <select name="preference" id="inlineFormCustomSelect" class="custom-select&#x20;mr-sm-2">
                <option value="">Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-auto&#x20;my-1">
            <div class="custom-checkbox&#x20;custom-control&#x20;mr-sm-2">
                <input type="checkbox" name="remember_my_preference" id="customControlAutosizing" class="custom-control-input" value="1">
                <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
            </div>
        </div>
        <div class="col-auto&#x20;my-1">
            <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">Submit</button>
        </div>
    </div>
</form></div>
  <div class="tab-pane" id="auto--sizing_5d5fb96d80e3c_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'align-items-center&nbsp;form-row'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Name'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'show_label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'auto'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineFormInput'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Jane&nbsp;Doe'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'username'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'show_label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'auto'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'add_on_prepend'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'@'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'input_group_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineFormInputGroup'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'remember_me'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Remember&nbsp;me'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'use_hidden_element'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'auto'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_check_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'autoSizingCheck'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'auto'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Remix&nbsp;that&nbsp;once&nbsp;again&nbsp;with&nbsp;size-specific&nbsp;column&nbsp;classes.<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'align-items-center&nbsp;form-row'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Name'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'show_label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'my-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineFormInput'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Jane&nbsp;Doe'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'username'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'show_label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'my-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'add_on_prepend'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'@'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'input_group_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineFormInputGroup'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'remember_me'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Remember&nbsp;me'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'use_hidden_element'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'auto'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'my-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_check_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'autoSizingCheck'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'auto'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'my-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;And&nbsp;of&nbsp;course&nbsp;custom&nbsp;form&nbsp;controls&nbsp;are&nbsp;supported.<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'align-items-center&nbsp;form-row'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'preference'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Preference'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'show_label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label_attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mr-sm-2'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'my-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'empty_option'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Choose...'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'One'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Two'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">3&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Three'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineFormCustomSelect'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mr-sm-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'remember_my_preference'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Remember&nbsp;my&nbsp;preference'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'use_hidden_element'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'auto'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'my-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_check_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mr-sm-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'customControlAutosizing'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'auto'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'my-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

#### Inline forms
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#inline-forms)</small>

<ul class="nav nav-tabs" id="inline--forms_5d5fb96d8125d_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#inline--forms_5d5fb96d8125d_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#inline--forms_5d5fb96d8125d_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="inline--forms_5d5fb96d8125d_result" role="tabpanel"><br/><form method="POST" name="form" role="form" class="form-inline" id="form">
    <label class="sr-only" for="inlineFormInputName2">Name</label>
    <input name="name" type="text" id="inlineFormInputName2" placeholder="Jane&#x20;Doe" class="form-control&#x20;mb-2&#x20;mr-sm-2" value="">
    <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
    <div class="input-group&#x20;mb-2&#x20;mr-sm-2">
        <div class="input-group-prepend">
            <div class="input-group-text">
                @
            </div>
        </div>
        <input name="username" type="text" id="inlineFormInputGroupUsername2" placeholder="Username" class="form-control" value="">
    </div>
    <div class="form-check&#x20;mb-2&#x20;mr-sm-2">
        <input type="checkbox" name="remember_me" id="inlineFormCheck" class="form-check-input" value="1">
        <label class="form-check-label" for="inlineFormCheck">Remember me</label>
    </div>
    <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">Submit</button>
</form>
<br>
<form method="POST" name="form" role="form" class="form-inline" id="form">
    <label class="mr-2&#x20;my-1" for="inlineFormCustomSelectPref">Preference</label>
    <select name="preference" id="inlineFormCustomSelectPref" class="custom-select&#x20;mr-sm-2&#x20;my-1">
        <option value="">Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <div class="custom-checkbox&#x20;custom-control&#x20;mr-sm-2&#x20;my-1">
        <input type="checkbox" name="remember_my_preference" id="customControlInline" class="custom-control-input" value="1">
        <label class="custom-control-label" for="customControlInline">Remember my preference</label>
    </div>
    <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">Submit</button>
</form></div>
  <div class="tab-pane" id="inline--forms_5d5fb96d8125d_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'layout'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;\</span><span style="color: #0000BB">TwbsHelper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">View</span><span style="color: #007700">\</span><span style="color: #0000BB">Helper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">::</span><span style="color: #0000BB">LAYOUT_INLINE</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Name'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineFormInputName2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Jane&nbsp;Doe'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2&nbsp;mr-sm-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'username'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'show_label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'add_on_prepend'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'@'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'input_group_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2&nbsp;mr-sm-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineFormInputGroupUsername2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'remember_me'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Remember&nbsp;me'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'use_hidden_element'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_check_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2&nbsp;mr-sm-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineFormCheck'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Custom&nbsp;form&nbsp;controls&nbsp;and&nbsp;selects&nbsp;are&nbsp;also&nbsp;supported<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'layout'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;\</span><span style="color: #0000BB">TwbsHelper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">View</span><span style="color: #007700">\</span><span style="color: #0000BB">Helper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">::</span><span style="color: #0000BB">LAYOUT_INLINE</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'preference'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Preference'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'show_label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label_attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mr-2&nbsp;my-1'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'my-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'empty_option'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Choose...'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'One'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Two'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">3&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Three'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineFormCustomSelectPref'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mr-sm-2&nbsp;my-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'remember_my_preference'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Remember&nbsp;my&nbsp;preference'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'use_hidden_element'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_check_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mr-sm-2&nbsp;my-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'customControlInline'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

##### Form row
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#form-row)</small>

<ul class="nav nav-tabs" id="form--row_5d5fb96d813a4_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#form--row_5d5fb96d813a4_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#form--row_5d5fb96d813a4_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="form--row_5d5fb96d813a4_result" role="tabpanel"><br/><form method="POST" name="form" role="form" id="form">
    <div class="form-row">
        <div class="col">
            <input name="firstName" type="text" placeholder="First&#x20;name" class="form-control" value="">
        </div>
        <div class="col">
            <input name="lastName" type="text" placeholder="Last&#x20;name" class="form-control" value="">
        </div>
    </div>
</form></div>
  <div class="tab-pane" id="form--row_5d5fb96d813a4_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form-row'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'firstName'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'First&nbsp;name'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lastName'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Last&nbsp;name'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;]));</span>
</span>
</code></pre></div>
</div><br/>

##### Horizontal form
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#horizontal-form)</small>

<ul class="nav nav-tabs" id="horizontal--form_5d5fb96d816c4_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#horizontal--form_5d5fb96d816c4_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#horizontal--form_5d5fb96d816c4_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="horizontal--form_5d5fb96d816c4_result" role="tabpanel"><br/><form method="POST" name="form" role="form" id="form">
    <div class="form-group&#x20;row">
        <label class="col-form-label&#x20;col-sm-2" for="inputEmail3">Email</label>
        <div class="col-sm-10">
            <input name="email" type="email" id="inputEmail3" placeholder="Email" class="form-control" value="">
        </div>
    </div>
    <div class="form-group&#x20;row">
        <label class="col-form-label&#x20;col-sm-2" for="inputPassword3">Password</label>
        <div class="col-sm-10">
            <input name="password" type="password" id="inputPassword3" placeholder="Password" class="form-control" value="">
        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label&#x20;col-sm-2&#x20;pt-0">Radios</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" class="form-check-input" id="gridRadios1" value="option1">
                    <label class="form-check-label" for="gridRadios1">First radio</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" class="form-check-input" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">Second radio</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="fieldset&#x5B;gridRadios&#x5D;" class="form-check-input" id="gridRadios3" value="option3" disabled="disabled">
                    <label class="form-check-label" for="gridRadios3">Third disabled radio</label>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="form-group&#x20;row">
        <div class="col-sm-2">
            Checkbox
        </div>
        <div class="col-sm-10">
            <div class="form-check">
                <input type="checkbox" name="multicheckbox&#x5B;&#x5D;" class="form-check-input" id="gridCheck1" value="1">
                <label class="form-check-label" for="gridCheck1">Example checkbox</label>
            </div>
        </div>
    </div>
    <div class="form-group&#x20;row">
        <div class="col-sm-10">
            <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">Sign in</button>
        </div>
    </div>
</form></div>
  <div class="tab-pane" id="horizontal--form_5d5fb96d816c4_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'layout'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;\</span><span style="color: #0000BB">TwbsHelper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">View</span><span style="color: #007700">\</span><span style="color: #0000BB">Helper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">::</span><span style="color: #0000BB">LAYOUT_HORIZONTAL</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inputEmail3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inputPassword3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'fieldset'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Radios'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label_attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'pt-0'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'gridRadios'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'First&nbsp;radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'gridRadios1'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'option1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Second&nbsp;radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'gridRadios2'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'option2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Third&nbsp;disabled&nbsp;radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'disabled'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'gridRadios3'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'option3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'multicheckbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Example&nbsp;checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'gridCheck1'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Sign&nbsp;in'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;]));</span>
</span>
</code></pre></div>
</div><br/>

###### Horizontal form label sizing
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#horizontal-form-label-sizing)</small>

<ul class="nav nav-tabs" id="horizontal--form--label--sizing_5d5fb96d8189a_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#horizontal--form--label--sizing_5d5fb96d8189a_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#horizontal--form--label--sizing_5d5fb96d8189a_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="horizontal--form--label--sizing_5d5fb96d8189a_result" role="tabpanel"><br/><form method="POST" name="form" role="form" id="form">
    <div class="form-group&#x20;row">
        <label class="col-form-label&#x20;col-form-label-sm&#x20;col-sm-2" for="colFormLabelSm">Email</label>
        <div class="col-sm-10">
            <input name="emailSm" type="email" id="colFormLabelSm" placeholder="col-form-label-sm" class="form-control&#x20;form-control-sm" value="">
        </div>
    </div>
    <div class="form-group&#x20;row">
        <label class="col-form-label&#x20;col-sm-2" for="colFormLabel">Email</label>
        <div class="col-sm-10">
            <input name="email" type="email" id="colFormLabel" placeholder="col-form-label" class="form-control" value="">
        </div>
    </div>
    <div class="form-group&#x20;row">
        <label class="col-form-label&#x20;col-form-label-lg&#x20;col-sm-2" for="colFormLabelLg">Email</label>
        <div class="col-sm-10">
            <input name="emailLg" type="email" id="colFormLabelLg" placeholder="col-form-label-lg" class="form-control&#x20;form-control-lg" value="">
        </div>
    </div>
</form></div>
  <div class="tab-pane" id="horizontal--form--label--sizing_5d5fb96d8189a_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'layout'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;\</span><span style="color: #0000BB">TwbsHelper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">View</span><span style="color: #007700">\</span><span style="color: #0000BB">Helper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">::</span><span style="color: #0000BB">LAYOUT_HORIZONTAL</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'emailSm'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'colFormLabelSm'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'col-form-label-sm'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'colFormLabel'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'col-form-label'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'emailLg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-10'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'email'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'colFormLabelLg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'col-form-label-lg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

##### Column sizing
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#column-sizing)</small>

<ul class="nav nav-tabs" id="column--sizing_5d5fb96d81a26_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#column--sizing_5d5fb96d81a26_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#column--sizing_5d5fb96d81a26_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="column--sizing_5d5fb96d81a26_result" role="tabpanel"><br/><form method="POST" name="form" role="form" id="form">
    <div class="form-row">
        <div class="col-7">
            <input name="city" type="text" placeholder="City" class="form-control" value="">
        </div>
        <div class="col">
            <input name="state" type="text" placeholder="State" class="form-control" value="">
        </div>
        <div class="col">
            <input name="zip" type="text" placeholder="Zip" class="form-control" value="">
        </div>
    </div>
</form></div>
  <div class="tab-pane" id="column--sizing_5d5fb96d81a26_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form-row'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'city'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">7</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'City'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'state'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'State'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'zip'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Zip'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;]));</span>
</span>
</code></pre></div>
</div><br/>

##### Auto-sizing
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#auto-sizing)</small>

<ul class="nav nav-tabs" id="auto--sizing_5d5fb96d82075_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#auto--sizing_5d5fb96d82075_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#auto--sizing_5d5fb96d82075_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="auto--sizing_5d5fb96d82075_result" role="tabpanel"><br/><form method="POST" name="form" role="form" id="form">
    <div class="align-items-center&#x20;form-row">
        <div class="col-auto">
            <label class="sr-only" for="inlineFormInput">Name</label>
            <input name="name" type="text" id="inlineFormInput" placeholder="Jane&#x20;Doe" class="form-control&#x20;mb-2" value="">
        </div>
        <div class="col-auto">
            <label class="sr-only" for="inlineFormInputGroup">Username</label>
            <div class="input-group&#x20;mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        @
                    </div>
                </div>
                <input name="username" type="text" id="inlineFormInputGroup" placeholder="Username" class="form-control" value="">
            </div>
        </div>
        <div class="col-auto">
            <div class="form-check&#x20;mb-2">
                <input type="checkbox" name="remember_me" id="autoSizingCheck" class="form-check-input" value="1">
                <label class="form-check-label" for="autoSizingCheck">Remember me</label>
            </div>
        </div>
        <div class="col-auto">
            <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">Submit</button>
        </div>
    </div>
</form>
<br>
<form method="POST" name="form" role="form" id="form">
    <div class="align-items-center&#x20;form-row">
        <div class="col-sm-3&#x20;my-1">
            <label class="sr-only" for="inlineFormInput">Name</label>
            <input name="name" type="text" id="inlineFormInput" placeholder="Jane&#x20;Doe" class="form-control&#x20;mb-2" value="">
        </div>
        <div class="col-sm-3&#x20;my-1">
            <label class="sr-only" for="inlineFormInputGroup">Username</label>
            <div class="input-group&#x20;mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        @
                    </div>
                </div>
                <input name="username" type="text" id="inlineFormInputGroup" placeholder="Username" class="form-control" value="">
            </div>
        </div>
        <div class="col-auto&#x20;my-1">
            <div class="form-check&#x20;mb-2">
                <input type="checkbox" name="remember_me" id="autoSizingCheck" class="form-check-input" value="1">
                <label class="form-check-label" for="autoSizingCheck">Remember me</label>
            </div>
        </div>
        <div class="col-auto&#x20;my-1">
            <button type="submit" name="submit" class="btn&#x20;btn-primary&#x20;mb-2" value="">Submit</button>
        </div>
    </div>
</form>
<br>
<form method="POST" name="form" role="form" id="form">
    <div class="align-items-center&#x20;form-row">
        <div class="col-sm-3&#x20;my-1">
            <label class="mr-sm-2&#x20;sr-only" for="inlineFormCustomSelect">Preference</label>
            <select name="preference" id="inlineFormCustomSelect" class="custom-select&#x20;mr-sm-2">
                <option value="">Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-auto&#x20;my-1">
            <div class="custom-checkbox&#x20;custom-control&#x20;mr-sm-2">
                <input type="checkbox" name="remember_my_preference" id="customControlAutosizing" class="custom-control-input" value="1">
                <label class="custom-control-label" for="customControlAutosizing">Remember my preference</label>
            </div>
        </div>
        <div class="col-auto&#x20;my-1">
            <button type="submit" name="submit" class="btn&#x20;btn-primary" value="">Submit</button>
        </div>
    </div>
</form></div>
  <div class="tab-pane" id="auto--sizing_5d5fb96d82075_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'align-items-center&nbsp;form-row'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Name'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'show_label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'auto'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineFormInput'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Jane&nbsp;Doe'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'username'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'show_label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'auto'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'add_on_prepend'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'@'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'input_group_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineFormInputGroup'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'remember_me'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Remember&nbsp;me'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'use_hidden_element'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'auto'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_check_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'autoSizingCheck'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'auto'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Remix&nbsp;that&nbsp;once&nbsp;again&nbsp;with&nbsp;size-specific&nbsp;column&nbsp;classes.<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'align-items-center&nbsp;form-row'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'name'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Name'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'show_label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'my-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineFormInput'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Jane&nbsp;Doe'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'username'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'show_label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'my-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'add_on_prepend'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'@'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'input_group_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineFormInputGroup'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'placeholder'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Username'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'remember_me'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Remember&nbsp;me'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'use_hidden_element'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'auto'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'my-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_check_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'autoSizingCheck'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'auto'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'my-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;And&nbsp;of&nbsp;course&nbsp;custom&nbsp;form&nbsp;controls&nbsp;are&nbsp;supported.<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'align-items-center&nbsp;form-row'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'preference'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Preference'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'show_label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label_attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mr-sm-2'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm-3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'my-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'empty_option'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Choose...'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'One'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Two'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">3&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Three'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inlineFormCustomSelect'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mr-sm-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'remember_my_preference'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Remember&nbsp;my&nbsp;preference'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'use_hidden_element'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'auto'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'my-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_check_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mr-sm-2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'customControlAutosizing'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Submit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'variant'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'primary'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'column'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'auto'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'row_class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'my-1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

### Help text
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#help-text)</small>

<ul class="nav nav-tabs" id="help--text_5d5fb96d8228d_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#help--text_5d5fb96d8228d_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#help--text_5d5fb96d8228d_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="help--text_5d5fb96d8228d_result" role="tabpanel"><br/><label for="inputPassword5">Password</label>
<input name="password" id="inputPassword5" type="password" aria-describedby="passwordHelpBlock" class="form-control" value="">
<small id="passwordHelpBlock" class="form-text&#x20;text-muted">Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.</small>
<br>
<form method="POST" name="form" role="form" class="form-inline" id="form">
    <div class="form-group">
        <label for="inputPassword6">Password</label>
        <input name="password" id="inputPassword6" type="password" aria-describedby="passwordHelpInline" class="form-control&#x20;mx-sm-3" value="">
        <small id="passwordHelpInline" class="text-muted">Must be 8-20 characters long.</small>
    </div>
</form></div>
  <div class="tab-pane" id="help--text_5d5fb96d8228d_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'help_block'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'content'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Your&nbsp;password&nbsp;must&nbsp;be&nbsp;8-20&nbsp;characters&nbsp;long,&nbsp;contain&nbsp;letters&nbsp;and&nbsp;numbers,&nbsp;'&nbsp;</span><span style="color: #007700">.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'and&nbsp;must&nbsp;not&nbsp;contain&nbsp;spaces,&nbsp;special&nbsp;characters,&nbsp;or&nbsp;emoji.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'passwordHelpBlock'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inputPassword5'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'aria-describedby'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'passwordHelpBlock'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;]));<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Inline&nbsp;text&nbsp;can&nbsp;use&nbsp;any&nbsp;typical&nbsp;inline&nbsp;HTML&nbsp;element<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;(be&nbsp;it&nbsp;a&nbsp;&lt;small&gt;,&nbsp;&lt;span&gt;,&nbsp;or&nbsp;something&nbsp;else)<br />&nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;with&nbsp;nothing&nbsp;more&nbsp;than&nbsp;a&nbsp;utility&nbsp;class<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">form</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'form'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'layout'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;\</span><span style="color: #0000BB">TwbsHelper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">View</span><span style="color: #007700">\</span><span style="color: #0000BB">Helper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">::</span><span style="color: #0000BB">LAYOUT_INLINE</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'elements'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'spec'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'show_label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'help_block'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'content'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Must&nbsp;be&nbsp;8-20&nbsp;characters&nbsp;long.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'passwordHelpInline'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'inputPassword6'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'password'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'aria-describedby'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'passwordHelpInline'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mx-sm-3'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;]));</span>
</span>
</code></pre></div>
</div><br/>

### Custom forms
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#custom-forms)</small>

#### Checkboxes and radios
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#checkboxes-and-radios-1)</small>

##### Checkboxes
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#checkboxes)</small>

<ul class="nav nav-tabs" id="checkboxes_5d5fb96d823a8_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#checkboxes_5d5fb96d823a8_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#checkboxes_5d5fb96d823a8_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="checkboxes_5d5fb96d823a8_result" role="tabpanel"><br/><div class="custom-checkbox&#x20;custom-control">
    <input type="checkbox" name="custom_checkbox" id="customCheck1" class="custom-control-input" value="1">
    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
</div></div>
  <div class="tab-pane" id="checkboxes_5d5fb96d823a8_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'custom_checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Check&nbsp;this&nbsp;custom&nbsp;checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'use_hidden_element'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'customCheck1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

##### Radios
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#checkboxes)</small>

<ul class="nav nav-tabs" id="radios_5d5fb96d8249b_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#radios_5d5fb96d8249b_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#radios_5d5fb96d8249b_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="radios_5d5fb96d8249b_result" role="tabpanel"><br/><div class="custom-control&#x20;custom-radio">
    <input type="radio" name="customRadio" class="custom-control-input" id="customRadio1" value="1">
    <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
</div>
<div class="custom-control&#x20;custom-radio">
    <input type="radio" name="customRadio" class="custom-control-input" id="customRadio2" value="2">
    <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
</div></div>
  <div class="tab-pane" id="radios_5d5fb96d8249b_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'customRadio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Toggle&nbsp;this&nbsp;custom&nbsp;radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'customRadio1'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Or&nbsp;toggle&nbsp;this&nbsp;other&nbsp;custom&nbsp;radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'customRadio2'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

##### Inline
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#inline-1)</small>

<ul class="nav nav-tabs" id="inline_5d5fb96d82595_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#inline_5d5fb96d82595_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#inline_5d5fb96d82595_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="inline_5d5fb96d82595_result" role="tabpanel"><br/><div class="custom-control&#x20;custom-control-inline&#x20;custom-radio">
    <input type="radio" name="customRadioInline1" class="custom-control-input" id="customRadioInline1" value="1">
    <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
</div>
<div class="custom-control&#x20;custom-control-inline&#x20;custom-radio">
    <input type="radio" name="customRadioInline1" class="custom-control-input" id="customRadioInline2" value="2">
    <label class="custom-control-label" for="customRadioInline2">Or toggle this other custom radio</label>
</div></div>
  <div class="tab-pane" id="inline_5d5fb96d82595_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'customRadioInline1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'layout'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;\</span><span style="color: #0000BB">TwbsHelper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">View</span><span style="color: #007700">\</span><span style="color: #0000BB">Helper</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">::</span><span style="color: #0000BB">LAYOUT_INLINE</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Toggle&nbsp;this&nbsp;custom&nbsp;radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'customRadioInline1'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Or&nbsp;toggle&nbsp;this&nbsp;other&nbsp;custom&nbsp;radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'customRadioInline2'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

##### Disabled
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#disabled)</small>

<ul class="nav nav-tabs" id="disabled_5d5fb96d826cc_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#disabled_5d5fb96d826cc_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#disabled_5d5fb96d826cc_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="disabled_5d5fb96d826cc_result" role="tabpanel"><br/><div class="custom-checkbox&#x20;custom-control">
    <input type="checkbox" name="custom_checkbox_disabled" id="customCheckDisabled1" disabled="disabled" class="custom-control-input" value="1">
    <label class="custom-control-label" for="customCheckDisabled1">Check this custom checkbox</label>
</div>
<div class="custom-control&#x20;custom-radio">
    <input type="radio" name="radioDisabled" disabled="disabled" class="custom-control-input" id="customRadioDisabled2" value="1">
    <label class="custom-control-label" for="customRadioDisabled2">Toggle this custom radio</label>
</div></div>
  <div class="tab-pane" id="disabled_5d5fb96d826cc_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'custom_checkbox_disabled'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Check&nbsp;this&nbsp;custom&nbsp;checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'use_hidden_element'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'customCheckDisabled1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'disabled'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]))&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'radioDisabled'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Toggle&nbsp;this&nbsp;custom&nbsp;radio'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'customRadioDisabled2'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'disabled'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

#### Switches
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#switches)</small>

<ul class="nav nav-tabs" id="switches_5d5fb96d827f9_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#switches_5d5fb96d827f9_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#switches_5d5fb96d827f9_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="switches_5d5fb96d827f9_result" role="tabpanel"><br/><div class="custom-control&#x20;custom-switch">
    <input type="checkbox" name="custom_switch" id="customSwitch1" class="custom-control-input" value="1">
    <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
</div>
<div class="custom-control&#x20;custom-switch">
    <input type="checkbox" name="custom_switch" id="customSwitch2" disabled="disabled" class="custom-control-input" value="1">
    <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
</div></div>
  <div class="tab-pane" id="switches_5d5fb96d827f9_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'custom_switch'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Toggle&nbsp;this&nbsp;switch&nbsp;element'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'use_hidden_element'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'switch'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'customSwitch1'</span><span style="color: #007700">],<br />]))&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'custom_switch'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'checkbox'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Disabled&nbsp;switch&nbsp;element'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'use_hidden_element'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'switch'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'customSwitch2'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'disabled'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

#### Select menu
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#select-menu)</small>

<ul class="nav nav-tabs" id="select--menu_5d5fb96d82ac4_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#select--menu_5d5fb96d82ac4_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#select--menu_5d5fb96d82ac4_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="select--menu_5d5fb96d82ac4_result" role="tabpanel"><br/><select name="custom_select" class="custom-select">
    <option value="" selected="selected">Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>
<br>
<select name="custom_select_lg" class="custom-select&#x20;custom-select-lg&#x20;mb-3">
    <option value="" selected="selected">Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>
<br>
<select name="custom_select_sm" class="custom-select&#x20;custom-select-sm">
    <option value="" selected="selected">Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>
<br>
<select name="custom_select_multiple&#x5B;&#x5D;" multiple="multiple" class="custom-select">
    <option value="" selected="selected">Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select>
<br>
<select name="custom_select_size" size="3" class="custom-select">
    <option value="" selected="selected">Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select></div>
  <div class="tab-pane" id="select--menu_5d5fb96d82ac4_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'custom_select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'empty_option'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Open&nbsp;this&nbsp;select&nbsp;menu'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'One'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Two'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">3&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Three'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;])-&gt;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #DD0000">''</span><span style="color: #007700">))&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;You&nbsp;may&nbsp;also&nbsp;choose&nbsp;from&nbsp;small&nbsp;and&nbsp;large&nbsp;custom&nbsp;selects&nbsp;to&nbsp;match&nbsp;our&nbsp;similarly&nbsp;sized&nbsp;text&nbsp;inputs.<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'custom_select_lg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'empty_option'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Open&nbsp;this&nbsp;select&nbsp;menu'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'One'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Two'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">3&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Three'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mb-3'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])-&gt;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #DD0000">''</span><span style="color: #007700">))&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'custom_select_sm'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'sm'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'empty_option'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Open&nbsp;this&nbsp;select&nbsp;menu'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'One'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Two'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">3&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Three'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])-&gt;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #DD0000">''</span><span style="color: #007700">))&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;The&nbsp;multiple&nbsp;attribute&nbsp;is&nbsp;also&nbsp;supported<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'custom_select_multiple'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'empty_option'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Open&nbsp;this&nbsp;select&nbsp;menu'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'One'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Two'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">3&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Three'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'multiple'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])-&gt;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #DD0000">''</span><span style="color: #007700">))&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;As&nbsp;is&nbsp;the&nbsp;size&nbsp;attribute<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'custom_select_size'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'select'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'empty_option'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Open&nbsp;this&nbsp;select&nbsp;menu'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'value_options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'One'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">2&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Two'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">3&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Three'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'size'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">3</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])-&gt;</span><span style="color: #0000BB">setValue</span><span style="color: #007700">(</span><span style="color: #DD0000">''</span><span style="color: #007700">));</span>
</span>
</code></pre></div>
</div><br/>

#### Range
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#range)</small>

<ul class="nav nav-tabs" id="range_5d5fb96d82b88_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#range_5d5fb96d82b88_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#range_5d5fb96d82b88_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="range_5d5fb96d82b88_result" role="tabpanel"><br/><label for="customRange1">Example range</label>
<input type="range" name="custom_range" id="customRange1" class="custom-range" value=""></div>
  <div class="tab-pane" id="range_5d5fb96d82b88_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'custom_range'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'range'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Example&nbsp;range'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'customRange1'</span><span style="color: #007700">],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

#### File browser
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/forms/#file-browser)</small>

<ul class="nav nav-tabs" id="file--browser_5d5fb96d82c34_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#file--browser_5d5fb96d82c34_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#file--browser_5d5fb96d82c34_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="file--browser_5d5fb96d82c34_result" role="tabpanel"><br/><div class="custom-file">
    <label class="custom-file-label" for="customFile">Choose file</label>
    <input type="file" name="custom_file" id="customFile" class="custom-file-input" value="">
</div></div>
  <div class="tab-pane" id="file--browser_5d5fb96d82c34_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br />$oFactory&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Form</span><span style="color: #007700">\</span><span style="color: #0000BB">Factory</span><span style="color: #007700">();<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formRow</span><span style="color: #007700">(</span><span style="color: #0000BB">$oFactory</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">create</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'name'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'custom_file'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'type'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'file'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'options'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'custom'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Choose&nbsp;file'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'form_group'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'customFile'</span><span style="color: #007700">],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

## Navs
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/navs/)</small>

### Base nav
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/components/navs/#base-nav)</small>

<ul class="nav nav-tabs" id="base--nav_5d5fb96d82d0c_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#base--nav_5d5fb96d82d0c_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#base--nav_5d5fb96d82d0c_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="base--nav_5d5fb96d82d0c_result" role="tabpanel"><br/><ul class="nav">
    <li class="&#x20;nav-item">
        <a class="nav-link&#x20;active" href="&#x23;">Active</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="&#x23;">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link&#x20;disabled" href="&#x23;" tabindex="-1" aria-disabled="true">Disabled</a>
    </li>
</ul></div>
  <div class="tab-pane" id="base--nav_5d5fb96d82d0c_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">navigation</span><span style="color: #007700">()-&gt;</span><span style="color: #0000BB">menu</span><span style="color: #007700">(new&nbsp;\</span><span style="color: #0000BB">Zend</span><span style="color: #007700">\</span><span style="color: #0000BB">Navigation</span><span style="color: #007700">\</span><span style="color: #0000BB">Navigation</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Active'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'active'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,],<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Link'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,],<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Link'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,],<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'label'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Disabled'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'uri'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'visible'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">,],<br />]));</span>
</span>
</code></pre></div>
</div><br/>

# Content
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/)</small>

## Typography
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/typography/)</small>

### Abbreviations
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/typography/#abbreviations)</small>

<ul class="nav nav-tabs" id="abbreviations_5d5fb96d83536_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#abbreviations_5d5fb96d83536_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#abbreviations_5d5fb96d83536_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="abbreviations_5d5fb96d83536_result" role="tabpanel"><br/><p><abbr title="attribute">attr</abbr></p>
<p><abbr title="HyperText&#x20;Markup&#x20;Language" class="initialism">HTML</abbr></p></div>
  <div class="tab-pane" id="abbreviations_5d5fb96d83536_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;First&nbsp;abbreviation<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;p&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">abbreviation</span><span style="color: #007700">(</span><span style="color: #DD0000">'attr'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attribute'</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/p&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;Second&nbsp;abbreviation<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">'&lt;p&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">abbreviation</span><span style="color: #007700">(</span><span style="color: #DD0000">'HTML'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'HyperText&nbsp;Markup&nbsp;Language'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'&lt;/p&gt;'</span><span style="color: #007700">;</span>
</span>
</code></pre></div>
</div><br/>

### Blockquotes
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/typography/#blockquotes)</small>

<ul class="nav nav-tabs" id="blockquotes_5d5fb96d835a3_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#blockquotes_5d5fb96d835a3_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#blockquotes_5d5fb96d835a3_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="blockquotes_5d5fb96d835a3_result" role="tabpanel"><br/><blockquote class="blockquote">
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
</blockquote></div>
  <div class="tab-pane" id="blockquotes_5d5fb96d835a3_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">blockquote</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipiscing&nbsp;elit.&nbsp;Integer&nbsp;posuere&nbsp;erat&nbsp;a&nbsp;ante.'<br /></span><span style="color: #007700">);</span>
</span>
</code></pre></div>
</div><br/>

#### Naming a source
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/typography/#naming-a-source)</small>

<ul class="nav nav-tabs" id="naming--a--source_5d5fb96d83635_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#naming--a--source_5d5fb96d83635_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#naming--a--source_5d5fb96d83635_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="naming--a--source_5d5fb96d83635_result" role="tabpanel"><br/><blockquote class="blockquote">
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote></div>
  <div class="tab-pane" id="naming--a--source_5d5fb96d83635_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">blockquote</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Content<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipiscing&nbsp;elit.&nbsp;Integer&nbsp;posuere&nbsp;erat&nbsp;a&nbsp;ante.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Footer&nbsp;content<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Someone&nbsp;famous&nbsp;in&nbsp;&lt;cite&nbsp;title="Source&nbsp;Title"&gt;Source&nbsp;Title&lt;/cite&gt;'<br /></span><span style="color: #007700">);</span>
</span>
</code></pre></div>
</div><br/>

#### Alignment
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/typography/#alignment)</small>

<ul class="nav nav-tabs" id="alignment_5d5fb96d83701_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#alignment_5d5fb96d83701_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#alignment_5d5fb96d83701_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="alignment_5d5fb96d83701_result" role="tabpanel"><br/><blockquote class="blockquote&#x20;text-center">
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
<blockquote class="blockquote&#x20;text-right">
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
</div>
  <div class="tab-pane" id="alignment_5d5fb96d83701_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Center<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">blockquote</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Content<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipiscing&nbsp;elit.&nbsp;Integer&nbsp;posuere&nbsp;erat&nbsp;a&nbsp;ante.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Footer&nbsp;content<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Someone&nbsp;famous&nbsp;in&nbsp;&lt;cite&nbsp;title="Source&nbsp;Title"&gt;Source&nbsp;Title&lt;/cite&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text-center'</span><span style="color: #007700">]<br />)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Right<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">blockquote</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Content<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipiscing&nbsp;elit.&nbsp;Integer&nbsp;posuere&nbsp;erat&nbsp;a&nbsp;ante.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Footer&nbsp;content<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Someone&nbsp;famous&nbsp;in&nbsp;&lt;cite&nbsp;title="Source&nbsp;Title"&gt;Source&nbsp;Title&lt;/cite&gt;'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text-right'</span><span style="color: #007700">]<br />)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;</span>
</span>
</code></pre></div>
</div><br/>

### List
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/typography/#lists)</small>

#### Unstyled
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/typography/#unstyled)</small>

<ul class="nav nav-tabs" id="unstyled_5d5fb96d83819_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#unstyled_5d5fb96d83819_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#unstyled_5d5fb96d83819_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="unstyled_5d5fb96d83819_result" role="tabpanel"><br/><ul class="list-unstyled">
    <li>Lorem ipsum dolor sit amet</li>
    <li>Consectetur adipiscing elit</li>
    <li>Integer molestie lorem at massa</li>
    <li>Facilisis in pretium nisl aliquet</li>
    <li>
        Nulla volutpat aliquam velit
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
</ul></div>
  <div class="tab-pane" id="unstyled_5d5fb96d83819_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlList</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;List&nbsp;items<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Consectetur&nbsp;adipiscing&nbsp;elit'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Integer&nbsp;molestie&nbsp;lorem&nbsp;at&nbsp;massa'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Facilisis&nbsp;in&nbsp;pretium&nbsp;nisl&nbsp;aliquet'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Nulla&nbsp;volutpat&nbsp;aliquam&nbsp;velit'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Phasellus&nbsp;iaculis&nbsp;neque'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Purus&nbsp;sodales&nbsp;ultricies'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Vestibulum&nbsp;laoreet&nbsp;porttitor&nbsp;sem'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Ac&nbsp;tristique&nbsp;libero&nbsp;volutpat&nbsp;at'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Faucibus&nbsp;porta&nbsp;lacus&nbsp;fringilla&nbsp;vel'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Aenean&nbsp;sit&nbsp;amet&nbsp;erat&nbsp;nunc'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Eget&nbsp;porttitor&nbsp;lorem'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Add&nbsp;"list-unstyled"&nbsp;class<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'list-unstyled'</span><span style="color: #007700">]<br />);</span>
</span>
</code></pre></div>
</div><br/>

#### Inline
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/typography/#inline)</small>

<ul class="nav nav-tabs" id="inline_5d5fb96d8389c_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#inline_5d5fb96d8389c_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#inline_5d5fb96d8389c_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="inline_5d5fb96d8389c_result" role="tabpanel"><br/><ul class="list-inline">
    <li class="list-inline-item">Lorem ipsum</li>
    <li class="list-inline-item">Phasellus iaculis</li>
    <li class="list-inline-item">Nulla volutpat</li>
</ul></div>
  <div class="tab-pane" id="inline_5d5fb96d8389c_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">htmlList</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;List&nbsp;items<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">[</span><span style="color: #DD0000">'Lorem&nbsp;ipsum'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Phasellus&nbsp;iaculis'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Nulla&nbsp;volutpat'</span><span style="color: #007700">,],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Add&nbsp;"list-inline"&nbsp;class<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'list-inline'</span><span style="color: #007700">]<br />);</span>
</span>
</code></pre></div>
</div><br/>

## Images
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/images/)</small>

### Responsive images
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/images/#responsive-images)</small>

<ul class="nav nav-tabs" id="responsive--images_5d5fb96d8392f_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#responsive--images_5d5fb96d8392f_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#responsive--images_5d5fb96d8392f_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="responsive--images_5d5fb96d8392f_result" role="tabpanel"><br/><img alt="Responsive&#x20;image" class="img-fluid" src="images&#x2F;demo-sample.svg"></div>
  <div class="tab-pane" id="responsive--images_5d5fb96d8392f_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'fluid'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Responsive&nbsp;image'</span><span style="color: #007700">,]);</span>
</span>
</code></pre></div>
</div><br/>

### Image thumbnails
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/images/#image-thumbnails)</small>

<ul class="nav nav-tabs" id="image--thumbnails_5d5fb96d83982_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#image--thumbnails_5d5fb96d83982_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#image--thumbnails_5d5fb96d83982_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="image--thumbnails_5d5fb96d83982_result" role="tabpanel"><br/><img alt="Image&#x20;thumbnail" class="img-thumbnail" src="images&#x2F;demo-sample.svg"></div>
  <div class="tab-pane" id="image--thumbnails_5d5fb96d83982_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'thumbnail'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Image&nbsp;thumbnail'</span><span style="color: #007700">,]);</span>
</span>
</code></pre></div>
</div><br/>

### Aligning images
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/images/#aligning-images)</small>

<ul class="nav nav-tabs" id="aligning--images_5d5fb96d83a40_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#aligning--images_5d5fb96d83a40_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#aligning--images_5d5fb96d83a40_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="aligning--images_5d5fb96d83a40_result" role="tabpanel"><br/><img alt="Image&#x20;aligned&#x20;left" class="float-left&#x20;rounded" src="images&#x2F;demo-sample.svg">
<img alt="Image&#x20;aligned&#x20;right" class="float-right&#x20;rounded" src="images&#x2F;demo-sample.svg">
<img alt="Image&#x20;aligned&#x20;block" class="d-block&#x20;mx-auto&#x20;rounded" src="images&#x2F;demo-sample.svg"></div>
  <div class="tab-pane" id="aligning--images_5d5fb96d83a40_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">image</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'rounded'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Image&nbsp;aligned&nbsp;left'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'float-left'</span><span style="color: #007700">]<br />)&nbsp;&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">image</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'rounded'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Image&nbsp;aligned&nbsp;right'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'float-right'</span><span style="color: #007700">]<br />)&nbsp;.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">image</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'rounded'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Image&nbsp;aligned&nbsp;block'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'mx-auto&nbsp;d-block'</span><span style="color: #007700">]<br />);</span>
</span>
</code></pre></div>
</div><br/>

### Picture
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/images/#picture)</small>

<ul class="nav nav-tabs" id="picture_5d5fb96d83abd_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#picture_5d5fb96d83abd_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#picture_5d5fb96d83abd_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="picture_5d5fb96d83abd_result" role="tabpanel"><br/><picture>
    <source srcset="images&#x2F;demo-sample.svg" type="image&#x2F;svg&#x2B;xml">
    <img alt="Picture&#x20;image" class="img-fluid&#x20;img-thumbnail" src="images&#x2F;demo-sample.svg">
</picture></div>
  <div class="tab-pane" id="picture_5d5fb96d83abd_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">image</span><span style="color: #007700">(</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'thumbnail'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fluid'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Picture&nbsp;image'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'sources'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'images/demo-sample.svg'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'image/svg+xml'</span><span style="color: #007700">],<br />]);</span>
</span>
</code></pre></div>
</div><br/>

## Tables
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/tables/)</small>

### Examples
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/tables/#examples)</small>

<ul class="nav nav-tabs" id="examples_5d5fb96d83ccd_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#examples_5d5fb96d83ccd_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#examples_5d5fb96d83ccd_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="examples_5d5fb96d83ccd_result" role="tabpanel"><br/><table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
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
<br>
<table class="table&#x20;table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
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
  <div class="tab-pane" id="examples_5d5fb96d83ccd_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Handle'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Larry'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br />echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Handle'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Larry'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-dark'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

### Table head options
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/tables/#table-head-options)</small>

<ul class="nav nav-tabs" id="table--head--options_5d5fb96d83e50_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#table--head--options_5d5fb96d83e50_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#table--head--options_5d5fb96d83e50_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="table--head--options_5d5fb96d83e50_result" role="tabpanel"><br/><table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
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
<br>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
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
  <div class="tab-pane" id="table--head--options_5d5fb96d83e50_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;First&nbsp;table&nbsp;(head&nbsp;dark)<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'thead-dark'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'rows'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Handle'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Larry'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Second&nbsp;table&nbsp;(head&nbsp;light)<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'thead-light'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'rows'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Handle'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Larry'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);</span>
</span>
</code></pre></div>
</div><br/>

### Striped rows
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/tables/#striped-rows)</small>

<ul class="nav nav-tabs" id="striped--rows_5d5fb96d83f91_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#striped--rows_5d5fb96d83f91_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#striped--rows_5d5fb96d83f91_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="striped--rows_5d5fb96d83f91_result" role="tabpanel"><br/><table class="table&#x20;table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
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
<br>
<table class="table&#x20;table-dark&#x20;table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
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
  <div class="tab-pane" id="striped--rows_5d5fb96d83f91_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;First&nbsp;table&nbsp;(head&nbsp;striped)<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Handle'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Larry'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-striped'</span><span style="color: #007700">]);<br /><br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Second&nbsp;table&nbsp;(head&nbsp;striped&nbsp;&amp;&nbsp;dark)<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Handle'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Larry'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-striped&nbsp;table-dark'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

### Bordered table
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/tables/#bordered-table)</small>

<ul class="nav nav-tabs" id="bordered--table_5d5fb96d8411d_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#bordered--table_5d5fb96d8411d_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#bordered--table_5d5fb96d8411d_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="bordered--table_5d5fb96d8411d_result" role="tabpanel"><br/><table class="table&#x20;table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
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
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
<br>
<table class="table&#x20;table-bordered&#x20;table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
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
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table></div>
  <div class="tab-pane" id="bordered--table_5d5fb96d8411d_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;First&nbsp;table&nbsp;(bordered)<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Handle'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Larry&nbsp;the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'colspan'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">]],&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-bordered'</span><span style="color: #007700">]);<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;First&nbsp;table&nbsp;(bordered&nbsp;&amp;&nbsp;dark)<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Handle'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Larry&nbsp;the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'colspan'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">]],&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-bordered&nbsp;table-dark'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

### Borderless table
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/tables/#borderless-table)</small>

<ul class="nav nav-tabs" id="borderless--table_5d5fb96d8427c_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#borderless--table_5d5fb96d8427c_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#borderless--table_5d5fb96d8427c_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="borderless--table_5d5fb96d8427c_result" role="tabpanel"><br/><table class="table&#x20;table-borderless">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
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
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
<br>
<table class="table&#x20;table-borderless&#x20;table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
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
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table></div>
  <div class="tab-pane" id="borderless--table_5d5fb96d8427c_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;First&nbsp;table&nbsp;(borderless)<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Handle'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Larry&nbsp;the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'colspan'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">]],&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-borderless'</span><span style="color: #007700">]);<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Second&nbsp;table&nbsp;(borderless&nbsp;&amp;&nbsp;dark)<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Handle'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Larry&nbsp;the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'colspan'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">]],&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-borderless&nbsp;table-dark'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

### Hoverable rows
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/tables/#hoverable-rows)</small>

<ul class="nav nav-tabs" id="hoverable--rows_5d5fb96d843c2_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#hoverable--rows_5d5fb96d843c2_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#hoverable--rows_5d5fb96d843c2_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="hoverable--rows_5d5fb96d843c2_result" role="tabpanel"><br/><table class="table&#x20;table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
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
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
<br>
<table class="table&#x20;table-dark&#x20;table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
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
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table></div>
  <div class="tab-pane" id="hoverable--rows_5d5fb96d843c2_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;First&nbsp;table&nbsp;(hoverable)<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Handle'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Larry&nbsp;the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'colspan'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">]],&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-hover'</span><span style="color: #007700">]);<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Second&nbsp;table&nbsp;(hoverable&nbsp;&amp;&nbsp;dark)<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Handle'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Larry&nbsp;the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'colspan'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">]],&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-hover&nbsp;table-dark'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

### Small Table
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/tables/#small-table)</small>

<ul class="nav nav-tabs" id="small--table_5d5fb96d84508_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#small--table_5d5fb96d84508_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#small--table_5d5fb96d84508_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="small--table_5d5fb96d84508_result" role="tabpanel"><br/><table class="table&#x20;table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
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
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>
<br>
<table class="table&#x20;table-dark&#x20;table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
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
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table></div>
  <div class="tab-pane" id="small--table_5d5fb96d84508_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;First&nbsp;table&nbsp;(small)<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Handle'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Larry&nbsp;the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'colspan'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">]],&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-sm'</span><span style="color: #007700">]);<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Second&nbsp;table&nbsp;(small&nbsp;&amp;&nbsp;dark)<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Handle'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;[</span><span style="color: #DD0000">'data'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'Larry&nbsp;the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'colspan'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">2</span><span style="color: #007700">]],&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-sm&nbsp;table-dark'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

### Contextual classes
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/tables/#contextual-classes)</small>

<ul class="nav nav-tabs" id="contextual--classes_5d5fb96d8484d_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#contextual--classes_5d5fb96d8484d_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#contextual--classes_5d5fb96d8484d_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="contextual--classes_5d5fb96d8484d_result" role="tabpanel"><br/><table class="table">
    <thead>
        <tr>
            <th scope="col">Class</th>
            <th scope="col">Heading</th>
            <th scope="col">Heading</th>
        </tr>
    </thead>
    <tbody>
        <tr class="table-active">
            <th scope="row">Active</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr>
            <th scope="row">Default</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="table-primary">
            <th scope="row">Primary</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="table-secondary">
            <th scope="row">Secondary</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="table-success">
            <th scope="row">Success</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="table-danger">
            <th scope="row">Danger</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="table-warning">
            <th scope="row">Warning</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="table-info">
            <th scope="row">Info</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="table-light">
            <th scope="row">Light</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="table-dark">
            <th scope="row">Dark</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
    </tbody>
</table>
<br>
<table class="table&#x20;table-dark">
    <thead>
        <tr>
            <th scope="col">Class</th>
            <th scope="col">Heading</th>
            <th scope="col">Heading</th>
        </tr>
    </thead>
    <tbody>
        <tr class="bg-active">
            <th scope="row">Active</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr>
            <th scope="row">Default</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="bg-primary">
            <th scope="row">Primary</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="bg-secondary">
            <th scope="row">Secondary</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="bg-success">
            <th scope="row">Success</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="bg-danger">
            <th scope="row">Danger</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="bg-warning">
            <th scope="row">Warning</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="bg-info">
            <th scope="row">Info</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="bg-light">
            <th scope="row">Light</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr class="bg-dark">
            <th scope="row">Dark</th>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
    </tbody>
</table></div>
  <div class="tab-pane" id="contextual--classes_5d5fb96d8484d_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;First&nbsp;table<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Class'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-active'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Active'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'Default'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-primary'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-secondary'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Secondary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-success'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-danger'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Danger'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-warning'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-info'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-light'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Light'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-dark'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Dark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);<br /><br />echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;Second&nbsp;table&nbsp;(dark)<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Class'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'bg-active'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Active'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'Default'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'bg-primary'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Primary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'bg-secondary'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Secondary'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'bg-success'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Success'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'bg-danger'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Danger'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'bg-warning'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Warning'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'bg-info'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Info'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'bg-light'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Light'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'attributes'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'bg-dark'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'cells'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'Dark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />],&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'table-dark'</span><span style="color: #007700">]);</span>
</span>
</code></pre></div>
</div><br/>

### Captions
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/tables/#captions)</small>

<ul class="nav nav-tabs" id="captions_5d5fb96d8493a_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#captions_5d5fb96d8493a_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#captions_5d5fb96d8493a_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="captions_5d5fb96d8493a_result" role="tabpanel"><br/><table class="table">
    <caption>List of users</caption>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
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
  <div class="tab-pane" id="captions_5d5fb96d8493a_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'caption'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'List&nbsp;of&nbsp;users'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'First'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Last'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Handle'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Mark'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Otto'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@mdo'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Jacob'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Thornton'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@fat'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Larry'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'the&nbsp;Bird'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'@twitter'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);</span>
</span>
</code></pre></div>
</div><br/>

### Responsive classes
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/tables/#responsive-tables)</small>

#### Always responsive
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/tables/#always-responsive)</small>

<ul class="nav nav-tabs" id="always--responsive_5d5fb96d84a52_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#always--responsive_5d5fb96d84a52_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#always--responsive_5d5fb96d84a52_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="always--responsive_5d5fb96d84a52_result" role="tabpanel"><br/><div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
        </tbody>
    </table>
</div></div>
  <div class="tab-pane" id="always--responsive_5d5fb96d84a52_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'responsive'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />]);</span>
</span>
</code></pre></div>
</div><br/>

#### Breakpoint specific
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/tables/#breakpoint-specific)</small>

<ul class="nav nav-tabs" id="breakpoint--specific_5d5fb96d84b78_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#breakpoint--specific_5d5fb96d84b78_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#breakpoint--specific_5d5fb96d84b78_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="breakpoint--specific_5d5fb96d84b78_result" role="tabpanel"><br/><div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div class="table-responsive-md">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div class="table-responsive-lg">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div class="table-responsive-xl">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
                <td>Cell</td>
            </tr>
        </tbody>
    </table>
</div></div>
  <div class="tab-pane" id="breakpoint--specific_5d5fb96d84b78_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">foreach&nbsp;([</span><span style="color: #DD0000">'sm'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'md'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'lg'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'xl'</span><span style="color: #007700">]&nbsp;as&nbsp;</span><span style="color: #0000BB">$iKey&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$sSize</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$iKey</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">PHP_EOL&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'&lt;br&gt;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">table</span><span style="color: #007700">([<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'responsive'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">$sSize</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'head'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'#'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Heading'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'body'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'1'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'2'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'3'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'Cell'</span><span style="color: #007700">],<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;]);<br />}</span>
</span>
</code></pre></div>
</div><br/>

## Figures
<small>[Twitter bootstrap Documentation](https://getbootstrap.com/docs/4.3/content/figures/)</small>

### Basic

<ul class="nav nav-tabs" id="basic_5d5fb96d84c86_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#basic_5d5fb96d84c86_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#basic_5d5fb96d84c86_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="basic_5d5fb96d84c86_result" role="tabpanel"><br/><figure class="figure">
    <img alt="A&#x20;generic&#x20;square&#x20;placeholder&#x20;image&#x20;with&#x20;rounded&#x20;corners&#x20;in&#x20;a&#x20;figure." class="figure-img&#x20;img-fluid&#x20;rounded" src="images&#x2F;demo-sample.svg">
    <figcaption class="figure-caption">A caption for the above image.</figcaption>
</figure></div>
  <div class="tab-pane" id="basic_5d5fb96d84c86_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">figure</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'A&nbsp;caption&nbsp;for&nbsp;the&nbsp;above&nbsp;image.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;[],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fluid'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'rounded'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'A&nbsp;generic&nbsp;square&nbsp;placeholder&nbsp;image&nbsp;with&nbsp;rounded&nbsp;corners&nbsp;in&nbsp;a&nbsp;figure.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br />&nbsp;&nbsp;&nbsp;&nbsp;);</span>
</span>
</code></pre></div>
</div><br/>

### Aligning figure's caption

<ul class="nav nav-tabs" id="aligning--figure--s--caption_5d5fb96d84d23_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#aligning--figure--s--caption_5d5fb96d84d23_result" role="tab" aria-controls="result">Result</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#aligning--figure--s--caption_5d5fb96d84d23_source" role="tab" aria-controls="source">Source</a>
  </li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="aligning--figure--s--caption_5d5fb96d84d23_result" role="tabpanel"><br/><figure class="figure">
    <img alt="A&#x20;generic&#x20;square&#x20;placeholder&#x20;image&#x20;with&#x20;rounded&#x20;corners&#x20;in&#x20;a&#x20;figure." class="figure-img&#x20;img-fluid&#x20;rounded" src="images&#x2F;demo-sample.svg">
    <figcaption class="figure-caption&#x20;text-right">A caption for the above image.</figcaption>
</figure></div>
  <div class="tab-pane" id="aligning--figure--s--caption_5d5fb96d84d23_source" role="tabpanel"><pre><code><span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">figure</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'images/demo-sample.svg'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'A&nbsp;caption&nbsp;for&nbsp;the&nbsp;above&nbsp;image.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;[],<br />&nbsp;&nbsp;&nbsp;&nbsp;[<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'fluid'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'rounded'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'alt'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'A&nbsp;generic&nbsp;square&nbsp;placeholder&nbsp;image&nbsp;with&nbsp;rounded&nbsp;corners&nbsp;in&nbsp;a&nbsp;figure.'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;],<br />&nbsp;&nbsp;&nbsp;&nbsp;[</span><span style="color: #DD0000">'class'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'text-right'</span><span style="color: #007700">]<br />);</span>
</span>
</code></pre></div>
</div><br/>
