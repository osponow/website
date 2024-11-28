
    <!DOCTYPE html>
    <html lang="en">

    <?php
      $path = $_SERVER['DOCUMENT_ROOT'];
      $title = "Data Science Without Borders training - Part 2: FAQs";
      $header = "white";
      $name = "Data Science Without Borders training - Part 2: FAQs";
	$date = "2024-11-25";
	$linkedin = "fixme";
	$image = "dswb_2.jpg";
	$imagealt = "A large poster that says 'Data Science Without Borders' and includes logos of participating organisations including OSPO Now";
	$type = "Blog";
	$cta_text = "Questions about open source? We can help.";
	$cta_label = "Get in touch";
	$cta_link = "/contact.php";
	$authors = "['Ruth Ikegah']";
	$content = "<p>Welcome back! In the <a href='https://osponow.com/articles/data-science-without-borders-training--part-1:-overview'>first post</a>, I talked about my experience conducting a training session on open source strategies and practices for African health professionals. The post discussed the overall experience, the practical session, challenges, lessons learned, and future steps to promote effective open source practices in African healthcare.</p>
<p>True to their nature as scientists and researchers, the participants had interesting questions about how Open Source ties into Open Science. In this follow-up post, I'll share the questions and concerns raised by participants during the open source training. These discussions provided valuable insights into the challenges and opportunities facing the open source community.</p>
<p>We touched on everything from security concerns and data sharing to the current state of the open source movement in Africa. In this blog post, I’ll walk you through key questions and concerns during the session, along with the answers and insights I shared.</p>
<h3>Question 1: Security</h3>
<p>One of the most common questions that came up, and honestly, one of the biggest concerns many people have when stepping into open source, is security. There is a common misconception that because open-source software is free and accessible to everyone, it must not be secure. I’ve encountered this concern often, and it’s understandable if you believe open source means an open invitation to create vulnerabilities. However, the reality is usually the opposite, and addressing this misconception was an important part of the discussion.</p>
<p>The fallacy that open-source software lacks security largely stems from the idea that it is more susceptible to vulnerabilities or malicious tampering because the source code is freely available to anyone. On the contrary, its openness is a key factor in its security, as stated in <a href='https://en.wikipedia.org/wiki/Linus%27s_law'>Linus's Law</a>: 'Given enough eyeballs, all bugs are shallow.' This means that with a large and diverse community of developers and users examining the code, security vulnerabilities are more likely to be identified and fixed quickly. In contrast to proprietary software, where only a limited group has access to the source code, open source allows for continuous peer review, fostering transparency and accountability. As a result, potential threats are exposed early, and the collective expertise of the community helps create more secure, resilient software.</p>
<p>Some open-source projects also adopt encryption standards to protect data at rest and in transit, ensuring that sensitive information remains secure. Additionally, open source initiatives like the <a href='https://openssf.org/'>Open Source Security Foundation</a> implement best practices for data security, such as regular updates, patch management, and secure coding guidelines.</p>
<p>In the <a href='https://www.linuxfoundation.org/hubfs/LF%20Research/World%20of%20Open%20Source%20Global%20Spotlight%202023%20-%20Report.pdf?hsLang=en'>World of Open Source Global Spotlight 2023 survey</a>, 68% of respondents from different organisations using OS Software believed that “open-source software is more secure than closed software”. This reflects growing confidence in the transparency and collaborative nature of open-source, where continuous code review enhances security.</p>
<h3>Question 2: Licensing</h3>
<p>A common confusion, even for experienced developers, is open-source licenses. What makes a license open? What are the types of license and how do they impact open-source contributions? I’ll walk through the basics of licensing and clarify how it plays a crucial role in the open source world.</p>
<p>Licensing is fundamental to the open source world because it defines how software can be used, modified, and shared. When you contribute to or use an open-source project, you agree to its license terms, so understanding these basics is essential.</p>
<p>The core purpose of open source licenses is to regulate how the code can be freely used, modified, and shared. Open-source licenses broadly fall into two major categories:</p>
<h4>Permissive Licenses</h4>
<p>These flexible licenses allow users to do almost anything with the code, including using it in proprietary software. The main requirement is giving credit to the original creators. Examples include the MIT, Apache 2.0, and BSD licenses.</p>
<h4>Copyleft Licenses</h4>
<p>Copyleft licenses come in two forms: Strong copyleft and Weak copyleft, each with different levels of restriction on how derivative works are shared.</p>
<p><strong>Strong copyleft licenses</strong> require that any derivative work, including modifications and extensions, must be released under the same license. This ensures that all changes remain open source and that the freedom to modify and share the code is preserved in any subsequent versions. Examples include the GNU General Public License (GPL) and Affero General Public License (AGPL).</p>
<p><strong>Weak copyleft licenses</strong> allow for more flexibility. They require only modifications to the licensed code itself to be shared under the same license, but permit combining it with proprietary code, allowing for more integration with closed-source projects. Examples include the GNU Lesser General Public License (LGPL).</p>
<p>Licensing is essential in open source as it provides a legal framework that outlines how software can be used, modified, and shared. It establishes clear rules for contributors and users, ensuring that software can be freely distributed while sometimes requiring that improvements remain open to the community. This clarity fosters collaboration, protects contributors, and enables open-source projects to thrive. Projects without proper licensing would lack structure and protection, hindering their growth and adoption.</p>
<p>There is no right or wrong answer when it comes to picking a license.
If your goal is to maintain openness at all times, then the <strong>GNU General Public License (GPL)</strong> can be a good choice as it ensures all derivatives remain open. However, many practitioners choose not to use software licensed under the GPL because its terms can be confusing and it stops you releasing your own software under less restrictive terms.
If you’re developing tools that may be integrated with proprietary systems, a <strong>Mozilla Public License (MPL)</strong> offers flexibility by requiring file-level modifications to remain open but allowing broader use cases under less restrictive terms.</p>
<p>When it comes to data, the <strong>Creative Commons Attribution (CC BY 4.0)</strong> license allows others to freely use and build on your datasets, with proper attribution, promoting wider dissemination and impact.
For educational materials, the <strong>Creative Commons Attribution-ShareAlike (CC BY-SA)</strong> license is ideal, ensuring that your resources are freely available with adaptations also remaining open. These licenses not only support the ethos of open science but also enable responsible sharing and reuse of your work across diverse research environments.</p>
<h3>Question 3: Data Sharing</h3>
<p>Another interesting question that came up was about how data sharing works in the open source world. One participant asked if big companies like Google, OpenAI, and others contribute data to support Open Science. It’s a great point, especially with so many tech giants involved in research and AI —- so how open are they when it comes to sharing data for the greater good?</p>
<p>When it comes to data sharing in open source, big companies do participate. However, the extent of their involvement varies depending on the company’s goals and the nature of the data. Some companies actively share data to support Open Science and drive innovation in research, while others may be more selective about what they share, keeping certain proprietary data confidential.</p>
<p>For example:</p>
<ul>
<li>Google has been a significant player in data sharing, offering open datasets like the Google Open Images Dataset and Google Trends, which have been used in research related to computer vision, AI, and social sciences.</li>
<li>OpenAI, while selective about certain data due to privacy and safety concerns, has shared models like GPT-2 and research papers to advance the field of AI.</li>
<li>Microsoft has made significant contributions through platforms like Azure Open Datasets, which provide access to public data for machine learning and analytics.</li>
<li>IBM also supports Open Science through its IBM Data Asset eXchange (DAX), providing open datasets specifically curated for AI applications.</li>
</ul>
<p>These companies influence research by making valuable data available to the scientific community, enabling advancements in machine learning, healthcare, and climate science. However, there are limits to what they share, especially when it comes to sensitive or proprietary data, but their contributions are still impactful in fostering innovation and collaboration.</p>
<h3>Question 4: Open Source community in Africa</h3>
<p>There were also some great questions about the Open Source community in Africa, particularly how it has grown over the years and how it has tackled challenges like limited infrastructure, internet connectivity issues, and electricity shortages. It’s something I’ve seen firsthand, and it’s inspiring to see how the community has adapted and found creative solutions to keep pushing forward.</p>
<p>Over the past few years, the Open Source community in Africa has seen tremendous growth. What started as small, isolated groups of developers has evolved into a vibrant network of contributors, developers, and advocates driving innovation across the continent. Communities like DevC (Developer Circles), GDG (Google Developer Groups), and organizations like Open Source Community Africa (<a href='https://oscafrica.org/'>OSCA</a>) and <a href='https://github.com/chaoss/chaoss-africa'>CHAOSS Africa</a> have been at the forefront of promoting open-source culture, organizing hackathons, meetups, and contributing to global projects.</p>
<p>One of the significant hurdles African developers face is infrastructure challenges, including unreliable internet connectivity and electricity shortages. Despite these barriers, the community has found creative ways to adapt. For instance, in areas with limited connectivity, developers often download resources, such as documentation or packages, during periods of stable internet, allowing them to work offline. Similarly, shared workspaces and tech hubs have emerged in African cities, providing access to reliable internet, electricity, and collaborative environments.</p>
<p>Organizations like GitHub Education and Google have also contributed by offering tools, free access to repositories, and learning resources that help developers collaborate, even in challenging conditions. The push towards mobile-first solutions has also allowed African developers to overcome some of the traditional infrastructure challenges by building lightweight, offline-capable applications.</p>
<p>The growth of open source in Africa is a testament to the resilience and creativity of its tech community. By overcoming infrastructure limitations, developers have contributed to significant projects and continue to shape the future of open source innovation on the continent.</p>";
	$datestring = "25 November 2024";
	
      include_once $path . '/shared/updates_template.php';
    ?>

    </html>
    