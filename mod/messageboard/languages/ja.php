<?php
/**
 * Translation file
 *
 * Note: don't change the return array to short notation because Transifex can't handle those during `tx push -s`
 */

return array(

	/**
	 * Menu items and titles
	 */

	'messageboard:board' => "伝言板",
	'messageboard:messageboard' => "伝言板",
	'messageboard:none' => "伝言はありません。",
	'messageboard:num_display' => "表示数",
	'messageboard:user' => "%sさんの伝言板",
	'messageboard:owner' => '%sさんの伝言板',
	'messageboard:owner_history' => '%sさんは、%sさんの伝言板に伝言を残しています',

	/**
	 * Message board widget river
	 */
	'river:user:messageboard' => "%sさんは、%sさんの伝言板に伝言を残しています",

	/**
	 * Status messages
	 */

	'annotation:delete:messageboard:fail' => "申し訳ありません。この伝言を削除できませんでした。",
	'annotation:delete:messageboard:success' => "伝言を削除しました。",
	
	'messageboard:posted' => "伝言を書き込みをしました。",
	'messageboard:deleted' => "伝言を削除しました。",

	/**
	 * Email messages
	 */

	'messageboard:email:subject' => '伝言板にコメントがされています！',
	'messageboard:email:body' => "%s さんから伝言板にコメントが残っています。

内容:

%s

伝言板のコメントを表示するには、ここをクリック:
%s

%s さんのプロフィールを見るには、ここをクリック:
%s",

	/**
	 * Error messages
	 */

	'messageboard:blank' => "申し訳ありません。メッセージ欄が空欄では保存できません。",
	'messageboard:notdeleted' => "申し訳ありません。書き込みを削除できません。",

	'messageboard:failure' => "書き込みの際に何からのエラーが発生しました。もう一度お試しください。",

	'widgets:messageboard:name' => "伝言板",
	'widgets:messageboard:description' => "「伝言板」を使うとプロフィールページ上でいろいろな人から書き込みをしてもらえます。",
);
