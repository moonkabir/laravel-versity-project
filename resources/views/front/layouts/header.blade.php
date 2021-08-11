<!--Full width header Start-->
<div class="full-width-header header-style1 home1-modifiy">
    <!--Header Start-->
    <header id="rs-header" class="rs-header">
        <!-- Menu Start -->
        <div class="menu-area menu-sticky">
            <div class="container">
                <div class="row y-middle">
                    <div class="col-lg-2">
                        <div class="logo-cat-wrap">
                            <div class="logo-part">
                                <a href="{{url('/')}}">
                                    <img src="{{asset('assets/front/images/eschool_logo.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 text-right">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <div class="mobile-menu">
                                    <a class="rs-menu-toggle">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </div>
                                <nav class="rs-menu">
                                    <ul class="nav-menu">
                                        <!-- <li class="@yield('index_menu_active')"> <a href="{{url('/')}}">Home</a> -->
                                        </li>
                                        <li class="@yield('categories_menu_active') menu-item-has-children ">
                                            <a href="{{url('/categories')}}">Categories</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="{{url('/courses')}}">Development</a>
                                                    <ul class="sub-menu right">
                                                        <li class="menu-item-has-children">
                                                            <a href="{{url('/courses')}}">Web Development</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">MERN stack</a></li>
                                                                <li><a href="{{url('/courses')}}">MEAN stack</a></li>
                                                                <li><a href="{{url('/courses')}}">Django</a></li>
                                                                <li><a href="{{url('/courses')}}">Angular</a></li>
                                                                <li><a href="{{url('/courses')}}">Node.js</a></li>
                                                                <li><a href="{{url('/courses')}}">React</a></li>
                                                                <li><a href="{{url('/courses')}}">PHP</a></li>
                                                                <li><a href="{{url('/courses')}}">Laravel</a></li>
                                                                <li><a href="{{url('/courses')}}">WordPress</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Programming Language</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Python</a></li>
                                                                <li><a href="{{url('/courses')}}">Java</a></li>
                                                                <li><a href="{{url('/courses')}}">C#</a></li>
                                                                <li><a href="{{url('/courses')}}">C++</a></li>
                                                                <li><a href="{{url('/courses')}}">JavaScript</a></li>
                                                                <li><a href="{{url('/courses')}}">GO</a></li>
                                                                <li><a href="{{url('/courses')}}">PHP</a></li>
                                                                <li><a href="{{url('/courses')}}">C</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Data science</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Deep Learning</a></li>
                                                                <li><a href="{{url('/courses')}}">Machine Learning</a></li>
                                                                <li><a href="{{url('/courses')}}">Data Analysis</a></li>
                                                                <li><a href="{{url('/courses')}}">Artificial Intelligence</a></li>
                                                                <li><a href="{{url('/courses')}}">Python</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">App Development</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Flutter</a></li>
                                                                <li><a href="{{url('/courses')}}">React Native</a></li>
                                                                <li><a href="{{url('/courses')}}">Kotlin</a></li>
                                                                <li><a href="{{url('/courses')}}">Dart</a></li>
                                                                <li><a href="{{url('/courses')}}">Swift</a></li>
                                                                <li><a href="{{url('/courses')}}">IOS Development</a></li>
                                                                <li><a href="{{url('/courses')}}">Android Development</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Game Development</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Unity</a></li>
                                                                <li><a href="{{url('/courses')}}">C#</a></li>
                                                                <li><a href="{{url('/courses')}}">C++</a></li>
                                                                <li><a href="{{url('/courses')}}">Unreal Engine</a></li>
                                                                <li><a href="{{url('/courses')}}">3D Game Development</a></li>
                                                                <li><a href="{{url('/courses')}}">2D Game Development</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Software Development</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Data Structures</a></li>
                                                                <li><a href="{{url('/courses')}}">Algorithm</a></li>
                                                                <li><a href="{{url('/courses')}}">Microservices</a></li>
                                                                <li><a href="{{url('/courses')}}">Linux</a></li>
                                                                <li><a href="{{url('/courses')}}">Python</a></li>
                                                                <li><a href="{{url('/courses')}}">Apache Airflow</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Database</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">SQL</a></li>
                                                                <li><a href="{{url('/courses')}}">MongoDb</a></li>
                                                                <li><a href="{{url('/courses')}}">Apache Kafka</a></li>
                                                                <li><a href="{{url('/courses')}}">MySQL</a></li>
                                                                <li><a href="{{url('/courses')}}">Oracle SQL</a></li>
                                                                <li><a href="{{url('/courses')}}">SQL Server</a></li>
                                                                <li><a href="{{url('/courses')}}">Database Management</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Software Testing</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">API Testing</a></li>
                                                                <li><a href="{{url('/courses')}}">Java</a></li>
                                                                <li><a href="{{url('/courses')}}">REST Assured</a></li>
                                                                <li><a href="{{url('/courses')}}">Appium</a></li>
                                                                <li><a href="{{url('/courses')}}">Automation Testing</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">No-Code Development</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Elementor</a></li>
                                                                <li><a href="{{url('/courses')}}">Wix</a></li>
                                                                <li><a href="{{url('/courses')}}">WordPress</a></li>
                                                                <li><a href="{{url('/courses')}}">PowerApps</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{url('/courses')}}">Office &amp; IT</a>
                                                    <ul class="sub-menu right">
                                                        <li>
                                                            <a href="{{url('/courses')}}">IT Certification</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">AWS Certification</a></li>
                                                                <li><a href="{{url('/courses')}}">AWS Developer</a></li>
                                                                <li><a href="{{url('/courses')}}">Microsoft Certification</a></li>
                                                                <li><a href="{{url('/courses')}}">Amazon AWS</a></li>
                                                                <li><a href="{{url('/courses')}}">Microsoft AZ-900</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Network & Security</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Ethical Hacking</a></li>
                                                                <li><a href="{{url('/courses')}}">Cyber Security</a></li>
                                                                <li><a href="{{url('/courses')}}">Network Security</a></li>
                                                                <li><a href="{{url('/courses')}}">Cissco CCNA</a></li>
                                                                <li><a href="{{url('/courses')}}">Fundamentals</a></li>
                                                                <li><a href="{{url('/courses')}}">Terraform</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Operating System</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Linux</a></li>
                                                                <li><a href="{{url('/courses')}}">Linux Administration</a></li>
                                                                <li><a href="{{url('/courses')}}">Windows Server</a></li>
                                                                <li><a href="{{url('/courses')}}">Shell Scripting</a></li>
                                                                <li><a href="{{url('/courses')}}">PowerShell</a></li>
                                                                <li><a href="{{url('/courses')}}">Linux Command Line</a></li>
                                                                <li><a href="{{url('/courses')}}">VMware</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Other IT</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Docker</a></li>
                                                                <li><a href="{{url('/courses')}}">DevOps</a></li>
                                                                <li><a href="{{url('/courses')}}">Java</a></li>
                                                                <li><a href="{{url('/courses')}}">Python</a></li>
                                                                <li><a href="{{url('/courses')}}">Kubernates</a></li>
                                                                <li><a href="{{url('/courses')}}">Kubernetes</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Microsoft</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Excel</a></li>
                                                                <li><a href="{{url('/courses')}}">Excel VBA</a></li>
                                                                <li><a href="{{url('/courses')}}">PowerPoint</a></li>
                                                                <li><a href="{{url('/courses')}}">Data Analysis</a></li>
                                                                <li><a href="{{url('/courses')}}">Microsoft Word</a></li>
                                                                <li><a href="{{url('/courses')}}">Microsoft Office</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Apple</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">iMovie</a></li>
                                                                <li><a href="{{url('/courses')}}">Mac Basic</a></li>
                                                                <li><a href="{{url('/courses')}}">macOS</a></li>
                                                                <li><a href="{{url('/courses')}}">Apple Keynote</a></li>
                                                                <li><a href="{{url('/courses')}}">Mac Pages</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Google</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Google Sheets</a></li>
                                                                <li><a href="{{url('/courses')}}">Google Drive</a></li>
                                                                <li><a href="{{url('/courses')}}">Google Apps</a></li>
                                                                <li><a href="{{url('/courses')}}">Google Office</a></li>
                                                                <li><a href="{{url('/courses')}}">Google Forms</a></li>
                                                                <li><a href="{{url('/courses')}}">Google Workspace</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Oracle</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Oracle SQL</a></li>
                                                                <li><a href="{{url('/courses')}}">PI/SQL</a></li>
                                                                <li><a href="{{url('/courses')}}">Oracle Database</a></li>
                                                                <li><a href="{{url('/courses')}}">Database Administration</a></li>
                                                                <li><a href="{{url('/courses')}}">SQL</a></li>
                                                                <li><a href="{{url('/courses')}}">Oracle Certification</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{url('/courses')}}">Design</a>
                                                    <ul class="sub-menu right">
                                                        <li>
                                                            <a href="{{url('/courses')}}">Web Design</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">WordPress</a></li>
                                                                <li><a href="{{url('/courses')}}">CSS</a></li>
                                                                <li><a href="{{url('/courses')}}">HTML</a></li>
                                                                <li><a href="{{url('/courses')}}">Photoshop</a></li>
                                                                <li><a href="{{url('/courses')}}">HTML5</a></li>
                                                                <li><a href="{{url('/courses')}}">Adobe XD</a></li>
                                                                <li><a href="{{url('/courses')}}">Mobile App Design</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Graphics Design</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Graphics Design</a></li>
                                                                <li><a href="{{url('/courses')}}">Photoshop</a></li>
                                                                <li><a href="{{url('/courses')}}">Adobe Illustrator</a></li>
                                                                <li><a href="{{url('/courses')}}">Drawing</a></li>
                                                                <li><a href="{{url('/courses')}}">In Design</a></li>
                                                                <li><a href="{{url('/courses')}}">Canva</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Design Tools</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">After Effects</a></li>
                                                                <li><a href="{{url('/courses')}}">Photoshop</a></li>
                                                                <li><a href="{{url('/courses')}}">Adobe Illustrator</a></li>
                                                                <li><a href="{{url('/courses')}}">AutoCAD</a></li>
                                                                <li><a href="{{url('/courses')}}">Adobe Premiere</a></li>
                                                                <li><a href="{{url('/courses')}}">Canva</a></li>
                                                                <li><a href="{{url('/courses')}}">Digital Art</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Game Design</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Unreal Engine</a></li>
                                                                <li><a href="{{url('/courses')}}">Pixel Art</a></li>
                                                                <li><a href="{{url('/courses')}}">Unity</a></li>
                                                                <li><a href="{{url('/courses')}}">Digital Painting</a></li>
                                                                <li><a href="{{url('/courses')}}">Blender</a></li>
                                                                <li><a href="{{url('/courses')}}">Drawing</a></li>
                                                                <li><a href="{{url('/courses')}}">VFX Visual Effects</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Interior Design</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">SketchUp</a></li>
                                                                <li><a href="{{url('/courses')}}">Color Theory</a></li>
                                                                <li><a href="{{url('/courses')}}">HVAC</a></li>
                                                                <li><a href="{{url('/courses')}}">Lighting Design</a></li>
                                                                <li><a href="{{url('/courses')}}">Electrical Design</a></li>
                                                                <li><a href="{{url('/courses')}}">Blender</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Architectural Design</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">AutoCAD</a></li>
                                                                <li><a href="{{url('/courses')}}">Revit</a></li>
                                                                <li><a href="{{url('/courses')}}">LEED</a></li>
                                                                <li><a href="{{url('/courses')}}">ARCHICAD</a></li>
                                                                <li><a href="{{url('/courses')}}">SketchUp</a></li>
                                                                <li><a href="{{url('/courses')}}">3D Animation</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">3D Animation</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Blender</a></li>
                                                                <li><a href="{{url('/courses')}}">3D Modeling</a></li>
                                                                <li><a href="{{url('/courses')}}">After Effects</a></li>
                                                                <li><a href="{{url('/courses')}}">Adobe premiere</a></li>
                                                                <li><a href="{{url('/courses')}}">Adobe Illustrator</a></li>
                                                                <li><a href="{{url('/courses')}}">Auto CAD</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{url('/courses')}}">Photography &amp; Video</a>
                                                    <ul class="sub-menu right">
                                                        <li>
                                                            <a href="{{url('/courses')}}">Digital Photography</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Photography</a></li>
                                                                <li><a href="{{url('/courses')}}">iPhone Photography</a></li>
                                                                <li><a href="{{url('/courses')}}">DSLR</a></li>
                                                                <li><a href="{{url('/courses')}}">Mobile Photography</a></li>
                                                                <li><a href="{{url('/courses')}}">Adobe Lightroom</a></li>
                                                                <li><a href="{{url('/courses')}}">Photoshop</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Photography</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Affinity Photo</a></li>
                                                                <li><a href="{{url('/courses')}}">Food Photography</a></li>
                                                                <li><a href="{{url('/courses')}}">DSLR</a></li>
                                                                <li><a href="{{url('/courses')}}">Landscape Photography</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Portrait Photography</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Photography Business</a></li>
                                                                <li><a href="{{url('/courses')}}">Posing</a></li>
                                                                <li><a href="{{url('/courses')}}">Photoshop Retouching</a></li>
                                                                <li><a href="{{url('/courses')}}">Adobe Lightroom</a></li>
                                                                <li><a href="{{url('/courses')}}">Photography Lighting</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Commercial Photography</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Realestate Photography</a></li>
                                                                <li><a href="{{url('/courses')}}">Architectural Photography</a></li>
                                                                <li><a href="{{url('/courses')}}">Product Photography</a></li>
                                                                <li><a href="{{url('/courses')}}">Wedding Photography</a></li>
                                                                <li><a href="{{url('/courses')}}">Food Photography</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Video Design</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Video Editing</a></li>
                                                                <li><a href="{{url('/courses')}}">Adobe Premiere</a></li>
                                                                <li><a href="{{url('/courses')}}">Video Production</a></li>
                                                                <li><a href="{{url('/courses')}}">Color Grading</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{url('/courses')}}">Marketing</a>
                                                    <ul class="sub-menu right">
                                                        <li>
                                                            <a href="{{url('/courses')}}">Digital Marketing</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Google Ads</a></li>
                                                                <li><a href="{{url('/courses')}}">Marketing Strategy</a></li>
                                                                <li><a href="{{url('/courses')}}">Internate Marketing</a></li>
                                                                <li><a href="{{url('/courses')}}">YouTube Marketing</a></li>
                                                                <li><a href="{{url('/courses')}}">Google Analytics</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">SEO</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">SEO</a></li>
                                                                <li><a href="{{url('/courses')}}">SEO Audit</a></li>
                                                                <li><a href="{{url('/courses')}}">Image SEO</a></li>
                                                                <li><a href="{{url('/courses')}}">Local SEO</a></li>
                                                                <li><a href="{{url('/courses')}}">Keyword Research</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Social Media Marketing</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Facebook Ads</a></li>
                                                                <li><a href="{{url('/courses')}}">Instragram Marketing</a></li>
                                                                <li><a href="{{url('/courses')}}">Facebook Marketing</a></li>
                                                                <li><a href="{{url('/courses')}}">Linkdin Marketing</a></li>
                                                                <li><a href="{{url('/courses')}}">Pinterest Marketing</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Branding</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Business Branding</a></li>
                                                                <li><a href="{{url('/courses')}}">YouTube Marketing</a></li>
                                                                <li><a href="{{url('/courses')}}">Personal Branding</a></li>
                                                                <li><a href="{{url('/courses')}}">Marketing Strategy</a></li>
                                                                <li><a href="{{url('/courses')}}">Brand Management</a></li>
                                                                <li><a href="{{url('/courses')}}">Canva</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Marketing Fundamentals</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Copywriting</a></li>
                                                                <li><a href="{{url('/courses')}}">Marketing Strategy</a></li>
                                                                <li><a href="{{url('/courses')}}">Marketing Management</a></li>
                                                                <li><a href="{{url('/courses')}}">Marketing Analytics</a></li>
                                                                <li><a href="{{url('/courses')}}">Marketing Plan</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Affiliate Marketing</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Amazon</a></li>
                                                                <li><a href="{{url('/courses')}}">ClickBank</a></li>
                                                                <li><a href="{{url('/courses')}}">SEO</a></li>
                                                                <li><a href="{{url('/courses')}}">CPA Marketing</a></li>
                                                                <li><a href="{{url('/courses')}}">Network Marketing</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Product Marketing</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Marketing Plan</a></li>
                                                                <li><a href="{{url('/courses')}}">SaaS</a></li>
                                                                <li><a href="{{url('/courses')}}">Facebook Ads</a></li>
                                                                <li><a href="{{url('/courses')}}">Marketing Management</a></li>
                                                                <li><a href="{{url('/courses')}}">Voice Over</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Marketing Analytics</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Google Analytics</a></li>
                                                                <li><a href="{{url('/courses')}}">Marketing Analytics</a></li>
                                                                <li><a href="{{url('/courses')}}">Marketing Automation</a></li>
                                                                <li><a href="{{url('/courses')}}">Marketing Strategy</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{url('/courses')}}">Academics</a>
                                                    <ul class="sub-menu right">
                                                        <li>
                                                            <a href="{{url('/courses')}}">Engineering</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Mechanical</a></li>
                                                                <li><a href="{{url('/courses')}}">Computer Science</a></li>
                                                                <li><a href="{{url('/courses')}}">Civil</a></li>
                                                                <li><a href="{{url('/courses')}}">Robotics</a></li>
                                                                <li><a href="{{url('/courses')}}">Aerospace</a></li>
                                                                <li><a href="{{url('/courses')}}">Electrical</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Math</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Statistics</a></li>
                                                                <li><a href="{{url('/courses')}}">Algebra</a></li>
                                                                <li><a href="{{url('/courses')}}">Calculus</a></li>
                                                                <li><a href="{{url('/courses')}}">Geometry</a></li>
                                                                <li><a href="{{url('/courses')}}">Trigonometry</a></li>
                                                                <li><a href="{{url('/courses')}}">Probability</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Science</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Physics</a></li>
                                                                <li><a href="{{url('/courses')}}">Computer</a></li>
                                                                <li><a href="{{url('/courses')}}">Biology</a></li>
                                                                <li><a href="{{url('/courses')}}">Anatomy</a></li>
                                                                <li><a href="{{url('/courses')}}">Chemistry</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Language Learning</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">English</a></li>
                                                                <li><a href="{{url('/courses')}}">Japanese</a></li>
                                                                <li><a href="{{url('/courses')}}">Spanish</a></li>
                                                                <li><a href="{{url('/courses')}}">Germany</a></li>
                                                                <li><a href="{{url('/courses')}}">French</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{url('/courses')}}">Marketplace</a>
                                                    <ul class="sub-menu right">
                                                        <li><a href="{{url('/courses')}}">Fiverr</a></li>
                                                        <li><a href="{{url('/courses')}}">Upwork</a></li>
                                                        <li><a href="{{url('/courses')}}">Themeforest</a></li>
                                                        <li><a href="{{url('/courses')}}">Freepik</a></li>
                                                        <li><a href="{{url('/courses')}}">Graphic River</a></li>
                                                        <li><a href="{{url('/courses')}}">Freelancer</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="{{url('/courses')}}">Lifestyle</a>
                                                    <ul class="sub-menu right">
                                                        <li>
                                                            <a href="{{url('/courses')}}">Art and Crafts</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Drawing</a></li>
                                                                <li><a href="{{url('/courses')}}">Sketching</a></li>
                                                                <li><a href="{{url('/courses')}}">Painting</a></li>
                                                                <li><a href="{{url('/courses')}}">Pencil Drawing</a></li>
                                                                <li><a href="{{url('/courses')}}">Figure Drawing</a></li>
                                                                <li><a href="{{url('/courses')}}">Portraiture</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Beauty and Makeup</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Beauty</a></li>
                                                                <li><a href="{{url('/courses')}}">Makeup Artistry</a></li>
                                                                <li><a href="{{url('/courses')}}">Nail Art</a></li>
                                                                <li><a href="{{url('/courses')}}">Skincare</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Food and Beverage</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Cooking</a></li>
                                                                <li><a href="{{url('/courses')}}">Baking</a></li>
                                                                <li><a href="{{url('/courses')}}">Bread Baking</a></li>
                                                                <li><a href="{{url('/courses')}}">Cake Baking</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Travel</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Digital Nomad</a></li>
                                                                <li><a href="{{url('/courses')}}">Travel Hacking</a></li>
                                                                <li><a href="{{url('/courses')}}">Writing</a></li>
                                                                <li><a href="{{url('/courses')}}">Journaling</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/courses')}}">Religion</a>
                                                            <ul class="sub-menu right">
                                                                <li><a href="{{url('/courses')}}">Islam</a></li>
                                                                <li><a href="{{url('/courses')}}">Christianity</a></li>
                                                                <li><a href="{{url('/courses')}}">Hinduism</a></li>
                                                                <li><a href="{{url('/courses')}}">Buddhism</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="@yield('course_menu_active')">
                                            <a href="{{url('/courses')}}">Courses</a>
                                        </li>
                                        <li class="@yield('blog_menu_active')">
                                            <a href="{{url('/blog')}}">Blog</a>
                                        </li>
                                    </ul> <!-- //.nav-menu -->
                                </nav>
                            </div> <!-- //.main-menu -->
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="expand-btn-inner mr-0">
                            <ul class="text-right">
                                <li class="mr-3">
                                    <a class="hidden-xs rs-search">
                                        <i class="flaticon-search"> </i>
                                    </a>
                                </li>
                                <li class="">
                                    <a id="login" class="uppercase  @yield('login_active')">Login</a>
                                </li>
                                <li class="text-right ">
                                    <a id="register" class="uppercase @yield('register_active')">Register</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
                <ul class="search_box">
                    <li>
                        <form action="">
                            <input type="text" placeholder="Seach here....">
                            <button type="submit"><i class="flaticon-search"> </i></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Menu End -->
        <!-- Canvas Menu start -->
        <nav class="right_menu_togle hidden-md">
            <div class="close-btn">
                <div id="nav-close">
                    <div class="line">
                        <span class="line1"></span><span class="line2"></span>
                    </div>
                </div>
            </div>
            <div id='rs-login' class="rs-login">
                <div class="container">
                    <div class="noticed p-0">
                        <div class="main-part">
                            <div class="method-account">
                                <h2 class="login">Login</h2>
                                <form>
                                    <input type="email" name="E-mail" placeholder="E-mail" required="">
                                    <input type="text" name="text" placeholder="Password" required="">
                                    <button type="submit" class="readon submit-btn">login</button>
                                    <div class="last-password">
                                        <p>Not registered? <a href="{{url('/register')}}">Create an account</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id='rs-register' class="rs-login">
                <div class="container">
                    <div class="noticed p-0">
                        <div class="main-part">
                            <div class="method-account">
                                <h2 class="login">Register Account</h2>
                                <form>
                                    <input type="text" id="Name" name="First Name" value="" placeholder="First Name" required>
                                    <input type="text" id="last" name="lname" value="" placeholder="Last Name" required>
                                    <input type="email" id="email" name="email" value="" placeholder="Email address " required>
                                    <input type="text" id="user" name="phone_number" value="" placeholder="Username" required>
                                    <input type="text" id="puser" name="Password" value="" placeholder="Password" required>
                                    <input type="text" id="Confirm" name="Confirm Password" value="" placeholder="Confirm Password" required>
                                    <button type="submit" class="readon submit-btn">Sign Up</button>
                                    <div class="last-password">
                                        <div class="users">Already have an account? <a href="{{url('/login')}}">Sign In</a></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-contact">
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </nav>
        <!-- Canvas Menu end -->
    </header>
    <!--Header End-->
</div>
<!--Full width header End-->