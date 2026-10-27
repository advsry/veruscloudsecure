<?php
/**
 * Template Name: AI Automation Calendly (test)
 * Description: Test URL for the Smart Task Automation Calendly landing. Slug: smart-task-automation-test. Does not replace ai-services/smart-task-automation.
 *
 * Test landing. Theme header and footer stay in place. Copy, section layout,
 * and the Calendly embed match the supplied HTML. This template does not
 * replace the live service page.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="v-lp" data-booking-page="ai-automation">
<!-- HERO: copy left, Calendly right -->
  <section class="hero">
    <div class="container hero-grid">
      <div>
        <span class="hero-prehead">For operations and finance leaders at mid-sized companies</span>
        <h1>Stop Manual Work.<br><span class="hl-box">Forever.</span></h1>
        <p class="hero-sub">
          Verus connects your email, CRM, accounting, and business apps so actions trigger automatically, with <strong>no complex coding</strong>. It starts with a <strong>30-minute AI Workflow Review</strong> with a senior consultant.
        </p>
        <ul class="hero-agenda">
          <li><strong>Map your three highest-volume manual workflows</strong> and what each costs in hours</li>
          <li><strong>Identify which one pays back first</strong> if automated</li>
          <li><strong>See how it runs privately and governed,</strong> so productivity never costs you a compliance problem</li>
        </ul>
        <p class="hero-cue">▸ Fixed scope. No obligation. You leave with a one-page automation plan either way.</p>
      </div>

      <!-- BOOKING CARD: inline Calendly embed -->
      <div class="book-card" id="book">
        <span class="book-ribbon">Free · 30 Minutes</span>
        <h2>Book Your AI Workflow Review</h2>
        <p class="book-sub">Pick a time with a senior Verus consultant. A working session, not a demo.</p>
        <!-- Calendly event URL sourced from the April 2026 Verus ads build (sitelink destination)
             and the account link reconfirmed Oct 2026. Load this page once before launch to
             confirm the event still resolves. Qualifying questions live inside the Calendly event type. -->
        <?php verus_the_calendly_embed(); ?>
        <p class="book-micro">Your information stays confidential. We never share, sell, or market to your list.</p>
      </div>
    </div>
  </section>

  <!-- BADGE ROW (claims from the live Smart Task Automation page) -->
  <div class="badge-row">
    <div class="container">
      <div class="badge-grid">
        <div class="badge-card"><span>🔗</span>Connects 1000+ Business Tools</div>
        <div class="badge-card"><span>⚙️</span>No Complex Coding</div>
        <div class="badge-card"><span>🕐</span>Automation That Runs 24/7</div>
      </div>
    </div>
  </div>

  <!-- THE LEAD (desktop-only on mobile) -->
  <section class="section desktop-only">
    <div class="container prose-col">
      <p><strong>Somewhere in your company, right now, a capable person is retyping something.</strong> An invoice from email into accounting. A lead from a web form into the CRM. An order status from one system into a spreadsheet, so a third system can be updated by hand on Friday. Nobody chose this. It accumulated, one reasonable workaround at a time, until <span class="hl">your best people spend hours a week being the glue between apps that should talk to each other.</span></p>
      <p>Here is the part most automation vendors will not say out loud: buying AI tools does not fix this. MIT's NANDA initiative reported in 2025 that roughly 95 percent of enterprise AI pilots delivered no measurable P&amp;L impact. The pattern behind the failures was consistent: tools got bought, workflows never changed. The projects that worked did the opposite. They picked one high-volume workflow, automated that one thing end to end, proved the number, then expanded.</p>
      <p>That is exactly how Verus works: Assess, Analyze, Implement, Manage. One workflow first, proven, then the next. This page covers what that looks like, and the 30-minute review that identifies where to start in your business.</p>
      <p class="source-note">Source: "The GenAI Divide: State of AI in Business 2025," MIT NANDA initiative. Link the primary report PDF before launch. Methodology has been publicly debated; keep the citation precise.</p>
    </div>
  </section>

  <!-- PAIN TRIO (mirrors live page; desktop-only on mobile) -->
  <section class="section section-sky desktop-only">
    <div class="container">
      <div class="section-head-center">
        <span class="section-eyebrow">The problem</span>
        <h2 class="section-title">Tired of copying, pasting, and chasing tasks?</h2>
        <p class="section-lede">Three costs pile up in every business still running on manual handoffs.</p>
      </div>
      <div class="pain-grid">
        <div class="pain-card">
          <span class="pain-icon">⌨️</span>
          <h3>Manual Data Entry</h3>
          <p>The same information typed into two, three, four systems. Every retype is paid time, and every retype is a chance for an error that costs more time downstream.</p>
        </div>
        <div class="pain-card">
          <span class="pain-icon">🔌</span>
          <h3>Disconnected Apps</h3>
          <p>Email, CRM, accounting, and operations tools that each work fine alone and never talk to each other. People become the integration layer.</p>
        </div>
        <div class="pain-card">
          <span class="pain-icon">📈</span>
          <h3>Rising Labor Costs</h3>
          <p>Hiring more people to push the same paper faster. Growth that should feel like momentum starts feeling like drag.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- THE TURN (desktop-only on mobile) -->
  <section class="turn-band desktop-only">
    <div class="container">
      <blockquote>Your apps already hold the data. Your people already know the process. <span>Nobody connected the two. That is the whole job.</span></blockquote>
    </div>
  </section>

  <!-- HOW IT WORKS (mirrors live page steps) -->
  <section class="section section-sky">
    <div class="container">
      <div class="section-head-center">
        <span class="section-eyebrow">How it works</span>
        <h2 class="section-title">Connect. Trigger. Let the AI handle the rest.</h2>
        <p class="pillar-tagline">Built on A.A.I.M.: Assess. Analyze. Implement. Manage.</p>
      </div>
      <div class="pillar-grid" style="margin-top: 56px;">
        <div class="pillar-card">
          <div class="pillar-num">1</div>
          <h3>Connect Your Apps</h3>
          <p>Email, CRM, accounting, ERP, Google Workspace, Microsoft 365, and 1000+ other tools linked into one connected system. Your existing apps, not a rip-and-replace.</p>
        </div>
        <div class="pillar-card">
          <div class="pillar-num">2</div>
          <h3>Trigger Smart Actions</h3>
          <p>Create tasks, send notifications, update records, generate reports, and route approvals automatically, the moment the triggering event happens.</p>
        </div>
        <div class="pillar-card">
          <div class="pillar-num">3</div>
          <h3>AI-Powered Intelligence</h3>
          <p>Rules that adapt to how your business actually runs, without complex coding. The automations get smarter as your processes evolve.</p>
        </div>
      </div>

      <div class="gov-note">
        <div class="gov-mark">◆</div>
        <p><strong>Built by a security firm, not a gadget shop.</strong> Verus has run IT and cybersecurity for mid-sized companies since 2002. Every automation we build is governed: access-controlled, logged, and documented, so the productivity never comes at the cost of a compliance problem.</p>
      </div>
    </div>
  </section>

  <!-- USE CASES (the four chains from the live page; desktop-only on mobile) -->
  <section class="section desktop-only">
    <div class="container">
      <div class="section-head-center">
        <span class="section-eyebrow">What this looks like</span>
        <h2 class="section-title">Real workflows, start to finish.</h2>
        <p class="section-lede">Four of the most common chains we automate. Yours will look like your business, not a template.</p>
      </div>
      <div class="chain-grid">
        <div class="chain-card">
          <h3>Sales</h3>
          <div class="chain-flow">
            <span class="chain-step">Lead comes in</span><span class="chain-arrow">→</span>
            <span class="chain-step">Opportunity created</span><span class="chain-arrow">→</span>
            <span class="chain-step">Follow-up email sent</span><span class="chain-arrow">→</span>
            <span class="chain-step">Appointment booked</span>
          </div>
          <p class="chain-note">No lead sits in an inbox overnight. No rep retypes a form into the CRM.</p>
        </div>
        <div class="chain-card">
          <h3>Accounting</h3>
          <div class="chain-flow">
            <span class="chain-step">Invoice created</span><span class="chain-arrow">→</span>
            <span class="chain-step">Books updated</span><span class="chain-arrow">→</span>
            <span class="chain-step">Approval routed</span><span class="chain-arrow">→</span>
            <span class="chain-step">Payment reminder sent</span>
          </div>
          <p class="chain-note">The invoice chases itself. Your controller stops being a human cron job.</p>
        </div>
        <div class="chain-card">
          <h3>Customer Service</h3>
          <div class="chain-flow">
            <span class="chain-step">Ticket logged</span><span class="chain-arrow">→</span>
            <span class="chain-step">Right team notified</span><span class="chain-arrow">→</span>
            <span class="chain-step">SLA tracked</span>
          </div>
          <p class="chain-note">Nothing falls through the cracks between the inbox and the queue.</p>
        </div>
        <div class="chain-card">
          <h3>Inventory</h3>
          <div class="chain-flow">
            <span class="chain-step">Low-stock alert</span><span class="chain-arrow">→</span>
            <span class="chain-step">PO generated</span><span class="chain-arrow">→</span>
            <span class="chain-step">Supplier notified</span><span class="chain-arrow">→</span>
            <span class="chain-step">Restocked</span>
          </div>
          <p class="chain-note">The reorder happens while your ops manager is doing actual ops.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- STAT BAND (safe claims) -->
  <section class="stat-band">
    <div class="container">
      <h2>One Partner for AI, Cybersecurity &amp; IT.</h2>
      <div class="stat-grid">
        <div>
          <div class="stat-num">2002</div>
          <div class="stat-label">Founded</div>
        </div>
        <div>
          <div class="stat-num">24/7</div>
          <div class="stat-label">Monitoring &amp; Support</div>
        </div>
        <div>
          <div class="stat-num">A.A.I.M.</div>
          <div class="stat-label">Assess. Analyze. Implement. Manage.</div>
        </div>
        <div>
          <div class="stat-num">Nationwide</div>
          <div class="stat-label">Serving Clients Coast to Coast</div>
        </div>
      </div>
      <p class="stat-footnote"><strong>Senior-led since 2002.</strong> Automation with governance and security built in from day one, because the firm that builds your workflows also secures them.</p>
    </div>
  </section>

  <!-- THE REVIEW: agenda / attendees / leave-with (desktop-only on mobile; the hero bullets carry the agenda there) -->
  <section class="section desktop-only">
    <div class="container">
      <div class="section-head-center">
        <span class="section-eyebrow">What happens on the call</span>
        <h2 class="section-title">The 30-Minute AI Workflow Review.</h2>
        <p class="section-lede">Not a demo. Not a pitch deck. A working session with a senior consultant, following the Assess step of our A.A.I.M. method.</p>
      </div>
      <div class="review-grid">
        <div class="review-card">
          <h3>The agenda</h3>
          <ul>
            <li>Map your three highest-volume manual workflows and what each costs in hours</li>
            <li>Rank which one pays back first if automated, and roughly what that is worth</li>
            <li>Sketch how it runs on your existing apps, governed and documented</li>
          </ul>
        </div>
        <div class="review-card">
          <h3>Who should attend</h3>
          <ul>
            <li>The leader who owns the operational pain: owner, CEO, COO, or CFO</li>
            <li>Whoever runs the process day to day, because they know where the real steps are</li>
            <li>Your IT lead or IT partner contact, if you have one</li>
          </ul>
        </div>
        <div class="review-card">
          <h3>What you leave with</h3>
          <ul>
            <li>A one-page automation plan, in plain English, yours to keep</li>
            <li>A straight answer on which workflow to automate first, and whether it is worth it</li>
            <li>No obligation. If automation is not your best next dollar, the plan says so</li>
          </ul>
        </div>
      </div>
      <div class="stack-cta" style="margin-top: 36px;">
        <span class="cue">▼ Pick a time that works. The calendar is at the top of this page.</span>
        <a href="#book" class="btn btn-primary btn-lg">Book My Workflow Review</a>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS: verbatim excerpts from veruscloudsecure.com/client-resources/testimonials/.
       Attributions match how Verus publishes them (title + company type, no personal names).
       Full versions live on that page; swap in longer quotes any time. -->
  <section class="section section-sky">
    <div class="container">
      <div class="section-head-center">
        <span class="section-eyebrow">Client voices</span>
        <h2 class="section-title">What clients say about working with Verus.</h2>
      </div>
      <div class="testi-grid">
        <div class="testi-card">
          <div class="testi-mark">&ldquo;</div>
          <p class="testi-quote">Verus's network migration support streamlined our operations, cutting processing times by 30%.</p>
          <p class="testi-attr">CFO, RIA</p>
        </div>
        <div class="testi-card">
          <div class="testi-mark">&ldquo;</div>
          <p class="testi-quote">Verus is dedicated to our cybersecurity needs. Their team has provided exceptional IT support.</p>
          <p class="testi-attr">Executive Director, Senior Living Community</p>
        </div>
        <div class="testi-card">
          <div class="testi-mark">&ldquo;</div>
          <p class="testi-quote">Due to a lack of trust in our previous provider and out of touch skillset, we chose to switch to Verus.</p>
          <p class="testi-attr">Director of IT, Law Firm</p>
        </div>
      </div>
    </div>
  </section>

  <!-- MOBILE EXPANDER: reveals the desktop-only sections for phone readers who want the detail -->
  <div class="mobile-expander">
    <button type="button">Read the full breakdown ▾</button>
  </div>

  <!-- DELIVERABLES (desktop-only on mobile) -->
  <section class="section desktop-only">
    <div class="container">
      <div class="section-head-center">
        <span class="section-eyebrow">If we work together</span>
        <h2 class="section-title">Named artifacts, not vibes.</h2>
        <p class="section-lede">A full engagement produces documents and working automations you keep, not a subscription you rent.</p>
      </div>
      <div class="deliv-grid">
        <div class="deliv-item"><h3>Workflow opportunity map</h3><p>Every high-volume manual process in scope, documented with steps, owners, hours, and automation potential, ranked by payback.</p></div>
        <div class="deliv-item"><h3>Working automations</h3><p>The chains themselves, built on your existing apps, tested against your real data, and switched on one at a time.</p></div>
        <div class="deliv-item"><h3>Runbooks and documentation</h3><p>Plain-English documentation of what each automation does, what triggers it, and what to do when an app changes.</p></div>
        <div class="deliv-item"><h3>Governance and access controls</h3><p>Who can change what, logged and reviewable. Automations touching financial or client data get the security treatment by default.</p></div>
        <div class="deliv-item"><h3>Team training</h3><p>Your people learn to live with, monitor, and request automations, so the system grows instead of gathering dust.</p></div>
        <div class="deliv-item"><h3>Monthly reporting and review</h3><p>What ran, what saved time, what broke and got fixed, and what to automate next, reviewed with you on a regular cadence.</p></div>
      </div>
    </div>
  </section>

  <!-- FIT (desktop-only on mobile) -->
  <section class="section section-sky desktop-only">
    <div class="container">
      <div class="section-head-center">
        <span class="section-eyebrow">Fit check</span>
        <h2 class="section-title">This works best for some companies. Honestly, not all.</h2>
      </div>
      <div class="fit-grid">
        <div class="fit-card for">
          <h3>A strong fit if you are</h3>
          <ul>
            <li>A mid-sized company with at least one high-volume, repetitive workflow</li>
            <li>Running real systems already: a CRM, accounting software, operational tools</li>
            <li>Led by someone accountable for operational cost who will attend the review</li>
            <li>Wanting automation that is governed and documented, not a tangle of scripts one employee understands</li>
            <li>Willing to give a partner real access to how your processes actually work</li>
          </ul>
        </div>
        <div class="fit-card notfor">
          <h3>Probably not a fit if you want</h3>
          <ul>
            <li>A $30/month tool subscription and a YouTube tutorial</li>
            <li>Automation of a process nobody has ever written down or agreed on</li>
            <li>Headcount reduction promised before a single workflow is mapped</li>
            <li>A vendor who says yes to automating everything at once</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ (desktop-only on mobile) -->
  <section class="section desktop-only">
    <div class="container">
      <div class="section-head-center">
        <span class="section-eyebrow">Fair questions</span>
        <h2 class="section-title">Asked by every serious buyer.</h2>
      </div>
      <div class="faq-wrap">
        <div class="faq-item">
          <button class="faq-q">Do we have to replace the systems we already use?<span class="faq-q-icon"></span></button>
          <div class="faq-a"><p>No. The whole approach is connecting what you already run: email, CRM, accounting, ERP, Google Workspace, Microsoft 365, and 1000+ other tools. Automation sits between your systems; it does not replace them. A rip-and-replace project is a different engagement, and usually an unnecessary one.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">Isn't this just Zapier? Why not do it ourselves?<span class="faq-q-icon"></span></button>
          <div class="faq-a"><p>The tools are a fraction of the outcome. The rest is mapping the workflow correctly before building, error handling when an app changes or a record is malformed, governance over who can change what, and someone accountable when a chain breaks at month four. DIY automation works until the person who built it leaves. If you already run good tools, we build on them rather than making you rebuy.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">Will this replace our staff?<span class="faq-q-icon"></span></button>
          <div class="faq-a"><p>The honest pattern we see is capacity, not replacement: the same team handles more volume, and people stop spending their week on retyping and chasing. What you do with the recovered hours is a leadership decision, not a software feature. We will not promise headcount reduction before a workflow is even mapped.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">What happens when one of our apps updates and breaks a workflow?<span class="faq-q-icon"></span></button>
          <div class="faq-a"><p>That is what the Manage step of A.A.I.M. exists for: monitoring, error alerts, and a team that fixes broken chains as part of the engagement, not as a new ticket with a new invoice. Automations that nobody maintains are how companies end up distrusting automation.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">Is our data safe inside these automations?<span class="faq-q-icon"></span></button>
          <div class="faq-a"><p>This is where who builds it matters. Verus is a cybersecurity and IT firm first: automations touching financial or client data get access controls, logging, and documentation by default. If a workflow would move regulated data somewhere it should not go, we flag it in the design stage, not after an auditor does. Data-handling specifics are confirmed during scoping, in writing.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">Do we need technical staff to run this?<span class="faq-q-icon"></span></button>
          <div class="faq-a"><p>No. The automations are built without complex coding on your side, documented in plain English, and your team is trained to live with them. Companies with no internal IT run these engagements routinely; that is a large part of why they hire a partner instead of a platform.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">How fast until the first automation is live?<span class="faq-q-icon"></span></button>
          <div class="faq-a"><p>It depends on the workflow chosen and the apps involved, which is exactly what the review scopes. The approach is deliberately one workflow first, proven, then expand, so the first win is sized to arrive quickly rather than after a six-month platform project. You get a specific timeline in the one-page plan, in writing.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">How is this priced?<span class="faq-q-icon"></span></button>
          <div class="faq-a"><p>The Workflow Review is free and fixed scope. Engagements are scoped from the review: typically a project fee for the initial buildout and a flat monthly fee for the Manage layer, defined in writing before work starts.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- OFFER: COMPARISON (desktop-only on mobile; the table is a poor fit for phone widths) -->
  <section class="offer-section desktop-only">
    <div class="container">
      <div class="section-head-center">
        <span class="section-eyebrow">The choice</span>
        <h2 class="section-title">Start with a map, not a platform subscription.</h2>
        <p class="section-lede">Keep doing it manually, buy tools and figure it out, or have it built, governed, and maintained.</p>
      </div>
      <div class="stack-card">
        <h3>Here is what you are choosing between:</h3>
        <p class="stack-sub">Row by row, where each path leaves you.</p>
        <!--
          COMPARATIVE CLAIMS: "DIY Tools" is deliberately generic (self-serve automation
          platforms). Never name a competitor; soften any legally flagged cell to "Varies".
        -->
        <div class="compare-wrap">
          <table class="compare-table">
            <tr>
              <th></th>
              <th class="col-verus">Verus</th>
              <th class="col-others">DIY Tools</th>
              <th class="col-none">Manual Status Quo</th>
            </tr>
            <tr>
              <td>Workflow mapping by consultants<span>Payback-ranked plan before anything is built</span></td>
              <td class="col-verus"><span class="mark-yes">✓ Included</span></td>
              <td><span class="mark-no">✕ You guess</span></td>
              <td><span class="mark-no">✕</span></td>
            </tr>
            <tr>
              <td>Built on your existing apps<span>Email, CRM, accounting, ERP, 1000+ tools</span></td>
              <td class="col-verus"><span class="mark-yes">✓ Included</span></td>
              <td><span class="mark-varies">Varies</span></td>
              <td><span class="mark-no">✕</span></td>
            </tr>
            <tr>
              <td>Error handling and maintenance<span>Someone accountable when an app update breaks a chain</span></td>
              <td class="col-verus"><span class="mark-yes">✓ Included</span></td>
              <td><span class="mark-no">✕ You maintain</span></td>
              <td><span class="mark-no">✕</span></td>
            </tr>
            <tr>
              <td>Security and governance built in<span>Access controls, logging, documentation, from a security firm</span></td>
              <td class="col-verus"><span class="mark-yes">✓ Included</span></td>
              <td><span class="mark-varies">Rarely</span></td>
              <td><span class="mark-no">✕</span></td>
            </tr>
            <tr>
              <td>Plain-English runbooks yours to keep<span>No single point of failure when someone leaves</span></td>
              <td class="col-verus"><span class="mark-yes">✓ Included</span></td>
              <td><span class="mark-varies">Rarely</span></td>
              <td><span class="mark-no">✕</span></td>
            </tr>
            <tr>
              <td>Team training and ongoing review<span>Monthly reporting on what ran and what to automate next</span></td>
              <td class="col-verus"><span class="mark-yes">✓ Included</span></td>
              <td><span class="mark-no">✕</span></td>
              <td><span class="mark-no">✕</span></td>
            </tr>
            <tr>
              <td>One partner for AI, IT, and security<span>The firm that automates your workflows also secures them</span></td>
              <td class="col-verus"><span class="mark-yes">✓ Included</span></td>
              <td><span class="mark-no">✕</span></td>
              <td><span class="mark-no">✕</span></td>
            </tr>
            <tr>
              <td>30-minute Workflow Review before any contract<span>Senior consultant, one-page plan, yours to keep</span></td>
              <td class="col-verus"><span class="mark-yes">✓ Free</span></td>
              <td><span class="mark-no">✕</span></td>
              <td><span class="mark-no">✕</span></td>
            </tr>
          </table>
        </div>
        <p class="stack-terms">The Workflow Review is free, fixed scope, and carries no obligation. The one-page automation plan is yours regardless of whether an engagement follows.</p>
        <div class="stack-cta">
          <span class="cue">▼ 30 minutes with a senior consultant. Pick your time.</span>
          <a href="#book" class="btn btn-primary btn-lg">Book My Workflow Review</a>
        </div>
      </div>
    </div>
  </section>

  <!-- BEFORE YOU GO (desktop-only on mobile) -->
  <section class="letter-section desktop-only">
    <div class="container">
      <div class="ps-block">
        <p><strong>Before you go, two things.</strong></p>
        <p>Not ready to talk to anyone? Take the 5-minute <a href="<?php echo esc_url( verus_assessment_url() ); ?>">AI Maturity Assessment</a> and get a scored report on where your company sits on AI use, with a first-year value estimate. No call required.</p>
        <p>And if you take one action from this page without contacting us, make it this: ask your team which single piece of information they retype most often between two systems. That answer is almost always where automation pays back first.</p>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="final-cta">
    <div class="container">
      <h2>Stop being the glue between your own apps.</h2>
      <p>Book the free 30-minute AI Workflow Review. One page of findings, yours to keep.</p>
      <div class="final-cta-actions">
        <a href="#book" class="btn btn-primary btn-lg">Book My Workflow Review</a>
        <a href="tel:+18009583787" class="btn btn-ghost btn-lg">Call (800) 958-3787</a>
      </div>
    </div>
  </section>

<!-- STICKY MOBILE CTA -->
  <div class="sticky-cta">
    <a href="#book" class="btn btn-primary btn-block">Book My Free Workflow Review</a>
  </div>
</div>
<?php
get_footer();
