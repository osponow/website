
    <!DOCTYPE html>
    <html lang="en">

    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $title = "State of Open Con 2024";
      $header = "white";
      $name = "State of Open Con 2024";
	$date = "2024-03-20";
	$linkedin = "https://www.linkedin.com/feed/update/urn:li:activity:7176902706421223425";
	$image = "soo.jpg";
	$imagealt = "Purple screens saying SOOCon24 Open:UK, below screens are speakers Peter Zaitsev, Stephen Augustus, Liz Rice.";
	$type = "Blog";
	$cta_text = "Contact us now to discuss anything open source.";
	$cta_label = "Contact us";
	$cta_link = "/contact.php";
	$authors = "['Dr Raphael Sonabend']";
	$content = "<h1>Open source is everywhere…</h1>
<p>I’ve crammed 25 pages of messy scrawling into my trusty (admittedly only A6) notebook, but I won’t bore you with a full copy of all those notes. This blog is a short highlight of just a few of the talks I went to while at State of Open Con.</p>
<p>There were statistics about the use of open source thrown about in every talk, including:</p>
<ul>
<li>90% of companies use open source</li>
<li>Open source software constitutes 70-90% of any given piece of modern software</li>
<li>99.9% of commercial software solutions use open source in some way</li>
</ul>
<p>These numbers are staggering but not surprising. Given the power of freely available programming languages, and the basic, open-source packages that are shipped with them, it’s actually quite difficult to program without using any open source tools.</p>
<h1>…but where are the OSPOs?</h1>
<p>In 2021, the <a href='https://github.com/todogroup/osposurvey/blob/main/OSPOSurveyResults_2022-3.pdf'>TODO group reported</a> that 58% of companies have a formal OSPO, which increased to 60% in 2023. At first glance this may seem like a big number, but when broken down by company size we see a different picture. The majority of companies with over 20,000 employees have an OSPO however below that number, less than a quarter of companies have an OSPO. Moreover, Brian Proffitt, Senior Manager or Community Outreach in the Red Hat OSPO, actually thinks that OSPOs are already plateauing and declining. According to Proffitt, the pandemic saw companies massively scaling back on their open source budgets including downsizing and decentralizing their OSPOs, this includes Red Hat. Unfortunately, the role of an internal OSPO is typically focused on community building which is costly, or in the words of Proffitt “stickers cost a lot of money!”. In his talk “The Next Step in OSPO Evolution”, Proffitt outlined his decentralized vision of OSPOs, with skills distributed across Legal, Marketing, Sales, and other company functions.</p>
<p>Unsurprisingly, we agree. Given the TODO group figures it’s clear that smaller companies can’t (or maybe won’t) provide the resource for a formal OSPO and with the larger companies also downsizing, decentralization makes sense. We have also seen this in other tech positions, such as data scientists, which are increasingly based in marketing teams and not dedicated data science teams. Virtual OSPOs such as those provided by OSPO Now also provide an affordable alternative, so you can tap into open-source expertise only when needed.</p>
<h1>Is Post Open next?</h1>
<p>The most radical talk was given by Bruce Perens, the creator of the <a href='https://opensource.org/'>Open Source Initiative</a> and <a href='https://opensource.org/osd/'>The Open Source Definition</a>, which is widely taken as <em>the</em> definition of open source. Perens thinks that open source is reaching its conclusion and that the next chapter will be “post-open”. Instead of software released under one of many (and increasing) open-source licenses, Perens advocates for a single “post-open” license. Users would then subscribe to “post-open”, paying an annual fee to access <em>all</em> software licensed under post-open. This money would be distributed directly to developers, with some held back to support post-open initiatives to run the service.</p>
<p>There are great ideas here. The past decade has seen the colossal rise of subscription services, it’s clearly a model that consumers are comfortable with. We also know that people <em>want</em> to support developers but current mechanisms make this a difficult process.</p>
<p>But is post-open the answer? We’re not so sure. Unfortunately whilst there are definitely some licenses that are superfluous, for example <a href='https://en.wikipedia.org/wiki/WTFPL'>WTFPL</a> (not OSI approved because it is redundant), there can also be good reasons why licenses are proliferating. For example, the European Space Agency is <a href='https://essr.esa.int/esa-open-source-policy'>pro-open source</a> but instead of using existing permissive and copyleft licenses, they wrote their own licenses because they are forced to separate licenses by territory, which conflicts with the OSI definition.</p>
<h1>Empowering developers</h1>
<p>Finally, we saw some similarities between Malvika Sharan’s talk on “Applying Do No Harm principle to enhance open source sustainability” and Jamie Slome’s and Katrina Novakovic’s talk on “DevEx: Making Open Source Contribution Easier for Developers”.</p>
<p>Sharan’s talk started with some exciting but also concerning statistics</p>
<ul>
<li>The value of open source software is currently <a href='https://blog.tidelift.com/eight-trilion-dollars-the-new-valuation-of-open-source?utm_campaign=IDC%20webinar%20022024&amp;utm_medium=email&amp;utm_content=293041320&amp;utm_source=hs_email'>estimated to be $8.8 trillion</a></li>
<li>96% of codebases on GitHub include open source software</li>
<li>Not using open-source costs companies 3.5x more</li>
</ul>
<p>Despite these statistics, and the evidence of open source being <em>used</em> everywhere, that does not translate to open source being <em>developed</em> everywhere. The open source community is currently inequitable; without a diverse set of stakeholders, how will we ensure that open-source software is meeting its users’ needs?</p>
<p>Sharan suggests that software could benefit from an equivalent to the Hippocratic Oath, to ensure that software does not end up int he wrong hands and does not create harm. The Organization for Ethical Source has started to tackle these concerns with The <a href='https://firstdonoharm.dev/'>Hippocratic and Do No Harm Licenses</a>, which developers can customize as they see fit.</p>
<p>Sharan’s talk focused on empowering developers internationally and ensuring people feel comfortable in how their code is being used. Across the room, Slome and Novakovic, both from Citi, spoke about the developer experience (DevEx) in the finance sector. The two speakers noted that their in-house developers <em>want</em> to contribute to external code that they depend on, but friction can be created by the substantial governance and compliance that is required to ensure Citi remains with <a href='https://www.fca.org.uk/'>FCA</a> regulations. The two have been working on creating an open-source program that empowers their developers to contribute to projects by minimizing the amount of compliance they have to experience first-hand. To this end, alongside FINOS, they have developed <a href='https://github.com/finos/git-proxy'>Git Proxy</a> an application that allows developers to make code contributions that are then automatically checked on an internal server, before being pushed to a (private or public) GitHub repository (on Microsoft’s servers).</p>
<p>Understanding developer needs is vital to ensuring the success of open source projects. Whether that’s building tools to smooth the experience, or developing licenses to ensure companies can be feel comfortable releasing code that won’t “do harm”.</p>
<h1>Concluding thoughts</h1>
<p>I had a great couple of days watching talks from open source experts, networking across stands, and picking up obligatory merch. One thing was very clear from the conference, open-source is truly everywhere and it isn’t going away (even evolution to post-open would take decades). Despite this, all talks highlighted that there is a lot of work to be done to empower developers, to streamline the use of open-source, to ensure open-source solutions are sustainable, and to promote better practices around security and licensing.</p>
<p>We’re looking forward to attending next year and hoping that some of these problems will have be more widely addressed.</p>
<p>In the meantime, if you’re looking for support for anything open source, then we’re here to help.</p>";
	$datestring = "20 March 2024";
	
      include_once $path . '/shared/updates_template.php';
    ?>

    </html>
    