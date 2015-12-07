<h1>{$lang->default.500.error_title}</h1>
{$lang->default.500.error_subtitle}
<p>{$lang->default.500.joke_main}</p>
{$lang->default.500.joke_sub}
<pre>
<?=chunk_split($this->report, 80)?>
</pre>