<!DOCTYPE html>

<head>
	<?php include("head.php"); ?>
    <title>Twomey Carpentry - Contact</title>
    <meta name="robots" content="noindex,nofollow">
</head>

<body>
	<div id="fouc">
        <div class="site-wrap">
			<?php include("header.php"); ?>

            <div class="page-content contact">

                <div class="home-banner">
                    <img src="images/contact-banner.jpg"/>
                </div>

                <div class="text">
                    <div class="content">
                        <h1>Contact Us</h1>
                        <p>Why not get in touch?</p>
                        <p>We can discuss your requirements and answer any questions you might have.</p>
                        <a href="tel:+447923227280" class="button phone">Phone Us</a>
                        <a href="mailto:info@twomeycarpentry.com" class="button email">Email Us</a>
                    </div>
                </div>

                <div class="contact-form">
                    <div class="content">
                        <form class="contactForm" method="post" name="contactForm" novalidate="novalidate">
                            <input id="name" name="name" required="" placeholder="Name" type="text" aria-required="true" style="background-image: none; background-position: 0% 0%; background-repeat: repeat;">
                            <input id="email" name="email" required="" placeholder="E-mail" type="email" aria-required="true">
                            <input name="subject" value=" has sent a new message via the website" type="hidden">
                            <textarea id="message" name="message" required="" rows="3" placeholder="Message" aria-required="true"></textarea>
                            <input type="submit" value="Send message">
                        </form>
                    </div>
                </div>

                <div class="text success-text">
                    <h2 class="success-message-sent hidden">Thank you for your message. We will be in touch as soon as possible.</h2>
                </div>

            </div>

            <?php include("footer.php"); ?>
		</div>
	</div>

    <?php include('backToTop.php'); ?>
    <?php include("javascript-files.php"); ?>

</body>
