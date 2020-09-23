<!DOCTYPE html>
<html lang="zxx">
   	<head>
      <title>Devzila Software Solutions</title>
      <?php include("inc/head.inc.php");?>
      <style>
          .image-animation{
               position: relative;
              -webkit-animation-name: test; /* Safari 4.0 - 8.0 */
              -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
              -webkit-animation-iteration-count: 3; /* Safari 4.0 - 8.0 */
              animation-duration: 4s;
              animation-iteration-count: 3;
          }
        @keyframes test{ 0% {right:50px; top:0px;}
                         25% {right: 0px; top:0px;}
        }
      </style>
   	</head>
   	<body>
   	<?php include("inc/header.inc.php");?>
   	    <div class="container">
            <div class="row pt-5">
                <div class="col-sm-4">
                    <img src="img/workflow/infogathering.png" height="200" width="250" alt="information gathering" class="image-animation">
                </div>
                <div class="col-sm-8">
                    <h3 class="subheadings-title">Information gathering</h3>
                    <p class="pt-3">Our project discussion methodology includes gathering all the requirements from the client through different means depending on the client expertise. These can be in form of questionnaire, use cases, agile story boards, wire frames etc.</p>

                    <p class="pt-3"><strong>Tools</strong> – customized templates, questionnaires, agile story board, use cases</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-sm-4">
                    <img src="img/workflow/businessAna.png" height="200" width="250" alt="Business Analysis" class="image-animation">
                </div>
                <div class="col-sm-8">
                    <h3 class="subheadings-title">Business Analysis</h3>
                    <p class="pt-3">Next, we analyze the requirements and provide process/product improvement suggestions and comments. Our experience and expertise helps us to innovate in this phase as this defines the success and architectural foundation of the product. The customer is a part of entire process till project delivery. </p>

                    <p class="pt-3"><strong>Tools</strong> – User cases, Agile Story Boards, Business research and analysis document</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-sm-4">
                     <img src="img/workflow/project.png" height="200" width="250" alt="Project Planning" class="image-animation">
                </div>
                <div class="col-sm-8">
                    <h3 class="subheadings-title">Project Planning</h3>
                    <p class="pt-3">This phase sets up the expectations with the client. The different parts of project execution including what to expect and when, are handled in this phase. It also lists out the processes, tools and techniques we will be following. Normally, the design and development process goes hand in hand, so we plan them accordingly. The Agile/SCRUM process that we follow allows us to create a backlog of the requirements and prepare sprints of 7-15 days each.</p>

                    <p class="pt-3"><strong>Tools</strong> – Sprint Docs, Backlog Docs, Redmine, Pivotal tracker, Basecamp</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-sm-4">
                     <img src="img/workflow/projectview.png" height="200" width="250" alt="Project View" class="image-animation">
                </div>
                <div class="col-sm-8">
                    <h3 class="subheadings-title">Project View</h3>
                    <p class="pt-3">Once the planning is done the actual implementation starts. Project Development plan, technical specification docs to developers and unit test cases with validations are prepared here.</p>

                    <p class="pt-3"><strong>Tools</strong> – Redmine, Pivotal tracker, Basecamp</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-sm-4">
                    <img src="img/workflow/dbms.png" height="200" width="250" alt="Database Design and Architecture" class="image-animation">
                </div>
                <div class="col-sm-8">
                    <h3 class="subheadings-title">Database Design and Architecture </h3>
                    <p class="pt-3">First we go ahead and prepare a robust and scalable architecture of the application keeping in mind the future requirements. This phase also covers the database design using which we will start the development process. The ERD is shared with the client for approval.</p>

                    <p class="pt-3"><strong>Tools</strong> – MS Visio, DB design tools</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-sm-4">
                    <img src="img/workflow/designprocess.png" height="200" width="250" alt="Design Process" class="image-animation">
                </div>
                <div class="col-sm-8">
                    <h3 class="subheadings-title">Design Process</h3>
                    <p class="pt-3">This process decides how exactly the application will look and the output of this process will be wireframes, PSD, CSS/HTML which is W3C compliant and is tested on all browsers. Usability guidelines, design philosophy of the application based on the users are taken into consideration here.</p>

                    <p class="pt-3"><strong>Tools</strong> – Photoshop, Dreamweaver, Illustrator, MS Visio</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-sm-4">
                    <img src="img/workflow/devprocess.png" height="200" width="250" alt="Development Process" class="image-animation">
                </div>
                <div class="col-sm-8">
                    <h3 class="subheadings-title">Development Process</h3>
                    <p class="pt-3">This process follows pure SCRUM methodologies and product gets evolved in iterations or sprints. We focus on continuous deployment and regular code commits at the end of every sprint so that customer can be in touch with the evolution of the application over different stages. The aim would be to take the product to market as soon as possible reducing time to market and generating end user feedback in parallel for product improvement. Delivery is complete as soon as all sprints are delivered and the final testing is completed. This agile methodology of development is a great success factor in the latest application development frameworks.</p>

                    <p class="pt-3"><strong>Tools</strong> – Netbeans, Aptana, GIT, MySQL, PostGreSQL etc</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-sm-4">
                    <img src="img/workflow/testing.png" height="200" width="250" alt="Testing" class="image-animation">
                </div>
                <div class="col-sm-8">
                    <h3 class="subheadings-title">Testing</h3>
                    <p class="pt-3">Continuous testing is a must as the builds are pushed to server on sprint basis. We promote Test Driven and Behavior Driven Development and follow all standard test processes – unit, functional and integration tests. For larger applications, we also do load and performance assessments.</p>

                    <p class="pt-3"><strong>Tools</strong>– Rspec, Cucumber, Selenium, Whitebox and blackbox testing</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-sm-4">
                    <img src="img/workflow/deployment.png" height="200" width="250" alt="Deployment" class="image-animation">
                </div>
                <div class="col-sm-8">
                    <h3 class="subheadings-title">Deployment</h3>
                    <p class="pt-3">This is an important phase where we have to judge the best platform for deployment; infrastructure related decisions are taken here. We advise to deploy the application on cloud because of scalability, uptime, cost effectiveness and many other factors. We are experts in deployment on cloud, be it Heroku, Rackspace or AWS.</p>

                    <p class="pt-3"><strong>Tools</strong> – Capistrano, Apache, Passanger, Heroku, GIT/SVN</p>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-sm-4">
                    <img src="img/workflow/help.png" height="200" width="250" alt="Post Development Support" class="image-animation">
                </div>
                <div class="col-sm-8">
                    <h3 class="subheadings-title">Post Deployment Support</h3>
                    <p class="pt-3">Once the application is live there is always a need to support the application so that end user will have a delightful experience. We take up AMC for the applications we develop, and engage resources to take care of new feature enhancements, bug fixes as well as 24×7 server maintenance. In short, we thereby guarantee that the application we develop is also managed and maintained well!</p>

                    <p class="pt-3 pb-3"><strong>Tools</strong> – BugZilla, Redmine, Pivotal Tracker, Helpdesks, Kayako Support Suite</p>
                </div>
            </div>
        </div>
        <div class="notice-section notice-section-sm border-top">
            <div class="container">
                <div class="row">
                    <div class="pl-5" style="font-size: 40px">Interested in Devzila's Services?
                    </div>
                    <div class="pl-5"><button class="btn btn-danger btn btn-lg" type="submit" onclick="location.href='contact-us.php';">LET'S START</button>
                    </div>
                </div>
            </div>
        </div>
   	<?php include("inc/footer.inc.php");?>
   	</body>
</html>
