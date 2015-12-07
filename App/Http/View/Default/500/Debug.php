<h1><?=str_replace('%exception%', get_class($this->exception), $this->locale['default.500.debug_title'])?></h1>
<pre>
<?=$this->report?>
</pre>