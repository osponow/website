
    <!DOCTYPE html>
    <html lang="en">

    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $title = "FAIR-USE4OS Guidelines for creating impactful open-source software";
      $header = "white";
      $name = "FAIR-USE4OS Guidelines for creating impactful open-source software";
	$date = "2024-06-07";
	$linkedin = "FIXME";
	$image = "fairuse.png";
	$imagealt = "Image shows the text “Findable Accessible Interoperable Reusable - User-centered Sustainable Equitable” with FAIR labeled as ‘Executable’, USE labeled as ‘Open Source’ and all the text labeled as ‘Impactful’";
	$type = "Blog";
	$cta_text = "Contact us now to find out how we can help with your funding application.";
	$cta_label = "Contact us";
	$cta_link = "/contact.php";
	$authors = "['Dr Raphael Sonabend']";
	$content = "<p>We have just released published an open-access (CC BY) article, “<a href='https://journals.plos.org/ploscompbiol/article?id=10.1371/journal.pcbi.1012045'>FAIR-USE4OS: Guidelines for creating impactful open-source software</a>”, which extends the FAIR principles by explicitly calling out best practices from open source development. In the paper, we define ‘FAIR-USE4OS’ guidelines to help developers, researchers, and funders effectively plan and evaluate open-source projects. The article may be particularly relevant to people applying for funding for research software or for funders who work in this space, but the guidelines are also broadly applicable to any open-source software project.</p>
<h1>FAIR-USE4OS guidelines</h1>
<p>The guidelines extend the FAIR principles by focusing on long-term impact and end-user engagement by design, they are:</p>
<ul>
<li><strong>F</strong>indable: Software, and its associated metadata, is easy for both humans and machines to find.</li>
<li><strong>A</strong>ccessible: Software, and its metadata, is retrievable via standardised protocols.</li>
<li><strong>I</strong>nteroperable: Software interoperates with other software by exchanging data and/or metadata, and/or through interaction via application programming interfaces (APIs), described through standards.</li>
<li><strong>R</strong>eusable: Software is both usable (can be executed) and reusable (can be understood, modified, built upon, or incorporated into other software).</li>
<li><strong>U</strong>ser-centered: Stakeholders of the software have been involved in co-design, development, and testing of the software to ensure it genuinely meets their key user needs, including precise public-facing documentation to minimize the barrier to entry</li>
<li><strong>S</strong>ustainable: Long-term sustainability plans are in place for the codebase, community, and finances.</li>
<li><strong>E</strong>quitable: Software is open-source and can meet the needs of all users including localisation, low-bandwidth, and low-resource options.</li>
</ul>
<p>Let’s breakdown what the addition of ‘USE’ adds to the original ‘FAIR’ guidelines.
<em>The text below is adapted from Sonabend et al. (<a href='https://journals.plos.org/ploscompbiol/article?id=10.1371/journal.pcbi.1012045'>2024</a>), which is available as an open-access paper.</em></p>
<h2>U: User-centered</h2>
<p>User-centered software is essential to ensure that the resulting software solves a genuine, real-world need. The term “user” does not refer to only detached end-users, but also the package developers, developers of downstream packages, and other stakeholders who may directly or indirectly interact with the software. We encourage co-design with suitable experts at regular stages throughout the project. The experts should be provided the chance to give feedback on the intended purpose and usability of the software to ensure it will genuinely solve the real-world problems that they/their community are facing, and to highlight any potential downsides to designs. As well as providing design input, we recommend early release of a prototype that users can trial in order to identify bugs or design flaws that can be fed back to developers.</p>
<p>While often seen as an administrative burden, documenting code is a useful method to center users in the code development process. Documentation increases usability by making the codebase more transparent and tells users and other developers how to interact with the code. As well as documented public-facing functionality, code commenting should be used for any code that is not intuitive; for example, long functions should have in-line code comments to keep track of progress through the function, and all functions should include very basic commenting at the start to outline inputs, outputs, and functionality.</p>
<h2>S: Sustainability</h2>
<p>Software must be sustained over time and correctly marketed. In terms of sustainability, there are 3 primary areas that must be sustained: community and users, funding, and the codebase.</p>
<p>Without an active and engaged community of users, the software fails to solve a real-world problem and will not be impactful. We define a “community” here as a “community of practice”: a group of people united around a common theme, in this case the software. This community could be a handful of users or thousands of users, depending on the needs of the software and the problem it is solving. Communities and users should not be forced to use software for the sake of it and if, over time, it becomes apparent that users are dropping off as the software is no longer required, then sunsetting (retiring) software is a natural endpoint.</p>
<p>Maintaining and sustaining code is simplest when a community is most active; however, even without an active community, code should be routinely updated and maintained. Bug fixing is required to ensure the software remains trustworthy, and implementing new features is required to ensure the software remains relevant. Automated testing of code is best practice and should be implemented by developers whenever possible.</p>
<p>Finally, funding for software can be acquired via grant funding, creating software as a service, offering tiered subscriptions (e.g., for quicker bug fixing), dual-licensing, and other models—there is no turnkey solution for financial sustainability and all software will need a bespoke solution.</p>
<h2>E: Equitable</h2>
<p>Software is equitable if it can meet the needs of all its intended users. As a principle, equitable software should be designed to benefit users across as many contexts as possible, but at a bare minimum, it should verifiably serve the needs of those it is designed to benefit. Part of being equitable is therefore spending the time to determine and understand the target users and their varying needs and contexts. Once understood, software must be designed to be usable and accessible by all of those users. For example, a software package might be technically brilliant and tackle essential real-world problems, but if many users cannot use the software because they are unable to learn complicated new syntax, then the software has not been developed equitably.</p>
<p>Equitable code should also be findable (i.e., not simply dumped in a public software repository but also added to professional websites and other public resources), include clear instructions for installation and usage (this is a subset of documentation), and can be tailored to intended users with low-bandwidth (e.g., offline solutions are possible). Developers are not expected to plan for every possible use case on their own; developers should work with community managers to ensure software is iterated as required (within reasonable limits).</p>
<p>Following the FAIR-USE4OS guidelines, can help you write an effective proposal to win funding for software development and maintenance. Let us know if you are looking for funding or are writing a funding application. We can help write your application and we’ll do it for free if you cost us into your proposal.</p>";
	$datestring = "07 June 2024";
	
      include_once $path . '/shared/updates_template.php';
    ?>

    </html>
    