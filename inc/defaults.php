<?php
/**
 * Default page copy used when ACF fields are empty.
 * Edit live pages in WP admin (ACF). This file is the fallback + first-run content.
 *
 * Original live-site wording is mapped into the Oracle-style sections.
 * The Oracle Solutions page is kept as designed.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

/**
 * All default content, keyed by page slug.
 *
 * @return array
 */
function verus_default_content() {
	static $content = null;
	if ( null !== $content ) {
		return $content;
	}
	$content = array(
		'oracle-solutions' => array(
			'eyebrow' => 'Database Management',
			'title' => 'Oracle Consulting Services',
			'sub' => 'Senior-Led Oracle Expertise — From Migrations to RAC',
			'answer' => 'Verus provides senior-led Oracle consulting for mid-sized organizations: database migrations and version upgrades, performance tuning, high-availability and RAC architecture, disaster recovery design, and licensing review. Our Oracle practice is backed by 24 years of infrastructure and security experience, delivering production Oracle work without the overhead of a full-time DBA.',
			'primary_label' => 'Request an Oracle Environment Assessment',
			'secondary_label' => 'Database Management Solutions',
			'secondary_url' => '/consulting-services/database-management/',
			'trust' => array(
				array(
					'title' => 'Senior-led engagements',
				),
				array(
					'title' => 'RAC & high-availability depth',
				),
				array(
					'title' => '24 years infrastructure experience',
				),
			),
			'problem_eyebrow' => 'The Risk',
			'problem_title' => 'Oracle Doesn’t Forgive Guesswork',
			'problem_lede' => 'Oracle environments are unforgiving: a botched migration means downtime, a mistuned instance quietly bleeds performance, and a licensing misstep can turn into a six-figure audit finding. Most mid-sized companies don’t need a full-time Oracle DBA — but when something goes wrong, generalist IT support isn’t enough.',
			'pains' => array(
				array(
					'title' => 'Migration Risk',
					'text' => 'Version upgrades and platform moves that stall, overrun, or take production down.',
					'icon' => 'migrate',
				),
				array(
					'title' => 'Silent Performance Loss',
					'text' => 'Databases running far below capability — slow queries, poor indexing, misconfigured memory nobody has time to diagnose.',
					'icon' => 'gauge',
				),
				array(
					'title' => 'Licensing Exposure',
					'text' => 'Oracle licensing is complex and aggressively audited. Unintentional non-compliance carries serious financial risk.',
					'icon' => 'shield',
				),
			),
			'caps_eyebrow' => 'Capabilities',
			'caps_title' => 'What Our Oracle Practice Delivers',
			'caps_lede' => 'Five service lines covering the full lifecycle of a production Oracle environment — from the initial move to ongoing availability.',
			'caps' => array(
				array(
					'title' => 'Database Migrations & Upgrades',
					'text' => 'Moving Oracle between versions, platforms, or into the cloud — planned and executed to minimize downtime. Includes legacy version upgrades to current releases.',
					'icon' => 'database',
				),
				array(
					'title' => 'Performance Tuning & Optimization',
					'text' => 'Diagnosing and resolving slow queries, indexing problems, memory and storage configuration, and workload bottlenecks in production Oracle environments.',
					'icon' => 'gauge',
				),
				array(
					'title' => 'High Availability, RAC & Disaster Recovery',
					'text' => 'Design and support for Oracle Real Application Clusters (RAC), Data Guard, failover, and disaster recovery architecture — the complex end of Oracle availability work.',
					'icon' => 'cluster',
					'featured' => true,
					'tag' => 'Credibility anchor',
				),
				array(
					'title' => 'Licensing & Compliance Review',
					'text' => 'Reviewing Oracle licensing posture to identify exposure before an audit does — clarifying entitlements, usage, and options to reduce risk and cost.',
					'icon' => 'doc',
				),
				array(
					'title' => 'Implementation & Ongoing Support',
					'text' => 'New Oracle deployments configured to your environment, plus ongoing support for organizations without a dedicated in-house DBA.',
					'icon' => 'star',
				),
			),
			'why_eyebrow' => 'Why Verus',
			'why_title' => 'Senior-Led, Not Junior-Staffed',
			'whys' => array(
				array(
					'title' => 'Senior-Led, Not Junior-Staffed',
					'text' => 'Work at Verus is led by senior consultants with production experience — not handed off to a bench of juniors. You get expertise at the level the problem actually requires.',
				),
				array(
					'title' => 'Backed by 24 Years of Infrastructure Experience',
					'text' => 'Since 2002, Verus has kept business-critical systems secure and running. Every engagement sits inside that broader practice of networks, security, and operations.',
				),
				array(
					'title' => 'Right-Sized Engagement',
					'text' => 'Most mid-sized organizations do not need an army. We scope to the work — project-based where a project is enough, ongoing where continuous support makes sense.',
				),
			),
			'stats' => array(
				array(
					'metric' => '24 yrs',
					'label' => 'Infrastructure experience',
				),
				array(
					'metric' => 'RAC',
					'label' => 'High-availability depth',
				),
				array(
					'metric' => 'Senior-led',
					'label' => 'Every engagement',
				),
				array(
					'metric' => 'Assessment',
					'label' => 'Fixed-scope entry point',
				),
			),
			'cta_title' => 'Not Sure Where Your Oracle Environment Stands?',
			'cta_text' => 'Start with an assessment. We review your Oracle environment — version currency, performance, availability architecture, and licensing exposure — and give you a clear picture of risk and opportunity. Fixed scope, no obligation.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Fixed scope · No obligation · Senior consultant on the call',
			'faq_eyebrow' => 'Oracle FAQ',
			'faq_title' => 'Common Questions',
			'faqs' => array(
				array(
					'question' => 'What Oracle services does Verus provide?',
					'answer' => 'Verus provides Oracle database migrations and version upgrades, performance tuning, high-availability and RAC architecture, disaster recovery design, licensing review, and ongoing database support for organizations without a full-time DBA.',
				),
				array(
					'question' => 'Does Verus support Oracle RAC?',
					'answer' => 'Yes. Verus supports Oracle Real Application Clusters (RAC), including architecture design, implementation, and ongoing support, along with Data Guard and disaster recovery configurations for high-availability Oracle environments.',
				),
				array(
					'question' => 'Do we need a full-time DBA, or can Oracle work be outsourced?',
					'answer' => 'Most mid-sized organizations do not need a full-time Oracle DBA. Project-based engagements cover migrations, upgrades, and tuning, while ongoing support arrangements provide senior Oracle expertise without the cost of a dedicated hire.',
				),
				array(
					'question' => 'How does Oracle licensing risk arise?',
					'answer' => 'Oracle licensing depends on processor counts, feature usage, and deployment configuration — all of which drift over time. Unintentional non-compliance is common and can surface expensive findings during an Oracle audit. A licensing review identifies exposure in advance.',
				),
			),
		),
		'home' => array(
			'primary_label' => 'Get your score in minutes',
			'primary_url' => '/ai-maturity-assessment/',
			'secondary_label' => 'Book a Meeting',
			'secondary_url' => 'https://calendly.com/tamra-veruscloudsecure/new-meeting',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Do you have the best partner?',
			'problem_lede' => 'Most businesses juggle an AI vendor, a security firm, and an MSP. When something breaks, they point at each other. Verus is the one partner who scores the opportunity, implements it, secures it, and stays on it.',
			'pains' => array(
				array(
					'title' => 'AI Consulting & Automation',
					'text' => 'AI Maturity Assessment, AI strategy, process automation, Custom AI Assistants, and private AI governance.',
					'icon' => 'ai',
				),
				array(
					'title' => 'Security for Today’s Digital Business',
					'text' => 'Managed Detection & Response, Vulnerability Assessments, Phishing Testing & Training, and Compliance & Risk Management.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Reliable Technology. Exceptional Support.',
					'text' => 'Co-Managed IT Support, Microsoft 365 Management, Cloud Hosting & Migrations, Backup & Disaster Recovery, and Help Desk & Network Support.',
					'icon' => 'headset',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => '',
			'caps_lede' => '',
			'caps' => array(),
			'why_eyebrow' => 'Why Verus Cloud Secure?',
			'why_title' => 'Why Verus Cloud Secure?',
			'whys' => array(
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
					'text' => 'Founded in 2002, Verus helps organizations leverage AI, automation, cybersecurity, and managed technology solutions to improve productivity, strengthen security, and drive business growth.',
				),
				array(
					'title' => 'Cybersecurity-First Approach',
					'text' => 'Protect your organization from evolving cyber threats while enabling secure growth and innovation.',
				),
				array(
					'title' => 'Managed IT & Cloud Services',
					'text' => 'Verus provides proactive IT management and strategic guidance to keep your business running efficiently and securely.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Get your AI Maturity score in minutes',
			'cta_text' => 'A short quiz. A real score. Clear next steps — you do not have to book a meeting to start.',
			'cta_label' => 'Get your score in minutes',
			'cta_url' => '/ai-maturity-assessment/',
			'cta_secondary_label' => 'Book a Meeting',
			'cta_secondary_url' => 'https://calendly.com/tamra-veruscloudsecure/new-meeting',
			'cta_note' => 'Or book a meeting if you already know what you want to tackle.',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(
				array(
					'question' => 'What services does Verus provide?',
					'answer' => 'AI that does real work, cybersecurity that keeps the insurer happy, and managed IT that keeps the lights on — one senior team, not three vendors.',
				),
				array(
					'question' => 'What is A.A.I.M.?',
					'answer' => 'Assess. Analyze. Implement. Manage. We score your AI readiness, rank the opportunities by ROI and risk, pilot then roll out, and monitor it 24/7.',
				),
				array(
					'question' => 'Who is Verus?',
					'answer' => 'A senior-led technology partner for mid-sized organizations. One team covers AI, cybersecurity, and managed IT, so you are not coordinating three vendors to get one outcome.',
				),
			),
			'eyebrow' => 'AI Consulting, Business Automation, Cybersecurity & Managed IT Services',
			'title' => 'AI Powered. Cyber Secure. Business Driven.',
			'sub' => 'Is your company AI READY?',
			'answer' => 'Put AI to work without putting your data at risk. We automate the busywork, stand up private AI, and keep the business secure — the same senior team that has run IT and cybersecurity since 2002.',
			'pillars_eyebrow' => 'Our Solutions',
			'pillars_title' => 'AI Consulting, Business Automation, Cybersecurity & Managed IT Services',
			'pillars_lede' => 'Talk to your data. Replace the busywork. Keep it private. Get a real human when you need one.',
			'pillars' => array(
				array(
					'title' => 'AI Consulting & Automation',
					'text' => 'Custom AI Assistants, automation, and private AI — built for owners who are not trying to become IT people.',
					'url' => '/ai-services/',
					'icon' => 'ai',
				),
				array(
					'title' => 'Cybersecurity',
					'text' => 'Protect the business while you adopt AI. Monitoring, testing, and insurance-ready controls.',
					'url' => '/cybersecurity/',
					'icon' => 'lock',
				),
				array(
					'title' => 'Managed IT',
					'text' => 'Email, cloud, backups, and a help desk that actually picks up — so the stack under the AI does not wobble.',
					'url' => '/managed-it/',
					'icon' => 'headset',
				),
				array(
					'title' => 'IT Consulting Services',
					'text' => 'Migrations, databases, and projects senior people still do themselves. The foundation AI needs.',
					'url' => '/consulting-services/',
					'icon' => 'database',
				),
			),
			'aaim_eyebrow' => 'Our Approach: A.A.I.M.',
			'aaim_title' => 'Assess. Analyze. Implement. Manage.',
			'aaim_lede' => 'Four steps. No mystery. We score where you are, pick the work that pays, prove it in a pilot, then keep it running.',
			'aaim' => array(
				array(
					'title' => 'Assess',
					'text' => 'We score your AI readiness and review your current systems, data, and security.',
				),
				array(
					'title' => 'Analyze',
					'text' => 'We rank the opportunities by ROI and risk and build a plan you can act on.',
				),
				array(
					'title' => 'Implement',
					'text' => 'We pilot first, prove it works, then roll it out.',
				),
				array(
					'title' => 'Manage',
					'text' => 'We monitor, govern, and support it 24/7 so it keeps working.',
				),
			),
			'testimonials_eyebrow' => 'Industries We Serve',
			'testimonials_title' => 'Leader in Cybersecurity and Technology Solutions',
			'testimonials' => array(
				array(
					'title' => 'Assisted Living',
					'text' => 'Verus is dedicated to our cybersecurity needs. Their team has provided exceptional IT support while implementing robust security measures that protect our residents\' sensitive information.',
				),
				array(
					'title' => 'Energy',
					'text' => 'Verus provided a tailored cloud security solution with advanced threat detection, encryption, and compliance management for our SCADA systems — keeping critical infrastructure secure.',
				),
				array(
					'title' => 'Finance',
					'text' => 'Verus’s network migration support streamlined our operations, cutting processing times by 30% and ensuring cybersecurity compliance. Their 24/7 support transformed our workflow.',
				),
				array(
					'title' => 'Healthcare',
					'text' => 'Our regional hospital was trapped in a termination hardware contract. Verus provided full hardware solutions that secured their systems and cut costs by 50%.',
				),
			),
		),
		'who-is-verus' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Our Vision',
			'problem_lede' => 'To help organizations securely embrace AI, automation, and emerging technologies that drive efficiency, innovation, and growth.',
			'pains' => array(
				array(
					'title' => 'AI innovation',
					'text' => 'We combine AI innovation, cybersecurity expertise, and strategic technology guidance to help businesses operate more efficiently, securely, and competitively.',
					'icon' => 'ai',
				),
				array(
					'title' => 'Cybersecurity expertise',
					'text' => 'Protect your organization from evolving cyber threats while enabling secure growth and innovation.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Strategic technology guidance',
					'text' => 'Our proven methodology helps organizations identify opportunities, reduce risk, and maximize return on technology investments.',
					'icon' => 'chart',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Partner with Us',
			'caps_lede' => 'Ready to transform your business with AI-powered technology solutions? Partner with Verus to innovate securely and grow with confidence.',
			'caps' => array(
				array(
					'title' => 'Our Vision',
					'text' => 'To help organizations securely embrace AI, automation, and emerging technologies that drive efficiency, innovation, and growth.',
					'icon' => 'ai',
				),
				array(
					'title' => 'Our Approach: A.A.I.M.',
					'text' => 'Assess. Analyze. Implement. Manage. Our proven methodology helps organizations identify opportunities, reduce risk, and maximize return on technology investments.',
					'icon' => 'check',
				),
				array(
					'title' => 'Serving clients nationwide',
					'text' => 'Serving clients nationwide, we combine AI innovation, cybersecurity expertise, and strategic technology guidance to help businesses operate more efficiently, securely, and competitively.',
					'icon' => 'building',
					'featured' => true,
					'tag' => 'Nationwide',
				),
				array(
					'title' => '24/7 Monitoring & Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
					'icon' => 'headset',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why Verus Cloud Secure?',
			'whys' => array(
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
					'text' => 'Founded in 2002, Verus helps organizations leverage AI, automation, cybersecurity, and managed technology solutions to improve productivity, strengthen security, and drive business growth.',
				),
				array(
					'title' => 'Cybersecurity-First Approach',
					'text' => 'Protect your organization from evolving cyber threats while enabling secure growth and innovation.',
				),
				array(
					'title' => 'Managed IT & Cloud Services',
					'text' => 'Verus provides proactive IT management and strategic guidance to keep your business running efficiently and securely.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Partner with Us',
			'cta_text' => 'Ready to transform your business with AI-powered technology solutions? Partner with Verus to innovate securely and grow with confidence.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(
				array(
					'question' => 'Who is Verus?',
					'answer' => 'Founded in 2002, Verus helps organizations leverage AI, automation, cybersecurity, and managed technology solutions to improve productivity, strengthen security, and drive business growth.',
				),
				array(
					'question' => 'What is your vision?',
					'answer' => 'To help organizations securely embrace AI, automation, and emerging technologies that drive efficiency, innovation, and growth.',
				),
			),
			'eyebrow' => 'Who is Verus',
			'title' => 'Who is Verus?',
			'sub' => 'Founded in 2002',
			'answer' => 'Founded in 2002, Verus helps organizations leverage AI, automation, cybersecurity, and managed technology solutions to improve productivity, strengthen security, and drive business growth. Serving clients nationwide, we combine AI innovation, cybersecurity expertise, and strategic technology guidance to help businesses operate more efficiently, securely, and competitively.',
		),
		'contact' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '1-800-958-3787',
			'secondary_url' => 'tel:18009583787',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => '',
			'problem_lede' => '',
			'pains' => array(),
			'caps_eyebrow' => '',
			'caps_title' => '',
			'caps_lede' => '',
			'caps' => array(),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why Choose Verus?',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Meet With Our Team',
			'cta_text' => 'Get a direct meeting with our team and begin your path to safety, security and knowledge. Click the link below.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'Contact Us',
			'title' => 'Contact Us',
			'sub' => 'Meet With Our Team',
			'answer' => 'Get a direct meeting with our team and begin your path to safety, security and knowledge. Click the link below.',
		),
		'services' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Do you have the best partner?',
			'problem_lede' => 'Whether you’re exploring AI for the first time or looking to deploy advanced AI solutions, our experts help you assess, implement, secure, and manage your technology investments.',
			'pains' => array(
				array(
					'title' => 'Managed IT Services',
					'text' => 'Reliable Technology. Exceptional Support. Co-Managed IT Support, Microsoft 365 Management, Cloud Hosting & Migrations, Backup & Disaster Recovery, and Help Desk & Network Support.',
					'icon' => 'headset',
				),
				array(
					'title' => 'Cybersecurity',
					'text' => 'Security for Today’s Digital Business. Managed Detection & Response, Vulnerability Assessments, Phishing Testing & Training, and Compliance & Risk Management.',
					'icon' => 'lock',
				),
				array(
					'title' => 'AI Integrations',
					'text' => 'Transform Your Business with Artificial Intelligence. AI Maturity Assessment, AI strategy, process automation, Custom AI Assistants, and private AI governance.',
					'icon' => 'ai',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'AI Consulting, Business Automation, Cybersecurity & Managed IT Services',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'AI Services',
					'text' => 'Scale Fast. Slash Costs. Run at True AI Speed. AI Services, purpose-built for non-technical business owners who refuse to let tech slow them down.',
					'icon' => 'ai',
					'url' => '/ai-services/',
				),
				array(
					'title' => 'Cybersecurity',
					'text' => 'Protect your organization from evolving cyber threats while enabling secure growth and innovation.',
					'icon' => 'lock',
					'url' => '/cybersecurity/',
				),
				array(
					'title' => 'Managed IT',
					'text' => 'Verus provides proactive IT management and strategic guidance to keep your business running efficiently and securely.',
					'icon' => 'headset',
					'url' => '/managed-it/',
				),
				array(
					'title' => 'IT Consulting Services',
					'text' => 'Technology Projects That Power AI and Business Growth. From infrastructure modernization and cloud migrations to data optimization, cybersecurity, and automation initiatives.',
					'icon' => 'database',
					'url' => '/consulting-services/',
					'featured' => true,
					'tag' => 'IT Project Services',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why Verus Cloud Secure?',
			'whys' => array(
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
					'text' => 'Founded in 2002, Verus helps organizations leverage AI, automation, cybersecurity, and managed technology solutions to improve productivity, strengthen security, and drive business growth.',
				),
				array(
					'title' => 'Cybersecurity-First Approach',
					'text' => 'Protect your organization from evolving cyber threats while enabling secure growth and innovation.',
				),
				array(
					'title' => 'Managed IT & Cloud Services',
					'text' => 'Verus provides proactive IT management and strategic guidance to keep your business running efficiently and securely.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Schedule a Meeting Today',
			'cta_text' => 'Connect with our experts to discuss your goals and build a roadmap for success.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'Our Solutions',
			'title' => 'Services',
			'sub' => 'AI Consulting, Business Automation, Cybersecurity & Managed IT Services',
			'answer' => 'Verus is your next generation technology company. Verus Cloud Secure helps organizations leverage Artificial Intelligence to improve efficiency, automate repetitive processes, strengthen security, and accelerate growth.',
		),
		'ai-services' => array(
			'meta_description' => 'Verus helps non-technical business owners put AI to work — automation, AI agents, virtual receptionists, and secure private AI — backed by 24 years of managed IT and cybersecurity.',
			'primary_label' => 'Get your score in minutes',
			'primary_url' => '/ai-maturity-assessment/',
			'secondary_label' => 'Book a Meeting',
			'secondary_url' => 'https://calendly.com/tamra-veruscloudsecure/new-meeting',
			'trust' => array(
				array(
					'title' => 'Private AI, not public chatbots',
				),
				array(
					'title' => 'Insurance-ready governance',
				),
				array(
					'title' => 'Get your score in minutes',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Is your company AI READY?',
			'problem_lede' => 'Most owners are not stuck on the tech. They are stuck on where to start, what it will cost, and whether the data stays in the building.',
			'pains' => array(
				array(
					'title' => 'Replace a role',
					'text' => 'Virtual AI Employees run the repetitive seat — data entry, lead qualification, document review — 24/7 on your private stack.',
					'icon' => 'ai',
					'url' => '/ai-services/virtual-ai-employees/',
				),
				array(
					'title' => 'Connect the apps',
					'text' => 'Smart Task Automation stops the copy-paste between email, CRM, and accounting.',
					'icon' => 'bolt',
					'url' => '/ai-services/smart-task-automation/',
				),
				array(
					'title' => 'Keep it insurable',
					'text' => 'Public AI is an insurance gap. Private AI Governance answers that objection before you buy anything else.',
					'icon' => 'lock',
					'url' => '/ai-services/private-ai-governance/',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Verus 5 Pillars of AI-Powered Growth',
			'caps_lede' => 'Replace a role. Keep it private. Connect the apps. Replace the desk phone. Talk to your data.',
			'caps' => array(
				array(
					'title' => 'Virtual AI Employees',
					'text' => 'Replace a role. Digital workers that run 24/7 so you do not hire another seat for the busywork.',
					'icon' => 'ai',
					'url' => '/ai-services/virtual-ai-employees/',
				),
				array(
					'title' => 'Private AI Governance',
					'text' => 'The insurance gap. Public AI tools send data out of the building. We keep it private, logged, and carrier-ready.',
					'icon' => 'lock',
					'url' => '/ai-services/private-ai-governance/',
					'featured' => true,
					'tag' => 'Do this before you buy the rest',
				),
				array(
					'title' => 'Smart Task Automation',
					'text' => 'Connect apps. Eliminate busywork. Email, CRM, and accounting finally talk to each other.',
					'icon' => 'bolt',
					'url' => '/ai-services/smart-task-automation/',
				),
				array(
					'title' => 'Digital Customer Assistants',
					'text' => 'Replace the desk phone. Voice and chat that answers, routes, and books meetings 24/7.',
					'icon' => 'headset',
					'url' => '/ai-services/digital-customer-assistants/',
				),
				array(
					'title' => 'Instant Business Intelligence',
					'text' => 'Talk to your data. Ask a plain-English question. Get an answer from your numbers — not a public chatbot.',
					'icon' => 'chart',
					'url' => '/ai-services/instant-business-intelligence/',
				),
			),
			'proof_eyebrow' => 'Proof',
			'proof_title' => 'What happened when the busywork stopped being a person',
			'proof_metric' => '60–80%',
			'proof_label' => 'less cost on repetitive tasks',
			'proof_text' => 'Teams that stood up Virtual AI Employees on private Verus infrastructure cut repetitive-task cost 60–80% and processed the same work 3–5× faster — without sending files to a public AI tool.',
			'proof_note' => 'Typical result reported across Virtual AI Employee deployments. Your score and first-year value come from the AI Maturity Assessment.',
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Built for owners, not IT hobbyists',
			'whys' => array(
				array(
					'title' => 'Private by default',
					'text' => 'Your data stays in your environment. No “just paste it into ChatGPT.”',
				),
				array(
					'title' => 'Insurance-ready from day one',
					'text' => 'Governance, logs, and controls the carrier actually asks for — before you scale agents across the company.',
				),
				array(
					'title' => 'The stack under the AI',
					'text' => 'Same team that has run cybersecurity and managed IT since 2002. The AI does not sit on a wobbly network.',
				),
				array(
					'title' => 'A score before a sales pitch',
					'text' => 'Take the AI Maturity Assessment first. Get a number, a gap list, and a first-year value estimate in minutes.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Get your AI Maturity score in minutes',
			'cta_text' => 'See where you stand before you buy another tool. Then book a meeting if you want help acting on it.',
			'cta_label' => 'Get your score in minutes',
			'cta_url' => '/ai-maturity-assessment/',
			'cta_secondary_label' => 'Book a Meeting',
			'cta_secondary_url' => 'https://calendly.com/tamra-veruscloudsecure/new-meeting',
			'cta_note' => 'The quiz is free. The meeting is optional.',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'AI Services',
			'title' => 'AI Services',
			'sub' => 'Scale Fast. Slash Costs. Run at True AI Speed.',
			'answer' => 'Purpose-built for non-technical business owners. Automation, AI agents, virtual receptionists, and private AI — without putting company data on the public internet.',
		),
		'cybersecurity' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Why choose Verus for Cybersecurity?',
			'problem_lede' => 'Have you been lucky or are you truly safe from cyber-attacks? Verus offers fast and free assessments. Hackers attack EVERYONE! Be prepared, and get peace of mind that your infrastructure is protected.',
			'pains' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
					'icon' => 'doc',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems and provides secure, anytime access to data.',
					'icon' => 'network',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Top-Tier Cybersecurity Solutions',
			'caps_lede' => 'It is tailored to protect your valuable digital assets. Its real-time threat detection capabilities, giving you peace of mind in today’s challenging cybersecurity landscape.',
			'caps' => array(
				array(
					'title' => 'Cybersecurity and Compliance',
					'text' => 'Ensure your company is secure and safe. Verus uses cutting edge technology to ensure you are not only secure, but also in compliance with your insurance requirements.',
					'icon' => 'lock',
					'url' => '/cybersecurity/cybersecurity-and-compliance/',
				),
				array(
					'title' => 'Cybersecurity Insurance',
					'text' => 'In today’s interconnected world, businesses face an ever-increasing threat of cyberattacks and data breaches.',
					'icon' => 'doc',
					'url' => '/cybersecurity/cybersecurity-insurance-compliance/',
				),
				array(
					'title' => 'Multi-Factor Authentication',
					'text' => 'Multifactor Authentication is essential to your data’s security. Partner with our team of cybersecurity specialists to significantly strengthen your defenses.',
					'icon' => 'lock',
					'url' => '/cybersecurity/multi-factor-authentication/',
				),
				array(
					'title' => 'Phishing Exercises',
					'text' => 'Ransomware attacks can be prevented with the proper security and training. Verus offers comprehensive phishing exercises for clients.',
					'icon' => 'users',
					'url' => '/cybersecurity/phishing-solutions-and-exercises/',
				),
				array(
					'title' => 'Penetration Testing Services',
					'text' => 'Penetration testing, also known as ethical hacking testing, is one of the most effective methods for identifying and mitigating possible risks.',
					'icon' => 'shield',
					'url' => '/cybersecurity/penetration-testing/',
				),
				array(
					'title' => 'Free Security Assessment',
					'text' => 'When was the last time you had a cybersecurity risk assessment? We offer a free third-party assessment of your network and digital environments.',
					'icon' => 'check',
					'url' => '/cybersecurity/free-cybersecurity-assessment/',
					'featured' => true,
					'tag' => 'Free assessment',
				),
				array(
					'title' => 'The Platform Offers Robust Encryption and Multi-factor Authentication (MFA)',
					'text' => 'Verus creates a formidable barrier against unauthorized data access. Significantly reducing the risk of cyber-attacks, ensuring your organization’s digital safety.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Advanced Automated Incident Response',
					'text' => 'Verus Cloud Secure’s automated incident response functionality swiftly isolates threats and mitigates damages, ensuring minimum downtime and business continuity.',
					'icon' => 'bolt',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why choose Verus for Cybersecurity?',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'How safe is your data?',
			'cta_text' => 'Trust Verus Cloud Secure for an uncompromised, secure digital experience. Trust Verus for your Cybersecurity Compliance Services.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(
				array(
					'question' => 'Why choose Verus for Cybersecurity?',
					'answer' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance. Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
				array(
					'question' => 'What cybersecurity services does Verus provide?',
					'answer' => 'Cybersecurity and Compliance, Cybersecurity Insurance Compliance, Multi-Factor Authentication, Phishing Solutions and Exercises, Penetration Testing, and a Free Security Assessment.',
				),
			),
			'eyebrow' => 'Cybersecurity',
			'title' => 'Cybersecurity',
			'sub' => 'Security for Today’s Digital Business',
			'answer' => 'Protect your organization from evolving cyber threats while enabling secure growth and innovation. Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
		),
		'managed-it' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Do you have the best partner?',
			'problem_lede' => 'Co-Managed IT Support, Microsoft 365 Management, Cloud Hosting & Migrations, Backup & Disaster Recovery, and Help Desk & Network Support.',
			'pains' => array(
				array(
					'title' => 'Minimizing downtime',
					'text' => 'Minimizing downtime is crucial for businesses, so we prioritize disaster recovery and business continuity solutions.',
					'icon' => 'shield',
				),
				array(
					'title' => 'Collaboration and productivity',
					'text' => 'In today’s digital workplace, collaboration and productivity are paramount.',
					'icon' => 'users',
				),
				array(
					'title' => 'Connect at any time, on any device',
					'text' => 'Verus provides managed IT and telecommunications managed service solutions that enable employees to connect at any time, on any device.',
					'icon' => 'phone',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Managed IT Services',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'Cloud Hosting',
					'text' => 'Verus offers state-of-the-art cloud hosting solutions that prioritize security and performance. With our advanced infrastructure and commitment to excellence, we are here to meet all your hosting needs. We offer private or commercial data hosting.',
					'url' => '/managed-it/cloud-hosting/',
					'icon' => 'cloud',
				),
				array(
					'title' => 'Disaster Recovery',
					'text' => 'Minimizing downtime is crucial for businesses, so we prioritize disaster recovery and business continuity solutions. Comprehensive approach toward Business Continuity ensures that your critical systems and data are protected and your organization keeps running.',
					'icon' => 'shield',
				),
				array(
					'title' => 'Microsoft 365/Azure Support',
					'text' => 'In today’s digital workplace, collaboration and productivity are paramount. Verus implements complete support for your Microsoft Applications and Azure services. Whether you require email support, document management, or Teams collaboration, we have you covered!',
					'icon' => 'users',
				),
				array(
					'title' => 'Network Management',
					'text' => 'With Verus IT Network Managed Services, organizations gain access to advanced features like high-speed data transfer, seamless connectivity, and reliable performance. We make transitions seamless and low impact on productivity.',
					'icon' => 'network',
				),
				array(
					'title' => 'Telecommunications',
					'text' => 'Verus provides managed IT and telecommunications managed service solutions that enable employees to connect at any time, on any device. Multiple devices and secure access. Telecom services include: cabling, phone and physical security systems.',
					'icon' => 'phone',
				),
				array(
					'title' => 'App Based Calling',
					'text' => 'Looking to ditch the desk phone? Verus offers the modern solution that replaces traditional desk phones providing collaboration, streamlining communication, and boosting productivity. We support all Application Based calling systems.',
					'url' => '/managed-it/application-based-calling/',
					'icon' => 'phone',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why Choose Verus?',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Schedule a Meeting Today',
			'cta_text' => 'Talk to one of our experts today about your managed IT solutions and start the journey toward a secure and supported network.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'Managed IT',
			'title' => 'Managed IT',
			'sub' => 'Reliable Technology. Exceptional Support.',
			'answer' => 'Verus provides proactive IT management and strategic guidance to keep your business running efficiently and securely.',
		),
		'consulting-services' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'The Big Exodus',
			'problem_lede' => 'Why are so many companies switching from VMware? Companies are increasingly migrating away from VMware due to a combination of evolving technological needs, cost considerations, and the pursuit of more flexible and scalable solutions.',
			'pains' => array(
				array(
					'title' => 'Evolving technological needs',
					'text' => 'As cloud computing continues to advance, organizations seek platforms that offer greater integration with modern cloud environments, such as AWS, Azure, and Google Cloud.',
					'icon' => 'cloud',
				),
				array(
					'title' => 'Licensing costs',
					'text' => 'The licensing costs associated with VMware can be prohibitive, especially for businesses looking to optimize their IT budgets.',
					'icon' => 'doc',
				),
				array(
					'title' => 'Hybrid and multi-cloud strategies',
					'text' => 'As the demand for seamless hybrid and multi-cloud strategies grows, companies find that other platforms better support their needs for agility, scalability, and interoperability.',
					'icon' => 'migrate',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Ready to Transform Your Business with AI and Modern Technology?',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'Database Management Solutions',
					'text' => 'Unlock the full potential of your data with Verus Cloud Secure’s industry leading Database Management solutions, tailored for Oracle, Linux, and SQL environments.',
					'icon' => 'database',
					'url' => '/consulting-services/database-management/',
				),
				array(
					'title' => 'Oracle Database Solutions',
					'text' => 'Comprehensive Oracle database services to maximize performance and security.',
					'icon' => 'database',
					'url' => '/consulting-services/database-management/oracle-solutions/',
				),
				array(
					'title' => 'VMware to Azure Virtual Desktop (AVD) Migrations',
					'text' => 'Your Partner in Seamless VMware to Azure Virtual Desktop (AVD) Migrations. As the digital landscape evolves, businesses are increasingly moving their workloads to the cloud to harness greater flexibility, scalability, and cost-efficiency.',
					'icon' => 'migrate',
				),
				array(
					'title' => 'VMware to Amazon Web Services (AWS) Migrations',
					'text' => 'Your Partner in Seamless VMware to Amazon Web Services (AWS) Migrations. Harness greater flexibility, scalability, and cost-efficiency.',
					'icon' => 'cloud',
				),
				array(
					'title' => 'Network Migrations',
					'text' => 'Seamless, secure, and efficient migrations with minimal downtime or disruption.',
					'icon' => 'network',
				),
				array(
					'title' => 'Complete Email Migrations',
					'text' => 'We handle email server setup, data transfer, and security configurations. Hassle free.',
					'icon' => 'mail',
				),
				array(
					'title' => 'Linux Server Solutions',
					'text' => 'Deploy a new Linux server, migrate/optimize an existing environment. Contact us today!',
					'icon' => 'cluster',
				),
				array(
					'title' => 'Digital & Web Services',
					'text' => 'Web design, UX, prototyping, and development services across an integrated technology strategy.',
					'icon' => 'star',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why choose Verus for Database Management Solutions?',
			'whys' => array(
				array(
					'title' => 'Experienced Team',
					'text' => 'Our team comprises certified professionals with extensive experience across the full catalogue of Oracle products.',
				),
				array(
					'title' => 'Proven Methodology',
					'text' => 'Our structured approach to Oracle projects minimizes risks and deploys solutions efficiently and effectively.',
				),
				array(
					'title' => 'Customer Centric',
					'text' => 'At Verus, our clients are our top priority. We tailor our services to meet your unique needs, ensuring a personalized and effective deployment.',
				),
				array(
					'title' => 'End-to-end Services',
					'text' => 'From initial assessment, to project planning and management, to post project support, we provide end-to-end services, making your Oracle implementation journey smooth and hassle-free.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Ready to Transform Your Business with AI and Modern Technology?',
			'cta_text' => 'Connect with our experts to discuss your goals and build a roadmap for success.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(
				array(
					'question' => 'Why are so many companies switching from VMware?',
					'answer' => 'Companies are increasingly migrating away from VMware due to a combination of evolving technological needs, cost considerations, and the pursuit of more flexible and scalable solutions. Alternative virtualization solutions, like KVM, Hyper-V, and OpenStack, provide robust capabilities at a lower cost, often with open-source flexibility that allows for greater customization and control.',
				),
			),
			'eyebrow' => 'IT Consulting Services',
			'title' => 'IT Consulting Services',
			'sub' => 'Technology Projects That Power AI and Business Growth',
			'answer' => 'The journey to AI-driven efficiency starts with a strong technology foundation. From infrastructure modernization and cloud migrations to data optimization, cybersecurity, and automation initiatives, Verus helps organizations implement the technologies that power innovation and growth. Connect with our experts to discuss your goals and build a roadmap for success.',
		),
		'industries' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Managed IT & Cybersecurity Industries Served',
			'problem_lede' => 'We help companies in critical industries streamline their Cybersecurity and Managed IT Operations.',
			'pains' => array(
				array(
					'title' => 'Healthcare & Assisted Living',
					'text' => 'In the rapidly evolving Senior Care and Assisted Living Community landscape, organizations are embracing technology to provide exceptional care. Healthcare organizations face unique and complex challenges with regulation and patient data.',
					'icon' => 'heart',
				),
				array(
					'title' => 'Energy Sector',
					'text' => 'Cyberattacks on energy infrastructure has increased substantially, magnifying organizations’ need to protect against cyber threats.',
					'icon' => 'bolt',
				),
				array(
					'title' => 'Financial Industries',
					'text' => 'Financial institutions connect to almost every aspect of our economy and personal data, which exposes them to an enormous amount of risk.',
					'icon' => 'building',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Industries We Serve',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'Healthcare Industries',
					'text' => 'In the rapidly evolving digital landscape, healthcare organizations face unique and complex challenges with regulation and patient data.',
					'icon' => 'heart',
					'url' => '/industries/healthcare-it-services/',
				),
				array(
					'title' => 'Assisted Living',
					'text' => 'In the rapidly evolving Senior Care and Assisted Living Community landscape, organizations are embracing technology to provide exceptional care.',
					'icon' => 'heart',
					'url' => '/industries/healthcare-it-services/',
				),
				array(
					'title' => 'Energy Sector',
					'text' => 'Cyberattacks on energy infrastructure has increased substantially, magnifying organizations’ need to protect against cyber threats.',
					'icon' => 'bolt',
					'url' => '/industries/energy-it-services/',
				),
				array(
					'title' => 'Financial Industries',
					'text' => 'Financial institutions connect to almost every aspect of our economy and personal data, which exposes them to an enormous amount of risk.',
					'icon' => 'building',
					'url' => '/industries/financial-it-services/',
				),
				array(
					'title' => 'Manufacturing Industries',
					'text' => 'Many organizations in the manufacturing and industrial sectors underestimate the need for cybersecurity protection.',
					'icon' => 'factory',
					'url' => '/industries/it-support-for-manufacturing/',
				),
				array(
					'title' => 'Nonprofit / 501(c)3 Ind.',
					'text' => 'In the ever-expanding digital landscape, criminals lurk around every corner. Cybersecurity is no longer optional; it is a requirement.',
					'icon' => 'users',
					'url' => '/industries/non-profits/',
				),
				array(
					'title' => 'Hospitality Industries',
					'text' => 'The digital threats to the hospitality industry are increasing. Cybercriminals target private and payment data.',
					'icon' => 'building',
					'url' => '/industries/hospitality/',
				),
				array(
					'title' => 'All Insurance Industries',
					'text' => 'Insurance companies manage vast amounts of personal and financial data, creating prime targets for cyberattacks.',
					'icon' => 'doc',
					'url' => '/industries/insurance/',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why Choose Verus?',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Schedule a Meeting Today',
			'cta_text' => 'We help companies in critical industries streamline their Cybersecurity and Managed IT Operations.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'Industries',
			'title' => 'Industries',
			'sub' => 'We help companies in critical industries streamline their Cybersecurity and Managed IT Operations',
			'answer' => 'Managed IT & Cybersecurity Industries Served',
		),
		'database-management' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => 'Oracle Solutions',
			'secondary_url' => '/consulting-services/database-management/oracle-solutions/',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Databases power many of the world’s largest enterprises.',
			'problem_lede' => 'With over 20 years of expertise, we provide secure, scalable, and high performance database management services that empower businesses to optimize operations, ensure compliance, and drive innovation.',
			'pains' => array(
				array(
					'title' => 'Oracle',
					'text' => 'Comprehensive Oracle Database Management — implementation, migration & upgrades, performance tuning, and disaster recovery planning.',
					'icon' => 'database',
				),
				array(
					'title' => 'Linux',
					'text' => 'Optimized Linux Database Solutions. Full support of MySQL, PostgreSQL, MariaDB on Red Hat, Ubuntu.',
					'icon' => 'cluster',
				),
				array(
					'title' => 'SQL Server',
					'text' => 'Robust SQL Server Management. Comprehensive support: design, migration, optimization. Tools: SQL Server Management Studio, Azure SQL Database.',
					'icon' => 'gauge',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Comprehensive Oracle, Linux, and SQL Database Management',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'Oracle Database Implementation',
					'text' => 'Installing and configuring Oracle database solutions tailored to your business needs.',
					'icon' => 'database',
				),
				array(
					'title' => 'Migration & Upgrades',
					'text' => 'Seamless database migration from older versions to the latest Oracle releases.',
					'icon' => 'migrate',
				),
				array(
					'title' => 'Performance Tuning',
					'text' => 'Optimizing your Oracle database for maximum performance.',
					'icon' => 'gauge',
				),
				array(
					'title' => 'Disaster Recovery Planning',
					'text' => 'Protecting your critical data with robust disaster recovery solutions.',
					'icon' => 'shield',
				),
				array(
					'title' => 'Optimized Linux Database Solutions',
					'text' => 'Full Support of: MySQL, PostgreSQL, MariaDB on Red Hat, Ubuntu. Proactive monitoring, automated patching, performance tuning. Advanced security: firewalls, intrusion detection, regular audits. Cost-efficient, scalable for hybrid or private cloud.',
					'icon' => 'cluster',
					'featured' => true,
					'tag' => 'Linux',
				),
				array(
					'title' => 'Robust SQL Server Management',
					'text' => 'Comprehensive support: design, migration, optimization. Tools: SQL Server Management Studio, Azure SQL Database. High availability with automated backups, disaster recovery. Secure: encryption, multi-factor authentication, PCI DSS compliance.',
					'icon' => 'doc',
				),
				array(
					'title' => 'Network Migrations',
					'text' => 'Seamless, secure, and efficient migrations with minimal downtime or disruption.',
					'icon' => 'network',
				),
				array(
					'title' => 'Complete Email Migrations',
					'text' => 'We handle email server setup, data transfer, and security configurations. Hassle free.',
					'icon' => 'mail',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why choose Verus for Database Management Solutions?',
			'whys' => array(
				array(
					'title' => 'Experienced Team',
					'text' => 'Our team comprises certified professionals with extensive experience across the full catalogue of Oracle products.',
				),
				array(
					'title' => 'Proven Methodology',
					'text' => 'Our structured approach to Oracle projects minimizes risks and deploys solutions efficiently and effectively.',
				),
				array(
					'title' => 'Customer Centric',
					'text' => 'At Verus, our clients are our top priority. We tailor our services to meet your unique needs, ensuring a personalized and effective deployment.',
				),
				array(
					'title' => 'End-to-end Services',
					'text' => 'From initial assessment, to project planning and management, to post project support, we provide end-to-end services, making your Oracle implementation journey smooth and hassle-free.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Schedule a Meeting Today',
			'cta_text' => 'Unlock the full potential of your data with Verus Cloud Secure’s industry leading Database Management solutions, tailored for Oracle, Linux, and SQL environments.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'IT Consulting Services',
			'title' => 'Database Management Solutions',
			'sub' => 'Expert Database Management Solutions for Oracle, Linux, and SQL',
			'answer' => 'Unlock the full potential of your data with Verus Cloud Secure’s industry leading Database Management solutions, tailored for Oracle, Linux, and SQL environments. Databases power many of the world’s largest enterprises. With over 20 years of expertise, we provide secure, scalable, and high performance database management services that empower businesses to optimize operations, ensure compliance, and drive innovation. Our solutions are designed to enhance efficiency, bolster security, and deliver seamless integration for enterprises across industries like healthcare, finance, and energy.',
		),
		'cloud-hosting' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Experience Uncompromised Security with Verus Cloud Secure',
			'problem_lede' => 'Safety and trust in the digital sphere are non-negotiable. At Verus, we resonate with your concerns and prioritize the impenetrable security of your data. Our cloud fortress employs state-of-the-art security measures like encrypted data storage, multi-factor authentication, frequent security audits, and proactive intrusion detection systems.',
			'pains' => array(
				array(
					'title' => 'Encrypted data storage',
					'text' => 'Our robust security protocols begin with fully encrypted storage, meaning all your data is scrambled and inaccessible without authorized keys.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Multi-factor authentication',
					'text' => 'Our cloud fortress employs state-of-the-art security measures like encrypted data storage, multi-factor authentication, frequent security audits, and proactive intrusion detection systems.',
					'icon' => 'shield',
				),
				array(
					'title' => 'Performance & Scalability: Tailored to Your Growth',
					'text' => 'Beyond ironclad AI security, Verus delivers unrivaled performance. Our private cloud infrastructure—powered by pioneering technologies and intelligent AI services—guarantees blazing speed, rock-solid reliability, and near-zero latency.',
					'icon' => 'gauge',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'A Better AI Cloud Hosting Company',
			'caps_lede' => 'We combine advanced infrastructure with intelligent AI capabilities and ironclad security—so you get blazing performance, complete data protection, and AI-powered growth tools that meet every hosting and business need.',
			'caps' => array(
				array(
					'title' => 'Secure Cloud Hosting',
					'text' => 'Elevate Your Digital Presence with Verus Cloud Secure. Discover a complete spectrum of solutions—from secure private cloud hosting to advanced AI services and proactive AI security—all tailored to your exact needs.',
					'icon' => 'cloud',
					'featured' => true,
					'tag' => 'Private cloud',
				),
				array(
					'title' => 'Disaster Recovery',
					'text' => 'Verus understands that minimizing downtime is crucial for businesses, so we prioritize disaster recovery and business continuity solutions. Our comprehensive approach ensures that your critical systems and data are protected.',
					'icon' => 'shield',
				),
				array(
					'title' => 'Microsoft 365 Support',
					'text' => 'In today’s digital workplace, collaboration and productivity are paramount. Whether you require email support, document management, or Teams collaboration, we have you covered!',
					'icon' => 'users',
				),
				array(
					'title' => 'Network Management',
					'text' => 'With Verus IT Network Managed Services, organizations gain access to advanced features like high-speed data transfer, seamless connectivity, and reliable performance.',
					'icon' => 'network',
				),
				array(
					'title' => 'Telecommunications',
					'text' => 'Verus provides managed IT and telecommunications managed service solutions that enable employees to connect at any time, on any device.',
					'icon' => 'phone',
				),
				array(
					'title' => 'App Based Calling',
					'text' => 'Utilize calling applications, the modern solution that replaces traditional desk phones providing collaboration, streamlining communication, and boosting productivity.',
					'icon' => 'phone',
					'url' => '/managed-it/application-based-calling/',
				),
				array(
					'title' => 'Remote Workplace',
					'text' => 'Seamless collaboration and connectivity are crucial for remote and hybrid work systems. Organizations need a trusted partner that provides a secure, unified platform that brings teams together.',
					'icon' => 'headset',
				),
				array(
					'title' => 'Round-the-Clock Expertise & AI-Powered Support',
					'text' => 'We’re Here, Always. Your trust deserves unmatched service. Our team of technical experts and customer-focused professionals, reinforced by 24/7 AI monitoring and intelligent cybersecurity, ensures every query is answered and every threat is stopped—instantly.',
					'icon' => 'headset',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'A Better AI Cloud Hosting Company',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Elevate Your Digital Presence with Verus Cloud Secure',
			'cta_text' => 'With Verus, you’re not just choosing a provider; you’re forging a partnership for future-proof, AI-secured cloud solutions that protect and propel your business.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'Managed IT',
			'title' => 'Secure Cloud Hosting Services',
			'sub' => 'Secure Your Data with Verus Cloud',
			'answer' => 'At Verus, the security of your sensitive data is our top priority. We recognize that vulnerabilities exist around every corner in today’s digital landscape. Our robust security protocols begin with fully encrypted storage, meaning all your data is scrambled and inaccessible without authorized keys.',
		),
		'application-based-calling' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Looking to ditch the desk phone?',
			'problem_lede' => 'One such game-changer are calling applications, which revolutionizes business communication by replacing traditional desk phones. Verus integrates this application within your current meeting system, offering many benefits that empower organizations to collaborate seamlessly and communicate efficiently.',
			'pains' => array(
				array(
					'title' => 'Unifying Communication Channels',
					'text' => 'Consolidate multiple communication channels like voice calls, video conferencing, chat, and file sharing into one integrated platform, enabling seamless collaboration.',
					'icon' => 'phone',
				),
				array(
					'title' => 'Enhanced Mobility and Flexibility',
					'text' => 'Users can make and receive calls from anywhere using their laptop or mobile device, promoting flexible work arrangements and enabling employees to stay connected.',
					'icon' => 'users',
				),
				array(
					'title' => 'Cost Savings',
					'text' => 'Eliminate the need for costly on-premise PBX/VOIP hardware, reduce long-distance calling rates, and consolidate multiple vendor contracts into one cost-effective platform, delivering significant cost savings.',
					'icon' => 'chart',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Key Advantages',
			'caps_lede' => 'Witness a transformation in how your team connects and communicates effectively, regardless of their location or device.',
			'caps' => array(
				array(
					'title' => 'Teams Integration with Productivity Tools',
					'text' => 'For Teams, seamless integration with Microsoft 365 productivity tools like Word, Excel, SharePoint, OneNote, and Outlook enables context switching between calling and core work, boosting productivity and efficiency.',
					'icon' => 'users',
				),
				array(
					'title' => 'Advanced Calling Features',
					'text' => 'Enterprise-grade PBX capabilities like call routing, auto attendants, call monitoring, call recording, and advanced analytics enable robust call management.',
					'icon' => 'phone',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Our calling plans are built for you. We seamlessly integrate calling capabilities like intelligent call routing, auto attendants, and calling analytics.',
					'icon' => 'network',
					'featured' => true,
					'tag' => 'Built for you',
				),
				array(
					'title' => 'Planning and Adoption Services',
					'text' => 'Our experts handle planning, change management, licensing requirements, device rollout, and user adoption training to drive engagement.',
					'icon' => 'doc',
				),
				array(
					'title' => '24/7 Support',
					'text' => 'After deployment, our support teams continue to monitor and manage your Phone System environment, providing ongoing assistance to end users.',
					'icon' => 'headset',
				),
				array(
					'title' => 'Enhanced Security',
					'text' => 'Verus Calling Solutions integrates with security systems to encrypt calls, block malicious attacks, and apply stringent access controls. Security and compliance are built in.',
					'icon' => 'lock',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Transform Your Environment with Verus',
			'whys' => array(
				array(
					'title' => 'Experts and trusted advisors',
					'text' => 'At Verus, we are experts and trusted advisors who help organizations realize your full potential. Our comprehensive calling solutions enhance productivity, simplify collaboration, and unify communication.',
				),
				array(
					'title' => '24/7 managed services',
					'text' => 'With 24/7 managed services, we provide ongoing monitoring, management, and technical support. Partner with the calling specialists at Verus to transform how your people connect, create, and collaborate.',
				),
				array(
					'title' => 'Maximize your calling investment',
					'text' => 'When you choose Verus as your calling deployment partner and managed service provider, you get the expertise and support to maximize your calling investment.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Transform Your Environment with Verus',
			'cta_text' => 'Partner with the calling specialists at Verus to transform how your people connect, create, and collaborate.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'Managed IT',
			'title' => 'Application Based Calling',
			'sub' => 'Teams, Zoom, Webex, etc., all Application Based Calling',
			'answer' => 'Calling applications are revolutionizing business communication by replacing traditional desk phones. By unifying communication channels, enhancing mobility, reducing costs, integrating with productivity tools, and providing advanced calling features, these applications empower organizations to collaborate seamlessly, boost productivity, and maintain excellent customer service. Businesses are constantly seeking innovative solutions to streamline their operations and enhance productivity. Verus is on the cutting edge of technology.',
		),
		'cybersecurity-and-compliance' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'How do you ensure your company is secure?',
			'problem_lede' => 'Cyber threats are constantly changing and advancing, making it essential to remain vigilant and aware of potential risks to online security. A dependable cybersecurity compliance solution like Verus Cloud Secure is indispensable.',
			'pains' => array(
				array(
					'title' => 'Evolving cyber threats',
					'text' => 'How does Verus help organizations stay protected against evolving cyber threats? Cyber threats are constantly changing and advancing, making it essential to remain vigilant and aware of potential risks to online security.',
					'icon' => 'shield',
				),
				array(
					'title' => 'Employee education',
					'text' => 'Work with Verus to educate your employees on Cybersecurity best practices powered by our AI Services, including Vulnerability Scanning to protect against cyber threats.',
					'icon' => 'users',
				),
				array(
					'title' => 'Learning Management Solutions',
					'text' => 'Perfect for employees and businesses, these AI-enhanced Learning Management Solutions empower you to prevent data breaches and strengthen your overall security posture.',
					'icon' => 'doc',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Why choose Verus for Cybersecurity?',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'How does Verus protect your data? Verus uses cutting-edge encryption, multi-factor authentication, and intelligent AI Services to safeguard sensitive data from creation to disposal—ensuring trust, compliance, and complete protection.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Compliance',
					'text' => 'How does Verus simplify Regulatory Compliance? Verus simplifies compliance through audit trails, real-time monitoring, automated reporting, and intelligent AI Services—minimizing risks of fines and reputational harm.',
					'icon' => 'doc',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'How does Verus deliver Seamless Integration? Verus integrates seamlessly with existing financial systems and provides secure, anytime access to data—enhanced by our AI Services—to improve efficiency and support patient care.',
					'icon' => 'network',
				),
				array(
					'title' => 'Support',
					'text' => 'What level of Support does Verus provide? Verus provides round-the-clock expert support, reinforced by intelligent AI Services, to resolve security issues and maintain optimal performance—minimizing disruptions in critical services.',
					'icon' => 'headset',
					'featured' => true,
					'tag' => '24/7',
				),
				array(
					'title' => 'Top-Tier Cybersecurity Solutions',
					'text' => 'Verus Cloud Secure is tailored to protect your valuable digital assets with real-time threat detection and intelligent AI Services—giving you peace of mind in today’s challenging cybersecurity landscape.',
					'icon' => 'shield',
				),
				array(
					'title' => 'Robust Encryption and Multi-Factor Authentication (MFA)',
					'text' => 'Verus creates a formidable barrier against unauthorized data access through advanced encryption, MFA, and AI-powered security controls—significantly reducing the risk of cyber-attacks and ensuring your organization’s digital safety.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Advanced Automated Incident Response',
					'text' => 'Verus Cloud Secure’s AI-driven automated incident response swiftly isolates threats and mitigates damage, ensuring minimum downtime and uninterrupted business continuity.',
					'icon' => 'bolt',
				),
				array(
					'title' => 'A Comprehensive Solution',
					'text' => 'Verus Cloud Secure is a one-stop solution for managed IT, remote workforce protection, cybersecurity, and AI Services.',
					'icon' => 'star',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why choose Verus for Cybersecurity?',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'How safe is your data?',
			'cta_text' => 'Trust Verus Cloud Secure for an uncompromised, secure, and AI-enhanced digital experience. Trust Verus for your Cybersecurity Compliance Services.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(
				array(
					'question' => 'How does Verus deliver Cybersecurity & Compliance?',
					'answer' => 'Verus provides robust Cybersecurity & Compliance solutions fully integrated with our AI Services—protecting your data, ensuring regulatory adherence, and enabling secure, intelligent operations.',
				),
				array(
					'question' => 'How does Verus protect your data?',
					'answer' => 'Verus uses cutting-edge encryption, multi-factor authentication, and intelligent AI Services to safeguard sensitive data from creation to disposal—ensuring trust, compliance, and complete protection.',
				),
				array(
					'question' => 'How does Verus simplify Regulatory Compliance?',
					'answer' => 'Verus simplifies compliance through audit trails, real-time monitoring, automated reporting, and intelligent AI Services—minimizing risks of fines and reputational harm.',
				),
				array(
					'question' => 'What level of Support does Verus provide?',
					'answer' => 'Verus provides round-the-clock expert support, reinforced by intelligent AI Services, to resolve security issues and maintain optimal performance—minimizing disruptions in critical services.',
				),
			),
			'eyebrow' => 'Cybersecurity',
			'title' => 'Cybersecurity & Compliance',
			'sub' => 'How does Verus deliver Cybersecurity & Compliance?',
			'answer' => 'Verus provides robust Cybersecurity & Compliance solutions fully integrated with our AI Services—protecting your data, ensuring regulatory adherence, and enabling secure, intelligent operations.',
		),
		'cybersecurity-insurance-compliance' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Data Breach Incidents Can Cause Severe Financial Damage',
			'problem_lede' => 'Without proper safeguards, breaches can drastically increase insurance costs. Verus minimizes this risk by offering robust encryption algorithms and multi-factor authentication (MFA), effectively reducing the possibility of unauthorized access. This enhanced data protection aligns with insurance underwriting criteria.',
			'pains' => array(
				array(
					'title' => 'Insurance companies assess risk',
					'text' => 'Cybersecurity Insurance Companies Assess Risk Based on the business’s cybersecurity protocols. A comprehensive cybersecurity strategy that includes Verus can help meet these stringent compliance requirements. By providing detailed security logs and reports, Verus aids in demonstrating the effectiveness of your cybersecurity measures to insurers.',
					'icon' => 'doc',
				),
				array(
					'title' => 'Rapid Incident Response is Crucial',
					'text' => 'Verus has automated response capabilities to identify and isolate threats, preventing further damage swiftly. These quick responses help organizations adhere to the strict reporting timelines set by insurance providers, thereby avoiding potential penalties.',
					'icon' => 'bolt',
				),
				array(
					'title' => 'Continuous Monitoring and Assessment',
					'text' => 'You want to maintain a strong cybersecurity posture. By ensuring you remain aware of your organization’s security health, you can promptly address any identified weaknesses or vulnerabilities, thus meeting insurance providers’ ongoing compliance expectations.',
					'icon' => 'gauge',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Unveiling the Power of Managed IT Cybersecurity and Cybersecurity Insurance',
			'caps_lede' => 'Verus Cloud Secure offers many benefits that directly align with insurance compliance needs. Its advanced AI-driven security features continually scan for vulnerabilities, providing real-time alerts to potential threats.',
			'caps' => array(
				array(
					'title' => 'Cybersecurity and Compliance',
					'text' => 'Ensure your company is secure and safe. Verus uses cutting edge technology to ensure you are not only secure, but also in compliance with your insurance requirements. Contact our experts to learn more about assessing your network for vulnerabilities.',
					'url' => '/cybersecurity/cybersecurity-and-compliance/',
					'icon' => 'lock',
				),
				array(
					'title' => 'Cybersecurity Insurance',
					'text' => 'In today’s interconnected world, businesses face an ever-increasing threat of cyberattacks and data breaches. As technology evolves, so do the tactics employed by malicious actors seeking to exploit vulnerabilities in your organization’s digital infrastructure.',
					'url' => '/cybersecurity/cybersecurity-insurance-compliance/',
					'icon' => 'doc',
				),
				array(
					'title' => 'Multi-Factor Authentication',
					'text' => 'In today’s digital landscape, the benefits of Verus cybersecurity and multi-factor authentication cannot be overstated. Partner with our team of cybersecurity specialists to significantly strengthen your defenses.',
					'url' => '/cybersecurity/multi-factor-authentication/',
					'icon' => 'lock',
				),
				array(
					'title' => 'Phishing Exercises',
					'text' => 'Ransomware attacks can be prevented with the proper security and training. Verus offers comprehensive phishing exercises for clients, providing a range of benefits that enhance security and mitigating risks.',
					'url' => '/cybersecurity/phishing-solutions-and-exercises/',
					'icon' => 'users',
				),
				array(
					'title' => 'Penetration Testing Services',
					'text' => 'Penetration testing, also known as ethical hacking testing, is one of the most effective methods for identifying and mitigating possible risks. This preventive approach helps to avoid a potential breach, protecting your company’s reputation, data, and bottom line.',
					'url' => '/cybersecurity/penetration-testing/',
					'icon' => 'shield',
				),
				array(
					'title' => 'Free Security Assessment',
					'text' => 'When was the last time you had a cybersecurity risk assessment? We offer a free third-party assessment of your network and digital environments. Talk to one of our experts today about your managed IT solutions and start the journey toward a secure and supported network.',
					'url' => '/cybersecurity/free-cybersecurity-assessment/',
					'icon' => 'check',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Safeguarding Your Business in the Digital Age',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Have you been lucky or are you truly safe from cyber-attacks?',
			'cta_text' => 'Verus Cloud Secure provides comprehensive cybersecurity services & solutions for Insurance Companies that ensures cybersecurity services for insurance compliance while safeguarding your organization’s data, reputation, and bottom line.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'Cybersecurity',
			'title' => 'Cybersecurity Insurance Compliance',
			'sub' => 'The Importance of Cybersecurity Insurance Compliance Services',
			'answer' => 'Cybersecurity insurance is essential for businesses of all sizes. However, obtaining and maintaining this insurance often requires meeting specific compliance standards. Verus is your partner in navigating the complex world of cybersecurity insurance compliance, helping you understand the requirements and implement necessary safeguards.',
		),
		'multi-factor-authentication' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Multifactor Authentication is essential to your data’s security.',
			'problem_lede' => 'In today’s digital landscape, the benefits of Verus cybersecurity and multi-factor authentication cannot be overstated. Partner with our team of cybersecurity specialists to significantly strengthen your defenses.',
			'pains' => array(
				array(
					'title' => 'Cyber threats like data breaches',
					'text' => 'Cyber threats like data breaches and financial losses jeopardize businesses daily.',
					'icon' => 'shield',
				),
				array(
					'title' => 'Password risks',
					'text' => 'Our solutions fortify digital infrastructure, enhance identity verification, mitigate password risks, and ensure compliance.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Unauthorized logins',
					'text' => 'Verus’s MFA adds a strong layer of access security, protecting your organization from unauthorized logins.',
					'icon' => 'users',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Multi-Factor Authentication (MFA)',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'Advanced Threat Detection with Verus',
					'text' => 'Verus’s managed IT cybersecurity uses cutting-edge tools for real-time threat detection and prevention. Our rapid-response system identifies, isolates, and neutralizes cyber threats, minimizing attack risks.',
					'icon' => 'shield',
				),
				array(
					'title' => 'Robust Data Protection',
					'text' => 'Partner with Verus to secure sensitive data. Our encryption, access controls, and secure storage prevent breaches, ensuring compliance and client trust.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Proactive Security Updates',
					'text' => 'Verus’s patch management keeps systems current with the latest security updates, closing vulnerabilities and blocking cyberattack entry points.',
					'icon' => 'check',
				),
				array(
					'title' => '24/7 Monitoring & Response',
					'text' => 'Verus provides round-the-clock network monitoring and expert incident response, detecting and mitigating threats to minimize downtime and damage.',
					'icon' => 'headset',
					'featured' => true,
					'tag' => '24/7',
				),
				array(
					'title' => 'Multi-Factor Authentication (MFA)',
					'text' => 'Verus’s MFA adds a strong layer of access security, protecting your organization from unauthorized logins.',
					'icon' => 'lock',
				),
				array(
					'title' => 'User-Friendly MFA',
					'text' => 'Our MFA solutions balance security and convenience with seamless options like push notifications and biometrics for efficient authentication.',
					'icon' => 'users',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Partner with Verus, your trusted MFA provider',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Act now for stronger defenses.',
			'cta_text' => 'Partner with Verus, your trusted MFA provider, to safeguard data, boost security, and maintain customer trust.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(
				array(
					'question' => 'What is Multi-Factor Authentication (MFA)?',
					'answer' => 'Verus’s MFA adds a strong layer of access security, protecting your organization from unauthorized logins. Our MFA solutions balance security and convenience with seamless options like push notifications and biometrics for efficient authentication.',
				),
				array(
					'question' => 'Why is MFA necessary?',
					'answer' => 'Cyber threats like data breaches and financial losses jeopardize businesses daily. Our solutions fortify digital infrastructure, enhance identity verification, mitigate password risks, and ensure compliance.',
				),
				array(
					'question' => 'How can Verus help with MFA?',
					'answer' => 'Verus’s managed IT cybersecurity and multi-factor authentication (MFA) deliver robust protection. Partner with Verus, your trusted MFA provider, to safeguard data, boost security, and maintain customer trust.',
				),
				array(
					'question' => 'Can I use MFA on all my devices?',
					'answer' => 'Our MFA solutions balance security and convenience with seamless options like push notifications and biometrics for efficient authentication.',
				),
			),
			'eyebrow' => 'Cybersecurity',
			'title' => 'Multi-Factor Authentication',
			'sub' => 'Secures Your Business with Multi-factor Authentication',
			'answer' => 'Cyber threats like data breaches and financial losses jeopardize businesses daily. Verus’s managed IT cybersecurity and multi-factor authentication (MFA) deliver robust protection. Our solutions fortify digital infrastructure, enhance identity verification, mitigate password risks, and ensure compliance. Partner with Verus, your trusted MFA provider, to safeguard data, boost security, and maintain customer trust. Act now for stronger defenses.',
		),
		'penetration-testing' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Why is Network Security Dependent on Penetration Testing Services?',
			'problem_lede' => 'A realistic example of how an intruder might break into your network is provided by penetration testing. Insights gained from this practical method are significantly more valuable than those from automated technologies by themselves.',
			'pains' => array(
				array(
					'title' => 'Setting Threat Priorities',
					'text' => 'Not every vulnerability is made equal. The most essential vulnerabilities can be found with the aid of penetration testing, enabling effective and focused treatment.',
					'icon' => 'gauge',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'To stay in compliance with rules, many companies need to conduct frequent penetration tests. Frequent testing shows stakeholders that you take security seriously while also ensuring compliance.',
					'icon' => 'doc',
				),
				array(
					'title' => 'Keeping Your Brand Safe',
					'text' => 'A single data breach can seriously harm a company’s brand. Such events can be avoided with the use of penetration testing, preserving client confidence. A breach frequently costs more than a routine penetration test.',
					'icon' => 'shield',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'The Process of Penetration Testing',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'Planning & Reconnaissance',
					'text' => 'Define the scope, gather information about the target, and identify potential entry points.',
					'icon' => 'doc',
				),
				array(
					'title' => 'Scanning',
					'text' => 'Determine how the target application or system will respond to different intrusion attempts.',
					'icon' => 'gauge',
				),
				array(
					'title' => 'Gaining Access',
					'text' => 'Simulate cyberattacks to exploit vulnerabilities.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Maintaining Access',
					'text' => 'Determine if the vulnerability can lead to prolonged unauthorized access.',
					'icon' => 'cluster',
				),
				array(
					'title' => 'Analysis',
					'text' => 'Report the findings, detailing vulnerabilities, data accessed, and recommendations for securing the system.',
					'icon' => 'chart',
					'featured' => true,
					'tag' => 'Report',
				),
				array(
					'title' => 'Penetration Testing Services',
					'text' => 'Penetration testing, also known as ethical hacking testing, is one of the most effective methods for identifying and mitigating possible risks. This preventive approach helps to avoid a potential breach, protecting your company’s reputation, data, and bottom line.',
					'icon' => 'shield',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why is Network Security Dependent on Penetration Testing Services?',
			'whys' => array(
				array(
					'title' => 'Real-world Evaluation',
					'text' => 'A realistic example of how an intruder might break into your network is provided by penetration testing. Insights gained from this practical method are significantly more valuable than those from automated technologies by themselves.',
				),
				array(
					'title' => 'Cost-Effective',
					'text' => 'A breach frequently costs more than a routine penetration test. Spending money on preventative testing can significantly reduce any breach-related costs.',
				),
				array(
					'title' => 'Keeping Your Brand Safe',
					'text' => 'A single data breach can seriously harm a company’s brand. Such events can be avoided with the use of penetration testing, preserving client confidence.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Schedule a Meeting Today',
			'cta_text' => 'This preventive approach helps to avoid a potential breach, protecting your company’s reputation, data, and bottom line.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(
				array(
					'question' => 'Penetration Testing: What is it?',
					'answer' => 'Penetration testing, often known as “pen testing” or “ethical hacking,” is the process of mimicking a cyberattack on a system, network, or application in order to find security holes that could be used by hostile actors.',
				),
				array(
					'question' => 'Why is Network Security Dependent on Penetration Testing Services?',
					'answer' => 'A realistic example of how an intruder might break into your network is provided by penetration testing. Insights gained from this practical method are significantly more valuable than those from automated technologies by themselves.',
				),
			),
			'eyebrow' => 'Cybersecurity',
			'title' => 'Penetration Testing',
			'sub' => 'Expert Penetration Testing Services',
			'answer' => 'Penetration testing, often known as “pen testing” or “ethical hacking,” is the process of mimicking a cyberattack on a system, network, or application in order to find security holes that could be used by hostile actors. Penetration testers search for vulnerabilities using the same methods as cybercriminals, providing information on how to fortify your defenses.',
		),
		'phishing-solutions-and-exercises' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Identifying Vulnerabilities',
			'problem_lede' => 'Phishing attacks continue to be one of the most prevalent and successful methods used by cybercriminals to gain unauthorized access to an organization’s systems and data. Verus’ phishing exercise allows clients to identify vulnerabilities within their workforce and infrastructure. By simulating real-world phishing attacks, Verus helps clients understand where they are exposed.',
			'pains' => array(
				array(
					'title' => 'Identifying Vulnerabilities',
					'text' => 'Verus’ phishing exercise allows clients to identify vulnerabilities within their workforce and infrastructure. By simulating real-world phishing attacks, Verus helps clients understand where they are exposed.',
					'icon' => 'shield',
				),
				array(
					'title' => 'Raising Security Awareness',
					'text' => 'Employee awareness and education play a vital role in mitigating the risks associated with phishing attacks. Verus’ phishing exercises serve as valuable training tools to educate employees about the tactics employed by cybercriminals.',
					'icon' => 'users',
				),
				array(
					'title' => 'Testing Incident Response Capabilities',
					'text' => 'In the event of a successful phishing attack, the effectiveness of an organization’s incident response plan becomes crucial. Verus’ phishing exercises evaluate an organization’s incident response capabilities by closely monitoring how employees react to simulated attacks.',
					'icon' => 'bolt',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Customized Phishing Exercise Solutions',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'Raising Security Awareness',
					'text' => 'Through simulated phishing campaigns, Verus can assess, educate and enhance security awareness by promoting a security-first culture.',
					'icon' => 'users',
				),
				array(
					'title' => 'Testing Incident Response Capabilities',
					'text' => 'This allows clients to identify any gaps in their response procedures before a real attack happens.',
					'icon' => 'bolt',
				),
				array(
					'title' => 'Compliance and Regulatory Requirements',
					'text' => 'Phishing exercises conducted by Verus assist organizations in meeting compliance and regulatory requirements. Many industry standards and regulations, such as the Payment Card Industry Data Security Standard (PCI DSS) and the General Data Protection Regulation (GDPR), emphasize the importance of ongoing employee training and awareness.',
					'icon' => 'doc',
				),
				array(
					'title' => 'Tailored Recommendations and Mitigation Strategies',
					'text' => 'Following a phishing exercise, Verus provides clients with detailed reports, highlighting vulnerabilities, employee performance, and areas for improvement. Verus collaborates with clients to develop customized security awareness training programs, implement technical controls, and enhance overall cybersecurity defenses.',
					'icon' => 'star',
					'featured' => true,
					'tag' => 'Customized',
				),
				array(
					'title' => 'Return on Investment (ROI)',
					'text' => 'Investing in a phishing exercise from Verus offers a significant return on investment. By identifying and addressing vulnerabilities proactively, organizations can potentially prevent costly data breaches, financial losses, and reputational damage caused by successful phishing attacks.',
					'icon' => 'chart',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Let’s explore the advantages of Verus performing a phishing exercise for clients.',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Schedule a Meeting Today',
			'cta_text' => 'By identifying vulnerabilities, raising security awareness, testing incident response capabilities, providing tailored recommendations, meeting compliance requirements, and delivering a positive return on investment, Verus empowers organizations to strengthen their security posture and protect their sensitive data from the ever-present threat of phishing attacks.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'Cybersecurity',
			'title' => 'Phishing Solutions and Exercises',
			'sub' => 'Ransomware attacks can be prevented with the proper security and training.',
			'answer' => 'Verus offers comprehensive phishing exercises for clients, providing a range of benefits that enhance security and mitigating risks. Let’s explore the advantages of Verus performing a phishing exercise for clients.',
		),
		'free-cybersecurity-assessment' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Have you been lucky or are you truly safe from cyber-attacks?',
			'problem_lede' => 'Verus offers fast and free assessments. Hackers attack EVERYONE! Be prepared, and get peace of mind that your infrastructure is protected.',
			'pains' => array(
				array(
					'title' => 'Have you been lucky?',
					'text' => 'Have you been lucky or are you truly safe from cyber-attacks? Verus offers fast and free assessments.',
					'icon' => 'shield',
				),
				array(
					'title' => 'Hackers attack EVERYONE!',
					'text' => 'Be prepared, and get peace of mind that your infrastructure is protected.',
					'icon' => 'lock',
				),
				array(
					'title' => 'When was the last time?',
					'text' => 'When was the last time you had a cybersecurity risk assessment? We offer a free third-party assessment of your network and digital environments.',
					'icon' => 'gauge',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Free Security Assessment',
			'caps_lede' => 'We offer a free assessment of your network and digital environments.',
			'caps' => array(
				array(
					'title' => 'Cybersecurity and Compliance',
					'text' => 'Ensure your company is secure and safe. Verus uses cutting edge technology to ensure you are not only secure, but also in compliance with your insurance requirements. Contact our experts to learn more about assessing your network for vulnerabilities.',
					'url' => '/cybersecurity/cybersecurity-and-compliance/',
					'icon' => 'lock',
				),
				array(
					'title' => 'Cybersecurity Insurance',
					'text' => 'In today’s interconnected world, businesses face an ever-increasing threat of cyberattacks and data breaches. As technology evolves, so do the tactics employed by malicious actors seeking to exploit vulnerabilities in your organization’s digital infrastructure.',
					'url' => '/cybersecurity/cybersecurity-insurance-compliance/',
					'icon' => 'doc',
				),
				array(
					'title' => 'Multi-Factor Authentication',
					'text' => 'In today’s digital landscape, the benefits of Verus cybersecurity and multi-factor authentication cannot be overstated. Partner with our team of cybersecurity specialists to significantly strengthen your defenses.',
					'url' => '/cybersecurity/multi-factor-authentication/',
					'icon' => 'lock',
				),
				array(
					'title' => 'Phishing Exercises',
					'text' => 'Ransomware attacks can be prevented with the proper security and training. Verus offers comprehensive phishing exercises for clients, providing a range of benefits that enhance security and mitigating risks.',
					'url' => '/cybersecurity/phishing-solutions-and-exercises/',
					'icon' => 'users',
				),
				array(
					'title' => 'Penetration Testing Services',
					'text' => 'Penetration testing, also known as ethical hacking testing, is one of the most effective methods for identifying and mitigating possible risks. This preventive approach helps to avoid a potential breach, protecting your company’s reputation, data, and bottom line.',
					'url' => '/cybersecurity/penetration-testing/',
					'icon' => 'shield',
				),
				array(
					'title' => 'Free Security Assessment',
					'text' => 'When was the last time you had a cybersecurity risk assessment? We offer a free third-party assessment of your network and digital environments. Talk to one of our experts today about your managed IT solutions and start the journey toward a secure and supported network.',
					'url' => '/cybersecurity/free-cybersecurity-assessment/',
					'icon' => 'check',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why choose Verus for Cybersecurity?',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Talk to one of our experts today',
			'cta_text' => 'Talk to one of our experts today about your managed IT solutions and start the journey toward a secure and supported network.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'Cybersecurity',
			'title' => 'Technology Risk Assessment',
			'sub' => 'Complimentary Technology Assessment',
			'answer' => 'When was the last time you had a cybersecurity risk assessment? We offer a free third-party assessment of your network and digital environments. Talk to one of our experts today about your managed IT solutions and start the journey toward a secure and supported network.',
		),
		'virtual-ai-employees' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'The 24/7 Advantage',
			'problem_lede' => 'Stop paying for human downtime. Start scaling with AI that never sleeps. Businesses using Verus Virtual AI Employees report 60-80% reduction in repetitive task costs and 3-5x faster processing times.',
			'pains' => array(
				array(
					'title' => 'Nights, weekends, or holiday coverage costs',
					'text' => 'No more nights, weekends, or holiday coverage costs. No more burnout or turnover on mundane tasks.',
					'icon' => 'users',
				),
				array(
					'title' => 'Demand spikes',
					'text' => 'Just reliable, scalable AI labor that scales instantly when demand spikes.',
					'icon' => 'bolt',
				),
				array(
					'title' => 'Human downtime',
					'text' => 'Stop paying for human downtime. Start scaling with AI that never sleeps.',
					'icon' => 'gauge',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'What Your Virtual AI Employees Can Do for You',
			'caps_lede' => 'Purpose Built Agents. Custom AI Employees Built in Days — Tell us your process once; we train a secure, private agent that follows your exact rules and compliance standards.',
			'caps' => array(
				array(
					'title' => 'Data Entry & Processing Agents',
					'text' => 'Extract, clean, and input data from emails, PDFs, forms, and portals with 99%+ accuracy.',
					'icon' => 'doc',
				),
				array(
					'title' => 'Lead Qualification & SDR Agents',
					'text' => 'Score inbound leads, enrich data, book meetings, and nurture prospects 24/7.',
					'icon' => 'users',
				),
				array(
					'title' => 'Document Review & Compliance Agents',
					'text' => 'Scan contracts, invoices, applications, and reports for errors, risks, or missing information.',
					'icon' => 'check',
				),
				array(
					'title' => 'Customer Onboarding Agents',
					'text' => 'Handle paperwork, verification, and account setup without human intervention.',
					'icon' => 'star',
				),
				array(
					'title' => 'Accounting & Reconciliation Agents',
					'text' => 'Match transactions, flag discrepancies, and prepare reports.',
					'icon' => 'chart',
				),
				array(
					'title' => 'Research & Reporting Agents',
					'text' => 'Pull competitive intel, market data, or internal metrics on demand.',
					'icon' => 'gauge',
				),
				array(
					'title' => 'Work Non-Stop',
					'text' => 'AI employees operate continuously across time zones with zero fatigue. Cut Labor Costs Dramatically — Replace or augment full-time roles at a fraction of the cost while maintaining (or improving) output quality. Scale Instantly — Need 10 more data processors during peak season? Deploy them in minutes: no recruiting, no training, no benefits.',
					'icon' => 'bolt',
					'featured' => true,
					'tag' => 'Scale With AI',
				),
				array(
					'title' => 'Enterprise-Grade Security',
					'text' => 'Every Virtual AI Employee runs inside your private Verus environment. No data ever leaves your control. Full governance, compliance, and activity logging included. Eliminate Human Error — Rule-based consistency with built-in validation and audit trails.',
					'icon' => 'lock',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'How Virtual AI Employees Work',
			'whys' => array(
				array(
					'title' => 'Discovery & Process Mapping',
					'text' => 'We map your current workflow and identify every repetitive task suitable for AI employees.',
				),
				array(
					'title' => 'Secure Custom Training',
					'text' => 'Your private AI is trained exclusively on your company data, policies, and tools — never shared with public models.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'AI employees connect directly to your existing systems via secure APIs or RPA (no rip-and-replace).',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Scale With AI',
			'cta_text' => 'Stop paying for human downtime. Start scaling with AI that never sleeps.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'AI Services',
			'title' => 'Virtual AI Employees',
			'sub' => 'Replace a role. Digital workers that run 24/7.',
			'answer' => 'This is not a copilot. It is a seat. Virtual AI Employees log into your CRM, email, and documents, follow your process, and do the job 24/7 — so you do not hire another person for the repetitive work.',
		),
		'smart-task-automation' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => 'Take the AI Maturity Assessment',
			'secondary_url' => '/ai-maturity-assessment/',
			'trust' => array(
				array(
					'title' => 'Zero manual clicks & searching',
				),
				array(
					'title' => 'Seamless app integration',
				),
				array(
					'title' => '24/7 automation & positive ROI',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Tired of Copying, Pasting, and Chasing Tasks?',
			'problem_lede' => 'Most businesses lose hours every day on repetitive manual work — copying data between apps, sending follow-up emails, updating spreadsheets, chasing approvals, and re-entering information. These hidden tasks drain productivity, increase errors, and slow down growth.',
			'pains' => array(
				array(
					'title' => 'Manual Data Entry',
					'text' => 'Hours wasted copying between CRM, Accounting, and Email',
					'icon' => 'doc',
				),
				array(
					'title' => 'Disconnected Apps',
					'text' => 'No automation between your tools',
					'icon' => 'network',
				),
				array(
					'title' => 'Rising Labor Costs',
					'text' => 'Staff stuck doing repetitive work instead of high-value tasks',
					'icon' => 'chart',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Verus Builds Intelligent Workflow Automation for Your Business',
			'caps_lede' => 'No more manual clicks. Your apps finally work together — automatically.',
			'caps' => array(
				array(
					'title' => 'Connect Your Apps',
					'text' => 'Instantly link Email, CRM, Accounting, ERP, Google Workspace, Microsoft 365, and 1000+ other tools.',
					'icon' => 'network',
				),
				array(
					'title' => 'Trigger Smart Actions',
					'text' => 'Automatically create tasks, send notifications, update records, generate reports, and route approvals.',
					'icon' => 'bolt',
				),
				array(
					'title' => 'AI-Powered Intelligence',
					'text' => 'Rules that learn from your business — no complex coding required.',
					'icon' => 'ai',
					'featured' => true,
					'tag' => 'Smart Task Automation',
				),
				array(
					'title' => 'Sales Force Automation',
					'text' => 'Lead. Opportunity. Follow-up email. Appointment booked.',
					'icon' => 'users',
				),
				array(
					'title' => 'Accounting',
					'text' => 'New invoice created. Accounting updated. Approval routed. Payment reminder sent.',
					'icon' => 'doc',
				),
				array(
					'title' => 'Customer Service',
					'text' => 'Support ticket received. Ticket logged. Team notified. SLA tracked.',
					'icon' => 'headset',
				),
				array(
					'title' => 'Inventory Automation',
					'text' => 'Low inventory alert. P.O. generated. Supplier notified. Inventory restocked.',
					'icon' => 'factory',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Real Results for Real Businesses',
			'whys' => array(
				array(
					'title' => 'Real Results for Real Businesses',
					'text' => 'Verus Smart Task Automation eliminates repetitive work so your team can focus on what actually grows your business.',
				),
				array(
					'title' => 'Zero manual clicks & searching',
					'text' => 'No more manual clicks. Your apps finally work together — automatically.',
				),
				array(
					'title' => '24/7 automation & positive ROI',
					'text' => 'Book a 20-minute strategy session. We’ll map your current workflows and show you exactly which tasks Verus can automate immediately.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Ready to Eliminate Manual Work?',
			'cta_text' => 'Book a 20-minute strategy session. We’ll map your current workflows and show you exactly which tasks Verus can automate immediately. START AUTOMATING TODAY.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'AI Services',
			'title' => 'Smart Task Automation & Workflow Optimization',
			'sub' => 'Stop Manual Work Forever',
			'answer' => 'Verus connects your Email, CRM, Accounting, and every business app to trigger intelligent actions automatically — eliminating repetitive tasks and accelerating your operations.',
		),
		'employee-ai-agents' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Tired of Repetitive Questions, Inconsistent Answers, and Slow Support?',
			'problem_lede' => 'Verus transforms your company knowledge and policies into private, secure Employee AI Agents that accelerate work, eliminate mistakes, and ensure perfect consistency across your entire organization. No generic tools. No security compromises. Just your operations, your rules, your competitive edge.',
			'pains' => array(
				array(
					'title' => 'Slow Responses',
					'text' => 'Employees wait days for HR, Legal, or Sales guidance',
					'icon' => 'headset',
				),
				array(
					'title' => 'Inconsistent Decisions',
					'text' => 'Different team members apply policies differently',
					'icon' => 'users',
				),
				array(
					'title' => 'Compliance Risks',
					'text' => 'Accidental policy violations due to lack of knowledge',
					'icon' => 'doc',
				),
				array(
					'title' => 'Overloaded Support Teams',
					'text' => 'HR and IT buried under the same repetitive questions',
					'icon' => 'gauge',
				),
				array(
					'title' => 'Knowledge Silos',
					'text' => 'Critical information locked in documents and people’s heads',
					'icon' => 'lock',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Verus Builds Your Custom Employee AI Agents',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'AI for Sales',
					'text' => 'Intelligent digital assistants tailored to Sales — instant answers, task automation, and perfect consistency.',
					'icon' => 'chart',
				),
				array(
					'title' => 'Agentic Chat for Business',
					'text' => 'Empower every employee with instant answers, task automation, and perfect consistency.',
					'icon' => 'ai',
				),
				array(
					'title' => 'Digital Employee Assistant',
					'text' => 'Intelligent digital assistants tailored to HR, Sales, Legal, Operations and every team.',
					'icon' => 'users',
					'featured' => true,
					'tag' => 'Department Specific Assistants',
				),
				array(
					'title' => 'Data stays private in your environment',
					'text' => 'All 100% private and secure in your environment. No generic tools. No security compromises.',
					'icon' => 'lock',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Data stays private in your environment',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Ready to Give Every Employee Their Own Intelligent AI Assistant?',
			'cta_text' => 'Verus transforms your company knowledge and policies into private, secure Employee AI Agents that accelerate work, eliminate mistakes, and ensure perfect consistency across your entire organization. No generic tools. No security compromises. Just your operations, your rules, your competitive edge.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'AI Services',
			'title' => 'Employee AI Agents',
			'sub' => 'Augment a person. Sidekicks trained on your policies.',
			'answer' => 'This sits next to your people, not instead of them. Employee AI Agents are department sidekicks — HR, Sales, Legal, Operations — trained on your policies so the human gets instant, consistent answers and keeps making the call.',
		),
		'digital-customer-assistants' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Tired of Missed Calls, Delayed Responses, and Lost Opportunities?',
			'problem_lede' => 'Your customers expect instant answers 24/7, but your team can’t be everywhere at once.',
			'pains' => array(
				array(
					'title' => 'Missed Inquiries',
					'text' => 'Customers hang up, leave chats unanswered, or go to competitors',
					'icon' => 'phone',
				),
				array(
					'title' => 'Inconsistent Responses',
					'text' => 'Different team members give conflicting answers',
					'icon' => 'users',
				),
				array(
					'title' => 'Scheduling Bottlenecks',
					'text' => 'Manual booking slows down appointments and frustrates clients',
					'icon' => 'gauge',
				),
				array(
					'title' => 'High Support Costs',
					'text' => 'HR and IT buried under the same repetitive questions',
					'icon' => 'chart',
				),
				array(
					'title' => 'Knowledge Gaps',
					'text' => 'Critical information scattered across emails, documents, and people’s heads.',
					'icon' => 'doc',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Verus Builds Your Custom Digital Customer Assistants',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => '24/7 Customer Support',
					'text' => 'Your customers expect instant answers 24/7, but your team can’t be everywhere at once.',
					'icon' => 'headset',
					'featured' => true,
					'tag' => '24/7 Virtual Receptionists',
				),
				array(
					'title' => 'Custom Digital Customer Assistants',
					'text' => 'Verus Builds Your Custom Digital Customer Assistants — not generic chatbots that sound robotic, miss context, and risk exposing sensitive data.',
					'icon' => 'ai',
				),
				array(
					'title' => 'Scheduling',
					'text' => 'Manual booking slows down appointments and frustrates clients. Digital Customer Assistants keep appointments moving.',
					'icon' => 'check',
				),
				array(
					'title' => 'Brand-consistent answers',
					'text' => 'Inconsistent support damages your brand reputation. Give every customer their own intelligent AI assistant.',
					'icon' => 'star',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => '24/7 Customer Support',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Ready to Give Every Customer Their Own Intelligent AI Assistant?',
			'cta_text' => 'Missed inquiries turn into lost revenue, and inconsistent support damages your brand reputation. Book a meeting with our team.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'AI Services',
			'title' => 'Digital Customer Assistants',
			'sub' => '24/7 Customer Support',
			'answer' => 'Your customers expect instant answers 24/7, but your team can’t be everywhere at once. Generic chatbots sound robotic, miss context, and risk exposing sensitive data. Missed inquiries turn into lost revenue, and inconsistent support damages your brand reputation.',
		),
		'instant-business-intelligence' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Tired of Waiting Weeks for Reports?',
			'problem_lede' => 'Talk to Your Data. Verus Builds Your Private Data LLM.',
			'pains' => array(
				array(
					'title' => 'Slow Reporting',
					'text' => 'Waiting Weeks for Answers',
					'icon' => 'gauge',
				),
				array(
					'title' => 'Data Silos',
					'text' => 'CRM, accounting, and operations don’t talk to each other',
					'icon' => 'network',
				),
				array(
					'title' => 'Security Risks',
					'text' => 'Sending sensitive data to public AI tools is dangerous',
					'icon' => 'lock',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Verus Builds Your Private Data LLM',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'Talk to Your Data',
					'text' => 'Master natural-language querying of your private data, dashboard creation, and turning insights into immediate business action.',
					'icon' => 'chart',
					'featured' => true,
					'tag' => 'Private Data LLM',
				),
				array(
					'title' => 'Instant Business Intelligence',
					'text' => 'Verus Builds Your Private Data LLM so you are not waiting weeks for reports.',
					'icon' => 'ai',
				),
				array(
					'title' => 'Real Results for Real Businesses',
					'text' => 'Turn insights into immediate business action.',
					'icon' => 'star',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Real Results for Real Businesses',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Ready to Build Your Private Data LLM?',
			'cta_text' => 'Book a meeting with our team. Take the AI Maturity Assessment and find out your score.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'AI Services',
			'title' => 'Instant Business Intelligence',
			'sub' => 'Talk to Your Data',
			'answer' => 'Verus Builds Your Private Data LLM.',
		),
		'private-ai-governance' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Public AI is putting your company at risk.',
			'problem_lede' => 'Most cyber policies were not written for ChatGPT. If staff paste customer files into a public AI tool, you may have a claim problem before you have an AI problem. Private AI Governance closes that gap first.',
			'pains' => array(
				array(
					'title' => 'Data Leakage',
					'text' => 'Sensitive files & customer data sent to third-party servers',
					'icon' => 'lock',
				),
				array(
					'title' => 'Compliance Risks',
					'text' => 'GDPR, HIPAA, SOC 2, and industry regulations violated',
					'icon' => 'doc',
				),
				array(
					'title' => 'No Visibility',
					'text' => 'No audit trail or governance controls over AI usage',
					'icon' => 'gauge',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Verus Delivers True Private AI Governance',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'Secure AI — Private Control',
					'text' => 'Your Company Secrets Stay Secret.',
					'icon' => 'lock',
					'featured' => true,
					'tag' => 'Private Control',
				),
				array(
					'title' => 'Real Security. Real Results.',
					'text' => 'Verus Delivers True Private AI Governance.',
					'icon' => 'shield',
				),
				array(
					'title' => 'Governance controls over AI usage',
					'text' => 'Audit trail and governance controls over AI usage — unlike public AI tools.',
					'icon' => 'check',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Your Company Secrets Stay Secret',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Your Company Secrets Stay Secret',
			'cta_text' => 'Public AI is putting your company at risk. Verus Delivers True Private AI Governance.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'AI Services',
			'title' => 'Private AI Governance',
			'sub' => 'Secure AI — Private Control',
			'answer' => 'Verus Delivers True Private AI Governance. Your Company Secrets Stay Secret.',
		),
		'ai-training-curriculum' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Build Power Users',
			'problem_lede' => 'Built exclusively around your private Verus AI platform, this curriculum combines expert-led workshops, real-world simulations, and progressive skill-building. Every session reinforces your organization’s security policies, compliance requirements, and business objectives — so learning translates directly into faster results and zero risk.',
			'pains' => array(
				array(
					'title' => 'Theory without application',
					'text' => 'We don’t just teach theory. We equip your people with immediately applicable skills that maximize results, eliminate risk, and build permanent internal AI capability.',
					'icon' => 'doc',
				),
				array(
					'title' => 'Public AI risk',
					'text' => 'Module 1: Foundations of Private & Secure AI — Understand Verus Private AI Governance, zero-trust principles, data privacy, and how to use AI safely without ever risking leakage.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Uneven team skill',
					'text' => 'Progressive Learning Paths — Beginner → Intermediate → Advanced → AI Champion levels. From executives to frontline staff — everyone leaves with new capabilities.',
					'icon' => 'users',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Core Curriculum Modules',
			'caps_lede' => 'Comprehensive Progressive Training',
			'caps' => array(
				array(
					'title' => 'Module 1: Foundations of Private & Secure AI',
					'text' => 'Understand Verus Private AI Governance, zero-trust principles, data privacy, and how to use AI safely without ever risking leakage.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Module 2: Advanced Prompt Engineering Mastery',
					'text' => 'Craft precise, high-yield prompts that consistently deliver accurate, context-aware results. Includes chaining, few-shot learning, and domain-specific techniques.',
					'icon' => 'ai',
				),
				array(
					'title' => 'Module 3: Responsible AI & Ethical Governance',
					'text' => 'Learn to apply ethical guardrails, bias detection, compliance mapping, and human oversight best practices aligned with your enterprise policies.',
					'icon' => 'check',
				),
				array(
					'title' => 'Module 4: Building & Managing Virtual AI Employees',
					'text' => 'Train staff to design, deploy, monitor, and optimize autonomous AI workers that handle repetitive tasks 24/7.',
					'icon' => 'users',
				),
				array(
					'title' => 'Module 5: Instant Business Intelligence & Data Interaction',
					'text' => 'Master natural-language querying of your private data, dashboard creation, and turning insights into immediate business action.',
					'icon' => 'chart',
				),
				array(
					'title' => 'Module 6: AI Workflow Automation & Integration',
					'text' => 'Create end-to-end automations, connect AI agents to your tools, and scale solutions across departments with full governance.',
					'icon' => 'bolt',
					'featured' => true,
					'tag' => 'AI Competitive Advantage',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'The Mastery Advantage',
			'whys' => array(
				array(
					'title' => 'Turn AI from a tool into a core competitive advantage.',
					'text' => 'Real-World ROI Snapshot: Teams completing the Verus AI Training Curriculum achieve 4x faster AI adoption rates, 90% reduction in common prompt and governance errors, and an average 320% ROI within the first six months.',
				),
				array(
					'title' => 'Immediate Skill Application',
					'text' => 'Every workshop uses your real tools, data, and workflows. Certification That Matters — Participants earn Verus AI Mastery Certificates recognized internally and industry-wide.',
				),
				array(
					'title' => 'Team-Wide Transformation',
					'text' => 'From executives to frontline staff — everyone leaves with new capabilities. Continuous Upskilling — Access to monthly live sessions, updated modules, and on-demand resources.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Master AI with Confidence',
			'cta_text' => 'Build Power Users. Turn AI from a tool into a core competitive advantage.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'AI Services',
			'title' => 'AI Training Curriculum',
			'sub' => 'Master AI with Confidence',
			'answer' => 'Our complete, hands-on AI Training Curriculum turns your team into AI power users. From foundational secure usage to advanced prompt engineering and responsible AI governance — every module is practical, customized, and delivered inside your private Verus environment. We don’t just teach theory. We equip your people with immediately applicable skills that maximize results, eliminate risk, and build permanent internal AI capability.',
		),
		'ai-maturity-assessment' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Why AI Maturity Matters Now',
			'problem_lede' => 'AI is no longer optional — but without a clear picture of where you stand, you cannot sequence the work.',
			'pains' => array(
				array(
					'title' => 'You are in the early stages of AI adoption.',
					'text' => 'Most processes remain manual and reactive. This tier focuses on reducing basic manual tasks, introducing Microsoft Copilot across the organization, establishing basic AI security and compliance foundations, and building initial user awareness and confidence.',
					'icon' => 'gauge',
				),
				array(
					'title' => 'You have started adopting AI tools in key departments.',
					'text' => 'Your team is becoming more proactive with automation, data insights, and pilot programs. This tier delivers measurable efficiency gains, begins to reduce compliance and security risks, and positions you for broader AI integration.',
					'icon' => 'bolt',
				),
				array(
					'title' => 'AI is fully embedded into your core operations.',
					'text' => 'You leverage advanced agentic automation, proactive compliance-as-a-service, strategic governance, and maximum productivity tools. This is the highest-maturity level, delivering the greatest ROI, significant risk reduction, competitive advantage, and transformative business outcomes.',
					'icon' => 'star',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Verus AI Secure: Leaders in Automation.',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'Key Insights',
					'text' => 'Get a personalized AI Maturity Assessment report with your exact score, key insights, projected first-year value, and clear next steps.',
					'icon' => 'chart',
				),
				array(
					'title' => 'Microsoft Copilot Deployment & Optimization',
					'text' => 'Introducing Microsoft Copilot across the organization and optimizing how teams use it.',
					'icon' => 'ai',
				),
				array(
					'title' => 'AI Strategy & Governance',
					'text' => 'Strategic governance so AI is fully embedded into your core operations and strategic decision-making.',
					'icon' => 'doc',
				),
				array(
					'title' => 'Agentic Automation & Workflow Modernization',
					'text' => 'Advanced agentic automation and workflow modernization.',
					'icon' => 'bolt',
				),
				array(
					'title' => 'AI Security & Compliance-as-a-Service',
					'text' => 'Proactive compliance-as-a-service and AI security foundations.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Ongoing AI Maturity Reviews & ROI Tracking',
					'text' => 'Custom Recommendations and projected first-year value, with clear next steps.',
					'icon' => 'gauge',
					'featured' => true,
					'tag' => 'Take the free assessment',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Custom Recommendations',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Are you ready for the future with automated secure AI solutions?',
			'cta_text' => 'Then take the free assessment today and begin your journey to efficiency and advanced productivity with Verus AI Secure.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'AI Services',
			'title' => 'AI Maturity Assessment',
			'sub' => 'Discover Your AI Maturity Level in 5 Minutes',
			'answer' => 'Get a personalized AI Maturity Assessment report with your exact score, key insights, projected first-year value, and clear next steps.',
			'form_eyebrow' => 'Free assessment',
			'form_title' => 'Get your score in minutes',
			'form_lede' => 'Answer a few questions. We will send your AI Maturity score, key insights, and a first-year value estimate.',
			'form_shortcode' => "[ninja_form id='8']",
		),
		'healthcare-it-services' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Worried about security?',
			'problem_lede' => 'Do your clients have the best in data protection and HIPAA compliance? You need better.',
			'pains' => array(
				array(
					'title' => 'You need better',
					'text' => 'Do your clients have the best in data protection and HIPAA compliance?',
					'icon' => 'heart',
				),
				array(
					'title' => 'Regulation and patient data',
					'text' => 'In the rapidly evolving digital landscape, healthcare organizations face unique and complex challenges with regulation and patient data.',
					'icon' => 'doc',
				),
				array(
					'title' => 'Healthcare Under Attack',
					'text' => 'Read more about critical steps to prevent ransomware in this interesting article: “Healthcare Under Attack – 5 Critical Steps for Preventing Ransomware in Healthcare.”',
					'icon' => 'shield',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Verus supports all Healthcare organizations',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'Hospitals & Medical Centers',
					'text' => 'How does Verus support hospitals and medical centers? Verus delivers top-tier IT services, cybersecurity, and intelligent AI Services tailored for hospitals and medical centers. We provide secure, efficient technology—including private AI solutions and AI-driven automation—to protect patient data, streamline operations, enhance patient care, and meet the demanding needs of modern healthcare.',
					'icon' => 'building',
				),
				array(
					'title' => 'Assisted Living',
					'text' => 'How does Verus support Assisted Living and Senior Care organizations? Verus stands at the forefront of this transformation as a leading Managed Service Provider (MSP), Cybersecurity expert, and AI Services partner dedicated to the unique needs of the Assisted Living and Senior Care sector. We deliver secure, tailored IT solutions combined with intelligent AI services.',
					'icon' => 'heart',
					'featured' => true,
					'tag' => 'Senior Care',
				),
				array(
					'title' => 'Home Health Care',
					'text' => 'How does Verus support home healthcare organizations? Verus delivers comprehensive IT services and intelligent AI Services tailored for home healthcare organizations. From HIPAA-compliant cybersecurity and secure cloud hosting to managed IT support and AI-powered automation, we empower your team to focus on patient care while protecting data and streamlining operations.',
					'icon' => 'users',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why do hospitals and medical facilities across the US trust Verus?',
			'whys' => array(
				array(
					'title' => 'Why do hospitals and medical facilities across the US trust Verus?',
					'text' => 'Hospitals and medical facilities nationwide rely on Verus Healthcare IT for cybersecurity, technology, and intelligent AI Services.',
				),
				array(
					'title' => 'HIPAA-Compliant Cloud, Cybersecurity & AI Services',
					'text' => 'Transform your healthcare IT with Verus—secure, innovative solutions that combine HIPAA-compliant protection, advanced AI capabilities, and operational excellence to prioritize patient care.',
				),
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Contact us today to elevate your services.',
			'cta_text' => 'Transform your healthcare IT with Verus—secure, innovative solutions that combine HIPAA-compliant protection, advanced AI capabilities, and operational excellence to prioritize patient care.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(
				array(
					'question' => 'How does Verus support hospitals and medical centers?',
					'answer' => 'Verus delivers top-tier IT services, cybersecurity, and intelligent AI Services tailored for hospitals and medical centers. We provide secure, efficient technology—including private AI solutions and AI-driven automation—to protect patient data, streamline operations, enhance patient care, and meet the demanding needs of modern healthcare.',
				),
				array(
					'question' => 'How does Verus support Assisted Living and Senior Care organizations?',
					'answer' => 'Verus stands at the forefront of this transformation as a leading Managed Service Provider (MSP), Cybersecurity expert, and AI Services partner dedicated to the unique needs of the Assisted Living and Senior Care sector.',
				),
				array(
					'question' => 'How does Verus support home healthcare organizations?',
					'answer' => 'From HIPAA-compliant cybersecurity and secure cloud hosting to managed IT support and AI-powered automation, we empower your team to focus on patient care while protecting data and streamlining operations.',
				),
				array(
					'question' => 'Why do hospitals and medical facilities across the US trust Verus?',
					'answer' => 'Hospitals and medical facilities nationwide rely on Verus Healthcare IT for cybersecurity, technology, and intelligent AI Services.',
				),
			),
			'eyebrow' => 'Industries',
			'title' => 'Healthcare IT Services',
			'sub' => 'Secure Healthcare IT Solutions: HIPAA-Compliant Cloud, Cybersecurity & AI Services',
			'answer' => 'Verus supports all Healthcare organizations. Do your clients have the best in data protection and HIPAA compliance?',
		),
		'financial-it-services' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Financial institutions connect to almost every aspect of our economy and personal data',
			'problem_lede' => 'Financial institutions connect to almost every aspect of our economy and personal data, which exposes them to an enormous amount of risk.',
			'pains' => array(
				array(
					'title' => 'Protect client data',
					'text' => 'Verus helps financial firms leverage AI Services, automation, cybersecurity, and managed technology services to improve operational efficiency, protect client data, meet regulatory requirements, and support long-term growth.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Meet regulatory requirements',
					'text' => 'As RIAs adopt AI Services and digital technologies to improve client service and efficiency, security remains paramount.',
					'icon' => 'doc',
				),
				array(
					'title' => 'Support long-term growth',
					'text' => 'Elevate your financial institution with Verus Cloud Secure’s cutting-edge IT and cybersecurity services.',
					'icon' => 'chart',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'AI Powered. Cyber Secure. Business Driven.',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'How does Verus help RIAs adopt AI securely?',
					'text' => 'As RIAs adopt AI Services and digital technologies to improve client service and efficiency, security remains paramount. Verus helps firms safeguard sensitive data, maintain compliance, and build a secure foundation for innovation and growth.',
					'icon' => 'lock',
					'url' => '/industries/financial-it-services/ria/',
				),
				array(
					'title' => 'How does Verus support modern Accounting Firms?',
					'text' => 'Verus helps modern accounting firms secure client data, simplify compliance, and improve efficiency with AI Services, AI-ready cybersecurity, and technology solutions designed specifically for their needs.',
					'icon' => 'doc',
					'url' => '/industries/financial-it-services/accounting-firms/',
				),
				array(
					'title' => 'How does Verus support modern Tax Professionals?',
					'text' => 'Verus helps modern tax professionals protect client data, improve efficiency, and embrace AI-driven innovation with AI Services, cybersecurity, and technology solutions designed specifically for their needs.',
					'icon' => 'check',
					'url' => '/industries/financial-it-services/tax-preparation-services/',
					'featured' => true,
					'tag' => 'Tax Professionals',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why Choose Verus?',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Schedule a Meeting Today',
			'cta_text' => 'Click here to connect with our team. Elevate your financial institution with Verus Cloud Secure’s cutting-edge IT and cybersecurity services.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(
				array(
					'question' => 'How does Verus help financial firms?',
					'answer' => 'Verus helps financial firms leverage AI Services, automation, cybersecurity, and managed technology services to improve operational efficiency, protect client data, meet regulatory requirements, and support long-term growth.',
				),
				array(
					'question' => 'How does Verus help RIAs adopt AI securely?',
					'answer' => 'As RIAs adopt AI Services and digital technologies to improve client service and efficiency, security remains paramount. Verus helps firms safeguard sensitive data, maintain compliance, and build a secure foundation for innovation and growth.',
				),
				array(
					'question' => 'How does Verus support modern Accounting Firms?',
					'answer' => 'Verus helps modern accounting firms secure client data, simplify compliance, and improve efficiency with AI Services, AI-ready cybersecurity, and technology solutions designed specifically for their needs.',
				),
				array(
					'question' => 'How does Verus support modern Tax Professionals?',
					'answer' => 'Verus helps modern tax professionals protect client data, improve efficiency, and embrace AI-driven innovation with AI Services, cybersecurity, and technology solutions designed specifically for their needs.',
				),
			),
			'eyebrow' => 'Industries',
			'title' => 'Financial IT Services',
			'sub' => 'How does Verus help financial firms?',
			'answer' => 'Verus helps financial firms leverage AI Services, automation, cybersecurity, and managed technology services to improve operational efficiency, protect client data, meet regulatory requirements, and support long-term growth.',
		),
		'energy-it-services' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Cyberattacks on energy infrastructure has increased substantially',
			'problem_lede' => 'Cyberattacks on energy infrastructure can have dire consequences, including widespread outages, financial losses, and even threats to national security. For instance, a successful breach could disrupt the supply chain, impacting not just the energy sector but also the manufacturing and transportation sectors that rely on stable energy supplies.',
			'pains' => array(
				array(
					'title' => 'Widespread outages and financial losses',
					'text' => 'Cyberattacks on energy infrastructure can have dire consequences, including widespread outages, financial losses, and even threats to national security.',
					'icon' => 'bolt',
				),
				array(
					'title' => 'Internet of Things (IoT) complexity',
					'text' => 'The growing trend of integrating the Internet of Things (IoT) devices into energy systems adds another layer of complexity.',
					'icon' => 'network',
				),
				array(
					'title' => 'Renewable energy and smart grids',
					'text' => 'The increasing push towards renewable energy sources and smart grid technologies raises new challenges in cybersecurity. As utilities adopt advanced technologies to enhance efficiency and reliability, they must prioritize building resilient systems capable of thwarting cyber threats.',
					'icon' => 'gauge',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Why choose Verus for Cybersecurity in the Energy Sector?',
			'caps_lede' => 'By prioritizing cybersecurity, the energy sector can not only mitigate risks but also enhance its overall operational resilience, making it better equipped to support economic stability and national security in an era of increasing cyber threats.',
			'caps' => array(
				array(
					'title' => 'Protect critical infrastructure',
					'text' => 'The significance of cybersecurity in the energy industry is paramount. As our reliance on technology grows, so does the imperative to develop comprehensive cybersecurity strategies that protect critical infrastructure.',
					'icon' => 'shield',
				),
				array(
					'title' => 'Invest in technology and infrastructure',
					'text' => 'This involves not only investing in technology and infrastructure but also fostering a culture of security awareness among employees and stakeholders. Continuous training and simulations can help ensure teams are prepared.',
					'icon' => 'building',
				),
				array(
					'title' => 'Operational resilience',
					'text' => 'By prioritizing cybersecurity, the energy sector can not only mitigate risks but also enhance its overall operational resilience.',
					'icon' => 'cluster',
					'featured' => true,
					'tag' => 'Energy Sector',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why choose Verus for Cybersecurity in the Energy Sector?',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Schedule a Meeting Today',
			'cta_text' => 'Cyberattacks on energy infrastructure has increased substantially, magnifying organizations’ need to protect against cyber threats.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'Industries',
			'title' => 'Energy IT Services',
			'sub' => 'Why choose Verus for Cybersecurity in the Energy Sector?',
			'answer' => 'In today\'s increasingly interconnected world, the importance of cybersecurity in the energy industry cannot be overstated. The energy sector, encompassing oil, gas, and renewable energy sources, plays a critical role in the functioning of economies and societies. However, as this industry becomes more digitized and reliant on technology, the potential vulnerabilities also increase, making robust cybersecurity measures essential to safeguard against cyber threats.',
		),
		'it-support-for-manufacturing' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'How does Verus protect industrial operations?',
			'problem_lede' => 'Many organizations in the manufacturing and industrial sectors underestimate the need for cybersecurity protection.',
			'pains' => array(
				array(
					'title' => 'Ransomware, unauthorized access, and cyber threats',
					'text' => 'Protect against ransomware, unauthorized access, and cyber threats.',
					'icon' => 'shield',
				),
				array(
					'title' => 'Industrial control systems (ICS) and OT',
					'text' => 'Secure industrial control systems (ICS) and operational technology.',
					'icon' => 'factory',
				),
				array(
					'title' => 'Visibility',
					'text' => 'Improve visibility through continuous monitoring and threat detection.',
					'icon' => 'gauge',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Comprehensive Manufacturing Technology Services',
			'caps_lede' => 'Verus delivers integrated cybersecurity, managed IT, cloud, backup and disaster recovery, infrastructure management, and strategic technology consulting services designed for modern manufacturing environments.',
			'caps' => array(
				array(
					'title' => 'Secure industrial control systems (ICS) and operational technology',
					'text' => 'Secure industrial control systems (ICS) and operational technology.',
					'icon' => 'factory',
				),
				array(
					'title' => 'Protect against ransomware, unauthorized access, and cyber threats',
					'text' => 'Protect against ransomware, unauthorized access, and cyber threats.',
					'icon' => 'shield',
				),
				array(
					'title' => 'Strengthen network segmentation, access controls, and encryption',
					'text' => 'Strengthen network segmentation, access controls, and encryption.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Improve visibility through continuous monitoring and threat detection',
					'text' => 'Improve visibility through continuous monitoring and threat detection.',
					'icon' => 'gauge',
				),
				array(
					'title' => 'Support compliance, risk management, and business continuity',
					'text' => 'Support compliance, risk management, and business continuity.',
					'icon' => 'doc',
				),
				array(
					'title' => 'Enable secure adoption of AI, automation, and smart manufacturing technologies',
					'text' => 'Enable secure adoption of AI, automation, and smart manufacturing technologies.',
					'icon' => 'ai',
					'featured' => true,
					'tag' => 'AI-ready',
				),
				array(
					'title' => 'Proactive risk assessments and security management',
					'text' => 'AI-ready cybersecurity and managed technology solutions. Proactive risk assessments and security management.',
					'icon' => 'check',
				),
				array(
					'title' => 'Business continuity and disaster recovery planning',
					'text' => 'Scalable solutions that grow with your operation. Business continuity and disaster recovery planning.',
					'icon' => 'cloud',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'How does Verus protect industrial operations?',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Focus on production, innovation, and growth',
			'cta_text' => 'Focus on production, innovation, and growth while Verus helps secure and optimize the technology that powers your manufacturing business.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'Industries',
			'title' => 'Manufacturing IT Support',
			'sub' => 'Secure Manufacturing Operations in the Age of AI',
			'answer' => 'As manufacturers embrace AI, automation, smart factories, and connected industrial systems, cybersecurity becomes essential to maintaining operational reliability, safety, and business continuity. Verus helps manufacturing organizations protect critical IT and operational technology (OT) environments from evolving cyber threats while supporting innovation and digital transformation.',
		),
		'insurance' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Why choose Verus for Insured Cybersecurity?',
			'problem_lede' => 'Insurance companies manage vast amounts of personal and financial data, creating prime targets for cyberattacks.',
			'pains' => array(
				array(
					'title' => 'Secure client, financial, and operational data',
					'text' => 'Secure client, financial, and operational data.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Strengthen cybersecurity and compliance readiness',
					'text' => 'Strengthen cybersecurity and compliance readiness.',
					'icon' => 'doc',
				),
				array(
					'title' => 'Support AI and automation initiatives securely',
					'text' => 'Support AI and automation initiatives securely.',
					'icon' => 'ai',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Secure Innovation in a Changing Insurance Landscape',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'Secure client, financial, and operational data',
					'text' => 'Protect sensitive data, reduce risk, and support regulatory requirements.',
					'icon' => 'lock',
				),
				array(
					'title' => '24/7 monitoring, support, and threat detection',
					'text' => 'Provide 24/7 monitoring, support, and threat detection.',
					'icon' => 'headset',
				),
				array(
					'title' => 'Optimize infrastructure, cloud, and remote workforce technologies',
					'text' => 'Optimize infrastructure, cloud, and remote workforce technologies.',
					'icon' => 'cloud',
				),
				array(
					'title' => 'Align technology investments with business objectives',
					'text' => 'Align technology investments with business objectives.',
					'icon' => 'chart',
					'featured' => true,
					'tag' => 'Business objectives',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why choose Verus for Insured Cybersecurity?',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Focus on serving your clients',
			'cta_text' => 'Focus on serving your clients while Verus helps secure, optimize, and modernize your technology environment. Our team combines expertise in cybersecurity, managed IT, compliance, and AI-ready technology solutions to help insurance organizations improve efficiency, minimize downtime, and build a secure foundation for future growth.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'Industries',
			'title' => 'Insurance',
			'sub' => 'Secure Innovation in a Changing Insurance Landscape',
			'answer' => 'As insurance organizations adopt AI, automation, and digital technologies, they face increasing cybersecurity, compliance, and operational challenges. Verus helps insurers navigate this evolving landscape with integrated cybersecurity, managed IT, and technology solutions designed to protect sensitive data, reduce risk, and support regulatory requirements.',
		),
		'hospitality' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'The digital threats to the hospitality industry are increasing.',
			'problem_lede' => 'Cybercriminals target private and payment data.',
			'pains' => array(
				array(
					'title' => 'Guest information and payment systems',
					'text' => 'Protect guest information, payment systems, and business-critical data with proactive cybersecurity solutions designed to reduce risk and support PCI-DSS compliance.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Cloud platforms, Wi-Fi, and connected devices',
					'text' => 'Our intelligent cybersecurity services help secure cloud platforms, Wi-Fi networks, connected devices, and AI-powered technologies through continuous monitoring, threat detection, and access controls.',
					'icon' => 'network',
				),
				array(
					'title' => 'Employees as a line of defense',
					'text' => 'Security awareness training and phishing protection help employees become a stronger line of defense against cyber threats.',
					'icon' => 'users',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Why Hospitality Organizations Choose Verus',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'AI-ready cybersecurity and managed IT services',
					'text' => 'As hospitality businesses adopt AI, automation, and digital guest services, cybersecurity is more important than ever.',
					'icon' => 'ai',
				),
				array(
					'title' => 'Secure guest Wi-Fi and network protection',
					'text' => 'Our intelligent cybersecurity services help secure cloud platforms, Wi-Fi networks, connected devices, and AI-powered technologies through continuous monitoring, threat detection, and access controls.',
					'icon' => 'network',
					'featured' => true,
					'tag' => 'PCI-DSS',
				),
				array(
					'title' => 'Protect guest information, payment systems, and business-critical data',
					'text' => 'Protect guest information, payment systems, and business-critical data with proactive cybersecurity solutions designed to reduce risk and support PCI-DSS compliance.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Security awareness training and phishing protection',
					'text' => 'Security awareness training and phishing protection help employees become a stronger line of defense against cyber threats.',
					'icon' => 'users',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why Hospitality Organizations Choose Verus',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Focus on delivering exceptional guest experiences',
			'cta_text' => 'Focus on delivering exceptional guest experiences while Verus secures and optimizes the technology behind your business.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'Industries',
			'title' => 'Hospitality IT Support',
			'sub' => 'Cybersecurity & Managed IT Services for the Hospitality Industry',
			'answer' => 'As hospitality businesses adopt AI, automation, and digital guest services, cybersecurity is more important than ever. Verus helps hotels, resorts, and hospitality providers secure their technology environments while improving efficiency, compliance, and guest experiences.',
		),
		'non-profits' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Cybersecurity is no longer optional; it is a requirement.',
			'problem_lede' => 'In the ever-expanding digital landscape, criminals lurk around every corner. Cybersecurity is no longer optional; it is a requirement.',
			'pains' => array(
				array(
					'title' => 'Protect donor data',
					'text' => 'Secure donor, financial, and organizational data.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Limited resources',
					'text' => 'Technology should help your nonprofit accomplish more with limited resources. Scale operations without increasing overhead.',
					'icon' => 'chart',
				),
				array(
					'title' => 'Staff productivity',
					'text' => 'Improve staff productivity and collaboration. Modernize cloud and technology environments.',
					'icon' => 'users',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Power Your Mission with AI, Automation & Cybersecurity',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'Secure donor, financial, and organizational data',
					'text' => 'Secure donor, financial, and organizational data.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Improve staff productivity and collaboration',
					'text' => 'Improve staff productivity and collaboration.',
					'icon' => 'users',
				),
				array(
					'title' => 'Modernize cloud and technology environments',
					'text' => 'Modernize cloud and technology environments.',
					'icon' => 'cloud',
				),
				array(
					'title' => 'Scale operations without increasing overhead',
					'text' => 'Scale operations without increasing overhead.',
					'icon' => 'bolt',
					'featured' => true,
					'tag' => 'Maximize impact',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why choose Verus for Nonprofit IT Security?',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Spend less time managing technology and more time making a difference.',
			'cta_text' => 'With Verus as your technology partner, your team can spend less time managing technology and more time making a difference.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'Industries',
			'title' => 'Nonprofit IT Support',
			'sub' => 'Power Your Mission with AI, Automation & Cybersecurity',
			'answer' => 'Technology should help your nonprofit accomplish more with limited resources. Verus helps organizations leverage AI, automation, cybersecurity, and managed IT services to improve efficiency, protect donor data, and maximize impact.',
		),
		'automotive-it-support' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => '24/7 Support',
				),
				array(
					'title' => 'DMS Optimization',
				),
				array(
					'title' => 'Cybersecurity Experts',
				),
				array(
					'title' => 'AI-Powered Efficiency',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'The Hidden IT Challenges Killing Automotive Profitability',
			'problem_lede' => 'From DMS downtime and slow parts lookups to ransomware threats and rising labor costs, today’s automotive businesses face more IT pressure than ever.',
			'pains' => array(
				array(
					'title' => 'DMS Downtime',
					'text' => 'Lost Sales & Frustrated Customers',
					'icon' => 'gauge',
				),
				array(
					'title' => 'Rising Labor & Operational Costs',
					'text' => 'Manual Processes Drain Your Margins',
					'icon' => 'chart',
				),
				array(
					'title' => 'Cybersecurity Vulnerabilities',
					'text' => 'Dealers Are Prime Targets for Attacks',
					'icon' => 'shield',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'AI Automation That Supercharges Your Automotive Operations',
			'caps_lede' => 'From Lead Qualification to Parts Ordering. Verus AI automates repetitive tasks so your team can focus on high-value work.',
			'caps' => array(
				array(
					'title' => 'Managed IT & 24/7 Monitoring',
					'text' => 'Proactive support so you never miss a sale.',
					'icon' => 'headset',
				),
				array(
					'title' => 'Cybersecurity & Compliance',
					'text' => 'Protect customer data and meet OEM standards.',
					'icon' => 'lock',
				),
				array(
					'title' => 'DMS Optimization & Cloud Integration',
					'text' => 'Faster workflows across all systems. Real-time DMS & CRM synchronization.',
					'icon' => 'cloud',
					'featured' => true,
					'tag' => 'DMS Optimization',
				),
				array(
					'title' => 'Instant lead qualification and appointment booking',
					'text' => 'Verus AI automates repetitive tasks so your team can focus on high-value work.',
					'icon' => 'users',
				),
				array(
					'title' => 'Automated parts inventory alerts and ordering',
					'text' => 'Automated parts inventory alerts and ordering.',
					'icon' => 'factory',
				),
				array(
					'title' => 'Service scheduling optimization',
					'text' => 'Service scheduling optimization. Predictive maintenance alerts.',
					'icon' => 'check',
				),
				array(
					'title' => 'Customer follow-up and review requests',
					'text' => 'Customer follow-up and review requests.',
					'icon' => 'mail',
				),
				array(
					'title' => 'Intelligent reporting on sales, service, and compliance',
					'text' => 'Intelligent reporting on sales, service, and compliance. Automated compliance & audit reporting. 24/7 remote technician support.',
					'icon' => 'chart',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Cut labor costs by up to 40% while delivering faster, more consistent service.',
			'whys' => array(
				array(
					'title' => 'Your AI employees work 24/7',
					'text' => 'Cut labor costs by up to 40% while delivering faster, more consistent service. Your AI employees work 24/7. Never taking a break or calling in sick.',
				),
				array(
					'title' => 'DMS Optimization',
					'text' => 'DMS Optimization & Cloud Integration — faster workflows across all systems.',
				),
				array(
					'title' => 'Cybersecurity Experts',
					'text' => 'Protect customer data and meet OEM standards.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Ready to Modernize Your Automotive IT & Unlock AI Efficiency?',
			'cta_text' => 'Get a free 20-minute IT + AI assessment tailored to your dealership or auto shop. Contact Us to discuss YOUR FREE ASSESSMENT.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(),
			'eyebrow' => 'Industries',
			'title' => 'Automotive IT Support',
			'sub' => 'Managed IT, cybersecurity, and AI automation purpose-built for car dealerships, auto repair shops, and automotive service providers.',
			'answer' => 'From DMS downtime and slow parts lookups to ransomware threats and rising labor costs, today’s automotive businesses face more IT pressure than ever. Customers expect instant service, technicians need real-time data, and compliance requirements keep growing.',
		),
		'client-resources' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Useful Links',
			'problem_lede' => 'Email our accounting team with any account questions. Please allow 24 hours for a response. Email one of our experts for questions or concerns. We are here to support you.',
			'pains' => array(
				array(
					'title' => 'Accounting',
					'text' => 'Email our accounting team with any account questions. Please allow 24 hours for a response.',
					'icon' => 'mail',
				),
				array(
					'title' => 'Contact Our Experts',
					'text' => 'Email one of our experts for questions or concerns. We are here to support you.',
					'icon' => 'headset',
				),
				array(
					'title' => 'IT Ticket Portal',
					'text' => 'Login and see your current IT tickets or create a new one to alert our team for assistance.',
					'icon' => 'check',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'Verus Corporate Training and Education Services',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'Accounting',
					'text' => 'Email our accounting team with any account questions. Please allow 24 hours for a response.',
					'icon' => 'mail',
				),
				array(
					'title' => 'Contact Our Experts',
					'text' => 'Email one of our experts for questions or concerns. We are here to support you.',
					'icon' => 'headset',
				),
				array(
					'title' => 'IT Ticket Portal',
					'text' => 'Login and see your current IT tickets or create a new one to alert our team for assistance.',
					'icon' => 'check',
				),
				array(
					'title' => 'Client Remote Connect',
					'text' => 'Client Remote Connect for supported users.',
					'icon' => 'network',
				),
				array(
					'title' => 'AI Automation and Integration in 2026',
					'text' => 'Verus Corporate Training and Education Services.',
					'icon' => 'ai',
				),
				array(
					'title' => 'How Can Verus Support Oracle and SQL Databases?',
					'text' => 'How Can Verus Support Oracle and SQL Databases?',
					'icon' => 'database',
				),
				array(
					'title' => 'Where Do AI Employees Fit into My Organization?',
					'text' => 'Where Do AI Employees Fit into My Organization?',
					'icon' => 'users',
				),
				array(
					'title' => 'How Does My Company Ensure Compliance and AI Governance?',
					'text' => 'How Does My Company Ensure Compliance and AI Governance?',
					'icon' => 'lock',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Let the experts take care of you.',
			'whys' => array(
				array(
					'title' => 'Data Protection',
					'text' => 'Verus uses cutting-edge encryption and multi-factor authentication to safeguard sensitive data from creation to disposal, ensuring trust and compliance.',
				),
				array(
					'title' => 'Regulatory Compliance',
					'text' => 'Verus simplifies compliance through audit trails, real-time monitoring, and automated reporting, minimizing risks of fines and reputational harm.',
				),
				array(
					'title' => 'Seamless Integration',
					'text' => 'Verus integrates seamlessly with existing systems, providing secure, anytime access to data to enhance efficiency.',
				),
				array(
					'title' => 'Support',
					'text' => 'Verus provides round-the-clock expert support to resolve security issues and maintain optimal performance, minimizing disruptions in critical services.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Let the experts take care of you.',
			'cta_text' => 'Contact Our Experts. Email one of our experts for questions or concerns. We are here to support you.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(
				array(
					'question' => 'How Can Verus Support Oracle and SQL Databases?',
					'answer' => 'Unlock the full potential of your data with Verus Cloud Secure’s industry leading Database Management solutions, tailored for Oracle, Linux, and SQL environments.',
				),
				array(
					'question' => 'Where Do AI Employees Fit into My Organization?',
					'answer' => 'Verus Virtual AI Employees are fully autonomous digital workers built on your private, secure infrastructure.',
				),
				array(
					'question' => 'How Does My Company Ensure Compliance and AI Governance?',
					'answer' => 'Verus Delivers True Private AI Governance. Your Company Secrets Stay Secret.',
				),
				array(
					'question' => 'How Can AI Task Automation Make Your Company More Efficient?',
					'answer' => 'Verus connects your Email, CRM, Accounting, and every business app to trigger intelligent actions automatically — eliminating repetitive tasks and accelerating your operations.',
				),
				array(
					'question' => 'Why do I need an AI consultant?',
					'answer' => 'Whether you’re exploring AI for the first time or looking to deploy advanced AI solutions, our experts help you assess, implement, secure, and manage your technology investments.',
				),
			),
			'eyebrow' => 'Resources',
			'title' => 'Resources',
			'sub' => 'Useful Links',
			'answer' => 'Let the experts take care of you.',
		),
		'_generic' => array(
			'primary_label' => 'Book A Meeting',
			'secondary_label' => '',
			'secondary_url' => '',
			'trust' => array(
				array(
					'title' => 'Founded in 2002',
				),
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
				),
				array(
					'title' => '24/7 Monitoring & Support',
				),
			),
			'problem_eyebrow' => '',
			'problem_title' => 'Do you have the best partner?',
			'problem_lede' => 'Verus is your next generation technology company.',
			'pains' => array(
				array(
					'title' => 'Is your company AI READY?',
					'text' => 'Whether you’re exploring AI for the first time or looking to deploy advanced AI solutions, our experts help you assess, implement, secure, and manage your technology investments.',
					'icon' => 'ai',
				),
				array(
					'title' => 'Security for Today’s Digital Business',
					'text' => 'Protect your organization from evolving cyber threats while enabling secure growth and innovation.',
					'icon' => 'lock',
				),
				array(
					'title' => 'Reliable Technology. Exceptional Support.',
					'text' => 'Verus provides proactive IT management and strategic guidance to keep your business running efficiently and securely.',
					'icon' => 'headset',
				),
			),
			'caps_eyebrow' => '',
			'caps_title' => 'AI Consulting, Business Automation, Cybersecurity & Managed IT Services',
			'caps_lede' => '',
			'caps' => array(
				array(
					'title' => 'Assess',
					'text' => 'Our Approach: A.A.I.M. Assess. Analyze. Implement. Manage.',
					'icon' => 'check',
				),
				array(
					'title' => 'Implement',
					'text' => 'Our proven methodology helps organizations identify opportunities, reduce risk, and maximize return on technology investments.',
					'icon' => 'bolt',
				),
				array(
					'title' => 'Manage',
					'text' => '24/7 Monitoring & Support.',
					'icon' => 'headset',
				),
			),
			'why_eyebrow' => 'Why Choose Verus?',
			'why_title' => 'Why Verus Cloud Secure?',
			'whys' => array(
				array(
					'title' => 'One Partner for AI, Cybersecurity & IT',
					'text' => 'Founded in 2002, Verus helps organizations leverage AI, automation, cybersecurity, and managed technology solutions to improve productivity, strengthen security, and drive business growth.',
				),
				array(
					'title' => 'Cybersecurity-First Approach',
					'text' => 'Protect your organization from evolving cyber threats while enabling secure growth and innovation.',
				),
				array(
					'title' => 'Managed IT & Cloud Services',
					'text' => 'Verus provides proactive IT management and strategic guidance to keep your business running efficiently and securely.',
				),
			),
			'stats' => array(
				array(
					'metric' => '2002',
					'label' => 'Founded',
				),
				array(
					'metric' => '24/7',
					'label' => 'Monitoring & Support',
				),
				array(
					'metric' => 'A.A.I.M.',
					'label' => 'Assess. Analyze. Implement. Manage.',
				),
				array(
					'metric' => 'Nationwide',
					'label' => 'Serving clients nationwide',
				),
			),
			'cta_title' => 'Schedule a Meeting Today',
			'cta_text' => 'Get a direct meeting with our team and begin your path to safety, security and knowledge.',
			'cta_label' => 'Book A Meeting',
			'cta_note' => 'Schedule a Meeting Today',
			'faq_eyebrow' => 'Frequently Asked Questions',
			'faq_title' => 'Frequently Asked Questions',
			'faqs' => array(
				array(
					'question' => 'How do we get started?',
					'answer' => 'Schedule a Meeting Today. Click here to connect with our team.',
				),
			),
			'eyebrow' => 'Verus',
			'title' => '',
			'sub' => 'AI Powered. Cyber Secure. Business Driven.',
			'answer' => 'Founded in 2002, Verus helps organizations leverage AI, automation, cybersecurity, and managed technology solutions to improve productivity, strengthen security, and drive business growth.',
		),
	);
	return $content;
}
