<li id="show_code">
    <h3>代码</h3>
<pre>
<code class="line-numbers language-javascript">if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
	// Get input
	$name = str_replace( '\<script\>', '', $_GET[ 'name' ] );
	// Feedback for end user
	$html = "<pre>Hello ${name}</pre>";
}else{
	$html="";
}
	
echo $html;
</code>
</pre>
</li>