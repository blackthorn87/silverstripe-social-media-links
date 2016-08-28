<% loop SocialMediaLinks %>

<% if First %><ul class="social-media-links"><% end_if %>
	<li><a href="$sLink" target="_blank">$faIcon $Title</a></li>
<% if Last %></ul><% end_if %>

<% end_loop %>