<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <title>Let's Learn- Online Education</title>
</head>

<body>
    <nav class="navbar background height-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo"><img src="img/logo.jpg" alt="Logo"></div>
            <li><a href="#"> Home</a></li>
            <li><a href="#about"> About</a></li>
            <li><a href="#services"> Services</a></li>
            <li><a href="#contact"> Contact Us</a></li>
        </ul>
        <div class="rightNav v-class-resp">
            <input type="text" name="search" id="search" placeholder="Search...">
            <button class="btn btn-sm" onclick="search()" id="searchbtn">Search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>

    <section class="background firstSection" >
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-big">The Future of Education is here!!</p><br>
                <p class="text-small"><strong>Online education in India </strong> is growing faster and one of the mai reason is the 
                    increasing demand for flexible and accessible educational options.
                     Online education allows individuals to learn at their own pace 
                     and from the comfort of their own homes. This is particularly 
                     appealing to working professionals and individuals in remote 
                     areas who may not have access to traditional educational 
                     institutions. Additionally, online education platforms 
                     often offer a wide range of courses and programs, 
                     allowing individuals to choose the subjects that are most 
                     relevant to their interests and career goals.</p>
                <div class="buttons">
                    <button class="btn Subscribe" id="Sub" onclick="toggle(this)">Subscribe</button>
                    <button class="btn" id="popup">Watch Video</button>
                    <div class="popup" id="videoPopup1">
                        <div class="popup-content">
                            <span class="close" id="close">x</span>
                            <video id="myVideo" width="560" height="300" controls>
                                <source src="img/video.mp4" type="video/mp4">
                                <p>This video shows why online learning is growing in India"></video></p>
                            </video>
                        </div>
                    </div>

                </div>
            </div>
            <div class="secondHalf">
                <img src="img/logo.jpg" alt="Laptop Image">
            </div>
        </div>
    </section>

    <section class="section" id="about" >
        <div class="paras">
        <p class="sectionTag text-big">Why Online Learning</p><br>
        <p class="sectionSubTag text-small" > <strong>What Are The Advantages Of Online Learning? </strong>
            <br><br> <em>1. Efficiency: </em> Online learning offers teachers an efficient way to deliver lessons to students.
             Online learning has a number of tools such as videos, PDFs, podcasts, and teachers can use all
              these tools as part of their lesson plans.<br>
            <em>2. Accessibility Of Time And Place: </em> It allows students to attend classes from any location of their choice. 
            It also allows schools to reach out to a more extensive network of students, instead of being restricted by geographical boundaries.
             Additionally, online lectures can be recorded, archived, and shared for future reference. This allows students to access the learning 
             material at a time of their comfort. <br>
             <em> 3. Affordability : </em> reduced financial costs. Online education is far more affordable as compared to physical learning. 
            This is because online learning eliminates the cost points of student transportation, student meals, and most importantly, 
            real estate. Additionally, all the course or study materials are available online, thus creating a paperless learning 
            environment which is more affordable, while also being beneficial to the environment.
            <br> <em>4. Suits A Variety Of Learning Styles : </em> Every student has a different learning journey and a different learning style. 
            Some students are visual learners, while some students prefer to learn through audio. Similarly, some students thrive in the 
            classroom, and other students are solo learners who get distracted by large groups.
        </p>
        </div>
        <div class="thumbnail">
        <!-- crome blocking use of tird party connection to desable it sart crome with givent commadline code
          --disable-features=CrossSiteDocumentBlockingAlways,CrossSiteDocumentBlockingIfIsolating
          
        to use auto changing images in website use this
        <img src="https://source.unsplash.com/900x900/?coding,apple">
        -->   
            <img src="img/img1.jpg" alt="Related Image" class="imgFluid" width="300">
        </div>
    </section>

    <section class="section left">
        <div class="paras">
        <p class="sectionTag text-big">Transforming Education in India</p><br>
        <p class="sectionSubTag text-small">Education in India faces many challenges and opportunities, such as 
            improving access and quality, reducing disparities and dropouts, increasing enrolment 
            and completion rates, enhancing learning outcomes and employability,
             strengthening governance and accountability, 
             promoting innovation and technology, and addressing the impact 
             of COVID-19 pandemic. It is influenced by various policies 
             and programmes at the national and state levels, such as the 
             National Education Policy 2020, the Samagra Shiksha Abhiyan, 
             the Rashtriya Madhyamik Shiksha Abhiyan, the Midday Meal Scheme,
              the Beti Bachao Beti Padhao Scheme, and the National Digital 
              Education Architecture. It is also supported by various 
              stakeholders and partners, such as UNICEF, UNESCO, World Bank, 
              civil society organizations,
             academic institutions, private sector entities, and media outlets.</p>
        </div>
        <div class="thumbnail">
            <img src="img/img2.jpg" alt="Laptop Image" class="imgFluid">
        </div>
    </section>

    <section class="section" id="services">
        <div class="paras">
        <p class="sectionTag text-big">Let's Learn </p><br>
        <p class="sectionSubTag text-small">
        Professional courses and certifications have many advantages. They can help you in:
<br><br> 1. Demonstrating your skills and gaining credibility <br>
2. Enhancing technical knowledge and upskilling<br>
3. Qualifying for senior-level jobs<br>
4. Staying abreast of the latest trends<br>
5. Acquiring experience and hands-on training<br>
<br> Many online professional and learninng cources are available on internet...<br>
The most in-demand online courses are in fields like Data Science, AI,
 Cybersecurity, Digital Marketing, and Project Management. Which course
  is best for online work? Courses in Digital Marketing, Web Development, and Graphic
 Design are excellent for online work, offering flexibility and remote opportunities.
<br><br> <strong>List of some top schools providing online education in India...</strong>
<br>1. K8 School: Website- <a style="color:red" href="https://www.k8school.com"> www.k8school.com </a><br>
2. AOL School: Website- <a style="color:red" href="https://www.alwaysonlearning.com"> www.alwaysonlearning.com </a><br>
3. 21K School: Website- <a style="color:red" href="https://www.21kschool.com" > www.21kschool.com </a><br>
4. Cyboard School: Website- <a style="color:red" href="https://www.cyboardschool.com"> www.cyboardschool.com </a><br>
5. The Virtual School: Website- <a style="color:red" href="https://www.thevirtualschoolindia.in/"> www.thevirtualschoolindia.in/ </a><br>
6. The Real School: Website- <a style="color:red" href="https://therealschool.in/"> https://therealschool.in/ </a> <br>
7. Delhi Model Virtual School (DMV): Website- <a style="color:red" href="https://www.dmvs.ac.in"> www.dmvs.ac.in </a>       
</p>
        </div>
        <div class="thumbnail">
            <img src="img/img3.jpg" alt="Laptop Image" class="imgFluid">
        </div>
    </section>
   
    <hr>

    <section class="contact" id="contact">
        <h2 class="contact-lb"> Contact Us</h2>
        <form action="php/connect.php" method="post">
        <div class="contact-form">
            <input class="form-input" type="text" name="name" id="name" placeholder="Enter your name" required>
            <input class="form-input" type="number" name="phone" id="phone" placeholder="Enter your phone" required >
            <input class="form-input" type="email" name="email" id="email" placeholder="Enter your email" required>
            <textarea class="form-input" name="text" id="text" cols="30" rows="10" placeholder="Ellaborate your concern" ></textarea>
            <input class="btn btn-dark" type="submit">
        </div>
        </form>
    </section>

    <footer>
        <p class="text-footer background">
        copyright &copy; 2024 www.LetUsLearn.com- All reights reserved
        </p>
    </footer>
    <script src="JS/resp.js"></script>
</body>

</html>