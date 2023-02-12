Insert a simple table element.

If you prepare and select a table in one of the file formats `.csv` or` .xls`, `.xlsx`, it will be automatically converted to a` <table> `element with the same contents.

For ease of learning <q> Design as much as possible to markup with plain HTML structure </ q> If you follow the concept, plain HTML without a class name is the default. Should be table style. However, as far as the table is concerned, the plain design does not show borders, and the style that looks like a table at first glance does not apply. Changing this to be bordered as the default can be confusing, so the exception is to define the class name `.px2-table` in the default style.

```html
<table class="px2-table">
	<thead>
		<tr>
			<th>thead header cell</th>
			<td>thead cell</td>
			<td>thead cell</td>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>tfoot header cell</th>
			<td>tfoot cell</td>
			<td>tfoot cell</td>
		</tr>
	</tfoot>
	<tbody>
		<tr>
			<th>tbody header cell</th>
			<td>tbody cell</td>
			<td>tbody cell</td>
		</tr>
		<tr>
			<th>tbody header cell</th>
			<td>tbody cell</td>
			<td>tbody cell</td>
		</tr>
	</tbody>
</table>
```
