
 <div id="container">
	<p>
	This website contains two sections. An example guestbook to demonstrate persistent attacks, and an example "search" bar to demonstrate reflected attacks. </p>
	<p>
	On the guestbook, write a comment and notice that on the secure portal that tags are stripped out of the text before it is written to the webpage. On the insecure portal, the text is pasted unsanitized into the webpage, and this causes any tags to be treated by the browser as if they were part of the web page (which they are!) </p>
	<p> Note: Due to the way I have my sql statements set up you must use single quotes (&apos;) instead of double quotes (&quot;) in your comment or it will not post. This is avoidable but I am too lazy to go and fix that right now. </p>
	<p>
	On the search page, notice that the string you search for is embedded in the url. This attack works the same way, but because the payload is in the url you can send this url to another person and the code will execute in their browser as well. </p>
	<p>
	If you aren't sure what to do from here with this information. Try searching in the search bar for 
<br><b>
&lt;script&gt;alert(&apos;eat more tide pods&apos;);&lt;/script&gt; 
<br ></b>
	If you're wondering why that code isn't executing, you're asking the right questions! The characters &lt; and &gt; have a special meaning in html, which is to mark off the start and end of different tags. However these characters can be written to the screen with what's called character entities, which is jsut a little placeholder that tells the browser you wanna write a reserved character to the screen </p> 
<p>
Another fun one to try is: <br><b>
&lt;script&gt;window.location=&quot;https://www.youtube.com/watch?v=zHfp5ipIXUg&quot;;&lt;/script&gt; 
</b><br>
but please refrain from putting this on the guestbook as it will redirect everyone who visits it. </p> 
<br />
<!-- just give a brief overview of how this whole thing works for reference -->
 </div>
