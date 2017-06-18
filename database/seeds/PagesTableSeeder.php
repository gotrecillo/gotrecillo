<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'template' => 'legal',
                'name' => 'Policy Privacy',
                'title' => 'Privacy Policy',
                'slug' => 'privacy',
                'content' => '<h1>Privacy Policy of <strong>gotrecillo.com</strong></h1>

<p>This Application collects some Personal Data from its Users.</p>

<h2>Data Controller and Owner</h2>

<p>Sergio Panadero Pérez. - San Gregorio 29 floor F - 28260 Galapagar (Spain)</p>
<p><b>Owner contact email:</b> gotrecillo@gotrecillo.com</p>


<h2>Types of Data collected</h2>

<p>
Among the types of Personal Data that this Application collects, by itself or through third parties,
there are:
first name, email address, Cookies and Usage Data.
</p>


<p>Other Personal Data collected may be described in other sections of this privacy policy or by
dedicated
explanation text contextually with the Data collection.<br/>The Personal Data may be freely provided
by
the User, or collected automatically when using this Application.<br/>Any use of Cookies - or of
other
tracking tools - by this Application or by the owners of third party services used by this
Application,
unless stated otherwise, serves to identify Users and remember their preferences, for the sole
purpose
of providing the service required by the User.<br/>Failure to provide certain Personal Data may make
it
impossible for this Application to provide its services.</p>
<p>Users are responsible for any Personal Data of third parties obtained, published or shared through
this
Application and confirm that they have the third party\'s consent to provide the Data to the
Owner.</p>

<h2>Mode and place of processing the Data</h2>

<h3>Methods of processing</h3>

<p>The Data Controller processes the Data of Users in a proper manner and shall take appropriate
security
measures to prevent unauthorized access, disclosure, modification, or unauthorized destruction of
the
Data.<br/>The Data processing is carried out using computers and/or IT enabled tools, following
organizational procedures and modes strictly related to the purposes indicated. In addition to the
Data
Controller, in some cases, the Data may be accessible to certain types of persons in charge,
involved
with the operation of the site (administration, sales, marketing, legal, system administration) or
external parties (such as third party technical service providers, mail carriers, hosting providers,
IT
companies, communications agencies) appointed, if necessary, as Data Processors by the Owner. The
updated list of these parties may be requested from the Data Controller at any time.</p>

<h3>Place</h3>

<p>The Data is processed at the Data Controller\'s operating offices and in any other places where the
parties involved with the processing are located. For further information, please contact the Data
Controller.</p>

<h3>Retention time</h3>

<p>The Data is kept for the time necessary to provide the service requested by the User, or stated by
the
purposes outlined in this document, and the User can always request that the Data Controller suspend
or
remove the data.</p>

<h2>The use of the collected Data</h2>

<p>
The Data concerning the User is collected to allow the Owner to provide its services, as well as for
the
following purposes:
Contacting the User, Analytics and Registration and authentication.
</p>


<p>The Personal Data used for each purpose is outlined in the specific sections of this document.</p>

<h2>Detailed information on the processing of Personal Data</h2>
<p>Personal Data is collected for the following purposes and using the following services:</p>

<ul>
<li>
<h3>Analytics</h3>
<p>The services contained in this section enable the Owner to monitor and analyze web
traffic and can be used to keep track of User behavior.</p>

<h4>Google Analytics (Google Inc.)</h4>

<p>Google Analytics is a web analysis service provided by Google Inc. (“Google”). Google
utilizes the Data collected to track and examine the use of this Application, to prepare
reports on its activities and share them with other Google services.<br/>
Google may use the Data collected to contextualize and personalize the ads of its own
advertising network.</p>

<p>
Personal Data collected:
Cookies and Usage Data.
</p>

<p>
Place of processing: US
&ndash;

<a href="https://www.google.com/intl/en/policies/privacy/" target="_blank">Privacy
Policy</a>
&ndash;

<a href="https://tools.google.com/dlpage/gaoptout?hl=en"
onClick="javascript:return tryFunc(\'tryGaOptOut\',{href:\'https://tools.google.com/dlpage/gaoptout?hl=en\'})"
target="_blank">Opt Out</a>
</p>
</li>


<li>
<h3>Contacting the User</h3>

<h4>Contact form (This Application)</h4>

<p>By filling in the contact form with their Data, the User authorizes this Application to
use these details to reply to requests for information, quotes or any other kind of
request as indicated by the form’s header.</p>

<p>
Personal Data collected:
email address and first name.
</p>
</li>


<li>
<h3>Registration and authentication</h3>

<p>By registering or authenticating, Users allow this Application to identify them and give
them access to dedicated services.<br/>
Depending on what is described below, third parties may provide registration and
authentication services. In this case, this Application will be able to access some
Data, stored by these third party services, for registration or identification purposes.
</p>


<h4>GitHub OAuth (GitHub Inc.)</h4>

<p>GitHub OAuth is a registration and authentication service provided by GitHub Inc. and is
connected to the GitHub network.</p>


<p>
Personal Data collected:
various types of Data as specified in the privacy policy of the service.
</p>


<p>

Place of processing: US
&ndash;

<a href="https://help.github.com/articles/github-terms-of-service#b-api-terms"
target="_blank">Privacy Policy</a>
</p>
</li>
</ul>

<h2>Additional information about Data collection and processing</h2>

<h3>Legal action</h3>
<p>
The User\'s Personal Data may be used for legal purposes by the Data Controller, in Court or in
the
stages leading to possible legal action arising from improper use of this Application or the
related
services.<br/>The User declares to be aware that the Data Controller may be required to reveal
personal
data upon request of public authorities.
</p>

<h3>Additional information about User\'s Personal Data</h3>
<p>
In addition to the information contained in this privacy policy, this Application may provide
the User
with additional and contextual information concerning particular services or the collection and
processing of Personal Data upon request.
</p>

<h3>System logs and maintenance</h3>
<p>
For operation and maintenance purposes, this Application and any third party services may
collect files
that record interaction with this Application (System logs) or use for this purpose other
Personal Data
(such as IP Address).
</p>

<h3>Information not contained in this policy</h3>
<p>
More details concerning the collection or processing of Personal Data may be requested from the
Data
Controller at any time. Please see the contact information at the beginning of this document.
</p>

<h3>The rights of Users</h3>
<p>
Users have the right, at any time, to know whether their Personal Data has been stored and can
consult
the Data Controller to learn about their contents and origin, to verify their accuracy or to ask
for
them to be supplemented, cancelled, updated or corrected, or for their transformation into
anonymous
format or to block any data held in violation of the law, as well as to oppose their treatment
for any
and all legitimate reasons. Requests should be sent to the Data Controller at the contact
information
set out above.
</p>
<p>
This Application does not support “Do Not Track” requests.<br/>To determine whether any of the
third
party services it uses honor the “Do Not Track” requests, please read their privacy policies.
</p>

<h3>Changes to this privacy policy</h3>
<p>
The Data Controller reserves the right to make changes to this privacy policy at any time by
giving
notice to its Users on this page. It is strongly recommended to check this page often, referring
to the
date of the last modification listed at the bottom. If a User objects to any of the changes to
the
Policy, the User must cease using this Application and can request that the Data Controller
remove the
Personal Data. Unless stated otherwise, the then-current privacy policy applies to all Personal
Data the
Data Controller has about Users.
</p>

<h3>Information about this privacy policy</h3>
<p>
The Data Controller is responsible for this privacy policy, prepared starting from the modules
provided
by Iubenda and hosted on Iubenda\'s servers.
</p>


<h3>
Definitions and legal references
</h3>


<h4>Personal Data (or Data)</h4>
<p>Any information regarding a natural person, a legal person, an institution or an association,
which is, or can be, identified, even indirectly, by reference to any other information,
including a personal identification number.</p>

<h4>Usage Data</h4>
<p>Information collected automatically from this Application (or third party services employed in
this Application), which can include: the IP addresses or domain names of the computers utilized
by the Users who use this Application, the URI addresses (Uniform Resource Identifier), the time
of the request, the method utilized to submit the request to the server, the size of the file
received in response, the numerical code indicating the status of the server\'s answer
(successful outcome, error, etc.), the country of origin, the features of the browser and the
operating system utilized by the User, the various time details per visit (e.g., the time spent
on each page within the Application) and the details about the path followed within the
Application with special reference to the sequence of pages visited, and other parameters about
the device operating system and/or the User\'s IT environment.</p>

<h4>User</h4>
<p>The individual using this Application, which must coincide with or be authorized by the Data
Subject, to whom the Personal Data refers.</p>

<h4>Data Subject</h4>
<p>The legal or natural person to whom the Personal Data refers.</p>

<h4>Data Processor (or Data Supervisor)</h4>
<p>The natural person, legal person, public administration or any other body, association or
organization authorized by the Data Controller to process the Personal Data in compliance with
this privacy policy.</p>

<h4>Data Controller (or Owner)</h4>
<p>The natural person, legal person, public administration or any other body, association or
organization with the right, also jointly with another Data Controller, to make decisions
regarding the purposes, and the methods of processing of Personal Data and the means used,
including the security measures concerning the operation and use of this Application. The Data
Controller, unless otherwise specified, is the Owner of this Application.</p>

<h4>This Application</h4>
<p>The hardware or software tool by which the Personal Data of the User is collected.</p>

<h4>Cookies</h4>
<p>Small piece of data stored in the User\'s device.</p>


<hr/>

<h4>Legal information</h4>
<p>Notice to European Users: this privacy statement has been prepared in fulfillment of the
obligations under Art. 10 of EC Directive n. 95/46/EC, and under the provisions of Directive
2002/58/EC, as revised by Directive 2009/136/EC, on the subject of Cookies.</p>
<p>This privacy policy relates solely to this Application.</p>


<p>
Latest update: June 17, 2017
</p>',
                'extras' => NULL,
                'created_at' => '2017-06-17 10:04:51',
                'updated_at' => '2017-06-17 10:04:51',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'template' => 'legal',
                'name' => 'Cookies Policy',
                'title' => 'Cookies policy',
                'slug' => 'cookie',
                'content' => '<p><strong>Cookies policy</strong></p>

<p><strong>1. Introduction</strong></p>

<p>1.1 This website uses cookies.</p>

<p>1.2 We will ask you to consent to our use of cookies in accordance with the terms of this policy when you first visit our website.</p>

<p><strong>2. Credit</strong></p>

<p>2.1 This document was created using a template from SEQ Legal (<a href="http://www.seqlegal.com/">http://www.seqlegal.com</a>).</p>

<p><em>You must retain the above credit. Use of this document without the credit is an infringement of copyright. However, you can purchase from us an equivalent document that does not include the credit.</em></p>

<p><strong>3. About cookies</strong></p>

<p>3.1 A cookie is a file containing an identifier (a string of letters and numbers) that is sent by a web server to a web browser and is stored by the browser. The identifier is then sent back to the server each time the browser requests a page from the server.</p>

<p>3.2 Cookies may be either &quot;persistent&quot; cookies or &quot;session&quot; cookies: a persistent cookie will be stored by a web browser and will remain valid until its set expiry date, unless deleted by the user before the expiry date; a session cookie, on the other hand, will expire at the end of the user session, when the web browser is closed.</p>

<p>3.3 Cookies do not typically contain any information that personally identifies a user, but personal information that we store about you may be linked to the information stored in and obtained from cookies.</p>

<p>3.4 Cookies can be used by web servers to identify and track users as they navigate different pages on a website and identify users returning to a website.</p>

<p><strong>4. Our cookies</strong></p>

<p>4.1 We use only session cookies on our website.</p>

<p>4.2 The names of the cookies that we use on our website, and the purposes for which they are used, are set out below:</p>

<p>(a) we use <em>gotrecillo_session</em> to improve the website&#39;s usability.</p>

<p><br />
&nbsp;</p>

<p><strong>5. Analytics cookies</strong></p>

<p>5.1 We use Google Analytics to analyse the use of our website.</p>

<p>5.2 Our analytics service provider generates statistical and other information about website use by means of cookies.</p>

<p>5.3 The analytics cookies used by our website have the following names: _ga, _gat, __utma, __utmt, __utmb, __utmc, __utmz and __utmv.</p>

<p>5.4 The information generated relating to our website is used to create reports about the use of our website.</p>

<p>5.5 Our analytics service provider&#39;s privacy policy is available at: <a href="http://www.google.com/policies/privacy/">http://www.google.com/policies/privacy/</a>.</p>

<p><strong>6. Third party cookies</strong></p>

<p>6.1 This website doesn&rsquo;t use third party cookies.</p>

<p><strong>7. Blocking cookies</strong></p>

<p>7.1 Most browsers allow you to refuse to accept cookies; for example:</p>

<p>(a) in Internet Explorer (version 11) you can block cookies using the cookie handling override settings available by clicking &quot;Tools&quot;, &quot;Internet Options&quot;, &quot;Privacy&quot; and then &quot;Advanced&quot;;</p>

<p>(b) in Firefox (version 47) you can block all cookies by clicking &quot;Tools&quot;, &quot;Options&quot;, &quot;Privacy&quot;, selecting &quot;Use custom settings for history&quot; from the drop-down menu, and unticking &quot;Accept cookies from sites&quot;; and</p>

<p>(c) in Chrome (version 52), you can block all cookies by accessing the &quot;Customise and control&quot; menu, and clicking &quot;Settings&quot;, &quot;Show advanced settings&quot; and &quot;Content settings&quot;, and then selecting &quot;Block sites from setting any data&quot; under the &quot;Cookies&quot; heading.</p>

<p>7.2 Blocking all cookies will have a negative impact upon the usability of many websites.</p>

<p>7.3 If you block cookies, you will not be able to use all the features on our website.</p>

<p><strong>8. Deleting cookies</strong></p>

<p>8.1 You can delete cookies already stored on your computer; for example:</p>

<p>(a) in Internet Explorer (version 11), you must manually delete cookie files (you can find instructions for doing so at <a href="http://windows.microsoft.com/en-gb/internet-explorer/delete-manage-cookies#ie=ie-11">http://windows.microsoft.com/en-gb/internet-explorer/delete-manage-cookies#ie=ie-11</a>);</p>

<p>(b) in Firefox (version 47), you can delete cookies by clicking &quot;Tools&quot;, &quot;Options&quot; and &quot;Privacy&quot;, then selecting &quot;Use custom settings for history&quot; from the drop-down menu, clicking &quot;Show Cookies&quot;, and then clicking &quot;Remove All Cookies&quot;; and</p>

<p>(c) in Chrome (version 52), you can delete all cookies by accessing the &quot;Customise and control&quot; menu, and clicking &quot;Settings&quot;, &quot;Show advanced settings&quot; and &quot;Clear browsing data&quot;, and then selecting &quot;Cookies and other site and plug-in data&quot; before clicking &quot;Clear browsing data&quot;.</p>

<p>8.2 Deleting cookies will have a negative impact on the usability of many websites.</p>

<p><strong>9. Cookie preferences</strong></p>

<p>9.1 You can not manage your preferences relating to the use of cookies on our website.</p>

<p><strong>10. Our details</strong></p>

<p>10.1 This website is owned and operated by <em>Sergio Panadero P&eacute;rez</em>.</p>

<p>10.3 Our principal place of business is at <em>San Gregorio 29, 28260 Galapagar(Spain)</em>.</p>

<p>10.4 You can contact us:</p>

<p>(a) using our website contact form</p>

<p>(b) by email, using gotrecillo@gotrrecillo.com</p>',
                'extras' => NULL,
                'created_at' => '2017-06-17 13:03:30',
                'updated_at' => '2017-06-17 13:06:58',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}