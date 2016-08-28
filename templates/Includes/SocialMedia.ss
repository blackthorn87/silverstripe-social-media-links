<% loop SocialMediaLinks %>

<% if First %><ul class="social-media-links"><% end_if %>
	<li><a href="$sLink"{$targetDestination}>$faIcon $Title</a></li>
<% if Last %></ul><% end_if %>

<% end_loop %>