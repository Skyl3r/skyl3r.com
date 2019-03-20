<html>

	<head>
		<title>Setting up FBTerm</title>
	</head>

	<body>
		<h3>Setting up FBTerm for a Virtual Console</h3>
		
		<h4>Introduction</h4>
		<p>FBTerm (Frame Buffer Terminal) is a terminal interface that can run without Xorg installed. It's not in development anymore but <i>it works</i>.  The benefit of using FBTerm is that we can get 256 colors, accelerated scrolling and nice fonts for use with ZSH/TMux.</p>
		<p><b>Requirements</b></p>
		<ul>
			<li>frame buffer device or VESA video card</li>
		</ul> 

		<h4>Step 1.</h4>
		<p>If you already have FBTerm installed, remove it. We will need to compile it from source so that we can get commit 71a7a79 which makes the color palette non-constant as well as a build fix and insert-mode fix from ccapitalK.</p>
		<p>git clone https://github.com/ccapitalK/fbterm</p>
		<p>FBTerm build needs a compiler. I recommended getting cmake and g++ which is in most repos.</p>
		<p>sudo apt-get install cmake g++ -y</p>		
		<p>You need pkg-config, libfreetype6-dev, libfontconfig1-dev, libx86-dev and optionally libgpm-dev for mouse support</p>  
		<p>sudo apt-get install pkg-config libfreetype6-dev libfontconfig1-dev libx86-dev libgpm-dev -y</p>
		<p>Now you can run the ./configure</p>
		<p>./configure</p>	

	</body>

</html>
