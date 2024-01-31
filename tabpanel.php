<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Online CSS-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<!-- Online JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Online Popper-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<!--Online jQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        /*@include media-breakpoint-down(xxl) {
			.des-name, des-cribe {
				font-size: 14px; <small>
			}
		}*/
        .nav-item>a:hover>img {
            transform: scale(1.2);
        }

        .text-nowrap:hover {
            cursor: pointer;
            font-weight: bold;
            transition: 0.1s
        }

        .border {
            max-width: 300px;
        }

        .border:hover {
            cursor: pointer;
            transform: scale(1.05);
            transition: 0.1s;
        }

        .app-name,
        .app-describe {
            font-size: 14px;
        }

        .app-name>.row>.text-truncate {
            position: relative;
            right: 12px;
        }
    </style>
</head>

<body>
    <div class="tab-pane fade show active" id="app" role="tabpanel" aria-labelledby="tab-app">
        <div class="row bg-light">
            <div class="col-sm-3 col-md-2 bg-light">
                <ul class="nav nav-pills">
                    <?php
                    //sidebar
                    $multiArrayA = array(
                        array('ca', 'list-ul', 'Common Application'),
                        array('br', 'display', 'Brand Responsibility'),
                        array('wt', 'tv', 'Work Together'),
                        array('i', 'book', 'Integration'),
                        array('hr', 'person-check', 'HR Administration'),
                        array('tp', 'basket', 'Tendering&Procurement'),
                        array('mm', 'graph-up-arrow', 'Marketing Management'),
                        array('opr', 'suitcase-lg', 'Operations'),
                        array('ip', 'clipboard-pulse', 'Investment Planning'),
                        array('rd', 'pencil', 'R&D Design'),
                        array('rcm', 'shield-lock', 'Risk Control Monitoring'),
                        array('f', 'currency-yen', 'Finance'),
                        array('dm', 'sliders', 'Data Management'),
                        array('s', 'buildings', 'Subsidiaries'),
                        array('o', 'grid', 'Other')
                    );

                    // Get the number of rows
                    $rows = count($multiArrayA);

                    // Iterate through the rows
                    for ($i = 0; $i < $rows; $i++) {
                        echo '<li class="nav-item w-100">
						        <a href="#" class="nav-link d-flex d-inline-block" id="' . $multiArrayA[$i][0] . '" data-bs-target="#tabpanel" data-bs-toggle="pill" onclick="tabpanel(\'' . $multiArrayA[$i][0] . '\')" role="tab" title="' . $multiArrayA[$i][2] . '">
							        <img src="node_modules/bootstrap-icons/icons/' . $multiArrayA[$i][1] . '.svg" alt="' . $multiArrayA[$i][1] . '">
							        <small class="px-2 d-none d-lg-block text-nowrap">' . $multiArrayA[$i][2] . '</small>
						        </a>						
					        </li>';
                    }
                    ?>
                </ul>
            </div> <!--col-sm-3-->

            <div class="col-sm-9 col-md-10 bg-white">
                <div class="tab-pane" id="tabpanel" role="tabpanel">

                    <div class="row">
                        <?php
                        $multiArrayB = array(
                            array('ca', 'cgpv', 'Brand Responsibility', 'B.R', 'Manages the promotion, communication, and integrity of the company\'s brand image and values...'),
                            array('ca', 'cgpv', 'Work Together', 'W.T', 'Facilitates collaboration and teamwork among employees through various initiatives and platforms...'),
                            array('ca', 'cgpv', 'Integration', 'Igr', 'Ensures seamless integration of systems, processes, and data across different departments and technologies...'),
                            array('ca', 'cgpv', 'HR Administration', 'H.R', 'Handles recruitment, training, compensation, and employee relations to support the organization\'s human resources needs...'),
                            array('ca', 'cgpv', 'Tendering&Procurement', 'T.P', 'Overseeing the acquisition of goods and services through efficient tendering processes and strategic procurement practices.  ...'),
                            array('ca', 'cgpv', 'Marketing Management', 'M.M', 'Designs and executes strategies to promote products/services, engage customers, and drive sales...'),
                            array('ca', 'cgpv', 'Operations', 'Opr', 'Oversees the day-to-day production, delivery, and optimization of products/services...'),
                            array('ca', 'cgpv', 'Investment Planning', 'I.P', 'Develops financial strategies and makes decisions regarding investments and capital allocation...'),
                            array('ca', 'cgpv', 'R&D Design', 'R.D.D', 'Leads research and development efforts to create innovative products/services and enhance technological capabilitie...'),
                            array('ca', 'cgpv', 'Risk Control Monitoring', 'R.C.M', 'Identifies, assesses, and manages risks to protect the organization\'s assets and interests...'),
                            array('ca', 'cgpv', 'Finance', 'Fin', 'Manages financial activities such as reporting, budgeting, investment analysis, and financial planning...'),
                            array('ca', 'cgpv', 'Data Management', 'D.M', 'Handles the collection, storage, analysis, and protection of data to support informed decision-making...'),
                            array('ca', 'cgpv', 'Subsidiaries', 'Sub', 'Manages the operations and strategic direction of subsidiary companies or divisions within the organization...'),
                            array('ca', 'cgpv', 'Other', 'Other', 'Encompasses various specialized departments such as legal, public relations, and customer service, supporting specific organizational functions...'),

                            array('br', 'cgpv', 'Brand Promotion & Management', 'B.R', 'Implementing strategies to enhance the visibility and perception of the brand in the market...'),
                            array('br', 'cgpv', 'Communication of Brand Image & Values', 'B.R', 'Conveying the core identity and principles of the brand to stakeholders...'),
                            array('br', 'cgpv', 'Execution of Social Responsibility and Sustainability Initiatives', 'B.R', 'Implementing programs that contribute to social and environmental well-being...'),
                            array('br', 'cgpv', 'Crisis Communication and Reputation Management', 'B.R', 'Managing communication during crises to protect and rebuild the brand\'s reputation...'),
                            array('br', 'cgpv', 'Sponsorship and Partnership Management', 'B.R', 'Overseeing relationships with sponsors and partners to align with brand objectives...'),
                            array('br', 'cgpv', 'Brand Ambassador Programs', 'B.R', 'Engaging individuals to represent and endorse the brand positively...'),

                            array('wt', 'cgpv', 'Management and Optimization of Team Collaboration Tools', 'W.T', 'Administering tools that facilitate effective teamwork...'),
                            array('wt', 'cgpv', 'Maintenance of Internal Communication and Collaboration Platforms', 'W.T', 'Ensuring the smooth functioning of platforms supporting internal communication...'),
                            array('wt', 'cgpv', 'Facilitation of Cross-departmental Cooperation and Teamwork', 'W.T', 'Encouraging collaboration between different departments...'),
                            array('wt', 'cgpv', 'Virtual Team-building Initiatives', 'W.T', 'Organizing activities to strengthen team bonds in a virtual environment...'),
                            array('wt', 'cgpv', 'Collaboration Workshops and Training', 'W.T', 'Providing training sessions to enhance collaboration skills...'),
                            array('wt', 'cgpv', 'Employee Engagement Surveys and Programs', 'W.T', 'Measuring and enhancing employee satisfaction and commitment...'),

                            array('i', 'cgpv', 'System and Process Integration', 'Igr', 'Combining systems and processes for improved efficiency...'),
                            array('i', 'cgpv', 'Integration of Technological Platforms', 'Igr', 'Incorporating various technological tools to work seamlessly together...'),
                            array('i', 'cgpv', 'Integration of Information and Data Across Departments', 'Igr', 'Ensuring consistent data flow between different departments...'),
                            array('i', 'cgpv', 'Implementation of Enterprise Resource Planning (ERP) Systems', 'Igr', 'Installing systems to streamline business processes...'),
                            array('i', 'cgpv', 'Cross-functional Process Automation', 'Igr', 'Automating processes that span across different functional areas...'),
                            array('i', 'cgpv', 'Data Governance and Standardization', 'Igr', 'Establishing protocols for data management and ensuring consistency...'),

                            array('hr', 'cgpv', 'Recruitment and Talent Management', 'H.R', 'Attracting and managing the best-fit talents for the organization...'),
                            array('hr', 'cgpv', 'Training and Development Programs', 'H.R', 'Providing learning opportunities for employee skill enhancement...'),
                            array('hr', 'cgpv', 'Compensation and Benefits Management', 'H.R', 'Administering salary and benefits programs for employees...'),
                            array('hr', 'cgpv', 'Performance Assessment and Employee Relations Management', 'H.R', 'Evaluating performance and maintaining positive employee relations...'),
                            array('hr', 'cgpv', 'Diversity and Inclusion Programs', 'H.R', 'Promoting diversity and creating an inclusive workplace...'),
                            array('hr', 'cgpv', 'Employee Wellness Initiatives', 'H.R', 'Implementing programs to enhance the well-being of employees...'),
                            array('hr', 'cgpv', 'Succession Planning and Talent Pipeline Development', 'H.R', 'Identifying and preparing future leaders within the organization...'),

                            array('tp', 'cgpv', 'Tendering Platform', 'T.P', 'Supplier collaboration, online bidding and quotation inquiry...'),
                            array('tp', 'cgpv', 'Xin Ming Yuan', 'T.P', 'Group-wide cost system, supporting overall cost-related business...'),
                            array('tp', 'cgpv', 'Bi Cai Shop', 'T.P', 'Internal procurement mall for enterprise purchasing using electronic...'),
                            array('tp', 'cgpv', 'Overseas SAP Procurement', 'T.P', 'Overseas procurement process management, data statistical analysis...'),
                            array('tp', 'cgpv', 'Material Testing', 'T.P', 'Improves efficiency in material quality sampling work, enhancing...'),
                            array('tp', 'cgpv', 'Smart Supplier Platform', 'T.P', 'Builds a supplier\'s entire life through information means...'),
                            array('tp', 'cgpv', 'Cost Management System', 'T.P', 'Through online pricing, standardizes business operations and...'),
                            array('tp', 'cgpv', 'Idle Material System', 'T.P', 'Through the idle material system, physical items can be...'),
                            array('tp', 'cgpv', 'Purchase Request Platform', 'T.P', 'Unified entrance for item procurement requests, optimizing...'),
                            array('tp', 'cgpv', 'Cloud Bidding', 'T.P', 'The competitive evaluation and selection process for cloud service providers offering computing services...'),
                            array('tp', 'cgpv', 'Procurement Cloud', 'T.P', 'Procurement dashboard, the unified center for group procurement...'),
                            array('tp', 'cgpv', 'Inspection Management', 'T.P', 'Comprehensive inspection management, online, intelligent...'),
                            array('tp', 'cgpv', 'Smart Supplier Platform - New', 'T.P', 'Provides a one-stop supplier application, building connections...'),
                            array('tp', 'cgpv', 'Overseas Cost Smart Platform', 'T.P', 'Adapts to overseas regions and differentiated overall cost-related business...'),
                            array('tp', 'cgpv', 'Cost Sharing Platform', 'T.P', 'Undertakes cost consulting business through the cost-sharing platform...'),
                            array('tp', 'cgpv', 'Cost Cloud', 'T.P', 'Monitors, analyzes, and applies cost business data...'),
                            array('tp', 'cgpv', 'Contract Management System', 'T.P', 'Contract management platform preliminary planning divided into three major parts...'),

                            array('mm', 'cgpv', 'Market Research and Analysis', 'M.M', 'Studying market trends and analyzing consumer behavior...'),
                            array('mm', 'cgpv', 'Brand Promotion and Advertising Campaigns', 'M.M', 'Creating and executing campaigns to promote the brand...'),
                            array('mm', 'cgpv', 'Sales and Marketing Strategy Development', 'M.M', 'Formulating strategies to drive sales and market penetration...'),
                            array('mm', 'cgpv', 'Content Marketing Strategy', 'M.M', 'Planning and executing strategies for content creation and distribution...'),
                            array('mm', 'cgpv', 'Social Media Management and Campaigns', 'M.M', 'Managing social media platforms and running promotional campaigns...'),
                            array('mm', 'cgpv', 'Customer Relationship Management (CRM) Systems', 'M.M', 'Implementing systems to manage and analyze customer interactions...'),

                            array('opr', 'cgpv', 'Production and Service Delivery', 'Opr', 'Ensuring efficient manufacturing and delivery of services...'),
                            array('opr', 'cgpv', 'Supply Chain Management', 'Opr', 'Overseeing the entire supply chain process from production to distribution...'),
                            array('opr', 'cgpv', 'Process Optimization and Efficiency Improvement', 'Opr', 'Identifying and implementing measures to enhance operational efficiency...'),
                            array('opr', 'cgpv', 'Lean and Six Sigma Process Improvement Projects', 'Opr', 'Initiating projects to reduce waste and improve processes...'),
                            array('opr', 'cgpv', 'Quality Control and Assurance Programs', 'Opr', 'Implementing measures to maintain product/service quality...'),
                            array('opr', 'cgpv', 'Inventory Management and Optimization', 'Opr', 'Managing and optimizing stock levels to meet demand...'),

                            array('ip', 'cgpv', 'Financial Planning and Investment Strategies', 'I.P', 'Developing strategies for financial planning and investment...'),
                            array('ip', 'cgpv', 'Capital Budgeting and Project Investment Decisions', 'I.P', 'Assessing capital expenditures and making investment decisions...'),
                            array('ip', 'cgpv', 'Portfolio Management and Diversification', 'I.P', 'Managing a diverse portfolio of investments to mitigate risk...'),
                            array('ip', 'cgpv', 'Risk-adjusted Return Analysis', 'I.P', 'Evaluating investment returns while considering associated risks...'),
                            array('ip', 'cgpv', 'Mergers and Acquisitions (M&A) Strategy', 'I.P', 'Developing strategies for mergers, acquisitions, and divestitures...'),

                            array('rd', 'cgpv', 'Product Research and Development', 'R.D.D', 'Conducting research and developing new products...'),
                            array('rd', 'cgpv', 'Technological Innovation and New Product Development', 'R.D.D', 'Focusing on technological advancements and introducing new products...'),
                            array('rd', 'cgpv', 'Patent Filing and Intellectual Property Management', 'R.D.D', 'Protecting intellectual property through patent filings...'),
                            array('rd', 'cgpv', 'User Experience (UX) Research and Design', 'R.D.D', 'Enhancing user satisfaction by improving product usability...'),
                            array('rd', 'cgpv', 'Technology Scouting and Innovation Partnerships', 'R.D.D', 'Identifying and partnering with external innovators and technologies...'),

                            array('rcm', 'cgpv', 'Risk Assessment and Management', 'R.C.M', 'Identifying and managing potential risks to the organization...'),
                            array('rcm', 'cgpv', 'Safety and Compliance Monitoring', 'R.C.M', 'Ensuring adherence to safety standards and regulatory compliance...'),
                            array('rcm', 'cgpv', 'Cybersecurity Risk Assessments', 'R.C.M', 'Assessing and mitigating cybersecurity risks...'),
                            array('rcm', 'cgpv', 'Compliance Monitoring and Reporting', 'R.C.M', 'Ensuring adherence to internal and external regulations...'),
                            array('rcm', 'cgpv', 'Crisis Response and Business Continuity Planning', 'R.C.M', 'Preparing for and responding to crises to ensure business continuity...'),

                            array('f', 'cgpv', 'Financial Reporting and Accounting Management', 'Fin', 'Managing financial reporting and accounting processes...'),
                            array('f', 'cgpv', 'Budget Planning and Financial Analysis', 'Fin', 'Planning budgets and analyzing financial performance...'),
                            array('f', 'cgpv', 'Capital Structure Optimization', 'Fin', 'Optimizing the mix of equity and debt for financial stability...'),
                            array('f', 'cgpv', 'Financial Forecasting and Scenario Analysis', 'Fin', 'Predicting financial outcomes under various scenarios...'),
                            array('f', 'cgpv', 'Tax Planning and Compliance', 'Fin', 'Strategizing to minimize tax liabilities while ensuring compliance...'),

                            array('dm', 'cgpv', 'Data Collection and Storage', 'D.M', 'Collecting and storing data securely...'),
                            array('dm', 'cgpv', 'Data Analysis and Reporting', 'D.M', 'Analyzing data and preparing reports...'),
                            array('dm', 'cgpv', 'Data Privacy and Security Management', 'D.M', 'Ensuring the privacy and security of sensitive data...'),
                            array('dm', 'cgpv', 'Master Data Management (MDM)', 'D.M', 'Managing and maintaining consistent master data across the organization...'),
                            array('dm', 'cgpv', 'Predictive Analytics and Machine Learning Applications', 'D.M', 'Applying advanced analytics for predictive insights...'),
                            array('dm', 'cgpv', 'Data Ethics and Privacy Compliance', 'D.M', 'Ensuring ethical use of data and compliance with privacy regulations...'),

                            array('s', 'cgpv', 'Management of Subsidiary Operation', 'Sub', 'Overseeing the day-to-day operations of subsidiary companies...'),
                            array('s', 'cgpv', 'Strategic Planning and Oversight of Subsidiaries', 'Sub', 'Developing and overseeing the strategic direction of subsidiary businesses...'),
                            array('s', 'cgpv', 'Market Expansion Strategies for Subsidiaries', 'Sub', 'Planning and executing strategies for the growth of subsidiary markets...'),
                            array('s', 'cgpv', 'Joint Ventures and Strategic Alliances', 'Sub', 'Establishing partnerships and alliances with other organizations for mutual benefit...'),
                            array('s', 'cgpv', 'Regulatory Compliance for Subsidiary Operations', 'Sub', 'Ensuring compliance with local and international regulations in subsidiary operations...'),

                            array('o', 'cgpv', 'Legal Department: Contract Negotiation and Management', 'L.D', 'Handling legal agreements and contract negotiations...'),
                            array('o', 'cgpv', 'Public Relations: Media Relations and Event Management', 'P.R', 'Managing media relationships and organizing events for public relations...'),
                            array('o', 'cgpv', 'Customer Service: Customer Feedback Analysis and Improvement Initiatives:', 'C.S', 'Analyzing customer feedback and implementing improvements in service...')
                        );

                        // Get the number of rows
                        $rows = count($multiArrayB);

                        for ($i = 0; $i < $rows; $i++) {
                            if ($multiArrayB[$i][2] == "Empty") {
                                echo '<div>empty</div>';
                            } else {
                                echo '<div class="col-md-12 col-lg-6 col-xl-4 content-app ' . $multiArrayB[$i][0] . '">
                                        <div class="p-1 border border-2 rounded" title="' . $multiArrayB[$i][2] . '">
                                            <div class="row">
                                                <div class="col-xs-3 col-sm-4 col-md-3 text-center">
                                                    <img src="src/img/' . $multiArrayB[$i][1] . '.png" class="img-fluid img-thumbnail rounded" alt="' . $multiArrayB[$i][1] . '">
                                                </div>
                                                <div class="col-xs-9 col-sm-8 col-md-9 app-name">
                                                    <div class="row">
                                                        <span class="text-truncate">' . $multiArrayB[$i][2] . '</span>
                                                    </div>
                                                    <div class="row">Type: ' . $multiArrayB[$i][3] . '</div>
                                                </div>
                                            </div>
                                            <div class="text-truncate app-describe">' . $multiArrayB[$i][4] . '</div>
                                        </div>
                                    </div>';
                            }
                        }
                        ?>
                    </div> <!--row-->
                </div> <!--tab-pane-->
            </div> <!--col-sm-9-->
        </div> <!--row-->
    </div> <!--app-->

    <script>
        $('.content-app').css('display', 'none');
        $('.ca').css('display', 'block');
        function tabpanel(id) {
            $('.content-app').css('display', 'none');
            var tp = document.getElementsByClassName(id);
            for (var i = 0; i < tp.length; i++) {
                tp[i].style.display = 'block';
            }
        }
    </script>
</body>

</html>