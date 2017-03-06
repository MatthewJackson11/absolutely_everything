<?php include_once('pieces/head.php'); ?>

<?php include_once('pieces/header.php'); ?>
<?php include_once('pieces/nav.php'); ?>

<main>
<p><a href='https://css-tricks.com/snippets/css/a-guide-to-flexbox/'>Source: CSS Tricks</a></p>

<p>The Flexbox Layout (Flexible Box) module (currently a W3C Last Call Working Draft) aims at providing a more efficient way to lay out, align and distribute space among items in a container, even when their size is unknown and/or dynamic (thus the word "flex").</p>

<p>The main idea behind the flex layout is to give the container the ability to alter its items' width/height (and order) to best fill the available space (mostly to accommodate to all kind of display devices and screen sizes). A flex container expands items to fill available free space, or shrinks them to prevent overflow.</p>

<p>Most importantly, the flexbox layout is direction-agnostic as opposed to the regular layouts (block which is vertically-based and inline which is horizontally-based). While those work well for pages, they lack flexibility (no pun intended) to support large or complex applications (especially when it comes to orientation changing, resizing, stretching, shrinking, etc.).</p>

<p>Note: Flexbox layout is most appropriate to the components of an application, and small-scale layouts, while the Grid layout is intended for larger scale layouts.</p>

<hr>

<h3>Parent</h3>
<h4> Basic Flex on Parent </h4>
<p>display: flex | inline-flex <br>
flex-direction: row | <strong>row-reverse</strong> | column | column-reverse;
</p>
<div id='flex_parent1'>
<div class="flex_child">1</div>
<div class="flex_child">2</div>
<div class="flex_child">3</div>
</div>

<hr>

<h4> Flex Wrap </h4>
<p>flex-wrap norwrap | wrap | <strong>wrap-reverse</strong>;<br>
flex-flow: flex-direction flex-wrap; This is short hand for both
</p>
<div id='flex_parent2'>
<div class="flex_child">1</div>
<div class="flex_child">2</div>
<div class="flex_child">3</div>
<div class="flex_child">4</div>
<div class="flex_child">5</div>
<div class="flex_child">6</div>
<div class="flex_child">7</div>
<div class="flex_child">8</div>
<div class="flex_child">9</div>
</div>


<hr>

<h4>Justify Content </h4>
<p>This defines the alignment along the main axis. It helps distribute extra free space left over when either all the flex items on a line are inflexible, or are flexible but have reached their maximum size. It also exerts some control over the alignment of items when they overflow the line.</p>
<p>justify-content: flex-start | flex-end | center | space-between | <strong>space-around</strong>;</p>
<div id='flex_parent3'>
<div class="flex_child">1</div>
<div class="flex_child">2</div>
<div class="flex_child">3</div>
</div>

<hr>

<h4> Align Items </h4>
<p>This defines the default behaviour for how flex items are laid out along the cross axis on the current line. Think of it as the justify-content version for the cross-axis (perpendicular to the main-axis).</p>
<p>align-items: flex-start | <strong>flex-end</strong> | center | baseline | stretch;</p>
<div id='flex_parent4'>
<div class="flex_child">1</div>
<div class="flex_child">2</div>
<div class="flex_child">3</div>
<div class="flex_child">4</div>
<div class="flex_child">5</div>
<div class="flex_child">6</div>
<div class="flex_child">7</div>
<div class="flex_child">8</div>
<div class="flex_child">9</div>
</div>

<hr>
<h3> Child </h3>
<p>flex<br>
This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto.</p>
<pre>
.item {
  flex: none | [ <'flex-grow'> <'flex-shrink'>? || <'flex-basis'> ]
}
</pre>
<p>It is recommended that you use this shorthand property rather than set the individual properties. The short hand sets the other values intelligently.</p>



<h4> Child Order </h4>
<p>By default, flex items are laid out in the source order. However, the order property controls the order in which they appear in the flex container.</p>
<p>order: 'integer'</p>
<div id='flex_parent5'>
<div class="flex_child" id="flex_child5_1">1</div>
<div class="flex_child" id="flex_child5_2">2</div>
<div class="flex_child" id="flex_child5_3">3</div>
<div class="flex_child" id="flex_child5_4">4</div>
<div class="flex_child" id="flex_child5_5">5</div>
</div>

<hr>

<h4> Flex Grow </h4>
<p>This defines the ability for a flex item to grow if necessary. It accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up.<br>
If all items have flex-grow set to 1, the remaining space in the container will be distributed equally to all children. If one of the children has a value of 2, the remaining space would take up twice as much space as the others (or it will try to, at least).</p>
<p>flex-grow: 'number'<br>
<strong> 1 | 3 | 1 </strong></p>
<div id='flex_parent6'>
<div class="flex_child" id="flex_child6_1">1</div>
<div class="flex_child" id="flex_child6_2">2</div>
<div class="flex_child" id="flex_child6_3">3</div>
</div>

<hr>

<h4> Flex Shrink </h4>
<p>This defines the ability for a flex item to shrink if necessary.</p>
<p>flex-shrink: 'number'<br>
<strong> 1 | 3 | 1 </strong></p>
<div id='flex_parent7'>
<div class="flex_child" id="flex_child7_1">1</div>
<div class="flex_child" id="flex_child7_2">2</div>
<div class="flex_child" id="flex_child7_3">3</div>
</div>

<hr>

<h4> Align Self </h4>
<p>This allows the default alignment (or the one specified by align-items) to be overridden for individual flex items.</p>
<p>align-self: auto | <strong>flex-start</strong> | flex-end | center | baseline | stretch;<br>
<div id='flex_parent8'>
<div class="flex_child" id="flex_child8_1">1</div>
<div class="flex_child" id="flex_child8_2">2</div>
<div class="flex_child" id="flex_child8_3">3</div>
</div>


<p>flex-basis<br>
This defines the default size of an element before the remaining space is distributed. It can be a length (e.g. 20%, 5rem, etc.) or a keyword. The auto keyword means "look at my width or height property" (which was temporarily done by the main-size keyword until deprecated). The content keyword means "size it based on the item's content" - this keyword isn't well supported yet, so it's hard to test and harder to know what its brethren max-content, min-content, and fit-content do.</p>
<pre>
.item {
  flex-basis: &lt;length&gt; | auto; /* default auto */
}</pre>
<p>If set to 0, the extra space around content isn't factored in. If set to auto, the extra space is distributed based on its flex-grow value. See this graphic.</p>



</main>
<?php include_once('pieces/footer.php'); ?>