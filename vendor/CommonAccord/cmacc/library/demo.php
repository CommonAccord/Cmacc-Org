<?php
/*require('./vendor/autoload.php'); */
ini_set("allow_url_include", true);
include("header.php");

?>

<div class="container">

<table class="responsive">
   <h3 class="title">&#10003; Bringing the world to Agreement &nbsp; &nbsp; &#10003; A world without paperwork  &nbsp; &nbsp; &#10003; Smart Contracts</h3>
     
   <p><br>Examples of codified legal documents that describe the benefits provided by CommonAccord to the legal profession and the world at large.
<br/><br/>
    <table class="table table-striped table-condensed table-bordered" style="padding:20px">

<tr>
<td><img src="http://iconizer.net/files/Luminight/thumb/128/filter_data.png" height="50px"/></td>
																	 <td width="100px"><a href=http://ga4gh.commonaccord.org/index.php?action=list&file=./Demo/>Patient Consent</a></td>
				 <td>Automating Patient Consents, with an international approach:<br>Cmacc's Consent Forms can "inherit" clauses according to the language, jurisdiction, situation of the data subject, etc., making them transparent, consistent and computable. </td>
</tr>

<tr>
<td><img src="https://d4hm2u4pioc0c.cloudfront.net/icons/png/o/blue_dark_grey/256x256/security_badge.png"height="50px"></td>
<td><a href=<?=$_SERVER['PHP_SELF']?>?action=list&file=doc/escrow/>Escrow system</a></td>
<td>An escrow can assure the buyer that the seller will actual perform: <br>
Cmacc allows the dynamic generation of escrow contracts and follow up documents between multiple parties, relying on the template system.</td></tr>

<tr>
<td><img src="http://www.vermontsales.co.za/images/homepage/privacy_policy_icon.png" height="50px"></td>
<td><a href=<?=$_SERVER['PHP_SELF']?>?action=source&file=./02/Demo/Acme_Privacy_Policy.md>Privacy policy</a></td>
<td>Privacy policies are complex documents with lots of boilerplate, which makes it difficult for users to understand what rights they retain and what they are giving up.<br> The Cmacc datamodel allows for the collaborative creation of Privacy Policies that inherit from 'standards' making it possible for the community to come to agreement, companies to follow best practices and people to know their rights by tracking the 'diffs' (changes).
</td></tr>
<tr>
<td><img src="http://www.richierichardson.in/wp-content/uploads/2014/11/policies-icon.png" height="50px"></td>
<td><a href=<?=$_SERVER['PHP_SELF']?>?action=list&file=01/Demo/>Terms of Use</a></td>
<td>Terms of Use vary needlessly:<br> Cmacc's flexible data model allows us build simple Terms of Use by relying on libraries that can be combined and modified as needed.</td></tr>

<tr>
<td><img src="http://mirrors.creativecommons.org/presskit/icons/cc.large.png" height="50px"></td>
<td><a href="<?=$_SERVER['PHP_SELF']?>?action=list&file=CreativeCommons/License/4_0/">Copyright licensees</a></td>
<td>The suite of Creative Commons Licences is presented here as source code:<br> By merely forking and extending previous licenses, we can implement a complex system of conditions, which always remain easy to read for everyone.</td></tr>

	</table>
	</table>
</div>
<style>
	#filelist { 
		display: none;
	}
</style>
