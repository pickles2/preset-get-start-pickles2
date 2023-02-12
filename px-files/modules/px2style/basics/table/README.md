シンプルなテーブル(表組み)要素を挿入します。

`.csv` または `.xls`, `.xlsx` のいずれかのファイル形式で表を用意して選択すると、同じ内容の `<table>` 要素に自動的に変換します。

学習しやすさのために <q>可能な限り、素のHTMLの構造のままでマークアップできるように設計する</q> コンセプトに従うならば、本来はクラス名なしの素のHTMLがデフォルトのテーブルスタイルになるべきです。しかし、テーブルに限っては、素のデザインにはボーダーが表示されず、一見して表だと分かるスタイルは適用されません。これをデフォルトとしてボーダーをつけるように変更するのは混乱を招く元となるおそれがあるので、例外的に、デフォルトスタイルにクラス名 `.px2-table` を定義しています。

```html
<table class="px2-table">
	<thead>
		<tr>
			<th>thead ヘッダセル</th>
			<td>thead セル</td>
			<td>thead セル</td>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>tfoot ヘッダセル</th>
			<td>tfoot セル</td>
			<td>tfoot セル</td>
		</tr>
	</tfoot>
	<tbody>
		<tr>
			<th>tbody ヘッダセル</th>
			<td>tbody セル</td>
			<td>tbody セル</td>
		</tr>
		<tr>
			<th>tbody ヘッダセル</th>
			<td>tbody セル</td>
			<td>tbody セル</td>
		</tr>
	</tbody>
</table>
```
