This module represents the table of contents in the page.

Automatically generate a table of contents by analyzing the hierarchy of headings in the page.

This will typically be an HTML structure like this:

```html
<div class="anchor_links">
	<p class="anchor_links-heading">INDEX</p>
	<ul>
		<li><a href="#">1. In-page links</a></li>
		<li><a href="#">2. In-page links</a>
			<ul>
				<li><a href="#">2.1. In-page links</a></li>
				<li><a href="#">2.2. In-page links</a></li>
			</ul>
		</li>
		<li><a href="#">3. In-page links</a></li>
	</ul>
</div><!-- /.anchor_links -->
```

\* This module relies on the in-page link generation feature of Pickles 2.
