<?php session_start(); 
include("mysql_connect.inc.php");
if (isset($_SESSION['username']))
{
				$id = $_SESSION['username'] ;
				$role = $_SESSION['role'];
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>User Terms</title>
    <link rel="icon" href="assets/img/edited2.jpg">
    <!-- Bootstrap Core CSS -->
    <link href="assets/libs/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/one-page-wonder.css" rel="stylesheet">
    <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style>
    body
    {
	    background-image:url('assets/img/edited.png');
    }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>    <![endif]-->
  </head>
  <body>

		
        <!-- /.navbar-collapse --> </div>
      <!-- /.container --> </nav>
    <!-- Page Content -->
    <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <div class="row">
        <div class="col-lg-12">
          
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a> </li>
            <li class="active">Terms and Conditions</li>
          </ol>
        </div>
      </div>
      <!--where you start-->
      <div class="row row-term">
        <div class="col-lg-12">
          <div class="jumbotron">
            <div class="featurette" id="about"> <br>
              <h2 class="featurette-heading" style='text-align:center'><span class="text-muted">Terms and
                  Conditions<br>
                </span></h2>
              <p>I.	Presentation</p>
              <p>A.	Definition</p>
              <p>Student: as part of the use of the platform, the word “student” refers to the person who is looking for an internship , being who will apply to the internship position.
              Internship advisor: as part of the use of the platform, the word “internship advisor” refers to the person already in the company who is looking for a new intern. This is this “Intern advisor” who posts the internship position in the name and on behalf of the company.
Company: in the context of the use of the platform, the word “Company” refers to an organization which is searching for interns. It is the party who requests the service to post an internship position, or an internship advisor already in the position.

Service: in the context of the use of the platform, the word “Service” refers to the publication of the positions, as well as the skill-matching.

Skill-matching:  the Skill-matching allows a comparison between the skills required for the intern position and the students’ skills and establishes a classification from the most appropriate candidates to the least appropriate candidates.

Internship position: in the context of the use of the platform, the word “Internship position” refers to the offer of the internship announcement.  


Skills : in the context of the use of the platform, the word “Skills” refers to the different qualifications required in order to practice the offer position.
              </p>
              <p>B. The purpose of the platform</p>

              <p>The platform “ViceVersa” is a meeting point between the internship offers and the internship demands on the international level. It allows students to find many internship positions posted by the internship advisors or the service itself. Students can apply only by a simple click.

The service is made without the prerequisite submission of a CV. Only the skills matter. 
After having posted a demand of the internship position, or requested an internship advisor to do so, the company fills the skills required by the student, and the matching system of skills is in charge of comparing with the skills of the student candidates. The service will rank the most qualified students for the position to the less qualified. The company just needs to organize a number of interviews which it wants, and chooses the student who will join the company. 
              </p>

              <p>II.	The use of the platform</p>
              <p>A - Subscription</p>

              <p>1)	The student</p>

	            <p>In order to subscribe to the service, the student has to give the information about his/her LAST NAME, FIRST NAME, DATE OF BIRTH, NATIONALITY, GENDER, PASSPORT NUMBER/IDENTITY CARD NUMBER, then upload a profile photo as well as a proof of identity.
For the subscription to be taken into account, the student must accept the Terms and Conditions of the use of the service. By this acceptance, the student agrees to comply with the Terms and Conditions and thus accepts their consequences.
              </p>
              <p>2)	The internship advisor</p>

              <p>In order to subscribe to the service, the internship advisor has to give the information about his/her LAST NAME, FIRST NAME, DATE OF BIRTH, NATIONALITY, GENDER, MAILING ADDRESS, TELEPHONE NUMBER, SKYPE/WHATSAPP CONTACT then upload a profile photo as well as a proof of identity. 
For the subscription to be taken into account, the internship advisor must accept the Terms and Conditions of the use of the service. By this acceptance, the internship advisor agrees to comply with the Terms and Conditions and thus accepts their consequences.
              </p>
              <p>3)	The company</p>

              <p>In order to subscribe to the service, the company has to give the information about  COMPANY NAME, IDENTIFICATION NUMBER OF THE COMPANY, ASSURANCE NUMBER OF THE COMPANY including the liability insurance, FIELD OF THE COMPANY’S ACTIVITY, NAME OF THE RECRUITER, SKYPE/whatsapp CONTACT, TELEPHONE NUMBER  then upload its logos (This upload give to the service the right to use it) as well as a proof of identity. 

For the subscription to be taken into account, the company must accept the Terms and Conditions of the use of the service. By this acceptance, the company agrees to comply with the Terms and Conditions and thus accepts their consequences.
              </p>
              <p>B - The submission of the post</p>

              <p>1)	Post providing by an internship advisor</p>

              <p>An internship advisor within a company can post a position concerning his replacement. In this sense, he can keep the internship title as his experience to create the post.
He has to give the information about TITLE, CATEGORY, COMPANY NAME, NUMBER OF INTERNS SEEKING, DEADLINE OF THE RECRUITMENT, STARTING DATE OF THE INTERNSHIP,  DURATION, ALLOWANCE, CITY, COUNTRY, LANGUAGE 1, (spoken language in the compagny) REQUIRED LANGUAGE LEVEL 1, COST OF LIVING, DESCRIPTION OF THE POSITION, PRICE OF THE CONNECTION.
	Then he gives information about the skills he estimates which are essentials for the position, in order to that skills be compared to the ones given by the students candidates.
              </p>    
              <p>2) Posts provided by the company</p>

	            <p>A company can choose to provide its offers but through ViceVersa service.
In order to do this, the company has to give the information about TITLE, CATEGORY, COMPANY NAME, NUMBER OF INTERNS SEEKING, DEADLINE OF THE RECRUITMENT, STARTING DATE OF THE INTERNSHIP,  DURATION, ALLOWANCES, CITY, COUNTRY, LANGUAGE 1, (spoken language in the compagny) REQUIRED LANGUAGE LEVEL 1, COST OF LIVING, DESCRIPTION OF THE POSITION.
Then the company gives information about the skills it estimates which are essentials for the position, in order that the skills be compared to the ones given by the students candidates.
              </p>

              <p>C - Response to the internship offer</p>

              <p>1)	Terms:</p>

	            <p>Once registered, the student can consult all the offers available on the service. To apply for a position, he just needs to choose and his answer will be automatically taken into consideration. Beforehand, He would need to give his diverse skills which he feels endowed with, as well as his level in those.
              </p>    
              <p>2)	Skill-matching</p>

	
	            <p>Once the response is taken into account, the service will compare the requested skills with the skills informed by the student. The real-time ranking of the most qualified applications will be given to the company who will be the only one to make the decision of a potential interview.
              </p>
              <p>D- Planning the interviews</p>

              <p>1) Definition of the number of interviews</p>  

              <p>Once the skill-matching is done, the company knows not only the exact number of candidates, but also the relevance of their responses. It can freely plan the number of interviews, by indicating to the service. In this way, the interviews will be fixed according to the rankings: if the company wants to agree on four interviews, then the four most suitable applications would be called for an interview.
              </p>
              <p>2) Acceptance of interviews</p>    

              <p>The student who is offered an interview has the choice to accpet it or refused it. In case of acceptance, he has to accept it by clicking on the green icon. The student must agree to present himself in the interview and accept to be deducted the fixed amount of… corresponding to the service fees for connecting to all parties.
              </p>
              <p>E- Signature of the internship agreement</p>

              <p>Once the series of interviews have passed, the company chooses an applicant and asks him to send an internship agreement in order to sign it. The service will ask the student to proceed the steps and forward the internship agreement to the service, which will forward it to the company. Once each party signed the agreement, the service takes the remaining balance due from the student and splits the corresponding share to the internship advisor on his account.
              </p>
              <p>F- Suspension/Deletion of the account</p>

              <p>1) Voluntarily</p>
              <p>The user can choose to delete his account at any time through the tab “delete the account”
This will be effective within 48 hours and the user will no longer be able to access the entire service. The user will only be allowed to check some parts of the posts without being able to see the whole nor to reply.
              </p>
              <p>2) At the discretion of the platform</p>
 
              <p>a)	Conditions</p>

	            <p>The service reserves the rights to block all the contents against the good use of the platform or ethics. It could be text, pictures or videos contents. The service will indicate precisely: “This post has been deleted due to its offensive content”.
The service must punish all abuse or bad behaviour, reported or observed,
of the user. The persons behind these acts are solely responsible for their misbehaviors and cannot claim any responsibility from the service for any penalty, or blocked account. However, he can defend it by addressing his observations in the email provided in the “Contact” section.
              </p>
              <p>b) Consequences</p>

              <p>The service sets a ban system by recidivism. In this way:</p>
              <p>  > 1st time: a warning with the message “Your account has been associated with inappropriate activity. It will be banned next time”</p>
              <p>  > 2nd time: ban this account for 24 hours “Your account has been associated with inappropriate activity. It is banned for 24 hours”</p>
              <p>  > 3rd time: ban this account for 7 days “Your account has been associated with inappropriate activity. It is banned for 7 days”</p>
              <p>  > 4th time: ban this account for 1 month “Your account has been associated with inappropriate activity. It is banned for 1 month”</p>
              <p>  > 5th time: ban this account permanently</p>

              <p>G - Definition of responsibilities in the use of service</p>

              <p>1) Common responsibilities</p>

              <p>The parties must fill out all the requested fields with good faith. They are solely responsible for the information, and are the sole owners of the information.
They must adopt behaviors which are not contrary to good morals and will be solely responsible for them.
              </p>
	            <p>2) Students’ responsibilities</p>
	
              <p>The student is the only one who is responsible for the accuracy of the information provided. The student fills each field as well as the skills which he is likely to provide in a good faith.
The student accepts to adopt a respectable attitude during the possible interviews at the risk of being condemned by the service.
The company does not take any responsibilities if there is an error on the qualifications of the person or the fault information.
              </p>
              <p>3) Internship advisors’ responsibilities</p>

              <p>The internship advisor is the only one who is responsible for the accuracy of the information provided. The internship advisor fills each field as well as the skills which he is likely to provide in a good faith.													
need a translation:</p>
              <p>En aucun cas les estimations concernant le coût de la vie ainsi que les compétences ne constituent une réalité, et le service ne saurait être tenu pour responsable de ne pas avoir vérifié ces estimations.
              </p>
              <p>L'étudiant ne saurait tenir le service pour responsable en cas d'erreur sur les qualités requises, ou tromperie manifeste dans ces estimations.
              </p>
              <p>L'entreprise ne saurait tenir pour responsable le service en cas d'erreur sur les qualités requises. 
              </p>
              <p>4) The company’s responsibilities</p>

              <p>The company is committed to ensuring the effectiveness of the proposed position. In addition, the company agrees to respect all of the nondiscrimination rules applicable to hiring and also French moral rules. Otherwise, the company is banned from the service, and might be charged of some potential penal proceedings prosecuted by the student supported by the data of the service.
The student does not take any responsibilities with the service in case of an error on the person of the employer party, the proposed position, or the discrimination in hiring.
              </p>
              <p>5) Responsibilities of the service</p>

              <p>The service is committed to be operational on 7 days and 24 hours. All functional issues will be notified.
              </p>
              <p>The parties are responsible for the given information in the good faith. The service is not responsible, in any case, for any deception regarding the person, lies, unkept promises, fraud and any acts against morality.
              </p>

              <p>III- Legal provisions</p>

              <p>A- Payment framework</p>
              <p>1)	Payment implementation</p>
              <p>The payment is made in several parts:</p>

              <p>-direct debit pre-authorization : The parties communicate their bank details in order that the service can request their bank for the reservation of the total amount of the transaction (interview + intern advisor fees for agreement signature + service fees).</p>
              <p>-If the interview is agreed: The service asks for the direct debit of the interview’s fees on the total amount reserved.
              <p>-If the interview is not agreed: The service cancels the pre-authorization, and the party gets the entire disponibility of the total amount.
              <p>-If the agreement is signed: The service asks for the direct debit of the balance due on the total amount reserved. Then the platform gives the corresponding amount to the internship advisor upon the signature of the agreement.
              <p>-If the agreement is not signed: The service cancels the pre-authorization on the balance due: the party gets the entire total amount back, less the service fees debited for the interview.
              <p>The payment must always be made in euros: The total amount reserved corresponds therefore to the amount proposed by the internship advisor, plus the interview fees, plus the service fees upon the signature of the agreement, all converted in euros (in case of a foreign currency) at the exchange rate prevailing on the application day of the pre-authorization.
              </P>
              <p>2) The responsibilities of the parties</p>

              <p>a)	The student</p>
	
              <p>The student must ensure to have a credit balance, on the given account, at least the total amount which would be due in case of the signature of the agreement (including the interview fees). If the bank does not allow the reservation of the total amount, then the application will be suspended.
              </p>
	
              <p>b)	The internship advisor</p>

	            <p>The internship advisor must ensure that his valid bank details are given. The service transaction is made between him and the student.
              </p>
              <p>c) The company</p>

              <p>The company must ensure that its valid bank details are given and confirm that the account is the creditor of the amount demanded by the service for each direct debit.
 the company must ensure that the account is credited with the required amount, corresponding to the number of internship agreements signed.
              </p> 
              <p>d) The service</p>

              <p>The service, as the representative of the internship advisor, is committed to do everything possible to collect the amount owed by the student to the internship advisor, and give to him in its entirely the next month following the collect of it.to be modify
              </p>
              <p>The service, as the creditor of the company and the student, is committed to return the total amount which are no longer due within 15 working days of the confirmation of the unfulfilled operation.
              </p>
              <p>B- Protection of personal data</p>

              <p>The service ensures the different parties that their data is anonymous when the data is entered in the database. The information in this database can be used in commercial operations without the objection of the users of the service, as long as the provided information in the database does not contain any sensitive information such as Name, Address, Bank Account, Telephone or Mail.
In addition, regarding the connection, the service makes sure to proceed the encryption of the usernames and passwords of the users, who are solely responsible of the loss or usurpation of those by their fault. The service tries to protect itself against potential hacks.
              </P>
              <p>C- Intellectual property</p>

              <p>1)	The service</p>

              <p>The service “ViceVersa” is the owner of all of the copyrights relating to logos, brands, layout and encodings. In the case of the subscription on the platform without a license to use these elements, the user will risk being accused of plagiarism and unfair competition.
In the same way, the algorithm system used to match skills remains confidential and is protected under the copyright law. It can not be reproduced freely without prior authorization from ViceVersa.
              </P>
              <p>2) Content published by the users</p>

              <p>The users retain the ownership of all copyrights relating to their publications. They are free to defend their publications, or not, against the potential copy of their contents without their permission. The platform is committed not to reproduce the contents of the publications without prior authorization of the author.
              </p>
              <p>3) Database</p>

              <p>ViceVersa remains the owner of all of the database, not only the content but also the system which allows the creation of these: the algorithm matching system, the subscription service and the entered and searched skills.
              </p>
              <p>D- Applicable law</p>

              <p>Given that the hosting of the platform is in France, the general conditions are governed by the French law and in front of the French court.
The same conditions apply to the provisions of intellectual property as well as those related to the responsibilities of the parties.
              </p>
              <p>E- Disclaimer/ mentions légales: identité qui est propriétaire de la plateforme.
Association loi 1901 n° …………….Boardingates, 17 rue Marceau 34000 Montpellier, n° siret…………...
              </p>
              <p>IV- Modification of general conditions</p>
		
		          <p>The provisions previously declared are subject to the modifications and updates. Therefore, the user must regularly be informed by himsef of the development of the website and the general conditions of the use in order to accept them in full knowledge.
              </p>
Rajouter: dernière mise à jour des CGU le 23 mai 2017 (exemple)




 &nbsp;</form>
              <p><br>
              </p>
            </div>
          </div>
        </div>
        <hr>
        <!--where you end-->
        <!-- Footer -->
        <footer>
          <div class="row">
            <div class="col-lg-12">
              <p style="text-align: right;">contact@boardingates.com </p>
              <div style="text-align: right;">+33 6 64 11 38 85<br>
              </div>
              <div style="text-align: right;"> Copyright © 2016 </div>
            </div>
          </div>
        </footer>
      </div>
      <!-- /.container -->
      <!-- jQuery -->
      <script src="assets/libs/jquery/jquery.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="assets/libs/bootstrap/bootstrap.min.js"></script> </div>
  </body>
</html>
