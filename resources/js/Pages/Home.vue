<script setup>
import GuestLayout from '../Layouts/GuestLayout.vue';

const getCurrentMode = () => {
    return $("html").attr('data-layout-mode');
}

const changeMode = () => {
    var mode = getCurrentMode();
    if(mode == 'light') {
        $("html").attr('data-layout-mode', 'dark');
    } else {
        $("html").attr('data-layout-mode', 'light');
    }
}
</script>

<template>
    <div class="container mt-5">
        <div class="card shadow-lg rounded">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 me-2"><b>Safrin</b> Baharudin</h4>
                <div class="flex-shrink-0 ms-auto">
                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab" aria-selected="true">
                                Overview
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab" aria-selected="false" tabindex="-1">
                                Resume
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab3" role="tab" aria-selected="false" tabindex="-1">
                                Contact
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode mt-2 me-2" @click="changeMode">
                                <i class='bx bx-moon fs-22'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content text-muted">
                    <div class="tab-pane active show" id="tab1" role="tabpanel">
                        <div class="d-flex gap-2 justify-content-center">
                            <div class="me-3">
                                <div class="avatar-xxl">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-thumbnail rounded-circle">
                                </div>
                            </div>
                            <div style="max-width: 400px">
                                <div>WEB DEVELOPER</div>
                                <h3 style="font-weight:600;">SAFRIN BAHARUDIN</h3>
                                <p>I'm a Software Engineer with more than 8 years of experience with different areas of Information Technology. A Full Stack Development, Web Applications, Linux & DevOps.</p>
                                <div class="d-flex gap-2">
                                    <button type="button" class="btn btn-primary">DOWNLOAD CV</button>
                                    <button type="button" class="btn btn-outline-primary">LET'S TALK</button>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 mb-3">
                            <h5 class="card-title">What I Do?</h5>
                            <div class="card-title-2 bg-primary"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="bg-light rounded p-4 mb-4">
                                    <div class="d-flex gap-3">
                                        <div>
                                            <i class="ri-mac-line fs-24 text-primary line-height-initial"></i>
                                        </div>
                                        <div>
                                            <h5 class="card-title text-primary">Web Development</h5>
                                            <p>I possess expertise in both front-end and back-end development, making me a versatile full-stack developer. From crafting stunning user interfaces with HTML, CSS, and JavaScript to managing data and server-side logic with PHP and MySQL.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-light rounded p-4 mb-4">
                                    <div class="d-flex gap-3">
                                        <div>
                                            <i class="ri-line-chart-line fs-24 text-primary line-height-initial"></i>
                                        </div>
                                        <div>
                                            <h5 class="card-title text-primary">Data Analyst</h5>
                                            <p>I am passionate about promoting a data-driven culture. By providing evidence-based recommendations, I empower teams to make well-informed decisions, leading to optimized processes and improved outcomes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-light rounded p-4 mb-4">
                                    <div class="d-flex gap-3">
                                        <div>
                                            <i class="ri-store-2-fill fs-24 text-primary line-height-initial"></i>
                                        </div>
                                        <div>
                                            <h5 class="card-title text-primary">E-Commerce</h5>
                                            <p>From concept to execution, I offer comprehensive e-commerce services. Whether it's setting up a new online store or optimizing an existing one, my expertise spans every stage of the e-commerce lifecycle.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-light rounded p-4 mb-4">
                                    <div class="d-flex gap-3">
                                        <div>
                                            <i class="bx bxl-docker fs-24 text-primary line-height-initial"></i>
                                        </div>
                                        <div>
                                            <h5 class="card-title text-primary">Linux Admin & DevOps</h5>
                                            <p>I possess extensive expertise in managing and maintaining Linux-based systems (Ubuntu, CentOS, Red Hat, etc.). I leverage CapRover to simplify the deployment and management of containerized applications, taking advantage of its rich features and flexibility.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2" role="tabpanel">
                        <div class="row">
                            <div class="col">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-shrink-0 me-1">
                                        <i class="ri-bank-fill fs-24 align-middle text-primary me-1"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="fs-16 mb-0 fw-semibold">EDUCATION</h5>
                                    </div>
                                </div>
                                <div class="profile-timeline">
                                    <div class="accordion accordion-flush" id="todayExample">
                                        <div class="accordion-item border-0">
                                            <div class="accordion-header" id="headingTwo">
                                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse1" aria-expanded="false">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0">
                                                            <div class="bg-light text-success border border-1 border-success rounded-pill ps-2 pe-2">
                                                                2012 - 2015
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body ms-2 ps-5">
                                                    <h6 class="fs-14 mb-1">UNIVERSITI TEKNOLOGY MALAYSIA</h6>
                                                    <p>DIPLOMA IN COMPUTER SCIENCE (INFORMATION TECHNOLOGY)</p>
                                                    <div>HIGHLIGHTS:</div>
                                                    <ul>
                                                        <li>2.9 CGPA</li>
                                                        <li>FYP: Archive Management System</li>
                                                        <li>FYP: POS System for Restaurant</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item border-0">
                                            <div class="accordion-header" id="headingTwo">
                                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse2" aria-expanded="false">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0">
                                                            <div class="bg-light text-success border border-1 border-success rounded-pill ps-2 pe-2">
                                                                2007 - 2011
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body ms-2 ps-5">
                                                    <h6 class="fs-14 mb-1">SEKOLAH MENENGAH KEBANGSAAN KAMPONG KASTAM</h6>
                                                    <div>HIGHLIGHTS:</div>
                                                    <ul>
                                                        <li>Chairman Of The Islamic Student Association</li>
                                                        <li>Deputy Chairman Of The Kadet Pertahanan Awam</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="flex-shrink-0 me-1">
                                            <i class="ri-user-settings-line fs-24 align-middle text-primary me-1"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="fs-16 mb-0 fw-semibold">SKILLS</h5>
                                        </div>
                                    </div>
    
                                    <div class="rounded p-3" style="background:#0f0f0f08">
                                        <table class="table table-borderless table-sm">
                                            <tbody>
                                                <tr>
                                                    <th>PHP</th>
                                                    <td>
                                                        <div class="d-flex gap-2 justify-content-end">
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Laravel</th>
                                                    <td>
                                                        <div class="d-flex gap-2 justify-content-end">
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>MySQL</th>
                                                    <td>
                                                        <div class="d-flex gap-2 justify-content-end">
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>HTML</th>
                                                    <td>
                                                        <div class="d-flex gap-2 justify-content-end">
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>CSS</th>
                                                    <td>
                                                        <div class="d-flex gap-2 justify-content-end">
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>VueJS</th>
                                                    <td>
                                                        <div class="d-flex gap-2 justify-content-end">
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-line text-warning"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Docker</th>
                                                    <td>
                                                        <div class="d-flex gap-2 justify-content-end">
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-line text-warning"></i>
                                                            <i class="ri-star-line text-warning"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="d-flex align-items-center mb-2 mt-3">
                                        <div class="flex-shrink-0 me-1">
                                            <i class="ri-tools-fill fs-24 align-middle text-primary me-1"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="fs-16 mb-0 fw-semibold">TOOLS / OTHERS</h5>
                                        </div>
                                    </div>
                                    <div class="rounded p-3" style="background:#0f0f0f08">
                                        <div class="d-flex gap-2 flex-wrap">
                                            <span class="badge rounded-pill text-bg-secondary fs-11">Python</span>
                                            <span class="badge rounded-pill text-bg-secondary fs-11">Git</span>
                                            <span class="badge rounded-pill text-bg-secondary fs-11">Node</span>
                                            <span class="badge rounded-pill text-bg-secondary fs-11">Elasticsearch</span>
                                            <span class="badge rounded-pill text-bg-secondary fs-11">Ionic</span>
                                            <span class="badge rounded-pill text-bg-secondary fs-11">React Native</span>
                                            <span class="badge rounded-pill text-bg-secondary fs-11">Nginx</span>
                                            <span class="badge rounded-pill text-bg-secondary fs-11">Apache</span>
                                            <span class="badge rounded-pill text-bg-secondary fs-11">Caprover</span>
                                            <span class="badge rounded-pill text-bg-secondary fs-11">Python</span>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mb-2 mt-3">
                                        <div class="flex-shrink-0 me-1">
                                            <i class="ri-book-2-fill fs-24 align-middle text-primary me-1"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="fs-16 mb-0 fw-semibold">LANGUAGES</h5>
                                        </div>
                                    </div>

                                    <div class="rounded p-3" style="background:#0f0f0f08">
                                        <table class="table table-borderless table-sm">
                                            <tbody>
                                                <tr>
                                                    <th>BAHASA MALAYSIA</th>
                                                    <td>
                                                        <div class="d-flex gap-2 justify-content-end">
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>ENGLISH</th>
                                                    <td>
                                                        <div class="d-flex gap-2 justify-content-end">
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-fill text-warning"></i>
                                                            <i class="ri-star-line text-warning"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-shrink-0 me-1">
                                        <i class="ri-user-star-fill fs-24 align-middle text-primary me-1"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="fs-16 mb-0 fw-semibold">WORKING EXPERIENCE</h5>
                                    </div>
                                </div>
                                <div class="profile-timeline">
                                    <div class="accordion accordion-flush" id="todayExample">
                                        <div class="accordion-item border-0">
                                            <div class="accordion-header" id="headingTwo">
                                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse3" aria-expanded="false">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0">
                                                            <div class="bg-light text-success border border-1 border-success rounded-pill ps-2 pe-2">
                                                                2021 - Current
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse3" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body ms-2 ps-5">
                                                    <h6 class="fs-14 mb-1">INTEKSOFT SDN BHD</h6>
                                                    <p>SOFTWARE ENGINEER</p>
                                                    <div>HIGHLIGHTS:</div>
                                                    <ul>
                                                        <li>Develop & Maintain PHP based Web Application</li>
                                                        <li>Working with Checkout & Payment related services</li>
                                                        <li>Develop Rest API's for Mobile Clients & Desktop Applications</li>
                                                        <li>Deploy & Configure Caprover</li>
                                                        <li>Produce Data Visualization Using Tableau</li>
                                                    </ul>
                                                    <div>
                                                        <i><b>Stack: </b>HTML, CSS, PHP, Composer, MySQL, Javascript, Tableau</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item border-0">
                                            <div class="accordion-header" id="headingTwo">
                                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse4" aria-expanded="false">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0">
                                                            <div class="bg-light text-success border border-1 border-success rounded-pill ps-2 pe-2">
                                                                2021 - 2021
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse4" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body ms-2 ps-5">
                                                    <h6 class="fs-14 mb-1">CTH COMMERCE SDN BHD</h6>
                                                    <p>SOFTWARE ENGINEER</p>
                                                    <div>HIGHLIGHTS:</div>
                                                    <ul>
                                                        <li>Develop & Maintain PHP based Web Application</li>
                                                        <li>Working with Checkout & Payment related services</li>
                                                        <li>Develop Rest API's for Mobile Clients & Desktop Applications</li>
                                                        <li>Involve in Development Of The Warehouse Management System</li>
                                                        <li>Involve in Development Of The Integration for E-Commerce platforms</li>
                                                    </ul>
                                                    <div>
                                                        <i><b>Stack: </b>HTML, CSS, PHP, Composer, MySQL, Javascript</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item border-0">
                                            <div class="accordion-header" id="headingTwo">
                                                <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapse5" aria-expanded="false">
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0">
                                                            <div class="bg-light text-success border border-1 border-success rounded-pill ps-2 pe-2">
                                                                2015 - 2021
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div id="collapse5" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body ms-2 ps-5">
                                                    <h6 class="fs-14 mb-1">AGA TOUCH SDN BHD</h6>
                                                    <p>SOFTWARE ENGINEER</p>
                                                    <div>HIGHLIGHTS:</div>
                                                    <ul>
                                                        <li>Develop & Maintain PHP based Web Application</li>
                                                        <li>Develop Rest API's for Mobile Client & Desktop Applications</li>
                                                        <li>Lead Architect & Backend Development of the Single-Sign-On service (Magnus)</li>
                                                        <li>Develop Web Crawlers for Data Analysist</li>
                                                        <li>Deploy & Configure Elasticsearch for Data Analysist</li>
                                                        <li>Produce Data Visualization using several platform (Kibana, D3, Highcharts)</li>
                                                        <li>Involve in AI Solution</li>
                                                        <li>Develop an AI Solution using chatbot</li>
                                                    </ul>
                                                    <div>
                                                        <i><b>Stack: </b>HTML, CSS, PHP, Composer, MySQL, Javascript</i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab3" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center mb-2">
                                    <div class="flex-shrink-0 me-1">
                                        <i class="ri-user-follow-fill fs-24 align-middle text-primary me-1"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="fs-16 mb-0 fw-semibold">PERSONAL DETAILS</h5>
                                    </div>
                                </div>
                                <div class="bg-light rounded p-3">
                                    <table class="table table-borderless table-sm">
                                        <tbody>
                                            <tr>
                                                <th>Full Name</th>
                                                <td>:</td>
                                                <td>MUHAMAD SAFRIN BIN BAHARUDIN</td>
                                            </tr>
                                            <tr>
                                                <th>Phone Number</th>
                                                <td>:</td>
                                                <td>+60 1140326406</td>
                                            </tr>
                                            <tr>
                                                <th>E-Mail</th>
                                                <td>:</td>
                                                <td>safrinbaharudin@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <th>Location</th>
                                                <td>:</td>
                                                <td>Shah Alam, Selangor / Penang</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col">
                        <div class="d-flex gap-3">
                            <a href="https://web.facebook.com/muhamad.safrin" target="_blank" class="text-primary">
                                <i class="ri-facebook-circle-fill align-bottom me-1"></i> facebook
                            </a>
                            <a href="https://twitter.com/msafrin3" target="_blank" class="text-secondary">
                                <i class="ri-twitter-fill align-bottom me-1"></i> twitter
                            </a>
                            <a href="https://www.linkedin.com/in/muhamad-safrin-816853126/" target="_blank" class="text-info">
                                <i class="ri-linkedin-box-fill align-bottom me-1"></i> linkedin
                            </a>
                            <a href="https://gitlab.com/safrin94" target="_blank" class="text-danger">
                                <i class="ri-gitlab-fill align-bottom me-1"></i> gitlab
                            </a>
                            <a href="https://github.com/msafrin3" target="_blank" class="text-dark">
                                <i class="ri-github-fill align-bottom me-1"></i> github
                            </a>
                        </div>
                    </div>
                    <div class="col text-end text-primary">2023 © msafrin.net</div>
                </div>
            </div>
        </div>
    </div>
</template>