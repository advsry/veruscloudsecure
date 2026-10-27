<?php
/**
 * Template Name: Private AI Governance Calendly (test)
 * Description: Test URL for the Private AI Governance Calendly landing. Slug: private-ai-governance-test. Does not replace ai-services/private-ai-governance.
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
<div class="v-lp" data-booking-page="private-ai-governance">
<!-- HERO: copy left, Calendly right -->
  <section class="hero">
    <div class="container hero-grid">
      <div>
        <span class="hero-prehead">For leaders responsible for security at mid-sized companies</span>
        <h1>Your Team Already Uses AI.<br><span class="hl-box">Can You Prove It's Safe?</span></h1>
        <p class="hero-sub">
          Verus builds your <strong>Private AI Governance</strong> solution: complete protection for your company data while your team gets powerful, compliant AI tools. It starts with a <strong>30-minute Private AI Risk Review</strong> with a senior consultant.
        </p>
        <ul class="hero-agenda">
          <li><strong>Which AI tools your team is likely using today,</strong> and where that data goes</li>
          <li><strong>Where that creates compliance and cyber-insurance exposure</strong> for your industry</li>
          <li><strong>What a private, governed setup looks like,</strong> so people keep using AI safely</li>
        </ul>
        <p class="hero-cue">▸ Fixed scope. No obligation. You leave with a one-page action plan either way.</p>
      </div>

      <!-- BOOKING CARD: inline Calendly embed -->
      <div class="book-card" id="book">
        <span class="book-ribbon">Free · 30 Minutes</span>
        <h2>Book Your Private AI Risk Review</h2>
        <p class="book-sub">Pick a time with a senior Verus consultant. Not a sales rep reading a script.</p>
        <!-- Calendly event URL sourced from the April 2026 Verus ads build (sitelink destination)
             and the account link reconfirmed Oct 2026. Load this page once before launch to
             confirm the event still resolves. Qualifying questions live inside the Calendly event type. -->
        <?php verus_the_calendly_embed(); ?>
        <p class="book-micro">Your information stays confidential. We never share, sell, or market to your list.</p>
      </div>
    </div>
  </section>

  <!-- BADGE ROW (mirrors live site) -->
  <div class="badge-row">
    <div class="container">
      <div class="badge-grid">
        <div class="badge-card"><span>🚫</span>Zero Data Leakage</div>
        <div class="badge-card"><span>🔒</span>100% Private</div>
        <div class="badge-card"><span>✓</span>Full Compliance &amp; Governance</div>
      </div>
    </div>
  </div>

  <!-- THE LEAD (desktop-only on mobile) -->
  <section class="section desktop-only">
    <div class="container prose-col">
      <p><strong>Three years ago, a phishing email had tells.</strong> Bad grammar. Clumsy urgency. A sender address one letter wrong. Your team learned to spot them, and for a while, that was enough. Then generative AI erased the tells. Flawless, personalized lures at scale. Cloned voices requesting wire transfers. Automated tools mapping your weaknesses around the clock. <span class="hl">The cost of a convincing attack collapsed.</span></p>
      <p>And there is a second exposure, one that arrived without a purchase order: every time your team uses ChatGPT, Copilot, or any public AI tool, sensitive company data can leave your control. MIT's NANDA initiative reported in 2025 that roughly 95 percent of enterprise AI pilots delivered no measurable P&amp;L impact, while employees at the overwhelming majority of surveyed firms used personal AI tools regardless of policy. Compliance teams are worried. Legal is concerned. Most cyber policies were not written with these tools in mind, and the "insurance gap" for AI usage is growing every day.</p>
      <p>You are being squeezed from both sides: the attacks got smarter, and your own AI usage got riskier. This page covers how Verus closes both, and the 30-minute review that maps where you stand.</p>
      <p class="source-note">Source: "The GenAI Divide: State of AI in Business 2025," MIT NANDA initiative. Link the primary report PDF before launch and verify the shadow-AI figure against it. Methodology has been publicly debated; keep the citation precise.</p>
    </div>
  </section>

  <!-- FACTS: ATTACKER SIDE (desktop-only on mobile) -->
  <section class="section section-sky desktop-only">
    <div class="container">
      <div class="section-head-center">
        <span class="section-eyebrow">Threat No. 1</span>
        <h2 class="section-title">Attackers have AI now. Here are the facts.</h2>
      </div>
      <div class="threat-grid">
        <div class="threat-card">
          <h3>Machine-written phishing</h3>
          <p>Individualized lures at scale: correct names, real projects, your vendors' tone. Filters tuned to bad grammar miss them.</p>
        </div>
        <div class="threat-card">
          <h3>Voice cloning &amp; wire fraud</h3>
          <p>Minutes of public audio can imitate an executive on a call. The ask is always the same: a wire transfer or a banking change.</p>
        </div>
        <div class="threat-card">
          <h3>Automated reconnaissance</h3>
          <p>Continuous scans of exposed systems, leaked credentials, and public employee data. A soft perimeter selects itself as a target.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FACTS: YOUR OWN AI USE (desktop-only on mobile) -->
  <section class="section desktop-only">
    <div class="container">
      <div class="section-head-center">
        <span class="section-eyebrow">Threat No. 2</span>
        <h2 class="section-title">Public AI is putting your company at risk.</h2>
        <p class="section-lede">Every time your team uses a public AI tool, three things can go wrong.</p>
      </div>
      <div class="risk-grid">
        <div class="risk-card">
          <span class="risk-icon">📤</span>
          <h3>Data Leakage</h3>
          <p>Sensitive files and customer data sent to third-party servers with unknown retention and training practices.</p>
        </div>
        <div class="risk-card">
          <span class="risk-icon">⚖️</span>
          <h3>Compliance Risks</h3>
          <p>GDPR, HIPAA, SOC 2, and industry regulations violated by ungoverned AI usage nobody signed off on.</p>
        </div>
        <div class="risk-card">
          <span class="risk-icon">🕳️</span>
          <h3>No Visibility</h3>
          <p>No audit trail and no governance controls over AI usage. If an auditor or insurer asks, there is no answer to give.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- THE TURN (desktop-only on mobile) -->
  <section class="turn-band desktop-only">
    <div class="container">
      <blockquote>You are exposed from two directions: the AI attackers use, and the AI your team already uses. <span>One partner closes both.</span></blockquote>
    </div>
  </section>

  <!-- SOLUTION: THREE PILLARS -->
  <section class="section section-sky">
    <div class="container">
      <div class="section-head-center">
        <span class="section-eyebrow">The solution</span>
        <h2 class="section-title">Verus delivers true Private AI Governance.</h2>
        <p class="pillar-tagline">Your data. Your rules. Your secure AI environment.</p>
      </div>
      <div class="pillar-grid" style="margin-top: 56px;">
        <div class="pillar-card">
          <div class="pillar-num">1</div>
          <h3>Private AI Environment</h3>
          <p>Fully isolated AI instances hosted in your secure cloud or on-premise environment. Your data never trains someone else's model.</p>
        </div>
        <div class="pillar-card">
          <div class="pillar-num">2</div>
          <h3>Enterprise Governance Controls</h3>
          <p>Custom policies, approval workflows, audit logs, and usage restrictions. Every AI interaction is logged, classified, and reviewable.</p>
        </div>
        <div class="pillar-card">
          <div class="pillar-num">3</div>
          <h3>Secure &amp; Compliant AI</h3>
          <p>Works the way your team already expects AI to work, but 100 percent private and fully compliant with your security standards.</p>
        </div>
      </div>

      <div class="gov-note" style="margin-top: 48px;">
        <div class="gov-mark">◆</div>
        <p><strong>And the attacker side is covered by the same engagement:</strong> cybersecurity compliance, multi-factor authentication, phishing exercises, penetration testing, risk assessment, and payment-verification protocols that assume voices can be faked. Defense with AI and defense against AI, under one roof.</p>
      </div>
    </div>
  </section>

  <!-- STAT BAND (safe claims from the current live site) -->
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
      <p class="stat-footnote"><strong>Senior-led since 2002.</strong> Powerful AI without sacrificing security or compliance. Your company secrets stay secret.</p>
    </div>
  </section>

  <!-- THE REVIEW: agenda / attendees / leave-with (desktop-only on mobile; the hero bullets carry the agenda there) -->
  <section class="section desktop-only">
    <div class="container">
      <div class="section-head-center">
        <span class="section-eyebrow">What happens on the call</span>
        <h2 class="section-title">The 30-Minute Private AI Risk Review.</h2>
        <p class="section-lede">Not a demo. Not a pitch deck. A working session with a senior consultant, following the Assess step of our A.A.I.M. method.</p>
      </div>
      <div class="review-grid">
        <div class="review-card">
          <h3>The agenda</h3>
          <ul>
            <li>Map which AI tools your team is likely using today, and where that data goes</li>
            <li>Identify where that creates regulatory and cyber-insurance exposure for your industry</li>
            <li>Sketch what a private, governed AI setup looks like for your environment</li>
          </ul>
        </div>
        <div class="review-card">
          <h3>Who should attend</h3>
          <ul>
            <li>The leader accountable for the risk: owner, CEO, COO, or CFO</li>
            <li>Your IT lead or IT partner contact, if you have one</li>
            <li>Compliance or legal, optional but useful in regulated industries</li>
          </ul>
        </div>
        <div class="review-card">
          <h3>What you leave with</h3>
          <ul>
            <li>A one-page action plan, in plain English, yours to keep</li>
            <li>A straight answer on whether your exposure justifies an engagement</li>
            <li>No obligation. If the plan says you are fine, that is the answer you get</li>
          </ul>
        </div>
      </div>
      <div class="stack-cta" style="margin-top: 36px;">
        <span class="cue">▼ Pick a time that works. The calendar is at the top of this page.</span>
        <a href="#book" class="btn btn-primary btn-lg">Book My Risk Review</a>
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
          <p class="testi-quote">Our pipeline operations demand ironclad cybersecurity. Verus provided a tailored cloud security solution.</p>
          <p class="testi-attr">CTO, Energy Pipeline Solutions</p>
        </div>
        <div class="testi-card">
          <div class="testi-mark">&ldquo;</div>
          <p class="testi-quote">Due to a lack of trust in our previous provider and out of touch skillset, we chose to switch to Verus.</p>
          <p class="testi-attr">Director of IT, Law Firm</p>
        </div>
        <div class="testi-card">
          <div class="testi-mark">&ldquo;</div>
          <p class="testi-quote">Verus is dedicated to our cybersecurity needs. Their team has provided exceptional IT support.</p>
          <p class="testi-attr">Executive Director, Senior Living Community</p>
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
        <p class="section-lede">A full engagement produces documents you can hold, show an auditor, or hand to your insurance carrier.</p>
      </div>
      <div class="deliv-grid">
        <div class="deliv-item"><h3>Exposure findings report</h3><p>Written assessment across identity, email, endpoint, and AI usage, with prioritized fixes in plain English.</p></div>
        <div class="deliv-item"><h3>Private AI environment plan</h3><p>The architecture for your isolated AI instance: where it runs, what it connects to, and how your data stays yours.</p></div>
        <div class="deliv-item"><h3>Governance controls &amp; audit trail</h3><p>Policies, approval workflows, usage restrictions, and logging configured so every AI interaction is reviewable.</p></div>
        <div class="deliv-item"><h3>AI acceptable-use policy</h3><p>A workable policy for employee AI use, matched with controls, so shadow AI becomes governed practice instead of a blind spot.</p></div>
        <div class="deliv-item"><h3>Payment verification protocol</h3><p>An out-of-band callback procedure for wires and banking changes, built on the assumption that voices and emails can be faked.</p></div>
        <div class="deliv-item"><h3>Training, reporting, and review</h3><p>Awareness training with AI-era lures, monthly reporting on what was found and fixed, and a quarterly review with your team.</p></div>
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
            <li>A mid-sized company with real data worth protecting</li>
            <li>In a regulated or trust-dependent industry: healthcare, finance, insurance, legal, manufacturing</li>
            <li>Aware your team already uses AI and wanting that governed, not banned into the shadows</li>
            <li>Looking for accountable humans plus modern tooling, under one roof</li>
            <li>Willing to grant the access a security partner genuinely needs</li>
          </ul>
        </div>
        <div class="fit-card notfor">
          <h3>Probably not a fit if you want</h3>
          <ul>
            <li>A $99 tool subscription and no operational relationship</li>
            <li>A silver bullet that removes the need for any internal attention</li>
            <li>Security theater for a compliance checkbox with no intent to fix findings</li>
            <li>A vendor who will promise that nothing will ever get through</li>
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
          <button class="faq-q">What happens on the 30-minute review, honestly?<span class="faq-q-icon"></span></button>
          <div class="faq-a"><p>A senior consultant walks the three agenda items above with you: likely AI usage and data flow, where that creates exposure for your industry, and what a governed setup would look like. You leave with a one-page action plan whether or not you ever work with us. If your exposure is low, the plan says so.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">Can our team still use AI tools the way they do now?<span class="faq-q-icon"></span></button>
          <div class="faq-a"><p>That is the point of private AI governance: your team keeps powerful AI tools that work the way they expect, inside an environment that is isolated, policy-controlled, and fully logged. Usage becomes governed instead of forbidden, which is the only version of an AI policy employees actually follow.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">Where does our data go, and what does the AI train on?<span class="faq-q-icon"></span></button>
          <div class="faq-a"><p>You get this answer in writing before any engagement: where your AI instance runs, where data is processed and stored, retention periods, and what your data is never used for. In a private environment, your data does not train public models. Specific platform details are confirmed during scoping, in writing.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">We already have an AI policy. Why would we need this?<span class="faq-q-icon"></span></button>
          <div class="faq-a"><p>A policy is step one. The gap is usually visibility: can you see whether people follow it? Governance adds the controls and the audit trail, so when an auditor, insurer, or client asks how AI is managed in your business, you have a report instead of a document nobody can verify.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">We banned ChatGPT. Doesn't that solve it?<span class="faq-q-icon"></span></button>
          <div class="faq-a"><p>Most bans push usage onto personal phones and personal accounts, where you have even less visibility than before. The practical fix is a private, governed alternative that is as easy to use as the tool you banned. People follow the path of least resistance; governance works when the safe path is also the easy one.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">Is this only for large enterprises?<span class="faq-q-icon"></span></button>
          <div class="faq-a"><p>No. Mid-sized companies face the same AI-scaled attacks and the same compliance rules with a fraction of the internal staff. This engagement exists so a mid-sized company gets enterprise-grade AI governance and security without building a department.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">What happens if we stop working with Verus?<span class="faq-q-icon"></span></button>
          <div class="faq-a"><p>You keep the documentation: findings reports, policies, governance configurations, and runbooks. Offboarding follows a written handover so your next provider or internal team inherits an organized environment. We would rather earn renewals than engineer lock-in.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">How is this priced?<span class="faq-q-icon"></span></button>
          <div class="faq-a"><p>The Risk Review is free and fixed scope. Engagements are flat monthly pricing scoped to your environment and user count, defined in writing; project work, like the initial private AI environment buildout, is quoted separately. Exact figures are set during scoping.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- OFFER: COMPARISON (desktop-only on mobile; the table is a poor fit for phone widths) -->
  <section class="offer-section desktop-only">
    <div class="container">
      <div class="section-head-center">
        <span class="section-eyebrow">The choice</span>
        <h2 class="section-title">Start with evidence, not a contract.</h2>
        <p class="section-lede">Ungoverned public AI, a tool-only vendor, or governed AI with an accountable team.</p>
      </div>
      <div class="stack-card">
        <h3>Here is what you are choosing between:</h3>
        <p class="stack-sub">Row by row, where each path leaves you.</p>
        <!--
          COMPARATIVE CLAIMS: "Others" is deliberately generic (typical tool-only vendors).
          Never name a competitor; soften any legally flagged row's "Others" cell to "Varies".
        -->
        <div class="compare-wrap">
          <table class="compare-table">
            <tr>
              <th></th>
              <th class="col-verus">Verus</th>
              <th class="col-others">Others</th>
              <th class="col-none">No Protection</th>
            </tr>
            <tr>
              <td>Private AI environment<span>Isolated instances; your data never trains public models</span></td>
              <td class="col-verus"><span class="mark-yes">✓ Included</span></td>
              <td><span class="mark-varies">Varies</span></td>
              <td><span class="mark-no">✕</span></td>
            </tr>
            <tr>
              <td>Audit trail of every AI interaction<span>Logged, classified, reviewable</span></td>
              <td class="col-verus"><span class="mark-yes">✓ Included</span></td>
              <td><span class="mark-varies">Varies</span></td>
              <td><span class="mark-no">✕</span></td>
            </tr>
            <tr>
              <td>Governance policies &amp; approval workflows<span>Who can use AI for what, enforced</span></td>
              <td class="col-verus"><span class="mark-yes">✓ Included</span></td>
              <td><span class="mark-varies">Varies</span></td>
              <td><span class="mark-no">✕</span></td>
            </tr>
            <tr>
              <td>Compliance alignment<span>GDPR, HIPAA, SOC 2, industry rules</span></td>
              <td class="col-verus"><span class="mark-yes">✓ Included</span></td>
              <td><span class="mark-varies">Varies</span></td>
              <td><span class="mark-no">✕</span></td>
            </tr>
            <tr>
              <td>Defense against AI-powered attacks<span>Phishing training, MFA, payment verification protocol</span></td>
              <td class="col-verus"><span class="mark-yes">✓ Included</span></td>
              <td><span class="mark-varies">Tool only</span></td>
              <td><span class="mark-no">✕</span></td>
            </tr>
            <tr>
              <td>Accountable humans, one senior-led team<span>Named escalation path, operating since 2002</span></td>
              <td class="col-verus"><span class="mark-yes">✓ Included</span></td>
              <td><span class="mark-varies">Rarely</span></td>
              <td><span class="mark-no">✕</span></td>
            </tr>
            <tr>
              <td>Documentation yours to keep<span>Policies, findings, and configs stay with you if you leave</span></td>
              <td class="col-verus"><span class="mark-yes">✓ Included</span></td>
              <td><span class="mark-varies">Rarely</span></td>
              <td><span class="mark-no">✕</span></td>
            </tr>
            <tr>
              <td>30-minute Risk Review before any contract<span>Senior consultant, one-page action plan, yours to keep</span></td>
              <td class="col-verus"><span class="mark-yes">✓ Free</span></td>
              <td><span class="mark-varies">Rarely</span></td>
              <td><span class="mark-no">✕</span></td>
            </tr>
          </table>
        </div>
        <p class="stack-terms">The Risk Review is free, fixed scope, and carries no obligation. The one-page action plan is yours regardless of whether an engagement follows.</p>
        <div class="stack-cta">
          <span class="cue">▼ 30 minutes with a senior consultant. Pick your time.</span>
          <a href="#book" class="btn btn-primary btn-lg">Book My Risk Review</a>
        </div>
      </div>
    </div>
  </section>

  <!-- BEFORE YOU GO (desktop-only on mobile) -->
  <section class="letter-section desktop-only">
    <div class="container">
      <div class="ps-block">
        <p><strong>Before you go, two things.</strong></p>
        <p>Not ready to talk to anyone? Take the 5-minute <a href="<?php echo esc_url( verus_assessment_url() ); ?>">AI Maturity Assessment</a> and get a scored report on where your company sits on AI use and governance. No call required.</p>
        <p>And if you take one action from this page without contacting us, make it this: put a documented callback protocol on every banking-change and wire request today. It is free, and it defeats the voice-clone attack outright.</p>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="final-cta">
    <div class="container">
      <h2>Your company secrets stay secret.</h2>
      <p>Book the free 30-minute Private AI Risk Review. One page of findings, yours to keep.</p>
      <div class="final-cta-actions">
        <a href="#book" class="btn btn-primary btn-lg">Book My Risk Review</a>
        <a href="tel:+18009583787" class="btn btn-ghost btn-lg">Call (800) 958-3787</a>
      </div>
    </div>
  </section>

<!-- STICKY MOBILE CTA -->
  <div class="sticky-cta">
    <a href="#book" class="btn btn-primary btn-block">Book My Free Risk Review</a>
  </div>
</div>
<?php
get_footer();
