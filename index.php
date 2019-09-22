<?php include "header.php"; ?>

	<h1>$ welcome to tilde.club</h1>
	<p><a href="/wiki/faq.html">Questions? See the official FAQ.</a></p>

	<p class="advisory">SERVICE ADVISORY: New Server, New Owners, New lease on life for tilde.club.  Welcome back ~clubbers!!.<br> The Expected SSH Hostkey is SHA256:duamOATgnGcfRFFkotCwrAWzZtRjwxm64WAhq5tQRwE.</p>

	<table>
		<tr>
			<td>
				<p>
					tilde.club is not a social network it is one tiny totally 
					standard unix computer that people respectfully use together 
					in their shared quest to build awesome web pages
				</p>

				<p>
					If you would like a list of <a href="http://tilde.club/~delfuego/tilde.24h.html">
					RECENTLY CHANGED PAGES</a> you can see that too
				</p>

				<h3>here are the home pages of our users</h3>
				<p>if you're not seeing yourself listed here, change your page from the default.</p>
				<p><a href="/users/">list all users</a></p>

				<ol>
					<?php foreach (glob("/home/*") as $user) {
						$index = "$user/public_html/index.html";
						if (!file_exists($index) || 
							in_array(sha1_file($index), 
							// these are the hashes of previous and current default pages
							["0eb53dab435e2e6e401921146bed85a80e9ad3a1", 
							"61eff8202777bae134ac4b11f1e16ec23dfc97d3",
							"e9d41eab6edb7cd375c63ecb4a23bca928992547",
							"13af6898f536265af7dbbe2935b591f5e2ee0d7d"])) continue;
						$user = basename($user); ?>
						<li><a href="/~<?=$user?>/">~<?=$user?></a></li>
					<?php } ?>
				</ol>
			</td>

			<td valign="top">
				<h2>tilde.club gold star supporters</h2>

				<p>Tilde.Club is supported by a global community of good people. We
				don't rank people by the amount they give, only by the fact that they
				gave. Here's who has donated! When you're on the server, THANK
				THEM.</p>

				<ul>
					<li>10/5/2014 | <a href="/~beau">~beau</a></li>
					<li>10/5/2014 | <a href="/~skk">~skk</a></li>
					<li>10/5/2014 | <a href="/~joeld">~joeld</a></li>
					<li>10/5/2014 | <a href="/~john">~john</a></li>
					<li>10/5/2014 | <a href="/~brendn">~brendn</a></li>
					<li>10/5/2014 | <a href="/~droob">~droob</a></li>
					<li>10/5/2014 | <a href="/~delfuego">~delfuego</a></li>
					<li>10/5/2014 | <a href="/~jonathan">~jonathan</a></li>
					<li>10/5/2014 | <a href="/~coldmode">~coldmode</a></li>
					<li>10/5/2014 | <a href="/~jemal">~jemal</a></li>
					<li>10/5/2014 | <a href="/~jonbell">~jonbell</a></li>
					<li>10/5/2014 | <a href="/~_">~_</a></li>
					<li>10/5/2014 | <a href="/~dvd">~dvd</a></li>
					<li>10/5/2014 | <a href="/~whitneymcn">~whitneymcn</a></li>
					<li>10/5/2014 | <a href="/~jimray">~jimray</a></li>
					<li>10/5/2014 | <a href="/~schussat">~schussat</a></li>
					<li>10/5/2014 | <a href="/~macdiva">~macdiva</a></li>
					<li>10/3/2014 | <a href="/~extraface">~extraface</a></li>
					<li>10/3/2014 | <a href="/~joshuag">~joshuag</a></li>
					<li>10/3/2014 | <a href="/~zarate">~zarate</a></li>
					<li>10/3/2014 | <a href="/~englishm">~englishm</a></li>
					<li>10/3/2014 | <a href="/~danbri">~danbri</a></li>
				</ul>
			</td>
		</tr>
	</table>

<?php include "footer.php";